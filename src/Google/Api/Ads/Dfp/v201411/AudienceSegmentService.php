<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the AudienceSegmentService
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























































































if (!class_exists("AudienceSegmentService", false)) {
    /**
   * AudienceSegmentService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class AudienceSegmentService extends DfpSoapClient
  {

    const SERVICE_NAME = "AudienceSegmentService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/AudienceSegmentService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/AudienceSegmentService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "ActivateAudienceSegments" => "ActivateAudienceSegments",
      "AdUnitTargeting" => "AdUnitTargeting",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "ApproveAudienceSegments" => "ApproveAudienceSegments",
      "AudienceSegmentDataProvider" => "AudienceSegmentDataProvider",
      "AudienceSegmentPage" => "AudienceSegmentPage",
      "AuthenticationError" => "AuthenticationError",
      "FirstPartyAudienceSegment" => "FirstPartyAudienceSegment",
      "BooleanValue" => "BooleanValue",
      "CommonError" => "CommonError",
      "CustomCriteria" => "CustomCriteria",
      "CustomCriteriaSet" => "CustomCriteriaSet",
      "CustomCriteriaLeaf" => "CustomCriteriaLeaf",
      "CustomCriteriaNode" => "CustomCriteriaNode",
      "AudienceSegmentCriteria" => "AudienceSegmentCriteria",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DeactivateAudienceSegments" => "DeactivateAudienceSegments",
      "ThirdPartyAudienceSegment" => "ThirdPartyAudienceSegment",
      "FeatureError" => "FeatureError",
      "InternalApiError" => "InternalApiError",
      "InventoryTargeting" => "InventoryTargeting",
      "Money" => "Money",
      "NonRuleBasedFirstPartyAudienceSegment" => "NonRuleBasedFirstPartyAudienceSegment",
      "NotNullError" => "NotNullError",
      "NumberValue" => "NumberValue",
      "ParseError" => "ParseError",
      "PermissionError" => "PermissionError",
      "PopulateAudienceSegments" => "PopulateAudienceSegments",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "FirstPartyAudienceSegmentRule" => "FirstPartyAudienceSegmentRule",
      "QuotaError" => "QuotaError",
      "RejectAudienceSegments" => "RejectAudienceSegments",
      "RequiredError" => "RequiredError",
      "RuleBasedFirstPartyAudienceSegment" => "RuleBasedFirstPartyAudienceSegment",
      "RuleBasedFirstPartyAudienceSegmentSummary" => "RuleBasedFirstPartyAudienceSegmentSummary",
      "AudienceSegmentAction" => "AudienceSegmentAction",
      "AudienceSegment" => "AudienceSegment",
      "AudienceSegmentError" => "AudienceSegmentError",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "SharedAudienceSegment" => "SharedAudienceSegment",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "TextValue" => "TextValue",
      "UpdateResult" => "UpdateResult",
      "Value" => "Value",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "CustomCriteria.ComparisonOperator" => "CustomCriteriaComparisonOperator",
      "CustomCriteriaSet.LogicalOperator" => "CustomCriteriaSetLogicalOperator",
      "AudienceSegmentCriteria.ComparisonOperator" => "AudienceSegmentCriteriaComparisonOperator",
      "ThirdPartyAudienceSegment.AudienceSegmentApprovalStatus" => "ThirdPartyAudienceSegmentAudienceSegmentApprovalStatus",
      "FeatureError.Reason" => "FeatureErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NotNullError.Reason" => "NotNullErrorReason",
      "ParseError.Reason" => "ParseErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "AudienceSegment.AudienceSegmentType" => "AudienceSegmentAudienceSegmentType",
      "AudienceSegment.Status" => "AudienceSegmentStatus",
      "AudienceSegmentError.Reason" => "AudienceSegmentErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "createAudienceSegments" => "CreateAudienceSegments",
      "createAudienceSegmentsResponse" => "CreateAudienceSegmentsResponse",
      "getAudienceSegmentsByStatement" => "GetAudienceSegmentsByStatement",
      "getAudienceSegmentsByStatementResponse" => "GetAudienceSegmentsByStatementResponse",
      "performAudienceSegmentAction" => "PerformAudienceSegmentAction",
      "performAudienceSegmentActionResponse" => "PerformAudienceSegmentActionResponse",
      "updateAudienceSegments" => "UpdateAudienceSegments",
      "updateAudienceSegmentsResponse" => "UpdateAudienceSegmentsResponse",
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
     * Creates new {@link RuleBasedFirstPartyAudienceSegment} objects.
     *
     * @param segments first-party audience segments to create
     * @return created first-party audience segments
     */
    public function createAudienceSegments($segments)
    {
        $args = new CreateAudienceSegments($segments);
        $result = $this->__soapCall("createAudienceSegments", array($args));

        return $result->rval;
    }
    /**
     * Gets an {@link AudienceSegmentPage} of {@link AudienceSegment} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th>
     * <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link AudienceSegment#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link AudienceSegment#name}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link AudienceSegment#status}</td>
     * </tr>
     * <tr>
     * <td>{@code type}</td>
     * <td>{@link AudienceSegment#type}</td>
     * </tr>
     * <tr>
     * <td>{@code size}</td>
     * <td>{@link AudienceSegment#size}</td>
     * </tr>
     * <tr>
     * <td>{@code dataProviderName}</td>
     * <td>{@link AudienceSegmentDataProvider#name}</td>
     * </tr>
     * <tr>
     * <td>{@code approvalStatus}</td>
     * <td>{@link ThirdPartyAudienceSegment#approvalStatus}</td>
     * </tr>
     * <tr>
     * <td>{@code cost}</td>
     * <td>{@link ThirdPartyAudienceSegment#cost}</td>
     * </tr>
     * <tr>
     * <td>{@code startDateTime}</td>
     * <td>{@link ThirdPartyAudienceSegment#startDateTime}</td>
     * </tr>
     * <tr>
     * <td>{@code endDateTime}</td>
     * <td>{@link ThirdPartyAudienceSegment#endDateTime}</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement used to filter a set of audience
     * segments
     * @return the audience segments that match the given filter
     */
    public function getAudienceSegmentsByStatement($filterStatement)
    {
        $args = new GetAudienceSegmentsByStatement($filterStatement);
        $result = $this->__soapCall("getAudienceSegmentsByStatement", array($args));

        return $result->rval;
    }
    /**
     * Performs the given {@link AudienceSegmentAction} on the set of segments identified by the given
     * statement.
     *
     * @param action {@link AudienceSegmentAction} to perform
     * @param filterStatement a Publisher Query Language statement used to filter a set of audience
     * segments
     * @return {@link UpdateResult} indicating the result
     */
    public function performAudienceSegmentAction($action, $filterStatement)
    {
        $args = new PerformAudienceSegmentAction($action, $filterStatement);
        $result = $this->__soapCall("performAudienceSegmentAction", array($args));

        return $result->rval;
    }
    /**
     * Updates the given {@link RuleBasedFirstPartyAudienceSegment} objects.
     *
     * @param segments first-party audience segments to update
     * @return updated first-party audience segments
     */
    public function updateAudienceSegments($segments)
    {
        $args = new UpdateAudienceSegments($segments);
        $result = $this->__soapCall("updateAudienceSegments", array($args));

        return $result->rval;
    }
  }
}

