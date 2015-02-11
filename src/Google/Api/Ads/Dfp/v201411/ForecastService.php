<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the ForecastService
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


if (!class_exists("ForecastService", false)) {
    /**
   * ForecastService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ForecastService extends DfpSoapClient
  {

    const SERVICE_NAME = "ForecastService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/ForecastService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/ForecastService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "AdUnitAfcSizeError" => "AdUnitAfcSizeError",
      "AdUnitCodeError" => "AdUnitCodeError",
      "AdUnitTargeting" => "AdUnitTargeting",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "TechnologyTargeting" => "TechnologyTargeting",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "AppliedLabel" => "AppliedLabel",
      "AudienceExtensionError" => "AudienceExtensionError",
      "AuthenticationError" => "AuthenticationError",
      "BandwidthGroup" => "BandwidthGroup",
      "BandwidthGroupTargeting" => "BandwidthGroupTargeting",
      "BaseCustomFieldValue" => "BaseCustomFieldValue",
      "BooleanValue" => "BooleanValue",
      "Browser" => "Browser",
      "BrowserLanguage" => "BrowserLanguage",
      "BrowserLanguageTargeting" => "BrowserLanguageTargeting",
      "BrowserTargeting" => "BrowserTargeting",
      "ClickTrackingLineItemError" => "ClickTrackingLineItemError",
      "CommonError" => "CommonError",
      "CompanyCreditStatusError" => "CompanyCreditStatusError",
      "ContendingLineItem" => "ContendingLineItem",
      "ContentMetadataKeyHierarchyTargeting" => "ContentMetadataKeyHierarchyTargeting",
      "ContentMetadataTargetingError" => "ContentMetadataTargetingError",
      "ContentTargeting" => "ContentTargeting",
      "CreativeError" => "CreativeError",
      "CreativePlaceholder" => "CreativePlaceholder",
      "CrossSellError" => "CrossSellError",
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
      "DateTimeRangeTargetingError" => "DateTimeRangeTargetingError",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DayPart" => "DayPart",
      "DayPartTargeting" => "DayPartTargeting",
      "DayPartTargetingError" => "DayPartTargetingError",
      "DeliveryData" => "DeliveryData",
      "DeliveryIndicator" => "DeliveryIndicator",
      "DeviceCapability" => "DeviceCapability",
      "DeviceCapabilityTargeting" => "DeviceCapabilityTargeting",
      "DeviceCategory" => "DeviceCategory",
      "DeviceCategoryTargeting" => "DeviceCategoryTargeting",
      "DeviceManufacturer" => "DeviceManufacturer",
      "DeviceManufacturerTargeting" => "DeviceManufacturerTargeting",
      "DropDownCustomFieldValue" => "DropDownCustomFieldValue",
      "EntityChildrenLimitReachedError" => "EntityChildrenLimitReachedError",
      "EntityLimitReachedError" => "EntityLimitReachedError",
      "FeatureError" => "FeatureError",
      "Forecast" => "Forecast",
      "ForecastError" => "ForecastError",
      "FrequencyCap" => "FrequencyCap",
      "FrequencyCapError" => "FrequencyCapError",
      "GenericTargetingError" => "GenericTargetingError",
      "GeoTargeting" => "GeoTargeting",
      "GeoTargetingError" => "GeoTargetingError",
      "Goal" => "Goal",
      "GrpSettings" => "GrpSettings",
      "InternalApiError" => "InternalApiError",
      "InvalidUrlError" => "InvalidUrlError",
      "InventoryTargeting" => "InventoryTargeting",
      "InventoryTargetingError" => "InventoryTargetingError",
      "InventoryUnitError" => "InventoryUnitError",
      "LabelEntityAssociationError" => "LabelEntityAssociationError",
      "LineItemActivityAssociationError" => "LineItemActivityAssociationError",
      "LineItemActivityAssociation" => "LineItemActivityAssociation",
      "LineItemCreativeAssociationError" => "LineItemCreativeAssociationError",
      "LineItem" => "LineItem",
      "LineItemError" => "LineItemError",
      "LineItemFlightDateError" => "LineItemFlightDateError",
      "LineItemOperationError" => "LineItemOperationError",
      "LineItemSummary" => "LineItemSummary",
      "Location" => "DfpLocation",
      "MobileCarrier" => "MobileCarrier",
      "MobileCarrierTargeting" => "MobileCarrierTargeting",
      "MobileDevice" => "MobileDevice",
      "MobileDeviceSubmodel" => "MobileDeviceSubmodel",
      "MobileDeviceSubmodelTargeting" => "MobileDeviceSubmodelTargeting",
      "MobileDeviceTargeting" => "MobileDeviceTargeting",
      "Money" => "Money",
      "NotNullError" => "NotNullError",
      "NullError" => "NullError",
      "NumberValue" => "NumberValue",
      "OperatingSystem" => "OperatingSystem",
      "OperatingSystemTargeting" => "OperatingSystemTargeting",
      "OperatingSystemVersion" => "OperatingSystemVersion",
      "OperatingSystemVersionTargeting" => "OperatingSystemVersionTargeting",
      "OrderError" => "OrderError",
      "ParseError" => "ParseError",
      "PermissionError" => "PermissionError",
      "ProgrammaticError" => "ProgrammaticError",
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
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "Size" => "Size",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "StatementError" => "StatementError",
      "Stats" => "Stats",
      "StringLengthError" => "StringLengthError",
      "Targeting" => "Targeting",
      "TeamError" => "TeamError",
      "Technology" => "Technology",
      "TechnologyTargetingError" => "TechnologyTargetingError",
      "TextValue" => "TextValue",
      "TimeOfDay" => "TimeOfDay",
      "TypeError" => "TypeError",
      "UniqueError" => "UniqueError",
      "UserDomainTargeting" => "UserDomainTargeting",
      "UserDomainTargetingError" => "UserDomainTargetingError",
      "Value" => "Value",
      "VideoPosition" => "VideoPosition",
      "VideoPositionTargeting" => "VideoPositionTargeting",
      "VideoPositionWithinPod" => "VideoPositionWithinPod",
      "VideoPositionTarget" => "VideoPositionTarget",
      "AdUnitAfcSizeError.Reason" => "AdUnitAfcSizeErrorReason",
      "AdUnitCodeError.Reason" => "AdUnitCodeErrorReason",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AudienceExtensionError.Reason" => "AudienceExtensionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "ClickTrackingLineItemError.Reason" => "ClickTrackingLineItemErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "CompanionDeliveryOption" => "CompanionDeliveryOption",
      "CompanyCreditStatusError.Reason" => "CompanyCreditStatusErrorReason",
      "ComputedStatus" => "ComputedStatus",
      "ContentMetadataTargetingError.Reason" => "ContentMetadataTargetingErrorReason",
      "CostType" => "CostType",
      "CreativeError.Reason" => "CreativeErrorReason",
      "CreativeRotationType" => "CreativeRotationType",
      "CreativeSizeType" => "CreativeSizeType",
      "CrossSellError.Reason" => "CrossSellErrorReason",
      "CustomCriteria.ComparisonOperator" => "CustomCriteriaComparisonOperator",
      "CustomCriteriaSet.LogicalOperator" => "CustomCriteriaSetLogicalOperator",
      "CustomFieldValueError.Reason" => "CustomFieldValueErrorReason",
      "CustomTargetingError.Reason" => "CustomTargetingErrorReason",
      "AudienceSegmentCriteria.ComparisonOperator" => "AudienceSegmentCriteriaComparisonOperator",
      "DateTimeRangeTargetingError.Reason" => "DateTimeRangeTargetingErrorReason",
      "DayOfWeek" => "DayOfWeek",
      "DayPartTargetingError.Reason" => "DayPartTargetingErrorReason",
      "DeliveryTimeZone" => "DeliveryTimeZone",
      "DeliveryRateType" => "DeliveryRateType",
      "EntityChildrenLimitReachedError.Reason" => "EntityChildrenLimitReachedErrorReason",
      "EnvironmentType" => "EnvironmentType",
      "FeatureError.Reason" => "FeatureErrorReason",
      "ForecastError.Reason" => "ForecastErrorReason",
      "FrequencyCapError.Reason" => "FrequencyCapErrorReason",
      "GenericTargetingError.Reason" => "GenericTargetingErrorReason",
      "GeoTargetingError.Reason" => "GeoTargetingErrorReason",
      "GoalType" => "GoalType",
      "GrpProvider" => "GrpProvider",
      "GrpTargetGender" => "GrpTargetGender",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "InvalidUrlError.Reason" => "InvalidUrlErrorReason",
      "InventoryTargetingError.Reason" => "InventoryTargetingErrorReason",
      "InventoryUnitError.Reason" => "InventoryUnitErrorReason",
      "LabelEntityAssociationError.Reason" => "LabelEntityAssociationErrorReason",
      "LineItemActivityAssociationError.Reason" => "LineItemActivityAssociationErrorReason",
      "LineItemCreativeAssociationError.Reason" => "LineItemCreativeAssociationErrorReason",
      "LineItemDiscountType" => "LineItemDiscountType",
      "LineItemError.Reason" => "LineItemErrorReason",
      "LineItemFlightDateError.Reason" => "LineItemFlightDateErrorReason",
      "LineItemOperationError.Reason" => "LineItemOperationErrorReason",
      "LineItemSummary.ReservationStatus" => "LineItemSummaryReservationStatus",
      "LineItemType" => "LineItemType",
      "MinuteOfHour" => "MinuteOfHour",
      "NotNullError.Reason" => "NotNullErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "OrderError.Reason" => "OrderErrorReason",
      "ParseError.Reason" => "ParseErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "CreativePersistenceType" => "CreativePersistenceType",
      "ProgrammaticError.Reason" => "ProgrammaticErrorReason",
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
      "RoadblockingType" => "RoadblockingType",
      "ServerError.Reason" => "ServerErrorReason",
      "StartDateTimeType" => "StartDateTimeType",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "TargetPlatform" => "TargetPlatform",
      "TeamError.Reason" => "TeamErrorReason",
      "TechnologyTargetingError.Reason" => "TechnologyTargetingErrorReason",
      "TimeUnit" => "TimeUnit",
      "UnitType" => "UnitType",
      "UserDomainTargetingError.Reason" => "UserDomainTargetingErrorReason",
      "VideoBumperType" => "VideoBumperType",
      "VideoPosition.Type" => "VideoPositionType",
      "getForecast" => "GetForecast",
      "getForecastResponse" => "GetForecastResponse",
      "getForecastById" => "GetForecastById",
      "getForecastByIdResponse" => "GetForecastByIdResponse",
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
     * Gets a {@link Forecast} on a prospective {@link LineItem} object. Valid
     * values for {@link LineItem#lineItemType} are
     * {@link LineItemType#SPONSORSHIP} and {@link LineItemType#STANDARD}. Other
     * values will result in
     * {@link ReservationDetailsError.Reason#LINE_ITEM_TYPE_NOT_ALLOWED}.
     *
     * @param lineItem the target of the forecast. If {@link LineItem#id} is null
     * or no line item exists with that ID, a forecast is computed for the
     * the subject, predicting what would happen if it were added to the
     * system. If a line item already exists with {@link LineItem#id}, the
     * forecast is computed for the subject, predicting what would happen
     * if the existing line item's settings were modified to match the
     * subject.
     * @return the forecasted traffic estimates
     */
    public function getForecast($lineItem)
    {
        $args = new GetForecast($lineItem);
        $result = $this->__soapCall("getForecast", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link Forecast} for an existing {@link LineItem} object. Only
     * line items having type {@link LineItemType#SPONSORSHIP} or
     * {@link LineItemType#STANDARD} are valid. Other types will result in
     * {@link ReservationDetailsError.Reason#LINE_ITEM_TYPE_NOT_ALLOWED}.
     *
     * @param lineItemId the ID of a {@link LineItem} to run the forecast on.
     * @return the forecasted traffic estimates
     */
    public function getForecastById($lineItemId)
    {
        $args = new GetForecastById($lineItemId);
        $result = $this->__soapCall("getForecastById", array($args));

        return $result->rval;
    }
  }
}

