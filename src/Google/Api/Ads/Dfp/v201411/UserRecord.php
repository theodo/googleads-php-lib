<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the UserService
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




































if (!class_exists("UserRecord", false)) {
    /**
   * The {@code UserRecord} represents the base class from which a {@code User} is
   * derived.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class UserRecord
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "UserRecord";

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
    public $email;

    /**
     * @access public
     * @var integer
     */
    public $roleId;

    /**
     * @access public
     * @var string
     */
    public $roleName;

    /**
     * @access public
     * @var string
     */
    public $preferredLocale;

    /**
     * @access public
     * @var string
     */
    public $UserRecordType;
      private $_parameterMap = array(
      "UserRecord.Type" => "UserRecordType",
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

      public function __construct($id = null, $name = null, $email = null, $roleId = null, $roleName = null, $preferredLocale = null, $UserRecordType = null)
      {
          $this->id = $id;
          $this->name = $name;
          $this->email = $email;
          $this->roleId = $roleId;
          $this->roleName = $roleName;
          $this->preferredLocale = $preferredLocale;
          $this->UserRecordType = $UserRecordType;
      }
  }
}

