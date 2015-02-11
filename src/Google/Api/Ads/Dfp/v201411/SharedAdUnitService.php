<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the SharedAdUnitService
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


if (!class_exists("SharedAdUnitService", false)) {
    /**
   * SharedAdUnitService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class SharedAdUnitService extends DfpSoapClient
  {

    const SERVICE_NAME = "SharedAdUnitService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/SharedAdUnitService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/SharedAdUnitService";
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
      "ApproveSharedAdUnits" => "ApproveSharedAdUnits",
      "AuthenticationError" => "AuthenticationError",
      "BooleanValue" => "BooleanValue",
      "CommonError" => "CommonError",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "FeatureError" => "FeatureError",
      "InternalApiError" => "InternalApiError",
      "AdUnitSize" => "AdUnitSize",
      "NotNullError" => "NotNullError",
      "NumberValue" => "NumberValue",
      "PermissionError" => "PermissionError",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RejectSharedAdUnits" => "RejectSharedAdUnits",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "SharedAdUnitAction" => "SharedAdUnitAction",
      "SharedAdUnit" => "SharedAdUnit",
      "SharedAdUnitPage" => "SharedAdUnitPage",
      "Size" => "Size",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "TextValue" => "TextValue",
      "UniqueError" => "UniqueError",
      "UpdateResult" => "UpdateResult",
      "Value" => "Value",
      "AdUnit.TargetWindow" => "AdUnitTargetWindow",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "EnvironmentType" => "EnvironmentType",
      "FeatureError.Reason" => "FeatureErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NotNullError.Reason" => "NotNullErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "SharedAdUnitStatus" => "SharedAdUnitStatus",
      "StatementError.Reason" => "StatementErrorReason",
      "TargetPlatform" => "TargetPlatform",
      "getSharedAdUnitsByStatement" => "GetSharedAdUnitsByStatement",
      "getSharedAdUnitsByStatementResponse" => "GetSharedAdUnitsByStatementResponse",
      "performSharedAdUnitAction" => "PerformSharedAdUnitAction",
      "performSharedAdUnitActionResponse" => "PerformSharedAdUnitActionResponse",
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
     * Gets a {@link SharedAdUnitPage} of {@link SharedAdUnit} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link SharedAdUnit#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link SharedAdUnit#name}</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of shared ad units
     * @return the shared ad units that match the given filter
     */
    public function getSharedAdUnitsByStatement($filterStatement)
    {
        $args = new GetSharedAdUnitsByStatement($filterStatement);
        $result = $this->__soapCall("getSharedAdUnitsByStatement", array($args));

        return $result->rval;
    }
    /**
     * Performs actions on shared ad unit objects that match the given
     * {@link Statement#query}.
     *
     * @param sharedAdUnitAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of shared ad units
     * @return the result of the update action, which contains the number of shared ad units
     *             on which the action was performed.
     */
    public function performSharedAdUnitAction($sharedAdUnitAction, $filterStatement)
    {
        $args = new PerformSharedAdUnitAction($sharedAdUnitAction, $filterStatement);
        $result = $this->__soapCall("performSharedAdUnitAction", array($args));

        return $result->rval;
    }
  }
}

