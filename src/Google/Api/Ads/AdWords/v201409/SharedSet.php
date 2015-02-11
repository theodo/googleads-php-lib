<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the SharedSetService
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





if (!class_exists("SharedSet", false)) {
    /**
   * <span class="constraint Selectable">This field can be selected using the value "SharedSetId".</span><span class="constraint Filterable">This field can be filtered on.</span>
   * <span class="constraint Required">This field is required and should not be {@code null} when it is contained within {@link Operator}s : SET, REMOVE.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class SharedSet
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "SharedSet";

    /**
     * @access public
     * @var integer
     */
    public $sharedSetId;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var tnsSharedSetType
     */
    public $type;

    /**
     * @access public
     * @var integer
     */
    public $memberCount;

    /**
     * @access public
     * @var integer
     */
    public $referenceCount;

    /**
     * @access public
     * @var tnsSharedSetStatus
     */
    public $status;

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

      public function __construct($sharedSetId = null, $name = null, $type = null, $memberCount = null, $referenceCount = null, $status = null)
      {
          $this->sharedSetId = $sharedSetId;
          $this->name = $name;
          $this->type = $type;
          $this->memberCount = $memberCount;
          $this->referenceCount = $referenceCount;
          $this->status = $status;
      }
  }
}

