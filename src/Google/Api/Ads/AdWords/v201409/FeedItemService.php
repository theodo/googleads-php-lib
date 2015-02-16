<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the FeedItemService
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\CustomParameter", false)) {
    /**
   * CustomParameter is used to map a custom parameter key to its value.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class CustomParameter
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "CustomParameter";

    /**
     * @access public
     * @var string
     */
    public $key;

    /**
     * @access public
     * @var string
     */
    public $value;

    /**
     * @access public
     * @var boolean
     */
    public $isRemove;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($key = null, $value = null, $isRemove = null)
      {
          $this->key = $key;
          $this->value = $value;
          $this->isRemove = $isRemove;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\CustomParameters", false)) {
    /**
   * CustomParameters holds a list of CustomParameters to be treated as a map.
   * It has a special field used to indicate that the current map should be cleared and replaced
   * with this new map.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class CustomParameters
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "CustomParameters";

    /**
     * @access public
     * @var CustomParameter[]
     */
    public $parameters;

    /**
     * @access public
     * @var boolean
     */
    public $doReplace;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($parameters = null, $doReplace = null)
      {
          $this->parameters = $parameters;
          $this->doReplace = $doReplace;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\DateRange", false)) {
    /**
   * Represents a range of dates that has either an upper or a lower bound.
   * The format for the date is YYYYMMDD.
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\FeedItemAdGroupTargeting", false)) {
    /**
   * Specifies the adgroup the request context must match in order for
   * the feed item to be considered eligible for serving (aka the targeted adgroup).
   * E.g., if the below adgroup targeting is set to adgroup = X, then the feed
   * item can only serve under adgroup X.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItemAdGroupTargeting
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "FeedItemAdGroupTargeting";

    /**
     * @access public
     * @var integer
     */
    public $TargetingAdGroupId;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($TargetingAdGroupId = null)
      {
          $this->TargetingAdGroupId = $TargetingAdGroupId;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\FeedItemAttributeError", false)) {
    /**
   * Contains validation error details for a set of feed attributes.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItemAttributeError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "FeedItemAttributeError";

    /**
     * @access public
     * @var integer[]
     */
    public $feedAttributeIds;

    /**
     * @access public
     * @var integer
     */
    public $validationErrorCode;

    /**
     * @access public
     * @var string
     */
    public $errorInformation;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($feedAttributeIds = null, $validationErrorCode = null, $errorInformation = null)
      {
          $this->feedAttributeIds = $feedAttributeIds;
          $this->validationErrorCode = $validationErrorCode;
          $this->errorInformation = $errorInformation;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\FeedItemAttributeValue", false)) {
    /**
   * Represents a feed item's value for a particular feed attribute. A feed item's value is
   * composed of a collection of these attribute values.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItemAttributeValue
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "FeedItemAttributeValue";

    /**
     * @access public
     * @var integer
     */
    public $feedAttributeId;

    /**
     * @access public
     * @var integer
     */
    public $integerValue;

    /**
     * @access public
     * @var double
     */
    public $doubleValue;

    /**
     * @access public
     * @var boolean
     */
    public $booleanValue;

    /**
     * @access public
     * @var string
     */
    public $stringValue;

    /**
     * @access public
     * @var integer[]
     */
    public $integerValues;

    /**
     * @access public
     * @var double[]
     */
    public $doubleValues;

    /**
     * @access public
     * @var boolean[]
     */
    public $booleanValues;

    /**
     * @access public
     * @var string[]
     */
    public $stringValues;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($feedAttributeId = null, $integerValue = null, $doubleValue = null, $booleanValue = null, $stringValue = null, $integerValues = null, $doubleValues = null, $booleanValues = null, $stringValues = null)
      {
          $this->feedAttributeId = $feedAttributeId;
          $this->integerValue = $integerValue;
          $this->doubleValue = $doubleValue;
          $this->booleanValue = $booleanValue;
          $this->stringValue = $stringValue;
          $this->integerValues = $integerValues;
          $this->doubleValues = $doubleValues;
          $this->booleanValues = $booleanValues;
          $this->stringValues = $stringValues;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\FeedItemCampaignTargeting", false)) {
    /**
   * Specifies the campaign the request context must match in order for
   * the feed item to be considered eligible for serving (aka the targeted campaign).
   * E.g., if the below campaign targeting is set to campaignId = X, then the feed
   * item can only serve under campaign X.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItemCampaignTargeting
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "FeedItemCampaignTargeting";

    /**
     * @access public
     * @var integer
     */
    public $TargetingCampaignId;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($TargetingCampaignId = null)
      {
          $this->TargetingCampaignId = $TargetingCampaignId;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\FeedItemDevicePreference", false)) {
    /**
   * Represents a FeedItem device preference.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItemDevicePreference
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "FeedItemDevicePreference";

    /**
     * @access public
     * @var integer
     */
    public $devicePreference;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($devicePreference = null)
      {
          $this->devicePreference = $devicePreference;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\FeedItemSchedule", false)) {
    /**
   * Represents a FeedItem schedule, which specifies a time interval on a given day
   * when the feed item may serve. The FeedItemSchedule times are in the account's time zone.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItemSchedule
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "FeedItemSchedule";

    /**
     * @access public
     * @var tnsDayOfWeek
     */
    public $dayOfWeek;

    /**
     * @access public
     * @var integer
     */
    public $startHour;

    /**
     * @access public
     * @var tnsMinuteOfHour
     */
    public $startMinute;

    /**
     * @access public
     * @var integer
     */
    public $endHour;

    /**
     * @access public
     * @var tnsMinuteOfHour
     */
    public $endMinute;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($dayOfWeek = null, $startHour = null, $startMinute = null, $endHour = null, $endMinute = null)
      {
          $this->dayOfWeek = $dayOfWeek;
          $this->startHour = $startHour;
          $this->startMinute = $startMinute;
          $this->endHour = $endHour;
          $this->endMinute = $endMinute;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\FeedItemScheduling", false)) {
    /**
   * Represents a collection of FeedItem schedules specifying all time intervals for which
   * the feed item may serve. Any time range not covered by the specified FeedItemSchedules will
   * prevent the feed item from serving during those times.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItemScheduling
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "FeedItemScheduling";

    /**
     * @access public
     * @var FeedItemSchedule[]
     */
    public $feedItemSchedules;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($feedItemSchedules = null)
      {
          $this->feedItemSchedules = $feedItemSchedules;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\OrderBy", false)) {
    /**
   * Specifies how the resulting information should be sorted.
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
   * Specifies the page of results to return in the response. A page is specified
   * by the result position to start at and the maximum number of results to
   * return.
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
   * Specifies how an entity (eg. adgroup, campaign, criterion, ad) should be filtered.
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\ProductConditionOperand", false)) {
    /**
   * Attribute for the product condition.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class ProductConditionOperand
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "ProductConditionOperand";

    /**
     * @access public
     * @var string
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

      public function __construct($operand = null)
      {
          $this->operand = $operand;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\SoapRequestHeader", false)) {
    /**
   * Defines the required and optional elements within the header of a SOAP request.
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
   * Defines the elements within the header of a SOAP response.
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\FeedItemValidationDetail", false)) {
    /**
   * Contains offline-validation and approval results for a given FeedItem and FeedMapping. Each
   * validation detail indicates any issues found on the feed item when used in the context
   * of the feed mapping.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItemValidationDetail
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "FeedItemValidationDetail";

    /**
     * @access public
     * @var integer
     */
    public $feedMappingId;

    /**
     * @access public
     * @var tnsFeedItemValidationDetailValidationStatus
     */
    public $validationStatus;

    /**
     * @access public
     * @var FeedItemAttributeError[]
     */
    public $validationErrors;

    /**
     * @access public
     * @var tnsFeedItemValidationDetailApprovalStatus
     */
    public $approvalStatus;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($feedMappingId = null, $validationStatus = null, $validationErrors = null, $approvalStatus = null)
      {
          $this->feedMappingId = $feedMappingId;
          $this->validationStatus = $validationStatus;
          $this->validationErrors = $validationErrors;
          $this->approvalStatus = $approvalStatus;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\ProductCondition", false)) {
    /**
   * Conditions to filter the products defined in product feed for targeting.
   * The condition is defined as operand=argument.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class ProductCondition
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "ProductCondition";

    /**
     * @access public
     * @var string
     */
    public $argument;

    /**
     * @access public
     * @var ProductConditionOperand
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

      public function __construct($argument = null, $operand = null)
      {
          $this->argument = $argument;
          $this->operand = $operand;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\ApiError", false)) {
    /**
   * The API error base class that provides details about an error that occurred
   * while processing a service request.
   *
   * <p>The OGNL field path is provided for parsers to identify the request data
   * element that may have caused the error.</p>
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
   * Base class for exceptions.
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
   * A generic selector to specify the type of information to return.
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\Criterion", false)) {
    /**
   * Represents a criterion (such as a keyword, placement, or vertical).
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class Criterion
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "Criterion";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var tnsCriterionType
     */
    public $type;

    /**
     * @access public
     * @var string
     */
    public $CriterionType;
      private $_parameterMap = array(
      "Criterion.Type" => "CriterionType",
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

      public function __construct($id = null, $type = null, $CriterionType = null)
      {
          $this->id = $id;
          $this->type = $type;
          $this->CriterionType = $CriterionType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\FeedItem", false)) {
    /**
   * Represents an item in a feed.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItem
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "FeedItem";

    /**
     * @access public
     * @var integer
     */
    public $feedId;

    /**
     * @access public
     * @var integer
     */
    public $feedItemId;

    /**
     * @access public
     * @var tnsFeedItemStatus
     */
    public $status;

    /**
     * @access public
     * @var string
     */
    public $startTime;

    /**
     * @access public
     * @var string
     */
    public $endTime;

    /**
     * @access public
     * @var FeedItemAttributeValue[]
     */
    public $attributeValues;

    /**
     * @access public
     * @var FeedItemValidationDetail[]
     */
    public $validationDetails;

    /**
     * @access public
     * @var FeedItemDevicePreference
     */
    public $devicePreference;

    /**
     * @access public
     * @var FeedItemScheduling
     */
    public $scheduling;

    /**
     * @access public
     * @var FeedItemCampaignTargeting
     */
    public $campaignTargeting;

    /**
     * @access public
     * @var FeedItemAdGroupTargeting
     */
    public $adGroupTargeting;

    /**
     * @access public
     * @var Keyword
     */
    public $keywordTargeting;

    /**
     * @access public
     * @var CustomParameters
     */
    public $urlCustomParameters;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($feedId = null, $feedItemId = null, $status = null, $startTime = null, $endTime = null, $attributeValues = null, $validationDetails = null, $devicePreference = null, $scheduling = null, $campaignTargeting = null, $adGroupTargeting = null, $keywordTargeting = null, $urlCustomParameters = null)
      {
          $this->feedId = $feedId;
          $this->feedItemId = $feedItemId;
          $this->status = $status;
          $this->startTime = $startTime;
          $this->endTime = $endTime;
          $this->attributeValues = $attributeValues;
          $this->validationDetails = $validationDetails;
          $this->devicePreference = $devicePreference;
          $this->scheduling = $scheduling;
          $this->campaignTargeting = $campaignTargeting;
          $this->adGroupTargeting = $adGroupTargeting;
          $this->keywordTargeting = $keywordTargeting;
          $this->urlCustomParameters = $urlCustomParameters;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\ListReturnValue", false)) {
    /**
   * Base list return value type.
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
   * This represents an operation that includes an operator and an operand
   * specified type.
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
   * Contains the results from a get call.
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\AuthenticationErrorReason", false)) {
    /**
   * The single reason for the authentication failure.
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
   * The reasons for the database error.
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
   * Enums for the various reasons an error can be thrown as a result of
   * ClientTerms violation.
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\CriterionType", false)) {
    /**
   * The types of criteria.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class CriterionType
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "Criterion.Type";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
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
   * The reasons for the database error.
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\DateErrorReason", false)) {
    /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class DateErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "DateError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\DayOfWeek", false)) {
    /**
   * Days of the week.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class DayOfWeek
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "DayOfWeek";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
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
   * The reasons for the validation error.
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\EntityAccessDeniedReason", false)) {
    /**
   * User did not have read access.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class EntityAccessDeniedReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "EntityAccessDenied.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
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
   * Limits at various levels of the account.
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
   * The specified id refered to an entity which either doesn't exist or is not accessible to the
   * customer. e.g. campaign belongs to another customer.
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\FeedItemStatus", false)) {
    /**
   * Feed item is active
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItemStatus
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "FeedItem.Status";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\FeedItemErrorReason", false)) {
    /**
   * The reasons for the error.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItemErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "FeedItemError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\FeedItemValidationDetailApprovalStatus", false)) {
    /**
   * Feed item approval status.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItemValidationDetailApprovalStatus
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "FeedItemValidationDetail.ApprovalStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\FeedItemValidationDetailValidationStatus", false)) {
    /**
   * Feed item validation status.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItemValidationDetailValidationStatus
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "FeedItemValidationDetail.ValidationStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
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
   * The reasons for the target error.
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
   * The single reason for the internal API error.
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\KeywordMatchType", false)) {
    /**
   * Match type of a keyword. i.e. the way we match a keyword string with
   * search queries.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class KeywordMatchType
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "KeywordMatchType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\MinuteOfHour", false)) {
    /**
   * Minutes in an hour.  Currently only 0, 15, 30, and 45 are supported
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class MinuteOfHour
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "MinuteOfHour";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
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
   * The reasons for the validation error.
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
   * The reasons for the validation error.
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
   * The reasons for the operation access error.
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
   * This represents an operator that may be presented to an adsapi service.
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\PredicateOperator", false)) {
    /**
   * Defines the valid set of operators.
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\QueryErrorReason", false)) {
    /**
   * The reason for the query error.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class QueryErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "QueryError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
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
   * Enums for all the reasons an error can be thrown to the user during
   * billing quota checks.
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
   * The reasons for the target error.
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
   * The reason for the rate exceeded error.
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
   * The reasons for the target error.
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
   * The reasons for the target error.
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
   * Error reason is unknown.
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
   * The reasons for the target error.
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\SelectorErrorReason", false)) {
    /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class SelectorErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "SelectorError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
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
   * The reasons for Ad Scheduling errors.
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
   * Possible orders of sorting.
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
   * The reasons for the target error.
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\UrlErrorReason", false)) {
    /**
   * The reasons for the url error.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class UrlErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "UrlError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\CriterionUserListMembershipStatus", false)) {
    /**
   * Membership status of the user list.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class CriterionUserListMembershipStatus
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "CriterionUserList.MembershipStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\FeedItemServiceGet", false)) {
    /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns a list of FeedItems that meet the selector criteria.
   *
   * @param selector Determines which FeedItems to return. If empty all
   * FeedItems are returned.
   * @return The list of FeedItems.
   * @throws ApiException Indicates a problem with the request.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItemServiceGet
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\FeedItemServiceGetResponse", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItemServiceGetResponse
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var FeedItemPage
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\FeedItemServiceMutate", false)) {
    /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Add, remove, and set FeedItems.
   *
   * @param operations The operations to apply.
   * @return The resulting FeedItems.
   * @throws ApiException Indicates a problem with the request.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItemServiceMutate
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var FeedItemOperation[]
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\FeedItemServiceMutateResponse", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItemServiceMutateResponse
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var FeedItemReturnValue
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\Query", false)) {
    /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns the list of FeedItems that match the query.
   *
   * @param query The SQL-like AWQL query string
   * @returns A list of FeedItems
   * @throws ApiException when the query is invalid or there are errors processing the request.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class Query
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var string
     */
    public $query;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($query = null)
      {
          $this->query = $query;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\QueryResponse", false)) {
    /**
   *
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class QueryResponse
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var FeedItemPage
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
   * Errors returned when Authentication failed.
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
   * Errors encountered when trying to authorize a user.
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
   * Error due to user not accepting the AdWords terms of service.
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\DateError", false)) {
    /**
   * Errors associated with invalid dates and date ranges.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class DateError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "DateError";

    /**
     * @access public
     * @var tnsDateErrorReason
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
   * Errors related to distinct ids or content.
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\EntityAccessDenied", false)) {
    /**
   * Reports permission problems trying to access an entity.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class EntityAccessDenied extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "EntityAccessDenied";

    /**
     * @access public
     * @var tnsEntityAccessDeniedReason
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
   * Signals that an entity count limit was exceeded for some level.
   * For example, too many criteria for a campaign.
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
   * An id did not correspond to an entity, or it referred to an entity which does not belong to the
   * customer.
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\FeedItemError", false)) {
    /**
   * FeedItemService related errors.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItemError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "FeedItemError";

    /**
     * @access public
     * @var tnsFeedItemErrorReason
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
   * Errors associated with the ids.
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
   * Indicates that a server-side error has occured. {@code InternalApiError}s
   * are generally not the result of an invalid request or message sent by the
   * client.
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\Keyword", false)) {
    /**
   * Represents a keyword.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class Keyword extends Criterion
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "Keyword";

    /**
     * @access public
     * @var string
     */
    public $text;

    /**
     * @access public
     * @var tnsKeywordMatchType
     */
    public $matchType;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($text = null, $matchType = null, $id = null, $type = null, $CriterionType = null)
      {
          parent::__construct();
          $this->text = $text;
          $this->matchType = $matchType;
          $this->id = $id;
          $this->type = $type;
          $this->CriterionType = $CriterionType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\MobileAppCategory", false)) {
    /**
   * Represents the mobile app category to be targeted.
   * <a href="/adwords/api/docs/appendix/mobileappcategories">View the complete list of
   * available mobile app categories</a>.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class MobileAppCategory extends Criterion
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "MobileAppCategory";

    /**
     * @access public
     * @var integer
     */
    public $mobileAppCategoryId;

    /**
     * @access public
     * @var string
     */
    public $displayName;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($mobileAppCategoryId = null, $displayName = null, $id = null, $type = null, $CriterionType = null)
      {
          parent::__construct();
          $this->mobileAppCategoryId = $mobileAppCategoryId;
          $this->displayName = $displayName;
          $this->id = $id;
          $this->type = $type;
          $this->CriterionType = $CriterionType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\MobileApplication", false)) {
    /**
   * Represents the mobile application to be targeted.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class MobileApplication extends Criterion
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "MobileApplication";

    /**
     * @access public
     * @var string
     */
    public $appId;

    /**
     * @access public
     * @var string
     */
    public $displayName;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($appId = null, $displayName = null, $id = null, $type = null, $CriterionType = null)
      {
          parent::__construct();
          $this->appId = $appId;
          $this->displayName = $displayName;
          $this->id = $id;
          $this->type = $type;
          $this->CriterionType = $CriterionType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\NotEmptyError", false)) {
    /**
   * Errors corresponding with violation of a NOT EMPTY check.
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
   * Errors associated with violation of a NOT NULL check.
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
   * Operation not permitted due to the invoked service's access policy.
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\Placement", false)) {
    /**
   * A placement used for modifying bids for sites when targeting the content
   * network.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class Placement extends Criterion
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "Placement";

    /**
     * @access public
     * @var string
     */
    public $url;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($url = null, $id = null, $type = null, $CriterionType = null)
      {
          parent::__construct();
          $this->url = $url;
          $this->id = $id;
          $this->type = $type;
          $this->CriterionType = $CriterionType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\QueryError", false)) {
    /**
   * A QueryError represents possible errors for query parsing and execution.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class QueryError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "QueryError";

    /**
     * @access public
     * @var tnsQueryErrorReason
     */
    public $reason;

    /**
     * @access public
     * @var string
     */
    public $message;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($reason = null, $message = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
      {
          parent::__construct();
          $this->reason = $reason;
          $this->message = $message;
          $this->fieldPath = $fieldPath;
          $this->trigger = $trigger;
          $this->errorString = $errorString;
          $this->ApiErrorType = $ApiErrorType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\QuotaCheckError", false)) {
    /**
   * Encapsulates the errors thrown during developer quota checks.
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
   * A list of all errors associated with the Range constraint.
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
   * Signals that a call failed because a measured rate exceeded.
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
   * Errors from attempting to write to read-only fields.
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
   * Indicates that a field was rejected due to compatibility issues.
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
   * Encapsulates the generic errors thrown when there's an error with user
   * request.
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
   * Errors due to missing required field.
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\SelectorError", false)) {
    /**
   * Represents possible error codes for {@link Selector}.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class SelectorError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "SelectorError";

    /**
     * @access public
     * @var tnsSelectorErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\SizeLimitError", false)) {
    /**
   * Indicates that the number of entries in the request or response exceeds the system limit.
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
   * Errors associated with the length of the given string being
   * out of bounds.
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\UrlError", false)) {
    /**
   * Url Validation errors.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class UrlError extends ApiError
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "UrlError";

    /**
     * @access public
     * @var tnsUrlErrorReason
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\CriterionUserInterest", false)) {
    /**
   * User Interest represents a particular interest-based vertical to be targeted.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class CriterionUserInterest extends Criterion
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "CriterionUserInterest";

    /**
     * @access public
     * @var integer
     */
    public $userInterestId;

    /**
     * @access public
     * @var string
     */
    public $userInterestName;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($userInterestId = null, $userInterestName = null, $id = null, $type = null, $CriterionType = null)
      {
          parent::__construct();
          $this->userInterestId = $userInterestId;
          $this->userInterestName = $userInterestName;
          $this->id = $id;
          $this->type = $type;
          $this->CriterionType = $CriterionType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\CriterionUserList", false)) {
    /**
   * UserList - represents a user list that is defined by the advertiser to be targeted.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class CriterionUserList extends Criterion
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "CriterionUserList";

    /**
     * @access public
     * @var integer
     */
    public $userListId;

    /**
     * @access public
     * @var string
     */
    public $userListName;

    /**
     * @access public
     * @var tnsCriterionUserListMembershipStatus
     */
    public $userListMembershipStatus;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($userListId = null, $userListName = null, $userListMembershipStatus = null, $id = null, $type = null, $CriterionType = null)
      {
          parent::__construct();
          $this->userListId = $userListId;
          $this->userListName = $userListName;
          $this->userListMembershipStatus = $userListMembershipStatus;
          $this->id = $id;
          $this->type = $type;
          $this->CriterionType = $CriterionType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\Vertical", false)) {
    /**
   * Use verticals to target or exclude placements in the Google Display Network
   * based on the category into which the placement falls (for example, "Pets &amp;
   * Animals/Pets/Dogs").
   * <a href="/adwords/api/docs/appendix/verticals">View the complete list
   * of available vertical categories.</a>
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class Vertical extends Criterion
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "Vertical";

    /**
     * @access public
     * @var integer
     */
    public $verticalId;

    /**
     * @access public
     * @var integer
     */
    public $verticalParentId;

    /**
     * @access public
     * @var string[]
     */
    public $path;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($verticalId = null, $verticalParentId = null, $path = null, $id = null, $type = null, $CriterionType = null)
      {
          parent::__construct();
          $this->verticalId = $verticalId;
          $this->verticalParentId = $verticalParentId;
          $this->path = $path;
          $this->id = $id;
          $this->type = $type;
          $this->CriterionType = $CriterionType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\DatabaseError", false)) {
    /**
   * Errors that are thrown due to a database access problem.
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\ApiException", false)) {
    /**
   * \Exception class for holding a list of service errors.
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\Product", false)) {
    /**
   * Product targeting criteria, represents a filter for products in the
   * product feed that is defined by the advertiser. The criteria is used to
   * determine the products in a Merchant Center account to be used with the
   * ProductAds in the AdGroup. This criteria is available only to some advertisers.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class Product extends Criterion
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "Product";

    /**
     * @access public
     * @var ProductCondition[]
     */
    public $conditions;

    /**
     * @access public
     * @var string
     */
    public $text;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($conditions = null, $text = null, $id = null, $type = null, $CriterionType = null)
      {
          parent::__construct();
          $this->conditions = $conditions;
          $this->text = $text;
          $this->id = $id;
          $this->type = $type;
          $this->CriterionType = $CriterionType;
      }
  }
}

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\FeedItemOperation", false)) {
    /**
   * FeedItem service mutate operation.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItemOperation extends Operation
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "FeedItemOperation";

    /**
     * @access public
     * @var FeedItem
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\FeedItemReturnValue", false)) {
    /**
   * A container for return values from FeedItemService.mutate().
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItemReturnValue extends ListReturnValue
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "FeedItemReturnValue";

    /**
     * @access public
     * @var FeedItem[]
     */
    public $value;

    /**
     * @access public
     * @var ApiError[]
     */
    public $partialFailureErrors;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($value = null, $partialFailureErrors = null, $ListReturnValueType = null)
      {
          parent::__construct();
          $this->value = $value;
          $this->partialFailureErrors = $partialFailureErrors;
          $this->ListReturnValueType = $ListReturnValueType;
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\FeedItemPage", false)) {
    /**
   * Contains a subset of feed items resulting from a {@link FeedItemService#get} call.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItemPage extends NullStatsPage
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "FeedItemPage";

    /**
     * @access public
     * @var FeedItem[]
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

if (!class_exists("\\Google\\Api\\Ads\\AdWords\\v201409\\FeedItemService", false)) {
    /**
   * FeedItemService
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItemService extends AdWordsSoapClient
  {

    const SERVICE_NAME = "FeedItemService";
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201409/FeedItemService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201409/FeedItemService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AuthenticationError" => "\\Google\\Api\\Ads\\AdWords\\v201409\\AuthenticationError",
      "AuthorizationError" => "\\Google\\Api\\Ads\\AdWords\\v201409\\AuthorizationError",
      "ClientTermsError" => "\\Google\\Api\\Ads\\AdWords\\v201409\\ClientTermsError",
      "CustomParameter" => "\\Google\\Api\\Ads\\AdWords\\v201409\\CustomParameter",
      "CustomParameters" => "\\Google\\Api\\Ads\\AdWords\\v201409\\CustomParameters",
      "DateError" => "\\Google\\Api\\Ads\\AdWords\\v201409\\DateError",
      "DateRange" => "\\Google\\Api\\Ads\\AdWords\\v201409\\DateRange",
      "DistinctError" => "\\Google\\Api\\Ads\\AdWords\\v201409\\DistinctError",
      "EntityAccessDenied" => "\\Google\\Api\\Ads\\AdWords\\v201409\\EntityAccessDenied",
      "EntityCountLimitExceeded" => "\\Google\\Api\\Ads\\AdWords\\v201409\\EntityCountLimitExceeded",
      "EntityNotFound" => "\\Google\\Api\\Ads\\AdWords\\v201409\\EntityNotFound",
      "FeedItemAdGroupTargeting" => "FeedItemAdGroupTargeting",
      "FeedItemAttributeError" => "FeedItemAttributeError",
      "FeedItemAttributeValue" => "FeedItemAttributeValue",
      "FeedItemCampaignTargeting" => "FeedItemCampaignTargeting",
      "FeedItemDevicePreference" => "FeedItemDevicePreference",
      "FeedItemError" => "FeedItemError",
      "FeedItemSchedule" => "FeedItemSchedule",
      "FeedItemScheduling" => "FeedItemScheduling",
      "IdError" => "\\Google\\Api\\Ads\\AdWords\\v201409\\IdError",
      "InternalApiError" => "\\Google\\Api\\Ads\\AdWords\\v201409\\InternalApiError",
      "Keyword" => "\\Google\\Api\\Ads\\AdWords\\v201409\\Keyword",
      "MobileAppCategory" => "\\Google\\Api\\Ads\\AdWords\\v201409\\MobileAppCategory",
      "MobileApplication" => "\\Google\\Api\\Ads\\AdWords\\v201409\\MobileApplication",
      "NotEmptyError" => "\\Google\\Api\\Ads\\AdWords\\v201409\\NotEmptyError",
      "NullError" => "\\Google\\Api\\Ads\\AdWords\\v201409\\NullError",
      "OperationAccessDenied" => "\\Google\\Api\\Ads\\AdWords\\v201409\\OperationAccessDenied",
      "OrderBy" => "\\Google\\Api\\Ads\\AdWords\\v201409\\OrderBy",
      "Paging" => "\\Google\\Api\\Ads\\AdWords\\v201409\\Paging",
      "Placement" => "\\Google\\Api\\Ads\\AdWords\\v201409\\Placement",
      "Predicate" => "\\Google\\Api\\Ads\\AdWords\\v201409\\Predicate",
      "ProductConditionOperand" => "\\Google\\Api\\Ads\\AdWords\\v201409\\ProductConditionOperand",
      "QueryError" => "\\Google\\Api\\Ads\\AdWords\\v201409\\QueryError",
      "QuotaCheckError" => "\\Google\\Api\\Ads\\AdWords\\v201409\\QuotaCheckError",
      "RangeError" => "\\Google\\Api\\Ads\\AdWords\\v201409\\RangeError",
      "RateExceededError" => "\\Google\\Api\\Ads\\AdWords\\v201409\\RateExceededError",
      "ReadOnlyError" => "\\Google\\Api\\Ads\\AdWords\\v201409\\ReadOnlyError",
      "RejectedError" => "\\Google\\Api\\Ads\\AdWords\\v201409\\RejectedError",
      "RequestError" => "\\Google\\Api\\Ads\\AdWords\\v201409\\RequestError",
      "RequiredError" => "\\Google\\Api\\Ads\\AdWords\\v201409\\RequiredError",
      "SelectorError" => "\\Google\\Api\\Ads\\AdWords\\v201409\\SelectorError",
      "SizeLimitError" => "\\Google\\Api\\Ads\\AdWords\\v201409\\SizeLimitError",
      "SoapHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "StringLengthError" => "\\Google\\Api\\Ads\\AdWords\\v201409\\StringLengthError",
      "UrlError" => "\\Google\\Api\\Ads\\AdWords\\v201409\\UrlError",
      "CriterionUserInterest" => "\\Google\\Api\\Ads\\AdWords\\v201409\\CriterionUserInterest",
      "CriterionUserList" => "\\Google\\Api\\Ads\\AdWords\\v201409\\CriterionUserList",
      "Vertical" => "\\Google\\Api\\Ads\\AdWords\\v201409\\Vertical",
      "DatabaseError" => "\\Google\\Api\\Ads\\AdWords\\v201409\\DatabaseError",
      "FeedItemValidationDetail" => "FeedItemValidationDetail",
      "ProductCondition" => "\\Google\\Api\\Ads\\AdWords\\v201409\\ProductCondition",
      "ApiError" => "\\Google\\Api\\Ads\\AdWords\\v201409\\ApiError",
      "ApiException" => "\\Google\\Api\\Ads\\AdWords\\v201409\\ApiException",
      "ApplicationException" => "\\Google\\Api\\Ads\\AdWords\\v201409\\ApplicationException",
      "Product" => "\\Google\\Api\\Ads\\AdWords\\v201409\\Product",
      "Selector" => "\\Google\\Api\\Ads\\AdWords\\v201409\\Selector",
      "Criterion" => "\\Google\\Api\\Ads\\AdWords\\v201409\\Criterion",
      "FeedItem" => "FeedItem",
      "FeedItemOperation" => "FeedItemOperation",
      "FeedItemPage" => "FeedItemPage",
      "FeedItemReturnValue" => "FeedItemReturnValue",
      "ListReturnValue" => "\\Google\\Api\\Ads\\AdWords\\v201409\\ListReturnValue",
      "NullStatsPage" => "NullStatsPage",
      "Operation" => "\\Google\\Api\\Ads\\AdWords\\v201409\\Operation",
      "Page" => "\\Google\\Api\\Ads\\AdWords\\v201409\\Page",
      "AuthenticationError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\AuthenticationErrorReason",
      "AuthorizationError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\AuthorizationErrorReason",
      "ClientTermsError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\ClientTermsErrorReason",
      "Criterion.Type" => "\\Google\\Api\\Ads\\AdWords\\v201409\\CriterionType",
      "DatabaseError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\DatabaseErrorReason",
      "DateError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\DateErrorReason",
      "DayOfWeek" => "DayOfWeek",
      "DistinctError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\DistinctErrorReason",
      "EntityAccessDenied.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\EntityAccessDeniedReason",
      "EntityCountLimitExceeded.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\EntityCountLimitExceededReason",
      "EntityNotFound.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\EntityNotFoundReason",
      "FeedItem.Status" => "FeedItemStatus",
      "FeedItemError.Reason" => "FeedItemErrorReason",
      "FeedItemValidationDetail.ApprovalStatus" => "FeedItemValidationDetailApprovalStatus",
      "FeedItemValidationDetail.ValidationStatus" => "FeedItemValidationDetailValidationStatus",
      "IdError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\IdErrorReason",
      "InternalApiError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\InternalApiErrorReason",
      "KeywordMatchType" => "\\Google\\Api\\Ads\\AdWords\\v201409\\KeywordMatchType",
      "MinuteOfHour" => "MinuteOfHour",
      "NotEmptyError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\NotEmptyErrorReason",
      "NullError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\NullErrorReason",
      "OperationAccessDenied.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\OperationAccessDeniedReason",
      "Operator" => "\\Google\\Api\\Ads\\AdWords\\v201409\\Operator",
      "Predicate.Operator" => "\\Google\\Api\\Ads\\AdWords\\v201409\\PredicateOperator",
      "QueryError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\QueryErrorReason",
      "QuotaCheckError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\QuotaCheckErrorReason",
      "RangeError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\RangeErrorReason",
      "RateExceededError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\RateExceededErrorReason",
      "ReadOnlyError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\ReadOnlyErrorReason",
      "RejectedError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\RejectedErrorReason",
      "RequestError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\RequestErrorReason",
      "RequiredError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\RequiredErrorReason",
      "SelectorError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\SelectorErrorReason",
      "SizeLimitError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\SizeLimitErrorReason",
      "SortOrder" => "\\Google\\Api\\Ads\\AdWords\\v201409\\SortOrder",
      "StringLengthError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\StringLengthErrorReason",
      "UrlError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201409\\UrlErrorReason",
      "CriterionUserList.MembershipStatus" => "\\Google\\Api\\Ads\\AdWords\\v201409\\CriterionUserListMembershipStatus",
      "get" => "FeedItemServiceGet",
      "getResponse" => "FeedItemServiceGetResponse",
      "mutate" => "FeedItemServiceMutate",
      "mutateResponse" => "FeedItemServiceMutateResponse",
      "query" => "Query",
      "queryResponse" => "QueryResponse",
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
     * Returns a list of FeedItems that meet the selector criteria.
     *
     * @param selector Determines which FeedItems to return. If empty all
     * FeedItems are returned.
     * @return The          list of FeedItems.
     * @throws ApiException Indicates a problem with the request.
     */
    public function get($selector)
    {
        $args = new FeedItemServiceGet($selector);
        $result = $this->__soapCall("get", array($args));

        return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Add, remove, and set FeedItems.
     *
     * @param operations The operations to apply.
     * @return The          resulting FeedItems.
     * @throws ApiException Indicates a problem with the request.
     */
    public function mutate($operations)
    {
        $args = new FeedItemServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($args));

        return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns the list of FeedItems that match the query.
     *
     * @param query The SQL-like AWQL query string
     * @returns A list of FeedItems
     * @throws ApiException when the query is invalid or there are errors processing the request.
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall("query", array($args));

        return $result->rval;
    }
  }
}

