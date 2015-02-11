<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the BudgetOrderService
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


if (!class_exists("BudgetOrder", false)) {
    /**
   * A {@link BudgetOrder} links an account wide budget with a {@link BillingAccount}.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class BudgetOrder
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/billing/v201409";
      const XSI_TYPE = "BudgetOrder";

    /**
     * @access public
     * @var string
     */
    public $billingAccountId;

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var string
     */
    public $billingAccountName;

    /**
     * @access public
     * @var string
     */
    public $poNumber;

    /**
     * @access public
     * @var string
     */
    public $budgetOrderName;

    /**
     * @access public
     * @var string
     */
    public $primaryBillingId;

    /**
     * @access public
     * @var string
     */
    public $secondaryBillingId;

    /**
     * @access public
     * @var Money
     */
    public $spendingLimit;

    /**
     * @access public
     * @var string
     */
    public $startDateTime;

    /**
     * @access public
     * @var string
     */
    public $endDateTime;

    /**
     * @access public
     * @var BudgetOrderRequest
     */
    public $lastRequest;

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

      public function __construct($billingAccountId = null, $id = null, $billingAccountName = null, $poNumber = null, $budgetOrderName = null, $primaryBillingId = null, $secondaryBillingId = null, $spendingLimit = null, $startDateTime = null, $endDateTime = null, $lastRequest = null)
      {
          $this->billingAccountId = $billingAccountId;
          $this->id = $id;
          $this->billingAccountName = $billingAccountName;
          $this->poNumber = $poNumber;
          $this->budgetOrderName = $budgetOrderName;
          $this->primaryBillingId = $primaryBillingId;
          $this->secondaryBillingId = $secondaryBillingId;
          $this->spendingLimit = $spendingLimit;
          $this->startDateTime = $startDateTime;
          $this->endDateTime = $endDateTime;
          $this->lastRequest = $lastRequest;
      }
  }
}

