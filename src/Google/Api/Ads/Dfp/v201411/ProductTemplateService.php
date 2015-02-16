<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the ProductTemplateService
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\AdUnitTargeting", false)) {
    /**
   * Represents targeted or excluded ad units.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class AdUnitTargeting
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "AdUnitTargeting";

    /**
     * @access public
     * @var string
     */
    public $adUnitId;

    /**
     * @access public
     * @var boolean
     */
    public $includeDescendants;

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

      public function __construct($adUnitId = null, $includeDescendants = null)
      {
          $this->adUnitId = $adUnitId;
          $this->includeDescendants = $includeDescendants;
      }
  }
}

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\AppliedLabel", false)) {
    /**
   * Represents a {@link Label} that can be applied to an entity. To negate an
   * inherited label, create an {@code AppliedLabel} with {@code labelId} as the
   * inherited label's ID and {@code isNegated} set to true.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class AppliedLabel
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "AppliedLabel";

    /**
     * @access public
     * @var integer
     */
    public $labelId;

    /**
     * @access public
     * @var boolean
     */
    public $isNegated;

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

      public function __construct($labelId = null, $isNegated = null)
      {
          $this->labelId = $labelId;
          $this->isNegated = $isNegated;
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\BandwidthGroupTargeting", false)) {
    /**
   * Represents bandwidth groups that are being targeted or excluded by the
   * {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class BandwidthGroupTargeting
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "BandwidthGroupTargeting";

    /**
     * @access public
     * @var boolean
     */
    public $isTargeted;

    /**
     * @access public
     * @var Technology[]
     */
    public $bandwidthGroups;

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

      public function __construct($isTargeted = null, $bandwidthGroups = null)
      {
          $this->isTargeted = $isTargeted;
          $this->bandwidthGroups = $bandwidthGroups;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\BaseCustomFieldValue", false)) {
    /**
   * The value of a {@link CustomField} for a particular entity.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class BaseCustomFieldValue
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "BaseCustomFieldValue";

    /**
     * @access public
     * @var integer
     */
    public $customFieldId;

    /**
     * @access public
     * @var string
     */
    public $BaseCustomFieldValueType;
      private $_parameterMap = array(
      "BaseCustomFieldValue.Type" => "BaseCustomFieldValueType",
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

      public function __construct($customFieldId = null, $BaseCustomFieldValueType = null)
      {
          $this->customFieldId = $customFieldId;
          $this->BaseCustomFieldValueType = $BaseCustomFieldValueType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\BaseRateError", false)) {
    /**
   * An error having to do with {@link BaseRate}.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class BaseRateError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "BaseRateError";

    /**
     * @access public
     * @var tnsBaseRateErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\BrowserLanguageTargeting", false)) {
    /**
   * Represents browser languages that are being targeted or excluded by the
   * {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class BrowserLanguageTargeting
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "BrowserLanguageTargeting";

    /**
     * @access public
     * @var boolean
     */
    public $isTargeted;

    /**
     * @access public
     * @var Technology[]
     */
    public $browserLanguages;

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

      public function __construct($isTargeted = null, $browserLanguages = null)
      {
          $this->isTargeted = $isTargeted;
          $this->browserLanguages = $browserLanguages;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\BrowserTargeting", false)) {
    /**
   * Represents browsers that are being targeted or excluded by the
   * {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class BrowserTargeting
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "BrowserTargeting";

    /**
     * @access public
     * @var boolean
     */
    public $isTargeted;

    /**
     * @access public
     * @var Technology[]
     */
    public $browsers;

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

      public function __construct($isTargeted = null, $browsers = null)
      {
          $this->isTargeted = $isTargeted;
          $this->browsers = $browsers;
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ContentMetadataKeyHierarchyTargeting", false)) {
    /**
   * Represents one or more {@link CustomTargetingValue custom targeting values} from different
   * {@link CustomTargetingKey custom targeting keys} ANDed together.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ContentMetadataKeyHierarchyTargeting
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ContentMetadataKeyHierarchyTargeting";

    /**
     * @access public
     * @var integer[]
     */
    public $customTargetingValueIds;

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

      public function __construct($customTargetingValueIds = null)
      {
          $this->customTargetingValueIds = $customTargetingValueIds;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ContentTargeting", false)) {
    /**
   * Used to target {@link LineItem}s to specific videos on a publisher's site.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ContentTargeting
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ContentTargeting";

    /**
     * @access public
     * @var integer[]
     */
    public $targetedContentIds;

    /**
     * @access public
     * @var integer[]
     */
    public $excludedContentIds;

    /**
     * @access public
     * @var integer[]
     */
    public $targetedVideoCategoryIds;

    /**
     * @access public
     * @var integer[]
     */
    public $excludedVideoCategoryIds;

    /**
     * @access public
     * @var integer[]
     */
    public $targetedVideoContentBundleIds;

    /**
     * @access public
     * @var integer[]
     */
    public $excludedVideoContentBundleIds;

    /**
     * @access public
     * @var ContentMetadataKeyHierarchyTargeting[]
     */
    public $targetedContentMetadata;

    /**
     * @access public
     * @var ContentMetadataKeyHierarchyTargeting[]
     */
    public $excludedContentMetadata;

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

      public function __construct($targetedContentIds = null, $excludedContentIds = null, $targetedVideoCategoryIds = null, $excludedVideoCategoryIds = null, $targetedVideoContentBundleIds = null, $excludedVideoContentBundleIds = null, $targetedContentMetadata = null, $excludedContentMetadata = null)
      {
          $this->targetedContentIds = $targetedContentIds;
          $this->excludedContentIds = $excludedContentIds;
          $this->targetedVideoCategoryIds = $targetedVideoCategoryIds;
          $this->excludedVideoCategoryIds = $excludedVideoCategoryIds;
          $this->targetedVideoContentBundleIds = $targetedVideoContentBundleIds;
          $this->excludedVideoContentBundleIds = $excludedVideoContentBundleIds;
          $this->targetedContentMetadata = $targetedContentMetadata;
          $this->excludedContentMetadata = $excludedContentMetadata;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\CreativePlaceholder", false)) {
    /**
   * A {@code CreativePlaceholder} describes a slot that a creative is expected to
   * fill. This is used primarily to help in forecasting, and also to validate
   * that the correct creatives are associated with the line item. A
   * {@code CreativePlaceholder} must contain a size, and it can optionally
   * contain companions. Companions are only valid if the line item's environment
   * type is {@link EnvironmentType#VIDEO_PLAYER}.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CreativePlaceholder
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "CreativePlaceholder";

    /**
     * @access public
     * @var Size
     */
    public $size;

    /**
     * @access public
     * @var CreativePlaceholder[]
     */
    public $companions;

    /**
     * @access public
     * @var AppliedLabel[]
     */
    public $appliedLabels;

    /**
     * @access public
     * @var AppliedLabel[]
     */
    public $effectiveAppliedLabels;

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var integer
     */
    public $expectedCreativeCount;

    /**
     * @access public
     * @var tnsCreativeSizeType
     */
    public $creativeSizeType;

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

      public function __construct($size = null, $companions = null, $appliedLabels = null, $effectiveAppliedLabels = null, $id = null, $expectedCreativeCount = null, $creativeSizeType = null)
      {
          $this->size = $size;
          $this->companions = $companions;
          $this->appliedLabels = $appliedLabels;
          $this->effectiveAppliedLabels = $effectiveAppliedLabels;
          $this->id = $id;
          $this->expectedCreativeCount = $expectedCreativeCount;
          $this->creativeSizeType = $creativeSizeType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\CustomFieldValue", false)) {
    /**
   * The value of a {@link CustomField} that does not have a {@link CustomField#dataType}
   * of {@link CustomFieldDataType#DROP_DOWN}.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CustomFieldValue extends BaseCustomFieldValue
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "CustomFieldValue";

    /**
     * @access public
     * @var Value
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

      public function __construct($value = null, $customFieldId = null, $BaseCustomFieldValueType = null)
      {
          parent::__construct();
          $this->value = $value;
          $this->customFieldId = $customFieldId;
          $this->BaseCustomFieldValueType = $BaseCustomFieldValueType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\CustomFieldValueError", false)) {
    /**
   * Errors specific to editing custom field values
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CustomFieldValueError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "CustomFieldValueError";

    /**
     * @access public
     * @var tnsCustomFieldValueErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\CustomTargetingError", false)) {
    /**
   * Lists all errors related to {@link CustomTargetingKey} and
   * {@link CustomTargetingValue} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CustomTargetingError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "CustomTargetingError";

    /**
     * @access public
     * @var tnsCustomTargetingErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\CustomCriteriaNode", false)) {
    /**
   * A {@link CustomCriteriaNode} is a node in the custom targeting tree. A custom
   * criteria node can either be a {@link CustomCriteriaSet} (a non-leaf node) or
   * a {@link CustomCriteria} (a leaf node). The custom criteria targeting tree is
   * subject to the rules defined on {@link Targeting#customTargeting}.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CustomCriteriaNode
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "CustomCriteriaNode";

    /**
     * @access public
     * @var string
     */
    public $CustomCriteriaNodeType;
      private $_parameterMap = array(
      "CustomCriteriaNode.Type" => "CustomCriteriaNodeType",
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

      public function __construct($CustomCriteriaNodeType = null)
      {
          $this->CustomCriteriaNodeType = $CustomCriteriaNodeType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\Date", false)) {
    /**
   * Represents a date.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class Date
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "Date";

    /**
     * @access public
     * @var integer
     */
    public $year;

    /**
     * @access public
     * @var integer
     */
    public $month;

    /**
     * @access public
     * @var integer
     */
    public $day;

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

      public function __construct($year = null, $month = null, $day = null)
      {
          $this->year = $year;
          $this->month = $month;
          $this->day = $day;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\DfpDateTime", false)) {
    /**
   * Represents a date combined with the time of day.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class DfpDateTime
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "DateTime";

    /**
     * @access public
     * @var Date
     */
    public $date;

    /**
     * @access public
     * @var integer
     */
    public $hour;

    /**
     * @access public
     * @var integer
     */
    public $minute;

    /**
     * @access public
     * @var integer
     */
    public $second;

    /**
     * @access public
     * @var string
     */
    public $timeZoneID;

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

      public function __construct($date = null, $hour = null, $minute = null, $second = null, $timeZoneID = null)
      {
          $this->date = $date;
          $this->hour = $hour;
          $this->minute = $minute;
          $this->second = $second;
          $this->timeZoneID = $timeZoneID;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\DeviceCapabilityTargeting", false)) {
    /**
   * Represents device capabilities that are being targeted or excluded by the {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class DeviceCapabilityTargeting
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "DeviceCapabilityTargeting";

    /**
     * @access public
     * @var Technology[]
     */
    public $targetedDeviceCapabilities;

    /**
     * @access public
     * @var Technology[]
     */
    public $excludedDeviceCapabilities;

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

      public function __construct($targetedDeviceCapabilities = null, $excludedDeviceCapabilities = null)
      {
          $this->targetedDeviceCapabilities = $targetedDeviceCapabilities;
          $this->excludedDeviceCapabilities = $excludedDeviceCapabilities;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\DeviceCategoryTargeting", false)) {
    /**
   * Represents device categories that are being targeted or excluded by the {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class DeviceCategoryTargeting
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "DeviceCategoryTargeting";

    /**
     * @access public
     * @var Technology[]
     */
    public $targetedDeviceCategories;

    /**
     * @access public
     * @var Technology[]
     */
    public $excludedDeviceCategories;

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

      public function __construct($targetedDeviceCategories = null, $excludedDeviceCategories = null)
      {
          $this->targetedDeviceCategories = $targetedDeviceCategories;
          $this->excludedDeviceCategories = $excludedDeviceCategories;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\DeviceManufacturerTargeting", false)) {
    /**
   * Represents device manufacturer that are being targeted or excluded by the
   * {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class DeviceManufacturerTargeting
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "DeviceManufacturerTargeting";

    /**
     * @access public
     * @var boolean
     */
    public $isTargeted;

    /**
     * @access public
     * @var Technology[]
     */
    public $deviceManufacturers;

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

      public function __construct($isTargeted = null, $deviceManufacturers = null)
      {
          $this->isTargeted = $isTargeted;
          $this->deviceManufacturers = $deviceManufacturers;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\DropDownCustomFieldValue", false)) {
    /**
   * A {@link CustomFieldValue} for a {@link CustomField} that has a {@link CustomField#dataType}
   * of {@link CustomFieldDataType#DROP_DOWN}
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class DropDownCustomFieldValue extends BaseCustomFieldValue
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "DropDownCustomFieldValue";

    /**
     * @access public
     * @var integer
     */
    public $customFieldOptionId;

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

      public function __construct($customFieldOptionId = null, $customFieldId = null, $BaseCustomFieldValueType = null)
      {
          parent::__construct();
          $this->customFieldOptionId = $customFieldOptionId;
          $this->customFieldId = $customFieldId;
          $this->BaseCustomFieldValueType = $BaseCustomFieldValueType;
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\FrequencyCap", false)) {
    /**
   * Represents a limit on the number of times a single viewer can be exposed to
   * the same {@link LineItem} in a specified time period.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class FrequencyCap
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "FrequencyCap";

    /**
     * @access public
     * @var integer
     */
    public $maxImpressions;

    /**
     * @access public
     * @var integer
     */
    public $numTimeUnits;

    /**
     * @access public
     * @var tnsTimeUnit
     */
    public $timeUnit;

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

      public function __construct($maxImpressions = null, $numTimeUnits = null, $timeUnit = null)
      {
          $this->maxImpressions = $maxImpressions;
          $this->numTimeUnits = $numTimeUnits;
          $this->timeUnit = $timeUnit;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\FrequencyCapError", false)) {
    /**
   * Lists all errors associated with frequency caps.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class FrequencyCapError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "FrequencyCapError";

    /**
     * @access public
     * @var tnsFrequencyCapErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\GenericTargetingError", false)) {
    /**
   * Targeting validation errors that can be used by different targeting types.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class GenericTargetingError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "GenericTargetingError";

    /**
     * @access public
     * @var tnsGenericTargetingErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\GeoTargeting", false)) {
    /**
   * Provides line items the ability to target geographical locations. By default,
   * line items target all countries and their subdivisions. With geographical
   * targeting, you can target line items to specific countries, regions, metro
   * areas, and cities. You can also exclude the same.
   * <p>
   * The following rules apply for geographical targeting:
   * </p>
   * <ul>
   * <li>You cannot target and exclude the same location</li>
   * <li>You cannot target a child whose parent has been excluded. So if the state
   * of Illinois has been excluded, then you cannot target Chicago</li>
   * <li>You must not target a location if you are also targeting its parent.
   * So if you are targeting New York City, you must not have the state of New
   * York as one of the targeted locations</li>
   * </ul>
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class GeoTargeting
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "GeoTargeting";

    /**
     * @access public
     * @var Location[]
     */
    public $targetedLocations;

    /**
     * @access public
     * @var Location[]
     */
    public $excludedLocations;

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

      public function __construct($targetedLocations = null, $excludedLocations = null)
      {
          $this->targetedLocations = $targetedLocations;
          $this->excludedLocations = $excludedLocations;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\GeoTargetingError", false)) {
    /**
   * Lists all errors associated with geographical targeting for a
   * {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class GeoTargetingError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "GeoTargetingError";

    /**
     * @access public
     * @var tnsGeoTargetingErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\InventoryTargeting", false)) {
    /**
   * A collection of targeted and excluded ad units and placements.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class InventoryTargeting
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "InventoryTargeting";

    /**
     * @access public
     * @var AdUnitTargeting[]
     */
    public $targetedAdUnits;

    /**
     * @access public
     * @var AdUnitTargeting[]
     */
    public $excludedAdUnits;

    /**
     * @access public
     * @var integer[]
     */
    public $targetedPlacementIds;

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

      public function __construct($targetedAdUnits = null, $excludedAdUnits = null, $targetedPlacementIds = null)
      {
          $this->targetedAdUnits = $targetedAdUnits;
          $this->excludedAdUnits = $excludedAdUnits;
          $this->targetedPlacementIds = $targetedPlacementIds;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\InventoryTargetingError", false)) {
    /**
   * Lists all inventory errors caused by associating a line item with a targeting
   * expression.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class InventoryTargetingError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "InventoryTargetingError";

    /**
     * @access public
     * @var tnsInventoryTargetingErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\DfpLocation", false)) {
    /**
   * A {@link Location} represents a geographical entity that can be targeted. If
   * a location type is not available because of the API version you are using,
   * the location will be represented as just the base class, otherwise it will be
   * sub-classed correctly.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class DfpLocation
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "Location";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var string
     */
    public $type;

    /**
     * @access public
     * @var integer
     */
    public $canonicalParentId;

    /**
     * @access public
     * @var string
     */
    public $displayName;

    /**
     * @access public
     * @var string
     */
    public $LocationType;
      private $_parameterMap = array(
      "Location.Type" => "LocationType",
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

      public function __construct($id = null, $type = null, $canonicalParentId = null, $displayName = null, $LocationType = null)
      {
          $this->id = $id;
          $this->type = $type;
          $this->canonicalParentId = $canonicalParentId;
          $this->displayName = $displayName;
          $this->LocationType = $LocationType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\MobileCarrierTargeting", false)) {
    /**
   * Represents mobile carriers that are being targeted or excluded by the {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class MobileCarrierTargeting
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "MobileCarrierTargeting";

    /**
     * @access public
     * @var boolean
     */
    public $isTargeted;

    /**
     * @access public
     * @var Technology[]
     */
    public $mobileCarriers;

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

      public function __construct($isTargeted = null, $mobileCarriers = null)
      {
          $this->isTargeted = $isTargeted;
          $this->mobileCarriers = $mobileCarriers;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\MobileDeviceSubmodelTargeting", false)) {
    /**
   * Represents mobile devices that are being targeted or excluded by the {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class MobileDeviceSubmodelTargeting
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "MobileDeviceSubmodelTargeting";

    /**
     * @access public
     * @var Technology[]
     */
    public $targetedMobileDeviceSubmodels;

    /**
     * @access public
     * @var Technology[]
     */
    public $excludedMobileDeviceSubmodels;

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

      public function __construct($targetedMobileDeviceSubmodels = null, $excludedMobileDeviceSubmodels = null)
      {
          $this->targetedMobileDeviceSubmodels = $targetedMobileDeviceSubmodels;
          $this->excludedMobileDeviceSubmodels = $excludedMobileDeviceSubmodels;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\MobileDeviceTargeting", false)) {
    /**
   * Represents mobile devices that are being targeted or excluded by the {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class MobileDeviceTargeting
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "MobileDeviceTargeting";

    /**
     * @access public
     * @var Technology[]
     */
    public $targetedMobileDevices;

    /**
     * @access public
     * @var Technology[]
     */
    public $excludedMobileDevices;

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

      public function __construct($targetedMobileDevices = null, $excludedMobileDevices = null)
      {
          $this->targetedMobileDevices = $targetedMobileDevices;
          $this->excludedMobileDevices = $excludedMobileDevices;
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\NullError", false)) {
    /**
   * Errors associated with violation of a NOT NULL check.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class NullError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\OperatingSystemTargeting", false)) {
    /**
   * Represents operating systems that are being targeted or excluded by the
   * {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class OperatingSystemTargeting
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "OperatingSystemTargeting";

    /**
     * @access public
     * @var boolean
     */
    public $isTargeted;

    /**
     * @access public
     * @var Technology[]
     */
    public $operatingSystems;

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

      public function __construct($isTargeted = null, $operatingSystems = null)
      {
          $this->isTargeted = $isTargeted;
          $this->operatingSystems = $operatingSystems;
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\PlacementTargeting", false)) {
    /**
   * Specifies what {@link Placement placements} are targeted.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class PlacementTargeting
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "PlacementTargeting";

    /**
     * @access public
     * @var integer[]
     */
    public $targetedPlacementIds;

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

      public function __construct($targetedPlacementIds = null)
      {
          $this->targetedPlacementIds = $targetedPlacementIds;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ProductTemplateAction", false)) {
    /**
   * Represents the actions that can be performed on product templates.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ProductTemplateAction
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ProductTemplateAction";

    /**
     * @access public
     * @var string
     */
    public $ProductTemplateActionType;
      private $_parameterMap = array(
      "ProductTemplateAction.Type" => "ProductTemplateActionType",
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

      public function __construct($ProductTemplateActionType = null)
      {
          $this->ProductTemplateActionType = $ProductTemplateActionType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ProductTemplateActionError", false)) {
    /**
   * An error lists all error reasons associated with performing action on
   * {@link ProductTemplate} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ProductTemplateActionError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ProductTemplateActionError";

    /**
     * @access public
     * @var tnsProductTemplateActionErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ProductTemplate", false)) {
    /**
   * {@code ProductTemplate} is used to generate products. All generated products will
   * inherit all attributes from their {@code ProductTemplate}, except for segmentation,
   * which will be included in the {@link Product#targeting}. The generated products in turn will be
   * used to create {@link ProposalLineItem proposal line items} so that almost all attributes
   * in the product template are properties of the proposal line item.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ProductTemplate
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ProductTemplate";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var DateTime
     */
    public $creationDateTime;

    /**
     * @access public
     * @var DateTime
     */
    public $lastModifiedDateTime;

    /**
     * @access public
     * @var string
     */
    public $description;

    /**
     * @access public
     * @var string
     */
    public $nameMacro;

    /**
     * @access public
     * @var tnsProductTemplateStatus
     */
    public $status;

    /**
     * @access public
     * @var tnsProductType
     */
    public $productType;

    /**
     * @access public
     * @var integer
     */
    public $creatorId;

    /**
     * @access public
     * @var tnsRateType
     */
    public $rateType;

    /**
     * @access public
     * @var tnsRoadblockingType
     */
    public $roadblockingType;

    /**
     * @access public
     * @var CreativePlaceholder[]
     */
    public $creativePlaceholders;

    /**
     * @access public
     * @var tnsLineItemType
     */
    public $lineItemType;

    /**
     * @access public
     * @var integer
     */
    public $priority;

    /**
     * @access public
     * @var FrequencyCap[]
     */
    public $frequencyCaps;

    /**
     * @access public
     * @var boolean
     */
    public $allowFrequencyCapsCustomization;

    /**
     * @access public
     * @var ProductSegmentation
     */
    public $productSegmentation;

    /**
     * @access public
     * @var ProductTemplateTargeting
     */
    public $targeting;

    /**
     * @access public
     * @var BaseCustomFieldValue[]
     */
    public $customFieldValues;

    /**
     * @access public
     * @var tnsEnvironmentType
     */
    public $environmentType;

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

      public function __construct($id = null, $name = null, $creationDateTime = null, $lastModifiedDateTime = null, $description = null, $nameMacro = null, $status = null, $productType = null, $creatorId = null, $rateType = null, $roadblockingType = null, $creativePlaceholders = null, $lineItemType = null, $priority = null, $frequencyCaps = null, $allowFrequencyCapsCustomization = null, $productSegmentation = null, $targeting = null, $customFieldValues = null, $environmentType = null)
      {
          $this->id = $id;
          $this->name = $name;
          $this->creationDateTime = $creationDateTime;
          $this->lastModifiedDateTime = $lastModifiedDateTime;
          $this->description = $description;
          $this->nameMacro = $nameMacro;
          $this->status = $status;
          $this->productType = $productType;
          $this->creatorId = $creatorId;
          $this->rateType = $rateType;
          $this->roadblockingType = $roadblockingType;
          $this->creativePlaceholders = $creativePlaceholders;
          $this->lineItemType = $lineItemType;
          $this->priority = $priority;
          $this->frequencyCaps = $frequencyCaps;
          $this->allowFrequencyCapsCustomization = $allowFrequencyCapsCustomization;
          $this->productSegmentation = $productSegmentation;
          $this->targeting = $targeting;
          $this->customFieldValues = $customFieldValues;
          $this->environmentType = $environmentType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ProductTemplateError", false)) {
    /**
   * A catch-all error that lists all generic errors associated with ProductTemplate.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ProductTemplateError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ProductTemplateError";

    /**
     * @access public
     * @var tnsProductTemplateErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ProductTemplatePage", false)) {
    /**
   * Captures a page of {@link ProductTemplate} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ProductTemplatePage
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ProductTemplatePage";

    /**
     * @access public
     * @var integer
     */
    public $totalResultSetSize;

    /**
     * @access public
     * @var integer
     */
    public $startIndex;

    /**
     * @access public
     * @var ProductTemplate[]
     */
    public $results;

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

      public function __construct($totalResultSetSize = null, $startIndex = null, $results = null)
      {
          $this->totalResultSetSize = $totalResultSetSize;
          $this->startIndex = $startIndex;
          $this->results = $results;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ProductSegmentation", false)) {
    /**
   * Segmentations used to create products. Within a product template, for each segmentation,
   * a product will be created for the combination of all other segments within other segmentations.
   * <p>
   * For example, a product with 3 segmentations with only 1 segment for each will produce
   * {@code 1 x 1 x 1 = 1} product.
   * A product with 3 segmentations with 2 segments for each will produce {@code 2 x 2 x 2 = 8}
   * products.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ProductSegmentation
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ProductSegmentation";

    /**
     * @access public
     * @var GeoTargeting
     */
    public $geoSegment;

    /**
     * @access public
     * @var AdUnitTargeting[]
     */
    public $adUnitSegments;

    /**
     * @access public
     * @var PlacementTargeting
     */
    public $placementSegment;

    /**
     * @access public
     * @var CustomCriteria[]
     */
    public $customTargetingSegment;

    /**
     * @access public
     * @var UserDomainTargeting
     */
    public $userDomainSegment;

    /**
     * @access public
     * @var BandwidthGroupTargeting
     */
    public $bandwidthSegment;

    /**
     * @access public
     * @var BrowserTargeting
     */
    public $browserSegment;

    /**
     * @access public
     * @var BrowserLanguageTargeting
     */
    public $browserLanguageSegment;

    /**
     * @access public
     * @var OperatingSystemTargeting
     */
    public $operatingSystemSegment;

    /**
     * @access public
     * @var MobileCarrierTargeting
     */
    public $mobileCarrierSegment;

    /**
     * @access public
     * @var DeviceCapabilityTargeting
     */
    public $deviceCapabilitySegment;

    /**
     * @access public
     * @var DeviceCategoryTargeting
     */
    public $deviceCategorySegment;

    /**
     * @access public
     * @var DeviceManufacturerTargeting
     */
    public $deviceManufacturerSegment;

    /**
     * @access public
     * @var MobileDeviceTargeting
     */
    public $mobileDeviceSegment;

    /**
     * @access public
     * @var MobileDeviceSubmodelTargeting
     */
    public $mobileDeviceSubmodelSegment;

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

      public function __construct($geoSegment = null, $adUnitSegments = null, $placementSegment = null, $customTargetingSegment = null, $userDomainSegment = null, $bandwidthSegment = null, $browserSegment = null, $browserLanguageSegment = null, $operatingSystemSegment = null, $mobileCarrierSegment = null, $deviceCapabilitySegment = null, $deviceCategorySegment = null, $deviceManufacturerSegment = null, $mobileDeviceSegment = null, $mobileDeviceSubmodelSegment = null)
      {
          $this->geoSegment = $geoSegment;
          $this->adUnitSegments = $adUnitSegments;
          $this->placementSegment = $placementSegment;
          $this->customTargetingSegment = $customTargetingSegment;
          $this->userDomainSegment = $userDomainSegment;
          $this->bandwidthSegment = $bandwidthSegment;
          $this->browserSegment = $browserSegment;
          $this->browserLanguageSegment = $browserLanguageSegment;
          $this->operatingSystemSegment = $operatingSystemSegment;
          $this->mobileCarrierSegment = $mobileCarrierSegment;
          $this->deviceCapabilitySegment = $deviceCapabilitySegment;
          $this->deviceCategorySegment = $deviceCategorySegment;
          $this->deviceManufacturerSegment = $deviceManufacturerSegment;
          $this->mobileDeviceSegment = $mobileDeviceSegment;
          $this->mobileDeviceSubmodelSegment = $mobileDeviceSubmodelSegment;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ProductTemplateTargeting", false)) {
    /**
   * Contains targeting criteria for {@link ProductTemplate} objects.
   * {@link ProposalLineItem Proposal line items} created from {@link Product products}
   * of this template will have this criteria added to {@link ProposalLineItem#targeting}.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ProductTemplateTargeting
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ProductTemplateTargeting";

    /**
     * @access public
     * @var GeoTargeting
     */
    public $geoTargeting;

    /**
     * @access public
     * @var boolean
     */
    public $allowGeoTargetingCustomization;

    /**
     * @access public
     * @var InventoryTargeting
     */
    public $inventoryTargeting;

    /**
     * @access public
     * @var boolean
     */
    public $allowAdUnitTargetingCustomization;

    /**
     * @access public
     * @var boolean
     */
    public $allowPlacementTargetingCustomization;

    /**
     * @access public
     * @var CustomCriteriaSet
     */
    public $customTargeting;

    /**
     * @access public
     * @var integer[]
     */
    public $customizableCustomTargetingKeyIds;

    /**
     * @access public
     * @var boolean
     */
    public $allowAudienceSegmentTargetingCustomization;

    /**
     * @access public
     * @var boolean
     */
    public $isAllCustomTargetingKeysCustomizable;

    /**
     * @access public
     * @var UserDomainTargeting
     */
    public $userDomainTargeting;

    /**
     * @access public
     * @var boolean
     */
    public $allowUserDomainTargetingCustomization;

    /**
     * @access public
     * @var BandwidthGroupTargeting
     */
    public $bandwidthGroupTargeting;

    /**
     * @access public
     * @var boolean
     */
    public $allowBandwidthGroupTargetingCustomization;

    /**
     * @access public
     * @var BrowserTargeting
     */
    public $browserTargeting;

    /**
     * @access public
     * @var boolean
     */
    public $allowBrowserTargetingCustomization;

    /**
     * @access public
     * @var BrowserLanguageTargeting
     */
    public $browserLanguageTargeting;

    /**
     * @access public
     * @var boolean
     */
    public $allowBrowserLanguageTargetingCustomization;

    /**
     * @access public
     * @var OperatingSystemTargeting
     */
    public $operatingSystemTargeting;

    /**
     * @access public
     * @var boolean
     */
    public $allowOperatingSystemTargetingCustomization;

    /**
     * @access public
     * @var DeviceCapabilityTargeting
     */
    public $deviceCapabilityTargeting;

    /**
     * @access public
     * @var boolean
     */
    public $allowDeviceCapabilityTargetingCustomization;

    /**
     * @access public
     * @var DeviceCategoryTargeting
     */
    public $deviceCategoryTargeting;

    /**
     * @access public
     * @var boolean
     */
    public $allowDeviceCategoryTargetingCustomization;

    /**
     * @access public
     * @var MobileCarrierTargeting
     */
    public $mobileCarrierTargeting;

    /**
     * @access public
     * @var boolean
     */
    public $allowMobileCarrierTargetingCustomization;

    /**
     * @access public
     * @var DeviceManufacturerTargeting
     */
    public $deviceManufacturerTargeting;

    /**
     * @access public
     * @var MobileDeviceTargeting
     */
    public $mobileDeviceTargeting;

    /**
     * @access public
     * @var MobileDeviceSubmodelTargeting
     */
    public $mobileDeviceSubmodelTargeting;

    /**
     * @access public
     * @var boolean
     */
    public $allowMobileDeviceAndManufacturerTargetingCustomization;

    /**
     * @access public
     * @var ContentTargeting
     */
    public $contentTargeting;

    /**
     * @access public
     * @var VideoPositionTargeting
     */
    public $videoPositionTargeting;

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

      public function __construct($geoTargeting = null, $allowGeoTargetingCustomization = null, $inventoryTargeting = null, $allowAdUnitTargetingCustomization = null, $allowPlacementTargetingCustomization = null, $customTargeting = null, $customizableCustomTargetingKeyIds = null, $allowAudienceSegmentTargetingCustomization = null, $isAllCustomTargetingKeysCustomizable = null, $userDomainTargeting = null, $allowUserDomainTargetingCustomization = null, $bandwidthGroupTargeting = null, $allowBandwidthGroupTargetingCustomization = null, $browserTargeting = null, $allowBrowserTargetingCustomization = null, $browserLanguageTargeting = null, $allowBrowserLanguageTargetingCustomization = null, $operatingSystemTargeting = null, $allowOperatingSystemTargetingCustomization = null, $deviceCapabilityTargeting = null, $allowDeviceCapabilityTargetingCustomization = null, $deviceCategoryTargeting = null, $allowDeviceCategoryTargetingCustomization = null, $mobileCarrierTargeting = null, $allowMobileCarrierTargetingCustomization = null, $deviceManufacturerTargeting = null, $mobileDeviceTargeting = null, $mobileDeviceSubmodelTargeting = null, $allowMobileDeviceAndManufacturerTargetingCustomization = null, $contentTargeting = null, $videoPositionTargeting = null)
      {
          $this->geoTargeting = $geoTargeting;
          $this->allowGeoTargetingCustomization = $allowGeoTargetingCustomization;
          $this->inventoryTargeting = $inventoryTargeting;
          $this->allowAdUnitTargetingCustomization = $allowAdUnitTargetingCustomization;
          $this->allowPlacementTargetingCustomization = $allowPlacementTargetingCustomization;
          $this->customTargeting = $customTargeting;
          $this->customizableCustomTargetingKeyIds = $customizableCustomTargetingKeyIds;
          $this->allowAudienceSegmentTargetingCustomization = $allowAudienceSegmentTargetingCustomization;
          $this->isAllCustomTargetingKeysCustomizable = $isAllCustomTargetingKeysCustomizable;
          $this->userDomainTargeting = $userDomainTargeting;
          $this->allowUserDomainTargetingCustomization = $allowUserDomainTargetingCustomization;
          $this->bandwidthGroupTargeting = $bandwidthGroupTargeting;
          $this->allowBandwidthGroupTargetingCustomization = $allowBandwidthGroupTargetingCustomization;
          $this->browserTargeting = $browserTargeting;
          $this->allowBrowserTargetingCustomization = $allowBrowserTargetingCustomization;
          $this->browserLanguageTargeting = $browserLanguageTargeting;
          $this->allowBrowserLanguageTargetingCustomization = $allowBrowserLanguageTargetingCustomization;
          $this->operatingSystemTargeting = $operatingSystemTargeting;
          $this->allowOperatingSystemTargetingCustomization = $allowOperatingSystemTargetingCustomization;
          $this->deviceCapabilityTargeting = $deviceCapabilityTargeting;
          $this->allowDeviceCapabilityTargetingCustomization = $allowDeviceCapabilityTargetingCustomization;
          $this->deviceCategoryTargeting = $deviceCategoryTargeting;
          $this->allowDeviceCategoryTargetingCustomization = $allowDeviceCategoryTargetingCustomization;
          $this->mobileCarrierTargeting = $mobileCarrierTargeting;
          $this->allowMobileCarrierTargetingCustomization = $allowMobileCarrierTargetingCustomization;
          $this->deviceManufacturerTargeting = $deviceManufacturerTargeting;
          $this->mobileDeviceTargeting = $mobileDeviceTargeting;
          $this->mobileDeviceSubmodelTargeting = $mobileDeviceSubmodelTargeting;
          $this->allowMobileDeviceAndManufacturerTargetingCustomization = $allowMobileDeviceAndManufacturerTargetingCustomization;
          $this->contentTargeting = $contentTargeting;
          $this->videoPositionTargeting = $videoPositionTargeting;
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\RangeError", false)) {
    /**
   * A list of all errors associated with the Range constraint.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class RangeError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\Size", false)) {
    /**
   * Represents the dimensions of an {@link AdUnit}, {@link LineItem} or {@link Creative}.
   * <p>
   * For interstitial size (out-of-page) and native size, {@code Size} must be 1x1.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class Size
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "Size";

    /**
     * @access public
     * @var integer
     */
    public $width;

    /**
     * @access public
     * @var integer
     */
    public $height;

    /**
     * @access public
     * @var boolean
     */
    public $isAspectRatio;

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

      public function __construct($width = null, $height = null, $isAspectRatio = null)
      {
          $this->width = $width;
          $this->height = $height;
          $this->isAspectRatio = $isAspectRatio;
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\Statement", false)) {
    /**
   * Captures the {@code WHERE}, {@code ORDER BY} and {@code LIMIT} clauses of a
   * PQL query. Statements are typically used to retrieve objects of a predefined
   * domain type, which makes SELECT clause unnecessary.
   * <p>
   * An example query text might be {@code "WHERE status = 'ACTIVE' ORDER BY id
   * LIMIT 30"}.
   * </p>
   * <p>
   * Statements support bind variables. These are substitutes for literals
   * and can be thought of as input parameters to a PQL query.
   * </p>
   * <p>
   * An example of such a query might be {@code "WHERE id = :idValue"}.
   * </p>
   * <p>
   * Statements also support use of the LIKE keyword. This provides partial and
   * wildcard string matching.
   * </p>
   * <p>
   * An example of such a query might be {@code "WHERE name LIKE 'startswith%'"}.
   * </p>
   * If using an API version newer than V201010, the value for the variable
   * idValue must then be set with an object of type {@link Value} and is one of
   * {@link NumberValue}, {@link TextValue} or {@link BooleanValue}.
   * <p>
   * If using an API version older than or equal to V201010, the value for the
   * variable idValue must then be set with an object of type {@link Param} and is
   * one of {@link DoubleParam}, {@link LongParam} or {@link StringParam}.
   * </p>
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class Statement
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "Statement";

    /**
     * @access public
     * @var string
     */
    public $query;

    /**
     * @access public
     * @var String_ValueMapEntry[]
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

      public function __construct($query = null, $values = null)
      {
          $this->query = $query;
          $this->values = $values;
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\String_ValueMapEntry", false)) {
    /**
   * This represents an entry in a map with a key of type String
   * and value of type Value.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class String_ValueMapEntry
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "String_ValueMapEntry";

    /**
     * @access public
     * @var string
     */
    public $key;

    /**
     * @access public
     * @var Value
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

      public function __construct($key = null, $value = null)
      {
          $this->key = $key;
          $this->value = $value;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\Technology", false)) {
    /**
   * Represents a technology entity that can be targeted.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class Technology
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "Technology";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var string
     */
    public $TechnologyType;
      private $_parameterMap = array(
      "Technology.Type" => "TechnologyType",
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

      public function __construct($id = null, $name = null, $TechnologyType = null)
      {
          $this->id = $id;
          $this->name = $name;
          $this->TechnologyType = $TechnologyType;
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\UpdateResult", false)) {
    /**
   * Represents the result of performing an action on objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class UpdateResult
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "UpdateResult";

    /**
     * @access public
     * @var integer
     */
    public $numChanges;

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

      public function __construct($numChanges = null)
      {
          $this->numChanges = $numChanges;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\UserDomainTargeting", false)) {
    /**
   * Provides line items the ability to target or exclude users visiting their
   * websites from a list of domains or subdomains.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class UserDomainTargeting
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "UserDomainTargeting";

    /**
     * @access public
     * @var string[]
     */
    public $domains;

    /**
     * @access public
     * @var boolean
     */
    public $targeted;

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

      public function __construct($domains = null, $targeted = null)
      {
          $this->domains = $domains;
          $this->targeted = $targeted;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\UserDomainTargetingError", false)) {
    /**
   * Lists all errors related to user domain targeting for a line item.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class UserDomainTargetingError extends ApiError
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "UserDomainTargetingError";

    /**
     * @access public
     * @var tnsUserDomainTargetingErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\Value", false)) {
    /**
   * {@code Value} represents a value.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class Value
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "Value";

    /**
     * @access public
     * @var string
     */
    public $ValueType;
      private $_parameterMap = array(
      "Value.Type" => "ValueType",
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

      public function __construct($ValueType = null)
      {
          $this->ValueType = $ValueType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\VideoPosition", false)) {
    /**
   * Represents a targetable position within a video. A video ad can be targeted
   * to a position (pre-roll, all mid-rolls, or post-roll), or to a specific mid-roll index.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class VideoPosition
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "VideoPosition";

    /**
     * @access public
     * @var tnsVideoPositionType
     */
    public $positionType;

    /**
     * @access public
     * @var integer
     */
    public $midrollIndex;

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

      public function __construct($positionType = null, $midrollIndex = null)
      {
          $this->positionType = $positionType;
          $this->midrollIndex = $midrollIndex;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\VideoPositionTargeting", false)) {
    /**
   * Represents positions within and around a video where ads can be targeted to.
   * <p>
   * Example positions could be {@code pre-roll} (before the video plays),
   * {@code post-roll} (after a video has completed playback) and
   * {@code mid-roll} (during video playback).
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class VideoPositionTargeting
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "VideoPositionTargeting";

    /**
     * @access public
     * @var VideoPositionTarget[]
     */
    public $targetedPositions;

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

      public function __construct($targetedPositions = null)
      {
          $this->targetedPositions = $targetedPositions;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\VideoPositionWithinPod", false)) {
    /**
   * Represents a targetable position within a pod within a video stream. A video ad can be targeted
   * to any position in the pod (first, second, third ... last).  If there is only 1 ad in a pod,
   * either first or last will target that position.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class VideoPositionWithinPod
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "VideoPositionWithinPod";

    /**
     * @access public
     * @var integer
     */
    public $index;

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

      public function __construct($index = null)
      {
          $this->index = $index;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\VideoPositionTarget", false)) {
    /**
   * Represents the options for targetable positions within a video.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class VideoPositionTarget
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "VideoPositionTarget";

    /**
     * @access public
     * @var VideoPosition
     */
    public $videoPosition;

    /**
     * @access public
     * @var tnsVideoBumperType
     */
    public $videoBumperType;

    /**
     * @access public
     * @var VideoPositionWithinPod
     */
    public $videoPositionWithinPod;

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

      public function __construct($videoPosition = null, $videoBumperType = null, $videoPositionWithinPod = null)
      {
          $this->videoPosition = $videoPosition;
          $this->videoBumperType = $videoBumperType;
          $this->videoPositionWithinPod = $videoPositionWithinPod;
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\BaseRateErrorReason", false)) {
    /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class BaseRateErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "BaseRateError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\CreativeSizeType", false)) {
    /**
   * Descriptions of the types of sizes a creative can be.  Not all creatives can
   * be described by a height-width pair, this provides additional context.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CreativeSizeType
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "CreativeSizeType";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\CustomCriteriaComparisonOperator", false)) {
    /**
   * Specifies the available comparison operators.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CustomCriteriaComparisonOperator
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "CustomCriteria.ComparisonOperator";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\CustomCriteriaSetLogicalOperator", false)) {
    /**
   * Specifies the available logical operators.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CustomCriteriaSetLogicalOperator
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "CustomCriteriaSet.LogicalOperator";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\CustomFieldValueErrorReason", false)) {
    /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CustomFieldValueErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "CustomFieldValueError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\CustomTargetingErrorReason", false)) {
    /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CustomTargetingErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "CustomTargetingError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\AudienceSegmentCriteriaComparisonOperator", false)) {
    /**
   * Specifies the available comparison operators.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class AudienceSegmentCriteriaComparisonOperator
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "AudienceSegmentCriteria.ComparisonOperator";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\EnvironmentType", false)) {
    /**
   * Enum for the valid environments in which ads can be shown.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class EnvironmentType
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "EnvironmentType";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\FrequencyCapErrorReason", false)) {
    /**
   * The value returned if the actual value is not exposed by the requested API version.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class FrequencyCapErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "FrequencyCapError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\GenericTargetingErrorReason", false)) {
    /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class GenericTargetingErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "GenericTargetingError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\GeoTargetingErrorReason", false)) {
    /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class GeoTargetingErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "GeoTargetingError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\InventoryTargetingErrorReason", false)) {
    /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class InventoryTargetingErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "InventoryTargetingError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\LineItemType", false)) {
    /**
   * {@code LineItemType} indicates the priority of a {@link LineItem}, determined
   * by the way in which impressions are reserved to be served for it.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class LineItemType
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "LineItemType";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\NullErrorReason", false)) {
    /**
   * The reasons for the validation error.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class NullErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ProductTemplateActionErrorReason", false)) {
    /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ProductTemplateActionErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ProductTemplateActionError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ProductTemplateErrorReason", false)) {
    /**
   * The reasons for the target error.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ProductTemplateErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ProductTemplateError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ProductTemplateStatus", false)) {
    /**
   * Describes the different statuses for ProductTemplate.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ProductTemplateStatus
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ProductTemplateStatus";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ProductType", false)) {
    /**
   * Describes the type of {@link Product}.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ProductType
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ProductType";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\RangeErrorReason", false)) {
    /**
   * The value returned if the actual value is not exposed by the requested API version.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class RangeErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\RateType", false)) {
    /**
   * Describes the type of event the advertiser is paying for. The values here correspond to the
   * values for the {@link LineItem#costType} field.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class RateType
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "RateType";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\RoadblockingType", false)) {
    /**
   * Describes the roadblocking types.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class RoadblockingType
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "RoadblockingType";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\TimeUnit", false)) {
    /**
   * Represent the possible time units for frequency capping.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class TimeUnit
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "TimeUnit";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\UserDomainTargetingErrorReason", false)) {
    /**
   * {@link ApiErrorReason} enum for user domain targeting error.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class UserDomainTargetingErrorReason
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "UserDomainTargetingError.Reason";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\VideoBumperType", false)) {
    /**
   * Represents the options for targetable bumper positions, surrounding an ad
   * pod, within a video stream. This includes before and after the supported ad
   * pod positions, {@link VideoPositionType#PREROLL},
   * {@link VideoPositionType#MIDROLL}, and {@link VideoPositionType#POSTROLL}.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class VideoBumperType
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "VideoBumperType";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\VideoPositionType", false)) {
    /**
   * Represents a targetable position within a video.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class VideoPositionType
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "VideoPosition.Type";

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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\CreateProductTemplates", false)) {
    /**
   * Creates new {@link ProductTemplate} objects.
   *
   * @param productTemplates the productTemplates to create
   * @return the persisted product templates with their Ids filled in
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CreateProductTemplates
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var ProductTemplate[]
     */
    public $productTemplates;

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

      public function __construct($productTemplates = null)
      {
          $this->productTemplates = $productTemplates;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\CreateProductTemplatesResponse", false)) {
    /**
   *
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CreateProductTemplatesResponse
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var ProductTemplate[]
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\GetProductTemplatesByStatement", false)) {
    /**
   * Gets a {@link ProductTemplatePage} of {@link ProductTemplate} objects
   * that satisfy the filtering criteria specified by given {@link Statement#query}.
   * The following fields are supported for filtering:
   *
   * <table>
   * <tr>
   * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
   * </tr>
   * <tr>
   * <td>{@code id}</td>
   * <td>{@link ProductTemplate#id}</td>
   * </tr>
   * <tr>
   * <td>{@code name}</td>
   * <td>{@link ProductTemplate#name}</td>
   * </tr>
   * <tr>
   * <td>{@code nameMacro}</td>
   * <td>{@link ProductTemplate#nameMacro}</td>
   * </tr>
   * <tr>
   * <td>{@code description}</td>
   * <td>{@link ProductTemplate#description}</td>
   * </tr>
   * <tr>
   * <td>{@code status}</td>
   * <td>{@link ProductTemplate#status}</td>
   * </tr>
   * <tr>
   * <td>{@code lastModifiedDateTime}</td>
   * <td>{@link ProductTemplate#lastModifiedDateTime}</td>
   * </tr>
   * <tr>
   * <td>{@code lineItemType}</td>
   * <td>{@link LineItemType}</td>
   * </tr>
   * <tr>
   * <td>{@code productType}</td>
   * <td>{@link ProductType}</td>
   * </tr>
   * <tr>
   * <td>{@code rateType}</td>
   * <td>{@link RateType}</td>
   * </tr>
   * </table>
   *
   * @param statement a Publisher Query Language statement which specifies the
   * filtering criteria over productTemplates
   * @return the productTemplates that match the given statement
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class GetProductTemplatesByStatement
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var Statement
     */
    public $statement;

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

      public function __construct($statement = null)
      {
          $this->statement = $statement;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\GetProductTemplatesByStatementResponse", false)) {
    /**
   *
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class GetProductTemplatesByStatementResponse
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var ProductTemplatePage
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\PerformProductTemplateAction", false)) {
    /**
   * Performs action on {@link ProductTemplate} objects that satisfy the given
   * {@link Statement#query}.
   *
   * @param action the action to perform
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of product templates
   * @return the result of the action performed
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class PerformProductTemplateAction
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var ProductTemplateAction
     */
    public $action;

    /**
     * @access public
     * @var Statement
     */
    public $filterStatement;

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

      public function __construct($action = null, $filterStatement = null)
      {
          $this->action = $action;
          $this->filterStatement = $filterStatement;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\PerformProductTemplateActionResponse", false)) {
    /**
   *
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class PerformProductTemplateActionResponse
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var UpdateResult
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\UpdateProductTemplates", false)) {
    /**
   * Updates the specified {@link ProductTemplate} objects.
   *
   * @param productTemplates the product templates to update
   * @return the updated product templates
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class UpdateProductTemplates
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var ProductTemplate[]
     */
    public $productTemplates;

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

      public function __construct($productTemplates = null)
      {
          $this->productTemplates = $productTemplates;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\UpdateProductTemplatesResponse", false)) {
    /**
   *
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class UpdateProductTemplatesResponse
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var ProductTemplate[]
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ObjectValue", false)) {
    /**
   * Contains an object value.
   * <p>
   * <b>This object is experimental!
   * <code>ObjectValue</code> is an experimental, innovative, and rapidly
   * changing new feature for DFP. Unfortunately, being on the bleeding edge means that we may make
   * backwards-incompatible changes to
   * <code>ObjectValue</code>. We will inform the community when this feature
   * is no longer experimental.</b>
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ObjectValue extends Value
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ObjectValue";

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

      public function __construct($ValueType = null)
      {
          parent::__construct();
          $this->ValueType = $ValueType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ActivateProductTemplates", false)) {
    /**
   * The action used for activating product templates.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ActivateProductTemplates extends ProductTemplateAction
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ActivateProductTemplates";

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

      public function __construct($ProductTemplateActionType = null)
      {
          parent::__construct();
          $this->ProductTemplateActionType = $ProductTemplateActionType;
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

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ArchiveProductTemplates", false)) {
    /**
   * The action used for archiving product template.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ArchiveProductTemplates extends ProductTemplateAction
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ArchiveProductTemplates";

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

      public function __construct($ProductTemplateActionType = null)
      {
          parent::__construct();
          $this->ProductTemplateActionType = $ProductTemplateActionType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\BandwidthGroup", false)) {
    /**
   * Represents a group of bandwidths that are logically organized by some well
   * known generic names such as 'Cable' or 'DSL'.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class BandwidthGroup extends Technology
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "BandwidthGroup";

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

      public function __construct($id = null, $name = null, $TechnologyType = null)
      {
          parent::__construct();
          $this->id = $id;
          $this->name = $name;
          $this->TechnologyType = $TechnologyType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\BooleanValue", false)) {
    /**
   * Contains a boolean value.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class BooleanValue extends Value
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "BooleanValue";

    /**
     * @access public
     * @var boolean
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

      public function __construct($value = null, $ValueType = null)
      {
          parent::__construct();
          $this->value = $value;
          $this->ValueType = $ValueType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\Browser", false)) {
    /**
   * Represents an internet browser.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class Browser extends Technology
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "Browser";

    /**
     * @access public
     * @var string
     */
    public $majorVersion;

    /**
     * @access public
     * @var string
     */
    public $minorVersion;

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

      public function __construct($majorVersion = null, $minorVersion = null, $id = null, $name = null, $TechnologyType = null)
      {
          parent::__construct();
          $this->majorVersion = $majorVersion;
          $this->minorVersion = $minorVersion;
          $this->id = $id;
          $this->name = $name;
          $this->TechnologyType = $TechnologyType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\BrowserLanguage", false)) {
    /**
   * Represents a Browser's language.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class BrowserLanguage extends Technology
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "BrowserLanguage";

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

      public function __construct($id = null, $name = null, $TechnologyType = null)
      {
          parent::__construct();
          $this->id = $id;
          $this->name = $name;
          $this->TechnologyType = $TechnologyType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\CustomCriteriaSet", false)) {
    /**
   * A {@link CustomCriteriaSet} comprises of a set of {@link CustomCriteriaNode}
   * objects combined by the
   * {@link CustomCriteriaSet.LogicalOperator#logicalOperator}. The custom
   * criteria targeting tree is subject to the rules defined on
   * {@link Targeting#customTargeting}.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CustomCriteriaSet extends CustomCriteriaNode
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "CustomCriteriaSet";

    /**
     * @access public
     * @var tnsCustomCriteriaSetLogicalOperator
     */
    public $logicalOperator;

    /**
     * @access public
     * @var CustomCriteriaNode[]
     */
    public $children;

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

      public function __construct($logicalOperator = null, $children = null, $CustomCriteriaNodeType = null)
      {
          parent::__construct();
          $this->logicalOperator = $logicalOperator;
          $this->children = $children;
          $this->CustomCriteriaNodeType = $CustomCriteriaNodeType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\CustomCriteriaLeaf", false)) {
    /**
   * A {@link CustomCriteriaLeaf} object represents a generic leaf of {@link CustomCriteria} tree
   * structure.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CustomCriteriaLeaf extends CustomCriteriaNode
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "CustomCriteriaLeaf";

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

      public function __construct($CustomCriteriaNodeType = null)
      {
          parent::__construct();
          $this->CustomCriteriaNodeType = $CustomCriteriaNodeType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\AudienceSegmentCriteria", false)) {
    /**
   * An {@link AudienceSegmentCriteria} object is used to target {@link AudienceSegment} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class AudienceSegmentCriteria extends CustomCriteriaLeaf
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "AudienceSegmentCriteria";

    /**
     * @access public
     * @var tnsAudienceSegmentCriteriaComparisonOperator
     */
    public $operator;

    /**
     * @access public
     * @var integer[]
     */
    public $audienceSegmentIds;

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

      public function __construct($operator = null, $audienceSegmentIds = null)
      {
          parent::__construct();
          $this->operator = $operator;
          $this->audienceSegmentIds = $audienceSegmentIds;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\DateTimeValue", false)) {
    /**
   * Contains a date-time value.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class DateTimeValue extends Value
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "DateTimeValue";

    /**
     * @access public
     * @var DateTime
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

      public function __construct($value = null, $ValueType = null)
      {
          parent::__construct();
          $this->value = $value;
          $this->ValueType = $ValueType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\DateValue", false)) {
    /**
   * Contains a date value.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class DateValue extends Value
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "DateValue";

    /**
     * @access public
     * @var Date
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

      public function __construct($value = null, $ValueType = null)
      {
          parent::__construct();
          $this->value = $value;
          $this->ValueType = $ValueType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\DeactivateProductTemplates", false)) {
    /**
   * The action used for deactivating product templates.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class DeactivateProductTemplates extends ProductTemplateAction
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "DeactivateProductTemplates";

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

      public function __construct($ProductTemplateActionType = null)
      {
          parent::__construct();
          $this->ProductTemplateActionType = $ProductTemplateActionType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\DeviceCapability", false)) {
    /**
   * Represents a capability of a physical device.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class DeviceCapability extends Technology
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "DeviceCapability";

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

      public function __construct($id = null, $name = null, $TechnologyType = null)
      {
          parent::__construct();
          $this->id = $id;
          $this->name = $name;
          $this->TechnologyType = $TechnologyType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\DeviceCategory", false)) {
    /**
   * Represents the category of a device.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class DeviceCategory extends Technology
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "DeviceCategory";

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

      public function __construct($id = null, $name = null, $TechnologyType = null)
      {
          parent::__construct();
          $this->id = $id;
          $this->name = $name;
          $this->TechnologyType = $TechnologyType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\DeviceManufacturer", false)) {
    /**
   * Represents a mobile device's manufacturer.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class DeviceManufacturer extends Technology
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "DeviceManufacturer";

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

      public function __construct($id = null, $name = null, $TechnologyType = null)
      {
          parent::__construct();
          $this->id = $id;
          $this->name = $name;
          $this->TechnologyType = $TechnologyType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\MobileCarrier", false)) {
    /**
   * Represents a mobile carrier.
   * Carrier targeting is only available to DFP mobile publishers.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class MobileCarrier extends Technology
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "MobileCarrier";

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

      public function __construct($id = null, $name = null, $TechnologyType = null)
      {
          parent::__construct();
          $this->id = $id;
          $this->name = $name;
          $this->TechnologyType = $TechnologyType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\MobileDevice", false)) {
    /**
   * Represents a Mobile Device.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class MobileDevice extends Technology
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "MobileDevice";

    /**
     * @access public
     * @var integer
     */
    public $manufacturerCriterionId;

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

      public function __construct($manufacturerCriterionId = null, $id = null, $name = null, $TechnologyType = null)
      {
          parent::__construct();
          $this->manufacturerCriterionId = $manufacturerCriterionId;
          $this->id = $id;
          $this->name = $name;
          $this->TechnologyType = $TechnologyType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\MobileDeviceSubmodel", false)) {
    /**
   * Represents a mobile device submodel.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class MobileDeviceSubmodel extends Technology
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "MobileDeviceSubmodel";

    /**
     * @access public
     * @var integer
     */
    public $mobileDeviceCriterionId;

    /**
     * @access public
     * @var integer
     */
    public $deviceManufacturerCriterionId;

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

      public function __construct($mobileDeviceCriterionId = null, $deviceManufacturerCriterionId = null, $id = null, $name = null, $TechnologyType = null)
      {
          parent::__construct();
          $this->mobileDeviceCriterionId = $mobileDeviceCriterionId;
          $this->deviceManufacturerCriterionId = $deviceManufacturerCriterionId;
          $this->id = $id;
          $this->name = $name;
          $this->TechnologyType = $TechnologyType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\NumberValue", false)) {
    /**
   * Contains a numeric value.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class NumberValue extends Value
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "NumberValue";

    /**
     * @access public
     * @var string
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

      public function __construct($value = null, $ValueType = null)
      {
          parent::__construct();
          $this->value = $value;
          $this->ValueType = $ValueType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\OperatingSystem", false)) {
    /**
   * Represents an Operating System, such as Linux, Mac OS or Windows.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class OperatingSystem extends Technology
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "OperatingSystem";

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

      public function __construct($id = null, $name = null, $TechnologyType = null)
      {
          parent::__construct();
          $this->id = $id;
          $this->name = $name;
          $this->TechnologyType = $TechnologyType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\OperatingSystemVersion", false)) {
    /**
   * Represents a specific version of an operating system.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class OperatingSystemVersion extends Technology
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "OperatingSystemVersion";

    /**
     * @access public
     * @var integer
     */
    public $majorVersion;

    /**
     * @access public
     * @var integer
     */
    public $minorVersion;

    /**
     * @access public
     * @var integer
     */
    public $microVersion;

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

      public function __construct($majorVersion = null, $minorVersion = null, $microVersion = null, $id = null, $name = null, $TechnologyType = null)
      {
          parent::__construct();
          $this->majorVersion = $majorVersion;
          $this->minorVersion = $minorVersion;
          $this->microVersion = $microVersion;
          $this->id = $id;
          $this->name = $name;
          $this->TechnologyType = $TechnologyType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\SetValue", false)) {
    /**
   * Contains a set of {@link Value Values}. May not contain duplicates.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class SetValue extends Value
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "SetValue";

    /**
     * @access public
     * @var Value[]
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

      public function __construct($values = null, $ValueType = null)
      {
          parent::__construct();
          $this->values = $values;
          $this->ValueType = $ValueType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\TextValue", false)) {
    /**
   * Contains a string value.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class TextValue extends Value
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "TextValue";

    /**
     * @access public
     * @var string
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

      public function __construct($value = null, $ValueType = null)
      {
          parent::__construct();
          $this->value = $value;
          $this->ValueType = $ValueType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\CustomCriteria", false)) {
    /**
   * A {@link CustomCriteria} object is used to perform custom criteria targeting
   * on custom targeting keys of type {@link CustomTargetingKey.Type#PREDEFINED}
   * or {@link CustomTargetingKey.Type#FREEFORM}.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CustomCriteria extends CustomCriteriaLeaf
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "CustomCriteria";

    /**
     * @access public
     * @var integer
     */
    public $keyId;

    /**
     * @access public
     * @var integer[]
     */
    public $valueIds;

    /**
     * @access public
     * @var tnsCustomCriteriaComparisonOperator
     */
    public $operator;

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

      public function __construct($keyId = null, $valueIds = null, $operator = null)
      {
          parent::__construct();
          $this->keyId = $keyId;
          $this->valueIds = $valueIds;
          $this->operator = $operator;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\Dfp\\v201411\\ProductTemplateService", false)) {
    /**
   * ProductTemplateService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ProductTemplateService extends DfpSoapClient
  {

    const SERVICE_NAME = "ProductTemplateService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/ProductTemplateService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/ProductTemplateService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "ActivateProductTemplates" => "ActivateProductTemplates",
      "AdUnitTargeting" => "AdUnitTargeting",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "AppliedLabel" => "AppliedLabel",
      "ArchiveProductTemplates" => "ArchiveProductTemplates",
      "AuthenticationError" => "AuthenticationError",
      "BandwidthGroup" => "BandwidthGroup",
      "BandwidthGroupTargeting" => "BandwidthGroupTargeting",
      "BaseCustomFieldValue" => "BaseCustomFieldValue",
      "BaseRateError" => "BaseRateError",
      "BooleanValue" => "BooleanValue",
      "Browser" => "Browser",
      "BrowserLanguage" => "BrowserLanguage",
      "BrowserLanguageTargeting" => "BrowserLanguageTargeting",
      "BrowserTargeting" => "BrowserTargeting",
      "CommonError" => "CommonError",
      "ContentMetadataKeyHierarchyTargeting" => "ContentMetadataKeyHierarchyTargeting",
      "ContentTargeting" => "ContentTargeting",
      "CreativePlaceholder" => "CreativePlaceholder",
      "CustomCriteria" => "CustomCriteria",
      "CustomCriteriaSet" => "CustomCriteriaSet",
      "CustomFieldValue" => "CustomFieldValue",
      "CustomFieldValueError" => "CustomFieldValueError",
      "CustomTargetingError" => "CustomTargetingError",
      "CustomCriteriaLeaf" => "CustomCriteriaLeaf",
      "CustomCriteriaNode" => "CustomCriteriaNode",
      "AudienceSegmentCriteria" => "AudienceSegmentCriteria",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DeactivateProductTemplates" => "DeactivateProductTemplates",
      "DeviceCapability" => "DeviceCapability",
      "DeviceCapabilityTargeting" => "DeviceCapabilityTargeting",
      "DeviceCategory" => "DeviceCategory",
      "DeviceCategoryTargeting" => "DeviceCategoryTargeting",
      "DeviceManufacturer" => "DeviceManufacturer",
      "DeviceManufacturerTargeting" => "DeviceManufacturerTargeting",
      "DropDownCustomFieldValue" => "DropDownCustomFieldValue",
      "FeatureError" => "FeatureError",
      "FrequencyCap" => "FrequencyCap",
      "FrequencyCapError" => "FrequencyCapError",
      "GenericTargetingError" => "GenericTargetingError",
      "GeoTargeting" => "GeoTargeting",
      "GeoTargetingError" => "GeoTargetingError",
      "InternalApiError" => "InternalApiError",
      "InventoryTargeting" => "InventoryTargeting",
      "InventoryTargetingError" => "InventoryTargetingError",
      "Location" => "DfpLocation",
      "MobileCarrier" => "MobileCarrier",
      "MobileCarrierTargeting" => "MobileCarrierTargeting",
      "MobileDevice" => "MobileDevice",
      "MobileDeviceSubmodel" => "MobileDeviceSubmodel",
      "MobileDeviceSubmodelTargeting" => "MobileDeviceSubmodelTargeting",
      "MobileDeviceTargeting" => "MobileDeviceTargeting",
      "NotNullError" => "NotNullError",
      "NullError" => "NullError",
      "NumberValue" => "NumberValue",
      "OperatingSystem" => "OperatingSystem",
      "OperatingSystemTargeting" => "OperatingSystemTargeting",
      "OperatingSystemVersion" => "OperatingSystemVersion",
      "PermissionError" => "PermissionError",
      "PlacementTargeting" => "PlacementTargeting",
      "ProductTemplateAction" => "ProductTemplateAction",
      "ProductTemplateActionError" => "ProductTemplateActionError",
      "ProductTemplate" => "ProductTemplate",
      "ProductTemplateError" => "ProductTemplateError",
      "ProductTemplatePage" => "ProductTemplatePage",
      "ProductSegmentation" => "ProductSegmentation",
      "ProductTemplateTargeting" => "ProductTemplateTargeting",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RangeError" => "RangeError",
      "RequiredCollectionError" => "RequiredCollectionError",
      "RequiredError" => "RequiredError",
      "RequiredNumberError" => "RequiredNumberError",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "Size" => "Size",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "StringLengthError" => "StringLengthError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "Technology" => "Technology",
      "TextValue" => "TextValue",
      "TypeError" => "TypeError",
      "UniqueError" => "UniqueError",
      "UpdateResult" => "UpdateResult",
      "UserDomainTargeting" => "UserDomainTargeting",
      "UserDomainTargetingError" => "UserDomainTargetingError",
      "Value" => "Value",
      "VideoPosition" => "VideoPosition",
      "VideoPositionTargeting" => "VideoPositionTargeting",
      "VideoPositionWithinPod" => "VideoPositionWithinPod",
      "VideoPositionTarget" => "VideoPositionTarget",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "BaseRateError.Reason" => "BaseRateErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "CreativeSizeType" => "CreativeSizeType",
      "CustomCriteria.ComparisonOperator" => "CustomCriteriaComparisonOperator",
      "CustomCriteriaSet.LogicalOperator" => "CustomCriteriaSetLogicalOperator",
      "CustomFieldValueError.Reason" => "CustomFieldValueErrorReason",
      "CustomTargetingError.Reason" => "CustomTargetingErrorReason",
      "AudienceSegmentCriteria.ComparisonOperator" => "AudienceSegmentCriteriaComparisonOperator",
      "EnvironmentType" => "EnvironmentType",
      "FeatureError.Reason" => "FeatureErrorReason",
      "FrequencyCapError.Reason" => "FrequencyCapErrorReason",
      "GenericTargetingError.Reason" => "GenericTargetingErrorReason",
      "GeoTargetingError.Reason" => "GeoTargetingErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "InventoryTargetingError.Reason" => "InventoryTargetingErrorReason",
      "LineItemType" => "LineItemType",
      "NotNullError.Reason" => "NotNullErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "ProductTemplateActionError.Reason" => "ProductTemplateActionErrorReason",
      "ProductTemplateError.Reason" => "ProductTemplateErrorReason",
      "ProductTemplateStatus" => "ProductTemplateStatus",
      "ProductType" => "ProductType",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RateType" => "RateType",
      "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "RequiredNumberError.Reason" => "RequiredNumberErrorReason",
      "RoadblockingType" => "RoadblockingType",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "TimeUnit" => "TimeUnit",
      "UserDomainTargetingError.Reason" => "UserDomainTargetingErrorReason",
      "VideoBumperType" => "VideoBumperType",
      "VideoPosition.Type" => "VideoPositionType",
      "createProductTemplates" => "CreateProductTemplates",
      "createProductTemplatesResponse" => "CreateProductTemplatesResponse",
      "getProductTemplatesByStatement" => "GetProductTemplatesByStatement",
      "getProductTemplatesByStatementResponse" => "GetProductTemplatesByStatementResponse",
      "performProductTemplateAction" => "PerformProductTemplateAction",
      "performProductTemplateActionResponse" => "PerformProductTemplateActionResponse",
      "updateProductTemplates" => "UpdateProductTemplates",
      "updateProductTemplatesResponse" => "UpdateProductTemplatesResponse",
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
     * Creates new {@link ProductTemplate} objects.
     *
     * @param productTemplates the productTemplates to create
     * @return the persisted product templates with their Ids filled in
     */
    public function createProductTemplates($productTemplates)
    {
        $args = new CreateProductTemplates($productTemplates);
        $result = $this->__soapCall("createProductTemplates", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link ProductTemplatePage} of {@link ProductTemplate} objects
     * that satisfy the filtering criteria specified by given {@link Statement#query}.
     * The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ProductTemplate#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link ProductTemplate#name}</td>
     * </tr>
     * <tr>
     * <td>{@code nameMacro}</td>
     * <td>{@link ProductTemplate#nameMacro}</td>
     * </tr>
     * <tr>
     * <td>{@code description}</td>
     * <td>{@link ProductTemplate#description}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link ProductTemplate#status}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link ProductTemplate#lastModifiedDateTime}</td>
     * </tr>
     * <tr>
     * <td>{@code lineItemType}</td>
     * <td>{@link LineItemType}</td>
     * </tr>
     * <tr>
     * <td>{@code productType}</td>
     * <td>{@link ProductType}</td>
     * </tr>
     * <tr>
     * <td>{@code rateType}</td>
     * <td>{@link RateType}</td>
     * </tr>
     * </table>
     *
     * @param statement a Publisher Query Language statement which specifies the
     * filtering criteria over productTemplates
     * @return the productTemplates that match the given statement
     */
    public function getProductTemplatesByStatement($statement)
    {
        $args = new GetProductTemplatesByStatement($statement);
        $result = $this->__soapCall("getProductTemplatesByStatement", array($args));

        return $result->rval;
    }
    /**
     * Performs action on {@link ProductTemplate} objects that satisfy the given
     * {@link Statement#query}.
     *
     * @param action the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of product templates
     * @return the result of the action performed
     */
    public function performProductTemplateAction($action, $filterStatement)
    {
        $args = new PerformProductTemplateAction($action, $filterStatement);
        $result = $this->__soapCall("performProductTemplateAction", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link ProductTemplate} objects.
     *
     * @param productTemplates the product templates to update
     * @return the updated product templates
     */
    public function updateProductTemplates($productTemplates)
    {
        $args = new UpdateProductTemplates($productTemplates);
        $result = $this->__soapCall("updateProductTemplates", array($args));

        return $result->rval;
    }
  }
}

