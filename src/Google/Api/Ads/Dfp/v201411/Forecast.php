<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the ForecastService
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










































if (!class_exists("Forecast", false)) {
    /**
   * Describes predicted inventory availability for a line item with the specified
   * properties.
   *
   * <p>Inventory has three threshold values along a line of possible inventory.
   * From least to most, these are:
   *
   * <dl>
   * <dt>Available units
   * <dd>How many units can be booked without affecting any other line items. Booking more than this
   * number can cause lower- and same-priority line items to underdeliver.
   * <dt>Possible units
   * <dd>How many units can be booked without affecting any higher priority line items. Booking more
   * than this number can cause the line item to underdeliver.
   * <dt>Matched (forecast) units
   * <dd>How many units satisfy all specified criteria.
   * </dl>
   *
   * <p>Underdelivery is caused by overbooking. However, if more impressions are served than are
   * predicted, the extra available inventory might enable all inventory guarantees to be met without
   * overbooking.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class Forecast
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "Forecast";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var integer
     */
    public $orderId;

    /**
     * @access public
     * @var tnsUnitType
     */
    public $unitType;

    /**
     * @access public
     * @var integer
     */
    public $availableUnits;

    /**
     * @access public
     * @var integer
     */
    public $deliveredUnits;

    /**
     * @access public
     * @var integer
     */
    public $matchedUnits;

    /**
     * @access public
     * @var integer
     */
    public $possibleUnits;

    /**
     * @access public
     * @var integer
     */
    public $reservedUnits;

    /**
     * @access public
     * @var ContendingLineItem[]
     */
    public $contendingLineItems;

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

      public function __construct($id = null, $orderId = null, $unitType = null, $availableUnits = null, $deliveredUnits = null, $matchedUnits = null, $possibleUnits = null, $reservedUnits = null, $contendingLineItems = null)
      {
          $this->id = $id;
          $this->orderId = $orderId;
          $this->unitType = $unitType;
          $this->availableUnits = $availableUnits;
          $this->deliveredUnits = $deliveredUnits;
          $this->matchedUnits = $matchedUnits;
          $this->possibleUnits = $possibleUnits;
          $this->reservedUnits = $reservedUnits;
          $this->contendingLineItems = $contendingLineItems;
      }
  }
}

