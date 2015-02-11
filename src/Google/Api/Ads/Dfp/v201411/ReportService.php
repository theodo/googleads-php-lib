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



































































if (!class_exists("ReportService", false)) {
    /**
   * ReportService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ReportService extends DfpSoapClient
  {

    const SERVICE_NAME = "ReportService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/ReportService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/ReportService";
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
      "NumberValue" => "NumberValue",
      "ParseError" => "ParseError",
      "PermissionError" => "PermissionError",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "ReportDownloadOptions" => "ReportDownloadOptions",
      "ReportError" => "ReportError",
      "ReportJob" => "ReportJob",
      "ReportQuery" => "ReportQuery",
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
      "ReportQuery.AdUnitView" => "ReportQueryAdUnitView",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "Column" => "Column",
      "CommonError.Reason" => "CommonErrorReason",
      "DateRangeType" => "DateRangeType",
      "Dimension" => "Dimension",
      "DimensionAttribute" => "DimensionAttribute",
      "DimensionFilter" => "DimensionFilter",
      "ExportFormat" => "ExportFormat",
      "FeatureError.Reason" => "FeatureErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NotNullError.Reason" => "NotNullErrorReason",
      "ParseError.Reason" => "ParseErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "ReportError.Reason" => "ReportErrorReason",
      "ReportJobStatus" => "ReportJobStatus",
      "RequiredError.Reason" => "RequiredErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "getReportDownloadURL" => "GetReportDownloadURL",
      "getReportDownloadURLResponse" => "GetReportDownloadURLResponse",
      "getReportDownloadUrlWithOptions" => "GetReportDownloadUrlWithOptions",
      "getReportDownloadUrlWithOptionsResponse" => "GetReportDownloadUrlWithOptionsResponse",
      "getReportJob" => "GetReportJob",
      "getReportJobResponse" => "GetReportJobResponse",
      "runReportJob" => "RunReportJob",
      "runReportJobResponse" => "RunReportJobResponse",
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
     * Returns the URL at which the report file can be downloaded.
     * <p>
     * The report will be generated as a gzip archive, containing the report file itself.
     *
     * @param reportJobId the ID of the {@link ReportJob}
     * @param exportFormat the {@link ExportFormat} for the report file
     * @return the URL for report file download
     */
    public function getReportDownloadURL($reportJobId, $exportFormat)
    {
        $args = new GetReportDownloadURL($reportJobId, $exportFormat);
        $result = $this->__soapCall("getReportDownloadURL", array($args));

        return $result->rval;
    }
    /**
     * Returns the URL at which the report file can be downloaded, and allows for customization
     * of the downloaded report.
     * <p>
     * By default, the report will be generated as a gzip archive, containing the report file itself.
     * This can be changed by setting {@link ReportDownloadOptions#useGzipCompression} to false.
     *
     * @param reportJobId the ID of the {@link ReportJob}
     * @param reportDownloadOptions the {@link ReportDownloadOptions} for the request
     * @return the URL for report file download
     */
    public function getReportDownloadUrlWithOptions($reportJobId, $reportDownloadOptions)
    {
        $args = new GetReportDownloadUrlWithOptions($reportJobId, $reportDownloadOptions);
        $result = $this->__soapCall("getReportDownloadUrlWithOptions", array($args));

        return $result->rval;
    }
    /**
     * Returns the {@link ReportJob} uniquely identified by the given ID.
     *
     * @param reportJobId the Id of the report job which must already exist
     * @return the {@code ReportJob} uniquely identified by the given ID
     */
    public function getReportJob($reportJobId)
    {
        $args = new GetReportJob($reportJobId);
        $result = $this->__soapCall("getReportJob", array($args));

        return $result->rval;
    }
    /**
     * Initiates the execution of a {@link ReportQuery} on the server.
     *
     * <p>The following fields are required:
     * <ul>
     * <li>{@link ReportJob#reportQuery}</li>
     * </ul>
     *
     * @param reportJob the report job to run
     * @return the report job with its ID filled in
     */
    public function runReportJob($reportJob)
    {
        $args = new RunReportJob($reportJob);
        $result = $this->__soapCall("runReportJob", array($args));

        return $result->rval;
    }
  }
}

