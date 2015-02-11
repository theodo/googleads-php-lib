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


if (!class_exists("Stats", false)) {
    /**
   * {@code Stats} contains trafficking statistics for {@link LineItem} and
   * {@link LineItemCreativeAssociation} objects
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class Stats
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "Stats";

    /**
     * @access public
     * @var integer
     */
    public $impressionsDelivered;

    /**
     * @access public
     * @var integer
     */
    public $clicksDelivered;

    /**
     * @access public
     * @var integer
     */
    public $videoCompletionsDelivered;

    /**
     * @access public
     * @var integer
     */
    public $videoStartsDelivered;

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

      public function __construct($impressionsDelivered = null, $clicksDelivered = null, $videoCompletionsDelivered = null, $videoStartsDelivered = null)
      {
          $this->impressionsDelivered = $impressionsDelivered;
          $this->clicksDelivered = $clicksDelivered;
          $this->videoCompletionsDelivered = $videoCompletionsDelivered;
          $this->videoStartsDelivered = $videoStartsDelivered;
      }
  }
}

