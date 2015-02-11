<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the ConversionTrackerService
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

























































































if (!class_exists("ConversionTrackerService", false)) {
    /**
   * ConversionTrackerService
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class ConversionTrackerService extends AdWordsSoapClient
  {

    const SERVICE_NAME = "ConversionTrackerService";
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201409/ConversionTrackerService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201409/ConversionTrackerService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AdCallMetricsConversion" => "AdCallMetricsConversion",
      "AdWordsConversionTracker" => "AdWordsConversionTracker",
      "AppConversion" => "AppConversion",
      "AuthenticationError" => "AuthenticationError",
      "AuthorizationError" => "AuthorizationError",
      "ClientTermsError" => "ClientTermsError",
      "ConversionTrackingError" => "ConversionTrackingError",
      "DateError" => "DateError",
      "DateRange" => "DateRange",
      "DistinctError" => "DistinctError",
      "DoubleValue" => "DoubleValue",
      "IdError" => "IdError",
      "InternalApiError" => "InternalApiError",
      "LongValue" => "LongValue",
      "Money" => "Money",
      "NotEmptyError" => "NotEmptyError",
      "NumberValue" => "NumberValue",
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
      "UploadConversion" => "UploadConversion",
      "WebsiteCallMetricsConversion" => "WebsiteCallMetricsConversion",
      "ComparableValue" => "ComparableValue",
      "ConversionTrackerStats" => "ConversionTrackerStats",
      "ConversionTracker" => "ConversionTracker",
      "ConversionTrackerOperation" => "ConversionTrackerOperation",
      "ConversionTrackerReturnValue" => "ConversionTrackerReturnValue",
      "DatabaseError" => "DatabaseError",
      "ListReturnValue" => "ListReturnValue",
      "Operation" => "Operation",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApplicationException" => "ApplicationException",
      "ConversionTrackerPage" => "ConversionTrackerPage",
      "NoStatsPage" => "NoStatsPage",
      "Page" => "Page",
      "Selector" => "Selector",
      "AdWordsConversionTracker.MarkupLanguage" => "AdWordsConversionTrackerMarkupLanguage",
      "AdWordsConversionTracker.TextFormat" => "AdWordsConversionTrackerTextFormat",
      "AdWordsConversionTracker.TrackingCodeType" => "AdWordsConversionTrackerTrackingCodeType",
      "AppConversion.AppConversionType" => "AppConversionAppConversionType",
      "AppConversion.AppPlatform" => "AppConversionAppPlatform",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "AuthorizationError.Reason" => "AuthorizationErrorReason",
      "ClientTermsError.Reason" => "ClientTermsErrorReason",
      "ConversionDeduplicationMode" => "ConversionDeduplicationMode",
      "ConversionTracker.Category" => "ConversionTrackerCategory",
      "ConversionTracker.Status" => "ConversionTrackerStatus",
      "ConversionTrackingError.Reason" => "ConversionTrackingErrorReason",
      "DatabaseError.Reason" => "DatabaseErrorReason",
      "DateError.Reason" => "DateErrorReason",
      "DistinctError.Reason" => "DistinctErrorReason",
      "IdError.Reason" => "IdErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NotEmptyError.Reason" => "NotEmptyErrorReason",
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
      "get" => "ConversionTrackerServiceGet",
      "getResponse" => "ConversionTrackerServiceGetResponse",
      "mutate" => "ConversionTrackerServiceMutate",
      "mutateResponse" => "ConversionTrackerServiceMutateResponse",
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
     * Returns a list of the conversion trackers that match the selector. The
     * actual objects contained in the page's list of entries will be specific
     * subclasses of the abstract {@link ConversionTracker} class.
     *
     * @param serviceSelector The selector specifying the
     * {@link ConversionTracker}s to return.
     * @return List                                                  of conversion trackers specified by the selector.
     * @throws com.google.ads.api.services.common.error.ApiException if problems
     *                                                               occurred while retrieving results.
     */
    public function get($serviceSelector)
    {
        $args = new ConversionTrackerServiceGet($serviceSelector);
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
     * Applies the list of mutate operations such as adding or updating conversion trackers.
     * <p class="note"><b>Note:</b> {@link ConversionTrackerOperation} does not support the
     * <code>REMOVE</code> operator. In order to 'disable' a conversion type, send a
     * <code>SET</code> operation for the conversion tracker with the <code>status</code>
     * property set to <code>DISABLED</code></p>
     *
     * @param operations A list of mutate operations to perform.
     * @return The                                                   list of the conversion trackers as they appear after mutation,
     *                                                               in the same order as they appeared in the list of operations.
     * @throws com.google.ads.api.services.common.error.ApiException if problems
     *                                                               occurred while updating the data.
     */
    public function mutate($operations)
    {
        $args = new ConversionTrackerServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($args));

        return $result->rval;
    }
  }
}

