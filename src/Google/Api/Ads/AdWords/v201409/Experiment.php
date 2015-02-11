<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the ExperimentService
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








if (!class_exists("Experiment", false)) {
    /**
   * Class representing a experiment for the ExperimentService.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class Experiment
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "Experiment";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var integer
     */
    public $controlId;

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var tnsExperimentStatus
     */
    public $status;

    /**
     * @access public
     * @var tnsExperimentServingStatus
     */
    public $servingStatus;

    /**
     * @access public
     * @var integer
     */
    public $queryPercentage;

    /**
     * @access public
     * @var string
     */
    public $startDateTime;

    /**
     * @access public
     * @var string
     */
    public $endDateTime;

    /**
     * @access public
     * @var string
     */
    public $lastModifiedDateTime;

    /**
     * @access public
     * @var ExperimentSummaryStats
     */
    public $experimentSummaryStats;

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

      public function __construct($id = null, $controlId = null, $campaignId = null, $name = null, $status = null, $servingStatus = null, $queryPercentage = null, $startDateTime = null, $endDateTime = null, $lastModifiedDateTime = null, $experimentSummaryStats = null)
      {
          $this->id = $id;
          $this->controlId = $controlId;
          $this->campaignId = $campaignId;
          $this->name = $name;
          $this->status = $status;
          $this->servingStatus = $servingStatus;
          $this->queryPercentage = $queryPercentage;
          $this->startDateTime = $startDateTime;
          $this->endDateTime = $endDateTime;
          $this->lastModifiedDateTime = $lastModifiedDateTime;
          $this->experimentSummaryStats = $experimentSummaryStats;
      }
  }
}

