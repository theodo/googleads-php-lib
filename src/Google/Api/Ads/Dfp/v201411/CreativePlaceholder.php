<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the LineItemService
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


if (!class_exists("CreativePlaceholder", false)) {
    /**
   * A {@code CreativePlaceholder} describes a slot that a creative is expected to
   * fill. This is used primarily to help in forecasting, and also to validate
   * that the correct creatives are associated with the line item. A
   * {@code CreativePlaceholder} must contain a size, and it can optionally
   * contain companions. Companions are only valid if the line item's environment
   * type is {@link EnvironmentType#VIDEO_PLAYER}.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CreativePlaceholder
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "CreativePlaceholder";

    /**
     * @access public
     * @var Size
     */
    public $size;

    /**
     * @access public
     * @var CreativePlaceholder[]
     */
    public $companions;

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
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var integer
     */
    public $expectedCreativeCount;

    /**
     * @access public
     * @var tnsCreativeSizeType
     */
    public $creativeSizeType;

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

      public function __construct($size = null, $companions = null, $appliedLabels = null, $effectiveAppliedLabels = null, $id = null, $expectedCreativeCount = null, $creativeSizeType = null)
      {
          $this->size = $size;
          $this->companions = $companions;
          $this->appliedLabels = $appliedLabels;
          $this->effectiveAppliedLabels = $effectiveAppliedLabels;
          $this->id = $id;
          $this->expectedCreativeCount = $expectedCreativeCount;
          $this->creativeSizeType = $creativeSizeType;
      }
  }
}

