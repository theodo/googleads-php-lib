<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the CampaignService
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






































































































































































if (!class_exists("RealTimeBiddingSetting", false)) {
    /**
   * Settings for Real-Time Bidding, a feature only available for campaigns
   * targeting the Ad Exchange network.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class RealTimeBiddingSetting extends Setting
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "RealTimeBiddingSetting";

    /**
     * @access public
     * @var boolean
     */
    public $optIn;

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

      public function __construct($optIn = null, $SettingType = null)
      {
          parent::__construct();
          $this->optIn = $optIn;
          $this->SettingType = $SettingType;
      }
  }
}

