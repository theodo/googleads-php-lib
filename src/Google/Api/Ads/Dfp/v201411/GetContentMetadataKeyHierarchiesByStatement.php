<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the ContentMetadataKeyHierarchyService
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


if (!class_exists("GetContentMetadataKeyHierarchiesByStatement", false)) {
    /**
   * Gets a {@link ContentMetadataKeyHierarchyPage} of {@link ContentMetadataKeyHierarchy}
   * objects that satisfy the given {@link Statement#query}. The following fields are supported
   * for filtering:
   *
   * <table>
   * <tr>
   * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
   * </tr>
   * <tr>
   * <td>{@code id}</td>
   * <td>{@link ContentMetadataKeyHierarchy#id}</td>
   * </tr>
   * <tr>
   * <td>{@code name}</td>
   * <td>{@link ContentMetadataKeyHierarchy#name}</td>
   * </tr>
   * <tr>
   * <td>{@code status}</td>
   * <td>{@link ContentMetadataKeyHierarchy#status}</td>
   * </tr>
   * </table>
   *
   * @param filterStatement a Publisher Query Language statement used to filter a set of
   * content metadata key hierarchies
   * @return the content metadata key hierarchies that match the given filter
   * @throws ApiException if the ID of the active network does not exist or there is a
   * backend error
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class GetContentMetadataKeyHierarchiesByStatement
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

