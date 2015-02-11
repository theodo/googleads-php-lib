<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the ReconciliationOrderReportService
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













if (!class_exists("ReconciliationOrderReport", false)) {
    /**
   * A {@link ReconciliationOrderReport} represents one order
   * in the reconciliation report.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ReconciliationOrderReport
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "ReconciliationOrderReport";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var integer
     */
    public $reconciliationReportId;

    /**
     * @access public
     * @var integer
     */
    public $orderId;

    /**
     * @access public
     * @var integer
     */
    public $proposalId;

    /**
     * @access public
     * @var tnsReconciliationOrderReportStatus
     */
    public $status;

    /**
     * @access public
     * @var DateTime
     */
    public $submissionDateTime;

    /**
     * @access public
     * @var integer
     */
    public $submitterId;

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

      public function __construct($id = null, $reconciliationReportId = null, $orderId = null, $proposalId = null, $status = null, $submissionDateTime = null, $submitterId = null)
      {
          $this->id = $id;
          $this->reconciliationReportId = $reconciliationReportId;
          $this->orderId = $orderId;
          $this->proposalId = $proposalId;
          $this->status = $status;
          $this->submissionDateTime = $submissionDateTime;
          $this->submitterId = $submitterId;
      }
  }
}

