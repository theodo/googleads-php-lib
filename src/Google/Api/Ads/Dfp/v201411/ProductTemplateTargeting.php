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


if (!class_exists("ProductTemplateTargeting", false)) {
    /**
   * Contains targeting criteria for {@link ProductTemplate} objects.
   * {@link ProposalLineItem Proposal line items} created from {@link Product products}
   * of this template will have this criteria added to {@link ProposalLineItem#targeting}.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ProductTemplateTargeting
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ProductTemplateTargeting";

    /**
     * @access public
     * @var GeoTargeting
     */
    public $geoTargeting;

    /**
     * @access public
     * @var boolean
     */
    public $allowGeoTargetingCustomization;

    /**
     * @access public
     * @var InventoryTargeting
     */
    public $inventoryTargeting;

    /**
     * @access public
     * @var boolean
     */
    public $allowAdUnitTargetingCustomization;

    /**
     * @access public
     * @var boolean
     */
    public $allowPlacementTargetingCustomization;

    /**
     * @access public
     * @var CustomCriteriaSet
     */
    public $customTargeting;

    /**
     * @access public
     * @var integer[]
     */
    public $customizableCustomTargetingKeyIds;

    /**
     * @access public
     * @var boolean
     */
    public $allowAudienceSegmentTargetingCustomization;

    /**
     * @access public
     * @var boolean
     */
    public $isAllCustomTargetingKeysCustomizable;

    /**
     * @access public
     * @var UserDomainTargeting
     */
    public $userDomainTargeting;

    /**
     * @access public
     * @var boolean
     */
    public $allowUserDomainTargetingCustomization;

    /**
     * @access public
     * @var BandwidthGroupTargeting
     */
    public $bandwidthGroupTargeting;

    /**
     * @access public
     * @var boolean
     */
    public $allowBandwidthGroupTargetingCustomization;

    /**
     * @access public
     * @var BrowserTargeting
     */
    public $browserTargeting;

    /**
     * @access public
     * @var boolean
     */
    public $allowBrowserTargetingCustomization;

    /**
     * @access public
     * @var BrowserLanguageTargeting
     */
    public $browserLanguageTargeting;

    /**
     * @access public
     * @var boolean
     */
    public $allowBrowserLanguageTargetingCustomization;

    /**
     * @access public
     * @var OperatingSystemTargeting
     */
    public $operatingSystemTargeting;

    /**
     * @access public
     * @var boolean
     */
    public $allowOperatingSystemTargetingCustomization;

    /**
     * @access public
     * @var DeviceCapabilityTargeting
     */
    public $deviceCapabilityTargeting;

    /**
     * @access public
     * @var boolean
     */
    public $allowDeviceCapabilityTargetingCustomization;

    /**
     * @access public
     * @var DeviceCategoryTargeting
     */
    public $deviceCategoryTargeting;

    /**
     * @access public
     * @var boolean
     */
    public $allowDeviceCategoryTargetingCustomization;

    /**
     * @access public
     * @var MobileCarrierTargeting
     */
    public $mobileCarrierTargeting;

    /**
     * @access public
     * @var boolean
     */
    public $allowMobileCarrierTargetingCustomization;

    /**
     * @access public
     * @var DeviceManufacturerTargeting
     */
    public $deviceManufacturerTargeting;

    /**
     * @access public
     * @var MobileDeviceTargeting
     */
    public $mobileDeviceTargeting;

    /**
     * @access public
     * @var MobileDeviceSubmodelTargeting
     */
    public $mobileDeviceSubmodelTargeting;

    /**
     * @access public
     * @var boolean
     */
    public $allowMobileDeviceAndManufacturerTargetingCustomization;

    /**
     * @access public
     * @var ContentTargeting
     */
    public $contentTargeting;

    /**
     * @access public
     * @var VideoPositionTargeting
     */
    public $videoPositionTargeting;

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

      public function __construct($geoTargeting = null, $allowGeoTargetingCustomization = null, $inventoryTargeting = null, $allowAdUnitTargetingCustomization = null, $allowPlacementTargetingCustomization = null, $customTargeting = null, $customizableCustomTargetingKeyIds = null, $allowAudienceSegmentTargetingCustomization = null, $isAllCustomTargetingKeysCustomizable = null, $userDomainTargeting = null, $allowUserDomainTargetingCustomization = null, $bandwidthGroupTargeting = null, $allowBandwidthGroupTargetingCustomization = null, $browserTargeting = null, $allowBrowserTargetingCustomization = null, $browserLanguageTargeting = null, $allowBrowserLanguageTargetingCustomization = null, $operatingSystemTargeting = null, $allowOperatingSystemTargetingCustomization = null, $deviceCapabilityTargeting = null, $allowDeviceCapabilityTargetingCustomization = null, $deviceCategoryTargeting = null, $allowDeviceCategoryTargetingCustomization = null, $mobileCarrierTargeting = null, $allowMobileCarrierTargetingCustomization = null, $deviceManufacturerTargeting = null, $mobileDeviceTargeting = null, $mobileDeviceSubmodelTargeting = null, $allowMobileDeviceAndManufacturerTargetingCustomization = null, $contentTargeting = null, $videoPositionTargeting = null)
      {
          $this->geoTargeting = $geoTargeting;
          $this->allowGeoTargetingCustomization = $allowGeoTargetingCustomization;
          $this->inventoryTargeting = $inventoryTargeting;
          $this->allowAdUnitTargetingCustomization = $allowAdUnitTargetingCustomization;
          $this->allowPlacementTargetingCustomization = $allowPlacementTargetingCustomization;
          $this->customTargeting = $customTargeting;
          $this->customizableCustomTargetingKeyIds = $customizableCustomTargetingKeyIds;
          $this->allowAudienceSegmentTargetingCustomization = $allowAudienceSegmentTargetingCustomization;
          $this->isAllCustomTargetingKeysCustomizable = $isAllCustomTargetingKeysCustomizable;
          $this->userDomainTargeting = $userDomainTargeting;
          $this->allowUserDomainTargetingCustomization = $allowUserDomainTargetingCustomization;
          $this->bandwidthGroupTargeting = $bandwidthGroupTargeting;
          $this->allowBandwidthGroupTargetingCustomization = $allowBandwidthGroupTargetingCustomization;
          $this->browserTargeting = $browserTargeting;
          $this->allowBrowserTargetingCustomization = $allowBrowserTargetingCustomization;
          $this->browserLanguageTargeting = $browserLanguageTargeting;
          $this->allowBrowserLanguageTargetingCustomization = $allowBrowserLanguageTargetingCustomization;
          $this->operatingSystemTargeting = $operatingSystemTargeting;
          $this->allowOperatingSystemTargetingCustomization = $allowOperatingSystemTargetingCustomization;
          $this->deviceCapabilityTargeting = $deviceCapabilityTargeting;
          $this->allowDeviceCapabilityTargetingCustomization = $allowDeviceCapabilityTargetingCustomization;
          $this->deviceCategoryTargeting = $deviceCategoryTargeting;
          $this->allowDeviceCategoryTargetingCustomization = $allowDeviceCategoryTargetingCustomization;
          $this->mobileCarrierTargeting = $mobileCarrierTargeting;
          $this->allowMobileCarrierTargetingCustomization = $allowMobileCarrierTargetingCustomization;
          $this->deviceManufacturerTargeting = $deviceManufacturerTargeting;
          $this->mobileDeviceTargeting = $mobileDeviceTargeting;
          $this->mobileDeviceSubmodelTargeting = $mobileDeviceSubmodelTargeting;
          $this->allowMobileDeviceAndManufacturerTargetingCustomization = $allowMobileDeviceAndManufacturerTargetingCustomization;
          $this->contentTargeting = $contentTargeting;
          $this->videoPositionTargeting = $videoPositionTargeting;
      }
  }
}

