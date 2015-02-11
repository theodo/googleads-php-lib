<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the ReconciliationReportRowService
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




















if (!class_exists("ReconciliationReportRow", false)) {
    /**
   * A {@code ReconciliationReportRow} represents each row in the reconciliation report.
   * Each row is identified by its {@link #reconciliationReportId}, {@link #lineItemId},
   * {@link #creativeId}, and {@link #proposalLineItemId}.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ReconciliationReportRow
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ReconciliationReportRow";

    /**
     * @access public
     * @var integer
     */
    public $reconciliationReportId;

    /**
     * @access public
     * @var integer
     */
    public $lineItemId;

    /**
     * @access public
     * @var integer
     */
    public $creativeId;

    /**
     * @access public
     * @var integer
     */
    public $orderId;

    /**
     * @access public
     * @var integer
     */
    public $advertiserId;

    /**
     * @access public
     * @var integer
     */
    public $proposalLineItemId;

    /**
     * @access public
     * @var integer
     */
    public $proposalId;

    /**
     * @access public
     * @var tnsBillFrom
     */
    public $billFrom;

    /**
     * @access public
     * @var tnsRateType
     */
    public $rateType;

    /**
     * @access public
     * @var Money
     */
    public $lineItemCostPerUnit;

    /**
     * @access public
     * @var integer
     */
    public $lineItemContractedUnitsBought;

    /**
     * @access public
     * @var integer
     */
    public $dfpVolume;

    /**
     * @access public
     * @var integer
     */
    public $thirdPartyVolume;

    /**
     * @access public
     * @var integer
     */
    public $manualVolume;

    /**
     * @access public
     * @var integer
     */
    public $reconciledVolume;

    /**
     * @access public
     * @var Money
     */
    public $contractedRevenue;

    /**
     * @access public
     * @var Money
     */
    public $dfpRevenue;

    /**
     * @access public
     * @var Money
     */
    public $thirdPartyRevenue;

    /**
     * @access public
     * @var Money
     */
    public $manualRevenue;

    /**
     * @access public
     * @var Money
     */
    public $reconciledRevenue;

    /**
     * @access public
     * @var string
     */
    public $comments;

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

      public function __construct($reconciliationReportId = null, $lineItemId = null, $creativeId = null, $orderId = null, $advertiserId = null, $proposalLineItemId = null, $proposalId = null, $billFrom = null, $rateType = null, $lineItemCostPerUnit = null, $lineItemContractedUnitsBought = null, $dfpVolume = null, $thirdPartyVolume = null, $manualVolume = null, $reconciledVolume = null, $contractedRevenue = null, $dfpRevenue = null, $thirdPartyRevenue = null, $manualRevenue = null, $reconciledRevenue = null, $comments = null)
      {
          $this->reconciliationReportId = $reconciliationReportId;
          $this->lineItemId = $lineItemId;
          $this->creativeId = $creativeId;
          $this->orderId = $orderId;
          $this->advertiserId = $advertiserId;
          $this->proposalLineItemId = $proposalLineItemId;
          $this->proposalId = $proposalId;
          $this->billFrom = $billFrom;
          $this->rateType = $rateType;
          $this->lineItemCostPerUnit = $lineItemCostPerUnit;
          $this->lineItemContractedUnitsBought = $lineItemContractedUnitsBought;
          $this->dfpVolume = $dfpVolume;
          $this->thirdPartyVolume = $thirdPartyVolume;
          $this->manualVolume = $manualVolume;
          $this->reconciledVolume = $reconciledVolume;
          $this->contractedRevenue = $contractedRevenue;
          $this->dfpRevenue = $dfpRevenue;
          $this->thirdPartyRevenue = $thirdPartyRevenue;
          $this->manualRevenue = $manualRevenue;
          $this->reconciledRevenue = $reconciledRevenue;
          $this->comments = $comments;
      }
  }
}

