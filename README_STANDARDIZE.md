How to standardize :
=========

 * With a python custom script:
    * Get Sensiolabs php cs fixer there : http://cs.sensiolabs.org/
    * EXECUTE cs php fixer BEFORE standardizing!!! (Will give very bad results otherwise)
    * ```python standardize.py``` (For now it justs takes the src/ folder) 
    * Fix the 'use' in AdWords/Lib/AdWordsUser.php manually (2 lines) 

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

