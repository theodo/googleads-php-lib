<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the DataService
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
 * @package    Google_Api_Ads_AdWords_v201409
 * @subpackage v201409
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient ;
















































if (!class_exists("QueryAdGroupBidLandscape", false)) {
    /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns a list of {@link AdGroupBidLandscape}s for the ad groups that match the query. In the
   * result, the returned {@link LandscapePoint}s are grouped into {@link AdGroupBidLandscape}s
   * by their ad groups, and numberResults of paging limits the total number of
   * {@link LandscapePoint}s instead of number of {@link AdGroupBidLandscape}s.
   *
   * @param query The SQL-like AWQL query string.
   * @return A list of bid landscapes.
   * @throws ApiException if problems occur while parsing the query or fetching bid landscapes.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class QueryAdGroupBidLandscape
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var string
     */
    public $query;

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

      public function __construct($query = null)
      {
          $this->query = $query;
      }
  }
}

