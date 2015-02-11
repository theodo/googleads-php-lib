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





























































































































































if (!class_exists("FlashRedirectOverlayCreative", false)) {
    /**
   * An overlay {@code Creative} that loads a Flash asset from a specified URL
   * and is served via VAST 2.0 XML. Overlays cover part of the video content
   * they are displayed on top of.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class FlashRedirectOverlayCreative extends BaseFlashRedirectCreative
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "FlashRedirectOverlayCreative";

    /**
     * @access public
     * @var integer[]
     */
    public $companionCreativeIds;

    /**
     * @access public
     * @var ConversionEvent_TrackingUrlsMapEntry[]
     */
    public $trackingUrls;

    /**
     * @access public
     * @var string
     */
    public $customParameters;

    /**
     * @access public
     * @var tnsApiFramework
     */
    public $apiFramework;

    /**
     * @access public
     * @var integer
     */
    public $duration;

    /**
     * @access public
     * @var Size
     */
    public $flashAssetSize;

    /**
     * @access public
     * @var string
     */
    public $vastPreviewUrl;

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

      public function __construct($companionCreativeIds = null, $trackingUrls = null, $customParameters = null, $apiFramework = null, $duration = null, $flashAssetSize = null, $vastPreviewUrl = null, $flashUrl = null, $fallbackUrl = null, $fallbackPreviewUrl = null, $sslScanResult = null, $sslManualOverride = null)
      {
          parent::__construct();
          $this->companionCreativeIds = $companionCreativeIds;
          $this->trackingUrls = $trackingUrls;
          $this->customParameters = $customParameters;
          $this->apiFramework = $apiFramework;
          $this->duration = $duration;
          $this->flashAssetSize = $flashAssetSize;
          $this->vastPreviewUrl = $vastPreviewUrl;
          $this->flashUrl = $flashUrl;
          $this->fallbackUrl = $fallbackUrl;
          $this->fallbackPreviewUrl = $fallbackPreviewUrl;
          $this->sslScanResult = $sslScanResult;
          $this->sslManualOverride = $sslManualOverride;
      }
  }
}

