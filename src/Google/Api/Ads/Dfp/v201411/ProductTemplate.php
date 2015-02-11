<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the ProductTemplateService
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


if (!class_exists("ProductTemplate", false)) {
    /**
   * {@code ProductTemplate} is used to generate products. All generated products will
   * inherit all attributes from their {@code ProductTemplate}, except for segmentation,
   * which will be included in the {@link Product#targeting}. The generated products in turn will be
   * used to create {@link ProposalLineItem proposal line items} so that almost all attributes
   * in the product template are properties of the proposal line item.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ProductTemplate
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ProductTemplate";

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
     * @var DateTime
     */
    public $creationDateTime;

    /**
     * @access public
     * @var DateTime
     */
    public $lastModifiedDateTime;

    /**
     * @access public
     * @var string
     */
    public $description;

    /**
     * @access public
     * @var string
     */
    public $nameMacro;

    /**
     * @access public
     * @var tnsProductTemplateStatus
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
    public $creatorId;

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
     * @var ProductSegmentation
     */
    public $productSegmentation;

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
     * @access public
     * @var tnsEnvironmentType
     */
    public $environmentType;

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

      public function __construct($id = null, $name = null, $creationDateTime = null, $lastModifiedDateTime = null, $description = null, $nameMacro = null, $status = null, $productType = null, $creatorId = null, $rateType = null, $roadblockingType = null, $creativePlaceholders = null, $lineItemType = null, $priority = null, $frequencyCaps = null, $allowFrequencyCapsCustomization = null, $productSegmentation = null, $targeting = null, $customFieldValues = null, $environmentType = null)
      {
          $this->id = $id;
          $this->name = $name;
          $this->creationDateTime = $creationDateTime;
          $this->lastModifiedDateTime = $lastModifiedDateTime;
          $this->description = $description;
          $this->nameMacro = $nameMacro;
          $this->status = $status;
          $this->productType = $productType;
          $this->creatorId = $creatorId;
          $this->rateType = $rateType;
          $this->roadblockingType = $roadblockingType;
          $this->creativePlaceholders = $creativePlaceholders;
          $this->lineItemType = $lineItemType;
          $this->priority = $priority;
          $this->frequencyCaps = $frequencyCaps;
          $this->allowFrequencyCapsCustomization = $allowFrequencyCapsCustomization;
          $this->productSegmentation = $productSegmentation;
          $this->targeting = $targeting;
          $this->customFieldValues = $customFieldValues;
          $this->environmentType = $environmentType;
      }
  }
}

