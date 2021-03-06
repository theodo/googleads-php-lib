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


if (!class_exists("ClickTrackingCreative", false)) {
    /**
   * A creative that is used for tracking clicks on ads that are served directly
   * from the customers' web servers or media servers.
   * NOTE: The size attribute is not used for click tracking creative and it will
   * not be persisted upon save.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ClickTrackingCreative extends Creative
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ClickTrackingCreative";

    /**
     * @access public
     * @var string
     */
    public $clickTrackingUrl;

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

      public function __construct($clickTrackingUrl = null, $advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $appliedLabels = null, $lastModifiedDateTime = null, $customFieldValues = null, $CreativeType = null)
      {
          parent::__construct();
          $this->clickTrackingUrl = $clickTrackingUrl;
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

