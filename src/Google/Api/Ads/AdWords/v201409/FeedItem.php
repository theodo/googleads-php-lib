<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the FeedItemService
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























if (!class_exists("FeedItem", false)) {
    /**
   * Represents an item in a feed.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItem
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "FeedItem";

    /**
     * @access public
     * @var integer
     */
    public $feedId;

    /**
     * @access public
     * @var integer
     */
    public $feedItemId;

    /**
     * @access public
     * @var tnsFeedItemStatus
     */
    public $status;

    /**
     * @access public
     * @var string
     */
    public $startTime;

    /**
     * @access public
     * @var string
     */
    public $endTime;

    /**
     * @access public
     * @var FeedItemAttributeValue[]
     */
    public $attributeValues;

    /**
     * @access public
     * @var FeedItemValidationDetail[]
     */
    public $validationDetails;

    /**
     * @access public
     * @var FeedItemDevicePreference
     */
    public $devicePreference;

    /**
     * @access public
     * @var FeedItemScheduling
     */
    public $scheduling;

    /**
     * @access public
     * @var FeedItemCampaignTargeting
     */
    public $campaignTargeting;

    /**
     * @access public
     * @var FeedItemAdGroupTargeting
     */
    public $adGroupTargeting;

    /**
     * @access public
     * @var Keyword
     */
    public $keywordTargeting;

    /**
     * @access public
     * @var CustomParameters
     */
    public $urlCustomParameters;

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

      public function __construct($feedId = null, $feedItemId = null, $status = null, $startTime = null, $endTime = null, $attributeValues = null, $validationDetails = null, $devicePreference = null, $scheduling = null, $campaignTargeting = null, $adGroupTargeting = null, $keywordTargeting = null, $urlCustomParameters = null)
      {
          $this->feedId = $feedId;
          $this->feedItemId = $feedItemId;
          $this->status = $status;
          $this->startTime = $startTime;
          $this->endTime = $endTime;
          $this->attributeValues = $attributeValues;
          $this->validationDetails = $validationDetails;
          $this->devicePreference = $devicePreference;
          $this->scheduling = $scheduling;
          $this->campaignTargeting = $campaignTargeting;
          $this->adGroupTargeting = $adGroupTargeting;
          $this->keywordTargeting = $keywordTargeting;
          $this->urlCustomParameters = $urlCustomParameters;
      }
  }
}

