<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the LineItemCreativeAssociationService
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


if (!class_exists("LineItemCreativeAssociationService", false)) {
    /**
   * LineItemCreativeAssociationService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class LineItemCreativeAssociationService extends DfpSoapClient
  {

    const SERVICE_NAME = "LineItemCreativeAssociationService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/LineItemCreativeAssociationService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/LineItemCreativeAssociationService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "ActivateLineItemCreativeAssociations" => "ActivateLineItemCreativeAssociations",
      "AdSenseAccountError" => "AdSenseAccountError",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "AssetError" => "AssetError",
      "AudienceExtensionError" => "AudienceExtensionError",
      "AuthenticationError" => "AuthenticationError",
      "BooleanValue" => "BooleanValue",
      "CommonError" => "CommonError",
      "CreativeAssetMacroError" => "CreativeAssetMacroError",
      "CreativeError" => "CreativeError",
      "CreativeSetError" => "CreativeSetError",
      "CustomCreativeError" => "CustomCreativeError",
      "CustomFieldValueError" => "CustomFieldValueError",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DeactivateLineItemCreativeAssociations" => "DeactivateLineItemCreativeAssociations",
      "EntityChildrenLimitReachedError" => "EntityChildrenLimitReachedError",
      "EntityLimitReachedError" => "EntityLimitReachedError",
      "FeatureError" => "FeatureError",
      "FileError" => "FileError",
      "ImageError" => "ImageError",
      "InternalApiError" => "InternalApiError",
      "InvalidPhoneNumberError" => "InvalidPhoneNumberError",
      "InvalidUrlError" => "InvalidUrlError",
      "LabelEntityAssociationError" => "LabelEntityAssociationError",
      "LineItemCreativeAssociationAction" => "LineItemCreativeAssociationAction",
      "LineItemCreativeAssociation" => "LineItemCreativeAssociation",
      "LineItemCreativeAssociationError" => "LineItemCreativeAssociationError",
      "LineItemCreativeAssociationOperationError" => "LineItemCreativeAssociationOperationError",
      "LineItemCreativeAssociationPage" => "LineItemCreativeAssociationPage",
      "LineItemCreativeAssociationStats" => "LineItemCreativeAssociationStats",
      "LineItemError" => "LineItemError",
      "Long_StatsMapEntry" => "Long_StatsMapEntry",
      "Money" => "Money",
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
      "Size" => "Size",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "Stats" => "Stats",
      "StringLengthError" => "StringLengthError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "SwiffyConversionError" => "SwiffyConversionError",
      "TemplateInstantiatedCreativeError" => "TemplateInstantiatedCreativeError",
      "TextValue" => "TextValue",
      "TypeError" => "TypeError",
      "UniqueError" => "UniqueError",
      "UpdateResult" => "UpdateResult",
      "Value" => "Value",
      "AdSenseAccountError.Reason" => "AdSenseAccountErrorReason",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AssetError.Reason" => "AssetErrorReason",
      "AudienceExtensionError.Reason" => "AudienceExtensionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "CreativeAssetMacroError.Reason" => "CreativeAssetMacroErrorReason",
      "CreativeError.Reason" => "CreativeErrorReason",
      "CreativeSetError.Reason" => "CreativeSetErrorReason",
      "CustomCreativeError.Reason" => "CustomCreativeErrorReason",
      "CustomFieldValueError.Reason" => "CustomFieldValueErrorReason",
      "EntityChildrenLimitReachedError.Reason" => "EntityChildrenLimitReachedErrorReason",
      "FeatureError.Reason" => "FeatureErrorReason",
      "FileError.Reason" => "FileErrorReason",
      "ImageError.Reason" => "ImageErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "InvalidPhoneNumberError.Reason" => "InvalidPhoneNumberErrorReason",
      "InvalidUrlError.Reason" => "InvalidUrlErrorReason",
      "LabelEntityAssociationError.Reason" => "LabelEntityAssociationErrorReason",
      "LineItemCreativeAssociation.Status" => "LineItemCreativeAssociationStatus",
      "LineItemCreativeAssociationError.Reason" => "LineItemCreativeAssociationErrorReason",
      "LineItemCreativeAssociationOperationError.Reason" => "LineItemCreativeAssociationOperationErrorReason",
      "LineItemError.Reason" => "LineItemErrorReason",
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
      "StartDateTimeType" => "StartDateTimeType",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "SwiffyConversionError.Reason" => "SwiffyConversionErrorReason",
      "TemplateInstantiatedCreativeError.Reason" => "TemplateInstantiatedCreativeErrorReason",
      "createLineItemCreativeAssociations" => "CreateLineItemCreativeAssociations",
      "createLineItemCreativeAssociationsResponse" => "CreateLineItemCreativeAssociationsResponse",
      "getLineItemCreativeAssociationsByStatement" => "GetLineItemCreativeAssociationsByStatement",
      "getLineItemCreativeAssociationsByStatementResponse" => "GetLineItemCreativeAssociationsByStatementResponse",
      "getPreviewUrl" => "GetPreviewUrl",
      "getPreviewUrlResponse" => "GetPreviewUrlResponse",
      "performLineItemCreativeAssociationAction" => "PerformLineItemCreativeAssociationAction",
      "performLineItemCreativeAssociationActionResponse" => "PerformLineItemCreativeAssociationActionResponse",
      "updateLineItemCreativeAssociations" => "UpdateLineItemCreativeAssociations",
      "updateLineItemCreativeAssociationsResponse" => "UpdateLineItemCreativeAssociationsResponse",
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
     * Creates new {@link LineItemCreativeAssociation} objects
     *
     * @param lineItemCreativeAssociations the line item creative associations to
     * create
     * @return the created line item creative associations with their IDs filled
     *             in
     */
    public function createLineItemCreativeAssociations($lineItemCreativeAssociations)
    {
        $args = new CreateLineItemCreativeAssociations($lineItemCreativeAssociations);
        $result = $this->__soapCall("createLineItemCreativeAssociations", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link LineItemCreativeAssociationPage} of
     * {@link LineItemCreativeAssociation} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code creativeId}</td>
     * <td>{@link LineItemCreativeAssociation#creativeId}</td>
     * </tr>
     * <tr>
     * <td>{@code manualCreativeRotationWeight}</td>
     * <td>{@link LineItemCreativeAssociation#manualCreativeRotationWeight}</td>
     * </tr>
     * <tr>
     * <td>{@code destinationUrl}</td>
     * <td>{@link LineItemCreativeAssociation#destinationUrl}</td>
     * </tr>
     * <tr>
     * <td>{@code lineItemId}</td>
     * <td>{@link LineItemCreativeAssociation#lineItemId}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link LineItemCreativeAssociation#status}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link LineItemCreativeAssociation#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of line item creative associations
     * @return the line item creative associations that match the given filter
     */
    public function getLineItemCreativeAssociationsByStatement($filterStatement)
    {
        $args = new GetLineItemCreativeAssociationsByStatement($filterStatement);
        $result = $this->__soapCall("getLineItemCreativeAssociationsByStatement", array($args));

        return $result->rval;
    }
    /**
     * Returns an insite preview URL that references the specified site URL with
     * the specified creative from the association served to it. For Creative Set
     * previewing you may specify the master creative Id.
     *
     * @param lineItemId the ID of the line item, which must already exist
     * @param creativeId the ID of the creative, which must already exist
     * @param siteUrl the URL of the site that the creative should be previewed in
     * @return a URL that references the specified site URL with the specified
     *           creative served to it
     */
    public function getPreviewUrl($lineItemId, $creativeId, $siteUrl)
    {
        $args = new GetPreviewUrl($lineItemId, $creativeId, $siteUrl);
        $result = $this->__soapCall("getPreviewUrl", array($args));

        return $result->rval;
    }
    /**
     * Performs actions on {@link LineItemCreativeAssociation} objects that match
     * the given {@link Statement#query}.
     *
     * @param lineItemCreativeAssociationAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of line item creative associations
     * @return the result of the action performed
     */
    public function performLineItemCreativeAssociationAction($lineItemCreativeAssociationAction, $filterStatement)
    {
        $args = new PerformLineItemCreativeAssociationAction($lineItemCreativeAssociationAction, $filterStatement);
        $result = $this->__soapCall("performLineItemCreativeAssociationAction", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link LineItemCreativeAssociation} objects
     *
     * @param lineItemCreativeAssociations the line item creative associations to
     * update
     * @return the updated line item creative associations
     */
    public function updateLineItemCreativeAssociations($lineItemCreativeAssociations)
    {
        $args = new UpdateLineItemCreativeAssociations($lineItemCreativeAssociations);
        $result = $this->__soapCall("updateLineItemCreativeAssociations", array($args));

        return $result->rval;
    }
  }
}

