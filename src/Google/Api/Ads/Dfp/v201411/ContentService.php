<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the ContentService
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


if (!class_exists("ContentService", false)) {
    /**
   * ContentService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class ContentService extends DfpSoapClient
  {

    const SERVICE_NAME = "ContentService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/ContentService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/ContentService";
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
      "CmsContent" => "CmsContent",
      "CommonError" => "CommonError",
      "Content" => "Content",
      "ContentPage" => "ContentPage",
      "ContentPartnerError" => "ContentPartnerError",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "FeatureError" => "FeatureError",
      "InternalApiError" => "InternalApiError",
      "InvalidUrlError" => "InvalidUrlError",
      "NotNullError" => "NotNullError",
      "NumberValue" => "NumberValue",
      "PermissionError" => "PermissionError",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RequiredCollectionError" => "RequiredCollectionError",
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
      "TypeError" => "TypeError",
      "Value" => "Value",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "ContentPartnerError.Reason" => "ContentPartnerErrorReason",
      "ContentStatus" => "ContentStatus",
      "FeatureError.Reason" => "FeatureErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "InvalidUrlError.Reason" => "InvalidUrlErrorReason",
      "NotNullError.Reason" => "NotNullErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
      "RequiredNumberError.Reason" => "RequiredNumberErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "ContentStatusDefinedBy" => "ContentStatusDefinedBy",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "getContentByStatement" => "GetContentByStatement",
      "getContentByStatementResponse" => "GetContentByStatementResponse",
      "getContentByStatementAndCustomTargetingValue" => "GetContentByStatementAndCustomTargetingValue",
      "getContentByStatementAndCustomTargetingValueResponse" => "GetContentByStatementAndCustomTargetingValueResponse",
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
     * Gets a {@link ContentPage} of {@link Content} objects that satisfy the
     * given {@link Statement#query}. The following fields are supported for
     * filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Content#id}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link Content#status}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Content#name}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link Content#lastModifiedDateTime}: Requires indexed content search to be enabled.</td>
     * </tr>
     * </table>
     *
     * @params filterStatement a Publisher Query Language statement used to
     * filter a set of content
     * @return the content that matches the given filter
     */
    public function getContentByStatement($statement)
    {
        $args = new GetContentByStatement($statement);
        $result = $this->__soapCall("getContentByStatement", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link ContentPage} of {@link Content} objects that satisfy the
     * given {@link Statement#query}. Additionally, filters on the given value ID
     * and key ID that the value belongs to.
     *
     * The following fields are supported for filtering:
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Content#id}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link Content#status}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Content#name}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link Content#lastModifiedDateTime>}: Requires indexed content search to be enabled.</td>
     * </tr>
     * </table>
     *
     * @params filterStatement a Publisher Query Language statement used to
     * filter a set of content
     * @param customTargetingValueId the id of the value to match
     * @return the content that matches the given filter
     */
    public function getContentByStatementAndCustomTargetingValue($filterStatement, $customTargetingValueId)
    {
        $args = new GetContentByStatementAndCustomTargetingValue($filterStatement, $customTargetingValueId);
        $result = $this->__soapCall("getContentByStatementAndCustomTargetingValue", array($args));

        return $result->rval;
    }
  }
}

