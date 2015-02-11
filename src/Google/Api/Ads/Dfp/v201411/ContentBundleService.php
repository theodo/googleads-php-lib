<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the ContentBundleService
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


if (!class_exists("ContentBundleService", false)) {
    /**
   * ContentBundleService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ContentBundleService extends DfpSoapClient
  {

    const SERVICE_NAME = "ContentBundleService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/ContentBundleService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/ContentBundleService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "ActivateContentBundles" => "ActivateContentBundles",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "AuthenticationError" => "AuthenticationError",
      "BooleanValue" => "BooleanValue",
      "CommonError" => "CommonError",
      "ContentBundleAction" => "ContentBundleAction",
      "ContentBundle" => "ContentBundle",
      "ContentBundlePage" => "ContentBundlePage",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DeactivateContentBundles" => "DeactivateContentBundles",
      "ExcludeContentFromContentBundle" => "ExcludeContentFromContentBundle",
      "FeatureError" => "FeatureError",
      "IncludeContentInContentBundle" => "IncludeContentInContentBundle",
      "InternalApiError" => "InternalApiError",
      "NotNullError" => "NotNullError",
      "NumberValue" => "NumberValue",
      "PermissionError" => "PermissionError",
      "PlacementError" => "PlacementError",
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
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "TextValue" => "TextValue",
      "UniqueError" => "UniqueError",
      "UpdateResult" => "UpdateResult",
      "Value" => "Value",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "ContentBundleStatus" => "ContentBundleStatus",
      "FeatureError.Reason" => "FeatureErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NotNullError.Reason" => "NotNullErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PlacementError.Reason" => "PlacementErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "createContentBundles" => "CreateContentBundles",
      "createContentBundlesResponse" => "CreateContentBundlesResponse",
      "getContentBundlesByStatement" => "GetContentBundlesByStatement",
      "getContentBundlesByStatementResponse" => "GetContentBundlesByStatementResponse",
      "performContentBundleAction" => "PerformContentBundleAction",
      "performContentBundleActionResponse" => "PerformContentBundleActionResponse",
      "updateContentBundles" => "UpdateContentBundles",
      "updateContentBundlesResponse" => "UpdateContentBundlesResponse",
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
     * Creates new {@link ContentBundle} objects.
     *
     * @param contentBundles the content bundles to create
     * @return the created content bundles with their IDs filled in
     */
    public function createContentBundles($contentBundles)
    {
        $args = new CreateContentBundles($contentBundles);
        $result = $this->__soapCall("createContentBundles", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link ContentBundlePage} of {@link ContentBundle} objects that satisfy the
     * given {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ContentBundle#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link ContentBundle#name}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link ContentBundle#status}</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of content bundles
     * @return the content bundles that match the given filter
     */
    public function getContentBundlesByStatement($filterStatement)
    {
        $args = new GetContentBundlesByStatement($filterStatement);
        $result = $this->__soapCall("getContentBundlesByStatement", array($args));

        return $result->rval;
    }
    /**
     * Performs actions on {@link ContentBundle} objects that match the given
     * {@link Statement#query}.
     *
     * @param contentBundleAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of content bundles
     * @return the result of the action performed
     */
    public function performContentBundleAction($contentBundleAction, $filterStatement)
    {
        $args = new PerformContentBundleAction($contentBundleAction, $filterStatement);
        $result = $this->__soapCall("performContentBundleAction", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link ContentBundle} objects.
     *
     * @param contentBundles the content bundles to update
     * @return the updated content bundles
     */
    public function updateContentBundles($contentBundles)
    {
        $args = new UpdateContentBundles($contentBundles);
        $result = $this->__soapCall("updateContentBundles", array($args));

        return $result->rval;
    }
  }
}

