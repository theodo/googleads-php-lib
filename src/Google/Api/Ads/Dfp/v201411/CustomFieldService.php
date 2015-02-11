<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the CustomFieldService
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














































































if (!class_exists("CustomFieldService", false)) {
    /**
   * CustomFieldService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CustomFieldService extends DfpSoapClient
  {

    const SERVICE_NAME = "CustomFieldService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/CustomFieldService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/CustomFieldService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "ActivateCustomFields" => "ActivateCustomFields",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "AuthenticationError" => "AuthenticationError",
      "BooleanValue" => "BooleanValue",
      "CommonError" => "CommonError",
      "CustomFieldAction" => "CustomFieldAction",
      "CustomField" => "CustomField",
      "CustomFieldError" => "CustomFieldError",
      "CustomFieldOption" => "CustomFieldOption",
      "CustomFieldPage" => "CustomFieldPage",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DeactivateCustomFields" => "DeactivateCustomFields",
      "DropDownCustomField" => "DropDownCustomField",
      "EntityLimitReachedError" => "EntityLimitReachedError",
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
      "RequiredError" => "RequiredError",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "TextValue" => "TextValue",
      "TypeError" => "TypeError",
      "UniqueError" => "UniqueError",
      "UpdateResult" => "UpdateResult",
      "Value" => "Value",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "CustomFieldDataType" => "CustomFieldDataType",
      "CustomFieldEntityType" => "CustomFieldEntityType",
      "CustomFieldError.Reason" => "CustomFieldErrorReason",
      "CustomFieldVisibility" => "CustomFieldVisibility",
      "FeatureError.Reason" => "FeatureErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
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
      "createCustomFieldOptions" => "CreateCustomFieldOptions",
      "createCustomFieldOptionsResponse" => "CreateCustomFieldOptionsResponse",
      "createCustomFields" => "CreateCustomFields",
      "createCustomFieldsResponse" => "CreateCustomFieldsResponse",
      "getCustomFieldOption" => "GetCustomFieldOption",
      "getCustomFieldOptionResponse" => "GetCustomFieldOptionResponse",
      "getCustomFieldsByStatement" => "GetCustomFieldsByStatement",
      "getCustomFieldsByStatementResponse" => "GetCustomFieldsByStatementResponse",
      "performCustomFieldAction" => "PerformCustomFieldAction",
      "performCustomFieldActionResponse" => "PerformCustomFieldActionResponse",
      "updateCustomFieldOptions" => "UpdateCustomFieldOptions",
      "updateCustomFieldOptionsResponse" => "UpdateCustomFieldOptionsResponse",
      "updateCustomFields" => "UpdateCustomFields",
      "updateCustomFieldsResponse" => "UpdateCustomFieldsResponse",
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
     * Creates new {@link CustomFieldOption} objects.
     *
     * The following fields are required:
     * <ul>
     * <li>{@link CustomFieldOption#displayName}</li>
     * <li>{@link CustomFieldOption#customFieldId}</li>
     * </ul>
     *
     * @param customFieldOptions the custom fields to create
     * @return the created custom field options with their IDs filled in
     */
    public function createCustomFieldOptions($customFieldOptions)
    {
        $args = new CreateCustomFieldOptions($customFieldOptions);
        $result = $this->__soapCall("createCustomFieldOptions", array($args));

        return $result->rval;
    }
    /**
     * Creates new {@link CustomField} objects.
     *
     * The following fields are required:
     * <ul>
     * <li>{@link CustomField#name}</li>
     * <li>{@link CustomField#entityType}</li>
     * <li>{@link CustomField#dataType}</li>
     * <li>{@link CustomField#visibility}</li>
     * </ul>
     *
     * @param customFields the custom fields to create
     * @return the created custom fields with their IDs filled in
     */
    public function createCustomFields($customFields)
    {
        $args = new CreateCustomFields($customFields);
        $result = $this->__soapCall("createCustomFields", array($args));

        return $result->rval;
    }
    /**
     * Returns the {@link CustomFieldOption} uniquely identified by the given ID.
     *
     * @param customFieldOptionId the ID of the custom field option, which must already exist
     * @return the {@code CustomFieldOption} uniquely identified by the given ID
     */
    public function getCustomFieldOption($customFieldOptionId)
    {
        $args = new GetCustomFieldOption($customFieldOptionId);
        $result = $this->__soapCall("getCustomFieldOption", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link CustomFieldPage} of {@link CustomField} objects that satisfy the
     * given {@link Statement#query}.
     * The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link CustomField#id}</td>
     * </tr>
     * <tr>
     * <td>{@code entityType}</td>
     * <td>{@link CustomField#entityType}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link CustomField#name}</td>
     * </tr>
     * <tr>
     * <td>{@code isActive}</td>
     * <td>{@link CustomField#isActive}</td>
     * </tr>
     * <tr>
     * <td>{@code visibility}</td>
     * <td>{@link CustomField#visibility}</td>
     * </tr>
     * </table>
     *
     *
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of custom fields.
     * @return the custom fields that match the given filter
     */
    public function getCustomFieldsByStatement($filterStatement)
    {
        $args = new GetCustomFieldsByStatement($filterStatement);
        $result = $this->__soapCall("getCustomFieldsByStatement", array($args));

        return $result->rval;
    }
    /**
     * Performs actions on {@link CustomField} objects that match the given
     * {@link Statement#query}.
     *
     * @param customFieldAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of custom fields
     * @return the result of the action performed
     */
    public function performCustomFieldAction($customFieldAction, $filterStatement)
    {
        $args = new PerformCustomFieldAction($customFieldAction, $filterStatement);
        $result = $this->__soapCall("performCustomFieldAction", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link CustomFieldOption} objects.
     *
     * @param customFieldOptions the custom field options to update
     * @return the updated custom field options
     */
    public function updateCustomFieldOptions($customFieldOptions)
    {
        $args = new UpdateCustomFieldOptions($customFieldOptions);
        $result = $this->__soapCall("updateCustomFieldOptions", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link CustomField} objects.
     *
     * @param customFields the custom fields to update
     * @return the updated custom fields
     */
    public function updateCustomFields($customFields)
    {
        $args = new UpdateCustomFields($customFields);
        $result = $this->__soapCall("updateCustomFields", array($args));

        return $result->rval;
    }
  }
}

