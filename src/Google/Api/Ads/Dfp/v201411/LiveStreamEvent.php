<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the LiveStreamEventService
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














if (!class_exists("LiveStreamEvent", false)) {
    /**
   * A {@code LiveStreamEvent} represents schedule, content and ad stitching
   * information of a live stream event.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class LiveStreamEvent
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "LiveStreamEvent";

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
     * @var tnsLiveStreamEventStatus
     */
    public $status;

    /**
     * @access public
     * @var DateTime
     */
    public $creationDateTime;

    /**
     * @access public
     * @var DateTime
     */
    public $lastModifiedDateTime;

    /**
     * @access public
     * @var DateTime
     */
    public $startDateTime;

    /**
     * @access public
     * @var DateTime
     */
    public $endDateTime;

    /**
     * @access public
     * @var integer
     */
    public $totalEstimatedConcurrentUsers;

    /**
     * @access public
     * @var string[]
     */
    public $contentUrls;

    /**
     * @access public
     * @var string[]
     */
    public $adTags;

    /**
     * @access public
     * @var string
     */
    public $liveStreamEventCode;

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

      public function __construct($id = null, $name = null, $description = null, $status = null, $creationDateTime = null, $lastModifiedDateTime = null, $startDateTime = null, $endDateTime = null, $totalEstimatedConcurrentUsers = null, $contentUrls = null, $adTags = null, $liveStreamEventCode = null)
      {
          $this->id = $id;
          $this->name = $name;
          $this->description = $description;
          $this->status = $status;
          $this->creationDateTime = $creationDateTime;
          $this->lastModifiedDateTime = $lastModifiedDateTime;
          $this->startDateTime = $startDateTime;
          $this->endDateTime = $endDateTime;
          $this->totalEstimatedConcurrentUsers = $totalEstimatedConcurrentUsers;
          $this->contentUrls = $contentUrls;
          $this->adTags = $adTags;
          $this->liveStreamEventCode = $liveStreamEventCode;
      }
  }
}

