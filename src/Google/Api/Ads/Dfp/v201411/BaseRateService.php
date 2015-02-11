<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the BaseRateService
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





































































if (!class_exists("BaseRateService", false)) {
    /**
   * BaseRateService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class BaseRateService extends DfpSoapClient
  {

    const SERVICE_NAME = "BaseRateService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/BaseRateService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/BaseRateService";
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
      "BaseRateAction" => "BaseRateAction",
      "BaseRateActionError" => "BaseRateActionError",
      "BaseRate" => "BaseRate",
      "BaseRateError" => "BaseRateError",
      "BaseRatePage" => "BaseRatePage",
      "BooleanValue" => "BooleanValue",
      "CommonError" => "CommonError",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DeleteBaseRates" => "DeleteBaseRates",
      "FeatureError" => "FeatureError",
      "InternalApiError" => "InternalApiError",
      "Money" => "Money",
      "NotNullError" => "NotNullError",
      "NullError" => "NullError",
      "NumberValue" => "NumberValue",
      "PermissionError" => "PermissionError",
      "ProductBaseRate" => "ProductBaseRate",
      "ProductTemplateBaseRate" => "ProductTemplateBaseRate",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RangeError" => "RangeError",
      "RequiredError" => "RequiredError",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "TextValue" => "TextValue",
      "UnknownBaseRate" => "UnknownBaseRate",
      "UpdateResult" => "UpdateResult",
      "Value" => "Value",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "BaseRateActionError.Reason" => "BaseRateActionErrorReason",
      "BaseRateError.Reason" => "BaseRateErrorReason",
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
      "RequiredError.Reason" => "RequiredErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "createBaseRates" => "CreateBaseRates",
      "createBaseRatesResponse" => "CreateBaseRatesResponse",
      "getBaseRatesByStatement" => "GetBaseRatesByStatement",
      "getBaseRatesByStatementResponse" => "GetBaseRatesByStatementResponse",
      "performBaseRateAction" => "PerformBaseRateAction",
      "performBaseRateActionResponse" => "PerformBaseRateActionResponse",
      "updateBaseRates" => "UpdateBaseRates",
      "updateBaseRatesResponse" => "UpdateBaseRatesResponse",
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
     * Creates a list of new {@link BaseRate} objects.
     *
     * @param baseRates the base rates to be created
     * @return the base rates with their IDs filled in
     */
    public function createBaseRates($baseRates)
    {
        $args = new CreateBaseRates($baseRates);
        $result = $this->__soapCall("createBaseRates", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link BaseRatePage} of {@link BaseRate} objects that satisfy the given
     * {@link Statement#query}.
     *
     * The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th>
     * <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code rateCardId}</td>
     * <td>{@link BaseRate#rateCardId}</td>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link BaseRate#id}</td>
     * </tr>
     * <tr>
     * <td>{@code productTemplateId}</td>
     * <td>{@link ProductTemplateBaseRate#id}<br><b>Note:</b>&nbsp;Cannot be
     * combined with {@code productId}.
     * </tr>
     * <td>{@code productId}</td>
     * <td>{@link ProductBaseRate#id}<br><b>Note:</b>&nbsp;Cannot be combined with
     * {@code productTemplateId}.
     * </tr>
     *
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of base rates.
     * @return the page of base rates that match the given filter
     */
    public function getBaseRatesByStatement($filterStatement)
    {
        $args = new GetBaseRatesByStatement($filterStatement);
        $result = $this->__soapCall("getBaseRatesByStatement", array($args));

        return $result->rval;
    }
    /**
     * Performs actions on {@link BaseRate} objects that satisfy the given
     * {@link Statement#query}.
     *
     * @param baseRateAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of base rates.
     * @return the result of the action performed
     */
    public function performBaseRateAction($baseRateAction, $filterStatement)
    {
        $args = new PerformBaseRateAction($baseRateAction, $filterStatement);
        $result = $this->__soapCall("performBaseRateAction", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link BaseRate} objects.
     *
     * @param baseRates the base rates to be updated
     * @return the updated base rates
     */
    public function updateBaseRates($baseRates)
    {
        $args = new UpdateBaseRates($baseRates);
        $result = $this->__soapCall("updateBaseRates", array($args));

        return $result->rval;
    }
  }
}

