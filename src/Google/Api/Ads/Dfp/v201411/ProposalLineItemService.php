<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the ProposalLineItemService
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


if (!class_exists("ProposalLineItemService", false)) {
    /**
   * ProposalLineItemService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ProposalLineItemService extends DfpSoapClient
  {

    const SERVICE_NAME = "ProposalLineItemService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/ProposalLineItemService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/ProposalLineItemService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "AdUnitPremiumFeature" => "AdUnitPremiumFeature",
      "AdUnitTargeting" => "AdUnitTargeting",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "TechnologyTargeting" => "TechnologyTargeting",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "AppliedLabel" => "AppliedLabel",
      "ArchiveProposalLineItems" => "ArchiveProposalLineItems",
      "AudienceSegmentPremiumFeature" => "AudienceSegmentPremiumFeature",
      "AuthenticationError" => "AuthenticationError",
      "AvailableBillingError" => "AvailableBillingError",
      "BandwidthPremiumFeature" => "BandwidthPremiumFeature",
      "BandwidthGroup" => "BandwidthGroup",
      "BandwidthGroupTargeting" => "BandwidthGroupTargeting",
      "BaseCustomFieldValue" => "BaseCustomFieldValue",
      "BillingError" => "BillingError",
      "BooleanValue" => "BooleanValue",
      "Browser" => "Browser",
      "BrowserPremiumFeature" => "BrowserPremiumFeature",
      "BrowserLanguage" => "BrowserLanguage",
      "BrowserLanguagePremiumFeature" => "BrowserLanguagePremiumFeature",
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
      "CustomTargetingPremiumFeature" => "CustomTargetingPremiumFeature",
      "CustomCriteriaLeaf" => "CustomCriteriaLeaf",
      "CustomCriteriaNode" => "CustomCriteriaNode",
      "AudienceSegmentCriteria" => "AudienceSegmentCriteria",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DayPart" => "DayPart",
      "DaypartPremiumFeature" => "DaypartPremiumFeature",
      "DayPartTargeting" => "DayPartTargeting",
      "DayPartTargetingError" => "DayPartTargetingError",
      "DeliveryData" => "DeliveryData",
      "DeliveryIndicator" => "DeliveryIndicator",
      "DeviceCapability" => "DeviceCapability",
      "DeviceCapabilityPremiumFeature" => "DeviceCapabilityPremiumFeature",
      "DeviceCapabilityTargeting" => "DeviceCapabilityTargeting",
      "DeviceCategory" => "DeviceCategory",
      "DeviceCategoryPremiumFeature" => "DeviceCategoryPremiumFeature",
      "DeviceCategoryTargeting" => "DeviceCategoryTargeting",
      "DeviceManufacturer" => "DeviceManufacturer",
      "DeviceManufacturerPremiumFeature" => "DeviceManufacturerPremiumFeature",
      "DeviceManufacturerTargeting" => "DeviceManufacturerTargeting",
      "DropDownCustomFieldValue" => "DropDownCustomFieldValue",
      "FeatureError" => "FeatureError",
      "FrequencyCap" => "FrequencyCap",
      "FrequencyCapError" => "FrequencyCapError",
      "FrequencyCapPremiumFeature" => "FrequencyCapPremiumFeature",
      "GenericTargetingError" => "GenericTargetingError",
      "GeoTargeting" => "GeoTargeting",
      "GeoTargetingError" => "GeoTargetingError",
      "GeographyPremiumFeature" => "GeographyPremiumFeature",
      "Goal" => "Goal",
      "InternalApiError" => "InternalApiError",
      "InventoryTargeting" => "InventoryTargeting",
      "InventoryTargetingError" => "InventoryTargetingError",
      "LabelEntityAssociationError" => "LabelEntityAssociationError",
      "Location" => "DfpLocation",
      "MobileCarrier" => "MobileCarrier",
      "MobileCarrierPremiumFeature" => "MobileCarrierPremiumFeature",
      "MobileCarrierTargeting" => "MobileCarrierTargeting",
      "MobileDevice" => "MobileDevice",
      "MobileDeviceSubmodel" => "MobileDeviceSubmodel",
      "MobileDeviceSubmodelTargeting" => "MobileDeviceSubmodelTargeting",
      "MobileDeviceTargeting" => "MobileDeviceTargeting",
      "Money" => "Money",
      "NotNullError" => "NotNullError",
      "NumberValue" => "NumberValue",
      "OperatingSystem" => "OperatingSystem",
      "OperatingSystemPremiumFeature" => "OperatingSystemPremiumFeature",
      "OperatingSystemTargeting" => "OperatingSystemTargeting",
      "OperatingSystemVersion" => "OperatingSystemVersion",
      "OperatingSystemVersionTargeting" => "OperatingSystemVersionTargeting",
      "PermissionError" => "PermissionError",
      "PlacementPremiumFeature" => "PlacementPremiumFeature",
      "PrecisionError" => "PrecisionError",
      "PremiumFeature" => "PremiumFeature",
      "PremiumRateValue" => "PremiumRateValue",
      "ProductError" => "ProductError",
      "ProposalError" => "ProposalError",
      "ProposalLineItemAction" => "ProposalLineItemAction",
      "ProposalLineItemActionError" => "ProposalLineItemActionError",
      "ProposalLineItem" => "ProposalLineItem",
      "ProposalLineItemError" => "ProposalLineItemError",
      "ProposalLineItemPage" => "ProposalLineItemPage",
      "ProposalLineItemPremium" => "ProposalLineItemPremium",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RangeError" => "RangeError",
      "RequiredError" => "RequiredError",
      "RequiredNumberError" => "RequiredNumberError",
      "ReservationDetailsError" => "ReservationDetailsError",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "Size" => "Size",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "StringLengthError" => "StringLengthError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "Targeting" => "Targeting",
      "TeamError" => "TeamError",
      "Technology" => "Technology",
      "TechnologyTargetingError" => "TechnologyTargetingError",
      "TextValue" => "TextValue",
      "TimeOfDay" => "TimeOfDay",
      "UnarchiveProposalLineItems" => "UnarchiveProposalLineItems",
      "UniqueError" => "UniqueError",
      "UnknownPremiumFeature" => "UnknownPremiumFeature",
      "UpdateResult" => "UpdateResult",
      "UserDomainPremiumFeature" => "UserDomainPremiumFeature",
      "UserDomainTargeting" => "UserDomainTargeting",
      "UserDomainTargetingError" => "UserDomainTargetingError",
      "Value" => "Value",
      "VideoPosition" => "VideoPosition",
      "VideoPositionTargeting" => "VideoPositionTargeting",
      "VideoPositionWithinPod" => "VideoPositionWithinPod",
      "VideoPositionTarget" => "VideoPositionTarget",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "AvailableBillingError.Reason" => "AvailableBillingErrorReason",
      "BillingBase" => "BillingBase",
      "BillingCap" => "BillingCap",
      "BillingError.Reason" => "BillingErrorReason",
      "BillingSchedule" => "BillingSchedule",
      "BillingSource" => "BillingSource",
      "CommonError.Reason" => "CommonErrorReason",
      "CompanionDeliveryOption" => "CompanionDeliveryOption",
      "ComputedStatus" => "ComputedStatus",
      "CostAdjustment" => "CostAdjustment",
      "CreativeRotationType" => "CreativeRotationType",
      "CreativeSizeType" => "CreativeSizeType",
      "CustomCriteria.ComparisonOperator" => "CustomCriteriaComparisonOperator",
      "CustomCriteriaSet.LogicalOperator" => "CustomCriteriaSetLogicalOperator",
      "CustomFieldValueError.Reason" => "CustomFieldValueErrorReason",
      "CustomTargetingError.Reason" => "CustomTargetingErrorReason",
      "AudienceSegmentCriteria.ComparisonOperator" => "AudienceSegmentCriteriaComparisonOperator",
      "DayOfWeek" => "DayOfWeek",
      "DayPartTargetingError.Reason" => "DayPartTargetingErrorReason",
      "DeliveryTimeZone" => "DeliveryTimeZone",
      "DeliveryRateType" => "DeliveryRateType",
      "FeatureError.Reason" => "FeatureErrorReason",
      "FrequencyCapError.Reason" => "FrequencyCapErrorReason",
      "GenericTargetingError.Reason" => "GenericTargetingErrorReason",
      "GeoTargetingError.Reason" => "GeoTargetingErrorReason",
      "GoalType" => "GoalType",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "InventoryTargetingError.Reason" => "InventoryTargetingErrorReason",
      "LabelEntityAssociationError.Reason" => "LabelEntityAssociationErrorReason",
      "LineItemType" => "LineItemType",
      "MinuteOfHour" => "MinuteOfHour",
      "NotNullError.Reason" => "NotNullErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PrecisionError.Reason" => "PrecisionErrorReason",
      "PremiumAdjustmentType" => "PremiumAdjustmentType",
      "ProductError.Reason" => "ProductErrorReason",
      "ProposalError.Reason" => "ProposalErrorReason",
      "ProposalLineItemActionError.Reason" => "ProposalLineItemActionErrorReason",
      "ProposalLineItemError.Reason" => "ProposalLineItemErrorReason",
      "ProposalLineItemPremiumStatus" => "ProposalLineItemPremiumStatus",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RateType" => "RateType",
      "RequiredError.Reason" => "RequiredErrorReason",
      "RequiredNumberError.Reason" => "RequiredNumberErrorReason",
      "ReservationDetailsError.Reason" => "ReservationDetailsErrorReason",
      "RoadblockingType" => "RoadblockingType",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "TeamError.Reason" => "TeamErrorReason",
      "TechnologyTargetingError.Reason" => "TechnologyTargetingErrorReason",
      "TimeUnit" => "TimeUnit",
      "UnitType" => "UnitType",
      "UserDomainTargetingError.Reason" => "UserDomainTargetingErrorReason",
      "VideoBumperType" => "VideoBumperType",
      "VideoPosition.Type" => "VideoPositionType",
      "createProposalLineItems" => "CreateProposalLineItems",
      "createProposalLineItemsResponse" => "CreateProposalLineItemsResponse",
      "getProposalLineItemsByStatement" => "GetProposalLineItemsByStatement",
      "getProposalLineItemsByStatementResponse" => "GetProposalLineItemsByStatementResponse",
      "performProposalLineItemAction" => "PerformProposalLineItemAction",
      "performProposalLineItemActionResponse" => "PerformProposalLineItemActionResponse",
      "updateProposalLineItems" => "UpdateProposalLineItems",
      "updateProposalLineItemsResponse" => "UpdateProposalLineItemsResponse",
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
     * Creates new {@link ProposalLineItem} objects.
     *
     * For each proposal line item, the following fields are required:
     * <ul>
     * <li>{@link ProposalLineItem#proposalId}</li>
     * <li>{@link ProposalLineItem#rateCardId}</li>
     * <li>{@link ProposalLineItem#productId}</li>
     * <li>{@link ProposalLineItem#name}</li>
     * <li>{@link ProposalLineItem#startDateTime}</li>
     * <li>{@link ProposalLineItem#endDateTime}</li>
     * </ul>
     *
     * @param proposalLineItems the proposal line items to create
     * @return the created proposal line items with their IDs filled in
     */
    public function createProposalLineItems($proposalLineItems)
    {
        $args = new CreateProposalLineItems($proposalLineItems);
        $result = $this->__soapCall("createProposalLineItems", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link ProposalLineItemPage} of {@link ProposalLineItem} objects
     * that satisfy the given {@link Statement#query}.  The following fields are supported for
     * filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ProposalLineItem#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link ProposalLineItem#name}</td>
     * </tr>
     * <tr>
     * <td>{@code proposalId}</td>
     * <td>{@link ProposalLineItem#proposalId}</td>
     * </tr>
     * <tr>
     * <td>{@code isArchived}</td>
     * <td>{@link ProposalLineItem#isArchived}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link ProposalLineItem#lastModifiedDateTime}</td>
     * </tr>
     * <tr>
     * <td>{@code useThirdPartyAdServerFromProposal}</td>
     * <td>{@link ProposalLineItem#useThirdPartyAdServerFromProposal}</td>
     * </tr>
     * <tr>
     * <td>{@code thirdPartyAdServerId}</td>
     * <td>{@link ProposalLineItem#thirdPartyAdServerId}</td>
     * </tr>
     * <tr>
     * <td>{@code customThirdPartyAdServerName}</td>
     * <td>{@link ProposalLineItem#customThirdPartyAdServerName}</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of proposal line items
     * @return the proposal line items that match the given filter
     */
    public function getProposalLineItemsByStatement($filterStatement)
    {
        $args = new GetProposalLineItemsByStatement($filterStatement);
        $result = $this->__soapCall("getProposalLineItemsByStatement", array($args));

        return $result->rval;
    }
    /**
     * Performs actions on {@link ProposalLineItem} objects that match
     * the given {@link Statement#query}.
     *
     * @param proposalLineItemAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter a set of
     * proposal line items
     * @return the result of the action performed
     */
    public function performProposalLineItemAction($proposalLineItemAction, $filterStatement)
    {
        $args = new PerformProposalLineItemAction($proposalLineItemAction, $filterStatement);
        $result = $this->__soapCall("performProposalLineItemAction", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link ProposalLineItem} objects.
     *
     * @param proposalLineItems the proposal line items to update
     * @return the updated proposal line items
     */
    public function updateProposalLineItems($proposalLineItems)
    {
        $args = new UpdateProposalLineItems($proposalLineItems);
        $result = $this->__soapCall("updateProposalLineItems", array($args));

        return $result->rval;
    }
  }
}

