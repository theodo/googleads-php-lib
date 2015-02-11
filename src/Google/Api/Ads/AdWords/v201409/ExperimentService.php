<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the ExperimentService
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


if (!class_exists("ExperimentService", false)) {
    /**
   * ExperimentService
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class ExperimentService extends AdWordsSoapClient
  {

    const SERVICE_NAME = "ExperimentService";
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201409/ExperimentService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201409/ExperimentService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AdxError" => "AdxError",
      "AuthenticationError" => "AuthenticationError",
      "AuthorizationError" => "AuthorizationError",
      "BudgetError" => "BudgetError",
      "ClientTermsError" => "ClientTermsError",
      "DateError" => "DateError",
      "DateRange" => "DateRange",
      "DistinctError" => "DistinctError",
      "EntityNotFound" => "EntityNotFound",
      "ExperimentServiceError" => "ExperimentServiceError",
      "ExperimentSummaryStats" => "ExperimentSummaryStats",
      "IdError" => "IdError",
      "InternalApiError" => "InternalApiError",
      "NewEntityCreationError" => "NewEntityCreationError",
      "NotEmptyError" => "NotEmptyError",
      "NullError" => "NullError",
      "OperationAccessDenied" => "OperationAccessDenied",
      "OperatorError" => "OperatorError",
      "OrderBy" => "OrderBy",
      "Paging" => "Paging",
      "Predicate" => "Predicate",
      "QuotaCheckError" => "QuotaCheckError",
      "QuotaError" => "QuotaError",
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
      "Experiment" => "Experiment",
      "ExperimentOperation" => "ExperimentOperation",
      "ExperimentPage" => "ExperimentPage",
      "ExperimentReturnValue" => "ExperimentReturnValue",
      "ListReturnValue" => "ListReturnValue",
      "Operation" => "Operation",
      "Page" => "Page",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApplicationException" => "ApplicationException",
      "Selector" => "Selector",
      "AdxError.Reason" => "AdxErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "AuthorizationError.Reason" => "AuthorizationErrorReason",
      "BudgetError.Reason" => "BudgetErrorReason",
      "ClientTermsError.Reason" => "ClientTermsErrorReason",
      "DatabaseError.Reason" => "DatabaseErrorReason",
      "DateError.Reason" => "DateErrorReason",
      "DistinctError.Reason" => "DistinctErrorReason",
      "EntityNotFound.Reason" => "EntityNotFoundReason",
      "ExperimentServiceError.Reason" => "ExperimentServiceErrorReason",
      "ExperimentServingStatus" => "ExperimentServingStatus",
      "ExperimentStatus" => "ExperimentStatus",
      "IdError.Reason" => "IdErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NewEntityCreationError.Reason" => "NewEntityCreationErrorReason",
      "NotEmptyError.Reason" => "NotEmptyErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
      "Operator" => "Operator",
      "OperatorError.Reason" => "OperatorErrorReason",
      "Predicate.Operator" => "PredicateOperator",
      "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
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
      "get" => "ExperimentServiceGet",
      "getResponse" => "ExperimentServiceGetResponse",
      "mutate" => "ExperimentServiceMutate",
      "mutateResponse" => "ExperimentServiceMutateResponse",
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
     * Returns a list of experiments specified by the experiment selector from
     * the customer's account.
     * @param serviceSelector The selector specifying the {@link Experiment}s to return.
     * If selector is empty, all experiments are returned.
     * @return List         of experiments meeting all the criteria of each selector.
     * @throws ApiException if problems occurred while fetching experiment information.
     */
    public function get($serviceSelector)
    {
        $args = new ExperimentServiceGet($serviceSelector);
        $result = $this->__soapCall("get", array($args));

        return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
     *
     *
     *
     * Mutates (add, update or remove) experiments.
     * <b>Note:</b> To REMOVE use SET and mark status to REMOVED.
     * @param operations A list of unique operations.
     * The same experiment cannot be specified in more than one operation.
     * @return The          updated experiments. The list of experiments is returned in
     *                      the same order in which it came in as input.
     * @throws ApiException if problems occurred while updating experiment information.
     */
    public function mutate($operations)
    {
        $args = new ExperimentServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($args));

        return $result->rval;
    }
  }
}

