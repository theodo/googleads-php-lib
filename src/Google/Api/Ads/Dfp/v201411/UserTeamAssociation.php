<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the UserTeamAssociationService
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


if (!class_exists("UserTeamAssociation", false)) {
    /**
   * {@code UserTeamAssociation} associates a {@link User} with a {@link Team}
   * to provide the user access to the entities that belong to the team.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class UserTeamAssociation extends UserRecordTeamAssociation
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "UserTeamAssociation";

    /**
     * @access public
     * @var integer
     */
    public $userId;

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

      public function __construct($userId = null, $teamId = null, $overriddenTeamAccessType = null, $defaultTeamAccessType = null, $UserRecordTeamAssociationType = null)
      {
          parent::__construct();
          $this->userId = $userId;
          $this->teamId = $teamId;
          $this->overriddenTeamAccessType = $overriddenTeamAccessType;
          $this->defaultTeamAccessType = $defaultTeamAccessType;
          $this->UserRecordTeamAssociationType = $UserRecordTeamAssociationType;
      }
  }
}

