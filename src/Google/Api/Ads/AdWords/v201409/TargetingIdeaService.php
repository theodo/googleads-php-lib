<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the TargetingIdeaService
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


if (!class_exists("TargetingIdeaService", false)) {
    /**
   * TargetingIdeaService
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class TargetingIdeaService extends AdWordsSoapClient
  {

    const SERVICE_NAME = "TargetingIdeaService";
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201409";
      const ENDPOINT = "https://adwords.google.com/api/adwords/o/v201409/TargetingIdeaService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/o/v201409/TargetingIdeaService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AdGroupBidLandscape" => "AdGroupBidLandscape",
      "AdGroupCriterionError" => "AdGroupCriterionError",
      "AdGroupCriterionLimitExceeded" => "AdGroupCriterionLimitExceeded",
      "AdxError" => "AdxError",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApplicationException" => "ApplicationException",
      "AuthenticationError" => "AuthenticationError",
      "AuthorizationError" => "AuthorizationError",
      "BidLandscape" => "BidLandscape",
      "BidLandscape.LandscapePoint" => "BidLandscapeLandscapePoint",
      "BiddingError" => "BiddingError",
      "BudgetError" => "BudgetError",
      "ClientTermsError" => "ClientTermsError",
      "CollectionSizeError" => "CollectionSizeError",
      "ComparableValue" => "ComparableValue",
      "Criterion" => "Criterion",
      "CriterionBidLandscape" => "CriterionBidLandscape",
      "CriterionError" => "CriterionError",
      "CriterionPolicyError" => "CriterionPolicyError",
      "DatabaseError" => "DatabaseError",
      "DateError" => "DateError",
      "DimensionProperties" => "DimensionProperties",
      "DistinctError" => "DistinctError",
      "DomainCategory" => "DomainCategory",
      "DoubleValue" => "DoubleValue",
      "EntityCountLimitExceeded" => "EntityCountLimitExceeded",
      "EntityNotFound" => "EntityNotFound",
      "IdError" => "IdError",
      "InternalApiError" => "InternalApiError",
      "Keyword" => "Keyword",
      "Language" => "Language",
      "LevelOfDetail" => "LevelOfDetail",
      "Location" => "Location",
      "LongValue" => "LongValue",
      "MobileAppCategory" => "MobileAppCategory",
      "MobileApplication" => "MobileApplication",
      "Money" => "Money",
      "NetworkSetting" => "NetworkSetting",
      "NotEmptyError" => "NotEmptyError",
      "NullError" => "NullError",
      "NumberValue" => "NumberValue",
      "OperationAccessDenied" => "OperationAccessDenied",
      "Paging" => "Paging",
      "Placement" => "Placement",
      "Platform" => "Platform",
      "PolicyViolationError" => "PolicyViolationError",
      "PolicyViolationError.Part" => "PolicyViolationErrorPart",
      "PolicyViolationKey" => "PolicyViolationKey",
      "Product" => "Product",
      "ProductCondition" => "ProductCondition",
      "ProductConditionOperand" => "ProductConditionOperand",
      "QuotaCheckError" => "QuotaCheckError",
      "RangeError" => "RangeError",
      "RateExceededError" => "RateExceededError",
      "ReadOnlyError" => "ReadOnlyError",
      "RegionCodeError" => "RegionCodeError",
      "RejectedError" => "RejectedError",
      "RequestError" => "RequestError",
      "RequiredError" => "RequiredError",
      "SizeLimitError" => "SizeLimitError",
      "SoapHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "StatsQueryError" => "StatsQueryError",
      "StringFormatError" => "StringFormatError",
      "StringLengthError" => "StringLengthError",
      "DataEntry" => "DataEntry",
      "TargetError" => "TargetError",
      "CriterionUserInterest" => "CriterionUserInterest",
      "CriterionUserList" => "CriterionUserList",
      "Vertical" => "Vertical",
      "AdGroupBidLandscape.Type" => "AdGroupBidLandscapeType",
      "AdGroupCriterionError.Reason" => "AdGroupCriterionErrorReason",
      "AdGroupCriterionLimitExceeded.CriteriaLimitType" => "AdGroupCriterionLimitExceededCriteriaLimitType",
      "AdxError.Reason" => "AdxErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "AuthorizationError.Reason" => "AuthorizationErrorReason",
      "BiddingError.Reason" => "BiddingErrorReason",
      "BudgetError.Reason" => "BudgetErrorReason",
      "ClientTermsError.Reason" => "ClientTermsErrorReason",
      "CollectionSizeError.Reason" => "CollectionSizeErrorReason",
      "Criterion.Type" => "CriterionType",
      "CriterionError.Reason" => "CriterionErrorReason",
      "DatabaseError.Reason" => "DatabaseErrorReason",
      "DateError.Reason" => "DateErrorReason",
      "DistinctError.Reason" => "DistinctErrorReason",
      "EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
      "EntityNotFound.Reason" => "EntityNotFoundReason",
      "IdError.Reason" => "IdErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "KeywordMatchType" => "KeywordMatchType",
      "LocationTargetingStatus" => "LocationTargetingStatus",
      "NotEmptyError.Reason" => "NotEmptyErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
      "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RateExceededError.Reason" => "RateExceededErrorReason",
      "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
      "RegionCodeError.Reason" => "RegionCodeErrorReason",
      "RejectedError.Reason" => "RejectedErrorReason",
      "RequestError.Reason" => "RequestErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "SizeLimitError.Reason" => "SizeLimitErrorReason",
      "StatsQueryError.Reason" => "StatsQueryErrorReason",
      "StringFormatError.Reason" => "StringFormatErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "TargetError.Reason" => "TargetErrorReason",
      "CriterionUserList.MembershipStatus" => "CriterionUserListMembershipStatus",
      "AdFormatSpec" => "AdFormatSpec",
      "AdFormatSpecListAttribute" => "AdFormatSpecListAttribute",
      "AdSpec" => "AdSpec",
      "AdSpecListAttribute" => "AdSpecListAttribute",
      "Attribute" => "Attribute",
      "BidLandscapeAttribute" => "BidLandscapeAttribute",
      "BooleanAttribute" => "BooleanAttribute",
      "CategoryProductsAndServicesSearchParameter" => "CategoryProductsAndServicesSearchParameter",
      "CompetitionSearchParameter" => "CompetitionSearchParameter",
      "CriterionAttribute" => "CriterionAttribute",
      "CurrencyCodeError" => "CurrencyCodeError",
      "DisplayAdSpec" => "DisplayAdSpec",
      "DisplayAdSpec.AdSizeSpec" => "DisplayAdSpecAdSizeSpec",
      "DisplayType" => "DisplayType",
      "DoubleAttribute" => "DoubleAttribute",
      "ExcludedKeywordSearchParameter" => "ExcludedKeywordSearchParameter",
      "FlashDisplayType" => "FlashDisplayType",
      "HtmlDisplayType" => "HtmlDisplayType",
      "IdeaTextFilterSearchParameter" => "IdeaTextFilterSearchParameter",
      "IdeaTypeAttribute" => "IdeaTypeAttribute",
      "ImageDisplayType" => "ImageDisplayType",
      "InStreamAdInfo" => "InStreamAdInfo",
      "InStreamAdInfoAttribute" => "InStreamAdInfoAttribute",
      "InStreamAdSpec" => "InStreamAdSpec",
      "IncludeAdultContentSearchParameter" => "IncludeAdultContentSearchParameter",
      "IntegerAttribute" => "IntegerAttribute",
      "IntegerSetAttribute" => "IntegerSetAttribute",
      "KeywordAttribute" => "KeywordAttribute",
      "LanguageSearchParameter" => "LanguageSearchParameter",
      "LocationSearchParameter" => "LocationSearchParameter",
      "LongAttribute" => "LongAttribute",
      "LongComparisonOperation" => "LongComparisonOperation",
      "LongRangeAttribute" => "LongRangeAttribute",
      "MoneyAttribute" => "MoneyAttribute",
      "MonthlySearchVolume" => "MonthlySearchVolume",
      "MonthlySearchVolumeAttribute" => "MonthlySearchVolumeAttribute",
      "NetworkSearchParameter" => "NetworkSearchParameter",
      "OpportunityIdeaTypeAttribute" => "OpportunityIdeaTypeAttribute",
      "PlacementAttribute" => "PlacementAttribute",
      "PlacementTypeAttribute" => "PlacementTypeAttribute",
      "Range" => "Range",
      "RelatedToQuerySearchParameter" => "RelatedToQuerySearchParameter",
      "RelatedToUrlSearchParameter" => "RelatedToUrlSearchParameter",
      "SearchParameter" => "SearchParameter",
      "SearchVolumeSearchParameter" => "SearchVolumeSearchParameter",
      "SeedAdGroupIdSearchParameter" => "SeedAdGroupIdSearchParameter",
      "StringAttribute" => "StringAttribute",
      "TargetingIdea" => "TargetingIdea",
      "TargetingIdeaError" => "TargetingIdeaError",
      "TargetingIdeaPage" => "TargetingIdeaPage",
      "TargetingIdeaSelector" => "TargetingIdeaSelector",
      "TextAdSpec" => "TextAdSpec",
      "TrafficEstimatorError" => "TrafficEstimatorError",
      "Type_AttributeMapEntry" => "Type_AttributeMapEntry",
      "WebpageDescriptor" => "WebpageDescriptor",
      "WebpageDescriptorAttribute" => "WebpageDescriptorAttribute",
      "AttributeType" => "AttributeType",
      "CompetitionSearchParameter.Level" => "CompetitionSearchParameterLevel",
      "CurrencyCodeError.Reason" => "CurrencyCodeErrorReason",
      "DisplayAdSpec.ActivationOption" => "DisplayAdSpecActivationOption",
      "HtmlDisplayType.HtmlOption" => "HtmlDisplayTypeHtmlOption",
      "IdeaType" => "IdeaType",
      "InStreamAdSpec.InStreamType" => "InStreamAdSpecInStreamType",
      "OpportunityIdeaType" => "OpportunityIdeaType",
      "RequestType" => "RequestType",
      "SiteConstants.AdFormat" => "SiteConstantsAdFormat",
      "SiteConstants.PlacementType" => "SiteConstantsPlacementType",
      "TargetingIdeaError.Reason" => "TargetingIdeaErrorReason",
      "TrafficEstimatorError.Reason" => "TrafficEstimatorErrorReason",
      "get" => "TargetingIdeaServiceGet",
      "getResponse" => "TargetingIdeaServiceGetResponse",
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
     * Returns a page of ideas that match the query described by the specified
     * {@link TargetingIdeaSelector}.
     *
     * <p>The selector must specify a {@code paging} value, with {@code numberResults} set to 800 or
     * less.  Large result sets must be composed through multiple calls to this method, advancing the
     * paging {@code startIndex} value by {@code numberResults} with each call.
     *
     * <p>Only a relatively small total number of results will be available through this method.
     * Much larger result sets may be available using
     * {@link #getBulkKeywordIdeas(TargetingIdeaSelector)} at the price of reduced flexibility in
     * selector options.
     *
     * @param selector Query describing the types of results to return when
     * finding matches (similar keyword ideas/placement ideas).
     * @return A            {@link TargetingIdeaPage} of results, that is a subset of the
     *                      list of possible ideas meeting the criteria of the
     *                      {@link TargetingIdeaSelector}.
     * @throws ApiException If problems occurred while querying for ideas.
     */
    public function get($selector)
    {
        $args = new TargetingIdeaServiceGet($selector);
        $result = $this->__soapCall("get", array($args));

        return $result->rval;
    }
  }
}

