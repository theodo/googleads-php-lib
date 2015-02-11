<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the AdRuleService
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


if (!class_exists("BaseAdRuleSlot", false)) {
    /**
   * Simple object representing an ad slot within an {@link AdRule}. Ad rule slots
   * contain information about the types/number of ads to display, as well
   * as additional information on how the ad server will generate playlists.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class BaseAdRuleSlot
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "BaseAdRuleSlot";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var tnsAdRuleSlotBehavior
     */
    public $slotBehavior;

    /**
     * @access public
     * @var integer
     */
    public $minVideoAdDuration;

    /**
     * @access public
     * @var integer
     */
    public $maxVideoAdDuration;

    /**
     * @access public
     * @var tnsMidrollFrequencyType
     */
    public $videoMidrollFrequencyType;

    /**
     * @access public
     * @var string
     */
    public $videoMidrollFrequency;

    /**
     * @access public
     * @var tnsAdRuleSlotBumper
     */
    public $bumper;

    /**
     * @access public
     * @var integer
     */
    public $maxBumperDuration;

    /**
     * @access public
     * @var integer
     */
    public $minPodDuration;

    /**
     * @access public
     * @var integer
     */
    public $maxPodDuration;

    /**
     * @access public
     * @var integer
     */
    public $maxAdsInPod;

    /**
     * @access public
     * @var string
     */
    public $BaseAdRuleSlotType;
      private $_parameterMap = array(
      "BaseAdRuleSlot.Type" => "BaseAdRuleSlotType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
        $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (!isset($this->_parameterMap[$var])) {
            return;
        }

        return $this->{$this->_parameterMap[$var]};
    }

    /**
     * Provided for getting non-php-standard named variables
     * @return array parameter map
     */
    protected function getParameterMap()
    {
        return $this->_parameterMap;
    }

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

      public function __construct($id = null, $slotBehavior = null, $minVideoAdDuration = null, $maxVideoAdDuration = null, $videoMidrollFrequencyType = null, $videoMidrollFrequency = null, $bumper = null, $maxBumperDuration = null, $minPodDuration = null, $maxPodDuration = null, $maxAdsInPod = null, $BaseAdRuleSlotType = null)
      {
          $this->id = $id;
          $this->slotBehavior = $slotBehavior;
          $this->minVideoAdDuration = $minVideoAdDuration;
          $this->maxVideoAdDuration = $maxVideoAdDuration;
          $this->videoMidrollFrequencyType = $videoMidrollFrequencyType;
          $this->videoMidrollFrequency = $videoMidrollFrequency;
          $this->bumper = $bumper;
          $this->maxBumperDuration = $maxBumperDuration;
          $this->minPodDuration = $minPodDuration;
          $this->maxPodDuration = $maxPodDuration;
          $this->maxAdsInPod = $maxAdsInPod;
          $this->BaseAdRuleSlotType = $BaseAdRuleSlotType;
      }
  }
}

