<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the ManagedCustomerService
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
 * @package    Google_Api_Ads_AdWords_v201409
 * @subpackage v201409
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient ;


if (!class_exists("ManagedCustomerService", false)) {
    /**
   * ManagedCustomerService
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class ManagedCustomerService extends AdWordsSoapClient
  {

    const SERVICE_NAME = "ManagedCustomerService";
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201409";
      const ENDPOINT = "https://adwords.google.com/api/adwords/mcm/v201409/ManagedCustomerService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/mcm/v201409/ManagedCustomerService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AuthenticationError" => "AuthenticationError",
      "AuthorizationError" => "AuthorizationError",
      "ClientTermsError" => "ClientTermsError",
      "DateError" => "DateError",
      "DateRange" => "DateRange",
      "DistinctError" => "DistinctError",
      "IdError" => "IdError",
      "InternalApiError" => "InternalApiError",
      "NotEmptyError" => "NotEmptyError",
      "NullError" => "NullError",
      "OperationAccessDenied" => "OperationAccessDenied",
      "OperatorError" => "OperatorError",
      "OrderBy" => "OrderBy",
      "Paging" => "Paging",
      "Predicate" => "Predicate",
      "QuotaCheckError" => "QuotaCheckError",
      "RangeError" => "RangeError",
      "RateExceededError" => "RateExceededError",
      "ReadOnlyError" => "ReadOnlyError",
      "RejectedError" => "RejectedError",
      "RequestError" => "RequestError",
      "RequiredError" => "RequiredError",
      "SelectorError" => "SelectorError",
      "SizeLimitError" => "SizeLimitError",
      "SoapHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "StringLengthError" => "StringLengthError",
      "DatabaseError" => "DatabaseError",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApplicationException" => "ApplicationException",
      "Selector" => "Selector",
      "Operation" => "Operation",
      "Page" => "Page",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "AuthorizationError.Reason" => "AuthorizationErrorReason",
      "ClientTermsError.Reason" => "ClientTermsErrorReason",
      "DatabaseError.Reason" => "DatabaseErrorReason",
      "DateError.Reason" => "DateErrorReason",
      "DistinctError.Reason" => "DistinctErrorReason",
      "IdError.Reason" => "IdErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NotEmptyError.Reason" => "NotEmptyErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
      "Operator" => "Operator",
      "OperatorError.Reason" => "OperatorErrorReason",
      "Predicate.Operator" => "PredicateOperator",
      "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RateExceededError.Reason" => "RateExceededErrorReason",
      "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
      "RejectedError.Reason" => "RejectedErrorReason",
      "RequestError.Reason" => "RequestErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "SelectorError.Reason" => "SelectorErrorReason",
      "SizeLimitError.Reason" => "SizeLimitErrorReason",
      "SortOrder" => "SortOrder",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "ManagedCustomerServiceError" => "ManagedCustomerServiceError",
      "PendingInvitationSelector" => "PendingInvitationSelector",
      "ManagedCustomerLink" => "ManagedCustomerLink",
      "LinkOperation" => "LinkOperation",
      "MoveOperation" => "MoveOperation",
      "MutateLinkResults" => "MutateLinkResults",
      "MutateManagerResults" => "MutateManagerResults",
      "ManagedCustomer" => "ManagedCustomer",
      "ManagedCustomerOperation" => "ManagedCustomerOperation",
      "ManagedCustomerPage" => "ManagedCustomerPage",
      "ManagedCustomerReturnValue" => "ManagedCustomerReturnValue",
      "PendingInvitation" => "PendingInvitation",
      "LinkStatus" => "LinkStatus",
      "ManagedCustomerServiceError.Reason" => "ManagedCustomerServiceErrorReason",
      "get" => "ManagedCustomerServiceGet",
      "getResponse" => "ManagedCustomerServiceGetResponse",
      "getPendingInvitations" => "GetPendingInvitations",
      "getPendingInvitationsResponse" => "GetPendingInvitationsResponse",
      "mutate" => "ManagedCustomerServiceMutate",
      "mutateResponse" => "ManagedCustomerServiceMutateResponse",
      "mutateLink" => "MutateLink",
      "mutateLinkResponse" => "MutateLinkResponse",
      "mutateManager" => "MutateManager",
      "mutateManagerResponse" => "MutateManagerResponse",
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
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns the list of customers that meet the selector criteria.
     *
     * @param selector The selector specifying the {@link ManagedCustomer}s to return.
     * @return List         of customers identified by the selector.
     * @throws ApiException When there is at least one error with the request.
     */
    public function get($serviceSelector)
    {
        $args = new ManagedCustomerServiceGet($serviceSelector);
        $result = $this->__soapCall("get", array($args));

        return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns the pending invitations for the customer IDs in the selector.
     * @param selector the manager customer ids (inviters) or the client customer ids (invitees)
     * @throws ApiException when there is at least one error with the request
     */
    public function getPendingInvitations($selector)
    {
        $args = new GetPendingInvitations($selector);
        $result = $this->__soapCall("getPendingInvitations", array($args));

        return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET, ADD.</span>
     *
     *
     *
     * Adds managed customers.
     *
     * <p class="note"><b>Note:</b> {@link ManagedCustomerOperation} only supports
     * {@code ADD} operator. </p>
     *
     * @param operations List of unique operations.
     * @return The list of updated managed customers, returned in the same order as the
     *             <code>operations</code> array.
     */
    public function mutate($operations)
    {
        $args = new ManagedCustomerServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($args));

        return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET, ADD.</span>
     *
     *
     *
     * Modifies the ManagedCustomer forest. These actions are possible (categorized by
     * Operator + Link Status):
     *
     * <ul>
     * <li>ADD + PENDING:   manager extends invitations
     * <li>SET + CANCELLED: manager rescinds invitations
     * <li>SET + INACTIVE:  manager/client terminates links
     * <li>SET + ACTIVE:    client accepts invitations
     * <li>SET + REFUSED:   client declines invitations
     * </ul>
     *
     * @param operations the list of operations
     * @return results      for the given operations
     * @throws ApiException with a {@link ManagedCustomerServiceError}
     */
    public function mutateLink($operations)
    {
        $args = new MutateLink($operations);
        $result = $this->__soapCall("mutateLink", array($args));

        return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET.</span>
     *
     *
     *
     * Moves client customers to new managers (moving links). Only the following action is possible:
     *
     * <ul>
     * <li>SET + ACTIVE: manager moves client customers to new managers within the same MCC
     * hierarchy
     * </ul>
     *
     * @param operations List of unique operations.
     * @return results      for the given operations
     * @throws ApiException with a {@link ManagedCustomerServiceError}
     */
    public function mutateManager($operations)
    {
        $args = new MutateManager($operations);
        $result = $this->__soapCall("mutateManager", array($args));

        return $result->rval;
    }
  }
}

