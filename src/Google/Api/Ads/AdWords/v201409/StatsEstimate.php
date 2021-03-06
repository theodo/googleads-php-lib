<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the TrafficEstimatorService
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


if (!class_exists("StatsEstimate", false)) {
    /**
   * Represents a set of stats for a daily traffic estimate.
   * As of v201406 {@code averageCpc}, {@code averagePosition} and {@code clickThroughRate} will be
   * {@code null} when not defined (respectively, if {@code clicksPerDay} or
   * {@code impressionsPerDay} are 0).
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class StatsEstimate
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201409";
      const XSI_TYPE = "StatsEstimate";

    /**
     * @access public
     * @var Money
     */
    public $averageCpc;

    /**
     * @access public
     * @var double
     */
    public $averagePosition;

    /**
     * @access public
     * @var double
     */
    public $clickThroughRate;

    /**
     * @access public
     * @var double
     */
    public $clicksPerDay;

    /**
     * @access public
     * @var double
     */
    public $impressionsPerDay;

    /**
     * @access public
     * @var Money
     */
    public $totalCost;

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

      public function __construct($averageCpc = null, $averagePosition = null, $clickThroughRate = null, $clicksPerDay = null, $impressionsPerDay = null, $totalCost = null)
      {
          $this->averageCpc = $averageCpc;
          $this->averagePosition = $averagePosition;
          $this->clickThroughRate = $clickThroughRate;
          $this->clicksPerDay = $clicksPerDay;
          $this->impressionsPerDay = $impressionsPerDay;
          $this->totalCost = $totalCost;
      }
  }
}

