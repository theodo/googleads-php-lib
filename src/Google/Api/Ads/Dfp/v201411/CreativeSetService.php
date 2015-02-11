<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the CreativeSetService
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

































































































if (!class_exists("CreativeSetService", false)) {
    /**
   * CreativeSetService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CreativeSetService extends DfpSoapClient
  {

    const SERVICE_NAME = "CreativeSetService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/CreativeSetService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/CreativeSetService";
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
      "AssetError" => "AssetError",
      "AuthenticationError" => "AuthenticationError",
      "BooleanValue" => "BooleanValue",
      "CommonError" => "CommonError",
      "CreativeAssetMacroError" => "CreativeAssetMacroError",
      "CreativeError" => "CreativeError",
      "CreativeSet" => "CreativeSet",
      "CreativeSetError" => "CreativeSetError",
      "CreativeSetPage" => "CreativeSetPage",
      "CustomCreativeError" => "CustomCreativeError",
      "CustomFieldValueError" => "CustomFieldValueError",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "EntityLimitReachedError" => "EntityLimitReachedError",
      "FeatureError" => "FeatureError",
      "FileError" => "FileError",
      "ImageError" => "ImageError",
      "InternalApiError" => "InternalApiError",
      "InvalidPhoneNumberError" => "InvalidPhoneNumberError",
      "InvalidUrlError" => "InvalidUrlError",
      "LabelEntityAssociationError" => "LabelEntityAssociationError",
      "NotNullError" => "NotNullError",
      "NullError" => "NullError",
      "NumberValue" => "NumberValue",
      "ParseError" => "ParseError",
      "PermissionError" => "PermissionError",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RangeError" => "RangeError",
      "RequiredCollectionError" => "RequiredCollectionError",
      "RequiredError" => "RequiredError",
      "RequiredNumberError" => "RequiredNumberError",
      "RequiredSizeError" => "RequiredSizeError",
      "RichMediaStudioCreativeError" => "RichMediaStudioCreativeError",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "StringLengthError" => "StringLengthError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "SwiffyConversionError" => "SwiffyConversionError",
      "TemplateInstantiatedCreativeError" => "TemplateInstantiatedCreativeError",
      "TextValue" => "TextValue",
      "TypeError" => "TypeError",
      "UniqueError" => "UniqueError",
      "Value" => "Value",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AssetError.Reason" => "AssetErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "CreativeAssetMacroError.Reason" => "CreativeAssetMacroErrorReason",
      "CreativeError.Reason" => "CreativeErrorReason",
      "CreativeSetError.Reason" => "CreativeSetErrorReason",
      "CustomCreativeError.Reason" => "CustomCreativeErrorReason",
      "CustomFieldValueError.Reason" => "CustomFieldValueErrorReason",
      "FeatureError.Reason" => "FeatureErrorReason",
      "FileError.Reason" => "FileErrorReason",
      "ImageError.Reason" => "ImageErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "InvalidPhoneNumberError.Reason" => "InvalidPhoneNumberErrorReason",
      "InvalidUrlError.Reason" => "InvalidUrlErrorReason",
      "LabelEntityAssociationError.Reason" => "LabelEntityAssociationErrorReason",
      "NotNullError.Reason" => "NotNullErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "ParseError.Reason" => "ParseErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "RequiredNumberError.Reason" => "RequiredNumberErrorReason",
      "RequiredSizeError.Reason" => "RequiredSizeErrorReason",
      "RichMediaStudioCreativeError.Reason" => "RichMediaStudioCreativeErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "SwiffyConversionError.Reason" => "SwiffyConversionErrorReason",
      "TemplateInstantiatedCreativeError.Reason" => "TemplateInstantiatedCreativeErrorReason",
      "createCreativeSet" => "CreateCreativeSet",
      "createCreativeSetResponse" => "CreateCreativeSetResponse",
      "getCreativeSetsByStatement" => "GetCreativeSetsByStatement",
      "getCreativeSetsByStatementResponse" => "GetCreativeSetsByStatementResponse",
      "updateCreativeSet" => "UpdateCreativeSet",
      "updateCreativeSetResponse" => "UpdateCreativeSetResponse",
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
     * Creates a new {@link CreativeSet}.
     *
     * @param creativeSet the creative set to create
     * @return the creative set with its ID filled in
     */
    public function createCreativeSet($creativeSet)
    {
        $args = new CreateCreativeSet($creativeSet);
        $result = $this->__soapCall("createCreativeSet", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link CreativeSetPage} of {@link CreativeSet} objects that satisfy the
     * given {@link Statement#query}. The following fields are supported for
     * filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link CreativeSet#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link CreativeSet#name}</td>
     * </tr>
     * <tr>
     * <td>{@code masterCreativeId}</td>
     * <td>{@link CreativeSet#masterCreativeId}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link CreativeSet#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of creative sets
     * @return the creative sets that match the given filter
     */
    public function getCreativeSetsByStatement($statement)
    {
        $args = new GetCreativeSetsByStatement($statement);
        $result = $this->__soapCall("getCreativeSetsByStatement", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link CreativeSet}.
     *
     * @param creativeSet the creative set to update
     * @return the updated creative set
     */
    public function updateCreativeSet($creativeSet)
    {
        $args = new UpdateCreativeSet($creativeSet);
        $result = $this->__soapCall("updateCreativeSet", array($args));

        return $result->rval;
    }
  }
}

