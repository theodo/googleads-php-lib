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











































































if (!class_exists("VastRedirectCreative", false)) {
    /**
   * A {@code Creative} that points to an externally hosted VAST ad and is
   * served via VAST XML as a VAST Wrapper.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class VastRedirectCreative extends Creative
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "VastRedirectCreative";

    /**
     * @access public
     * @var string
     */
    public $vastXmlUrl;

    /**
     * @access public
     * @var tnsVastRedirectType
     */
    public $vastRedirectType;

    /**
     * @access public
     * @var integer
     */
    public $duration;

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
    public $vastPreviewUrl;

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

      public function __construct($vastXmlUrl = null, $vastRedirectType = null, $duration = null, $companionCreativeIds = null, $trackingUrls = null, $vastPreviewUrl = null, $sslScanResult = null, $sslManualOverride = null, $advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $appliedLabels = null, $lastModifiedDateTime = null, $customFieldValues = null, $CreativeType = null)
      {
          parent::__construct();
          $this->vastXmlUrl = $vastXmlUrl;
          $this->vastRedirectType = $vastRedirectType;
          $this->duration = $duration;
          $this->companionCreativeIds = $companionCreativeIds;
          $this->trackingUrls = $trackingUrls;
          $this->vastPreviewUrl = $vastPreviewUrl;
          $this->sslScanResult = $sslScanResult;
          $this->sslManualOverride = $sslManualOverride;
          $this->advertiserId = $advertiserId;
          $this->id = $id;
          $this->name = $name;
          $this->size = $size;
          $this->previewUrl = $previewUrl;
          $this->appliedLabels = $appliedLabels;
          $this->lastModifiedDateTime = $lastModifiedDateTime;
          $this->customFieldValues = $customFieldValues;
          $this->CreativeType = $CreativeType;
      }
  }
}

