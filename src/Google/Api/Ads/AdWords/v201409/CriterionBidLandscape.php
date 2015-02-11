<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the DataService
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

























































































if (!class_exists("CriterionBidLandscape", false)) {
    /**
   * The bid landscape for a criterion.  A bid landscape estimates how a
   * a criterion will perform based on different bid amounts.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class CriterionBidLandscape extends BidLandscape
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "CriterionBidLandscape";

    /**
     * @access public
     * @var integer
     */
    public $criterionId;

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

      public function __construct($criterionId = null, $campaignId = null, $adGroupId = null, $startDate = null, $endDate = null, $landscapePoints = null)
      {
          parent::__construct();
          $this->criterionId = $criterionId;
          $this->campaignId = $campaignId;
          $this->adGroupId = $adGroupId;
          $this->startDate = $startDate;
          $this->endDate = $endDate;
          $this->landscapePoints = $landscapePoints;
      }
  }
}

