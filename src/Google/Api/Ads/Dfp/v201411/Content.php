<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the ContentService
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







if (!class_exists("Content", false)) {
    /**
   * A {@code Content} represents video metadata from a publisher's
   * Content Management System (CMS) that has been synced to DFP.
   * <p>
   * Video line items can be targeted to {@code Content}
   * to indicate what ads should match when the {@code Content} is being played.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class Content
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "Content";

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
     * @var tnsContentStatus
     */
    public $status;

    /**
     * @access public
     * @var tnsContentStatusDefinedBy
     */
    public $statusDefinedBy;

    /**
     * @access public
     * @var DateTime
     */
    public $importDateTime;

    /**
     * @access public
     * @var DateTime
     */
    public $lastModifiedDateTime;

    /**
     * @access public
     * @var integer[]
     */
    public $userDefinedCustomTargetingValueIds;

    /**
     * @access public
     * @var integer[]
     */
    public $mappingRuleDefinedCustomTargetingValueIds;

    /**
     * @access public
     * @var CmsContent[]
     */
    public $cmsSources;

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

      public function __construct($id = null, $name = null, $status = null, $statusDefinedBy = null, $importDateTime = null, $lastModifiedDateTime = null, $userDefinedCustomTargetingValueIds = null, $mappingRuleDefinedCustomTargetingValueIds = null, $cmsSources = null)
      {
          $this->id = $id;
          $this->name = $name;
          $this->status = $status;
          $this->statusDefinedBy = $statusDefinedBy;
          $this->importDateTime = $importDateTime;
          $this->lastModifiedDateTime = $lastModifiedDateTime;
          $this->userDefinedCustomTargetingValueIds = $userDefinedCustomTargetingValueIds;
          $this->mappingRuleDefinedCustomTargetingValueIds = $mappingRuleDefinedCustomTargetingValueIds;
          $this->cmsSources = $cmsSources;
      }
  }
}

