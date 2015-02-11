<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the NetworkService
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



























































if (!class_exists("NetworkService", false)) {
    /**
   * NetworkService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class NetworkService extends DfpSoapClient
  {

    const SERVICE_NAME = "NetworkService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/NetworkService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/NetworkService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "AuthenticationError" => "AuthenticationError",
      "CommonError" => "CommonError",
      "ExchangeRateError" => "ExchangeRateError",
      "FeatureError" => "FeatureError",
      "InternalApiError" => "InternalApiError",
      "InvalidEmailError" => "InvalidEmailError",
      "Network" => "Network",
      "NetworkError" => "NetworkError",
      "NotNullError" => "NotNullError",
      "ParseError" => "ParseError",
      "PermissionError" => "PermissionError",
      "PrecisionError" => "PrecisionError",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RequiredCollectionError" => "RequiredCollectionError",
      "RequiredError" => "RequiredError",
      "RequiredNumberError" => "RequiredNumberError",
      "ServerError" => "ServerError",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "StatementError" => "StatementError",
      "StringLengthError" => "StringLengthError",
      "TypeError" => "TypeError",
      "UniqueError" => "UniqueError",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "ExchangeRateError.Reason" => "ExchangeRateErrorReason",
      "FeatureError.Reason" => "FeatureErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "InvalidEmailError.Reason" => "InvalidEmailErrorReason",
      "NetworkError.Reason" => "NetworkErrorReason",
      "NotNullError.Reason" => "NotNullErrorReason",
      "ParseError.Reason" => "ParseErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PrecisionError.Reason" => "PrecisionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "RequiredNumberError.Reason" => "RequiredNumberErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "getAllNetworks" => "GetAllNetworks",
      "getAllNetworksResponse" => "GetAllNetworksResponse",
      "getCurrentNetwork" => "GetCurrentNetwork",
      "getCurrentNetworkResponse" => "GetCurrentNetworkResponse",
      "makeTestNetwork" => "MakeTestNetwork",
      "makeTestNetworkResponse" => "MakeTestNetworkResponse",
      "updateNetwork" => "UpdateNetwork",
      "updateNetworkResponse" => "UpdateNetworkResponse",
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
     * Returns the list of {@link Network} objects to which the current login has
     * access.
     * <p>
     * Intended to be used without a network code in the SOAP header when the
     * login may have more than one network associated with it.
     * </p>
     *
     * @return the networks to which the current login has access
     */
    public function getAllNetworks()
    {
        $args = new GetAllNetworks();
        $result = $this->__soapCall("getAllNetworks", array($args));

        return $result->rval;
    }
    /**
     * Returns the current network for which requests are being made.
     *
     * @return the network for which the user is currently making the request
     */
    public function getCurrentNetwork()
    {
        $args = new GetCurrentNetwork();
        $result = $this->__soapCall("getCurrentNetwork", array($args));

        return $result->rval;
    }
    /**
     * Creates a new blank network for testing purposes using the current login.
     * <p>
     * Each login(i.e. email address) can only have one test network. Data from
     * any of your existing networks will not be transferred to the new test network.
     * Once the test network is created, the test network can be used in the API
     * by supplying the {@link Network#networkCode} in the SOAP header or by
     * logging into the DFP UI.
     * <p>
     * Test networks are limited in the following ways:
     * <ul>
     * <li>Test networks cannot serve ads.</li>
     * <li>Because test networks cannot serve ads, reports will always come
     * back without data.</li>
     * <li>Since forecasting requires serving history, forecast service results
     * will be faked. See {@link ForecastService} for more info.</li>
     * <li>Test networks are, by default, small business networks and do not have any
     * premium features. To have additional features turned on, please contact your
     * account manager. </li>
     * <li>Test networks are limited to 10,000 objects per entity type.</li>
     * </ul>
     * </p>
     */
    public function makeTestNetwork()
    {
        $args = new MakeTestNetwork();
        $result = $this->__soapCall("makeTestNetwork", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified network. Currently, only the network display name can
     * be updated.
     *
     * @param network the network that needs to be updated
     * @return the updated network
     */
    public function updateNetwork($network)
    {
        $args = new UpdateNetwork($network);
        $result = $this->__soapCall("updateNetwork", array($args));

        return $result->rval;
    }
  }
}

