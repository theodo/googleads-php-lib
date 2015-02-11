<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the MediaService
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
















































































if (!class_exists("Video", false)) {
    /**
   * Encapsulates a Video media identified by a MediaId.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class Video extends Media
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "Video";

    /**
     * @access public
     * @var integer
     */
    public $durationMillis;

    /**
     * @access public
     * @var string
     */
    public $streamingUrl;

    /**
     * @access public
     * @var boolean
     */
    public $readyToPlayOnTheWeb;

    /**
     * @access public
     * @var string
     */
    public $industryStandardCommercialIdentifier;

    /**
     * @access public
     * @var string
     */
    public $advertisingId;

    /**
     * @access public
     * @var string
     */
    public $youTubeVideoIdString;

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

      public function __construct($durationMillis = null, $streamingUrl = null, $readyToPlayOnTheWeb = null, $industryStandardCommercialIdentifier = null, $advertisingId = null, $youTubeVideoIdString = null, $mediaId = null, $type = null, $referenceId = null, $dimensions = null, $urls = null, $mimeType = null, $sourceUrl = null, $name = null, $fileSize = null, $creationTime = null, $MediaType = null)
      {
          parent::__construct();
          $this->durationMillis = $durationMillis;
          $this->streamingUrl = $streamingUrl;
          $this->readyToPlayOnTheWeb = $readyToPlayOnTheWeb;
          $this->industryStandardCommercialIdentifier = $industryStandardCommercialIdentifier;
          $this->advertisingId = $advertisingId;
          $this->youTubeVideoIdString = $youTubeVideoIdString;
          $this->mediaId = $mediaId;
          $this->type = $type;
          $this->referenceId = $referenceId;
          $this->dimensions = $dimensions;
          $this->urls = $urls;
          $this->mimeType = $mimeType;
          $this->sourceUrl = $sourceUrl;
          $this->name = $name;
          $this->fileSize = $fileSize;
          $this->creationTime = $creationTime;
          $this->MediaType = $MediaType;
      }
  }
}

