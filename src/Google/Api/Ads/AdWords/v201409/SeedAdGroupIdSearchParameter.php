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


if (!class_exists("SeedAdGroupIdSearchParameter", false)) {
    /**
   * A {@link SearchParameter} for {@code KEYWORD} {@link IdeaType}s
   * that specifies that the supplied AdGroup should be used as a seed
   * for generating new ideas. For example, an AdGroup's keywords
   * would be used to generate new and related keywords.
   * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
   * <p>This element is supported by following {@link RequestType}s: IDEAS.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class SeedAdGroupIdSearchParameter extends SearchParameter
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201409";
      const XSI_TYPE = "SeedAdGroupIdSearchParameter";

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

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

      public function __construct($adGroupId = null, $SearchParameterType = null)
      {
          parent::__construct();
          $this->adGroupId = $adGroupId;
          $this->SearchParameterType = $SearchParameterType;
      }
  }
}

