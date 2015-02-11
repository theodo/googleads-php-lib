<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the FeedItemService
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


if (!class_exists("FeedItemService", false)) {
    /**
   * FeedItemService
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItemService extends AdWordsSoapClient
  {

    const SERVICE_NAME = "FeedItemService";
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201409/FeedItemService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201409/FeedItemService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AuthenticationError" => "AuthenticationError",
      "AuthorizationError" => "AuthorizationError",
      "ClientTermsError" => "ClientTermsError",
      "CustomParameter" => "CustomParameter",
      "CustomParameters" => "CustomParameters",
      "DateError" => "DateError",
      "DateRange" => "DateRange",
      "DistinctError" => "DistinctError",
      "EntityAccessDenied" => "EntityAccessDenied",
      "EntityCountLimitExceeded" => "EntityCountLimitExceeded",
      "EntityNotFound" => "EntityNotFound",
      "FeedItemAdGroupTargeting" => "FeedItemAdGroupTargeting",
      "FeedItemAttributeError" => "FeedItemAttributeError",
      "FeedItemAttributeValue" => "FeedItemAttributeValue",
      "FeedItemCampaignTargeting" => "FeedItemCampaignTargeting",
      "FeedItemDevicePreference" => "FeedItemDevicePreference",
      "FeedItemError" => "FeedItemError",
      "FeedItemSchedule" => "FeedItemSchedule",
      "FeedItemScheduling" => "FeedItemScheduling",
      "IdError" => "IdError",
      "InternalApiError" => "InternalApiError",
      "Keyword" => "Keyword",
      "MobileAppCategory" => "MobileAppCategory",
      "MobileApplication" => "MobileApplication",
      "NotEmptyError" => "NotEmptyError",
      "NullError" => "NullError",
      "OperationAccessDenied" => "OperationAccessDenied",
      "OrderBy" => "OrderBy",
      "Paging" => "Paging",
      "Placement" => "Placement",
      "Predicate" => "Predicate",
      "ProductConditionOperand" => "ProductConditionOperand",
      "QueryError" => "QueryError",
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
      "UrlError" => "UrlError",
      "CriterionUserInterest" => "CriterionUserInterest",
      "CriterionUserList" => "CriterionUserList",
      "Vertical" => "Vertical",
      "DatabaseError" => "DatabaseError",
      "FeedItemValidationDetail" => "FeedItemValidationDetail",
      "ProductCondition" => "ProductCondition",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApplicationException" => "ApplicationException",
      "Product" => "Product",
      "Selector" => "Selector",
      "Criterion" => "Criterion",
      "FeedItem" => "FeedItem",
      "FeedItemOperation" => "FeedItemOperation",
      "FeedItemPage" => "FeedItemPage",
      "FeedItemReturnValue" => "FeedItemReturnValue",
      "ListReturnValue" => "ListReturnValue",
      "NullStatsPage" => "NullStatsPage",
      "Operation" => "Operation",
      "Page" => "Page",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "AuthorizationError.Reason" => "AuthorizationErrorReason",
      "ClientTermsError.Reason" => "ClientTermsErrorReason",
      "Criterion.Type" => "CriterionType",
      "DatabaseError.Reason" => "DatabaseErrorReason",
      "DateError.Reason" => "DateErrorReason",
      "DayOfWeek" => "DayOfWeek",
      "DistinctError.Reason" => "DistinctErrorReason",
      "EntityAccessDenied.Reason" => "EntityAccessDeniedReason",
      "EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
      "EntityNotFound.Reason" => "EntityNotFoundReason",
      "FeedItem.Status" => "FeedItemStatus",
      "FeedItemError.Reason" => "FeedItemErrorReason",
      "FeedItemValidationDetail.ApprovalStatus" => "FeedItemValidationDetailApprovalStatus",
      "FeedItemValidationDetail.ValidationStatus" => "FeedItemValidationDetailValidationStatus",
      "IdError.Reason" => "IdErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "KeywordMatchType" => "KeywordMatchType",
      "MinuteOfHour" => "MinuteOfHour",
      "NotEmptyError.Reason" => "NotEmptyErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
      "Operator" => "Operator",
      "Predicate.Operator" => "PredicateOperator",
      "QueryError.Reason" => "QueryErrorReason",
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
      "UrlError.Reason" => "UrlErrorReason",
      "CriterionUserList.MembershipStatus" => "CriterionUserListMembershipStatus",
      "get" => "FeedItemServiceGet",
      "getResponse" => "FeedItemServiceGetResponse",
      "mutate" => "FeedItemServiceMutate",
      "mutateResponse" => "FeedItemServiceMutateResponse",
      "query" => "Query",
      "queryResponse" => "QueryResponse",
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
     * Returns a list of FeedItems that meet the selector criteria.
     *
     * @param selector Determines which FeedItems to return. If empty all
     * FeedItems are returned.
     * @return The          list of FeedItems.
     * @throws ApiException Indicates a problem with the request.
     */
    public function get($selector)
    {
        $args = new FeedItemServiceGet($selector);
        $result = $this->__soapCall("get", array($args));

        return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Add, remove, and set FeedItems.
     *
     * @param operations The operations to apply.
     * @return The          resulting FeedItems.
     * @throws ApiException Indicates a problem with the request.
     */
    public function mutate($operations)
    {
        $args = new FeedItemServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($args));

        return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns the list of FeedItems that match the query.
     *
     * @param query The SQL-like AWQL query string
     * @returns A list of FeedItems
     * @throws ApiException when the query is invalid or there are errors processing the request.
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall("query", array($args));

        return $result->rval;
    }
  }
}

