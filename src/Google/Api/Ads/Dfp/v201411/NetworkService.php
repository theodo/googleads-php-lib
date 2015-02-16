<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the NetworkService
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
 * @package    GoogleApiAdsDfp
 * @subpackage v201411
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
use Google\Api\Ads\Dfp\Lib\DfpSoapClient ;
require_once "Google/Api/Ads/Dfp/Lib/DfpSoapClient.php";

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ApiError", false)) {
    /**
   * The API error base class that provides details about an error that occurred
   * while processing a service request.
   *
   * <p>The OGNL field path is provided for parsers to identify the request data
   * element that may have caused the error.</p>
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ApiVersionError", false)) {
    /**
   * Errors related to the usage of API versions.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ApiVersionError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ApiVersionError";

    /**
     * @access public
     * @var tnsApiVersionErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ApplicationException", false)) {
    /**
   * Base class for exceptions.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ApplicationException
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\AuthenticationError", false)) {
    /**
   * An error for an exception that occurred when authenticating.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class AuthenticationError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\CommonError", false)) {
    /**
   * A place for common errors that can be used across services.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CommonError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "CommonError";

    /**
     * @access public
     * @var tnsCommonErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ExchangeRateError", false)) {
    /**
   * Lists all errors associated with {@link ExchangeRate} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ExchangeRateError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ExchangeRateError";

    /**
     * @access public
     * @var tnsExchangeRateErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\FeatureError", false)) {
    /**
   * Errors related to feature management.  If you attempt using a feature that is not available to
   * the current network you'll receive a FeatureError with the missing feature as the trigger.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class FeatureError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "FeatureError";

    /**
     * @access public
     * @var tnsFeatureErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\InternalApiError", false)) {
    /**
   * Indicates that a server-side error has occured. {@code InternalApiError}s
   * are generally not the result of an invalid request or message sent by the
   * client.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class InternalApiError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\InvalidEmailError", false)) {
    /**
   * Caused by supplying a value for an email attribute that is not a valid
   * email address.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class InvalidEmailError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "InvalidEmailError";

    /**
     * @access public
     * @var tnsInvalidEmailErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\Network", false)) {
    /**
   * {@code Network} represents a network.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class Network
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "Network";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var string
     */
    public $displayName;

    /**
     * @access public
     * @var string
     */
    public $networkCode;

    /**
     * @access public
     * @var string
     */
    public $propertyCode;

    /**
     * @access public
     * @var string
     */
    public $timeZone;

    /**
     * @access public
     * @var string
     */
    public $currencyCode;

    /**
     * @access public
     * @var string[]
     */
    public $secondaryCurrencyCodes;

    /**
     * @access public
     * @var string
     */
    public $effectiveRootAdUnitId;

    /**
     * @access public
     * @var integer
     */
    public $contentBrowseCustomTargetingKeyId;

    /**
     * @access public
     * @var boolean
     */
    public $isTest;

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

      public function __construct($id = null, $displayName = null, $networkCode = null, $propertyCode = null, $timeZone = null, $currencyCode = null, $secondaryCurrencyCodes = null, $effectiveRootAdUnitId = null, $contentBrowseCustomTargetingKeyId = null, $isTest = null)
      {
          $this->id = $id;
          $this->displayName = $displayName;
          $this->networkCode = $networkCode;
          $this->propertyCode = $propertyCode;
          $this->timeZone = $timeZone;
          $this->currencyCode = $currencyCode;
          $this->secondaryCurrencyCodes = $secondaryCurrencyCodes;
          $this->effectiveRootAdUnitId = $effectiveRootAdUnitId;
          $this->contentBrowseCustomTargetingKeyId = $contentBrowseCustomTargetingKeyId;
          $this->isTest = $isTest;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\NetworkError", false)) {
    /**
   * An error for a network.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class NetworkError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "NetworkError";

    /**
     * @access public
     * @var tnsNetworkErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\NotNullError", false)) {
    /**
   * Caused by supplying a null value for an attribute that cannot be null.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class NotNullError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "NotNullError";

    /**
     * @access public
     * @var tnsNotNullErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ParseError", false)) {
    /**
   * Lists errors related to parsing.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ParseError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ParseError";

    /**
     * @access public
     * @var tnsParseErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\PermissionError", false)) {
    /**
   * Errors related to incorrect permission.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class PermissionError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "PermissionError";

    /**
     * @access public
     * @var tnsPermissionErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\PrecisionError", false)) {
    /**
   * List all errors associated with number precisions.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class PrecisionError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "PrecisionError";

    /**
     * @access public
     * @var tnsPrecisionErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\PublisherQueryLanguageContextError", false)) {
    /**
   * An error that occurs while executing a PQL query contained in
   * a {@link Statement} object.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class PublisherQueryLanguageContextError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "PublisherQueryLanguageContextError";

    /**
     * @access public
     * @var tnsPublisherQueryLanguageContextErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\PublisherQueryLanguageSyntaxError", false)) {
    /**
   * An error that occurs while parsing a PQL query contained in a
   * {@link Statement} object.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class PublisherQueryLanguageSyntaxError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "PublisherQueryLanguageSyntaxError";

    /**
     * @access public
     * @var tnsPublisherQueryLanguageSyntaxErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\QuotaError", false)) {
    /**
   * Describes a client-side error on which a user is attempting
   * to perform an action to which they have no quota remaining.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class QuotaError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "QuotaError";

    /**
     * @access public
     * @var tnsQuotaErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\RequiredCollectionError", false)) {
    /**
   * A list of all errors to be used for validating sizes of collections.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class RequiredCollectionError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "RequiredCollectionError";

    /**
     * @access public
     * @var tnsRequiredCollectionErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\RequiredError", false)) {
    /**
   * Errors due to missing required field.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class RequiredError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\RequiredNumberError", false)) {
    /**
   * A list of all errors to be used in conjunction with required number
   * validators.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class RequiredNumberError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "RequiredNumberError";

    /**
     * @access public
     * @var tnsRequiredNumberErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ServerError", false)) {
    /**
   * Errors related to the server.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ServerError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ServerError";

    /**
     * @access public
     * @var tnsServerErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\SoapRequestHeader", false)) {
    /**
   * Represents the SOAP request header used by API requests.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class SoapRequestHeader
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "SoapRequestHeader";

    /**
     * @access public
     * @var string
     */
    public $networkCode;

    /**
     * @access public
     * @var string
     */
    public $applicationName;

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

      public function __construct($networkCode = null, $applicationName = null)
      {
          $this->networkCode = $networkCode;
          $this->applicationName = $applicationName;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\SoapResponseHeader", false)) {
    /**
   * Represents the SOAP request header used by API responses.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class SoapResponseHeader
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "SoapResponseHeader";

    /**
     * @access public
     * @var string
     */
    public $requestId;

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

      public function __construct($requestId = null, $responseTime = null)
      {
          $this->requestId = $requestId;
          $this->responseTime = $responseTime;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\StatementError", false)) {
    /**
   * An error that occurs while parsing {@link Statement} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class StatementError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "StatementError";

    /**
     * @access public
     * @var tnsStatementErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\StringLengthError", false)) {
    /**
   * Errors for Strings which do not meet given length constraints.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class StringLengthError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\TypeError", false)) {
    /**
   * An error for a field which is an invalid type.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class TypeError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "TypeError";

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
          parent::__construct();
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\UniqueError", false)) {
    /**
   * An error for a field which must satisfy a uniqueness constraint
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class UniqueError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "UniqueError";

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
          parent::__construct();
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ApiVersionErrorReason", false)) {
    /**
   * Indicates that the operation is not allowed in the version the request
   * was made in.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ApiVersionErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ApiVersionError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\AuthenticationErrorReason", false)) {
    /**
   * The SOAP message contains a request header with an ambiguous definition
   * of the authentication header fields. This means either the {@code
   * authToken} and {@code oAuthToken} fields were both null or both were
   * specified. Exactly one value should be specified with each request.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class AuthenticationErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\CommonErrorReason", false)) {
    /**
   * Describes reasons for common errors
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CommonErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "CommonError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ExchangeRateErrorReason", false)) {
    /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ExchangeRateErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ExchangeRateError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\FeatureErrorReason", false)) {
    /**
   * A feature is being used that is not enabled on the current network.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class FeatureErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "FeatureError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\InternalApiErrorReason", false)) {
    /**
   * The single reason for the internal API error.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class InternalApiErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\InvalidEmailErrorReason", false)) {
    /**
   * Describes reasons for an email to be invalid.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class InvalidEmailErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "InvalidEmailError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\NetworkErrorReason", false)) {
    /**
   * The value returned if the actual value is not exposed by the requested API version.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class NetworkErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "NetworkError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\NotNullErrorReason", false)) {
    /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class NotNullErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "NotNullError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ParseErrorReason", false)) {
    /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ParseErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ParseError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\PermissionErrorReason", false)) {
    /**
   * Describes reasons for permission errors.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class PermissionErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "PermissionError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\PrecisionErrorReason", false)) {
    /**
   * Describes reasons for precision errors.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class PrecisionErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "PrecisionError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\PublisherQueryLanguageContextErrorReason", false)) {
    /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class PublisherQueryLanguageContextErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "PublisherQueryLanguageContextError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\PublisherQueryLanguageSyntaxErrorReason", false)) {
    /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class PublisherQueryLanguageSyntaxErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "PublisherQueryLanguageSyntaxError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\QuotaErrorReason", false)) {
    /**
   * The number of requests made per second is too high and has exceeded the
   * allowable limit. The recommended approach to handle this error is to wait
   * about 5 seconds and then retry the request. Note that this does not
   * guarantee the request will succeed. If it fails again, try increasing the
   * wait time.
   * <p>
   * Another way to mitigate this error is to limit requests to 2 per second for
   * Small Business networks, or 8 per second for Premium networks. Once again
   * this does not guarantee that every request will succeed, but may help
   * reduce the number of times you receive this error.
   * </p>
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class QuotaErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "QuotaError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\RequiredCollectionErrorReason", false)) {
    /**
   * A required collection is missing.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class RequiredCollectionErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "RequiredCollectionError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\RequiredErrorReason", false)) {
    /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class RequiredErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\RequiredNumberErrorReason", false)) {
    /**
   * Describes reasons for a number to be invalid.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class RequiredNumberErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "RequiredNumberError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ServerErrorReason", false)) {
    /**
   * Describes reasons for server errors
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ServerErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ServerError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\StatementErrorReason", false)) {
    /**
   * A bind variable has not been bound to a value.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class StatementErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "StatementError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\StringLengthErrorReason", false)) {
    /**
   * The value returned if the actual value is not exposed by the requested API version.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class StringLengthErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\GetAllNetworks", false)) {
    /**
   * Returns the list of {@link Network} objects to which the current login has
   * access.
   * <p>
   * Intended to be used without a network code in the SOAP header when the
   * login may have more than one network associated with it.
   * </p>
   *
   * @return the networks to which the current login has access
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class GetAllNetworks
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\GetAllNetworksResponse", false)) {
    /**
   *
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class GetAllNetworksResponse
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var Network[]
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\GetCurrentNetwork", false)) {
    /**
   * Returns the current network for which requests are being made.
   *
   * @return the network for which the user is currently making the request
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class GetCurrentNetwork
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\GetCurrentNetworkResponse", false)) {
    /**
   *
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class GetCurrentNetworkResponse
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var Network
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\MakeTestNetwork", false)) {
    /**
   * Creates a new blank network for testing purposes using the current login.
   * <p>
   * Each login(i.e. email address) can only have one test network. Data from
   * any of your existing networks will not be transferred to the new test network.
   * Once the test network is created, the test network can be used in the API
   * by supplying the {@link Network#networkCode} in the SOAP header or by
   * logging into the DFP UI.
   * <p>
   * Test networks are limited in the following ways:
   * <ul>
   * <li>Test networks cannot serve ads.</li>
   * <li>Because test networks cannot serve ads, reports will always come
   * back without data.</li>
   * <li>Since forecasting requires serving history, forecast service results
   * will be faked. See {@link ForecastService} for more info.</li>
   * <li>Test networks are, by default, small business networks and do not have any
   * premium features. To have additional features turned on, please contact your
   * account manager. </li>
   * <li>Test networks are limited to 10,000 objects per entity type.</li>
   * </ul>
   * </p>
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class MakeTestNetwork
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\MakeTestNetworkResponse", false)) {
    /**
   *
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class MakeTestNetworkResponse
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var Network
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\UpdateNetwork", false)) {
    /**
   * Updates the specified network. Currently, only the network display name can
   * be updated.
   *
   * @param network the network that needs to be updated
   * @return the updated network
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class UpdateNetwork
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var Network
     */
    public $network;

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

      public function __construct($network = null)
      {
          $this->network = $network;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\UpdateNetworkResponse", false)) {
    /**
   *
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class UpdateNetworkResponse
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var Network
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ApiException", false)) {
    /**
   * \Exception class for holding a list of service errors.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ApiException extends ApplicationException
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\NetworkService", false)) {
    /**
   * NetworkService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class NetworkService extends DfpSoapClient
  {

    const SERVICE_NAME = "NetworkService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/NetworkService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/NetworkService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "AuthenticationError" => "AuthenticationError",
      "CommonError" => "CommonError",
      "ExchangeRateError" => "ExchangeRateError",
      "FeatureError" => "FeatureError",
      "InternalApiError" => "InternalApiError",
      "InvalidEmailError" => "InvalidEmailError",
      "Network" => "Network",
      "NetworkError" => "NetworkError",
      "NotNullError" => "NotNullError",
      "ParseError" => "ParseError",
      "PermissionError" => "PermissionError",
      "PrecisionError" => "PrecisionError",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RequiredCollectionError" => "RequiredCollectionError",
      "RequiredError" => "RequiredError",
      "RequiredNumberError" => "RequiredNumberError",
      "ServerError" => "ServerError",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "StatementError" => "StatementError",
      "StringLengthError" => "StringLengthError",
      "TypeError" => "TypeError",
      "UniqueError" => "UniqueError",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "ExchangeRateError.Reason" => "ExchangeRateErrorReason",
      "FeatureError.Reason" => "FeatureErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "InvalidEmailError.Reason" => "InvalidEmailErrorReason",
      "NetworkError.Reason" => "NetworkErrorReason",
      "NotNullError.Reason" => "NotNullErrorReason",
      "ParseError.Reason" => "ParseErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PrecisionError.Reason" => "PrecisionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "RequiredNumberError.Reason" => "RequiredNumberErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "getAllNetworks" => "GetAllNetworks",
      "getAllNetworksResponse" => "GetAllNetworksResponse",
      "getCurrentNetwork" => "GetCurrentNetwork",
      "getCurrentNetworkResponse" => "GetCurrentNetworkResponse",
      "makeTestNetwork" => "MakeTestNetwork",
      "makeTestNetworkResponse" => "MakeTestNetworkResponse",
      "updateNetwork" => "UpdateNetwork",
      "updateNetworkResponse" => "UpdateNetworkResponse",
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
     * Returns the list of {@link Network} objects to which the current login has
     * access.
     * <p>
     * Intended to be used without a network code in the SOAP header when the
     * login may have more than one network associated with it.
     * </p>
     *
     * @return the networks to which the current login has access
     */
    public function getAllNetworks()
    {
        $args = new GetAllNetworks();
        $result = $this->__soapCall("getAllNetworks", array($args));

        return $result->rval;
    }
    /**
     * Returns the current network for which requests are being made.
     *
     * @return the network for which the user is currently making the request
     */
    public function getCurrentNetwork()
    {
        $args = new GetCurrentNetwork();
        $result = $this->__soapCall("getCurrentNetwork", array($args));

        return $result->rval;
    }
    /**
     * Creates a new blank network for testing purposes using the current login.
     * <p>
     * Each login(i.e. email address) can only have one test network. Data from
     * any of your existing networks will not be transferred to the new test network.
     * Once the test network is created, the test network can be used in the API
     * by supplying the {@link Network#networkCode} in the SOAP header or by
     * logging into the DFP UI.
     * <p>
     * Test networks are limited in the following ways:
     * <ul>
     * <li>Test networks cannot serve ads.</li>
     * <li>Because test networks cannot serve ads, reports will always come
     * back without data.</li>
     * <li>Since forecasting requires serving history, forecast service results
     * will be faked. See {@link ForecastService} for more info.</li>
     * <li>Test networks are, by default, small business networks and do not have any
     * premium features. To have additional features turned on, please contact your
     * account manager. </li>
     * <li>Test networks are limited to 10,000 objects per entity type.</li>
     * </ul>
     * </p>
     */
    public function makeTestNetwork()
    {
        $args = new MakeTestNetwork();
        $result = $this->__soapCall("makeTestNetwork", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified network. Currently, only the network display name can
     * be updated.
     *
     * @param network the network that needs to be updated
     * @return the updated network
     */
    public function updateNetwork($network)
    {
        $args = new UpdateNetwork($network);
        $result = $this->__soapCall("updateNetwork", array($args));

        return $result->rval;
    }
  }
}

