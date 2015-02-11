<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the CreativeWrapperService
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









































































if (!class_exists("CreativeWrapperService", false)) {
    /**
   * CreativeWrapperService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CreativeWrapperService extends DfpSoapClient
  {

    const SERVICE_NAME = "CreativeWrapperService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/CreativeWrapperService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/CreativeWrapperService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "ActivateCreativeWrappers" => "ActivateCreativeWrappers",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "AuthenticationError" => "AuthenticationError",
      "BooleanValue" => "BooleanValue",
      "CommonError" => "CommonError",
      "CreativeWrapperAction" => "CreativeWrapperAction",
      "CreativeWrapper" => "CreativeWrapper",
      "CreativeWrapperError" => "CreativeWrapperError",
      "CreativeWrapperPage" => "CreativeWrapperPage",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DeactivateCreativeWrappers" => "DeactivateCreativeWrappers",
      "FeatureError" => "FeatureError",
      "CreativeWrapperHtmlSnippet" => "CreativeWrapperHtmlSnippet",
      "InternalApiError" => "InternalApiError",
      "LabelError" => "LabelError",
      "NotNullError" => "NotNullError",
      "NullError" => "NullError",
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
      "TextValue" => "TextValue",
      "TypeError" => "TypeError",
      "UniqueError" => "UniqueError",
      "UpdateResult" => "UpdateResult",
      "Value" => "Value",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "CreativeWrapperError.Reason" => "CreativeWrapperErrorReason",
      "FeatureError.Reason" => "FeatureErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "CreativeWrapperOrdering" => "CreativeWrapperOrdering",
      "CreativeWrapperStatus" => "CreativeWrapperStatus",
      "LabelError.Reason" => "LabelErrorReason",
      "NotNullError.Reason" => "NotNullErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "ParseError.Reason" => "ParseErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "createCreativeWrappers" => "CreateCreativeWrappers",
      "createCreativeWrappersResponse" => "CreateCreativeWrappersResponse",
      "getCreativeWrappersByStatement" => "GetCreativeWrappersByStatement",
      "getCreativeWrappersByStatementResponse" => "GetCreativeWrappersByStatementResponse",
      "performCreativeWrapperAction" => "PerformCreativeWrapperAction",
      "performCreativeWrapperActionResponse" => "PerformCreativeWrapperActionResponse",
      "updateCreativeWrappers" => "UpdateCreativeWrappers",
      "updateCreativeWrappersResponse" => "UpdateCreativeWrappersResponse",
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
     * Creates a new {@code CreativeWrapper} objects.
     *
     * The following fields are required:
     * <ul>
     * <li>{@link CreativeWrapper#labelId}</li>
     * <li>{@link CreativeWrapper#ordering}</li>
     * <li>{@link CreativeWrapper#header} or {@link CreativeWrapper#footer}</li>
     * </ul>
     *
     * @param creativeWrappers the creative wrappers to create
     * @return the          creative wrappers with their IDs filled in
     * @throws ApiException
     */
    public function createCreativeWrappers($creativeWrappers)
    {
        $args = new CreateCreativeWrappers($creativeWrappers);
        $result = $this->__soapCall("createCreativeWrappers", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link CreativeWrapperPage} of {@link CreativeWrapper}
     * objects that satisfy the given {@link Statement#query}. The following
     * fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link CreativeWrapper#id}</td>
     * </tr>
     * <tr>
     * <td>{@code labelId}</td>
     * <td>{@link CreativeWrapper#labelId}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link CreativeWrapper#status}</td>
     * </tr>
     * <tr>
     * <td>{@code ordering}</td>
     * <td>{@link CreativeWrapper#ordering}</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of creative wrappers.
     * @return the creative wrappers that match the given filter
     */
    public function getCreativeWrappersByStatement($filterStatement)
    {
        $args = new GetCreativeWrappersByStatement($filterStatement);
        $result = $this->__soapCall("getCreativeWrappersByStatement", array($args));

        return $result->rval;
    }
    /**
     * Performs actions on {@link CreativeWrapper} objects that match the
     * given {@link Statement#query}.
     *
     * @param creativeWrapperAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of labels
     * @return the result of the action performed
     */
    public function performCreativeWrapperAction($creativeWrapperAction, $filterStatement)
    {
        $args = new PerformCreativeWrapperAction($creativeWrapperAction, $filterStatement);
        $result = $this->__soapCall("performCreativeWrapperAction", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@code CreativeWrapper} objects.
     *
     * @param creativeWrappers the creative wrappers to update
     * @return the          updated creative wrapper objects
     * @throws ApiException
     */
    public function updateCreativeWrappers($creativeWrappers)
    {
        $args = new UpdateCreativeWrappers($creativeWrappers);
        $result = $this->__soapCall("updateCreativeWrappers", array($args));

        return $result->rval;
    }
  }
}

