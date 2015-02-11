<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the AudienceSegmentService
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













































































if (!class_exists("ThirdPartyAudienceSegment", false)) {
    /**
   * A {@link ThirdPartyAudienceSegment} is an {@link AudienceSegment} owned by a data provider and
   * licensed to the DFP publisher.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ThirdPartyAudienceSegment extends AudienceSegment
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ThirdPartyAudienceSegment";

    /**
     * @access public
     * @var tnsThirdPartyAudienceSegmentAudienceSegmentApprovalStatus
     */
    public $approvalStatus;

    /**
     * @access public
     * @var Money
     */
    public $cost;

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

      public function __construct($approvalStatus = null, $cost = null, $startDateTime = null, $endDateTime = null, $id = null, $name = null, $categoryIds = null, $description = null, $status = null, $size = null, $dataProvider = null, $type = null, $AudienceSegmentType = null)
      {
          parent::__construct();
          $this->approvalStatus = $approvalStatus;
          $this->cost = $cost;
          $this->startDateTime = $startDateTime;
          $this->endDateTime = $endDateTime;
          $this->id = $id;
          $this->name = $name;
          $this->categoryIds = $categoryIds;
          $this->description = $description;
          $this->status = $status;
          $this->size = $size;
          $this->dataProvider = $dataProvider;
          $this->type = $type;
          $this->AudienceSegmentType = $AudienceSegmentType;
      }
  }
}

