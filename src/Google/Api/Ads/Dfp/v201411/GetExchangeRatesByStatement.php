<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the ExchangeRateService
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


if (!class_exists("GetExchangeRatesByStatement", false)) {
    /**
   * Gets a {@link ExchangeRatePage} of {@link ExchangeRate} objects that satisfy the given
   * {@link Statement#query}. The following fields are supported for filtering:
   *
   * <table>
   * <tr>
   * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
   * </tr>
   * <tr>
   * <td>{@code id}</td>
   * <td>{@link ExchangeRate#id}</td>
   * </tr>
   * <tr>
   * <td>{@code currencyCode}</td>
   * <td>{@link ExchangeRate#currencyCode}</td>
   * </tr>
   * <tr>
   * <td>{@code refreshRate}</td>
   * <td>{@link ExchangeRate#refreshRate}</td>
   * </tr>
   * <tr>
   * <td>{@code direction}</td>
   * <td>{@link ExchangeRate#direction}</td>
   * </tr>
   * <tr>
   * <td>{@code exchangeRate}</td>
   * <td>{@link ExchangeRate#exchangeRate}</td>
   * </tr>
   * </table>
   *
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of exchange rates
   * @return the exchange rates that match the given filter
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class GetExchangeRatesByStatement
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var Statement
     */
    public $filterStatement;

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

      public function __construct($filterStatement = null)
      {
          $this->filterStatement = $filterStatement;
      }
  }
}

