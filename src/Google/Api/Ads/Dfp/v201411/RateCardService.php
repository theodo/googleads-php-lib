<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the RateCardService
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


if (!class_exists("RateCardService", false)) {
    /**
   * RateCardService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class RateCardService extends DfpSoapClient
  {

    const SERVICE_NAME = "RateCardService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/RateCardService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/RateCardService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "ActivateRateCards" => "ActivateRateCards",
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
      "DeactivateRateCards" => "DeactivateRateCards",
      "FeatureError" => "FeatureError",
      "InternalApiError" => "InternalApiError",
      "NotNullError" => "NotNullError",
      "NullError" => "NullError",
      "NumberValue" => "NumberValue",
      "ParseError" => "ParseError",
      "PermissionError" => "PermissionError",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RateCardAction" => "RateCardAction",
      "RateCardActionError" => "RateCardActionError",
      "RateCard" => "RateCard",
      "RateCardError" => "RateCardError",
      "RateCardPage" => "RateCardPage",
      "RequiredCollectionError" => "RequiredCollectionError",
      "RequiredError" => "RequiredError",
      "RequiredNumberError" => "RequiredNumberError",
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
      "UpdateResult" => "UpdateResult",
      "Value" => "Value",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "FeatureError.Reason" => "FeatureErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NotNullError.Reason" => "NotNullErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "ParseError.Reason" => "ParseErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RateCardActionError.Reason" => "RateCardActionErrorReason",
      "RateCardError.Reason" => "RateCardErrorReason",
      "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "RequiredNumberError.Reason" => "RequiredNumberErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "RateCardStatus" => "RateCardStatus",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "TeamError.Reason" => "TeamErrorReason",
      "createRateCards" => "CreateRateCards",
      "createRateCardsResponse" => "CreateRateCardsResponse",
      "getRateCardsByStatement" => "GetRateCardsByStatement",
      "getRateCardsByStatementResponse" => "GetRateCardsByStatementResponse",
      "performRateCardAction" => "PerformRateCardAction",
      "performRateCardActionResponse" => "PerformRateCardActionResponse",
      "updateRateCards" => "UpdateRateCards",
      "updateRateCardsResponse" => "UpdateRateCardsResponse",
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
     * Creates a list of {@link RateCard} objects. Rate cards must be activated
     * before being associated with proposal line items and products.
     *
     * @param rateCards the rate cards to be created
     * @return the created rate cards.
     */
    public function createRateCards($rateCards)
    {
        $args = new CreateRateCards($rateCards);
        $result = $this->__soapCall("createRateCards", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link RateCardPage} of {@link RateCard} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link RateCard#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link RateCard#name}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link RateCard#status}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link RateCard#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement to filter a list of rate cards.
     * @return the rate cards that match the filter
     */
    public function getRateCardsByStatement($filterStatement)
    {
        $args = new GetRateCardsByStatement($filterStatement);
        $result = $this->__soapCall("getRateCardsByStatement", array($args));

        return $result->rval;
    }
    /**
     * Performs action on {@link RateCard} objects that satisfy the
     * given {@link Statement#query}.
     *
     * @param rateCardAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of rate cards.
     * @return the result of the action performed
     */
    public function performRateCardAction($rateCardAction, $filterStatement)
    {
        $args = new PerformRateCardAction($rateCardAction, $filterStatement);
        $result = $this->__soapCall("performRateCardAction", array($args));

        return $result->rval;
    }
    /**
     * Updates a list of {@link RateCard} objects.
     *
     * @param rateCards the rate cards to be updated
     * @return the updated rate cards
     */
    public function updateRateCards($rateCards)
    {
        $args = new UpdateRateCards($rateCards);
        $result = $this->__soapCall("updateRateCards", array($args));

        return $result->rval;
    }
  }
}

