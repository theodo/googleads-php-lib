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












































































if (!class_exists("VideoMetadata", false)) {
    /**
   * Metadata for a video asset.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class VideoMetadata
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "VideoMetadata";

    /**
     * @access public
     * @var tnsScalableType
     */
    public $scalableType;

    /**
     * @access public
     * @var integer
     */
    public $duration;

    /**
     * @access public
     * @var integer
     */
    public $bitRate;

    /**
     * @access public
     * @var integer
     */
    public $minimumBitRate;

    /**
     * @access public
     * @var integer
     */
    public $maximumBitRate;

    /**
     * @access public
     * @var Size
     */
    public $size;

    /**
     * @access public
     * @var tnsMimeType
     */
    public $mimeType;

    /**
     * @access public
     * @var tnsVideoDeliveryType
     */
    public $deliveryType;

    /**
     * @access public
     * @var string[]
     */
    public $codecs;

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

      public function __construct($scalableType = null, $duration = null, $bitRate = null, $minimumBitRate = null, $maximumBitRate = null, $size = null, $mimeType = null, $deliveryType = null, $codecs = null)
      {
          $this->scalableType = $scalableType;
          $this->duration = $duration;
          $this->bitRate = $bitRate;
          $this->minimumBitRate = $minimumBitRate;
          $this->maximumBitRate = $maximumBitRate;
          $this->size = $size;
          $this->mimeType = $mimeType;
          $this->deliveryType = $deliveryType;
          $this->codecs = $codecs;
      }
  }
}

