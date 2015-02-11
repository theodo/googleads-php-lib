<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the CreativeService
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











































































































































































if (!class_exists("CreativeService", false)) {
    /**
   * CreativeService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CreativeService extends DfpSoapClient
  {

    const SERVICE_NAME = "CreativeService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/CreativeService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/CreativeService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "BaseDynamicAllocationCreative" => "BaseDynamicAllocationCreative",
      "BaseCreativeTemplateVariableValue" => "BaseCreativeTemplateVariableValue",
      "ObjectValue" => "ObjectValue",
      "AdExchangeCreative" => "AdExchangeCreative",
      "AdMobBackfillCreative" => "AdMobBackfillCreative",
      "AdSenseCreative" => "AdSenseCreative",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "AppliedLabel" => "AppliedLabel",
      "AspectRatioImageCreative" => "AspectRatioImageCreative",
      "AssetCreativeTemplateVariableValue" => "AssetCreativeTemplateVariableValue",
      "Asset" => "Asset",
      "AssetError" => "AssetError",
      "AuthenticationError" => "AuthenticationError",
      "BaseCustomFieldValue" => "BaseCustomFieldValue",
      "BaseFlashCreative" => "BaseFlashCreative",
      "BaseFlashRedirectCreative" => "BaseFlashRedirectCreative",
      "BaseImageCreative" => "BaseImageCreative",
      "BaseImageRedirectCreative" => "BaseImageRedirectCreative",
      "BaseRichMediaStudioCreative" => "BaseRichMediaStudioCreative",
      "BaseVideoCreative" => "BaseVideoCreative",
      "BooleanValue" => "BooleanValue",
      "ClickTrackingCreative" => "ClickTrackingCreative",
      "CommonError" => "CommonError",
      "ConversionEvent_TrackingUrlsMapEntry" => "ConversionEvent_TrackingUrlsMapEntry",
      "CreativeAsset" => "CreativeAsset",
      "CustomCreativeAsset" => "CustomCreativeAsset",
      "CreativeAssetMacroError" => "CreativeAssetMacroError",
      "Creative" => "Creative",
      "CreativeError" => "CreativeError",
      "CreativePage" => "CreativePage",
      "CreativeSetError" => "CreativeSetError",
      "CustomCreative" => "CustomCreative",
      "CustomCreativeError" => "CustomCreativeError",
      "CustomFieldValue" => "CustomFieldValue",
      "CustomFieldValueError" => "CustomFieldValueError",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "LegacyDfpMobileCreative" => "LegacyDfpMobileCreative",
      "DropDownCustomFieldValue" => "DropDownCustomFieldValue",
      "EntityLimitReachedError" => "EntityLimitReachedError",
      "FeatureError" => "FeatureError",
      "FileError" => "FileError",
      "FlashCreative" => "FlashCreative",
      "FlashOverlayCreative" => "FlashOverlayCreative",
      "FlashRedirectCreative" => "FlashRedirectCreative",
      "FlashRedirectOverlayCreative" => "FlashRedirectOverlayCreative",
      "HasDestinationUrlCreative" => "HasDestinationUrlCreative",
      "HasHtmlSnippetDynamicAllocationCreative" => "HasHtmlSnippetDynamicAllocationCreative",
      "ImageCreative" => "ImageCreative",
      "ImageError" => "ImageError",
      "ImageOverlayCreative" => "ImageOverlayCreative",
      "ImageRedirectCreative" => "ImageRedirectCreative",
      "ImageRedirectOverlayCreative" => "ImageRedirectOverlayCreative",
      "InternalApiError" => "InternalApiError",
      "InternalRedirectCreative" => "InternalRedirectCreative",
      "InvalidPhoneNumberError" => "InvalidPhoneNumberError",
      "InvalidUrlError" => "InvalidUrlError",
      "LabelEntityAssociationError" => "LabelEntityAssociationError",
      "LegacyDfpCreative" => "LegacyDfpCreative",
      "LineItemCreativeAssociationError" => "LineItemCreativeAssociationError",
      "LongCreativeTemplateVariableValue" => "LongCreativeTemplateVariableValue",
      "NotNullError" => "NotNullError",
      "NullError" => "NullError",
      "NumberValue" => "NumberValue",
      "ParseError" => "ParseError",
      "PermissionError" => "PermissionError",
      "ProgrammaticCreative" => "ProgrammaticCreative",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RangeError" => "RangeError",
      "RedirectAsset" => "RedirectAsset",
      "RequiredCollectionError" => "RequiredCollectionError",
      "RequiredError" => "RequiredError",
      "RequiredNumberError" => "RequiredNumberError",
      "RequiredSizeError" => "RequiredSizeError",
      "RichMediaStudioChildAssetProperty" => "RichMediaStudioChildAssetProperty",
      "RichMediaStudioCreative" => "RichMediaStudioCreative",
      "RichMediaStudioCreativeError" => "RichMediaStudioCreativeError",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "Size" => "Size",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "StringCreativeTemplateVariableValue" => "StringCreativeTemplateVariableValue",
      "StringLengthError" => "StringLengthError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "SwiffyConversionError" => "SwiffyConversionError",
      "SwiffyFallbackAsset" => "SwiffyFallbackAsset",
      "TemplateCreative" => "TemplateCreative",
      "TemplateInstantiatedCreativeError" => "TemplateInstantiatedCreativeError",
      "TextValue" => "TextValue",
      "ThirdPartyCreative" => "ThirdPartyCreative",
      "TrackingUrls" => "TrackingUrls",
      "TypeError" => "TypeError",
      "UniqueError" => "UniqueError",
      "UnsupportedCreative" => "UnsupportedCreative",
      "UrlCreativeTemplateVariableValue" => "UrlCreativeTemplateVariableValue",
      "Value" => "Value",
      "VastRedirectCreative" => "VastRedirectCreative",
      "VideoCreative" => "VideoCreative",
      "VideoMetadata" => "VideoMetadata",
      "VideoRedirectAsset" => "VideoRedirectAsset",
      "VideoRedirectCreative" => "VideoRedirectCreative",
      "VpaidLinearCreative" => "VpaidLinearCreative",
      "VpaidLinearRedirectCreative" => "VpaidLinearRedirectCreative",
      "ApiFramework" => "ApiFramework",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AssetError.Reason" => "AssetErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "ConversionEvent" => "ConversionEvent",
      "CreativeAssetMacroError.Reason" => "CreativeAssetMacroErrorReason",
      "CreativeError.Reason" => "CreativeErrorReason",
      "CreativeSetError.Reason" => "CreativeSetErrorReason",
      "CustomCreativeError.Reason" => "CustomCreativeErrorReason",
      "CustomFieldValueError.Reason" => "CustomFieldValueErrorReason",
      "DestinationUrlType" => "DestinationUrlType",
      "FeatureError.Reason" => "FeatureErrorReason",
      "FileError.Reason" => "FileErrorReason",
      "Html5Feature" => "Html5Feature",
      "ImageDensity" => "ImageDensity",
      "ImageError.Reason" => "ImageErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "InvalidPhoneNumberError.Reason" => "InvalidPhoneNumberErrorReason",
      "InvalidUrlError.Reason" => "InvalidUrlErrorReason",
      "LabelEntityAssociationError.Reason" => "LabelEntityAssociationErrorReason",
      "LineItemCreativeAssociationError.Reason" => "LineItemCreativeAssociationErrorReason",
      "LockedOrientation" => "LockedOrientation",
      "MimeType" => "MimeType",
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
      "RichMediaStudioChildAssetProperty.Type" => "RichMediaStudioChildAssetPropertyType",
      "RichMediaStudioCreativeArtworkType" => "RichMediaStudioCreativeArtworkType",
      "RichMediaStudioCreativeBillingAttribute" => "RichMediaStudioCreativeBillingAttribute",
      "RichMediaStudioCreativeError.Reason" => "RichMediaStudioCreativeErrorReason",
      "RichMediaStudioCreativeFormat" => "RichMediaStudioCreativeFormat",
      "ScalableType" => "ScalableType",
      "ServerError.Reason" => "ServerErrorReason",
      "SslManualOverride" => "SslManualOverride",
      "SslScanResult" => "SslScanResult",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "SwiffyConversionError.Reason" => "SwiffyConversionErrorReason",
      "TemplateInstantiatedCreativeError.Reason" => "TemplateInstantiatedCreativeErrorReason",
      "VastRedirectType" => "VastRedirectType",
      "VideoDeliveryType" => "VideoDeliveryType",
      "createCreatives" => "CreateCreatives",
      "createCreativesResponse" => "CreateCreativesResponse",
      "getCreativesByStatement" => "GetCreativesByStatement",
      "getCreativesByStatementResponse" => "GetCreativesByStatementResponse",
      "updateCreatives" => "UpdateCreatives",
      "updateCreativesResponse" => "UpdateCreativesResponse",
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
     * Creates new {@link Creative} objects.
     *
     * @param creatives the creatives to create
     * @return the created creatives with their IDs filled in
     */
    public function createCreatives($creatives)
    {
        $args = new CreateCreatives($creatives);
        $result = $this->__soapCall("createCreatives", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link CreativePage} of {@link Creative} objects that satisfy the
     * given {@link Statement#query}. The following fields are supported for
     * filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Creative#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Creative#name}</td>
     * </tr>
     * <tr>
     * <td>{@code advertiserId}</td>
     * <td>{@link Creative#advertiserId}</td>
     * </tr>
     * <tr>
     * <td>{@code width}</td>
     * <td>{@link Creative#size}</td>
     * </tr>
     * <tr>
     * <td>{@code height}</td>
     * <td>{@link Creative#size}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link Creative#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of creatives
     * @return the creatives that match the given filter
     */
    public function getCreativesByStatement($filterStatement)
    {
        $args = new GetCreativesByStatement($filterStatement);
        $result = $this->__soapCall("getCreativesByStatement", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link Creative} objects.
     *
     * @param creatives the creatives to update
     * @return the updated creatives
     */
    public function updateCreatives($creatives)
    {
        $args = new UpdateCreatives($creatives);
        $result = $this->__soapCall("updateCreatives", array($args));

        return $result->rval;
    }
  }
}

