<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the CreativeService
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


























































































































































if (!class_exists("FlashCreative", false)) {
    /**
   * A {@code Creative} that displays a Flash-based ad. If the Flash ad cannot
   * load, a fallback image is displayed instead.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class FlashCreative extends BaseFlashCreative
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "FlashCreative";

    /**
     * @access public
     * @var SwiffyFallbackAsset
     */
    public $swiffyAsset;

    /**
     * @access public
     * @var boolean
     */
    public $createSwiffyAsset;

    /**
     * @access public
     * @var tnsLockedOrientation
     */
    public $lockedOrientation;

    /**
     * @access public
     * @var boolean
     */
    public $clickTagOverlayEnabled;

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

      public function __construct($swiffyAsset = null, $createSwiffyAsset = null, $lockedOrientation = null, $clickTagOverlayEnabled = null, $flashName = null, $flashByteArray = null, $fallbackImageName = null, $fallbackImageByteArray = null, $overrideSize = null, $clickTagRequired = null, $fallbackPreviewUrl = null, $flashAssetSize = null, $fallbackAssetSize = null, $sslScanResult = null, $sslManualOverride = null)
      {
          parent::__construct();
          $this->swiffyAsset = $swiffyAsset;
          $this->createSwiffyAsset = $createSwiffyAsset;
          $this->lockedOrientation = $lockedOrientation;
          $this->clickTagOverlayEnabled = $clickTagOverlayEnabled;
          $this->flashName = $flashName;
          $this->flashByteArray = $flashByteArray;
          $this->fallbackImageName = $fallbackImageName;
          $this->fallbackImageByteArray = $fallbackImageByteArray;
          $this->overrideSize = $overrideSize;
          $this->clickTagRequired = $clickTagRequired;
          $this->fallbackPreviewUrl = $fallbackPreviewUrl;
          $this->flashAssetSize = $flashAssetSize;
          $this->fallbackAssetSize = $fallbackAssetSize;
          $this->sslScanResult = $sslScanResult;
          $this->sslManualOverride = $sslManualOverride;
      }
  }
}

