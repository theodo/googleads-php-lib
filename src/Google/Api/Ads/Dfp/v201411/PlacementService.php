<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the PlacementService
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
















































































if (!class_exists("PlacementService", false)) {
    /**
   * PlacementService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class PlacementService extends DfpSoapClient
  {

    const SERVICE_NAME = "PlacementService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/PlacementService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/PlacementService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "ActivatePlacements" => "ActivatePlacements",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "ArchivePlacements" => "ArchivePlacements",
      "AuthenticationError" => "AuthenticationError",
      "BooleanValue" => "BooleanValue",
      "CommonError" => "CommonError",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DeactivatePlacements" => "DeactivatePlacements",
      "EntityChildrenLimitReachedError" => "EntityChildrenLimitReachedError",
      "EntityLimitReachedError" => "EntityLimitReachedError",
      "FeatureError" => "FeatureError",
      "InternalApiError" => "InternalApiError",
      "NotNullError" => "NotNullError",
      "NullError" => "NullError",
      "NumberValue" => "NumberValue",
      "ParseError" => "ParseError",
      "PermissionError" => "PermissionError",
      "PlacementAction" => "PlacementAction",
      "Placement" => "Placement",
      "PlacementError" => "PlacementError",
      "PlacementPage" => "PlacementPage",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RangeError" => "RangeError",
      "RegExError" => "RegExError",
      "RequiredCollectionError" => "RequiredCollectionError",
      "RequiredError" => "RequiredError",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "SiteTargetingInfo" => "SiteTargetingInfo",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "StringLengthError" => "StringLengthError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "TextValue" => "TextValue",
      "TypeError" => "TypeError",
      "UniqueError" => "UniqueError",
      "UpdateResult" => "UpdateResult",
      "Value" => "Value",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "EntityChildrenLimitReachedError.Reason" => "EntityChildrenLimitReachedErrorReason",
      "FeatureError.Reason" => "FeatureErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "InventoryStatus" => "InventoryStatus",
      "NotNullError.Reason" => "NotNullErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "ParseError.Reason" => "ParseErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PlacementError.Reason" => "PlacementErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RegExError.Reason" => "RegExErrorReason",
      "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "createPlacements" => "CreatePlacements",
      "createPlacementsResponse" => "CreatePlacementsResponse",
      "getPlacementsByStatement" => "GetPlacementsByStatement",
      "getPlacementsByStatementResponse" => "GetPlacementsByStatementResponse",
      "performPlacementAction" => "PerformPlacementAction",
      "performPlacementActionResponse" => "PerformPlacementActionResponse",
      "updatePlacements" => "UpdatePlacements",
      "updatePlacementsResponse" => "UpdatePlacementsResponse",
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
     * Creates new {@link Placement} objects.
     *
     * @param placements the placements to create
     * @return the new placements, with their IDs filled in
     */
    public function createPlacements($placements)
    {
        $args = new CreatePlacements($placements);
        $result = $this->__soapCall("createPlacements", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link PlacementPage} of {@link Placement} objects that satisfy the
     * given {@link Statement#query}. The following fields are supported for
     * filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code description}</td>
     * <td>{@link Placement#description}</td>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Placement#id}</td>
     * </tr>
     * <tr>
     * <td>{@code isAdSenseTargetingEnabled}</td>
     * <td>{@link Placement#isAdSenseTargetingEnabled}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Placement#name}</td>
     * </tr>
     * <tr>
     * <td>{@code placementCode}</td>
     * <td>{@link Placement#placementCode}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link Placement#status}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link Placement#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of placements
     * @return the placements that match the given filter
     */
    public function getPlacementsByStatement($filterStatement)
    {
        $args = new GetPlacementsByStatement($filterStatement);
        $result = $this->__soapCall("getPlacementsByStatement", array($args));

        return $result->rval;
    }
    /**
     * Performs actions on {@link Placement} objects that match the given
     * {@link Statement#query}.
     *
     * @param placementAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of placements
     * @return the result of the action performed
     */
    public function performPlacementAction($placementAction, $filterStatement)
    {
        $args = new PerformPlacementAction($placementAction, $filterStatement);
        $result = $this->__soapCall("performPlacementAction", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link Placement} objects.
     *
     * @param placements the placements to update
     * @return the updated placements
     */
    public function updatePlacements($placements)
    {
        $args = new UpdatePlacements($placements);
        $result = $this->__soapCall("updatePlacements", array($args));

        return $result->rval;
    }
  }
}

