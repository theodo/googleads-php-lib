How to standardize :
=========

 * With a python custom script:
    * EXECUTE cs php fixer BEFORE !!! (Will give very bad results otherwise)
    * ```python standardize.py``` (For now it justs takes the src/ folder) 
    * Remove the first space that is at the first line of your first file generated

 * Manually:
    * Add namespaces 
    * Remove all 'require_once's and replace by 'use'
    * Add '\' before native Exceptions, Faults, etc. that we use:
        * Exception
        * ReportDownloadException
        * DOMException
        * DOMXPath
        * DOMNode
        * DOMNodeList
        * DOMDocument
        * DOMElement
        * ReflectionClass
        * SoapHeader
        * SoapClient
        * SoapFault
        * SoapVar
    * Fix some other hidden errors : Example : ```const OAUTH2_HANDLER_CLASS = 'SimpleOAuth2Handler'``` becoming ```const OAUTH2_HANDLER_CLASS = 'Google\Api\Ads\Common\Util\SimpleOAuth2Handler'```

