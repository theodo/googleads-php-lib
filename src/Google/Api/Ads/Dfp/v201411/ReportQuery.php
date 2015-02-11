<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the ReportService
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


if (!class_exists("ReportQuery", false)) {
    /**
   * A {@code ReportQuery} object allows you to specify the selection criteria for
   * generating a report.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ReportQuery
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ReportQuery";

    /**
     * @access public
     * @var tnsDimension[]
     */
    public $dimensions;

    /**
     * @access public
     * @var tnsReportQueryAdUnitView
     */
    public $adUnitView;

    /**
     * @access public
     * @var tnsColumn[]
     */
    public $columns;

    /**
     * @access public
     * @var tnsDimensionAttribute[]
     */
    public $dimensionAttributes;

    /**
     * @access public
     * @var integer[]
     */
    public $customFieldIds;

    /**
     * @access public
     * @var integer[]
     */
    public $contentMetadataKeyHierarchyCustomTargetingKeyIds;

    /**
     * @access public
     * @var Date
     */
    public $startDate;

    /**
     * @access public
     * @var Date
     */
    public $endDate;

    /**
     * @access public
     * @var tnsDateRangeType
     */
    public $dateRangeType;

    /**
     * @access public
     * @var tnsDimensionFilter[]
     */
    public $dimensionFilters;

    /**
     * @access public
     * @var Statement
     */
    public $statement;

    /**
     * @access public
     * @var string
     */
    public $timeZone;

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

      public function __construct($dimensions = null, $adUnitView = null, $columns = null, $dimensionAttributes = null, $customFieldIds = null, $contentMetadataKeyHierarchyCustomTargetingKeyIds = null, $startDate = null, $endDate = null, $dateRangeType = null, $dimensionFilters = null, $statement = null, $timeZone = null)
      {
          $this->dimensions = $dimensions;
          $this->adUnitView = $adUnitView;
          $this->columns = $columns;
          $this->dimensionAttributes = $dimensionAttributes;
          $this->customFieldIds = $customFieldIds;
          $this->contentMetadataKeyHierarchyCustomTargetingKeyIds = $contentMetadataKeyHierarchyCustomTargetingKeyIds;
          $this->startDate = $startDate;
          $this->endDate = $endDate;
          $this->dateRangeType = $dateRangeType;
          $this->dimensionFilters = $dimensionFilters;
          $this->statement = $statement;
          $this->timeZone = $timeZone;
      }
  }
}

