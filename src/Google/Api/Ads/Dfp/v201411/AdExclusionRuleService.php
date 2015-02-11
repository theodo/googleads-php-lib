<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the AdExclusionRuleService
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




































































if (!class_exists("AdExclusionRuleService", false)) {
    /**
   * AdExclusionRuleService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class AdExclusionRuleService extends DfpSoapClient
  {

    const SERVICE_NAME = "AdExclusionRuleService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/AdExclusionRuleService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/AdExclusionRuleService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "ActivateAdExclusionRules" => "ActivateAdExclusionRules",
      "AdExclusionRuleAction" => "AdExclusionRuleAction",
      "AdExclusionRule" => "AdExclusionRule",
      "AdExclusionRuleError" => "AdExclusionRuleError",
      "AdExclusionRulePage" => "AdExclusionRulePage",
      "AdUnitTargeting" => "AdUnitTargeting",
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
      "DeactivateAdExclusionRules" => "DeactivateAdExclusionRules",
      "FeatureError" => "FeatureError",
      "InternalApiError" => "InternalApiError",
      "InventoryTargeting" => "InventoryTargeting",
      "NotNullError" => "NotNullError",
      "NumberValue" => "NumberValue",
      "PermissionError" => "PermissionError",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RequiredCollectionError" => "RequiredCollectionError",
      "RequiredError" => "RequiredError",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "StringLengthError" => "StringLengthError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "TextValue" => "TextValue",
      "UniqueError" => "UniqueError",
      "UpdateResult" => "UpdateResult",
      "Value" => "Value",
      "AdExclusionRuleError.Reason" => "AdExclusionRuleErrorReason",
      "AdExclusionRuleType" => "AdExclusionRuleType",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "FeatureError.Reason" => "FeatureErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NotNullError.Reason" => "NotNullErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "createAdExclusionRules" => "CreateAdExclusionRules",
      "createAdExclusionRulesResponse" => "CreateAdExclusionRulesResponse",
      "getAdExclusionRulesByStatement" => "GetAdExclusionRulesByStatement",
      "getAdExclusionRulesByStatementResponse" => "GetAdExclusionRulesByStatementResponse",
      "performAdExclusionRuleAction" => "PerformAdExclusionRuleAction",
      "performAdExclusionRuleActionResponse" => "PerformAdExclusionRuleActionResponse",
      "updateAdExclusionRules" => "UpdateAdExclusionRules",
      "updateAdExclusionRulesResponse" => "UpdateAdExclusionRulesResponse",
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
     * Creates new {@link AdExclusionRule} objects.
     * @param adExclusionRules the ad exclusion rules to create
     * @return the created rules with their IDs filled in
     */
    public function createAdExclusionRules($adExclusionRules)
    {
        $args = new CreateAdExclusionRules($adExclusionRules);
        $result = $this->__soapCall("createAdExclusionRules", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link AdExclusionRulePage} of {@link AdExclusionRule} objects that satisfy the
     * given {@link Statement#query}.  The following fields are supported for
     * filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link AdExclusionRule#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link AdExclusionRule#name}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link AdExclusionRule#status}</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of rules
     * @return the rules that match the given filter
     */
    public function getAdExclusionRulesByStatement($filterStatement)
    {
        $args = new GetAdExclusionRulesByStatement($filterStatement);
        $result = $this->__soapCall("getAdExclusionRulesByStatement", array($args));

        return $result->rval;
    }
    /**
     * Performs action on {@link AdExclusionRule} objects that satisfy the
     * given {@link Statement#query}.
     *
     * @param adExclusionRuleAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of ad exclusion rules
     * @return the result of the action performed
     */
    public function performAdExclusionRuleAction($adExclusionRuleAction, $filterStatement)
    {
        $args = new PerformAdExclusionRuleAction($adExclusionRuleAction, $filterStatement);
        $result = $this->__soapCall("performAdExclusionRuleAction", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link AdExclusionRule} objects.
     *
     * @param adExclusionRules the ad exclusion rules to update
     * @return the updated rules
     */
    public function updateAdExclusionRules($adExclusionRules)
    {
        $args = new UpdateAdExclusionRules($adExclusionRules);
        $result = $this->__soapCall("updateAdExclusionRules", array($args));

        return $result->rval;
    }
  }
}

