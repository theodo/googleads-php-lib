<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the AdRuleService
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


if (!class_exists("AdRuleService", false)) {
    /**
   * AdRuleService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class AdRuleService extends DfpSoapClient
  {

    const SERVICE_NAME = "AdRuleService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/AdRuleService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/AdRuleService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "ActivateAdRules" => "ActivateAdRules",
      "AdRuleAction" => "AdRuleAction",
      "AdRuleDateError" => "AdRuleDateError",
      "AdRule" => "AdRule",
      "AdRuleFrequencyCapError" => "AdRuleFrequencyCapError",
      "NoPoddingAdRuleSlot" => "NoPoddingAdRuleSlot",
      "OptimizedPoddingAdRuleSlot" => "OptimizedPoddingAdRuleSlot",
      "AdRulePage" => "AdRulePage",
      "AdRulePriorityError" => "AdRulePriorityError",
      "BaseAdRuleSlot" => "BaseAdRuleSlot",
      "AdRuleSlotError" => "AdRuleSlotError",
      "StandardPoddingAdRuleSlot" => "StandardPoddingAdRuleSlot",
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
      "CommonError" => "CommonError",
      "ContentMetadataKeyHierarchyTargeting" => "ContentMetadataKeyHierarchyTargeting",
      "ContentMetadataTargetingError" => "ContentMetadataTargetingError",
      "ContentTargeting" => "ContentTargeting",
      "CustomCriteria" => "CustomCriteria",
      "CustomCriteriaSet" => "CustomCriteriaSet",
      "CustomTargetingError" => "CustomTargetingError",
      "CustomCriteriaLeaf" => "CustomCriteriaLeaf",
      "CustomCriteriaNode" => "CustomCriteriaNode",
      "AudienceSegmentCriteria" => "AudienceSegmentCriteria",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DayPart" => "DayPart",
      "DayPartTargeting" => "DayPartTargeting",
      "DeactivateAdRules" => "DeactivateAdRules",
      "DeleteAdRules" => "DeleteAdRules",
      "DeviceCapability" => "DeviceCapability",
      "DeviceCapabilityTargeting" => "DeviceCapabilityTargeting",
      "DeviceCategory" => "DeviceCategory",
      "DeviceCategoryTargeting" => "DeviceCategoryTargeting",
      "DeviceManufacturer" => "DeviceManufacturer",
      "DeviceManufacturerTargeting" => "DeviceManufacturerTargeting",
      "FeatureError" => "FeatureError",
      "GeoTargeting" => "GeoTargeting",
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
      "NumberValue" => "NumberValue",
      "OperatingSystem" => "OperatingSystem",
      "OperatingSystemTargeting" => "OperatingSystemTargeting",
      "OperatingSystemVersion" => "OperatingSystemVersion",
      "OperatingSystemVersionTargeting" => "OperatingSystemVersionTargeting",
      "PermissionError" => "PermissionError",
      "PoddingError" => "PoddingError",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RequiredError" => "RequiredError",
      "RequiredNumberError" => "RequiredNumberError",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "StringLengthError" => "StringLengthError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "Targeting" => "Targeting",
      "Technology" => "Technology",
      "TextValue" => "TextValue",
      "TimeOfDay" => "TimeOfDay",
      "UniqueError" => "UniqueError",
      "UnknownAdRuleSlot" => "UnknownAdRuleSlot",
      "UpdateResult" => "UpdateResult",
      "UserDomainTargeting" => "UserDomainTargeting",
      "Value" => "Value",
      "VideoPosition" => "VideoPosition",
      "VideoPositionTargeting" => "VideoPositionTargeting",
      "VideoPositionWithinPod" => "VideoPositionWithinPod",
      "VideoPositionTarget" => "VideoPositionTarget",
      "AdRuleDateError.Reason" => "AdRuleDateErrorReason",
      "AdRuleFrequencyCapError.Reason" => "AdRuleFrequencyCapErrorReason",
      "AdRulePriorityError.Reason" => "AdRulePriorityErrorReason",
      "AdRuleSlotBehavior" => "AdRuleSlotBehavior",
      "AdRuleSlotBumper" => "AdRuleSlotBumper",
      "AdRuleSlotError.Reason" => "AdRuleSlotErrorReason",
      "AdRuleStatus" => "AdRuleStatus",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "ContentMetadataTargetingError.Reason" => "ContentMetadataTargetingErrorReason",
      "CustomCriteria.ComparisonOperator" => "CustomCriteriaComparisonOperator",
      "CustomCriteriaSet.LogicalOperator" => "CustomCriteriaSetLogicalOperator",
      "CustomTargetingError.Reason" => "CustomTargetingErrorReason",
      "AudienceSegmentCriteria.ComparisonOperator" => "AudienceSegmentCriteriaComparisonOperator",
      "DayOfWeek" => "DayOfWeek",
      "DeliveryTimeZone" => "DeliveryTimeZone",
      "FeatureError.Reason" => "FeatureErrorReason",
      "FrequencyCapBehavior" => "FrequencyCapBehavior",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "InventoryTargetingError.Reason" => "InventoryTargetingErrorReason",
      "MidrollFrequencyType" => "MidrollFrequencyType",
      "MinuteOfHour" => "MinuteOfHour",
      "NotNullError.Reason" => "NotNullErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PoddingError.Reason" => "PoddingErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "RequiredNumberError.Reason" => "RequiredNumberErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StartDateTimeType" => "StartDateTimeType",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "VideoBumperType" => "VideoBumperType",
      "VideoPosition.Type" => "VideoPositionType",
      "createAdRules" => "CreateAdRules",
      "createAdRulesResponse" => "CreateAdRulesResponse",
      "getAdRulesByStatement" => "GetAdRulesByStatement",
      "getAdRulesByStatementResponse" => "GetAdRulesByStatementResponse",
      "performAdRuleAction" => "PerformAdRuleAction",
      "performAdRuleActionResponse" => "PerformAdRuleActionResponse",
      "updateAdRules" => "UpdateAdRules",
      "updateAdRulesResponse" => "UpdateAdRulesResponse",
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
     * Creates new {@link AdRule} objects.
     *
     * @param adRules the ad rules to create
     * @return the created ad rules with their IDs filled in
     */
    public function createAdRules($adRules)
    {
        $args = new CreateAdRules($adRules);
        $result = $this->__soapCall("createAdRules", array($args));

        return $result->rval;
    }
    /**
     * Gets an {@link AdRulePage} of {@link AdRule} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link AdRule#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link AdRule#name}</td>
     * </tr>
     * <tr>
     * <td>{@code priority}</td>
     * <td>{@link AdRule#priority}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link AdRule#status}</td>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of ad rules
     * @return the          ad rules that match the given filter
     * @throws ApiException if the ID of the active network does not exist or
     *                      there is a backend error
     */
    public function getAdRulesByStatement($statement)
    {
        $args = new GetAdRulesByStatement($statement);
        $result = $this->__soapCall("getAdRulesByStatement", array($args));

        return $result->rval;
    }
    /**
     * Performs actions on {@link AdRule} objects that match the given
     * {@link Statement#query}.
     *
     * @param adRuleAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of ad rules
     * @return the result of the action performed
     */
    public function performAdRuleAction($adRuleAction, $filterStatement)
    {
        $args = new PerformAdRuleAction($adRuleAction, $filterStatement);
        $result = $this->__soapCall("performAdRuleAction", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link AdRule} objects.
     *
     * @param adRules the ad rules to update
     * @return the          updated ad rules
     * @throws ApiException if there is an error updating the ad rules
     */
    public function updateAdRules($adRules)
    {
        $args = new UpdateAdRules($adRules);
        $result = $this->__soapCall("updateAdRules", array($args));

        return $result->rval;
    }
  }
}

