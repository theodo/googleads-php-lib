<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the SharedSetService
 * service.
 *
 * PHP version 5
 *
 * Copyright 2014, Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package    Google_Api_Ads_AdWords_v201409
 * @subpackage v201409
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient ;
require_once "Google/Api/Ads/AdWords/Lib/AdWordsSoapClient.php";

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\DateRange", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class DateRange
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "DateRange";

    /**
     * @access public
     * @var string
     */
    public $min;

    /**
     * @access public
     * @var string
     */
    public $max;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($min = null, $max = null)
      {
          $this->min = $min;
          $this->max = $max;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\OrderBy", false)) {
    /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class OrderBy
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "OrderBy";

    /**
     * @access public
     * @var string
     */
    public $field;

    /**
     * @access public
     * @var tnsSortOrder
     */
    public $sortOrder;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($field = null, $sortOrder = null)
      {
          $this->field = $field;
          $this->sortOrder = $sortOrder;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\Paging", false)) {
    /**
   * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class Paging
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "Paging";

    /**
     * @access public
     * @var integer
     */
    public $startIndex;

    /**
     * @access public
     * @var integer
     */
    public $numberResults;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($startIndex = null, $numberResults = null)
      {
          $this->startIndex = $startIndex;
          $this->numberResults = $numberResults;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\Predicate", false)) {
    /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class Predicate
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "Predicate";

    /**
     * @access public
     * @var string
     */
    public $field;

    /**
     * @access public
     * @var tnsPredicateOperator
     */
    public $operator;

    /**
     * @access public
     * @var string[]
     */
    public $values;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($field = null, $operator = null, $values = null)
      {
          $this->field = $field;
          $this->operator = $operator;
          $this->values = $values;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\SharedSet", false)) {
    /**
   * <span class="constraint Selectable">This field can be selected using the value "SharedSetId".</span><span class="constraint Filterable">This field can be filtered on.</span>
   * <span class="constraint Required">This field is required and should not be {@code null} when it is contained within {@link Operator}s : SET, REMOVE.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class SharedSet
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "SharedSet";

    /**
     * @access public
     * @var integer
     */
    public $sharedSetId;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var tnsSharedSetType
     */
    public $type;

    /**
     * @access public
     * @var integer
     */
    public $memberCount;

    /**
     * @access public
     * @var integer
     */
    public $referenceCount;

    /**
     * @access public
     * @var tnsSharedSetStatus
     */
    public $status;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($sharedSetId = null, $name = null, $type = null, $memberCount = null, $referenceCount = null, $status = null)
      {
          $this->sharedSetId = $sharedSetId;
          $this->name = $name;
          $this->type = $type;
          $this->memberCount = $memberCount;
          $this->referenceCount = $referenceCount;
          $this->status = $status;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\SoapRequestHeader", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class SoapRequestHeader
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "SoapHeader";

    /**
     * @access public
     * @var string
     */
    public $clientCustomerId;

    /**
     * @access public
     * @var string
     */
    public $developerToken;

    /**
     * @access public
     * @var string
     */
    public $userAgent;

    /**
     * @access public
     * @var boolean
     */
    public $validateOnly;

    /**
     * @access public
     * @var boolean
     */
    public $partialFailure;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($clientCustomerId = null, $developerToken = null, $userAgent = null, $validateOnly = null, $partialFailure = null)
      {
          $this->clientCustomerId = $clientCustomerId;
          $this->developerToken = $developerToken;
          $this->userAgent = $userAgent;
          $this->validateOnly = $validateOnly;
          $this->partialFailure = $partialFailure;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\SoapResponseHeader", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class SoapResponseHeader
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "SoapResponseHeader";

    /**
     * @access public
     * @var string
     */
    public $requestId;

    /**
     * @access public
     * @var string
     */
    public $serviceName;

    /**
     * @access public
     * @var string
     */
    public $methodName;

    /**
     * @access public
     * @var integer
     */
    public $operations;

    /**
     * @access public
     * @var integer
     */
    public $responseTime;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($requestId = null, $serviceName = null, $methodName = null, $operations = null, $responseTime = null)
      {
          $this->requestId = $requestId;
          $this->serviceName = $serviceName;
          $this->methodName = $methodName;
          $this->operations = $operations;
          $this->responseTime = $responseTime;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\ListReturnValue", false)) {
    /**
   * Indicates that this instance is a subtype of ListReturnValue.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class ListReturnValue
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "ListReturnValue";

    /**
     * @access public
     * @var string
     */
    public $ListReturnValueType;
      private $_parameterMap = array(
      "ListReturnValue.Type" => "ListReturnValueType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
        $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (!isset($this->_parameterMap[$var])) {
            return;
        }

        return $this->{$this->_parameterMap[$var]};
    }

    /**
     * Provided for getting non-php-standard named variables
     * @return array parameter map
     */
    protected function getParameterMap()
    {
        return $this->_parameterMap;
    }

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($ListReturnValueType = null)
      {
          $this->ListReturnValueType = $ListReturnValueType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\Operation", false)) {
    /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class Operation
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "Operation";

    /**
     * @access public
     * @var tnsOperator
     */
    public $operator;

    /**
     * @access public
     * @var string
     */
    public $OperationType;
      private $_parameterMap = array(
      "Operation.Type" => "OperationType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
        $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (!isset($this->_parameterMap[$var])) {
            return;
        }

        return $this->{$this->_parameterMap[$var]};
    }

    /**
     * Provided for getting non-php-standard named variables
     * @return array parameter map
     */
    protected function getParameterMap()
    {
        return $this->_parameterMap;
    }

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($operator = null, $OperationType = null)
      {
          $this->operator = $operator;
          $this->OperationType = $OperationType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\Page", false)) {
    /**
   * Indicates that this instance is a subtype of Page.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class Page
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "Page";

    /**
     * @access public
     * @var integer
     */
    public $totalNumEntries;

    /**
     * @access public
     * @var string
     */
    public $PageType;
      private $_parameterMap = array(
      "Page.Type" => "PageType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
        $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (!isset($this->_parameterMap[$var])) {
            return;
        }

        return $this->{$this->_parameterMap[$var]};
    }

    /**
     * Provided for getting non-php-standard named variables
     * @return array parameter map
     */
    protected function getParameterMap()
    {
        return $this->_parameterMap;
    }

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($totalNumEntries = null, $PageType = null)
      {
          $this->totalNumEntries = $totalNumEntries;
          $this->PageType = $PageType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\ApiError", false)) {
    /**
   * Indicates that this instance is a subtype of ApiError.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "ApiError";

    /**
     * @access public
     * @var string
     */
    public $fieldPath;

    /**
     * @access public
     * @var string
     */
    public $trigger;

    /**
     * @access public
     * @var string
     */
    public $errorString;

    /**
     * @access public
     * @var string
     */
    public $ApiErrorType;
      private $_parameterMap = array(
      "ApiError.Type" => "ApiErrorType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
        $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (!isset($this->_parameterMap[$var])) {
            return;
        }

        return $this->{$this->_parameterMap[$var]};
    }

    /**
     * Provided for getting non-php-standard named variables
     * @return array parameter map
     */
    protected function getParameterMap()
    {
        return $this->_parameterMap;
    }

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\ApplicationException", false)) {
    /**
   * Indicates that this instance is a subtype of ApplicationException.
   * Although this field is returned in the response, it is ignored on input
   * and cannot be selected. Specify xsi:type instead.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class ApplicationException
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "ApplicationException";

    /**
     * @access public
     * @var string
     */
    public $message;

    /**
     * @access public
     * @var string
     */
    public $ApplicationExceptionType;
      private $_parameterMap = array(
      "ApplicationException.Type" => "ApplicationExceptionType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
        $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (!isset($this->_parameterMap[$var])) {
            return;
        }

        return $this->{$this->_parameterMap[$var]};
    }

    /**
     * Provided for getting non-php-standard named variables
     * @return array parameter map
     */
    protected function getParameterMap()
    {
        return $this->_parameterMap;
    }

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($message = null, $ApplicationExceptionType = null)
      {
          $this->message = $message;
          $this->ApplicationExceptionType = $ApplicationExceptionType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\Selector", false)) {
    /**
   * <span class="constraint ContentsDistinct">This field must contain distinct elements.</span>
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class Selector
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "Selector";

    /**
     * @access public
     * @var string[]
     */
    public $fields;

    /**
     * @access public
     * @var Predicate[]
     */
    public $predicates;

    /**
     * @access public
     * @var DateRange
     */
    public $dateRange;

    /**
     * @access public
     * @var OrderBy[]
     */
    public $ordering;

    /**
     * @access public
     * @var Paging
     */
    public $paging;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($fields = null, $predicates = null, $dateRange = null, $ordering = null, $paging = null)
      {
          $this->fields = $fields;
          $this->predicates = $predicates;
          $this->dateRange = $dateRange;
          $this->ordering = $ordering;
          $this->paging = $paging;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\AuthenticationErrorReason", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class AuthenticationErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "AuthenticationError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\AuthorizationErrorReason", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class AuthorizationErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "AuthorizationError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\ClientTermsErrorReason", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class ClientTermsErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "ClientTermsError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\DatabaseErrorReason", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class DatabaseErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "DatabaseError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\DistinctErrorReason", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class DistinctErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "DistinctError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\EntityCountLimitExceededReason", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class EntityCountLimitExceededReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "EntityCountLimitExceeded.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\EntityNotFoundReason", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class EntityNotFoundReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "EntityNotFound.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\IdErrorReason", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class IdErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "IdError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\InternalApiErrorReason", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class InternalApiErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "InternalApiError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\NewEntityCreationErrorReason", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class NewEntityCreationErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "NewEntityCreationError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\NotEmptyErrorReason", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class NotEmptyErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "NotEmptyError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\NullErrorReason", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class NullErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "NullError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\OperationAccessDeniedReason", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class OperationAccessDeniedReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "OperationAccessDenied.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\Operator", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class Operator
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "Operator";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\OperatorErrorReason", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class OperatorErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "OperatorError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\PagingErrorReason", false)) {
    /**
   * <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class PagingErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "PagingError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\PredicateOperator", false)) {
    /**
   * <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class PredicateOperator
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "Predicate.Operator";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\QuotaCheckErrorReason", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class QuotaCheckErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "QuotaCheckError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\RangeErrorReason", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class RangeErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "RangeError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\RateExceededErrorReason", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class RateExceededErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "RateExceededError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\ReadOnlyErrorReason", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class ReadOnlyErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "ReadOnlyError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\RejectedErrorReason", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class RejectedErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "RejectedError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\RequestErrorReason", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class RequestErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "RequestError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\RequiredErrorReason", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class RequiredErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "RequiredError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\SharedSetStatus", false)) {
    /**
   * <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class SharedSetStatus
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "SharedSet.Status";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\SharedSetErrorReason", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class SharedSetErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "SharedSetError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\SharedSetType", false)) {
    /**
   * <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class SharedSetType
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "SharedSetType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\SizeLimitErrorReason", false)) {
    /**
   * <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class SizeLimitErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "SizeLimitError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\SortOrder", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class SortOrder
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "SortOrder";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\StringLengthErrorReason", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class StringLengthErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "StringLengthError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\SharedSetServiceGet", false)) {
    /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns a list of SharedSets based on the given selector.
   * @param selector the selector specifying the query
   * @return a list of SharedSet entities that meet the criterion specified
   * by the selector
   * @throws ApiException
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class SharedSetServiceGet
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var Selector
     */
    public $selector;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($selector = null)
      {
          $this->selector = $selector;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\SharedSetServiceGetResponse", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class SharedSetServiceGetResponse
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var SharedSetPage
     */
    public $rval;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($rval = null)
      {
          $this->rval = $rval;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\SharedSetServiceMutate", false)) {
    /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Applies the list of mutate operations.
   * @param operations the operations to apply
   * @return the modified CriterionList entities
   * @throws ApiException
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class SharedSetServiceMutate
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var SharedSetOperation[]
     */
    public $operations;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($operations = null)
      {
          $this->operations = $operations;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\SharedSetServiceMutateResponse", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class SharedSetServiceMutateResponse
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var SharedSetReturnValue
     */
    public $rval;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($rval = null)
      {
          $this->rval = $rval;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\AuthenticationError", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class AuthenticationError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "AuthenticationError";

    /**
     * @access public
     * @var tnsAuthenticationErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\AuthorizationError", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class AuthorizationError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "AuthorizationError";

    /**
     * @access public
     * @var tnsAuthorizationErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\ClientTermsError", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class ClientTermsError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "ClientTermsError";

    /**
     * @access public
     * @var tnsClientTermsErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\DistinctError", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class DistinctError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "DistinctError";

    /**
     * @access public
     * @var tnsDistinctErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\EntityCountLimitExceeded", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class EntityCountLimitExceeded extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "EntityCountLimitExceeded";

    /**
     * @access public
     * @var tnsEntityCountLimitExceededReason
     */
    public $reason;

    /**
     * @access public
     * @var string
     */
    public $enclosingId;

    /**
     * @access public
     * @var integer
     */
    public $limit;

    /**
     * @access public
     * @var string
     */
    public $accountLimitType;

    /**
     * @access public
     * @var integer
     */
    public $existingCount;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $enclosingId = null, $limit = null, $accountLimitType = null, $existingCount = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->enclosingId = $enclosingId;
          $this->limit = $limit;
          $this->accountLimitType = $accountLimitType;
          $this->existingCount = $existingCount;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\EntityNotFound", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class EntityNotFound extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "EntityNotFound";

    /**
     * @access public
     * @var tnsEntityNotFoundReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\IdError", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class IdError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "IdError";

    /**
     * @access public
     * @var tnsIdErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\InternalApiError", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class InternalApiError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "InternalApiError";

    /**
     * @access public
     * @var tnsInternalApiErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\NewEntityCreationError", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class NewEntityCreationError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "NewEntityCreationError";

    /**
     * @access public
     * @var tnsNewEntityCreationErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\NotEmptyError", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class NotEmptyError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "NotEmptyError";

    /**
     * @access public
     * @var tnsNotEmptyErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\NullError", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class NullError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "NullError";

    /**
     * @access public
     * @var tnsNullErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\OperationAccessDenied", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class OperationAccessDenied extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "OperationAccessDenied";

    /**
     * @access public
     * @var tnsOperationAccessDeniedReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\OperatorError", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class OperatorError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "OperatorError";

    /**
     * @access public
     * @var tnsOperatorErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\PagingError", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class PagingError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "PagingError";

    /**
     * @access public
     * @var tnsPagingErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\QuotaCheckError", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class QuotaCheckError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "QuotaCheckError";

    /**
     * @access public
     * @var tnsQuotaCheckErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\RangeError", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class RangeError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "RangeError";

    /**
     * @access public
     * @var tnsRangeErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\RateExceededError", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class RateExceededError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "RateExceededError";

    /**
     * @access public
     * @var tnsRateExceededErrorReason
     */
    public $reason;

    /**
     * @access public
     * @var string
     */
    public $rateName;

    /**
     * @access public
     * @var string
     */
    public $rateScope;

    /**
     * @access public
     * @var integer
     */
    public $retryAfterSeconds;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $rateName = null, $rateScope = null, $retryAfterSeconds = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->rateName = $rateName;
          $this->rateScope = $rateScope;
          $this->retryAfterSeconds = $retryAfterSeconds;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\ReadOnlyError", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class ReadOnlyError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "ReadOnlyError";

    /**
     * @access public
     * @var tnsReadOnlyErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\RejectedError", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class RejectedError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "RejectedError";

    /**
     * @access public
     * @var tnsRejectedErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\RequestError", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class RequestError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "RequestError";

    /**
     * @access public
     * @var tnsRequestErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\RequiredError", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class RequiredError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "RequiredError";

    /**
     * @access public
     * @var tnsRequiredErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\SharedSetError", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class SharedSetError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "SharedSetError";

    /**
     * @access public
     * @var tnsSharedSetErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\SharedSetOperation", false)) {
    /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class SharedSetOperation extends Operation
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "SharedSetOperation";

    /**
     * @access public
     * @var SharedSet
     */
    public $operand;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($operand = null, $operator = null, $OperationType = null)
      {
          parent::__construct();
          $this->operand = $operand;
          $this->operator = $operator;
          $this->OperationType = $OperationType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\SharedSetReturnValue", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class SharedSetReturnValue extends ListReturnValue
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "SharedSetReturnValue";

    /**
     * @access public
     * @var SharedSet[]
     */
    public $value;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($value = null, $ListReturnValueType = null)
      {
          parent::__construct();
          $this->value = $value;
          $this->ListReturnValueType = $ListReturnValueType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\SizeLimitError", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class SizeLimitError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "SizeLimitError";

    /**
     * @access public
     * @var tnsSizeLimitErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\StringLengthError", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class StringLengthError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "StringLengthError";

    /**
     * @access public
     * @var tnsStringLengthErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\DatabaseError", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class DatabaseError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "DatabaseError";

    /**
     * @access public
     * @var tnsDatabaseErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\NullStatsPage", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class NullStatsPage extends Page
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "NullStatsPage";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($totalNumEntries = null, $PageType = null)
      {
          parent::__construct();
          $this->totalNumEntries = $totalNumEntries;
          $this->PageType = $PageType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\ApiException", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class ApiException extends ApplicationException
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "ApiException";

    /**
     * @access public
     * @var ApiError[]
     */
    public $errors;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($errors = null, $message = null, $ApplicationExceptionType = null)
      {
          parent::__construct();
          $this->errors = $errors;
          $this->message = $message;
          $this->ApplicationExceptionType = $ApplicationExceptionType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\SharedSetPage", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class SharedSetPage extends NullStatsPage
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "SharedSetPage";

    /**
     * @access public
     * @var SharedSet[]
     */
    public $entries;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($entries = null)
      {
          parent::__construct();
          $this->entries = $entries;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\SharedSetService", false)) {
    /**
   * SharedSetService
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class SharedSetService extends AdWordsSoapClient
  {

    const SERVICE_NAME = "SharedSetService";
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201409/SharedSetService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201409/SharedSetService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AuthenticationError" => "AuthenticationError",
      "AuthorizationError" => "AuthorizationError",
      "ClientTermsError" => "ClientTermsError",
      "DateRange" => "DateRange",
      "DistinctError" => "DistinctError",
      "EntityCountLimitExceeded" => "EntityCountLimitExceeded",
      "EntityNotFound" => "EntityNotFound",
      "IdError" => "IdError",
      "InternalApiError" => "InternalApiError",
      "NewEntityCreationError" => "NewEntityCreationError",
      "NotEmptyError" => "NotEmptyError",
      "NullError" => "NullError",
      "OperationAccessDenied" => "OperationAccessDenied",
      "OperatorError" => "OperatorError",
      "OrderBy" => "OrderBy",
      "Paging" => "Paging",
      "PagingError" => "PagingError",
      "Predicate" => "Predicate",
      "QuotaCheckError" => "QuotaCheckError",
      "RangeError" => "RangeError",
      "RateExceededError" => "RateExceededError",
      "ReadOnlyError" => "ReadOnlyError",
      "RejectedError" => "RejectedError",
      "RequestError" => "RequestError",
      "RequiredError" => "RequiredError",
      "SharedSet" => "SharedSet",
      "SharedSetError" => "SharedSetError",
      "SharedSetOperation" => "SharedSetOperation",
      "SharedSetPage" => "SharedSetPage",
      "SharedSetReturnValue" => "SharedSetReturnValue",
      "SizeLimitError" => "SizeLimitError",
      "SoapHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "StringLengthError" => "StringLengthError",
      "DatabaseError" => "DatabaseError",
      "ListReturnValue" => "ListReturnValue",
      "NullStatsPage" => "NullStatsPage",
      "Operation" => "Operation",
      "Page" => "Page",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApplicationException" => "ApplicationException",
      "Selector" => "Selector",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "AuthorizationError.Reason" => "AuthorizationErrorReason",
      "ClientTermsError.Reason" => "ClientTermsErrorReason",
      "DatabaseError.Reason" => "DatabaseErrorReason",
      "DistinctError.Reason" => "DistinctErrorReason",
      "EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
      "EntityNotFound.Reason" => "EntityNotFoundReason",
      "IdError.Reason" => "IdErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NewEntityCreationError.Reason" => "NewEntityCreationErrorReason",
      "NotEmptyError.Reason" => "NotEmptyErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
      "Operator" => "Operator",
      "OperatorError.Reason" => "OperatorErrorReason",
      "PagingError.Reason" => "PagingErrorReason",
      "Predicate.Operator" => "PredicateOperator",
      "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RateExceededError.Reason" => "RateExceededErrorReason",
      "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
      "RejectedError.Reason" => "RejectedErrorReason",
      "RequestError.Reason" => "RequestErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "SharedSet.Status" => "SharedSetStatus",
      "SharedSetError.Reason" => "SharedSetErrorReason",
      "SharedSetType" => "SharedSetType",
      "SizeLimitError.Reason" => "SizeLimitErrorReason",
      "SortOrder" => "SortOrder",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "get" => "SharedSetServiceGet",
      "getResponse" => "SharedSetServiceGetResponse",
      "mutate" => "SharedSetServiceMutate",
      "mutateResponse" => "SharedSetServiceMutateResponse",
    );

    /**
     * Constructor using wsdl location and options array
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the \SoapClient
     */
    public function __construct($wsdl, $options, $user)
    {
        $options["classmap"] = self::$classmap;
        parent::__construct($wsdl, $options, $user, self::SERVICE_NAME,
          self::WSDL_NAMESPACE);
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns a list of SharedSets based on the given selector.
     * @param selector the selector specifying the query
     * @return a            list of SharedSet entities that meet the criterion specified
     *                      by the selector
     * @throws ApiException
     */
    public function get($selector)
    {
        $args = new SharedSetServiceGet($selector);
        $result = $this->__soapCall("get", array($args));

        return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Applies the list of mutate operations.
     * @param operations the operations to apply
     * @return the          modified CriterionList entities
     * @throws ApiException
     */
    public function mutate($operations)
    {
        $args = new SharedSetServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($args));

        return $result->rval;
    }
  }
}

