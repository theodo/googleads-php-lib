<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the PromotionService
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


if (!class_exists("Promotion", false)) {
    /**
   * A promotion for a business. It contains all the user specified data as needed by AdWords Express
   * to generate AdWords campaigns.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class Promotion
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201409";
      const XSI_TYPE = "Promotion";

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
     * @var tnsPromotionStatus
     */
    public $status;

    /**
     * @access public
     * @var Creative[]
     */
    public $creatives;

    /**
     * @access public
     * @var string
     */
    public $destinationUrl;

    /**
     * @access public
     * @var PhoneNumber
     */
    public $phoneNumber;

    /**
     * @access public
     * @var boolean
     */
    public $streetAddressVisible;

    /**
     * @access public
     * @var boolean
     */
    public $callTrackingEnabled;

    /**
     * @access public
     * @var Money
     */
    public $budget;

    /**
     * @access public
     * @var Criterion[]
     */
    public $criteria;

    /**
     * @access public
     * @var integer[]
     */
    public $campaignIds;

    /**
     * @access public
     * @var Money
     */
    public $remainingBudget;

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

      public function __construct($id = null, $name = null, $status = null, $creatives = null, $destinationUrl = null, $phoneNumber = null, $streetAddressVisible = null, $callTrackingEnabled = null, $budget = null, $criteria = null, $campaignIds = null, $remainingBudget = null)
      {
          $this->id = $id;
          $this->name = $name;
          $this->status = $status;
          $this->creatives = $creatives;
          $this->destinationUrl = $destinationUrl;
          $this->phoneNumber = $phoneNumber;
          $this->streetAddressVisible = $streetAddressVisible;
          $this->callTrackingEnabled = $callTrackingEnabled;
          $this->budget = $budget;
          $this->criteria = $criteria;
          $this->campaignIds = $campaignIds;
          $this->remainingBudget = $remainingBudget;
      }
  }
}

