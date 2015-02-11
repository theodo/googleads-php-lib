<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the InventoryService
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































































































































if (!class_exists("InventoryService", false)) {
    /**
   * InventoryService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class InventoryService extends DfpSoapClient
  {

    const SERVICE_NAME = "InventoryService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/InventoryService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/InventoryService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "ActivateAdUnits" => "ActivateAdUnits",
      "AdSenseAccountError" => "AdSenseAccountError",
      "AdSenseSettings" => "AdSenseSettings",
      "AdSenseSettingsInheritedProperty" => "AdSenseSettingsInheritedProperty",
      "AdUnitAction" => "AdUnitAction",
      "AdUnitAfcSizeError" => "AdUnitAfcSizeError",
      "AdUnitCodeError" => "AdUnitCodeError",
      "AdUnit" => "AdUnit",
      "AdUnitHierarchyError" => "AdUnitHierarchyError",
      "AdUnitPage" => "AdUnitPage",
      "AdUnitParent" => "AdUnitParent",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "AppliedLabel" => "AppliedLabel",
      "ArchiveAdUnits" => "ArchiveAdUnits",
      "AssignAdUnitsToPlacement" => "AssignAdUnitsToPlacement",
      "AuthenticationError" => "AuthenticationError",
      "BooleanValue" => "BooleanValue",
      "CommonError" => "CommonError",
      "CreativeWrapperError" => "CreativeWrapperError",
      "CrossSellError" => "CrossSellError",
      "CrossSellingDistributor" => "CrossSellingDistributor",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DeactivateAdUnits" => "DeactivateAdUnits",
      "EntityLimitReachedError" => "EntityLimitReachedError",
      "FeatureError" => "FeatureError",
      "FrequencyCap" => "FrequencyCap",
      "FrequencyCapError" => "FrequencyCapError",
      "InternalApiError" => "InternalApiError",
      "InvalidColorError" => "InvalidColorError",
      "InventoryUnitError" => "InventoryUnitError",
      "InventoryUnitPartnerAssociationError" => "InventoryUnitPartnerAssociationError",
      "InventoryUnitRefreshRateError" => "InventoryUnitRefreshRateError",
      "AdUnitSize" => "AdUnitSize",
      "InventoryUnitSizesError" => "InventoryUnitSizesError",
      "AdUnitTypeError" => "AdUnitTypeError",
      "LabelFrequencyCap" => "LabelFrequencyCap",
      "NotNullError" => "NotNullError",
      "NullError" => "NullError",
      "NumberValue" => "NumberValue",
      "ParseError" => "ParseError",
      "PermissionError" => "PermissionError",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RegExError" => "RegExError",
      "RemoveAdUnitsFromPlacement" => "RemoveAdUnitsFromPlacement",
      "RequiredCollectionError" => "RequiredCollectionError",
      "RequiredError" => "RequiredError",
      "RequiredNumberError" => "RequiredNumberError",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "Size" => "Size",
      "Size_StringMapEntry" => "Size_StringMapEntry",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "StringLengthError" => "StringLengthError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "TeamError" => "TeamError",
      "TextValue" => "TextValue",
      "TypeError" => "TypeError",
      "UniqueError" => "UniqueError",
      "UpdateResult" => "UpdateResult",
      "Value" => "Value",
      "AdSenseAccountError.Reason" => "AdSenseAccountErrorReason",
      "AdSenseSettings.AdType" => "AdSenseSettingsAdType",
      "AdSenseSettings.BorderStyle" => "AdSenseSettingsBorderStyle",
      "AdSenseSettings.FontFamily" => "AdSenseSettingsFontFamily",
      "AdSenseSettings.FontSize" => "AdSenseSettingsFontSize",
      "AdUnitAfcSizeError.Reason" => "AdUnitAfcSizeErrorReason",
      "AdUnitCodeError.Reason" => "AdUnitCodeErrorReason",
      "AdUnit.TargetWindow" => "AdUnitTargetWindow",
      "AdUnitHierarchyError.Reason" => "AdUnitHierarchyErrorReason",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "CreativeWrapperError.Reason" => "CreativeWrapperErrorReason",
      "CrossSellError.Reason" => "CrossSellErrorReason",
      "EnvironmentType" => "EnvironmentType",
      "FeatureError.Reason" => "FeatureErrorReason",
      "FrequencyCapError.Reason" => "FrequencyCapErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "InvalidColorError.Reason" => "InvalidColorErrorReason",
      "InventoryStatus" => "InventoryStatus",
      "InventoryUnitError.Reason" => "InventoryUnitErrorReason",
      "InventoryUnitPartnerAssociationError.Reason" => "InventoryUnitPartnerAssociationErrorReason",
      "InventoryUnitRefreshRateError.Reason" => "InventoryUnitRefreshRateErrorReason",
      "InventoryUnitSizesError.Reason" => "InventoryUnitSizesErrorReason",
      "AdUnitTypeError.Reason" => "AdUnitTypeErrorReason",
      "MobilePlatform" => "MobilePlatform",
      "NotNullError.Reason" => "NotNullErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "ParseError.Reason" => "ParseErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RegExError.Reason" => "RegExErrorReason",
      "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "RequiredNumberError.Reason" => "RequiredNumberErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "SmartSizeMode" => "SmartSizeMode",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "TargetPlatform" => "TargetPlatform",
      "TeamError.Reason" => "TeamErrorReason",
      "TimeUnit" => "TimeUnit",
      "createAdUnits" => "CreateAdUnits",
      "createAdUnitsResponse" => "CreateAdUnitsResponse",
      "getAdUnitSizesByStatement" => "GetAdUnitSizesByStatement",
      "getAdUnitSizesByStatementResponse" => "GetAdUnitSizesByStatementResponse",
      "getAdUnitsByStatement" => "GetAdUnitsByStatement",
      "getAdUnitsByStatementResponse" => "GetAdUnitsByStatementResponse",
      "performAdUnitAction" => "PerformAdUnitAction",
      "performAdUnitActionResponse" => "PerformAdUnitActionResponse",
      "updateAdUnits" => "UpdateAdUnits",
      "updateAdUnitsResponse" => "UpdateAdUnitsResponse",
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
     * Creates new {@link AdUnit} objects.
     *
     * @param adUnits the ad units to create
     * @return the created ad units, with their IDs filled in
     */
    public function createAdUnits($adUnits)
    {
        $args = new CreateAdUnits($adUnits);
        $result = $this->__soapCall("createAdUnits", array($args));

        return $result->rval;
    }
    /**
     * Gets a set of {@link AdUnitSize} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code targetPlatform}</td>
     * <td>{@link TargetPlatform}</td>
     * </tr>
     * </table>
     * An exception will be thrown for queries with unsupported fields.
     *
     * Paging is not supported, as aren't the LIMIT and OFFSET PQL keywords.
     *
     * Only "=" operator is supported.
     *
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of ad unit sizes
     * @return the ad unit sizes that match the given filter
     */
    public function getAdUnitSizesByStatement($filterStatement)
    {
        $args = new GetAdUnitSizesByStatement($filterStatement);
        $result = $this->__soapCall("getAdUnitSizesByStatement", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link AdUnitPage} of {@link AdUnit} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code adUnitCode}</td>
     * <td>{@link AdUnit#adUnitCode}</td>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link AdUnit#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link AdUnit#name}</td>
     * </tr>
     * <tr>
     * <td>{@code parentId}</td>
     * <td>{@link AdUnit#parentId}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link AdUnit#status}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link AdUnit#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of ad units
     * @return the ad units that match the given filter
     */
    public function getAdUnitsByStatement($filterStatement)
    {
        $args = new GetAdUnitsByStatement($filterStatement);
        $result = $this->__soapCall("getAdUnitsByStatement", array($args));

        return $result->rval;
    }
    /**
     * Performs actions on {@link AdUnit} objects that match the given
     * {@link Statement#query}.
     *
     * @param adUnitAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of ad units
     * @return the result of the action performed
     */
    public function performAdUnitAction($adUnitAction, $filterStatement)
    {
        $args = new PerformAdUnitAction($adUnitAction, $filterStatement);
        $result = $this->__soapCall("performAdUnitAction", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link AdUnit} objects.
     *
     * @param adUnits the ad units to update
     * @return the updated ad units
     */
    public function updateAdUnits($adUnits)
    {
        $args = new UpdateAdUnits($adUnits);
        $result = $this->__soapCall("updateAdUnits", array($args));

        return $result->rval;
    }
  }
}

