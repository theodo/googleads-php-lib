<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the CompanyService
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









if (!class_exists("Company", false)) {
    /**
   * A {@code Company} represents an agency, a single advertiser or an entire
   * advertising network.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class Company
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "Company";

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
     * @var tnsCompanyType
     */
    public $type;

    /**
     * @access public
     * @var string
     */
    public $address;

    /**
     * @access public
     * @var string
     */
    public $email;

    /**
     * @access public
     * @var string
     */
    public $faxPhone;

    /**
     * @access public
     * @var string
     */
    public $primaryPhone;

    /**
     * @access public
     * @var string
     */
    public $externalId;

    /**
     * @access public
     * @var string
     */
    public $comment;

    /**
     * @access public
     * @var tnsCompanyCreditStatus
     */
    public $creditStatus;

    /**
     * @access public
     * @var AppliedLabel[]
     */
    public $appliedLabels;

    /**
     * @access public
     * @var boolean
     */
    public $enableSameAdvertiserCompetitiveExclusion;

    /**
     * @access public
     * @var integer
     */
    public $primaryContactId;

    /**
     * @access public
     * @var integer[]
     */
    public $appliedTeamIds;

    /**
     * @access public
     * @var integer
     */
    public $thirdPartyCompanyId;

    /**
     * @access public
     * @var DateTime
     */
    public $lastModifiedDateTime;

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

      public function __construct($id = null, $name = null, $type = null, $address = null, $email = null, $faxPhone = null, $primaryPhone = null, $externalId = null, $comment = null, $creditStatus = null, $appliedLabels = null, $enableSameAdvertiserCompetitiveExclusion = null, $primaryContactId = null, $appliedTeamIds = null, $thirdPartyCompanyId = null, $lastModifiedDateTime = null)
      {
          $this->id = $id;
          $this->name = $name;
          $this->type = $type;
          $this->address = $address;
          $this->email = $email;
          $this->faxPhone = $faxPhone;
          $this->primaryPhone = $primaryPhone;
          $this->externalId = $externalId;
          $this->comment = $comment;
          $this->creditStatus = $creditStatus;
          $this->appliedLabels = $appliedLabels;
          $this->enableSameAdvertiserCompetitiveExclusion = $enableSameAdvertiserCompetitiveExclusion;
          $this->primaryContactId = $primaryContactId;
          $this->appliedTeamIds = $appliedTeamIds;
          $this->thirdPartyCompanyId = $thirdPartyCompanyId;
          $this->lastModifiedDateTime = $lastModifiedDateTime;
      }
  }
}

