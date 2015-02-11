<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the ForecastService
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


if (!class_exists("LineItem", false)) {
    /**
   * {@code LineItem} is an advertiser's commitment to purchase a specific number
   * of ad impressions, clicks, or time.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class LineItem extends LineItemSummary
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "LineItem";

    /**
     * @access public
     * @var Targeting
     */
    public $targeting;

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

      public function __construct($targeting = null, $orderId = null, $id = null, $name = null, $externalId = null, $orderName = null, $startDateTime = null, $startDateTimeType = null, $endDateTime = null, $autoExtensionDays = null, $unlimitedEndDateTime = null, $creativeRotationType = null, $deliveryRateType = null, $roadblockingType = null, $frequencyCaps = null, $lineItemType = null, $priority = null, $costPerUnit = null, $valueCostPerUnit = null, $costType = null, $discountType = null, $discount = null, $contractedUnitsBought = null, $creativePlaceholders = null, $activityAssociations = null, $targetPlatform = null, $environmentType = null, $companionDeliveryOption = null, $creativePersistenceType = null, $allowOverbook = null, $skipInventoryCheck = null, $skipCrossSellingRuleWarningChecks = null, $reserveAtCreation = null, $stats = null, $deliveryIndicator = null, $deliveryData = null, $budget = null, $status = null, $reservationStatus = null, $isArchived = null, $webPropertyCode = null, $appliedLabels = null, $effectiveAppliedLabels = null, $disableSameAdvertiserCompetitiveExclusion = null, $lastModifiedByApp = null, $notes = null, $lastModifiedDateTime = null, $creationDateTime = null, $isPrioritizedPreferredDealsEnabled = null, $adExchangeAuctionOpeningPriority = null, $customFieldValues = null, $isMissingCreatives = null, $primaryGoal = null, $secondaryGoals = null, $grpSettings = null, $LineItemSummaryType = null)
      {
          parent::__construct();
          $this->targeting = $targeting;
          $this->orderId = $orderId;
          $this->id = $id;
          $this->name = $name;
          $this->externalId = $externalId;
          $this->orderName = $orderName;
          $this->startDateTime = $startDateTime;
          $this->startDateTimeType = $startDateTimeType;
          $this->endDateTime = $endDateTime;
          $this->autoExtensionDays = $autoExtensionDays;
          $this->unlimitedEndDateTime = $unlimitedEndDateTime;
          $this->creativeRotationType = $creativeRotationType;
          $this->deliveryRateType = $deliveryRateType;
          $this->roadblockingType = $roadblockingType;
          $this->frequencyCaps = $frequencyCaps;
          $this->lineItemType = $lineItemType;
          $this->priority = $priority;
          $this->costPerUnit = $costPerUnit;
          $this->valueCostPerUnit = $valueCostPerUnit;
          $this->costType = $costType;
          $this->discountType = $discountType;
          $this->discount = $discount;
          $this->contractedUnitsBought = $contractedUnitsBought;
          $this->creativePlaceholders = $creativePlaceholders;
          $this->activityAssociations = $activityAssociations;
          $this->targetPlatform = $targetPlatform;
          $this->environmentType = $environmentType;
          $this->companionDeliveryOption = $companionDeliveryOption;
          $this->creativePersistenceType = $creativePersistenceType;
          $this->allowOverbook = $allowOverbook;
          $this->skipInventoryCheck = $skipInventoryCheck;
          $this->skipCrossSellingRuleWarningChecks = $skipCrossSellingRuleWarningChecks;
          $this->reserveAtCreation = $reserveAtCreation;
          $this->stats = $stats;
          $this->deliveryIndicator = $deliveryIndicator;
          $this->deliveryData = $deliveryData;
          $this->budget = $budget;
          $this->status = $status;
          $this->reservationStatus = $reservationStatus;
          $this->isArchived = $isArchived;
          $this->webPropertyCode = $webPropertyCode;
          $this->appliedLabels = $appliedLabels;
          $this->effectiveAppliedLabels = $effectiveAppliedLabels;
          $this->disableSameAdvertiserCompetitiveExclusion = $disableSameAdvertiserCompetitiveExclusion;
          $this->lastModifiedByApp = $lastModifiedByApp;
          $this->notes = $notes;
          $this->lastModifiedDateTime = $lastModifiedDateTime;
          $this->creationDateTime = $creationDateTime;
          $this->isPrioritizedPreferredDealsEnabled = $isPrioritizedPreferredDealsEnabled;
          $this->adExchangeAuctionOpeningPriority = $adExchangeAuctionOpeningPriority;
          $this->customFieldValues = $customFieldValues;
          $this->isMissingCreatives = $isMissingCreatives;
          $this->primaryGoal = $primaryGoal;
          $this->secondaryGoals = $secondaryGoals;
          $this->grpSettings = $grpSettings;
          $this->LineItemSummaryType = $LineItemSummaryType;
      }
  }
}

