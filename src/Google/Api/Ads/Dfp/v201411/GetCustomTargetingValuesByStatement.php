<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the CustomTargetingService
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

































































if (!class_exists("GetCustomTargetingValuesByStatement", false)) {
    /**
   * Gets a {@link CustomTargetingValuePage} of {@link CustomTargetingValue}
   * objects that satisfy the given {@link Statement#query}.
   * <p>
   * The {@code WHERE} clause in the {@link Statement#query} must always contain
   * {@link CustomTargetingValue#customTargetingKeyId} as one of its columns in
   * a way that it is AND'ed with the rest of the query. So, if you want to
   * retrieve values for a known set of key ids, valid {@link Statement#query}
   * would look like:
   * </p>
   * <ol>
   * <li>
   * "WHERE customTargetingKeyId IN ('17','18','19')" retrieves all values that
   * are associated with keys having ids 17, 18, 19.
   * </li>
   * <li>
   * "WHERE customTargetingKeyId = '17' AND name = 'red'" retrieves values that
   * are associated with keys having id 17 and value name is 'red'.
   * </li>
   * </ol>
   * </p>
   * <p>
   * The following fields are supported for filtering:
   * </p>
   * <table>
   * <tr>
   * <th scope="col">PQL Property</th>
   * <th scope="col">Object Property</th>
   * </tr>
   * <tr>
   * <td>{@code id}</td>
   * <td>{@link CustomTargetingValue#id}</td>
   * </tr>
   * <tr>
   * <td>{@code customTargetingKeyId}</td>
   * <td>{@link CustomTargetingValue#customTargetingKeyId}</td>
   * </tr>
   * <tr>
   * <td>{@code name}</td>
   * <td>{@link CustomTargetingValue#name}</td>
   * </tr>
   * <tr>
   * <td>{@code displayName}</td>
   * <td>{@link CustomTargetingValue#displayName}</td>
   * </tr>
   * <tr>
   * <td>{@code matchType}</td>
   * <td>{@link CustomTargetingValue#matchType}</td>
   * </tr>
   * </table>
   *
   * @param filterStatement a Publisher Query Language statement used to filter
   * a set of custom targeting values
   * @return the custom targeting values that match the given filter
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class GetCustomTargetingValuesByStatement
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

