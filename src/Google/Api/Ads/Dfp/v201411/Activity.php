<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the ActivityService
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

if (!class_exists("Activity", false)) {
    /**
   * <p>An activity is a specific user action that an advertiser wants to track, such as the
   * completion of a purchase or a visit to a webpage. You create and manage activities in DFP. When
   * a user performs the action after seeing an advertiser's ad, that's a conversion.</p>
   *
   * <p>For example, you set up an activity in DFP to track how many users visit an advertiser's
   * promotional website after viewing or clicking on an ad. When a user views an ad, then visits the
   * page, that's one conversion.</p>
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class Activity
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "Activity";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var integer
     */
    public $activityGroupId;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var string
     */
    public $expectedURL;

    /**
     * @access public
     * @var tnsActivityStatus
     */
    public $status;

    /**
     * @access public
     * @var tnsActivityType
     */
    public $type;

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

      public function __construct($id = null, $activityGroupId = null, $name = null, $expectedURL = null, $status = null, $type = null)
      {
          $this->id = $id;
          $this->activityGroupId = $activityGroupId;
          $this->name = $name;
          $this->expectedURL = $expectedURL;
          $this->status = $status;
          $this->type = $type;
      }
  }
}

