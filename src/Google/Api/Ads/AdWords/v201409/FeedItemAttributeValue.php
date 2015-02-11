<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the FeedItemService
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


if (!class_exists("FeedItemAttributeValue", false)) {
    /**
   * Represents a feed item's value for a particular feed attribute. A feed item's value is
   * composed of a collection of these attribute values.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItemAttributeValue
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "FeedItemAttributeValue";

    /**
     * @access public
     * @var integer
     */
    public $feedAttributeId;

    /**
     * @access public
     * @var integer
     */
    public $integerValue;

    /**
     * @access public
     * @var double
     */
    public $doubleValue;

    /**
     * @access public
     * @var boolean
     */
    public $booleanValue;

    /**
     * @access public
     * @var string
     */
    public $stringValue;

    /**
     * @access public
     * @var integer[]
     */
    public $integerValues;

    /**
     * @access public
     * @var double[]
     */
    public $doubleValues;

    /**
     * @access public
     * @var boolean[]
     */
    public $booleanValues;

    /**
     * @access public
     * @var string[]
     */
    public $stringValues;

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

      public function __construct($feedAttributeId = null, $integerValue = null, $doubleValue = null, $booleanValue = null, $stringValue = null, $integerValues = null, $doubleValues = null, $booleanValues = null, $stringValues = null)
      {
          $this->feedAttributeId = $feedAttributeId;
          $this->integerValue = $integerValue;
          $this->doubleValue = $doubleValue;
          $this->booleanValue = $booleanValue;
          $this->stringValue = $stringValue;
          $this->integerValues = $integerValues;
          $this->doubleValues = $doubleValues;
          $this->booleanValues = $booleanValues;
          $this->stringValues = $stringValues;
      }
  }
}

