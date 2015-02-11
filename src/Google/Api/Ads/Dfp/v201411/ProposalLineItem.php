<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the ProposalLineItemService
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




























































if (!class_exists("ProposalLineItem", false)) {
    /**
   * A {@code ProposalLineItem} is an instance of sales {@link Product}. It belongs to
   * a {@link Proposal} and is created according to a {@link Product} and
   * {@link RateCard}. When the proposal is turned into an {@link Order}, this object is
   * turned into a {@link LineItem}.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ProposalLineItem
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ProposalLineItem";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var integer
     */
    public $proposalId;

    /**
     * @access public
     * @var integer
     */
    public $rateCardId;

    /**
     * @access public
     * @var integer
     */
    public $productId;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var DateTime
     */
    public $startDateTime;

    /**
     * @access public
     * @var DateTime
     */
    public $endDateTime;

    /**
     * @access public
     * @var string
     */
    public $notes;

    /**
     * @access public
     * @var tnsCostAdjustment
     */
    public $costAdjustment;

    /**
     * @access public
     * @var boolean
     */
    public $isArchived;

    /**
     * @access public
     * @var Goal
     */
    public $goal;

    /**
     * @access public
     * @var integer
     */
    public $contractedQuantityBuffer;

    /**
     * @access public
     * @var integer
     */
    public $scheduledQuantity;

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
     * @var tnsCompanionDeliveryOption
     */
    public $companionDeliveryOption;

    /**
     * @access public
     * @var tnsCreativeRotationType
     */
    public $creativeRotationType;

    /**
     * @access public
     * @var FrequencyCap[]
     */
    public $frequencyCaps;

    /**
     * @access public
     * @var integer
     */
    public $dfpLineItemId;

    /**
     * @access public
     * @var tnsLineItemType
     */
    public $lineItemType;

    /**
     * @access public
     * @var integer
     */
    public $lineItemPriority;

    /**
     * @access public
     * @var tnsRateType
     */
    public $rateType;

    /**
     * @access public
     * @var CreativePlaceholder[]
     */
    public $creativePlaceholders;

    /**
     * @access public
     * @var Targeting
     */
    public $targeting;

    /**
     * @access public
     * @var CustomCriteriaSet
     */
    public $derivedProductCustomCriteria;

    /**
     * @access public
     * @var BaseCustomFieldValue[]
     */
    public $customFieldValues;

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
     * @var ProposalLineItemPremium[]
     */
    public $premiums;

    /**
     * @access public
     * @var boolean
     */
    public $isSold;

    /**
     * @access public
     * @var Money
     */
    public $baseRate;

    /**
     * @access public
     * @var Money
     */
    public $costPerUnit;

    /**
     * @access public
     * @var Money
     */
    public $cost;

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
     * @var tnsComputedStatus
     */
    public $computedStatus;

    /**
     * @access public
     * @var tnsBillingCap
     */
    public $billingCap;

    /**
     * @access public
     * @var tnsBillingSchedule
     */
    public $billingSchedule;

    /**
     * @access public
     * @var tnsBillingSource
     */
    public $billingSource;

    /**
     * @access public
     * @var tnsBillingBase
     */
    public $billingBase;

    /**
     * @access public
     * @var DateTime
     */
    public $lastModifiedDateTime;

    /**
     * @access public
     * @var boolean
     */
    public $useThirdPartyAdServerFromProposal;

    /**
     * @access public
     * @var integer
     */
    public $thirdPartyAdServerId;

    /**
     * @access public
     * @var string
     */
    public $customThirdPartyAdServerName;

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

      public function __construct($id = null, $proposalId = null, $rateCardId = null, $productId = null, $name = null, $startDateTime = null, $endDateTime = null, $notes = null, $costAdjustment = null, $isArchived = null, $goal = null, $contractedQuantityBuffer = null, $scheduledQuantity = null, $deliveryRateType = null, $roadblockingType = null, $companionDeliveryOption = null, $creativeRotationType = null, $frequencyCaps = null, $dfpLineItemId = null, $lineItemType = null, $lineItemPriority = null, $rateType = null, $creativePlaceholders = null, $targeting = null, $derivedProductCustomCriteria = null, $customFieldValues = null, $appliedLabels = null, $effectiveAppliedLabels = null, $premiums = null, $isSold = null, $baseRate = null, $costPerUnit = null, $cost = null, $deliveryIndicator = null, $deliveryData = null, $computedStatus = null, $billingCap = null, $billingSchedule = null, $billingSource = null, $billingBase = null, $lastModifiedDateTime = null, $useThirdPartyAdServerFromProposal = null, $thirdPartyAdServerId = null, $customThirdPartyAdServerName = null)
      {
          $this->id = $id;
          $this->proposalId = $proposalId;
          $this->rateCardId = $rateCardId;
          $this->productId = $productId;
          $this->name = $name;
          $this->startDateTime = $startDateTime;
          $this->endDateTime = $endDateTime;
          $this->notes = $notes;
          $this->costAdjustment = $costAdjustment;
          $this->isArchived = $isArchived;
          $this->goal = $goal;
          $this->contractedQuantityBuffer = $contractedQuantityBuffer;
          $this->scheduledQuantity = $scheduledQuantity;
          $this->deliveryRateType = $deliveryRateType;
          $this->roadblockingType = $roadblockingType;
          $this->companionDeliveryOption = $companionDeliveryOption;
          $this->creativeRotationType = $creativeRotationType;
          $this->frequencyCaps = $frequencyCaps;
          $this->dfpLineItemId = $dfpLineItemId;
          $this->lineItemType = $lineItemType;
          $this->lineItemPriority = $lineItemPriority;
          $this->rateType = $rateType;
          $this->creativePlaceholders = $creativePlaceholders;
          $this->targeting = $targeting;
          $this->derivedProductCustomCriteria = $derivedProductCustomCriteria;
          $this->customFieldValues = $customFieldValues;
          $this->appliedLabels = $appliedLabels;
          $this->effectiveAppliedLabels = $effectiveAppliedLabels;
          $this->premiums = $premiums;
          $this->isSold = $isSold;
          $this->baseRate = $baseRate;
          $this->costPerUnit = $costPerUnit;
          $this->cost = $cost;
          $this->deliveryIndicator = $deliveryIndicator;
          $this->deliveryData = $deliveryData;
          $this->computedStatus = $computedStatus;
          $this->billingCap = $billingCap;
          $this->billingSchedule = $billingSchedule;
          $this->billingSource = $billingSource;
          $this->billingBase = $billingBase;
          $this->lastModifiedDateTime = $lastModifiedDateTime;
          $this->useThirdPartyAdServerFromProposal = $useThirdPartyAdServerFromProposal;
          $this->thirdPartyAdServerId = $thirdPartyAdServerId;
          $this->customThirdPartyAdServerName = $customThirdPartyAdServerName;
      }
  }
}

