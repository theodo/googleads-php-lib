<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the CompanyService
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


if (!class_exists("CompanyService", false)) {
    /**
   * CompanyService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CompanyService extends DfpSoapClient
  {

    const SERVICE_NAME = "CompanyService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/CompanyService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/CompanyService";
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
      "AppliedLabel" => "AppliedLabel",
      "AuthenticationError" => "AuthenticationError",
      "AvailableBillingError" => "AvailableBillingError",
      "BooleanValue" => "BooleanValue",
      "CommonError" => "CommonError",
      "CompanyCreditStatusError" => "CompanyCreditStatusError",
      "Company" => "Company",
      "CompanyError" => "CompanyError",
      "CompanyPage" => "CompanyPage",
      "CrossSellError" => "CrossSellError",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "FeatureError" => "FeatureError",
      "InternalApiError" => "InternalApiError",
      "InvalidEmailError" => "InvalidEmailError",
      "LabelEntityAssociationError" => "LabelEntityAssociationError",
      "NotNullError" => "NotNullError",
      "NumberValue" => "NumberValue",
      "ParseError" => "ParseError",
      "PermissionError" => "PermissionError",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RequiredError" => "RequiredError",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "StringLengthError" => "StringLengthError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "TeamError" => "TeamError",
      "TextValue" => "TextValue",
      "TypeError" => "TypeError",
      "UniqueError" => "UniqueError",
      "Value" => "Value",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "AvailableBillingError.Reason" => "AvailableBillingErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "CompanyCreditStatusError.Reason" => "CompanyCreditStatusErrorReason",
      "Company.CreditStatus" => "CompanyCreditStatus",
      "Company.Type" => "CompanyType",
      "CompanyError.Reason" => "CompanyErrorReason",
      "CrossSellError.Reason" => "CrossSellErrorReason",
      "FeatureError.Reason" => "FeatureErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "InvalidEmailError.Reason" => "InvalidEmailErrorReason",
      "LabelEntityAssociationError.Reason" => "LabelEntityAssociationErrorReason",
      "NotNullError.Reason" => "NotNullErrorReason",
      "ParseError.Reason" => "ParseErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "TeamError.Reason" => "TeamErrorReason",
      "createCompanies" => "CreateCompanies",
      "createCompaniesResponse" => "CreateCompaniesResponse",
      "getCompaniesByStatement" => "GetCompaniesByStatement",
      "getCompaniesByStatementResponse" => "GetCompaniesByStatementResponse",
      "updateCompanies" => "UpdateCompanies",
      "updateCompaniesResponse" => "UpdateCompaniesResponse",
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
     * Creates new {@link Company} objects.
     *
     * @param companies the companies to create
     * @return the created companies with their IDs filled in
     */
    public function createCompanies($companies)
    {
        $args = new CreateCompanies($companies);
        $result = $this->__soapCall("createCompanies", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link CompanyPage} of {@link Company} objects that satisfy the
     * given {@link Statement#query}. The following fields are supported for
     * filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Company#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Company#name}</td>
     * </tr>
     * <tr>
     * <td>{@code type}</td>
     * <td>{@link Company#type}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link Company#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of companies
     * @return the companies that match the given filter
     */
    public function getCompaniesByStatement($filterStatement)
    {
        $args = new GetCompaniesByStatement($filterStatement);
        $result = $this->__soapCall("getCompaniesByStatement", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link Company} objects.
     *
     * @param companies the companies to update
     * @return the updated companies
     */
    public function updateCompanies($companies)
    {
        $args = new UpdateCompanies($companies);
        $result = $this->__soapCall("updateCompanies", array($args));

        return $result->rval;
    }
  }
}

