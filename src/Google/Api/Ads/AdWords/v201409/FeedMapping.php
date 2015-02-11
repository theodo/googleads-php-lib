<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the FeedMappingService
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
 * @package    Google_Api_Ads_AdWords_v201409
 * @subpackage v201409
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient ;


if (!class_exists("FeedMapping", false)) {
    /**
   * A FeedMapping represents a mapping between feed attributes in a specific feed
   * and placeholder fields for a specific placeholder type. This will tell the
   * ads serving system which parts of the feed item should be used when
   * populating a placeholder. Without this mapping the placeholder cannot be
   * populated and the extension can not be displayed.
   *
   * <p>For a list of feed placeholders, see
   * <a href="/adwords/api/docs/appendix/placeholders">
   * https://developers.google.com/adwords/api/docs/appendix/placeholders
   * </a></p>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedMapping
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "FeedMapping";

    /**
     * @access public
     * @var integer
     */
    public $feedMappingId;

    /**
     * @access public
     * @var integer
     */
    public $feedId;

    /**
     * @access public
     * @var integer
     */
    public $placeholderType;

    /**
     * @access public
     * @var tnsFeedMappingStatus
     */
    public $status;

    /**
     * @access public
     * @var AttributeFieldMapping[]
     */
    public $attributeFieldMappings;

    /**
     * @access public
     * @var integer
     */
    public $criterionType;

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

      public function __construct($feedMappingId = null, $feedId = null, $placeholderType = null, $status = null, $attributeFieldMappings = null, $criterionType = null)
      {
          $this->feedMappingId = $feedMappingId;
          $this->feedId = $feedId;
          $this->placeholderType = $placeholderType;
          $this->status = $status;
          $this->attributeFieldMappings = $attributeFieldMappings;
          $this->criterionType = $criterionType;
      }
  }
}

