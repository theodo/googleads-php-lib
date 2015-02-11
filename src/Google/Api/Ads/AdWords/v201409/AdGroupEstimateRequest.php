<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the TrafficEstimatorService
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


if (!class_exists("AdGroupEstimateRequest", false)) {
    /**
   * Represents an ad group that will be estimated. Ad groups may be all
   * new or all existing, or a mixture of new and existing. Only existing
   * campaigns can contain estimates for existing ad groups.<p>
   *
   * <p>To make a keyword estimates request in which estimates do not consider
   * existing account information (e.g. historical ad group performance), set both
   * {@link #adGroupId} and the enclosing {@link CampaignEstimateRequest}'s
   * {@code campaignId} to {@code null}.
   *
   * <p>For more details on usage, refer to document at
   * {@link CampaignEstimateRequest}.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class AdGroupEstimateRequest extends EstimateRequest
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201409";
      const XSI_TYPE = "AdGroupEstimateRequest";

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * @access public
     * @var KeywordEstimateRequest[]
     */
    public $keywordEstimateRequests;

    /**
     * @access public
     * @var Money
     */
    public $maxCpc;

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

      public function __construct($adGroupId = null, $keywordEstimateRequests = null, $maxCpc = null, $EstimateRequestType = null)
      {
          parent::__construct();
          $this->adGroupId = $adGroupId;
          $this->keywordEstimateRequests = $keywordEstimateRequests;
          $this->maxCpc = $maxCpc;
          $this->EstimateRequestType = $EstimateRequestType;
      }
  }
}

