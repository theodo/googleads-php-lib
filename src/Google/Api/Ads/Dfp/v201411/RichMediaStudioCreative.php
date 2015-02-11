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


if (!class_exists("RichMediaStudioCreative", false)) {
    /**
   * A {@code Creative} that is created by a Rich Media Studio. You cannot create this creative,
   * but you can update some fields of this creative.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class RichMediaStudioCreative extends BaseRichMediaStudioCreative
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "RichMediaStudioCreative";

    /**
     * @access public
     * @var tnsLockedOrientation
     */
    public $lockedOrientation;

    /**
     * @access public
     * @var boolean
     */
    public $isInterstitial;

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

      public function __construct($lockedOrientation = null, $isInterstitial = null, $studioCreativeId = null, $creativeFormat = null, $artworkType = null, $totalFileSize = null, $adTagKeys = null, $customKeyValues = null, $surveyUrl = null, $allImpressionsUrl = null, $richMediaImpressionsUrl = null, $backupImageImpressionsUrl = null, $overrideCss = null, $requiredFlashPluginVersion = null, $duration = null, $billingAttribute = null, $richMediaStudioChildAssetProperties = null, $sslScanResult = null, $sslManualOverride = null)
      {
          parent::__construct();
          $this->lockedOrientation = $lockedOrientation;
          $this->isInterstitial = $isInterstitial;
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
      }
  }
}

