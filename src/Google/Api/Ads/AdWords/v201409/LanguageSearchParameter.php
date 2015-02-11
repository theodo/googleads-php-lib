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















































































































































































if (!class_exists("LanguageSearchParameter", false)) {
    /**
   * A {@link SearchParameter} used to indicate multiple language being targeted.
   * This can be used, for example, to search for {@code KEYWORD}
   * {@link IdeaType}s that are best for Japanese language.
   *
   * <p>The service allows at most one language to be targeted for
   * {@code KEYWORD} requests.
   * <p>In the {@code KEYWORD} {@link IdeaType} {@code STATS} {@link RequestType}
   * requests, those keywords that are from different language than specified in
   * {@code LanguageSearchParameter} or have unknown language will be filtered
   * out in the response. To avoid filtering, do not include
   * {@code LanguageSearchParameter} in the request.
   * <p>This search parameter can be used in bulk keyword requests through the {@link com.google.ads.api.services.targetingideas.TargetingIdeaService#getBulkKeywordIdeas(TargetingIdeaSelector)} method. It must be single-valued when used in a call to that method.
   * <p>This element is supported by following {@link IdeaType}s: KEYWORD, PLACEMENT.
   * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class LanguageSearchParameter extends SearchParameter
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201409";
      const XSI_TYPE = "LanguageSearchParameter";

    /**
     * @access public
     * @var Language[]
     */
    public $languages;

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

      public function __construct($languages = null, $SearchParameterType = null)
      {
          parent::__construct();
          $this->languages = $languages;
          $this->SearchParameterType = $SearchParameterType;
      }
  }
}

