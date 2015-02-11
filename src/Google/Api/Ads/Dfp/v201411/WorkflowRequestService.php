<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the WorkflowRequestService
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


if (!class_exists("WorkflowRequestService", false)) {
    /**
   * WorkflowRequestService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class WorkflowRequestService extends DfpSoapClient
  {

    const SERVICE_NAME = "WorkflowRequestService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/WorkflowRequestService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/WorkflowRequestService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "ApproveWorkflowApprovalRequests" => "ApproveWorkflowApprovalRequests",
      "AuthenticationError" => "AuthenticationError",
      "WorkflowRequest" => "WorkflowRequest",
      "BooleanValue" => "BooleanValue",
      "CommonError" => "CommonError",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "SkipWorkflowExternalConditionRequests" => "SkipWorkflowExternalConditionRequests",
      "FeatureError" => "FeatureError",
      "ForecastError" => "ForecastError",
      "InternalApiError" => "InternalApiError",
      "LineItemOperationError" => "LineItemOperationError",
      "NotNullError" => "NotNullError",
      "NumberValue" => "NumberValue",
      "TriggerWorkflowExternalConditionRequests" => "TriggerWorkflowExternalConditionRequests",
      "PermissionError" => "PermissionError",
      "ProposalActionError" => "ProposalActionError",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RejectWorkflowApprovalRequests" => "RejectWorkflowApprovalRequests",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "TextValue" => "TextValue",
      "UpdateResult" => "UpdateResult",
      "Value" => "Value",
      "WorkflowActionError" => "WorkflowActionError",
      "WorkflowApprovalRequest" => "WorkflowApprovalRequest",
      "WorkflowExternalConditionRequest" => "WorkflowExternalConditionRequest",
      "WorkflowRequestAction" => "WorkflowRequestAction",
      "WorkflowRequestError" => "WorkflowRequestError",
      "WorkflowRequestPage" => "WorkflowRequestPage",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "WorkflowApprovalRequestStatus" => "WorkflowApprovalRequestStatus",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "FeatureError.Reason" => "FeatureErrorReason",
      "ForecastError.Reason" => "ForecastErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "LineItemOperationError.Reason" => "LineItemOperationErrorReason",
      "NotNullError.Reason" => "NotNullErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "ProposalActionError.Reason" => "ProposalActionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "WorkflowActionError.Reason" => "WorkflowActionErrorReason",
      "WorkflowEntityType" => "WorkflowEntityType",
      "WorkflowRequestError.Reason" => "WorkflowRequestErrorReason",
      "WorkflowRequestType" => "WorkflowRequestType",
      "WorkflowExternalConditionStatus" => "WorkflowExternalConditionStatus",
      "getWorkflowRequestsByStatement" => "GetWorkflowRequestsByStatement",
      "getWorkflowRequestsByStatementResponse" => "GetWorkflowRequestsByStatementResponse",
      "performWorkflowRequestAction" => "PerformWorkflowRequestAction",
      "performWorkflowRequestActionResponse" => "PerformWorkflowRequestActionResponse",
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
     * Gets a list of {@link WorkflowRequest} objects that satisfy the given {@link Statement#query}.
     * The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th>
     * <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link WorkflowRequest#id}</td>
     * </tr>
     * <tr>
     * <td>{@code workflowRuleName}</td>
     * <td>{@link WorkflowRequest#workflowRuleName}</td>
     * </tr>
     * <tr>
     * <td>{@code entityType}</td>
     * <td>{@link WorkflowRequest#entityType}</td>
     * </tr>
     * <tr>
     * <td>{@code entityId}</td>
     * <td>{@link WorkflowRequest#entityId}</td>
     * </tr>
     * <tr>
     * <td>{@code approvalStatus}</td>
     * <td>{@link WorkflowApprovalRequest#status}</td>
     * </tr>
     * <tr>
     * <td>{@code conditionStatus}</td>
     * <td>{@link WorkflowExternalConditionRequest#status}</td>
     * </tr>
     * <tr>
     * <td>{@code type}</td>
     * <td>{@link WorkflowRequest#type}</td>
     * </tr>
     * </table>
     * <p>Starting in V201405 a {@code type} filter must be used</p>
     * @param filterStatement a Publisher Query Language statement used to filter a set of proposals
     * @return the workflow requests that match the given filter
     */
    public function getWorkflowRequestsByStatement($filterStatement)
    {
        $args = new GetWorkflowRequestsByStatement($filterStatement);
        $result = $this->__soapCall("getWorkflowRequestsByStatement", array($args));

        return $result->rval;
    }
    /**
     * Perform actions on {@link WorkflowRequest} objects that match the given
     * {@link Statement#query}.
     *
     * @param action the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter a set of workflow
     * requests
     * @return the result of the action performed
     */
    public function performWorkflowRequestAction($action, $filterStatement)
    {
        $args = new PerformWorkflowRequestAction($action, $filterStatement);
        $result = $this->__soapCall("performWorkflowRequestAction", array($args));

        return $result->rval;
    }
  }
}

