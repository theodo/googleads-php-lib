<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the CustomerService
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























































if (!class_exists("CustomerService", false)) {
    /**
   * CustomerService
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class CustomerService extends AdWordsSoapClient
  {

    const SERVICE_NAME = "CustomerService";
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201409";
      const ENDPOINT = "https://adwords.google.com/api/adwords/mcm/v201409/CustomerService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/mcm/v201409/CustomerService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AuthenticationError" => "AuthenticationError",
      "AuthorizationError" => "AuthorizationError",
      "ClientTermsError" => "ClientTermsError",
      "DistinctError" => "DistinctError",
      "IdError" => "IdError",
      "InternalApiError" => "InternalApiError",
      "NotEmptyError" => "NotEmptyError",
      "NullError" => "NullError",
      "OperationAccessDenied" => "OperationAccessDenied",
      "OperatorError" => "OperatorError",
      "QuotaCheckError" => "QuotaCheckError",
      "RangeError" => "RangeError",
      "RateExceededError" => "RateExceededError",
      "ReadOnlyError" => "ReadOnlyError",
      "RejectedError" => "RejectedError",
      "RequestError" => "RequestError",
      "RequiredError" => "RequiredError",
      "SizeLimitError" => "SizeLimitError",
      "SoapHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "StringLengthError" => "StringLengthError",
      "UrlError" => "UrlError",
      "DatabaseError" => "DatabaseError",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApplicationException" => "ApplicationException",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "AuthorizationError.Reason" => "AuthorizationErrorReason",
      "ClientTermsError.Reason" => "ClientTermsErrorReason",
      "ConversionDeduplicationMode" => "ConversionDeduplicationMode",
      "DatabaseError.Reason" => "DatabaseErrorReason",
      "DistinctError.Reason" => "DistinctErrorReason",
      "IdError.Reason" => "IdErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NotEmptyError.Reason" => "NotEmptyErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
      "OperatorError.Reason" => "OperatorErrorReason",
      "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RateExceededError.Reason" => "RateExceededErrorReason",
      "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
      "RejectedError.Reason" => "RejectedErrorReason",
      "RequestError.Reason" => "RequestErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "SizeLimitError.Reason" => "SizeLimitErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "UrlError.Reason" => "UrlErrorReason",
      "ConversionTrackingSettings" => "ConversionTrackingSettings",
      "Customer" => "Customer",
      "get" => "CustomerServiceGet",
      "getResponse" => "CustomerServiceGetResponse",
      "mutate" => "CustomerServiceMutate",
      "mutateResponse" => "CustomerServiceMutateResponse",
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
     * Returns details of the authorized customer.
     *
     * @return customer associated with the caller
     */
    public function get()
    {
        $args = new CustomerServiceGet();
        $result = $this->__soapCall("get", array($args));

        return $result->rval;
    }
    /**
     * Update the authorized customer.
     *
     * <p>While there are a limited set of properties available to update, please read this
     * <a href="https://support.google.com/analytics/answer/1033981">help center article
     * on auto-tagging</a> before updating {@code customer.autoTaggingEnabled}.
     *
     * @param customer the requested updated value for the customer.
     * @throws ApiException
     */
    public function mutate($customer)
    {
        $args = new CustomerServiceMutate($customer);
        $result = $this->__soapCall("mutate", array($args));

        return $result->rval;
    }
  }
}

