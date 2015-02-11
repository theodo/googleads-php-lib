<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the LineItemTemplateService
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


if (!class_exists("LineItemTemplateService", false)) {
    /**
   * LineItemTemplateService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class LineItemTemplateService extends DfpSoapClient
  {

    const SERVICE_NAME = "LineItemTemplateService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/LineItemTemplateService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/LineItemTemplateService";
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
      "AudienceExtensionError" => "AudienceExtensionError",
      "AuthenticationError" => "AuthenticationError",
      "BooleanValue" => "BooleanValue",
      "ClickTrackingLineItemError" => "ClickTrackingLineItemError",
      "CommonError" => "CommonError",
      "CompanyCreditStatusError" => "CompanyCreditStatusError",
      "ContentMetadataTargetingError" => "ContentMetadataTargetingError",
      "CreativeError" => "CreativeError",
      "CrossSellError" => "CrossSellError",
      "CustomFieldValueError" => "CustomFieldValueError",
      "CustomTargetingError" => "CustomTargetingError",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeRangeTargetingError" => "DateTimeRangeTargetingError",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DayPartTargetingError" => "DayPartTargetingError",
      "EntityChildrenLimitReachedError" => "EntityChildrenLimitReachedError",
      "EntityLimitReachedError" => "EntityLimitReachedError",
      "FeatureError" => "FeatureError",
      "ForecastError" => "ForecastError",
      "FrequencyCapError" => "FrequencyCapError",
      "GenericTargetingError" => "GenericTargetingError",
      "GeoTargetingError" => "GeoTargetingError",
      "InternalApiError" => "InternalApiError",
      "InvalidUrlError" => "InvalidUrlError",
      "InventoryTargetingError" => "InventoryTargetingError",
      "LabelEntityAssociationError" => "LabelEntityAssociationError",
      "LineItemActivityAssociationError" => "LineItemActivityAssociationError",
      "LineItemCreativeAssociationError" => "LineItemCreativeAssociationError",
      "LineItemError" => "LineItemError",
      "LineItemFlightDateError" => "LineItemFlightDateError",
      "LineItemOperationError" => "LineItemOperationError",
      "LineItemTemplate" => "LineItemTemplate",
      "LineItemTemplatePage" => "LineItemTemplatePage",
      "NotNullError" => "NotNullError",
      "NullError" => "NullError",
      "NumberValue" => "NumberValue",
      "OrderError" => "OrderError",
      "ParseError" => "ParseError",
      "PermissionError" => "PermissionError",
      "ProgrammaticError" => "ProgrammaticError",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RangeError" => "RangeError",
      "RequiredCollectionError" => "RequiredCollectionError",
      "RequiredError" => "RequiredError",
      "RequiredNumberError" => "RequiredNumberError",
      "RequiredSizeError" => "RequiredSizeError",
      "ReservationDetailsError" => "ReservationDetailsError",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "StringLengthError" => "StringLengthError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "TeamError" => "TeamError",
      "TechnologyTargetingError" => "TechnologyTargetingError",
      "TextValue" => "TextValue",
      "TypeError" => "TypeError",
      "UniqueError" => "UniqueError",
      "UserDomainTargetingError" => "UserDomainTargetingError",
      "Value" => "Value",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AudienceExtensionError.Reason" => "AudienceExtensionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "ClickTrackingLineItemError.Reason" => "ClickTrackingLineItemErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "CompanyCreditStatusError.Reason" => "CompanyCreditStatusErrorReason",
      "ContentMetadataTargetingError.Reason" => "ContentMetadataTargetingErrorReason",
      "CreativeError.Reason" => "CreativeErrorReason",
      "CreativeRotationType" => "CreativeRotationType",
      "CrossSellError.Reason" => "CrossSellErrorReason",
      "CustomFieldValueError.Reason" => "CustomFieldValueErrorReason",
      "CustomTargetingError.Reason" => "CustomTargetingErrorReason",
      "DateTimeRangeTargetingError.Reason" => "DateTimeRangeTargetingErrorReason",
      "DayPartTargetingError.Reason" => "DayPartTargetingErrorReason",
      "DeliveryRateType" => "DeliveryRateType",
      "EntityChildrenLimitReachedError.Reason" => "EntityChildrenLimitReachedErrorReason",
      "FeatureError.Reason" => "FeatureErrorReason",
      "ForecastError.Reason" => "ForecastErrorReason",
      "FrequencyCapError.Reason" => "FrequencyCapErrorReason",
      "GenericTargetingError.Reason" => "GenericTargetingErrorReason",
      "GeoTargetingError.Reason" => "GeoTargetingErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "InvalidUrlError.Reason" => "InvalidUrlErrorReason",
      "InventoryTargetingError.Reason" => "InventoryTargetingErrorReason",
      "LabelEntityAssociationError.Reason" => "LabelEntityAssociationErrorReason",
      "LineItemActivityAssociationError.Reason" => "LineItemActivityAssociationErrorReason",
      "LineItemCreativeAssociationError.Reason" => "LineItemCreativeAssociationErrorReason",
      "LineItemError.Reason" => "LineItemErrorReason",
      "LineItemFlightDateError.Reason" => "LineItemFlightDateErrorReason",
      "LineItemOperationError.Reason" => "LineItemOperationErrorReason",
      "LineItemType" => "LineItemType",
      "NotNullError.Reason" => "NotNullErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "OrderError.Reason" => "OrderErrorReason",
      "ParseError.Reason" => "ParseErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "ProgrammaticError.Reason" => "ProgrammaticErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "RequiredNumberError.Reason" => "RequiredNumberErrorReason",
      "RequiredSizeError.Reason" => "RequiredSizeErrorReason",
      "ReservationDetailsError.Reason" => "ReservationDetailsErrorReason",
      "RoadblockingType" => "RoadblockingType",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "TargetPlatform" => "TargetPlatform",
      "TeamError.Reason" => "TeamErrorReason",
      "TechnologyTargetingError.Reason" => "TechnologyTargetingErrorReason",
      "UserDomainTargetingError.Reason" => "UserDomainTargetingErrorReason",
      "getLineItemTemplatesByStatement" => "GetLineItemTemplatesByStatement",
      "getLineItemTemplatesByStatementResponse" => "GetLineItemTemplatesByStatementResponse",
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
     * Gets a {@link LineItemTemplatePage} of {@link LineItemTemplate} objects
     * that satisfy the given {@link Statement#query}. The following fields are
     * supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link LineItemTemplate#id}</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of line item templates
     * @return the          line item templates that match the given filter
     * @throws ApiException if a RuntimeException is thrown
     */
    public function getLineItemTemplatesByStatement($filterStatement)
    {
        $args = new GetLineItemTemplatesByStatement($filterStatement);
        $result = $this->__soapCall("getLineItemTemplatesByStatement", array($args));

        return $result->rval;
    }
  }
}

