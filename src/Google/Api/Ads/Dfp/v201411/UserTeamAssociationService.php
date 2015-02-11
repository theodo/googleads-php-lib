<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the UserTeamAssociationService
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


if (!class_exists("UserTeamAssociationService", false)) {
    /**
   * UserTeamAssociationService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class UserTeamAssociationService extends DfpSoapClient
  {

    const SERVICE_NAME = "UserTeamAssociationService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/UserTeamAssociationService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/UserTeamAssociationService";
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
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DeleteUserTeamAssociations" => "DeleteUserTeamAssociations",
      "FeatureError" => "FeatureError",
      "InternalApiError" => "InternalApiError",
      "NotNullError" => "NotNullError",
      "NullError" => "NullError",
      "NumberValue" => "NumberValue",
      "PermissionError" => "PermissionError",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "TextValue" => "TextValue",
      "UpdateResult" => "UpdateResult",
      "UserRecordTeamAssociation" => "UserRecordTeamAssociation",
      "UserTeamAssociationAction" => "UserTeamAssociationAction",
      "UserTeamAssociation" => "UserTeamAssociation",
      "UserTeamAssociationPage" => "UserTeamAssociationPage",
      "Value" => "Value",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "FeatureError.Reason" => "FeatureErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NotNullError.Reason" => "NotNullErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "TeamAccessType" => "TeamAccessType",
      "createUserTeamAssociations" => "CreateUserTeamAssociations",
      "createUserTeamAssociationsResponse" => "CreateUserTeamAssociationsResponse",
      "getUserTeamAssociationsByStatement" => "GetUserTeamAssociationsByStatement",
      "getUserTeamAssociationsByStatementResponse" => "GetUserTeamAssociationsByStatementResponse",
      "performUserTeamAssociationAction" => "PerformUserTeamAssociationAction",
      "performUserTeamAssociationActionResponse" => "PerformUserTeamAssociationActionResponse",
      "updateUserTeamAssociations" => "UpdateUserTeamAssociations",
      "updateUserTeamAssociationsResponse" => "UpdateUserTeamAssociationsResponse",
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
     * Creates new {@link UserTeamAssociation} objects.
     *
     * @param userTeamAssociations the user team associations to create
     * @return the created user team associations with their IDs filled in
     */
    public function createUserTeamAssociations($userTeamAssociations)
    {
        $args = new CreateUserTeamAssociations($userTeamAssociations);
        $result = $this->__soapCall("createUserTeamAssociations", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link UserTeamAssociationPage} of {@link UserTeamAssociation}
     * objects that satisfy the given {@link Statement#query}. The following
     * fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code userId}</td>
     * <td>{@link UserTeamAssociation#userId}</td>
     * </tr>
     * <tr>
     * <td>{@code teamId}</td>
     * <td>{@link UserTeamAssociation#teamId}</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of user team associations
     * @return the user team associations that match the given filter
     */
    public function getUserTeamAssociationsByStatement($filterStatement)
    {
        $args = new GetUserTeamAssociationsByStatement($filterStatement);
        $result = $this->__soapCall("getUserTeamAssociationsByStatement", array($args));

        return $result->rval;
    }
    /**
     * Performs actions on {@link UserTeamAssociation} objects that match the
     * given {@link Statement#query}.
     *
     * @param userTeamAssociationAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of user team associations
     * @return the result of the action performed
     */
    public function performUserTeamAssociationAction($userTeamAssociationAction, $statement)
    {
        $args = new PerformUserTeamAssociationAction($userTeamAssociationAction, $statement);
        $result = $this->__soapCall("performUserTeamAssociationAction", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link UserTeamAssociation} objects.
     *
     * @param userTeamAssociations the user team associations to update
     * @return the updated user team associations
     */
    public function updateUserTeamAssociations($userTeamAssociations)
    {
        $args = new UpdateUserTeamAssociations($userTeamAssociations);
        $result = $this->__soapCall("updateUserTeamAssociations", array($args));

        return $result->rval;
    }
  }
}

