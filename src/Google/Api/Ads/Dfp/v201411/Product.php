<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the ProductService
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


if (!class_exists("Product", false)) {
    /**
   * {@link ProposalLineItem Proposal line items} are created from products,
   * from which their properties are copied.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class Product
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "Product";

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var tnsProductStatus
     */
    public $status;

    /**
     * @access public
     * @var tnsProductType
     */
    public $productType;

    /**
     * @access public
     * @var integer
     */
    public $productTemplateId;

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var string
     */
    public $notes;

    /**
     * @access public
     * @var string
     */
    public $productTemplateDescription;

    /**
     * @access public
     * @var DateTime
     */
    public $lastModifiedDateTime;

    /**
     * @access public
     * @var tnsRateType
     */
    public $rateType;

    /**
     * @access public
     * @var tnsRoadblockingType
     */
    public $roadblockingType;

    /**
     * @access public
     * @var CreativePlaceholder[]
     */
    public $creativePlaceholders;

    /**
     * @access public
     * @var tnsLineItemType
     */
    public $lineItemType;

    /**
     * @access public
     * @var integer
     */
    public $priority;

    /**
     * @access public
     * @var FrequencyCap[]
     */
    public $frequencyCaps;

    /**
     * @access public
     * @var boolean
     */
    public $allowFrequencyCapsCustomization;

    /**
     * @access public
     * @var ProductTemplateTargeting
     */
    public $targeting;

    /**
     * @access public
     * @var BaseCustomFieldValue[]
     */
    public $customFieldValues;

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

      public function __construct($name = null, $status = null, $productType = null, $productTemplateId = null, $id = null, $notes = null, $productTemplateDescription = null, $lastModifiedDateTime = null, $rateType = null, $roadblockingType = null, $creativePlaceholders = null, $lineItemType = null, $priority = null, $frequencyCaps = null, $allowFrequencyCapsCustomization = null, $targeting = null, $customFieldValues = null)
      {
          $this->name = $name;
          $this->status = $status;
          $this->productType = $productType;
          $this->productTemplateId = $productTemplateId;
          $this->id = $id;
          $this->notes = $notes;
          $this->productTemplateDescription = $productTemplateDescription;
          $this->lastModifiedDateTime = $lastModifiedDateTime;
          $this->rateType = $rateType;
          $this->roadblockingType = $roadblockingType;
          $this->creativePlaceholders = $creativePlaceholders;
          $this->lineItemType = $lineItemType;
          $this->priority = $priority;
          $this->frequencyCaps = $frequencyCaps;
          $this->allowFrequencyCapsCustomization = $allowFrequencyCapsCustomization;
          $this->targeting = $targeting;
          $this->customFieldValues = $customFieldValues;
      }
  }
}

