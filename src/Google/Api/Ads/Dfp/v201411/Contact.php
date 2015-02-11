<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the ContactService
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


if (!class_exists("Contact", false)) {
    /**
   * A {@code Contact} represents a person who is affiliated with a single
   * {@link Company}. A contact can have a variety of contact information
   * associated to it, and can be invited to view their company's orders, line
   * items, creatives, and reports.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class Contact extends BaseContact
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "Contact";

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
     * @var integer
     */
    public $companyId;

    /**
     * @access public
     * @var tnsContactStatus
     */
    public $status;

    /**
     * @access public
     * @var string
     */
    public $address;

    /**
     * @access public
     * @var string
     */
    public $cellPhone;

    /**
     * @access public
     * @var string
     */
    public $comment;

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
    public $title;

    /**
     * @access public
     * @var string
     */
    public $workPhone;

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

      public function __construct($id = null, $name = null, $companyId = null, $status = null, $address = null, $cellPhone = null, $comment = null, $email = null, $faxPhone = null, $title = null, $workPhone = null, $BaseContactType = null)
      {
          parent::__construct();
          $this->id = $id;
          $this->name = $name;
          $this->companyId = $companyId;
          $this->status = $status;
          $this->address = $address;
          $this->cellPhone = $cellPhone;
          $this->comment = $comment;
          $this->email = $email;
          $this->faxPhone = $faxPhone;
          $this->title = $title;
          $this->workPhone = $workPhone;
          $this->BaseContactType = $BaseContactType;
      }
  }
}

