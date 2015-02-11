<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the UserService
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















































































if (!class_exists("UserService", false)) {
    /**
   * UserService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class UserService extends DfpSoapClient
  {

    const SERVICE_NAME = "UserService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/UserService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/UserService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "ActivateUsers" => "ActivateUsers",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "AuthenticationError" => "AuthenticationError",
      "BaseCustomFieldValue" => "BaseCustomFieldValue",
      "BooleanValue" => "BooleanValue",
      "CommonError" => "CommonError",
      "CustomFieldValue" => "CustomFieldValue",
      "CustomFieldValueError" => "CustomFieldValueError",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DeactivateUsers" => "DeactivateUsers",
      "DropDownCustomFieldValue" => "DropDownCustomFieldValue",
      "FeatureError" => "FeatureError",
      "InternalApiError" => "InternalApiError",
      "InvalidEmailError" => "InvalidEmailError",
      "NotNullError" => "NotNullError",
      "NumberValue" => "NumberValue",
      "ParseError" => "ParseError",
      "PermissionError" => "PermissionError",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RequiredError" => "RequiredError",
      "Role" => "Role",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "TeamError" => "TeamError",
      "TextValue" => "TextValue",
      "TokenError" => "TokenError",
      "TypeError" => "TypeError",
      "UniqueError" => "UniqueError",
      "UpdateResult" => "UpdateResult",
      "UserAction" => "UserAction",
      "User" => "User",
      "UserPage" => "UserPage",
      "UserRecord" => "UserRecord",
      "Value" => "Value",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "CustomFieldValueError.Reason" => "CustomFieldValueErrorReason",
      "FeatureError.Reason" => "FeatureErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "InvalidEmailError.Reason" => "InvalidEmailErrorReason",
      "NotNullError.Reason" => "NotNullErrorReason",
      "ParseError.Reason" => "ParseErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "TeamError.Reason" => "TeamErrorReason",
      "TokenError.Reason" => "TokenErrorReason",
      "createUsers" => "CreateUsers",
      "createUsersResponse" => "CreateUsersResponse",
      "getAllRoles" => "GetAllRoles",
      "getAllRolesResponse" => "GetAllRolesResponse",
      "getCurrentUser" => "GetCurrentUser",
      "getCurrentUserResponse" => "GetCurrentUserResponse",
      "getUsersByStatement" => "GetUsersByStatement",
      "getUsersByStatementResponse" => "GetUsersByStatementResponse",
      "performUserAction" => "PerformUserAction",
      "performUserActionResponse" => "PerformUserActionResponse",
      "updateUsers" => "UpdateUsers",
      "updateUsersResponse" => "UpdateUsersResponse",
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
     * Creates new {@link User} objects.
     *
     * @param users the users to create
     * @return the created users with their IDs filled in
     */
    public function createUsers($users)
    {
        $args = new CreateUsers($users);
        $result = $this->__soapCall("createUsers", array($args));

        return $result->rval;
    }
    /**
     * Returns the {@link Role} objects that are defined for the users of the
     * network.
     *
     * @return the roles defined for the user's network
     */
    public function getAllRoles()
    {
        $args = new GetAllRoles();
        $result = $this->__soapCall("getAllRoles", array($args));

        return $result->rval;
    }
    /**
     * Returns the current {@link User}.
     *
     * @return the current user
     */
    public function getCurrentUser()
    {
        $args = new GetCurrentUser();
        $result = $this->__soapCall("getCurrentUser", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link UserPage} of {@link User} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code email}</td>
     * <td>{@link User#email}</td>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link User#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link User#name}</td>
     * </tr>
     * <tr>
     * <td>{@code roleId}</td>
     * <td>{@link User#roleId}
     * </tr>
     * <tr>
     * <td>{@code rolename}</td>
     * <td>{@link User#roleName}
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@code ACTIVE} if {@link User#isActive} is true; {@code INACTIVE}
     * otherwise</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of users
     * @return the users that match the given filter
     */
    public function getUsersByStatement($filterStatement)
    {
        $args = new GetUsersByStatement($filterStatement);
        $result = $this->__soapCall("getUsersByStatement", array($args));

        return $result->rval;
    }
    /**
     * Performs actions on {@link User} objects that match the given
     * {@link Statement#query}.
     *
     * @param userAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of users
     * @return the result of the action performed
     */
    public function performUserAction($userAction, $filterStatement)
    {
        $args = new PerformUserAction($userAction, $filterStatement);
        $result = $this->__soapCall("performUserAction", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link User} objects.
     *
     * @param users the users to update
     * @return the updated users
     */
    public function updateUsers($users)
    {
        $args = new UpdateUsers($users);
        $result = $this->__soapCall("updateUsers", array($args));

        return $result->rval;
    }
  }
}

