#!/usr/bin/python
import os, pprint, time, shutil
pp = pprint.PrettyPrinter(indent=4)

API_VERSION='201409'

def treat_files_of_dir( path ):
    paths = {}
    entities = {}
    root_dir_cleaned = 'src'
    nb_of_files_read = 0
    nb_of_classes_read = 0
    for root, dirs, files in os.walk(path):
        for name in files:
            if name.endswith((".php")):
                nb_of_files_read += 1
                mynewhandle = open(root+'/'+name, "r")
                print "         Scanning %s/%s" % (root, name)
                file_as_a_list = []
                while True:
                    theline = mynewhandle.readline()
                    if len(theline) == 0:
                        break
                
                    if '->DoRequireOnce($serviceName);' in theline:
                        theline = '//'+theline
                    if "@param" in theline:
                        file_as_a_list.append( { 'param' : theline } )
                    elif ' * ' in theline or '* ' in theline or '/*' in theline or '*/' in theline or '//' in theline:
                        file_as_a_list.append( { 'comment' : theline } )
                    elif "require_once" in theline:
                        file_as_a_list.append( { 'use' : theline } )
                    elif "}" in theline and "{" in theline:
                        file_as_a_list.append( { '.' : theline } )
                    elif "}" in theline:
                        file_as_a_list.append( { 'closing' : theline } )
                    elif "class_exists" in theline:
                        file_as_a_list.append( { 'class_test' : theline } )
                    elif "class " in theline:
                        if "$class " in theline:
                            file_as_a_list.append( { '.' : theline } )
                        else:    
                            nb_of_classes_read += 1
                            file_as_a_list.append( { 'class' : theline } )
                            class_name_detected = theline.split( 'class ')[1].split()[0].rstrip()
                            if class_name_detected in entities.keys():
                                print "[WARNING]    %s Already defined !!!" % class_name_detected
                            entities[ class_name_detected ] = root.replace( path, '' ).replace( '/', '\\' )
                    elif "{" in theline:
                        file_as_a_list.append( { 'opening' : theline } )
                    elif theline.rstrip() == "":
                        file_as_a_list.append( { 'empty' : theline } )
                    else:
                        file_as_a_list.append( { '.' : theline } )
                # pp.pprint( file_as_a_list )
                mynewhandle.close()
                paths[ root+'$'+name.replace( '.php', '' ) ] = file_as_a_list
            else:
                print "[NON PHP FILE]   %s/%s copied to %s/%s/%s" % (root, name, root_dir_cleaned,root.replace(path, ""),name)
                if not os.path.exists( root_dir_cleaned+'/'+root.replace(path, "") ):
                    os.makedirs( root_dir_cleaned+'/'+root.replace(path, "") )
                shutil.copy2( root+'/'+name, root_dir_cleaned+'/'+root.replace(path, "")+"/"+name )

    # pp.pprint( entities )
    nb_of_files_written = 0
    for key, FaaList in paths.iteritems():
        path_file = key.split( '$' )[0].replace( path, '' )
        namespace = path_file[1:].replace( '/', '\\' ).replace( '.\\', '' )
        path_clean_file = root_dir_cleaned + path_file
        if not os.path.exists( path_clean_file ):
            os.makedirs( path_clean_file )
        class_name = key.split( '$' )[1]
        open_br = 0
        in_class = False
        extra_use = []
        header = []
        body = []
        for line_object in FaaList:
            for type_of_line, line in line_object.iteritems():
                if "param" == type_of_line:
                    object_type = line.split('@param')[1].split()[0]
                    if object_type in entities.keys():
                        useline = 'use '+entities[ object_type ]+'\\'+object_type+';\n' 
                        if useline not in extra_use:
                            extra_use.append(useline)
        for line_object in FaaList:
            for type_of_line, line in line_object.iteritems():
                if in_class:
                    if "opening" == type_of_line:
                        open_br += 1
                    if "closing" == type_of_line:
                        open_br -= 1
                    body.append( line )
                    if 0 == open_br:
                        put_extra_use = False
                        in_class = False
                        filename = path_clean_file+'/'+class_name+".php"
                        f = open( filename, "w")
                        nb_of_files_written += 1
                        print "         Writing %s" % filename
                        number_line = 1
                        consec_white_lines = 0
                        local_braces_counter = 0
                        for line_w in header:
                            if "" == line_w.rstrip():
                                if 2 > consec_white_lines:
                                    write( f, line_w, entities )
                                consec_white_lines += 1
                            else:
                                if '{' in line_w:
                                    local_braces_counter += 1
                                if '}' in line_w:
                                    local_braces_counter -= 1
                                consec_white_lines = 0
                                if 1 == number_line:
                                    line_w = line_w.rstrip()+'\n'
                                if 2 == number_line:
                                    namespace_line = 'namespace '+namespace+' ;\n\n'
                                    f.write( namespace_line )
                                    if not put_extra_use:
                                        for line_use in extra_use:
                                            if line_use not in header:
                                                f.write( line_use )
                                        put_extra_use = True
                                write( f, line_w, entities )
                            number_line += 1
                        consec_white_lines = 0
                        for line_w in body:
                            if "" == line_w.rstrip():
                                if 2 > consec_white_lines:
                                    write( f, line_w, entities )
                                consec_white_lines += 1
                            else:
                                consec_white_lines = 0
                                write( f, line_w, entities )
                        consec_white_lines = 0
                        if 0 < local_braces_counter:
                            while local_braces_counter > 0:
                                f.write( '}' )
                                local_braces_counter -= 1
                        f.write( '\n' )
                        f.write( '' )
                        f.close()
                        body = []
                elif "class_test" == type_of_line or "class" == type_of_line:
                    if "class_test" == type_of_line:
                        class_name = line.split("\"")[1]
                        open_br += 1
                    else:
                        class_name = line.split( 'class' )[1].split()[0].rstrip()
                    in_class=True
                    body.append(line)
                else:
                    if "use" == type_of_line:
                        try:
                            relative_path = line.split( "'" )[1]
                            go_up = relative_path.count( '/..' )
                            namespace_array = namespace.split( '\\' )
                            if 0 != go_up:
                                use_path = '\\'.join( namespace_array[0:len(namespace_array)-go_up] )+relative_path[3*go_up:].replace( '/', '\\' ).replace( '.php', '' )
                            else:
                                use_path = relative_path.replace( '/', '\\' ).replace( '.php', '' )
                            useline = 'use \\%s;\n' % use_path                         
                            header.append( useline )
                        except IndexError:
                            try:
                                using = line.split( '"' )[1].replace( '.php', '' ).replace( '/', '\\' )
                                header.append( 'use %s ;\n' % using )
                            except IndexError:
                                pass
                    else:    
                        header.append(line)
        header = []
    print "%s files read (%s classes), %s files Written !" % (nb_of_files_read, nb_of_classes_read, nb_of_files_written)

def write( f, line, entities ):
    particular_cases = {
            ' Exception'                                :       ' \\Exception',
            ' DOMDocument'                              :       ' \\DOMDocument',
            '(DOMDocument'                              :       '(\\DOMDocument',
            ' DOMException'                             :       ' \\DOMException',
            '(DOMException'                             :       '(\\DOMException',
            ' ReflectionClass'                          :       ' \\ReflectionClass',
            ' DOMXPath'                                 :       ' \\DOMXPath',
            '(DOMXPath'                                 :       '(\\DOMXPath',
            ' DOMNodeList'                              :       ' \\DOMNodeList',
            '(DOMNodeList'                              :       '(\\DOMNodeList',
            ' DOMNode'                                  :       ' \\DOMNode',
            '(DOMNode'                                  :       '(\\DOMNode',
            ' DOMElement'                               :       ' \\DOMElement',
            '(DOMElement'                               :       '(\\DOMElement',
            ' SoapClient\n'                             :       ' \\SoapClient\n',
            ' SoapClient.'                              :       ' \\SoapClient.',
            ' SoapClient '                              :       ' \\SoapClient ',
            ' SoapClient}'                              :       ' \\SoapClient}',
            ' SoapFault'                                :       ' \\SoapFault',
            "Create('SoapRequestHeader')"               :       "Create('"+entities[ 'SoapRequestHeader' ]+"\\SoapRequestHeader')",
            "$this->options['classmap'][$type];"        :       "'Google\\Api\\Ads\\AdWords\\"+API_VERSION+"\\\\'.$this->options['classmap'][$type];",
            ' SoapVar'                                  :       ' \\SoapVar',
            '(SoapFault'                                :       '(\\SoapFault',
            ' SoapHeader'                               :       ' \\SoapHeader',
            "= 'SimpleOAuth2Handler'"                   :       "= '"+entities[ 'SimpleOAuth2Handler' ]+"\\"+"SimpleOAuth2Handler'",
            "array('XmlUtils'"                          :       "array('"+entities[ 'XmlUtils' ]+'\\'+"XmlUtils'",
            "SoapClientFactory::$SERVER_REGEX"          :       "self::$SERVER_REGEX"
    }

    for element_to_replace in particular_cases.keys():
        if element_to_replace in line:
            line = line.replace( element_to_replace, particular_cases[ element_to_replace ] )
    f.write( line )

def list_dir( path ): 
    for root, dirs, files in os.walk(path):
        for name in files:
            print "name: %s" % name
            print "root: %s" % root
            print "path: %s" % path

treat_files_of_dir( "./non-standard-googleads-php-lib" )
