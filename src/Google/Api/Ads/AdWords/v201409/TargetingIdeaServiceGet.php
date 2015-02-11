<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the TargetingIdeaService
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


if (!class_exists("TargetingIdeaServiceGet", false)) {
    /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns a page of ideas that match the query described by the specified
   * {@link TargetingIdeaSelector}.
   *
   * <p>The selector must specify a {@code paging} value, with {@code numberResults} set to 800 or
   * less.  Large result sets must be composed through multiple calls to this method, advancing the
   * paging {@code startIndex} value by {@code numberResults} with each call.
   *
   * <p>Only a relatively small total number of results will be available through this method.
   * Much larger result sets may be available using
   * {@link #getBulkKeywordIdeas(TargetingIdeaSelector)} at the price of reduced flexibility in
   * selector options.
   *
   * @param selector Query describing the types of results to return when
   * finding matches (similar keyword ideas/placement ideas).
   * @return A {@link TargetingIdeaPage} of results, that is a subset of the
   * list of possible ideas meeting the criteria of the
   * {@link TargetingIdeaSelector}.
   * @throws ApiException If problems occurred while querying for ideas.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class TargetingIdeaServiceGet
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201409";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var TargetingIdeaSelector
     */
    public $selector;

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

      public function __construct($selector = null)
      {
          $this->selector = $selector;
      }
  }
}

