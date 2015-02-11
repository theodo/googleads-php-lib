<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the CustomTargetingService
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


if (!class_exists("CustomTargetingService", false)) {
    /**
   * CustomTargetingService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CustomTargetingService extends DfpSoapClient
  {

    const SERVICE_NAME = "CustomTargetingService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/CustomTargetingService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/CustomTargetingService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "ActivateCustomTargetingKeys" => "ActivateCustomTargetingKeys",
      "ActivateCustomTargetingValues" => "ActivateCustomTargetingValues",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "AuthenticationError" => "AuthenticationError",
      "BooleanValue" => "BooleanValue",
      "CollectionSizeError" => "CollectionSizeError",
      "CommonError" => "CommonError",
      "CustomTargetingError" => "CustomTargetingError",
      "CustomTargetingKeyAction" => "CustomTargetingKeyAction",
      "CustomTargetingKey" => "CustomTargetingKey",
      "CustomTargetingKeyPage" => "CustomTargetingKeyPage",
      "CustomTargetingValueAction" => "CustomTargetingValueAction",
      "CustomTargetingValue" => "CustomTargetingValue",
      "CustomTargetingValuePage" => "CustomTargetingValuePage",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DeleteCustomTargetingKeys" => "DeleteCustomTargetingKeys",
      "DeleteCustomTargetingValues" => "DeleteCustomTargetingValues",
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
      "CollectionSizeError.Reason" => "CollectionSizeErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "CustomTargetingError.Reason" => "CustomTargetingErrorReason",
      "CustomTargetingKey.Status" => "CustomTargetingKeyStatus",
      "CustomTargetingKey.Type" => "CustomTargetingKeyType",
      "CustomTargetingValue.MatchType" => "CustomTargetingValueMatchType",
      "CustomTargetingValue.Status" => "CustomTargetingValueStatus",
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
      "createCustomTargetingKeys" => "CreateCustomTargetingKeys",
      "createCustomTargetingKeysResponse" => "CreateCustomTargetingKeysResponse",
      "createCustomTargetingValues" => "CreateCustomTargetingValues",
      "createCustomTargetingValuesResponse" => "CreateCustomTargetingValuesResponse",
      "getCustomTargetingKeysByStatement" => "GetCustomTargetingKeysByStatement",
      "getCustomTargetingKeysByStatementResponse" => "GetCustomTargetingKeysByStatementResponse",
      "getCustomTargetingValuesByStatement" => "GetCustomTargetingValuesByStatement",
      "getCustomTargetingValuesByStatementResponse" => "GetCustomTargetingValuesByStatementResponse",
      "performCustomTargetingKeyAction" => "PerformCustomTargetingKeyAction",
      "performCustomTargetingKeyActionResponse" => "PerformCustomTargetingKeyActionResponse",
      "performCustomTargetingValueAction" => "PerformCustomTargetingValueAction",
      "performCustomTargetingValueActionResponse" => "PerformCustomTargetingValueActionResponse",
      "updateCustomTargetingKeys" => "UpdateCustomTargetingKeys",
      "updateCustomTargetingKeysResponse" => "UpdateCustomTargetingKeysResponse",
      "updateCustomTargetingValues" => "UpdateCustomTargetingValues",
      "updateCustomTargetingValuesResponse" => "UpdateCustomTargetingValuesResponse",
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
     * Creates new {@link CustomTargetingKey} objects.
     *
     * The following fields are required:
     * <ul>
     * <li>{@link CustomTargetingKey#name}</li>
     * <li>{@link CustomTargetingKey#type}</li>
     * </ul>
     *
     * @param keys the custom targeting keys to update
     * @return the updated custom targeting keys
     */
    public function createCustomTargetingKeys($keys)
    {
        $args = new CreateCustomTargetingKeys($keys);
        $result = $this->__soapCall("createCustomTargetingKeys", array($args));

        return $result->rval;
    }
    /**
     * Creates new {@link CustomTargetingValue} objects.
     *
     * The following fields are required:
     * <ul>
     * <li>{@link CustomTargetingValue#customTargetingKeyId}</li>
     * <li>{@link CustomTargetingValue#name}</li>
     * </ul>
     *
     * @param values the custom targeting values to update
     * @return the updated custom targeting keys
     */
    public function createCustomTargetingValues($values)
    {
        $args = new CreateCustomTargetingValues($values);
        $result = $this->__soapCall("createCustomTargetingValues", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link CustomTargetingKeyPage} of {@link CustomTargetingKey} objects
     * that satisfy the given {@link Statement#query}. The following fields are
     * supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link CustomTargetingKey#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link CustomTargetingKey#name}</td>
     * </tr>
     * <tr>
     * <td>{@code displayName}</td>
     * <td>{@link CustomTargetingKey#displayName}</td>
     * </tr>
     * <tr>
     * <td>{@code type}</td>
     * <td>{@link CustomTargetingKey#type}</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of custom targeting keys
     * @return the custom targeting keys that match the given filter
     */
    public function getCustomTargetingKeysByStatement($filterStatement)
    {
        $args = new GetCustomTargetingKeysByStatement($filterStatement);
        $result = $this->__soapCall("getCustomTargetingKeysByStatement", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link CustomTargetingValuePage} of {@link CustomTargetingValue}
     * objects that satisfy the given {@link Statement#query}.
     * <p>
     * The {@code WHERE} clause in the {@link Statement#query} must always contain
     * {@link CustomTargetingValue#customTargetingKeyId} as one of its columns in
     * a way that it is AND'ed with the rest of the query. So, if you want to
     * retrieve values for a known set of key ids, valid {@link Statement#query}
     * would look like:
     * </p>
     * <ol>
     * <li>
     * "WHERE customTargetingKeyId IN ('17','18','19')" retrieves all values that
     * are associated with keys having ids 17, 18, 19.
     * </li>
     * <li>
     * "WHERE customTargetingKeyId = '17' AND name = 'red'" retrieves values that
     * are associated with keys having id 17 and value name is 'red'.
     * </li>
     * </ol>
     * </p>
     * <p>
     * The following fields are supported for filtering:
     * </p>
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th>
     * <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link CustomTargetingValue#id}</td>
     * </tr>
     * <tr>
     * <td>{@code customTargetingKeyId}</td>
     * <td>{@link CustomTargetingValue#customTargetingKeyId}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link CustomTargetingValue#name}</td>
     * </tr>
     * <tr>
     * <td>{@code displayName}</td>
     * <td>{@link CustomTargetingValue#displayName}</td>
     * </tr>
     * <tr>
     * <td>{@code matchType}</td>
     * <td>{@link CustomTargetingValue#matchType}</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of custom targeting values
     * @return the custom targeting values that match the given filter
     */
    public function getCustomTargetingValuesByStatement($filterStatement)
    {
        $args = new GetCustomTargetingValuesByStatement($filterStatement);
        $result = $this->__soapCall("getCustomTargetingValuesByStatement", array($args));

        return $result->rval;
    }
    /**
     * Performs actions on {@link CustomTargetingKey} objects that match the given
     * {@link Statement#query}.
     *
     * @param customTargetingKeyAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of custom targeting keys
     * @return the result of the action performed
     */
    public function performCustomTargetingKeyAction($customTargetingKeyAction, $filterStatement)
    {
        $args = new PerformCustomTargetingKeyAction($customTargetingKeyAction, $filterStatement);
        $result = $this->__soapCall("performCustomTargetingKeyAction", array($args));

        return $result->rval;
    }
    /**
     * Performs actions on {@link CustomTargetingValue} objects that match the
     * given {@link Statement#query}.
     *
     * @param customTargetingValueAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of ad units
     * @return the result of the action performed
     */
    public function performCustomTargetingValueAction($customTargetingValueAction, $filterStatement)
    {
        $args = new PerformCustomTargetingValueAction($customTargetingValueAction, $filterStatement);
        $result = $this->__soapCall("performCustomTargetingValueAction", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link CustomTargetingKey} objects.
     *
     * @param keys the custom targeting keys to update
     * @return the updated custom targeting keys
     */
    public function updateCustomTargetingKeys($keys)
    {
        $args = new UpdateCustomTargetingKeys($keys);
        $result = $this->__soapCall("updateCustomTargetingKeys", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link CustomTargetingValue} objects.
     *
     * @param values the custom targeting values to update
     * @return the updated custom targeting values
     */
    public function updateCustomTargetingValues($values)
    {
        $args = new UpdateCustomTargetingValues($values);
        $result = $this->__soapCall("updateCustomTargetingValues", array($args));

        return $result->rval;
    }
  }
}

