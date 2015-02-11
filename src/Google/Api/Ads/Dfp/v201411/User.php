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














































































if (!class_exists("User", false)) {
    /**
   * Represents a user of the system.
   * <p>
   * Users may be assigned at most one {@link Role} per network. Each role
   * provides a user with permissions to perform specific operations. Without a
   * role, they will not be able to perform any actions.
   * </p>
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class User extends UserRecord
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "User";

    /**
     * @access public
     * @var boolean
     */
    public $isActive;

    /**
     * @access public
     * @var boolean
     */
    public $isEmailNotificationAllowed;

    /**
     * @access public
     * @var string
     */
    public $externalId;

    /**
     * @access public
     * @var boolean
     */
    public $isServiceAccount;

    /**
     * @access public
     * @var string
     */
    public $ordersUiLocalTimeZoneId;

    /**
     * @access public
     * @var BaseCustomFieldValue[]
     */
    public $customFieldValues;

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

      public function __construct($isActive = null, $isEmailNotificationAllowed = null, $externalId = null, $isServiceAccount = null, $ordersUiLocalTimeZoneId = null, $customFieldValues = null, $id = null, $name = null, $email = null, $roleId = null, $roleName = null, $preferredLocale = null, $UserRecordType = null)
      {
          parent::__construct();
          $this->isActive = $isActive;
          $this->isEmailNotificationAllowed = $isEmailNotificationAllowed;
          $this->externalId = $externalId;
          $this->isServiceAccount = $isServiceAccount;
          $this->ordersUiLocalTimeZoneId = $ordersUiLocalTimeZoneId;
          $this->customFieldValues = $customFieldValues;
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

