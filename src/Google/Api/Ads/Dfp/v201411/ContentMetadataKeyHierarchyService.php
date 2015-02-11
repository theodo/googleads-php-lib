<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the ContentMetadataKeyHierarchyService
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


if (!class_exists("ContentMetadataKeyHierarchyService", false)) {
    /**
   * ContentMetadataKeyHierarchyService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ContentMetadataKeyHierarchyService extends DfpSoapClient
  {

    const SERVICE_NAME = "ContentMetadataKeyHierarchyService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/ContentMetadataKeyHierarchyService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/ContentMetadataKeyHierarchyService";
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
      "ContentMetadataKeyHierarchyAction" => "ContentMetadataKeyHierarchyAction",
      "ContentMetadataKeyHierarchy" => "ContentMetadataKeyHierarchy",
      "ContentMetadataKeyHierarchyError" => "ContentMetadataKeyHierarchyError",
      "ContentMetadataKeyHierarchyLevel" => "ContentMetadataKeyHierarchyLevel",
      "ContentMetadataKeyHierarchyPage" => "ContentMetadataKeyHierarchyPage",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DeleteContentMetadataKeyHierarchies" => "DeleteContentMetadataKeyHierarchies",
      "FeatureError" => "FeatureError",
      "InternalApiError" => "InternalApiError",
      "NotNullError" => "NotNullError",
      "NumberValue" => "NumberValue",
      "PermissionError" => "PermissionError",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
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
      "TextValue" => "TextValue",
      "UniqueError" => "UniqueError",
      "UpdateResult" => "UpdateResult",
      "Value" => "Value",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "ContentMetadataKeyHierarchyError.Reason" => "ContentMetadataKeyHierarchyErrorReason",
      "ContentMetadataKeyHierarchyStatus" => "ContentMetadataKeyHierarchyStatus",
      "FeatureError.Reason" => "FeatureErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NotNullError.Reason" => "NotNullErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "RequiredNumberError.Reason" => "RequiredNumberErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "createContentMetadataKeyHierarchies" => "CreateContentMetadataKeyHierarchies",
      "createContentMetadataKeyHierarchiesResponse" => "CreateContentMetadataKeyHierarchiesResponse",
      "getContentMetadataKeyHierarchiesByStatement" => "GetContentMetadataKeyHierarchiesByStatement",
      "getContentMetadataKeyHierarchiesByStatementResponse" => "GetContentMetadataKeyHierarchiesByStatementResponse",
      "performContentMetadataKeyHierarchyAction" => "PerformContentMetadataKeyHierarchyAction",
      "performContentMetadataKeyHierarchyActionResponse" => "PerformContentMetadataKeyHierarchyActionResponse",
      "updateContentMetadataKeyHierarchies" => "UpdateContentMetadataKeyHierarchies",
      "updateContentMetadataKeyHierarchiesResponse" => "UpdateContentMetadataKeyHierarchiesResponse",
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
     * Creates new {@link ContentMetadataKeyHierarchy} objects.
     *
     * The following fields are required:
     * <ul>
     * <li>{@link ContentMetadataKeyHierarchy#id}</li>
     * <li>{@link ContentMetadataKeyHierarchy#name}</li>
     * <li>{@link ContentMetadataKeyHierarchy#hierarchyLevels}</li>
     * </ul>
     *
     * @param contentMetadataKeyHierarchies the hierarchies to create
     * @return the created hierarchies with their IDs filled in
     */
    public function createContentMetadataKeyHierarchies($contentMetadataKeyHierarchies)
    {
        $args = new CreateContentMetadataKeyHierarchies($contentMetadataKeyHierarchies);
        $result = $this->__soapCall("createContentMetadataKeyHierarchies", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link ContentMetadataKeyHierarchyPage} of {@link ContentMetadataKeyHierarchy}
     * objects that satisfy the given {@link Statement#query}. The following fields are supported
     * for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ContentMetadataKeyHierarchy#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link ContentMetadataKeyHierarchy#name}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link ContentMetadataKeyHierarchy#status}</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement used to filter a set of
     * content metadata key hierarchies
     * @return the          content metadata key hierarchies that match the given filter
     * @throws ApiException if the ID of the active network does not exist or there is a
     *                      backend error
     */
    public function getContentMetadataKeyHierarchiesByStatement($filterStatement)
    {
        $args = new GetContentMetadataKeyHierarchiesByStatement($filterStatement);
        $result = $this->__soapCall("getContentMetadataKeyHierarchiesByStatement", array($args));

        return $result->rval;
    }
    /**
     * Performs actions on {@link ContentMetadataKeyHierarchy} objects that match the given
     * {@link Statement#query}.
     *
     * @param contentMetadataKeyHierarchyAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of hierarchies
     * @return the result of the action performed
     */
    public function performContentMetadataKeyHierarchyAction($contentMetadataKeyHierarchyAction, $filterStatement)
    {
        $args = new PerformContentMetadataKeyHierarchyAction($contentMetadataKeyHierarchyAction, $filterStatement);
        $result = $this->__soapCall("performContentMetadataKeyHierarchyAction", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link ContentMetadataKeyHierarchy} objects.
     *
     * @param contentMetadataKeyHierarchies the hierarchies to update
     * @return the          updated hierarchies
     * @throws ApiException if there is an error updating the one of the hierarchies
     */
    public function updateContentMetadataKeyHierarchies($contentMetadataKeyHierarchies)
    {
        $args = new UpdateContentMetadataKeyHierarchies($contentMetadataKeyHierarchies);
        $result = $this->__soapCall("updateContentMetadataKeyHierarchies", array($args));

        return $result->rval;
    }
  }
}

