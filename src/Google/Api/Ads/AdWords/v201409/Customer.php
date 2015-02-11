<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the CustomerService
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




























if (!class_exists("Customer", false)) {
    /**
   * Represents a customer for the CustomerService.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class Customer
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201409";
      const XSI_TYPE = "Customer";

    /**
     * @access public
     * @var integer
     */
    public $customerId;

    /**
     * @access public
     * @var string
     */
    public $currencyCode;

    /**
     * @access public
     * @var string
     */
    public $dateTimeZone;

    /**
     * @access public
     * @var string
     */
    public $descriptiveName;

    /**
     * @access public
     * @var string
     */
    public $companyName;

    /**
     * @access public
     * @var boolean
     */
    public $canManageClients;

    /**
     * @access public
     * @var boolean
     */
    public $testAccount;

    /**
     * @access public
     * @var boolean
     */
    public $autoTaggingEnabled;

    /**
     * @access public
     * @var string
     */
    public $trackingUrlTemplate;

    /**
     * @access public
     * @var ConversionTrackingSettings
     */
    public $conversionTrackingSettings;

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

      public function __construct($customerId = null, $currencyCode = null, $dateTimeZone = null, $descriptiveName = null, $companyName = null, $canManageClients = null, $testAccount = null, $autoTaggingEnabled = null, $trackingUrlTemplate = null, $conversionTrackingSettings = null)
      {
          $this->customerId = $customerId;
          $this->currencyCode = $currencyCode;
          $this->dateTimeZone = $dateTimeZone;
          $this->descriptiveName = $descriptiveName;
          $this->companyName = $companyName;
          $this->canManageClients = $canManageClients;
          $this->testAccount = $testAccount;
          $this->autoTaggingEnabled = $autoTaggingEnabled;
          $this->trackingUrlTemplate = $trackingUrlTemplate;
          $this->conversionTrackingSettings = $conversionTrackingSettings;
      }
  }
}

