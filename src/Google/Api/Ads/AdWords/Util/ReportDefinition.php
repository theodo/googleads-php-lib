<?php
namespace Google\Api\Ads\AdWords\Util ;

/**
 * A collection of utility methods for working with reports.
 *
 * PHP version 5
 *
 * Copyright 2011, Google Inc. All Rights Reserved.
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
 * @package    GoogleApiAdsAdWords
 * @subpackage Util
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
 * @author     Vincent Tsao
 */
use  \Google\Api\Ads\AdWords\Lib\AdWordsUser ;
use  \Google\Api\Ads\Common\Util\CurlUtils ;
use  \Google\Api\Ads\Common\Util\DeprecationUtils ;
use  \Google\Api\Ads\Common\Util\Logger ;
use  \Google\Api\Ads\Common\Util\XmlUtils ;

/**
 * A collection of utility methods for working with reports.
 * @package GoogleApiAdsAdWords
 * @subpackage Util
 */

/**
 * \Exception class for an error that occurs while downloading a report.
 * @package GoogleApiAdsAdWords
 * @subpackage Util
 */

if (!class_exists("ReportDefinition", false)) {
    /**
   * Represents a report definition.
   * @package GoogleApiAdsAdWords
   * @subpackage Util
   */
  class ReportDefinition
  {
    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var Selector
     */
    public $selector;

    /**
     * @access public
     * @var string
     */
    public $reportName;

    /**
     * @access public
     * @var tnsReportDefinitionReportType
     */
    public $reportType;

    /**
     * @access public
     * @var boolean
     */
    public $hasAttachment;

    /**
     * @access public
     * @var tnsReportDefinitionDateRangeType
     */
    public $dateRangeType;

    /**
     * @access public
     * @var tnsDownloadFormat
     */
    public $downloadFormat;

    /**
     * @access public
     * @var string
     */
    public $creationTime;

    /**
     * @access public
     * @var boolean
     */
    public $includeZeroImpressions;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "";
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "ReportDefinition";
    }

      public function __construct($id = null, $selector = null, $reportName = null, $reportType = null, $hasAttachment = null, $dateRangeType = null, $downloadFormat = null, $creationTime = null, $includeZeroImpressions = null)
      {
          $this->id = $id;
          $this->selector = $selector;
          $this->reportName = $reportName;
          $this->reportType = $reportType;
          $this->hasAttachment = $hasAttachment;
          $this->dateRangeType = $dateRangeType;
          $this->downloadFormat = $downloadFormat;
          $this->creationTime = $creationTime;
          $this->includeZeroImpressions = $includeZeroImpressions;
      }
  }
}

