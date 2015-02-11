<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the ReportDefinitionService
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


if (!class_exists("ReportDefinitionField", false)) {
    /**
   * Represents the fields that can be used to create a ReportDefinition.
   * This class allows the user to query the list of fields applicable to a
   * given report type. Consumers of reports will be able use the retrieved
   * fields through the {@link ReportDefinitionService#getReportFields}
   * api and run the corresponding reports.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class ReportDefinitionField
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "ReportDefinitionField";

    /**
     * @access public
     * @var string
     */
    public $fieldName;

    /**
     * @access public
     * @var string
     */
    public $displayFieldName;

    /**
     * @access public
     * @var string
     */
    public $xmlAttributeName;

    /**
     * @access public
     * @var string
     */
    public $fieldType;

    /**
     * @access public
     * @var string
     */
    public $fieldBehavior;

    /**
     * @access public
     * @var string[]
     */
    public $enumValues;

    /**
     * @access public
     * @var boolean
     */
    public $canSelect;

    /**
     * @access public
     * @var boolean
     */
    public $canFilter;

    /**
     * @access public
     * @var boolean
     */
    public $isEnumType;

    /**
     * @access public
     * @var boolean
     */
    public $isBeta;

    /**
     * @access public
     * @var boolean
     */
    public $isZeroRowCompatible;

    /**
     * @access public
     * @var EnumValuePair[]
     */
    public $enumValuePairs;

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

      public function __construct($fieldName = null, $displayFieldName = null, $xmlAttributeName = null, $fieldType = null, $fieldBehavior = null, $enumValues = null, $canSelect = null, $canFilter = null, $isEnumType = null, $isBeta = null, $isZeroRowCompatible = null, $enumValuePairs = null)
      {
          $this->fieldName = $fieldName;
          $this->displayFieldName = $displayFieldName;
          $this->xmlAttributeName = $xmlAttributeName;
          $this->fieldType = $fieldType;
          $this->fieldBehavior = $fieldBehavior;
          $this->enumValues = $enumValues;
          $this->canSelect = $canSelect;
          $this->canFilter = $canFilter;
          $this->isEnumType = $isEnumType;
          $this->isBeta = $isBeta;
          $this->isZeroRowCompatible = $isZeroRowCompatible;
          $this->enumValuePairs = $enumValuePairs;
      }
  }
}

