<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the LineItemService
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


if (!class_exists("LineItemSummary", false)) {
    /**
   * The {@code LineItemSummary} represents the base class from which a {@code
   * LineItem} is derived.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class LineItemSummary
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "LineItemSummary";

    /**
     * @access public
     * @var integer
     */
    public $orderId;

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var string
     */
    public $externalId;

    /**
     * @access public
     * @var string
     */
    public $orderName;

    /**
     * @access public
     * @var DateTime
     */
    public $startDateTime;

    /**
     * @access public
     * @var tnsStartDateTimeType
     */
    public $startDateTimeType;

    /**
     * @access public
     * @var DateTime
     */
    public $endDateTime;

    /**
     * @access public
     * @var integer
     */
    public $autoExtensionDays;

    /**
     * @access public
     * @var boolean
     */
    public $unlimitedEndDateTime;

    /**
     * @access public
     * @var tnsCreativeRotationType
     */
    public $creativeRotationType;

    /**
     * @access public
     * @var tnsDeliveryRateType
     */
    public $deliveryRateType;

    /**
     * @access public
     * @var tnsRoadblockingType
     */
    public $roadblockingType;

    /**
     * @access public
     * @var FrequencyCap[]
     */
    public $frequencyCaps;

    /**
     * @access public
     * @var tnsLineItemType
     */
    public $lineItemType;

    /**
     * @access public
     * @var integer
     */
    public $priority;

    /**
     * @access public
     * @var Money
     */
    public $costPerUnit;

    /**
     * @access public
     * @var Money
     */
    public $valueCostPerUnit;

    /**
     * @access public
     * @var tnsCostType
     */
    public $costType;

    /**
     * @access public
     * @var tnsLineItemDiscountType
     */
    public $discountType;

    /**
     * @access public
     * @var double
     */
    public $discount;

    /**
     * @access public
     * @var integer
     */
    public $contractedUnitsBought;

    /**
     * @access public
     * @var CreativePlaceholder[]
     */
    public $creativePlaceholders;

    /**
     * @access public
     * @var LineItemActivityAssociation[]
     */
    public $activityAssociations;

    /**
     * @access public
     * @var tnsTargetPlatform
     */
    public $targetPlatform;

    /**
     * @access public
     * @var tnsEnvironmentType
     */
    public $environmentType;

    /**
     * @access public
     * @var tnsCompanionDeliveryOption
     */
    public $companionDeliveryOption;

    /**
     * @access public
     * @var tnsCreativePersistenceType
     */
    public $creativePersistenceType;

    /**
     * @access public
     * @var boolean
     */
    public $allowOverbook;

    /**
     * @access public
     * @var boolean
     */
    public $skipInventoryCheck;

    /**
     * @access public
     * @var boolean
     */
    public $skipCrossSellingRuleWarningChecks;

    /**
     * @access public
     * @var boolean
     */
    public $reserveAtCreation;

    /**
     * @access public
     * @var Stats
     */
    public $stats;

    /**
     * @access public
     * @var DeliveryIndicator
     */
    public $deliveryIndicator;

    /**
     * @access public
     * @var DeliveryData
     */
    public $deliveryData;

    /**
     * @access public
     * @var Money
     */
    public $budget;

    /**
     * @access public
     * @var tnsComputedStatus
     */
    public $status;

    /**
     * @access public
     * @var tnsLineItemSummaryReservationStatus
     */
    public $reservationStatus;

    /**
     * @access public
     * @var boolean
     */
    public $isArchived;

    /**
     * @access public
     * @var string
     */
    public $webPropertyCode;

    /**
     * @access public
     * @var AppliedLabel[]
     */
    public $appliedLabels;

    /**
     * @access public
     * @var AppliedLabel[]
     */
    public $effectiveAppliedLabels;

    /**
     * @access public
     * @var boolean
     */
    public $disableSameAdvertiserCompetitiveExclusion;

    /**
     * @access public
     * @var string
     */
    public $lastModifiedByApp;

    /**
     * @access public
     * @var string
     */
    public $notes;

    /**
     * @access public
     * @var DateTime
     */
    public $lastModifiedDateTime;

    /**
     * @access public
     * @var DateTime
     */
    public $creationDateTime;

    /**
     * @access public
     * @var boolean
     */
    public $isPrioritizedPreferredDealsEnabled;

    /**
     * @access public
     * @var integer
     */
    public $adExchangeAuctionOpeningPriority;

    /**
     * @access public
     * @var BaseCustomFieldValue[]
     */
    public $customFieldValues;

    /**
     * @access public
     * @var boolean
     */
    public $isMissingCreatives;

    /**
     * @access public
     * @var Goal
     */
    public $primaryGoal;

    /**
     * @access public
     * @var Goal[]
     */
    public $secondaryGoals;

    /**
     * @access public
     * @var GrpSettings
     */
    public $grpSettings;

    /**
     * @access public
     * @var string
     */
    public $LineItemSummaryType;
      private $_parameterMap = array(
      "LineItemSummary.Type" => "LineItemSummaryType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
        $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (!isset($this->_parameterMap[$var])) {
            return;
        }

        return $this->{$this->_parameterMap[$var]};
    }

    /**
     * Provided for getting non-php-standard named variables
     * @return array parameter map
     */
    protected function getParameterMap()
    {
        return $this->_parameterMap;
    }

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

      public function __construct($orderId = null, $id = null, $name = null, $externalId = null, $orderName = null, $startDateTime = null, $startDateTimeType = null, $endDateTime = null, $autoExtensionDays = null, $unlimitedEndDateTime = null, $creativeRotationType = null, $deliveryRateType = null, $roadblockingType = null, $frequencyCaps = null, $lineItemType = null, $priority = null, $costPerUnit = null, $valueCostPerUnit = null, $costType = null, $discountType = null, $discount = null, $contractedUnitsBought = null, $creativePlaceholders = null, $activityAssociations = null, $targetPlatform = null, $environmentType = null, $companionDeliveryOption = null, $creativePersistenceType = null, $allowOverbook = null, $skipInventoryCheck = null, $skipCrossSellingRuleWarningChecks = null, $reserveAtCreation = null, $stats = null, $deliveryIndicator = null, $deliveryData = null, $budget = null, $status = null, $reservationStatus = null, $isArchived = null, $webPropertyCode = null, $appliedLabels = null, $effectiveAppliedLabels = null, $disableSameAdvertiserCompetitiveExclusion = null, $lastModifiedByApp = null, $notes = null, $lastModifiedDateTime = null, $creationDateTime = null, $isPrioritizedPreferredDealsEnabled = null, $adExchangeAuctionOpeningPriority = null, $customFieldValues = null, $isMissingCreatives = null, $primaryGoal = null, $secondaryGoals = null, $grpSettings = null, $LineItemSummaryType = null)
      {
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

