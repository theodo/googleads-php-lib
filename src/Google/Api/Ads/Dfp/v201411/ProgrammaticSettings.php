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


if (!class_exists("ProgrammaticSettings", false)) {
    /**
   * Represents the additional settings of a programmatic order.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ProgrammaticSettings
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ProgrammaticSettings";

    /**
     * @access public
     * @var integer
     */
    public $adxBuyerNetworkId;

    /**
     * @access public
     * @var integer
     */
    public $buyerId;

    /**
     * @access public
     * @var tnsBuyerPlatform
     */
    public $buyerPlatform;

    /**
     * @access public
     * @var tnsBillingTermsType
     */
    public $billingTermsType;

    /**
     * @access public
     * @var tnsProgrammaticStatus
     */
    public $status;

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

      public function __construct($adxBuyerNetworkId = null, $buyerId = null, $buyerPlatform = null, $billingTermsType = null, $status = null)
      {
          $this->adxBuyerNetworkId = $adxBuyerNetworkId;
          $this->buyerId = $buyerId;
          $this->buyerPlatform = $buyerPlatform;
          $this->billingTermsType = $billingTermsType;
          $this->status = $status;
      }
  }
}

