<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the ProductService
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







































































































if (!class_exists("GetProductsByStatement", false)) {
    /**
   * Gets a {@link ProductPage} of {@link Product} objects that satisfy the criteria specified by
   * given {@link Statement#query}. The following fields are supported for filtering and/or sorting:
   *
   * <table>
   * <tr>
   * <th scope="col">PQL Property</th>
   * <th scope="col">Object Property</th>
   * <th scope="col">Filterable</th>
   * <th scope="col">Sortable</th>
   * </tr>
   * <tr>
   * <td>{@code rateCardId}</td>
   * <td>Rate card ID which the product is associated with</td>
   * <td>Yes</td>
   * <td>No</td>
   * </tr>
   * <tr>
   * <td>{@code status}</td>
   * <td>{@link Product#status}</td>
   * <td>Yes</td>
   * <td>Yes</td>
   * </tr>
   * <tr>
   * <td>{@code lineItemType}</td>
   * <td>{@link Product#lineItemType}</td>
   * <td>Yes</td>
   * <td>Yes</td>
   * </tr>
   * <td>{@code productType}</td>
   * <td>{@link Product#productType}</td>
   * <td>Yes</td>
   * <td>Yes</td>
   * </tr>
   * <tr>
   * <td>{@code rateType}</td>
   * <td>{@link Product#rateType}</td>
   * <td>Yes</td>
   * <td>Yes</td>
   * </tr>
   * <tr>
   * <td>{@code productTemplateId}</td>
   * <td>{@link Product#productTemplateId}</td>
   * <td>Yes</td>
   * <td>No</td>
   * </tr>
   * <tr>
   * <td>{@code name}</td>
   * <td>{@link Product#name}</td>
   * <td>Yes</td>
   * <td>Yes</td>
   * </tr>
   * <tr>
   * <td>{@code description}</td>
   * <td>{@link Product#description}</td>
   * <td>Yes</td>
   * <td>No</td>
   * </tr>
   * <tr>
   * <td>{@code id}</td>
   * <td>{@link Product#id}</td>
   * <td>Yes</td>
   * <td>Yes</td>
   * </tr>
   * <tr>
   * <td>{@code lastModifiedDateTime}</td>
   * <td>{@link Product#lastModifiedDateTime}</td>
   * <td>Yes</td>
   * <td>Yes</td>
   * </tr>
   * </table>
   *
   * @param statement a Publisher Query Language statement which specifies the filtering
   * criteria over products
   * @return the products that match the given statement
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class GetProductsByStatement
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var Statement
     */
    public $statement;

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

      public function __construct($statement = null)
      {
          $this->statement = $statement;
      }
  }
}

