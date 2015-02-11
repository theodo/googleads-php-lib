<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the CustomerSyncService
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


























if (!class_exists("CampaignChangeData", false)) {
    /**
   * Holds information about a changed campaign and any ad groups under
   * that have changed.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class CampaignChangeData
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201409";
      const XSI_TYPE = "CampaignChangeData";

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var tnsChangeStatus
     */
    public $campaignChangeStatus;

    /**
     * @access public
     * @var AdGroupChangeData[]
     */
    public $changedAdGroups;

    /**
     * @access public
     * @var integer[]
     */
    public $addedCampaignCriteria;

    /**
     * @access public
     * @var integer[]
     */
    public $removedCampaignCriteria;

    /**
     * @access public
     * @var integer[]
     */
    public $addedAdExtensions;

    /**
     * @access public
     * @var integer[]
     */
    public $removedAdExtensions;

    /**
     * @access public
     * @var integer[]
     */
    public $changedFeeds;

    /**
     * @access public
     * @var integer[]
     */
    public $removedFeeds;

    /**
     * @access public
     * @var boolean
     */
    public $campaignTargetingChanged;

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

      public function __construct($campaignId = null, $campaignChangeStatus = null, $changedAdGroups = null, $addedCampaignCriteria = null, $removedCampaignCriteria = null, $addedAdExtensions = null, $removedAdExtensions = null, $changedFeeds = null, $removedFeeds = null, $campaignTargetingChanged = null)
      {
          $this->campaignId = $campaignId;
          $this->campaignChangeStatus = $campaignChangeStatus;
          $this->changedAdGroups = $changedAdGroups;
          $this->addedCampaignCriteria = $addedCampaignCriteria;
          $this->removedCampaignCriteria = $removedCampaignCriteria;
          $this->addedAdExtensions = $addedAdExtensions;
          $this->removedAdExtensions = $removedAdExtensions;
          $this->changedFeeds = $changedFeeds;
          $this->removedFeeds = $removedFeeds;
          $this->campaignTargetingChanged = $campaignTargetingChanged;
      }
  }
}

