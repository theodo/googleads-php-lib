<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the ExchangeRateService
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


if (!class_exists("ExchangeRateService", false)) {
    /**
   * ExchangeRateService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ExchangeRateService extends DfpSoapClient
  {

    const SERVICE_NAME = "ExchangeRateService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/ExchangeRateService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/ExchangeRateService";
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
      "DeleteExchangeRates" => "DeleteExchangeRates",
      "ExchangeRateAction" => "ExchangeRateAction",
      "ExchangeRate" => "ExchangeRate",
      "ExchangeRateError" => "ExchangeRateError",
      "ExchangeRatePage" => "ExchangeRatePage",
      "FeatureError" => "FeatureError",
      "InternalApiError" => "InternalApiError",
      "NotNullError" => "NotNullError",
      "NumberValue" => "NumberValue",
      "PermissionError" => "PermissionError",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RequiredNumberError" => "RequiredNumberError",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "TextValue" => "TextValue",
      "UniqueError" => "UniqueError",
      "UpdateResult" => "UpdateResult",
      "Value" => "Value",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "ExchangeRateDirection" => "ExchangeRateDirection",
      "ExchangeRateError.Reason" => "ExchangeRateErrorReason",
      "ExchangeRateRefreshRate" => "ExchangeRateRefreshRate",
      "FeatureError.Reason" => "FeatureErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NotNullError.Reason" => "NotNullErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RequiredNumberError.Reason" => "RequiredNumberErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "createExchangeRates" => "CreateExchangeRates",
      "createExchangeRatesResponse" => "CreateExchangeRatesResponse",
      "getExchangeRatesByStatement" => "GetExchangeRatesByStatement",
      "getExchangeRatesByStatementResponse" => "GetExchangeRatesByStatementResponse",
      "performExchangeRateAction" => "PerformExchangeRateAction",
      "performExchangeRateActionResponse" => "PerformExchangeRateActionResponse",
      "updateExchangeRates" => "UpdateExchangeRates",
      "updateExchangeRatesResponse" => "UpdateExchangeRatesResponse",
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
     * Creates new {@link ExchangeRate} objects.
     *
     * For each exchange rate, the following fields are required:
     * <ul>
     * <li>{@link ExchangeRate#currencyCode}</li>
     * <li>{@link ExchangeRate#exchangeRate} when {@link ExchangeRate#refreshRate} is
     * {@link ExchangeRateRefreshRate#FIXED}</li>
     * </ul>
     *
     * @param exchangeRates the exchange rates to create
     * @return the created exchange rates with their exchange rate values filled in
     */
    public function createExchangeRates($exchangeRates)
    {
        $args = new CreateExchangeRates($exchangeRates);
        $result = $this->__soapCall("createExchangeRates", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link ExchangeRatePage} of {@link ExchangeRate} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ExchangeRate#id}</td>
     * </tr>
     * <tr>
     * <td>{@code currencyCode}</td>
     * <td>{@link ExchangeRate#currencyCode}</td>
     * </tr>
     * <tr>
     * <td>{@code refreshRate}</td>
     * <td>{@link ExchangeRate#refreshRate}</td>
     * </tr>
     * <tr>
     * <td>{@code direction}</td>
     * <td>{@link ExchangeRate#direction}</td>
     * </tr>
     * <tr>
     * <td>{@code exchangeRate}</td>
     * <td>{@link ExchangeRate#exchangeRate}</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of exchange rates
     * @return the exchange rates that match the given filter
     */
    public function getExchangeRatesByStatement($filterStatement)
    {
        $args = new GetExchangeRatesByStatement($filterStatement);
        $result = $this->__soapCall("getExchangeRatesByStatement", array($args));

        return $result->rval;
    }
    /**
     * Performs an action on {@link ExchangeRate} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ExchangeRate#id}</td>
     * </tr>
     * <tr>
     * <td>{@code currencyCode}</td>
     * <td>{@link ExchangeRate#currencyCode}</td>
     * </tr>
     * <tr>
     * <td>{@code refreshRate}</td>
     * <td>{@link ExchangeRate#refreshRate}</td>
     * </tr>
     * <tr>
     * <td>{@code direction}</td>
     * <td>{@link ExchangeRate#direction}</td>
     * </tr>
     * <tr>
     * <td>{@code exchangeRate}</td>
     * <td>{@link ExchangeRate#exchangeRate}</td>
     * </tr>
     * </table>
     *
     * @param exchangeRateAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of exchange rates
     * @return the result of the action performed
     */
    public function performExchangeRateAction($exchangeRateAction, $filterStatement)
    {
        $args = new PerformExchangeRateAction($exchangeRateAction, $filterStatement);
        $result = $this->__soapCall("performExchangeRateAction", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link ExchangeRate} objects.
     *
     * @param exchangeRates the exchange rates to update
     * @return the updated exchange rates
     */
    public function updateExchangeRates($exchangeRates)
    {
        $args = new UpdateExchangeRates($exchangeRates);
        $result = $this->__soapCall("updateExchangeRates", array($args));

        return $result->rval;
    }
  }
}

