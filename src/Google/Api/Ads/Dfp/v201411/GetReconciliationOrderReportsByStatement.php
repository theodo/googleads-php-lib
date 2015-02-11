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


if (!class_exists("GetReconciliationOrderReportsByStatement", false)) {
    /**
   * Gets an {@link ReconciliationOrderReportPage} of {@link ReconciliationOrderReport} objects
   * that satisfy the given {@link Statement#query}.
   * The following fields are supported for filtering:
   *
   * <table>
   * <tr>
   * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
   * </tr>
   * <tr>
   * <td>{@code reconciliationReportId}</td>
   * <td>{@link ReconciliationOrderReport#reconciliationReportId}</td>
   * </tr>
   * <tr>
   * <td>{@code id}</td>
   * <td>{@link ReconciliationOrderReport#id}</td>
   * </tr>
   * <tr>
   * <td>{@code orderId}</td>
   * <td>{@link ReconciliationOrderReport#orderId}</td>
   * </tr>
   * <tr>
   * <td>{@code proposalId}</td>
   * <td>{@link ReconciliationOrderReport#proposalId}</td>
   * </tr>
   * <tr>
   * <td>{@code status}</td>
   * <td>{@link ReconciliationOrderReport#status}</td>
   * </tr>
   * <tr>
   * <td>{@code submissionDateTime}</td>
   * <td>{@link ReconciliationOrderReport#submissionDateTime}</td>
   * </tr>
   * <tr>
   * <td>{@code submitterId}</td>
   * <td>{@link ReconciliationOrderReport#submitterId}</td>
   * </tr>
   * </table>
   *
   * The {@code reconciliationReportId} field is required and can only be combined with an
   * {@code AND} to other conditions. Furthermore, the results may only belong to
   * one {@link ReconciliationReport}.
   *
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of reconciliation order reports.
   * @return the reconciliation order reports that match the given filter.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class GetReconciliationOrderReportsByStatement
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var Statement
     */
    public $filterStatement;

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

      public function __construct($filterStatement = null)
      {
          $this->filterStatement = $filterStatement;
      }
  }
}

