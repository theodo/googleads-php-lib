<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the PublisherQueryLanguageService
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


if (!class_exists("PublisherQueryLanguageService", false)) {
    /**
   * PublisherQueryLanguageService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class PublisherQueryLanguageService extends DfpSoapClient
  {

    const SERVICE_NAME = "PublisherQueryLanguageService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/PublisherQueryLanguageService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/PublisherQueryLanguageService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "AdUnitAfcSizeError" => "AdUnitAfcSizeError",
      "AdUnitCodeError" => "AdUnitCodeError",
      "AdUnitHierarchyError" => "AdUnitHierarchyError",
      "AdUnitTargeting" => "AdUnitTargeting",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "TechnologyTargeting" => "TechnologyTargeting",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "AuthenticationError" => "AuthenticationError",
      "BandwidthGroup" => "BandwidthGroup",
      "BandwidthGroupTargeting" => "BandwidthGroupTargeting",
      "BooleanValue" => "BooleanValue",
      "Browser" => "Browser",
      "BrowserLanguage" => "BrowserLanguage",
      "BrowserLanguageTargeting" => "BrowserLanguageTargeting",
      "BrowserTargeting" => "BrowserTargeting",
      "ColumnType" => "ColumnType",
      "CommonError" => "CommonError",
      "ContentMetadataKeyHierarchyTargeting" => "ContentMetadataKeyHierarchyTargeting",
      "ContentTargeting" => "ContentTargeting",
      "CreativeError" => "CreativeError",
      "CustomCriteria" => "CustomCriteria",
      "CustomCriteriaSet" => "CustomCriteriaSet",
      "CustomCriteriaLeaf" => "CustomCriteriaLeaf",
      "CustomCriteriaNode" => "CustomCriteriaNode",
      "AudienceSegmentCriteria" => "AudienceSegmentCriteria",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DayPart" => "DayPart",
      "DayPartTargeting" => "DayPartTargeting",
      "DeviceCapability" => "DeviceCapability",
      "DeviceCapabilityTargeting" => "DeviceCapabilityTargeting",
      "DeviceCategory" => "DeviceCategory",
      "DeviceCategoryTargeting" => "DeviceCategoryTargeting",
      "DeviceManufacturer" => "DeviceManufacturer",
      "DeviceManufacturerTargeting" => "DeviceManufacturerTargeting",
      "ExchangeRateError" => "ExchangeRateError",
      "FeatureError" => "FeatureError",
      "FileError" => "FileError",
      "GeoTargeting" => "GeoTargeting",
      "InternalApiError" => "InternalApiError",
      "InvalidEmailError" => "InvalidEmailError",
      "InvalidUrlError" => "InvalidUrlError",
      "InventoryTargeting" => "InventoryTargeting",
      "InventoryTargetingError" => "InventoryTargetingError",
      "InventoryUnitError" => "InventoryUnitError",
      "LineItemFlightDateError" => "LineItemFlightDateError",
      "LineItemOperationError" => "LineItemOperationError",
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
      "OperatingSystemVersionTargeting" => "OperatingSystemVersionTargeting",
      "OrderActionError" => "OrderActionError",
      "OrderError" => "OrderError",
      "ParseError" => "ParseError",
      "PermissionError" => "PermissionError",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RangeError" => "RangeError",
      "RegExError" => "RegExError",
      "RequiredCollectionError" => "RequiredCollectionError",
      "RequiredError" => "RequiredError",
      "RequiredNumberError" => "RequiredNumberError",
      "RequiredSizeError" => "RequiredSizeError",
      "ReservationDetailsError" => "ReservationDetailsError",
      "ResultSet" => "ResultSet",
      "Row" => "Row",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "Targeting" => "Targeting",
      "TargetingValue" => "TargetingValue",
      "Technology" => "Technology",
      "TextValue" => "TextValue",
      "TimeOfDay" => "TimeOfDay",
      "TypeError" => "TypeError",
      "UniqueError" => "UniqueError",
      "UserDomainTargeting" => "UserDomainTargeting",
      "Value" => "Value",
      "VideoPosition" => "VideoPosition",
      "VideoPositionTargeting" => "VideoPositionTargeting",
      "VideoPositionWithinPod" => "VideoPositionWithinPod",
      "VideoPositionTarget" => "VideoPositionTarget",
      "AdUnitAfcSizeError.Reason" => "AdUnitAfcSizeErrorReason",
      "AdUnitCodeError.Reason" => "AdUnitCodeErrorReason",
      "AdUnitHierarchyError.Reason" => "AdUnitHierarchyErrorReason",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "CreativeError.Reason" => "CreativeErrorReason",
      "CustomCriteria.ComparisonOperator" => "CustomCriteriaComparisonOperator",
      "CustomCriteriaSet.LogicalOperator" => "CustomCriteriaSetLogicalOperator",
      "AudienceSegmentCriteria.ComparisonOperator" => "AudienceSegmentCriteriaComparisonOperator",
      "DayOfWeek" => "DayOfWeek",
      "DeliveryTimeZone" => "DeliveryTimeZone",
      "ExchangeRateError.Reason" => "ExchangeRateErrorReason",
      "FeatureError.Reason" => "FeatureErrorReason",
      "FileError.Reason" => "FileErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "InvalidEmailError.Reason" => "InvalidEmailErrorReason",
      "InvalidUrlError.Reason" => "InvalidUrlErrorReason",
      "InventoryTargetingError.Reason" => "InventoryTargetingErrorReason",
      "InventoryUnitError.Reason" => "InventoryUnitErrorReason",
      "LineItemFlightDateError.Reason" => "LineItemFlightDateErrorReason",
      "LineItemOperationError.Reason" => "LineItemOperationErrorReason",
      "MinuteOfHour" => "MinuteOfHour",
      "NotNullError.Reason" => "NotNullErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "OrderActionError.Reason" => "OrderActionErrorReason",
      "OrderError.Reason" => "OrderErrorReason",
      "ParseError.Reason" => "ParseErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RegExError.Reason" => "RegExErrorReason",
      "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "RequiredNumberError.Reason" => "RequiredNumberErrorReason",
      "RequiredSizeError.Reason" => "RequiredSizeErrorReason",
      "ReservationDetailsError.Reason" => "ReservationDetailsErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "VideoBumperType" => "VideoBumperType",
      "VideoPosition.Type" => "VideoPositionType",
      "select" => "Select",
      "selectResponse" => "SelectResponse",
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
     * Retrieves rows of data that satisfy the given {@link Statement#query} from
     * the system.
     *
     * @param selectStatement a Publisher Query Language statement used to
     * specify what data needs to returned
     *
     * @return a result set of data that matches the given filter
     */
    public function select($selectStatement)
    {
        $args = new Select($selectStatement);
        $result = $this->__soapCall("select", array($args));

        return $result->rval;
    }
  }
}

