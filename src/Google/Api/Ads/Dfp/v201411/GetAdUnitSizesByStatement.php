<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the InventoryService
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










































































































if (!class_exists("GetAdUnitSizesByStatement", false)) {
    /**
   * Gets a set of {@link AdUnitSize} objects that satisfy the given
   * {@link Statement#query}. The following fields are supported for filtering:
   *
   * <table>
   * <tr>
   * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
   * </tr>
   * <tr>
   * <td>{@code targetPlatform}</td>
   * <td>{@link TargetPlatform}</td>
   * </tr>
   * </table>
   * An exception will be thrown for queries with unsupported fields.
   *
   * Paging is not supported, as aren't the LIMIT and OFFSET PQL keywords.
   *
   * Only "=" operator is supported.
   *
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of ad unit sizes
   * @return the ad unit sizes that match the given filter
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class GetAdUnitSizesByStatement
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

