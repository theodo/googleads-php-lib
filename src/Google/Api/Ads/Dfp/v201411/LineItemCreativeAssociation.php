<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the LineItemCreativeAssociationService
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

























if (!class_exists("LineItemCreativeAssociation", false)) {
    /**
   * A {@code LineItemCreativeAssociation} associates a {@link Creative} or {@link CreativeSet} with a
   * {@link LineItem} so that the creative can be served in ad units targeted by the line item.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class LineItemCreativeAssociation
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "LineItemCreativeAssociation";

    /**
     * @access public
     * @var integer
     */
    public $lineItemId;

    /**
     * @access public
     * @var integer
     */
    public $creativeId;

    /**
     * @access public
     * @var integer
     */
    public $creativeSetId;

    /**
     * @access public
     * @var double
     */
    public $manualCreativeRotationWeight;

    /**
     * @access public
     * @var integer
     */
    public $sequentialCreativeRotationIndex;

    /**
     * @access public
     * @var DateTime
     */
    public $startDateTime;

    /**
     * @access public
     * @var tnsStartDateTimeType
     */
    public $startDateTimeType;

    /**
     * @access public
     * @var DateTime
     */
    public $endDateTime;

    /**
     * @access public
     * @var string
     */
    public $destinationUrl;

    /**
     * @access public
     * @var Size[]
     */
    public $sizes;

    /**
     * @access public
     * @var tnsLineItemCreativeAssociationStatus
     */
    public $status;

    /**
     * @access public
     * @var LineItemCreativeAssociationStats
     */
    public $stats;

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

      public function __construct($lineItemId = null, $creativeId = null, $creativeSetId = null, $manualCreativeRotationWeight = null, $sequentialCreativeRotationIndex = null, $startDateTime = null, $startDateTimeType = null, $endDateTime = null, $destinationUrl = null, $sizes = null, $status = null, $stats = null, $lastModifiedDateTime = null)
      {
          $this->lineItemId = $lineItemId;
          $this->creativeId = $creativeId;
          $this->creativeSetId = $creativeSetId;
          $this->manualCreativeRotationWeight = $manualCreativeRotationWeight;
          $this->sequentialCreativeRotationIndex = $sequentialCreativeRotationIndex;
          $this->startDateTime = $startDateTime;
          $this->startDateTimeType = $startDateTimeType;
          $this->endDateTime = $endDateTime;
          $this->destinationUrl = $destinationUrl;
          $this->sizes = $sizes;
          $this->status = $status;
          $this->stats = $stats;
          $this->lastModifiedDateTime = $lastModifiedDateTime;
      }
  }
}
