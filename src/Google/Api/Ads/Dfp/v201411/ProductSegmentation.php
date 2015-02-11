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

















































if (!class_exists("ProductSegmentation", false)) {
    /**
   * Segmentations used to create products. Within a product template, for each segmentation,
   * a product will be created for the combination of all other segments within other segmentations.
   * <p>
   * For example, a product with 3 segmentations with only 1 segment for each will produce
   * {@code 1 x 1 x 1 = 1} product.
   * A product with 3 segmentations with 2 segments for each will produce {@code 2 x 2 x 2 = 8}
   * products.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ProductSegmentation
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ProductSegmentation";

    /**
     * @access public
     * @var GeoTargeting
     */
    public $geoSegment;

    /**
     * @access public
     * @var AdUnitTargeting[]
     */
    public $adUnitSegments;

    /**
     * @access public
     * @var PlacementTargeting
     */
    public $placementSegment;

    /**
     * @access public
     * @var CustomCriteria[]
     */
    public $customTargetingSegment;

    /**
     * @access public
     * @var UserDomainTargeting
     */
    public $userDomainSegment;

    /**
     * @access public
     * @var BandwidthGroupTargeting
     */
    public $bandwidthSegment;

    /**
     * @access public
     * @var BrowserTargeting
     */
    public $browserSegment;

    /**
     * @access public
     * @var BrowserLanguageTargeting
     */
    public $browserLanguageSegment;

    /**
     * @access public
     * @var OperatingSystemTargeting
     */
    public $operatingSystemSegment;

    /**
     * @access public
     * @var MobileCarrierTargeting
     */
    public $mobileCarrierSegment;

    /**
     * @access public
     * @var DeviceCapabilityTargeting
     */
    public $deviceCapabilitySegment;

    /**
     * @access public
     * @var DeviceCategoryTargeting
     */
    public $deviceCategorySegment;

    /**
     * @access public
     * @var DeviceManufacturerTargeting
     */
    public $deviceManufacturerSegment;

    /**
     * @access public
     * @var MobileDeviceTargeting
     */
    public $mobileDeviceSegment;

    /**
     * @access public
     * @var MobileDeviceSubmodelTargeting
     */
    public $mobileDeviceSubmodelSegment;

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

      public function __construct($geoSegment = null, $adUnitSegments = null, $placementSegment = null, $customTargetingSegment = null, $userDomainSegment = null, $bandwidthSegment = null, $browserSegment = null, $browserLanguageSegment = null, $operatingSystemSegment = null, $mobileCarrierSegment = null, $deviceCapabilitySegment = null, $deviceCategorySegment = null, $deviceManufacturerSegment = null, $mobileDeviceSegment = null, $mobileDeviceSubmodelSegment = null)
      {
          $this->geoSegment = $geoSegment;
          $this->adUnitSegments = $adUnitSegments;
          $this->placementSegment = $placementSegment;
          $this->customTargetingSegment = $customTargetingSegment;
          $this->userDomainSegment = $userDomainSegment;
          $this->bandwidthSegment = $bandwidthSegment;
          $this->browserSegment = $browserSegment;
          $this->browserLanguageSegment = $browserLanguageSegment;
          $this->operatingSystemSegment = $operatingSystemSegment;
          $this->mobileCarrierSegment = $mobileCarrierSegment;
          $this->deviceCapabilitySegment = $deviceCapabilitySegment;
          $this->deviceCategorySegment = $deviceCategorySegment;
          $this->deviceManufacturerSegment = $deviceManufacturerSegment;
          $this->mobileDeviceSegment = $mobileDeviceSegment;
          $this->mobileDeviceSubmodelSegment = $mobileDeviceSubmodelSegment;
      }
  }
}

