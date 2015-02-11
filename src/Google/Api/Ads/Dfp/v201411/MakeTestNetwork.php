<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the NetworkService
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


if (!class_exists("MakeTestNetwork", false)) {
    /**
   * Creates a new blank network for testing purposes using the current login.
   * <p>
   * Each login(i.e. email address) can only have one test network. Data from
   * any of your existing networks will not be transferred to the new test network.
   * Once the test network is created, the test network can be used in the API
   * by supplying the {@link Network#networkCode} in the SOAP header or by
   * logging into the DFP UI.
   * <p>
   * Test networks are limited in the following ways:
   * <ul>
   * <li>Test networks cannot serve ads.</li>
   * <li>Because test networks cannot serve ads, reports will always come
   * back without data.</li>
   * <li>Since forecasting requires serving history, forecast service results
   * will be faked. See {@link ForecastService} for more info.</li>
   * <li>Test networks are, by default, small business networks and do not have any
   * premium features. To have additional features turned on, please contact your
   * account manager. </li>
   * <li>Test networks are limited to 10,000 objects per entity type.</li>
   * </ul>
   * </p>
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class MakeTestNetwork
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct()
      {
      }
  }
}

