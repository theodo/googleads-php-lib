<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the AdwordsUserListService
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


if (!class_exists("UserList", false)) {
    /**
   * Represents a UserList object that is sent over the wire.
   * This is a list of users an account may target.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class UserList
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201409";
      const XSI_TYPE = "UserList";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var boolean
     */
    public $isReadOnly;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var string
     */
    public $description;

    /**
     * @access public
     * @var tnsUserListMembershipStatus
     */
    public $status;

    /**
     * @access public
     * @var string
     */
    public $integrationCode;

    /**
     * @access public
     * @var tnsAccessReason
     */
    public $accessReason;

    /**
     * @access public
     * @var tnsAccountUserListStatus
     */
    public $accountUserListStatus;

    /**
     * @access public
     * @var integer
     */
    public $membershipLifeSpan;

    /**
     * @access public
     * @var integer
     */
    public $size;

    /**
     * @access public
     * @var tnsSizeRange
     */
    public $sizeRange;

    /**
     * @access public
     * @var integer
     */
    public $sizeForSearch;

    /**
     * @access public
     * @var tnsSizeRange
     */
    public $sizeRangeForSearch;

    /**
     * @access public
     * @var tnsUserListType
     */
    public $listType;

    /**
     * @access public
     * @var string
     */
    public $UserListType;
      private $_parameterMap = array(
      "UserList.Type" => "UserListType",
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

      public function __construct($id = null, $isReadOnly = null, $name = null, $description = null, $status = null, $integrationCode = null, $accessReason = null, $accountUserListStatus = null, $membershipLifeSpan = null, $size = null, $sizeRange = null, $sizeForSearch = null, $sizeRangeForSearch = null, $listType = null, $UserListType = null)
      {
          $this->id = $id;
          $this->isReadOnly = $isReadOnly;
          $this->name = $name;
          $this->description = $description;
          $this->status = $status;
          $this->integrationCode = $integrationCode;
          $this->accessReason = $accessReason;
          $this->accountUserListStatus = $accountUserListStatus;
          $this->membershipLifeSpan = $membershipLifeSpan;
          $this->size = $size;
          $this->sizeRange = $sizeRange;
          $this->sizeForSearch = $sizeForSearch;
          $this->sizeRangeForSearch = $sizeRangeForSearch;
          $this->listType = $listType;
          $this->UserListType = $UserListType;
      }
  }
}

