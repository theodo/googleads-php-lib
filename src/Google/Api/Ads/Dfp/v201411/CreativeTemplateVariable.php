<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the CreativeTemplateService
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










if (!class_exists("CreativeTemplateVariable", false)) {
    /**
   * Represents a variable defined in a creative template.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CreativeTemplateVariable
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "CreativeTemplateVariable";

    /**
     * @access public
     * @var string
     */
    public $label;

    /**
     * @access public
     * @var string
     */
    public $uniqueName;

    /**
     * @access public
     * @var string
     */
    public $description;

    /**
     * @access public
     * @var boolean
     */
    public $isRequired;

    /**
     * @access public
     * @var string
     */
    public $CreativeTemplateVariableType;
      private $_parameterMap = array(
      "CreativeTemplateVariable.Type" => "CreativeTemplateVariableType",
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

      public function __construct($label = null, $uniqueName = null, $description = null, $isRequired = null, $CreativeTemplateVariableType = null)
      {
          $this->label = $label;
          $this->uniqueName = $uniqueName;
          $this->description = $description;
          $this->isRequired = $isRequired;
          $this->CreativeTemplateVariableType = $CreativeTemplateVariableType;
      }
  }
}

