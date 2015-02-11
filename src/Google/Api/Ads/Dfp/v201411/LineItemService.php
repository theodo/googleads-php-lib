<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the LineItemService
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



































































































































































































































if (!class_exists("LineItemService", false)) {
    /**
   * LineItemService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class LineItemService extends DfpSoapClient
  {

    const SERVICE_NAME = "LineItemService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/LineItemService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/LineItemService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "ActivateLineItems" => "ActivateLineItems",
      "AdUnitTargeting" => "AdUnitTargeting",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "TechnologyTargeting" => "TechnologyTargeting",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "AppliedLabel" => "AppliedLabel",
      "ArchiveLineItems" => "ArchiveLineItems",
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
      "DeleteLineItems" => "DeleteLineItems",
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
      "LabelEntityAssociationError" => "LabelEntityAssociationError",
      "LineItemAction" => "LineItemAction",
      "LineItemActivityAssociationError" => "LineItemActivityAssociationError",
      "LineItemActivityAssociation" => "LineItemActivityAssociation",
      "LineItemCreativeAssociationError" => "LineItemCreativeAssociationError",
      "LineItem" => "LineItem",
      "LineItemError" => "LineItemError",
      "LineItemFlightDateError" => "LineItemFlightDateError",
      "LineItemOperationError" => "LineItemOperationError",
      "LineItemPage" => "LineItemPage",
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
      "PauseLineItems" => "PauseLineItems",
      "PermissionError" => "PermissionError",
      "ProgrammaticError" => "ProgrammaticError",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RangeError" => "RangeError",
      "ReleaseLineItems" => "ReleaseLineItems",
      "RequiredCollectionError" => "RequiredCollectionError",
      "RequiredError" => "RequiredError",
      "RequiredNumberError" => "RequiredNumberError",
      "RequiredSizeError" => "RequiredSizeError",
      "ReservationDetailsError" => "ReservationDetailsError",
      "ReserveAndOverbookLineItems" => "ReserveAndOverbookLineItems",
      "ReserveLineItems" => "ReserveLineItems",
      "ResumeAndOverbookLineItems" => "ResumeAndOverbookLineItems",
      "ResumeLineItems" => "ResumeLineItems",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "Size" => "Size",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "Stats" => "Stats",
      "StringLengthError" => "StringLengthError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "Targeting" => "Targeting",
      "TeamError" => "TeamError",
      "Technology" => "Technology",
      "TechnologyTargetingError" => "TechnologyTargetingError",
      "TextValue" => "TextValue",
      "TimeOfDay" => "TimeOfDay",
      "TypeError" => "TypeError",
      "UnarchiveLineItems" => "UnarchiveLineItems",
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
      "createLineItems" => "CreateLineItems",
      "createLineItemsResponse" => "CreateLineItemsResponse",
      "getLineItemsByStatement" => "GetLineItemsByStatement",
      "getLineItemsByStatementResponse" => "GetLineItemsByStatementResponse",
      "performLineItemAction" => "PerformLineItemAction",
      "performLineItemActionResponse" => "PerformLineItemActionResponse",
      "updateLineItems" => "UpdateLineItems",
      "updateLineItemsResponse" => "UpdateLineItemsResponse",
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
     * Creates new {@link LineItem} objects.
     *
     * @param lineItems the line items to create
     * @return the created line items with their IDs filled in
     */
    public function createLineItems($lineItems)
    {
        $args = new CreateLineItems($lineItems);
        $result = $this->__soapCall("createLineItems", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link LineItemPage} of {@link LineItem} objects that satisfy the
     * given {@link Statement#query}. The following fields are supported for
     * filtering:
     *
     * <table>
     * <tr><th scope="col">PQL property</th><th scope="col">Entity property</th> </tr>
     * <tr><td><code>CostType</code></td><td>{@link LineItem#costType}</td></tr>
     * <tr><td><code>CreationDateTime</code></td><td>{@link LineItem#creationDateTime}</td></tr>
     * <tr><td><code>DeliveryRateType</code></td><td>{@link LineItem#deliveryRateType}</td></tr>
     * <tr><td><code>EndDateTime</code></td><td>{@link LineItem#endDateTime}</td></tr>
     * <tr><td><code>ExternalId</code></td><td>{@link LineItem#externalId}</td></tr>
     * <tr><td><code>Id</code></td><td>{@link LineItem#id}</td></tr>
     * <tr><td><code>IsMissingCreatives</code></td><td>{@link LineItem#isMissingCreatives}</td></tr>
     * <tr><td><code>LastModifiedDateTime</code></td><td>{@link LineItem#lastModifiedDateTime}</td></tr>
     * <tr><td><code>LineItemType</code></td><td>{@link LineItem#lineItemType}</td></tr>
     * <tr><td><code>Name</code></td><td>{@link LineItem#name}</td></tr>
     * <tr><td><code>OrderId</code></td><td>{@link LineItem#orderId}</td></tr>
     * <tr><td><code>StartDateTime</code></td><td>{@link LineItem#startDateTime}</td></tr>
     * <tr><td><code>Status</code></td><td>{@link LineItem#status}</td></tr>
     * <tr><td><code>Targeting</code></td><td>{@link LineItem#targeting}</td></tr>
     * <tr><td><code>UnitsBought</code></td><td>{@link LineItem#unitsBought}</td></tr>
     * </table>
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of line items.
     * @return the line items that match the given filter
     */
    public function getLineItemsByStatement($filterStatement)
    {
        $args = new GetLineItemsByStatement($filterStatement);
        $result = $this->__soapCall("getLineItemsByStatement", array($args));

        return $result->rval;
    }
    /**
     * Performs actions on {@link LineItem} objects that match the given
     * {@link Statement#query}.
     *
     * @param lineItemAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of line items
     * @return the result of the action performed
     */
    public function performLineItemAction($lineItemAction, $filterStatement)
    {
        $args = new PerformLineItemAction($lineItemAction, $filterStatement);
        $result = $this->__soapCall("performLineItemAction", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link LineItem} objects.
     *
     * @param lineItems the line items to update
     * @return the updated line items
     */
    public function updateLineItems($lineItems)
    {
        $args = new UpdateLineItems($lineItems);
        $result = $this->__soapCall("updateLineItems", array($args));

        return $result->rval;
    }
  }
}

