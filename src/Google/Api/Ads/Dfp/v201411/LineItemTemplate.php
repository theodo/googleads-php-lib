<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the LineItemTemplateService
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


































if (!class_exists("LineItemTemplate", false)) {
    /**
   * Represents the template that populates the fields of a new line item being
   * created.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class LineItemTemplate
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "LineItemTemplate";

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
     * @var boolean
     */
    public $isDefault;

    /**
     * @access public
     * @var string
     */
    public $lineItemName;

    /**
     * @access public
     * @var tnsTargetPlatform
     */
    public $targetPlatform;

    /**
     * @access public
     * @var boolean
     */
    public $enabledForSameAdvertiserException;

    /**
     * @access public
     * @var string
     */
    public $notes;

    /**
     * @access public
     * @var tnsLineItemType
     */
    public $lineItemType;

    /**
     * @access public
     * @var DateTime
     */
    public $startTime;

    /**
     * @access public
     * @var DateTime
     */
    public $endTime;

    /**
     * @access public
     * @var tnsDeliveryRateType
     */
    public $deliveryRateType;

    /**
     * @access public
     * @var tnsRoadblockingType
     */
    public $roadblockingType;

    /**
     * @access public
     * @var tnsCreativeRotationType
     */
    public $creativeRotationType;

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

      public function __construct($id = null, $name = null, $isDefault = null, $lineItemName = null, $targetPlatform = null, $enabledForSameAdvertiserException = null, $notes = null, $lineItemType = null, $startTime = null, $endTime = null, $deliveryRateType = null, $roadblockingType = null, $creativeRotationType = null)
      {
          $this->id = $id;
          $this->name = $name;
          $this->isDefault = $isDefault;
          $this->lineItemName = $lineItemName;
          $this->targetPlatform = $targetPlatform;
          $this->enabledForSameAdvertiserException = $enabledForSameAdvertiserException;
          $this->notes = $notes;
          $this->lineItemType = $lineItemType;
          $this->startTime = $startTime;
          $this->endTime = $endTime;
          $this->deliveryRateType = $deliveryRateType;
          $this->roadblockingType = $roadblockingType;
          $this->creativeRotationType = $creativeRotationType;
      }
  }
}

