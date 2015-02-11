<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the SuggestedAdUnitService
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


if (!class_exists("SuggestedAdUnit", false)) {
    /**
   * A {@code SuggestedAdUnit} represents a suggestion for a new ad unit, based on an ad tag that has
   * been served at least ten times in the past week, but which does not correspond to a defined ad
   * unit. This type is read-only.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class SuggestedAdUnit
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "SuggestedAdUnit";

    /**
     * @access public
     * @var string
     */
    public $id;

    /**
     * @access public
     * @var integer
     */
    public $numRequests;

    /**
     * @access public
     * @var string[]
     */
    public $path;

    /**
     * @access public
     * @var AdUnitParent[]
     */
    public $parentPath;

    /**
     * @access public
     * @var tnsAdUnitTargetWindow
     */
    public $targetWindow;

    /**
     * @access public
     * @var tnsTargetPlatform
     */
    public $targetPlatform;

    /**
     * @access public
     * @var AdUnitSize[]
     */
    public $suggestedAdUnitSizes;

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

      public function __construct($id = null, $numRequests = null, $path = null, $parentPath = null, $targetWindow = null, $targetPlatform = null, $suggestedAdUnitSizes = null)
      {
          $this->id = $id;
          $this->numRequests = $numRequests;
          $this->path = $path;
          $this->parentPath = $parentPath;
          $this->targetWindow = $targetWindow;
          $this->targetPlatform = $targetPlatform;
          $this->suggestedAdUnitSizes = $suggestedAdUnitSizes;
      }
  }
}

