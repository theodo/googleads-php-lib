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


if (!class_exists("BiddingStrategyConfiguration", false)) {
    /**
   * Encapsulates the information about bids and bidding strategies.
   *
   * Bidding Strategy can be set on campaigns, ad groups or ad group criteria.
   * A bidding strategy can be set using one of the following:
   * <ul>
   * <li>{@linkplain BiddingStrategyConfiguration#biddingScheme bidding scheme}</li>
   * <li>{@linkplain BiddingStrategyConfiguration#biddingStrategyType bidding strategy type}</li>
   * <li>{@linkplain BiddingStrategyConfiguration#biddingStrategyId bidding strategy ID} for
   * flexible bid strategies.</li>
   * </ul>
   * If the bidding strategy type is used, then schemes are created using default values.
   *
   * Bids can be set only on ad groups and ad group criteria. They cannot be set on campaigns.
   * Multiple bids can be set at the same time. Only the bids that apply to the campaign's
   * {@linkplain Campaign#biddingStrategyConfiguration bidding strategy} will be used.
   *
   * For more information on flexible bidding, visit the
   * <a href="https://support.google.com/adwords/answer/2979071">Help Center</a>.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class BiddingStrategyConfiguration
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "BiddingStrategyConfiguration";

    /**
     * @access public
     * @var integer
     */
    public $biddingStrategyId;

    /**
     * @access public
     * @var string
     */
    public $biddingStrategyName;

    /**
     * @access public
     * @var tnsBiddingStrategyType
     */
    public $biddingStrategyType;

    /**
     * @access public
     * @var tnsBiddingStrategySource
     */
    public $biddingStrategySource;

    /**
     * @access public
     * @var BiddingScheme
     */
    public $biddingScheme;

    /**
     * @access public
     * @var Bids[]
     */
    public $bids;

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

      public function __construct($biddingStrategyId = null, $biddingStrategyName = null, $biddingStrategyType = null, $biddingStrategySource = null, $biddingScheme = null, $bids = null)
      {
          $this->biddingStrategyId = $biddingStrategyId;
          $this->biddingStrategyName = $biddingStrategyName;
          $this->biddingStrategyType = $biddingStrategyType;
          $this->biddingStrategySource = $biddingStrategySource;
          $this->biddingScheme = $biddingScheme;
          $this->bids = $bids;
      }
  }
}

