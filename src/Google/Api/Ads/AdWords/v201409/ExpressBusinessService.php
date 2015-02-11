<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the ExpressBusinessService
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


if (!class_exists("ExpressBusinessService", false)) {
    /**
   * ExpressBusinessService
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class ExpressBusinessService extends AdWordsSoapClient
  {

    const SERVICE_NAME = "ExpressBusinessService";
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201409";
      const ENDPOINT = "https://adwords.google.com/api/adwords/express/v201409/ExpressBusinessService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/express/v201409/ExpressBusinessService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "Address" => "Address",
      "AuthenticationError" => "AuthenticationError",
      "AuthorizationError" => "AuthorizationError",
      "ClientTermsError" => "ClientTermsError",
      "Date" => "Date",
      "DateError" => "DateError",
      "DateRange" => "DateRange",
      "DistinctError" => "DistinctError",
      "GeoPoint" => "GeoPoint",
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
      "ExpressBusinessError" => "ExpressBusinessError",
      "PhoneNumber" => "PhoneNumber",
      "ExpressBusiness" => "ExpressBusiness",
      "ExpressBusinessOperation" => "ExpressBusinessOperation",
      "ExpressBusinessPage" => "ExpressBusinessPage",
      "NoStatsPage" => "NoStatsPage",
      "ExpressBusiness.Status" => "ExpressBusinessStatus",
      "ExpressBusinessError.Reason" => "ExpressBusinessErrorReason",
      "RegionCode" => "RegionCode",
      "get" => "ExpressBusinessServiceGet",
      "getResponse" => "ExpressBusinessServiceGetResponse",
      "mutate" => "ExpressBusinessServiceMutate",
      "mutateResponse" => "ExpressBusinessServiceMutateResponse",
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
     * Retrieves the Express businesses that meet the criteria set in the given selector.
     *
     * @param selector the selector specifying the AdWords Express businesses to return
     * @return list of AdWords Express businesses identified by the selector
     */
    public function get($selector)
    {
        $args = new ExpressBusinessServiceGet($selector);
        $result = $this->__soapCall("get", array($args));

        return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
     *
     *
     *
     * Performs the given {@link ExpressBusinessOperation}.
     *
     * @param operations list of unique operations; the same AdWords Express business cannot be
     * specified in more than one operation
     * @return the updated AdWords Express businesses
     */
    public function mutate($operations)
    {
        $args = new ExpressBusinessServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($args));

        return $result->rval;
    }
  }
}

