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














































































































































if (!class_exists("BaseFlashCreative", false)) {
    /**
   * A base type for creatives that display a Flash-based ad. If the Flash ad
   * cannot load, a fallback image is displayed instead.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class BaseFlashCreative extends HasDestinationUrlCreative
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "BaseFlashCreative";

    /**
     * @access public
     * @var string
     */
    public $flashName;

    /**
     * @access public
     * @var base64Binary
     */
    public $flashByteArray;

    /**
     * @access public
     * @var string
     */
    public $fallbackImageName;

    /**
     * @access public
     * @var base64Binary
     */
    public $fallbackImageByteArray;

    /**
     * @access public
     * @var boolean
     */
    public $overrideSize;

    /**
     * @access public
     * @var boolean
     */
    public $clickTagRequired;

    /**
     * @access public
     * @var string
     */
    public $fallbackPreviewUrl;

    /**
     * @access public
     * @var Size
     */
    public $flashAssetSize;

    /**
     * @access public
     * @var Size
     */
    public $fallbackAssetSize;

    /**
     * @access public
     * @var tnsSslScanResult
     */
    public $sslScanResult;

    /**
     * @access public
     * @var tnsSslManualOverride
     */
    public $sslManualOverride;

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

      public function __construct($flashName = null, $flashByteArray = null, $fallbackImageName = null, $fallbackImageByteArray = null, $overrideSize = null, $clickTagRequired = null, $fallbackPreviewUrl = null, $flashAssetSize = null, $fallbackAssetSize = null, $sslScanResult = null, $sslManualOverride = null, $destinationUrl = null, $destinationUrlType = null)
      {
          parent::__construct();
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
          $this->destinationUrl = $destinationUrl;
          $this->destinationUrlType = $destinationUrlType;
      }
  }
}

