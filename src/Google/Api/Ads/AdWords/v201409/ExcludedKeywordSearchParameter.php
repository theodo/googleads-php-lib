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












































































































































































if (!class_exists("ExcludedKeywordSearchParameter", false)) {
    /**
   * A {@link SearchParameter} for {@code KEYWORD} {@link IdeaType}s that
   * specifies {@link Keyword}s that should be excluded from the results.<p>
   *
   * The {@link KeywordMatchType} associated with these keywords is used to
   * provide various filtering strategies. For example, the excluded keyword
   * <b>"brand x player"</b> will exclude ideas from the resulting ideas as
   * described by the table below.
   *
   * <table border="1">
   * <tr style="font-weight: bold;">
   * <th>Idea</th>
   * <th>{@code BROAD}</th>
   * <th>{@code PHRASE}</th>
   * <th>{@code EXACT}</th>
   * </tr>
   * <tr>
   * <td>brand x player</td>
   * <td>Exclude</td>
   * <td>Exclude</td>
   * <td>Exclude</td>
   * </tr>
   * <tr>
   * <td>blu-ray brand x player</td>
   * <td>Exclude</td>
   * <td>Exclude</td>
   * <td>Include</td>
   * </tr>
   * <tr>
   * <td>brand x dvd player</td>
   * <td>Exclude</td>
   * <td>Include</td>
   * <td>Include</td>
   * </tr>
   * <tr>
   * <td>brand x dvd</td>
   * <td>Include</td>
   * <td>Include</td>
   * <td>Include</td>
   * </tr>
   * </table>
   * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
   * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class ExcludedKeywordSearchParameter extends SearchParameter
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201409";
      const XSI_TYPE = "ExcludedKeywordSearchParameter";

    /**
     * @access public
     * @var Keyword[]
     */
    public $keywords;

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

      public function __construct($keywords = null, $SearchParameterType = null)
      {
          parent::__construct();
          $this->keywords = $keywords;
          $this->SearchParameterType = $SearchParameterType;
      }
  }
}

