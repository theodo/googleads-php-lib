<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the ReconciliationReportService
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


if (!class_exists("ReconciliationReportService", false)) {
    /**
   * ReconciliationReportService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ReconciliationReportService extends DfpSoapClient
  {

    const SERVICE_NAME = "ReconciliationReportService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/ReconciliationReportService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/ReconciliationReportService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "AuthenticationError" => "AuthenticationError",
      "BooleanValue" => "BooleanValue",
      "CommonError" => "CommonError",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "FeatureError" => "FeatureError",
      "InternalApiError" => "InternalApiError",
      "NotNullError" => "NotNullError",
      "NullError" => "NullError",
      "NumberValue" => "NumberValue",
      "PermissionError" => "PermissionError",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RangeError" => "RangeError",
      "ReconciliationError" => "ReconciliationError",
      "ReconciliationImportError" => "ReconciliationImportError",
      "ReconciliationReport" => "ReconciliationReport",
      "ReconciliationReportPage" => "ReconciliationReportPage",
      "RequiredError" => "RequiredError",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "TextValue" => "TextValue",
      "Value" => "Value",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "FeatureError.Reason" => "FeatureErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NotNullError.Reason" => "NotNullErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "ReconciliationError.Reason" => "ReconciliationErrorReason",
      "ReconciliationImportError.Reason" => "ReconciliationImportErrorReason",
      "ReconciliationReportStatus" => "ReconciliationReportStatus",
      "RequiredError.Reason" => "RequiredErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "getReconciliationReportsByStatement" => "GetReconciliationReportsByStatement",
      "getReconciliationReportsByStatementResponse" => "GetReconciliationReportsByStatementResponse",
      "updateReconciliationReports" => "UpdateReconciliationReports",
      "updateReconciliationReportsResponse" => "UpdateReconciliationReportsResponse",
    );

    /**
     * Constructor using wsdl location and options array
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the \SoapClient
     */
    public function __construct($wsdl, $options, $user)
    {
        $options["classmap"] = self::$classmap;
        parent::__construct($wsdl, $options, $user, self::SERVICE_NAME,
          self::WSDL_NAMESPACE);
    }
    /**
     * Gets an {@link ReconciliationReportPage} of {@link ReconciliationReport} objects that satisfy
     * the given {@link Statement#query}. The following fields are supported for filtering.
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ReconciliationReport#id}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link ReconciliationReport#status}</td>
     * </tr>
     * <tr>
     * <td>{@code startDate}</td>
     * <td>{@link ReconciliationReport#startDate}</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement used to
     * filter a set of reconciliation reports
     * @return the reconciliation reports that match the given filter
     */
    public function getReconciliationReportsByStatement($filterStatement)
    {
        $args = new GetReconciliationReportsByStatement($filterStatement);
        $result = $this->__soapCall("getReconciliationReportsByStatement", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link ReconciliationReport} objects.
     *
     * @param reconciliationReports the reconciliation reports to update
     * @return the          updated reconciliation reports
     * @throws ApiException
     */
    public function updateReconciliationReports($reconciliationReports)
    {
        $args = new UpdateReconciliationReports($reconciliationReports);
        $result = $this->__soapCall("updateReconciliationReports", array($args));

        return $result->rval;
    }
  }
}

