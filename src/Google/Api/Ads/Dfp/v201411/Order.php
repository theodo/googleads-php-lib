<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the OrderService
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


if (!class_exists("Order", false)) {
    /**
   * An {@code Order} represents a grouping of individual {@link LineItem}
   * objects, each of which fulfill an ad request from a particular advertiser.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class Order
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "Order";

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
     * @var boolean
     */
    public $unlimitedEndDateTime;

    /**
     * @access public
     * @var tnsOrderStatus
     */
    public $status;

    /**
     * @access public
     * @var boolean
     */
    public $isArchived;

    /**
     * @access public
     * @var string
     */
    public $notes;

    /**
     * @access public
     * @var integer
     */
    public $externalOrderId;

    /**
     * @access public
     * @var string
     */
    public $poNumber;

    /**
     * @access public
     * @var string
     */
    public $currencyCode;

    /**
     * @access public
     * @var integer
     */
    public $advertiserId;

    /**
     * @access public
     * @var integer[]
     */
    public $advertiserContactIds;

    /**
     * @access public
     * @var integer
     */
    public $agencyId;

    /**
     * @access public
     * @var integer[]
     */
    public $agencyContactIds;

    /**
     * @access public
     * @var integer
     */
    public $creatorId;

    /**
     * @access public
     * @var integer
     */
    public $traffickerId;

    /**
     * @access public
     * @var integer[]
     */
    public $secondaryTraffickerIds;

    /**
     * @access public
     * @var integer
     */
    public $salespersonId;

    /**
     * @access public
     * @var integer[]
     */
    public $secondarySalespersonIds;

    /**
     * @access public
     * @var integer
     */
    public $totalImpressionsDelivered;

    /**
     * @access public
     * @var integer
     */
    public $totalClicksDelivered;

    /**
     * @access public
     * @var Money
     */
    public $totalBudget;

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
     * @var string
     */
    public $lastModifiedByApp;

    /**
     * @access public
     * @var boolean
     */
    public $isProgrammatic;

    /**
     * @access public
     * @var ProgrammaticSettings
     */
    public $programmaticSettings;

    /**
     * @access public
     * @var integer[]
     */
    public $appliedTeamIds;

    /**
     * @access public
     * @var DateTime
     */
    public $lastModifiedDateTime;

    /**
     * @access public
     * @var BaseCustomFieldValue[]
     */
    public $customFieldValues;

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

      public function __construct($id = null, $name = null, $startDateTime = null, $endDateTime = null, $unlimitedEndDateTime = null, $status = null, $isArchived = null, $notes = null, $externalOrderId = null, $poNumber = null, $currencyCode = null, $advertiserId = null, $advertiserContactIds = null, $agencyId = null, $agencyContactIds = null, $creatorId = null, $traffickerId = null, $secondaryTraffickerIds = null, $salespersonId = null, $secondarySalespersonIds = null, $totalImpressionsDelivered = null, $totalClicksDelivered = null, $totalBudget = null, $appliedLabels = null, $effectiveAppliedLabels = null, $lastModifiedByApp = null, $isProgrammatic = null, $programmaticSettings = null, $appliedTeamIds = null, $lastModifiedDateTime = null, $customFieldValues = null)
      {
          $this->id = $id;
          $this->name = $name;
          $this->startDateTime = $startDateTime;
          $this->endDateTime = $endDateTime;
          $this->unlimitedEndDateTime = $unlimitedEndDateTime;
          $this->status = $status;
          $this->isArchived = $isArchived;
          $this->notes = $notes;
          $this->externalOrderId = $externalOrderId;
          $this->poNumber = $poNumber;
          $this->currencyCode = $currencyCode;
          $this->advertiserId = $advertiserId;
          $this->advertiserContactIds = $advertiserContactIds;
          $this->agencyId = $agencyId;
          $this->agencyContactIds = $agencyContactIds;
          $this->creatorId = $creatorId;
          $this->traffickerId = $traffickerId;
          $this->secondaryTraffickerIds = $secondaryTraffickerIds;
          $this->salespersonId = $salespersonId;
          $this->secondarySalespersonIds = $secondarySalespersonIds;
          $this->totalImpressionsDelivered = $totalImpressionsDelivered;
          $this->totalClicksDelivered = $totalClicksDelivered;
          $this->totalBudget = $totalBudget;
          $this->appliedLabels = $appliedLabels;
          $this->effectiveAppliedLabels = $effectiveAppliedLabels;
          $this->lastModifiedByApp = $lastModifiedByApp;
          $this->isProgrammatic = $isProgrammatic;
          $this->programmaticSettings = $programmaticSettings;
          $this->appliedTeamIds = $appliedTeamIds;
          $this->lastModifiedDateTime = $lastModifiedDateTime;
          $this->customFieldValues = $customFieldValues;
      }
  }
}

