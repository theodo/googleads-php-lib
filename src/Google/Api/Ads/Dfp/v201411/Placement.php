<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the PlacementService
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


if (!class_exists("Placement", false)) {
    /**
   * A {@code Placement} groups related {@code AdUnit} objects.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class Placement extends SiteTargetingInfo
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "Placement";

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
     * @var string
     */
    public $description;

    /**
     * @access public
     * @var string
     */
    public $placementCode;

    /**
     * @access public
     * @var tnsInventoryStatus
     */
    public $status;

    /**
     * @access public
     * @var boolean
     */
    public $isAdSenseTargetingEnabled;

    /**
     * @access public
     * @var string
     */
    public $adSenseTargetingLocale;

    /**
     * @access public
     * @var string[]
     */
    public $targetedAdUnitIds;

    /**
     * @access public
     * @var DateTime
     */
    public $lastModifiedDateTime;

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

      public function __construct($id = null, $name = null, $description = null, $placementCode = null, $status = null, $isAdSenseTargetingEnabled = null, $adSenseTargetingLocale = null, $targetedAdUnitIds = null, $lastModifiedDateTime = null, $targetingDescription = null, $targetingSiteName = null, $targetingAdLocation = null, $SiteTargetingInfoType = null)
      {
          parent::__construct();
          $this->id = $id;
          $this->name = $name;
          $this->description = $description;
          $this->placementCode = $placementCode;
          $this->status = $status;
          $this->isAdSenseTargetingEnabled = $isAdSenseTargetingEnabled;
          $this->adSenseTargetingLocale = $adSenseTargetingLocale;
          $this->targetedAdUnitIds = $targetedAdUnitIds;
          $this->lastModifiedDateTime = $lastModifiedDateTime;
          $this->targetingDescription = $targetingDescription;
          $this->targetingSiteName = $targetingSiteName;
          $this->targetingAdLocation = $targetingAdLocation;
          $this->SiteTargetingInfoType = $SiteTargetingInfoType;
      }
  }
}

