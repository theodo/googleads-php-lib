<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the LiveStreamEventService
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











































































if (!class_exists("LiveStreamEventService", false)) {
    /**
   * LiveStreamEventService
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class LiveStreamEventService extends DfpSoapClient
  {

    const SERVICE_NAME = "LiveStreamEventService";
      const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const ENDPOINT = "https://ads.google.com/apis/ads/publisher/v201411/LiveStreamEventService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://ads.google.com/apis/ads/publisher/v201411/LiveStreamEventService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "ObjectValue" => "ObjectValue",
      "ActivateLiveStreamEvents" => "ActivateLiveStreamEvents",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApiVersionError" => "ApiVersionError",
      "ApplicationException" => "ApplicationException",
      "ArchiveLiveStreamEvents" => "ArchiveLiveStreamEvents",
      "AuthenticationError" => "AuthenticationError",
      "BooleanValue" => "BooleanValue",
      "CommonError" => "CommonError",
      "Date" => "Date",
      "DateTime" => "DfpDateTime",
      "DateTimeValue" => "DateTimeValue",
      "DateValue" => "DateValue",
      "FeatureError" => "FeatureError",
      "InternalApiError" => "InternalApiError",
      "InvalidUrlError" => "InvalidUrlError",
      "LiveStreamEventAction" => "LiveStreamEventAction",
      "LiveStreamEventActionError" => "LiveStreamEventActionError",
      "LiveStreamEventDateTimeError" => "LiveStreamEventDateTimeError",
      "LiveStreamEvent" => "LiveStreamEvent",
      "LiveStreamEventPage" => "LiveStreamEventPage",
      "NotNullError" => "NotNullError",
      "NullError" => "NullError",
      "NumberValue" => "NumberValue",
      "ParseError" => "ParseError",
      "PauseLiveStreamEventAds" => "PauseLiveStreamEventAds",
      "PauseLiveStreamEvents" => "PauseLiveStreamEvents",
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
      "UpdateResult" => "UpdateResult",
      "Value" => "Value",
      "ApiVersionError.Reason" => "ApiVersionErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "CommonError.Reason" => "CommonErrorReason",
      "FeatureError.Reason" => "FeatureErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "InvalidUrlError.Reason" => "InvalidUrlErrorReason",
      "LiveStreamEventActionError.Reason" => "LiveStreamEventActionErrorReason",
      "LiveStreamEventDateTimeError.Reason" => "LiveStreamEventDateTimeErrorReason",
      "LiveStreamEventStatus" => "LiveStreamEventStatus",
      "NotNullError.Reason" => "NotNullErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "ParseError.Reason" => "ParseErrorReason",
      "PermissionError.Reason" => "PermissionErrorReason",
      "PublisherQueryLanguageContextError.Reason" => "PublisherQueryLanguageContextErrorReason",
      "PublisherQueryLanguageSyntaxError.Reason" => "PublisherQueryLanguageSyntaxErrorReason",
      "QuotaError.Reason" => "QuotaErrorReason",
      "RequiredCollectionError.Reason" => "RequiredCollectionErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "ServerError.Reason" => "ServerErrorReason",
      "StatementError.Reason" => "StatementErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "createLiveStreamEvents" => "CreateLiveStreamEvents",
      "createLiveStreamEventsResponse" => "CreateLiveStreamEventsResponse",
      "getLiveStreamEventsByStatement" => "GetLiveStreamEventsByStatement",
      "getLiveStreamEventsByStatementResponse" => "GetLiveStreamEventsByStatementResponse",
      "performLiveStreamEventAction" => "PerformLiveStreamEventAction",
      "performLiveStreamEventActionResponse" => "PerformLiveStreamEventActionResponse",
      "updateLiveStreamEvents" => "UpdateLiveStreamEvents",
      "updateLiveStreamEventsResponse" => "UpdateLiveStreamEventsResponse",
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
     * Creates new {@link LiveStreamEvent} objects.
     *
     * The following fields are required:
     * <ul>
     * <li>{@link LiveStreamEvent#name}</li>
     * <li>{@link LiveStreamEvent#startDateTime}</li>
     * <li>{@link LiveStreamEvent#endDateTime}</li>
     * <li>{@link LiveStreamEvent#contentUrls}</li>
     * <li>{@link LiveStreamEvent#adTags}</li>
     * </ul>
     *
     * @param liveStreamEvents the live stream events to create
     * @return the created live stream events with their IDs filled in
     */
    public function createLiveStreamEvents($liveStreamEvents)
    {
        $args = new CreateLiveStreamEvents($liveStreamEvents);
        $result = $this->__soapCall("createLiveStreamEvents", array($args));

        return $result->rval;
    }
    /**
     * Gets a {@link LiveStreamEventPage} of {@link LiveStreamEvent} objects that
     * satisfy the given {@link Statement#query}. The following fields are
     * supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link LiveStreamEvent#id}</td>
     * </tr>
     * </table>
     *
     * @param filterStatement a Publisher Query Language statement to filter a
     * list of live stream events
     * @return the live stream events that match the filter
     */
    public function getLiveStreamEventsByStatement($filterStatement)
    {
        $args = new GetLiveStreamEventsByStatement($filterStatement);
        $result = $this->__soapCall("getLiveStreamEventsByStatement", array($args));

        return $result->rval;
    }
    /**
     * Performs actions on {@link LiveStreamEvent} objects that match the given
     * {@link Statement#query}.
     *
     * @param liveStreamEventAction the action to perform
     * @param filterStatement a Publisher Query Language statement used to filter
     * a set of live stream events
     * @return the result of the action performed
     */
    public function performLiveStreamEventAction($liveStreamEventAction, $filterStatement)
    {
        $args = new PerformLiveStreamEventAction($liveStreamEventAction, $filterStatement);
        $result = $this->__soapCall("performLiveStreamEventAction", array($args));

        return $result->rval;
    }
    /**
     * Updates the specified {@link LiveStreamEvent} objects.
     *
     * @param liveStreamEvents the live stream events to update
     * @return the          updated live stream events
     * @throws ApiException if there is an error updating the live stream events
     */
    public function updateLiveStreamEvents($liveStreamEvents)
    {
        $args = new UpdateLiveStreamEvents($liveStreamEvents);
        $result = $this->__soapCall("updateLiveStreamEvents", array($args));

        return $result->rval;
    }
  }
}

