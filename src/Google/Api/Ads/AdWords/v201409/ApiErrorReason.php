<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the MutateJobService
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

















if (!class_exists("ApiErrorReason", false)) {
    /**
   * Interface that has a reason return an associated service error.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class ApiErrorReason
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "ApiErrorReason";

    /**
     * @access public
     * @var tnsAdErrorReason
     */
    public $AdErrorReason;

    /**
     * @access public
     * @var tnsAdExtensionErrorReason
     */
    public $AdExtensionErrorReason;

    /**
     * @access public
     * @var tnsAdGroupAdErrorReason
     */
    public $AdGroupAdErrorReason;

    /**
     * @access public
     * @var tnsAdGroupCriterionErrorReason
     */
    public $AdGroupCriterionErrorReason;

    /**
     * @access public
     * @var tnsAdGroupServiceErrorReason
     */
    public $AdGroupServiceErrorReason;

    /**
     * @access public
     * @var tnsAdxErrorReason
     */
    public $AdxErrorReason;

    /**
     * @access public
     * @var tnsAuthenticationErrorReason
     */
    public $AuthenticationErrorReason;

    /**
     * @access public
     * @var tnsAuthorizationErrorReason
     */
    public $AuthorizationErrorReason;

    /**
     * @access public
     * @var tnsBetaErrorReason
     */
    public $BetaErrorReason;

    /**
     * @access public
     * @var tnsBiddingErrorReason
     */
    public $BiddingErrorReason;

    /**
     * @access public
     * @var tnsBiddingErrorsReason
     */
    public $BiddingErrorsReason;

    /**
     * @access public
     * @var tnsBiddingTransitionErrorReason
     */
    public $BiddingTransitionErrorReason;

    /**
     * @access public
     * @var tnsBudgetErrorReason
     */
    public $BudgetErrorReason;

    /**
     * @access public
     * @var tnsBulkMutateJobErrorReason
     */
    public $BulkMutateJobErrorReason;

    /**
     * @access public
     * @var tnsCampaignAdExtensionErrorReason
     */
    public $CampaignAdExtensionErrorReason;

    /**
     * @access public
     * @var tnsCampaignCriterionErrorReason
     */
    public $CampaignCriterionErrorReason;

    /**
     * @access public
     * @var tnsCampaignErrorReason
     */
    public $CampaignErrorReason;

    /**
     * @access public
     * @var tnsClientTermsErrorReason
     */
    public $ClientTermsErrorReason;

    /**
     * @access public
     * @var tnsCollectionSizeErrorReason
     */
    public $CollectionSizeErrorReason;

    /**
     * @access public
     * @var tnsCriterionErrorReason
     */
    public $CriterionErrorReason;

    /**
     * @access public
     * @var tnsDatabaseErrorReason
     */
    public $DatabaseErrorReason;

    /**
     * @access public
     * @var tnsDateErrorReason
     */
    public $DateErrorReason;

    /**
     * @access public
     * @var tnsDateRangeErrorReason
     */
    public $DateRangeErrorReason;

    /**
     * @access public
     * @var tnsDistinctErrorReason
     */
    public $DistinctErrorReason;

    /**
     * @access public
     * @var tnsEntityAccessDeniedReason
     */
    public $EntityAccessDeniedReason;

    /**
     * @access public
     * @var tnsEntityCountLimitExceededReason
     */
    public $EntityCountLimitExceededReason;

    /**
     * @access public
     * @var tnsEntityNotFoundReason
     */
    public $EntityNotFoundReason;

    /**
     * @access public
     * @var tnsExperimentErrorReason
     */
    public $ExperimentErrorReason;

    /**
     * @access public
     * @var tnsFeedItemErrorReason
     */
    public $FeedItemErrorReason;

    /**
     * @access public
     * @var tnsForwardCompatibilityErrorReason
     */
    public $ForwardCompatibilityErrorReason;

    /**
     * @access public
     * @var tnsFunctionErrorReason
     */
    public $FunctionErrorReason;

    /**
     * @access public
     * @var tnsFunctionParsingErrorReason
     */
    public $FunctionParsingErrorReason;

    /**
     * @access public
     * @var tnsIdErrorReason
     */
    public $IdErrorReason;

    /**
     * @access public
     * @var tnsImageErrorReason
     */
    public $ImageErrorReason;

    /**
     * @access public
     * @var tnsInternalApiErrorReason
     */
    public $InternalApiErrorReason;

    /**
     * @access public
     * @var tnsJobErrorReason
     */
    public $JobErrorReason;

    /**
     * @access public
     * @var tnsMediaErrorReason
     */
    public $MediaErrorReason;

    /**
     * @access public
     * @var tnsMultiplierErrorReason
     */
    public $MultiplierErrorReason;

    /**
     * @access public
     * @var tnsNewEntityCreationErrorReason
     */
    public $NewEntityCreationErrorReason;

    /**
     * @access public
     * @var tnsNotEmptyErrorReason
     */
    public $NotEmptyErrorReason;

    /**
     * @access public
     * @var tnsNullErrorReason
     */
    public $NullErrorReason;

    /**
     * @access public
     * @var tnsOperationAccessDeniedReason
     */
    public $OperationAccessDeniedReason;

    /**
     * @access public
     * @var tnsOperatorErrorReason
     */
    public $OperatorErrorReason;

    /**
     * @access public
     * @var tnsPagingErrorReason
     */
    public $PagingErrorReason;

    /**
     * @access public
     * @var tnsPolicyViolationErrorReason
     */
    public $PolicyViolationErrorReason;

    /**
     * @access public
     * @var tnsQueryErrorReason
     */
    public $QueryErrorReason;

    /**
     * @access public
     * @var tnsQuotaCheckErrorReason
     */
    public $QuotaCheckErrorReason;

    /**
     * @access public
     * @var tnsQuotaErrorReason
     */
    public $QuotaErrorReason;

    /**
     * @access public
     * @var tnsRangeErrorReason
     */
    public $RangeErrorReason;

    /**
     * @access public
     * @var tnsRateExceededErrorReason
     */
    public $RateExceededErrorReason;

    /**
     * @access public
     * @var tnsReadOnlyErrorReason
     */
    public $ReadOnlyErrorReason;

    /**
     * @access public
     * @var tnsRegionCodeErrorReason
     */
    public $RegionCodeErrorReason;

    /**
     * @access public
     * @var tnsRejectedErrorReason
     */
    public $RejectedErrorReason;

    /**
     * @access public
     * @var tnsRequestErrorReason
     */
    public $RequestErrorReason;

    /**
     * @access public
     * @var tnsRequiredErrorReason
     */
    public $RequiredErrorReason;

    /**
     * @access public
     * @var tnsSelectorErrorReason
     */
    public $SelectorErrorReason;

    /**
     * @access public
     * @var tnsSettingErrorReason
     */
    public $SettingErrorReason;

    /**
     * @access public
     * @var tnsSizeLimitErrorReason
     */
    public $SizeLimitErrorReason;

    /**
     * @access public
     * @var tnsStatsQueryErrorReason
     */
    public $StatsQueryErrorReason;

    /**
     * @access public
     * @var tnsStringFormatErrorReason
     */
    public $StringFormatErrorReason;

    /**
     * @access public
     * @var tnsStringLengthErrorReason
     */
    public $StringLengthErrorReason;

    /**
     * @access public
     * @var tnsTargetErrorReason
     */
    public $TargetErrorReason;

    /**
     * @access public
     * @var tnsUrlErrorReason
     */
    public $UrlErrorReason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($AdErrorReason = null, $AdExtensionErrorReason = null, $AdGroupAdErrorReason = null, $AdGroupCriterionErrorReason = null, $AdGroupServiceErrorReason = null, $AdxErrorReason = null, $AuthenticationErrorReason = null, $AuthorizationErrorReason = null, $BetaErrorReason = null, $BiddingErrorReason = null, $BiddingErrorsReason = null, $BiddingTransitionErrorReason = null, $BudgetErrorReason = null, $BulkMutateJobErrorReason = null, $CampaignAdExtensionErrorReason = null, $CampaignCriterionErrorReason = null, $CampaignErrorReason = null, $ClientTermsErrorReason = null, $CollectionSizeErrorReason = null, $CriterionErrorReason = null, $DatabaseErrorReason = null, $DateErrorReason = null, $DateRangeErrorReason = null, $DistinctErrorReason = null, $EntityAccessDeniedReason = null, $EntityCountLimitExceededReason = null, $EntityNotFoundReason = null, $ExperimentErrorReason = null, $FeedItemErrorReason = null, $ForwardCompatibilityErrorReason = null, $FunctionErrorReason = null, $FunctionParsingErrorReason = null, $IdErrorReason = null, $ImageErrorReason = null, $InternalApiErrorReason = null, $JobErrorReason = null, $MediaErrorReason = null, $MultiplierErrorReason = null, $NewEntityCreationErrorReason = null, $NotEmptyErrorReason = null, $NullErrorReason = null, $OperationAccessDeniedReason = null, $OperatorErrorReason = null, $PagingErrorReason = null, $PolicyViolationErrorReason = null, $QueryErrorReason = null, $QuotaCheckErrorReason = null, $QuotaErrorReason = null, $RangeErrorReason = null, $RateExceededErrorReason = null, $ReadOnlyErrorReason = null, $RegionCodeErrorReason = null, $RejectedErrorReason = null, $RequestErrorReason = null, $RequiredErrorReason = null, $SelectorErrorReason = null, $SettingErrorReason = null, $SizeLimitErrorReason = null, $StatsQueryErrorReason = null, $StringFormatErrorReason = null, $StringLengthErrorReason = null, $TargetErrorReason = null, $UrlErrorReason = null)
      {
          $this->AdErrorReason = $AdErrorReason;
          $this->AdExtensionErrorReason = $AdExtensionErrorReason;
          $this->AdGroupAdErrorReason = $AdGroupAdErrorReason;
          $this->AdGroupCriterionErrorReason = $AdGroupCriterionErrorReason;
          $this->AdGroupServiceErrorReason = $AdGroupServiceErrorReason;
          $this->AdxErrorReason = $AdxErrorReason;
          $this->AuthenticationErrorReason = $AuthenticationErrorReason;
          $this->AuthorizationErrorReason = $AuthorizationErrorReason;
          $this->BetaErrorReason = $BetaErrorReason;
          $this->BiddingErrorReason = $BiddingErrorReason;
          $this->BiddingErrorsReason = $BiddingErrorsReason;
          $this->BiddingTransitionErrorReason = $BiddingTransitionErrorReason;
          $this->BudgetErrorReason = $BudgetErrorReason;
          $this->BulkMutateJobErrorReason = $BulkMutateJobErrorReason;
          $this->CampaignAdExtensionErrorReason = $CampaignAdExtensionErrorReason;
          $this->CampaignCriterionErrorReason = $CampaignCriterionErrorReason;
          $this->CampaignErrorReason = $CampaignErrorReason;
          $this->ClientTermsErrorReason = $ClientTermsErrorReason;
          $this->CollectionSizeErrorReason = $CollectionSizeErrorReason;
          $this->CriterionErrorReason = $CriterionErrorReason;
          $this->DatabaseErrorReason = $DatabaseErrorReason;
          $this->DateErrorReason = $DateErrorReason;
          $this->DateRangeErrorReason = $DateRangeErrorReason;
          $this->DistinctErrorReason = $DistinctErrorReason;
          $this->EntityAccessDeniedReason = $EntityAccessDeniedReason;
          $this->EntityCountLimitExceededReason = $EntityCountLimitExceededReason;
          $this->EntityNotFoundReason = $EntityNotFoundReason;
          $this->ExperimentErrorReason = $ExperimentErrorReason;
          $this->FeedItemErrorReason = $FeedItemErrorReason;
          $this->ForwardCompatibilityErrorReason = $ForwardCompatibilityErrorReason;
          $this->FunctionErrorReason = $FunctionErrorReason;
          $this->FunctionParsingErrorReason = $FunctionParsingErrorReason;
          $this->IdErrorReason = $IdErrorReason;
          $this->ImageErrorReason = $ImageErrorReason;
          $this->InternalApiErrorReason = $InternalApiErrorReason;
          $this->JobErrorReason = $JobErrorReason;
          $this->MediaErrorReason = $MediaErrorReason;
          $this->MultiplierErrorReason = $MultiplierErrorReason;
          $this->NewEntityCreationErrorReason = $NewEntityCreationErrorReason;
          $this->NotEmptyErrorReason = $NotEmptyErrorReason;
          $this->NullErrorReason = $NullErrorReason;
          $this->OperationAccessDeniedReason = $OperationAccessDeniedReason;
          $this->OperatorErrorReason = $OperatorErrorReason;
          $this->PagingErrorReason = $PagingErrorReason;
          $this->PolicyViolationErrorReason = $PolicyViolationErrorReason;
          $this->QueryErrorReason = $QueryErrorReason;
          $this->QuotaCheckErrorReason = $QuotaCheckErrorReason;
          $this->QuotaErrorReason = $QuotaErrorReason;
          $this->RangeErrorReason = $RangeErrorReason;
          $this->RateExceededErrorReason = $RateExceededErrorReason;
          $this->ReadOnlyErrorReason = $ReadOnlyErrorReason;
          $this->RegionCodeErrorReason = $RegionCodeErrorReason;
          $this->RejectedErrorReason = $RejectedErrorReason;
          $this->RequestErrorReason = $RequestErrorReason;
          $this->RequiredErrorReason = $RequiredErrorReason;
          $this->SelectorErrorReason = $SelectorErrorReason;
          $this->SettingErrorReason = $SettingErrorReason;
          $this->SizeLimitErrorReason = $SizeLimitErrorReason;
          $this->StatsQueryErrorReason = $StatsQueryErrorReason;
          $this->StringFormatErrorReason = $StringFormatErrorReason;
          $this->StringLengthErrorReason = $StringLengthErrorReason;
          $this->TargetErrorReason = $TargetErrorReason;
          $this->UrlErrorReason = $UrlErrorReason;
      }
  }
}

