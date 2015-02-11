<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the WorkflowRequestService
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


if (!class_exists("WorkflowRequest", false)) {
    /**
   * A {@code WorkflowRequest} represents a workflow action unit that requires external or manual
   * interference.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class WorkflowRequest
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "WorkflowRequest";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var string
     */
    public $workflowRuleName;

    /**
     * @access public
     * @var integer
     */
    public $entityId;

    /**
     * @access public
     * @var tnsWorkflowEntityType
     */
    public $entityType;

    /**
     * @access public
     * @var tnsWorkflowRequestType
     */
    public $type;

    /**
     * @access public
     * @var string
     */
    public $WorkflowRequestType;
      private $_parameterMap = array(
      "WorkflowRequest.Type" => "WorkflowRequestType",
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

      public function __construct($id = null, $workflowRuleName = null, $entityId = null, $entityType = null, $type = null, $WorkflowRequestType = null)
      {
          $this->id = $id;
          $this->workflowRuleName = $workflowRuleName;
          $this->entityId = $entityId;
          $this->entityType = $entityType;
          $this->type = $type;
          $this->WorkflowRequestType = $WorkflowRequestType;
      }
  }
}

