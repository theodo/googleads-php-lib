<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the LabelService
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







































































if (!class_exists("LabelService", false)) {
    /**
   * LabelService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class LabelService extends DfpSoapClient
  {

    const SERVICE_NAME = "LabelService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/LabelService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/LabelService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "ActivateLabels" => "ActivateLabels",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "AuthenticationError" => "AuthenticationError",
      "BooleanValue" => "BooleanValue",
      "CommonError" => "CommonError",
      "CreativeWrapperError" => "CreativeWrapperError",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DeactivateLabels" => "DeactivateLabels",
      "FeatureError" => "FeatureError",
      "InternalApiError" => "InternalApiError",
      "LabelAction" => "LabelAction",
      "Label" => "Label",
      "LabelError" => "LabelError",
      "LabelPage" => "LabelPage",
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
      "LabelError.Reason" => "LabelErrorReason",
      "LabelType" => "LabelType",
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
      "createLabels" => "CreateLabels",
      "createLabelsResponse" => "CreateLabelsResponse",
      "getLabelsByStatement" => "GetLabelsByStatement",
      "getLabelsByStatementResponse" => "GetLabelsByStatementResponse",
      "performLabelAction" => "PerformLabelAction",
      "performLabelActionResponse" => "PerformLabelActionResponse",
      "updateLabels" => "UpdateLabels",
      "updateLabelsResponse" => "UpdateLabelsResponse",
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
     * Creates new {@link Label} objects.
     *
     * @param labels the labels to create
     * @return the created labels with their IDs filled in
     */
    public function createLabels($labels)
    {
        $args = new CreateLabels($labels);
        $result = $this->__soapCall("createLabels", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link LabelPage} of {@link Label} objects that satisfy the
     * given {@link Statement#query}. The following fields are supported for
     * filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Label#id}</td>
     * </tr>
     * <tr>
     * <td>{@code type}</td>
     * <td>{@link Label#type}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Label#name}</td>
     * </tr>
     * <tr>
     * <td>{@code description}</td>
     * <td>{@link Label#description}</td>
     * </tr>
     * <tr>
     * <td>{@code isActive}</td>
     * <td>{@link Label#isActive}</td>
     * </tr>
     * </table>
     *
     *
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of labels.
     * @return the labels that match the given filter
     */
    public function getLabelsByStatement($filterStatement)
    {
        $args = new GetLabelsByStatement($filterStatement);
        $result = $this->__soapCall("getLabelsByStatement", array($args));

        return $result->rval;
    }
    /**
     * Performs actions on {@link Label} objects that match the given
     * {@link Statement#query}.
     *
     * @param labelAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of labels
     * @return the result of the action performed
     */
    public function performLabelAction($labelAction, $filterStatement)
    {
        $args = new PerformLabelAction($labelAction, $filterStatement);
        $result = $this->__soapCall("performLabelAction", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link Label} objects.
     *
     * @param labels the labels to update
     * @return the updated labels
     */
    public function updateLabels($labels)
    {
        $args = new UpdateLabels($labels);
        $result = $this->__soapCall("updateLabels", array($args));

        return $result->rval;
    }
  }
}

