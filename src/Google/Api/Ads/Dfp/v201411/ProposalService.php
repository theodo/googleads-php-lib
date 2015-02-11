<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the ProposalService
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

















































































































if (!class_exists("ProposalService", false)) {
    /**
   * ProposalService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ProposalService extends DfpSoapClient
  {

    const SERVICE_NAME = "ProposalService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/ProposalService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/ProposalService";
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
      "AppliedLabel" => "AppliedLabel",
      "ArchiveProposals" => "ArchiveProposals",
      "AuthenticationError" => "AuthenticationError",
      "AvailableBillingError" => "AvailableBillingError",
      "BaseCustomFieldValue" => "BaseCustomFieldValue",
      "BillingError" => "BillingError",
      "BooleanValue" => "BooleanValue",
      "CommonError" => "CommonError",
      "CustomFieldValue" => "CustomFieldValue",
      "CustomFieldValueError" => "CustomFieldValueError",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DropDownCustomFieldValue" => "DropDownCustomFieldValue",
      "FeatureError" => "FeatureError",
      "ForecastError" => "ForecastError",
      "InternalApiError" => "InternalApiError",
      "InvalidUrlError" => "InvalidUrlError",
      "LabelEntityAssociationError" => "LabelEntityAssociationError",
      "LineItemOperationError" => "LineItemOperationError",
      "Money" => "Money",
      "NotNullError" => "NotNullError",
      "NumberValue" => "NumberValue",
      "PermissionError" => "PermissionError",
      "PrecisionError" => "PrecisionError",
      "ProductError" => "ProductError",
      "ProposalAction" => "ProposalAction",
      "ProposalActionError" => "ProposalActionError",
      "ProposalCompanyAssociation" => "ProposalCompanyAssociation",
      "Proposal" => "Proposal",
      "ProposalError" => "ProposalError",
      "ProposalLineItemError" => "ProposalLineItemError",
      "ProposalPage" => "ProposalPage",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RangeError" => "RangeError",
      "RequiredCollectionError" => "RequiredCollectionError",
      "RequiredError" => "RequiredError",
      "RequiredNumberError" => "RequiredNumberError",
      "RetractProposals" => "RetractProposals",
      "SalespersonSplit" => "SalespersonSplit",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "StringLengthError" => "StringLengthError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "SubmitProposalsForApproval" => "SubmitProposalsForApproval",
      "TeamError" => "TeamError",
      "TextValue" => "TextValue",
      "TypeError" => "TypeError",
      "UnarchiveProposals" => "UnarchiveProposals",
      "UniqueError" => "UniqueError",
      "UpdateResult" => "UpdateResult",
      "Value" => "Value",
      "WorkflowActionError" => "WorkflowActionError",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "AvailableBillingError.Reason" => "AvailableBillingErrorReason",
      "BillingBase" => "BillingBase",
      "BillingCap" => "BillingCap",
      "BillingError.Reason" => "BillingErrorReason",
      "BillingSchedule" => "BillingSchedule",
      "BillingSource" => "BillingSource",
      "CommonError.Reason" => "CommonErrorReason",
      "CustomFieldValueError.Reason" => "CustomFieldValueErrorReason",
      "FeatureError.Reason" => "FeatureErrorReason",
      "ForecastError.Reason" => "ForecastErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "InvalidUrlError.Reason" => "InvalidUrlErrorReason",
      "LabelEntityAssociationError.Reason" => "LabelEntityAssociationErrorReason",
      "LineItemOperationError.Reason" => "LineItemOperationErrorReason",
      "ProposalApprovalStatus" => "ProposalApprovalStatus",
      "NotNullError.Reason" => "NotNullErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PrecisionError.Reason" => "PrecisionErrorReason",
      "PricingModel" => "PricingModel",
      "ProductError.Reason" => "ProductErrorReason",
      "ProposalActionError.Reason" => "ProposalActionErrorReason",
      "ProposalCompanyAssociationType" => "ProposalCompanyAssociationType",
      "ProposalError.Reason" => "ProposalErrorReason",
      "ProposalLineItemError.Reason" => "ProposalLineItemErrorReason",
      "ProposalStatus" => "ProposalStatus",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "RequiredNumberError.Reason" => "RequiredNumberErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "TeamError.Reason" => "TeamErrorReason",
      "WorkflowActionError.Reason" => "WorkflowActionErrorReason",
      "createProposals" => "CreateProposals",
      "createProposalsResponse" => "CreateProposalsResponse",
      "getProposalsByStatement" => "GetProposalsByStatement",
      "getProposalsByStatementResponse" => "GetProposalsByStatementResponse",
      "performProposalAction" => "PerformProposalAction",
      "performProposalActionResponse" => "PerformProposalActionResponse",
      "updateProposals" => "UpdateProposals",
      "updateProposalsResponse" => "UpdateProposalsResponse",
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
     * Creates new {@link Proposal} objects.
     *
     * For each proposal, the following fields are required:
     * <ul>
     * <li>{@link Proposal#name}</li>
     * </ul>
     *
     * @param proposals the proposals to create
     * @return the created proposals with their IDs filled in
     */
    public function createProposals($proposals)
    {
        $args = new CreateProposals($proposals);
        $result = $this->__soapCall("createProposals", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link ProposalPage} of {@link Proposal} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th>
     * <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Proposal#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Proposal#name}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link Proposal#status}</td>
     * </tr>
     * <tr>
     * <td>{@code isArchived}</td>
     * <td>{@link Proposal#isArchived}</td>
     * </tr>
     * <tr>
     * <td>{@code approvalStatus}</td>
     * <td>{@link Proposal#approvalStatus}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link Proposal#lastModifiedDateTime}</td>
     * </tr>
     * <tr>
     * <td>{@code thirdPartyAdServerId}</td>
     * <td>{@link Proposal#thirdPartyAdServerId}</td>
     * </tr>
     * <tr>
     * <td>{@code customThirdPartyAdServerName}</td>
     * <td>{@link Proposal#customThirdPartyAdServerName}</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of proposals
     * @return the proposals that match the given filter
     */
    public function getProposalsByStatement($filterStatement)
    {
        $args = new GetProposalsByStatement($filterStatement);
        $result = $this->__soapCall("getProposalsByStatement", array($args));

        return $result->rval;
    }
    /**
     * Performs actions on {@link Proposal} objects that match the given {@link Statement#query}.
     *
     * The following fields are also required when submitting proposals for approval:
     * <ul>
     * <li>{@link Proposal#advertiser}</li>
     * <li>{@link Proposal#primarySalesperson}</li>
     * <li>{@link Proposal#primaryTraffickerId}</li>
     * </ul>
     *
     * @param proposalAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter a set of proposals
     * @return the result of the action performed
     */
    public function performProposalAction($proposalAction, $filterStatement)
    {
        $args = new PerformProposalAction($proposalAction, $filterStatement);
        $result = $this->__soapCall("performProposalAction", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link Proposal} objects.
     *
     * @param proposals the proposals to update
     * @return the updated proposals
     */
    public function updateProposals($proposals)
    {
        $args = new UpdateProposals($proposals);
        $result = $this->__soapCall("updateProposals", array($args));

        return $result->rval;
    }
  }
}

