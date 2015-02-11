<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the ProposalService
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


if (!class_exists("Proposal", false)) {
    /**
   * A {@code Proposal} represents an agreement between an interactive
   * advertising seller and a buyer that specifies the details of an
   * advertising campaign.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class Proposal
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "Proposal";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var integer
     */
    public $dfpOrderId;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var tnsPricingModel
     */
    public $pricingModel;

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
     * @var tnsProposalStatus
     */
    public $status;

    /**
     * @access public
     * @var boolean
     */
    public $isArchived;

    /**
     * @access public
     * @var ProposalCompanyAssociation
     */
    public $advertiser;

    /**
     * @access public
     * @var ProposalCompanyAssociation[]
     */
    public $agencies;

    /**
     * @access public
     * @var integer
     */
    public $probabilityOfClose;

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
     * @var string
     */
    public $poNumber;

    /**
     * @access public
     * @var string
     */
    public $notes;

    /**
     * @access public
     * @var Money
     */
    public $budget;

    /**
     * @access public
     * @var SalespersonSplit
     */
    public $primarySalesperson;

    /**
     * @access public
     * @var SalespersonSplit[]
     */
    public $secondarySalespeople;

    /**
     * @access public
     * @var integer[]
     */
    public $salesPlannerIds;

    /**
     * @access public
     * @var integer
     */
    public $primaryTraffickerId;

    /**
     * @access public
     * @var integer[]
     */
    public $secondaryTraffickerIds;

    /**
     * @access public
     * @var integer[]
     */
    public $appliedTeamIds;

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
     * @var integer
     */
    public $advertiserDiscount;

    /**
     * @access public
     * @var integer
     */
    public $proposalDiscount;

    /**
     * @access public
     * @var Money
     */
    public $additionalAdjustment;

    /**
     * @access public
     * @var string
     */
    public $currencyCode;

    /**
     * @access public
     * @var integer
     */
    public $exchangeRate;

    /**
     * @access public
     * @var boolean
     */
    public $refreshExchangeRate;

    /**
     * @access public
     * @var integer
     */
    public $agencyCommission;

    /**
     * @access public
     * @var integer
     */
    public $valueAddedTax;

    /**
     * @access public
     * @var boolean
     */
    public $isSold;

    /**
     * @access public
     * @var tnsProposalApprovalStatus
     */
    public $approvalStatus;

    /**
     * @access public
     * @var DateTime
     */
    public $lastModifiedDateTime;

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

      public function __construct($id = null, $dfpOrderId = null, $name = null, $pricingModel = null, $startDateTime = null, $endDateTime = null, $status = null, $isArchived = null, $advertiser = null, $agencies = null, $probabilityOfClose = null, $billingCap = null, $billingSchedule = null, $billingSource = null, $billingBase = null, $poNumber = null, $notes = null, $budget = null, $primarySalesperson = null, $secondarySalespeople = null, $salesPlannerIds = null, $primaryTraffickerId = null, $secondaryTraffickerIds = null, $appliedTeamIds = null, $customFieldValues = null, $appliedLabels = null, $effectiveAppliedLabels = null, $advertiserDiscount = null, $proposalDiscount = null, $additionalAdjustment = null, $currencyCode = null, $exchangeRate = null, $refreshExchangeRate = null, $agencyCommission = null, $valueAddedTax = null, $isSold = null, $approvalStatus = null, $lastModifiedDateTime = null, $thirdPartyAdServerId = null, $customThirdPartyAdServerName = null)
      {
          $this->id = $id;
          $this->dfpOrderId = $dfpOrderId;
          $this->name = $name;
          $this->pricingModel = $pricingModel;
          $this->startDateTime = $startDateTime;
          $this->endDateTime = $endDateTime;
          $this->status = $status;
          $this->isArchived = $isArchived;
          $this->advertiser = $advertiser;
          $this->agencies = $agencies;
          $this->probabilityOfClose = $probabilityOfClose;
          $this->billingCap = $billingCap;
          $this->billingSchedule = $billingSchedule;
          $this->billingSource = $billingSource;
          $this->billingBase = $billingBase;
          $this->poNumber = $poNumber;
          $this->notes = $notes;
          $this->budget = $budget;
          $this->primarySalesperson = $primarySalesperson;
          $this->secondarySalespeople = $secondarySalespeople;
          $this->salesPlannerIds = $salesPlannerIds;
          $this->primaryTraffickerId = $primaryTraffickerId;
          $this->secondaryTraffickerIds = $secondaryTraffickerIds;
          $this->appliedTeamIds = $appliedTeamIds;
          $this->customFieldValues = $customFieldValues;
          $this->appliedLabels = $appliedLabels;
          $this->effectiveAppliedLabels = $effectiveAppliedLabels;
          $this->advertiserDiscount = $advertiserDiscount;
          $this->proposalDiscount = $proposalDiscount;
          $this->additionalAdjustment = $additionalAdjustment;
          $this->currencyCode = $currencyCode;
          $this->exchangeRate = $exchangeRate;
          $this->refreshExchangeRate = $refreshExchangeRate;
          $this->agencyCommission = $agencyCommission;
          $this->valueAddedTax = $valueAddedTax;
          $this->isSold = $isSold;
          $this->approvalStatus = $approvalStatus;
          $this->lastModifiedDateTime = $lastModifiedDateTime;
          $this->thirdPartyAdServerId = $thirdPartyAdServerId;
          $this->customThirdPartyAdServerName = $customThirdPartyAdServerName;
      }
  }
}

