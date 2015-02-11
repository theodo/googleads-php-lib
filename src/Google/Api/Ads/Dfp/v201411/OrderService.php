<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the OrderService
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



































































































































































if (!class_exists("OrderService", false)) {
    /**
   * OrderService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class OrderService extends DfpSoapClient
  {

    const SERVICE_NAME = "OrderService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/OrderService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/OrderService";
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
      "AppliedLabel" => "AppliedLabel",
      "ApproveAndOverbookOrders" => "ApproveAndOverbookOrders",
      "ApproveOrders" => "ApproveOrders",
      "ApproveOrdersWithoutReservationChanges" => "ApproveOrdersWithoutReservationChanges",
      "ArchiveOrders" => "ArchiveOrders",
      "AudienceExtensionError" => "AudienceExtensionError",
      "AuthenticationError" => "AuthenticationError",
      "BaseCustomFieldValue" => "BaseCustomFieldValue",
      "BooleanValue" => "BooleanValue",
      "ClickTrackingLineItemError" => "ClickTrackingLineItemError",
      "CommonError" => "CommonError",
      "CompanyCreditStatusError" => "CompanyCreditStatusError",
      "ContentMetadataTargetingError" => "ContentMetadataTargetingError",
      "CreativeError" => "CreativeError",
      "CrossSellError" => "CrossSellError",
      "CustomFieldValue" => "CustomFieldValue",
      "CustomFieldValueError" => "CustomFieldValueError",
      "CustomTargetingError" => "CustomTargetingError",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeRangeTargetingError" => "DateTimeRangeTargetingError",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "DayPartTargetingError" => "DayPartTargetingError",
      "DeleteOrders" => "DeleteOrders",
      "DisapproveOrders" => "DisapproveOrders",
      "DisapproveOrdersWithoutReservationChanges" => "DisapproveOrdersWithoutReservationChanges",
      "DropDownCustomFieldValue" => "DropDownCustomFieldValue",
      "EntityChildrenLimitReachedError" => "EntityChildrenLimitReachedError",
      "EntityLimitReachedError" => "EntityLimitReachedError",
      "FeatureError" => "FeatureError",
      "ForecastError" => "ForecastError",
      "FrequencyCapError" => "FrequencyCapError",
      "GenericTargetingError" => "GenericTargetingError",
      "GeoTargetingError" => "GeoTargetingError",
      "InternalApiError" => "InternalApiError",
      "InvalidEmailError" => "InvalidEmailError",
      "InvalidUrlError" => "InvalidUrlError",
      "InventoryTargetingError" => "InventoryTargetingError",
      "LabelEntityAssociationError" => "LabelEntityAssociationError",
      "LineItemActivityAssociationError" => "LineItemActivityAssociationError",
      "LineItemCreativeAssociationError" => "LineItemCreativeAssociationError",
      "LineItemError" => "LineItemError",
      "LineItemFlightDateError" => "LineItemFlightDateError",
      "LineItemOperationError" => "LineItemOperationError",
      "Money" => "Money",
      "NotNullError" => "NotNullError",
      "NullError" => "NullError",
      "NumberValue" => "NumberValue",
      "OrderAction" => "OrderAction",
      "OrderActionError" => "OrderActionError",
      "Order" => "Order",
      "OrderError" => "OrderError",
      "OrderPage" => "OrderPage",
      "ParseError" => "ParseError",
      "PauseOrders" => "PauseOrders",
      "PermissionError" => "PermissionError",
      "ProgrammaticError" => "ProgrammaticError",
      "ProgrammaticSettings" => "ProgrammaticSettings",
      "PublisherQueryLanguageContextError" => "PublisherQueryLanguageContextError",
      "PublisherQueryLanguageSyntaxError" => "PublisherQueryLanguageSyntaxError",
      "QuotaError" => "QuotaError",
      "RangeError" => "RangeError",
      "RequiredCollectionError" => "RequiredCollectionError",
      "RequiredError" => "RequiredError",
      "RequiredNumberError" => "RequiredNumberError",
      "RequiredSizeError" => "RequiredSizeError",
      "ReservationDetailsError" => "ReservationDetailsError",
      "ResumeAndOverbookOrders" => "ResumeAndOverbookOrders",
      "ResumeOrders" => "ResumeOrders",
      "RetractOrders" => "RetractOrders",
      "RetractOrdersWithoutReservationChanges" => "RetractOrdersWithoutReservationChanges",
      "ServerError" => "ServerError",
      "SetValue" => "SetValue",
      "SoapRequestHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "Statement" => "Statement",
      "StatementError" => "StatementError",
      "StringLengthError" => "StringLengthError",
      "String_ValueMapEntry" => "String_ValueMapEntry",
      "SubmitOrdersForApproval" => "SubmitOrdersForApproval",
      "SubmitOrdersForApprovalAndOverbook" => "SubmitOrdersForApprovalAndOverbook",
      "SubmitOrdersForApprovalWithoutReservationChanges" => "SubmitOrdersForApprovalWithoutReservationChanges",
      "TeamError" => "TeamError",
      "TechnologyTargetingError" => "TechnologyTargetingError",
      "TemplateInstantiatedCreativeError" => "TemplateInstantiatedCreativeError",
      "TextValue" => "TextValue",
      "TypeError" => "TypeError",
      "UnarchiveOrders" => "UnarchiveOrders",
      "UniqueError" => "UniqueError",
      "UpdateResult" => "UpdateResult",
      "UserDomainTargetingError" => "UserDomainTargetingError",
      "Value" => "Value",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AudienceExtensionError.Reason" => "AudienceExtensionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "BillingTermsType" => "BillingTermsType",
      "BuyerPlatform" => "BuyerPlatform",
      "ClickTrackingLineItemError.Reason" => "ClickTrackingLineItemErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "CompanyCreditStatusError.Reason" => "CompanyCreditStatusErrorReason",
      "ContentMetadataTargetingError.Reason" => "ContentMetadataTargetingErrorReason",
      "CreativeError.Reason" => "CreativeErrorReason",
      "CrossSellError.Reason" => "CrossSellErrorReason",
      "CustomFieldValueError.Reason" => "CustomFieldValueErrorReason",
      "CustomTargetingError.Reason" => "CustomTargetingErrorReason",
      "DateTimeRangeTargetingError.Reason" => "DateTimeRangeTargetingErrorReason",
      "DayPartTargetingError.Reason" => "DayPartTargetingErrorReason",
      "EntityChildrenLimitReachedError.Reason" => "EntityChildrenLimitReachedErrorReason",
      "FeatureError.Reason" => "FeatureErrorReason",
      "ForecastError.Reason" => "ForecastErrorReason",
      "FrequencyCapError.Reason" => "FrequencyCapErrorReason",
      "GenericTargetingError.Reason" => "GenericTargetingErrorReason",
      "GeoTargetingError.Reason" => "GeoTargetingErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "InvalidEmailError.Reason" => "InvalidEmailErrorReason",
      "InvalidUrlError.Reason" => "InvalidUrlErrorReason",
      "InventoryTargetingError.Reason" => "InventoryTargetingErrorReason",
      "LabelEntityAssociationError.Reason" => "LabelEntityAssociationErrorReason",
      "LineItemActivityAssociationError.Reason" => "LineItemActivityAssociationErrorReason",
      "LineItemCreativeAssociationError.Reason" => "LineItemCreativeAssociationErrorReason",
      "LineItemError.Reason" => "LineItemErrorReason",
      "LineItemFlightDateError.Reason" => "LineItemFlightDateErrorReason",
      "LineItemOperationError.Reason" => "LineItemOperationErrorReason",
      "NotNullError.Reason" => "NotNullErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "OrderActionError.Reason" => "OrderActionErrorReason",
      "OrderError.Reason" => "OrderErrorReason",
      "OrderStatus" => "OrderStatus",
      "ParseError.Reason" => "ParseErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "ProgrammaticError.Reason" => "ProgrammaticErrorReason",
      "ProgrammaticStatus" => "ProgrammaticStatus",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "RequiredNumberError.Reason" => "RequiredNumberErrorReason",
      "RequiredSizeError.Reason" => "RequiredSizeErrorReason",
      "ReservationDetailsError.Reason" => "ReservationDetailsErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "TeamError.Reason" => "TeamErrorReason",
      "TechnologyTargetingError.Reason" => "TechnologyTargetingErrorReason",
      "TemplateInstantiatedCreativeError.Reason" => "TemplateInstantiatedCreativeErrorReason",
      "UserDomainTargetingError.Reason" => "UserDomainTargetingErrorReason",
      "createOrders" => "CreateOrders",
      "createOrdersResponse" => "CreateOrdersResponse",
      "getOrdersByStatement" => "GetOrdersByStatement",
      "getOrdersByStatementResponse" => "GetOrdersByStatementResponse",
      "performOrderAction" => "PerformOrderAction",
      "performOrderActionResponse" => "PerformOrderActionResponse",
      "updateOrders" => "UpdateOrders",
      "updateOrdersResponse" => "UpdateOrdersResponse",
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
     * Creates new {@link Order} objects.
     *
     * @param orders the orders to create
     * @return the created orders with their IDs filled in
     */
    public function createOrders($orders)
    {
        $args = new CreateOrders($orders);
        $result = $this->__soapCall("createOrders", array($args));

        return $result->rval;
    }
    /**
     * Gets an {@link OrderPage} of {@link Order} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code advertiserId}</td>
     * <td>{@link Order#advertiserId}</td>
     * </tr>
     * <tr>
     * <td>{@code endDateTime}</td>
     * <td>{@link Order#endDateTime}</td>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Order#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Order#name}</td>
     * </tr>
     * <tr>
     * <td>{@code salespersonId}</td>
     * <td>{@link Order#salespersonId}</td>
     * </tr>
     * <tr>
     * <td>{@code startDateTime}</td>
     * <td>{@link Order#startDateTime}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link Order#status}</td>
     * </tr>
     * <tr>
     * <td>{@code traffickerId}</td>
     * <td>{@link Order#traffickerId}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link Order#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of orders
     * @return the orders that match the given filter
     */
    public function getOrdersByStatement($filterStatement)
    {
        $args = new GetOrdersByStatement($filterStatement);
        $result = $this->__soapCall("getOrdersByStatement", array($args));

        return $result->rval;
    }
    /**
     * Performs actions on {@link Order} objects that match the given
     * {@link Statement#query}.
     *
     * @param orderAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of orders
     * @return the result of the action performed
     */
    public function performOrderAction($orderAction, $filterStatement)
    {
        $args = new PerformOrderAction($orderAction, $filterStatement);
        $result = $this->__soapCall("performOrderAction", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link Order} objects.
     *
     * @param orders the orders to update
     * @return the updated orders
     */
    public function updateOrders($orders)
    {
        $args = new UpdateOrders($orders);
        $result = $this->__soapCall("updateOrders", array($args));

        return $result->rval;
    }
  }
}

