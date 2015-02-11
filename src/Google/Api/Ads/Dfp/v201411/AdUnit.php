<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the InventoryService
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




if (!class_exists("AdUnit", false)) {
    /**
   * An {@code AdUnit} represents a chunk of identified inventory for the
   * publisher. It contains all the settings that need to be associated with
   * inventory in order to serve ads to it. An {@code AdUnit} can also be the
   * parent of other ad units in the inventory hierarchy.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class AdUnit
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "AdUnit";

    /**
     * @access public
     * @var string
     */
    public $id;

    /**
     * @access public
     * @var string
     */
    public $parentId;

    /**
     * @access public
     * @var boolean
     */
    public $hasChildren;

    /**
     * @access public
     * @var AdUnitParent[]
     */
    public $parentPath;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var string
     */
    public $description;

    /**
     * @access public
     * @var tnsAdUnitTargetWindow
     */
    public $targetWindow;

    /**
     * @access public
     * @var tnsInventoryStatus
     */
    public $status;

    /**
     * @access public
     * @var string
     */
    public $adUnitCode;

    /**
     * @access public
     * @var AdUnitSize[]
     */
    public $adUnitSizes;

    /**
     * @access public
     * @var tnsTargetPlatform
     */
    public $targetPlatform;

    /**
     * @access public
     * @var tnsMobilePlatform
     */
    public $mobilePlatform;

    /**
     * @access public
     * @var boolean
     */
    public $explicitlyTargeted;

    /**
     * @access public
     * @var AdSenseSettingsInheritedProperty
     */
    public $inheritedAdSenseSettings;

    /**
     * @access public
     * @var integer
     */
    public $partnerId;

    /**
     * @access public
     * @var LabelFrequencyCap[]
     */
    public $appliedLabelFrequencyCaps;

    /**
     * @access public
     * @var LabelFrequencyCap[]
     */
    public $effectiveLabelFrequencyCaps;

    /**
     * @access public
     * @var AppliedLabel[]
     */
    public $appliedLabels;

    /**
     * @access public
     * @var AppliedLabel[]
     */
    public $effectiveAppliedLabels;

    /**
     * @access public
     * @var integer[]
     */
    public $effectiveTeamIds;

    /**
     * @access public
     * @var integer[]
     */
    public $appliedTeamIds;

    /**
     * @access public
     * @var DateTime
     */
    public $lastModifiedDateTime;

    /**
     * @access public
     * @var tnsSmartSizeMode
     */
    public $smartSizeMode;

    /**
     * @access public
     * @var integer
     */
    public $refreshRate;

    /**
     * @access public
     * @var boolean
     */
    public $isSharedByDistributor;

    /**
     * @access public
     * @var CrossSellingDistributor
     */
    public $crossSellingDistributor;

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

      public function __construct($id = null, $parentId = null, $hasChildren = null, $parentPath = null, $name = null, $description = null, $targetWindow = null, $status = null, $adUnitCode = null, $adUnitSizes = null, $targetPlatform = null, $mobilePlatform = null, $explicitlyTargeted = null, $inheritedAdSenseSettings = null, $partnerId = null, $appliedLabelFrequencyCaps = null, $effectiveLabelFrequencyCaps = null, $appliedLabels = null, $effectiveAppliedLabels = null, $effectiveTeamIds = null, $appliedTeamIds = null, $lastModifiedDateTime = null, $smartSizeMode = null, $refreshRate = null, $isSharedByDistributor = null, $crossSellingDistributor = null)
      {
          $this->id = $id;
          $this->parentId = $parentId;
          $this->hasChildren = $hasChildren;
          $this->parentPath = $parentPath;
          $this->name = $name;
          $this->description = $description;
          $this->targetWindow = $targetWindow;
          $this->status = $status;
          $this->adUnitCode = $adUnitCode;
          $this->adUnitSizes = $adUnitSizes;
          $this->targetPlatform = $targetPlatform;
          $this->mobilePlatform = $mobilePlatform;
          $this->explicitlyTargeted = $explicitlyTargeted;
          $this->inheritedAdSenseSettings = $inheritedAdSenseSettings;
          $this->partnerId = $partnerId;
          $this->appliedLabelFrequencyCaps = $appliedLabelFrequencyCaps;
          $this->effectiveLabelFrequencyCaps = $effectiveLabelFrequencyCaps;
          $this->appliedLabels = $appliedLabels;
          $this->effectiveAppliedLabels = $effectiveAppliedLabels;
          $this->effectiveTeamIds = $effectiveTeamIds;
          $this->appliedTeamIds = $appliedTeamIds;
          $this->lastModifiedDateTime = $lastModifiedDateTime;
          $this->smartSizeMode = $smartSizeMode;
          $this->refreshRate = $refreshRate;
          $this->isSharedByDistributor = $isSharedByDistributor;
          $this->crossSellingDistributor = $crossSellingDistributor;
      }
  }
}

