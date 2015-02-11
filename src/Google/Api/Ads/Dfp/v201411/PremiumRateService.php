<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the PremiumRateService
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
















































































if (!class_exists("PremiumRateService", false)) {
    /**
   * PremiumRateService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class PremiumRateService extends DfpSoapClient
  {

    const SERVICE_NAME = "PremiumRateService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/PremiumRateService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/PremiumRateService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "AdUnitPremiumFeature" => "AdUnitPremiumFeature",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "AudienceSegmentPremiumFeature" => "AudienceSegmentPremiumFeature",
      "AuthenticationError" => "AuthenticationError",
      "BandwidthPremiumFeature" => "BandwidthPremiumFeature",
      "BooleanValue" => "BooleanValue",
      "BrowserPremiumFeature" => "BrowserPremiumFeature",
      "BrowserLanguagePremiumFeature" => "BrowserLanguagePremiumFeature",
      "CommonError" => "CommonError",
      "CustomTargetingPremiumFeature" => "CustomTargetingPremiumFeature",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DaypartPremiumFeature" => "DaypartPremiumFeature",
      "DeviceCapabilityPremiumFeature" => "DeviceCapabilityPremiumFeature",
      "DeviceCategoryPremiumFeature" => "DeviceCategoryPremiumFeature",
      "DeviceManufacturerPremiumFeature" => "DeviceManufacturerPremiumFeature",
      "FeatureError" => "FeatureError",
      "FrequencyCapPremiumFeature" => "FrequencyCapPremiumFeature",
      "GeographyPremiumFeature" => "GeographyPremiumFeature",
      "InternalApiError" => "InternalApiError",
      "MobileCarrierPremiumFeature" => "MobileCarrierPremiumFeature",
      "NotNullError" => "NotNullError",
      "NullError" => "NullError",
      "NumberValue" => "NumberValue",
      "OperatingSystemPremiumFeature" => "OperatingSystemPremiumFeature",
      "PermissionError" => "PermissionError",
      "PlacementPremiumFeature" => "PlacementPremiumFeature",
      "PremiumFeature" => "PremiumFeature",
      "PremiumRate" => "PremiumRate",
      "PremiumRateError" => "PremiumRateError",
      "PremiumRatePage" => "PremiumRatePage",
      "PremiumRateValue" => "PremiumRateValue",
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
      "UnknownPremiumFeature" => "UnknownPremiumFeature",
      "UserDomainPremiumFeature" => "UserDomainPremiumFeature",
      "Value" => "Value",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "FeatureError.Reason" => "FeatureErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NotNullError.Reason" => "NotNullErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PremiumAdjustmentType" => "PremiumAdjustmentType",
      "PremiumRateError.Reason" => "PremiumRateErrorReason",
      "PricingMethod" => "PricingMethod",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RateType" => "RateType",
      "RequiredError.Reason" => "RequiredErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "createPremiumRates" => "CreatePremiumRates",
      "createPremiumRatesResponse" => "CreatePremiumRatesResponse",
      "getPremiumRatesByStatement" => "GetPremiumRatesByStatement",
      "getPremiumRatesByStatementResponse" => "GetPremiumRatesByStatementResponse",
      "updatePremiumRates" => "UpdatePremiumRates",
      "updatePremiumRatesResponse" => "UpdatePremiumRatesResponse",
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
     * Creates a list of new {@link PremiumRate} objects.
     *
     * @param premiumRates the premium rates to be created
     * @return the premium rates with their IDs filled in
     */
    public function createPremiumRates($premiumRates)
    {
        $args = new CreatePremiumRates($premiumRates);
        $result = $this->__soapCall("createPremiumRates", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link PremiumRatePage} of {@link PremiumRate} objects that
     * satisfy the given {@link Statement#query}. The following fields are
     * supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link PremiumRate#id}</td>
     * </tr>
     * <tr>
     * <td>{@code rateCardId}</td>
     * <td>{@link PremiumRate#rateCardId}</td>
     * </tr>
     * <tr>
     * <td>{@code pricingMethod}</td>
     * <td>{@link PremiumRate#pricingMethod}</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement to filter a
     * list of premium rates.
     * @return the premium rates that match the filter
     */
    public function getPremiumRatesByStatement($filterStatement)
    {
        $args = new GetPremiumRatesByStatement($filterStatement);
        $result = $this->__soapCall("getPremiumRatesByStatement", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link PremiumRate} objects.
     *
     * @param premiumRates the premium rates to be updated
     * @return the updated premium rates
     */
    public function updatePremiumRates($premiumRates)
    {
        $args = new UpdatePremiumRates($premiumRates);
        $result = $this->__soapCall("updatePremiumRates", array($args));

        return $result->rval;
    }
  }
}

