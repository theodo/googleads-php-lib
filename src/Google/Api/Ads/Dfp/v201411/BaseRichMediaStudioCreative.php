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


if (!class_exists("BaseRichMediaStudioCreative", false)) {
    /**
   * A {@code Creative} that is created by a Rich Media Studio.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class BaseRichMediaStudioCreative extends Creative
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "BaseRichMediaStudioCreative";

    /**
     * @access public
     * @var integer
     */
    public $studioCreativeId;

    /**
     * @access public
     * @var tnsRichMediaStudioCreativeFormat
     */
    public $creativeFormat;

    /**
     * @access public
     * @var tnsRichMediaStudioCreativeArtworkType
     */
    public $artworkType;

    /**
     * @access public
     * @var integer
     */
    public $totalFileSize;

    /**
     * @access public
     * @var string[]
     */
    public $adTagKeys;

    /**
     * @access public
     * @var string[]
     */
    public $customKeyValues;

    /**
     * @access public
     * @var string
     */
    public $surveyUrl;

    /**
     * @access public
     * @var string
     */
    public $allImpressionsUrl;

    /**
     * @access public
     * @var string
     */
    public $richMediaImpressionsUrl;

    /**
     * @access public
     * @var string
     */
    public $backupImageImpressionsUrl;

    /**
     * @access public
     * @var string
     */
    public $overrideCss;

    /**
     * @access public
     * @var string
     */
    public $requiredFlashPluginVersion;

    /**
     * @access public
     * @var integer
     */
    public $duration;

    /**
     * @access public
     * @var tnsRichMediaStudioCreativeBillingAttribute
     */
    public $billingAttribute;

    /**
     * @access public
     * @var RichMediaStudioChildAssetProperty[]
     */
    public $richMediaStudioChildAssetProperties;

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

      public function __construct($studioCreativeId = null, $creativeFormat = null, $artworkType = null, $totalFileSize = null, $adTagKeys = null, $customKeyValues = null, $surveyUrl = null, $allImpressionsUrl = null, $richMediaImpressionsUrl = null, $backupImageImpressionsUrl = null, $overrideCss = null, $requiredFlashPluginVersion = null, $duration = null, $billingAttribute = null, $richMediaStudioChildAssetProperties = null, $sslScanResult = null, $sslManualOverride = null, $advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $appliedLabels = null, $lastModifiedDateTime = null, $customFieldValues = null, $CreativeType = null)
      {
          parent::__construct();
          $this->studioCreativeId = $studioCreativeId;
          $this->creativeFormat = $creativeFormat;
          $this->artworkType = $artworkType;
          $this->totalFileSize = $totalFileSize;
          $this->adTagKeys = $adTagKeys;
          $this->customKeyValues = $customKeyValues;
          $this->surveyUrl = $surveyUrl;
          $this->allImpressionsUrl = $allImpressionsUrl;
          $this->richMediaImpressionsUrl = $richMediaImpressionsUrl;
          $this->backupImageImpressionsUrl = $backupImageImpressionsUrl;
          $this->overrideCss = $overrideCss;
          $this->requiredFlashPluginVersion = $requiredFlashPluginVersion;
          $this->duration = $duration;
          $this->billingAttribute = $billingAttribute;
          $this->richMediaStudioChildAssetProperties = $richMediaStudioChildAssetProperties;
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

