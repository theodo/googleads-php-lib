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








































































































































if (!class_exists("TargetingIdeaSelector", false)) {
    /**
   * A descriptor for finding {@link TargetingIdea}s that match the specified criteria.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class TargetingIdeaSelector
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201409";
      const XSI_TYPE = "TargetingIdeaSelector";

    /**
     * @access public
     * @var SearchParameter[]
     */
    public $searchParameters;

    /**
     * @access public
     * @var tnsIdeaType
     */
    public $ideaType;

    /**
     * @access public
     * @var tnsRequestType
     */
    public $requestType;

    /**
     * @access public
     * @var tnsAttributeType[]
     */
    public $requestedAttributeTypes;

    /**
     * @access public
     * @var Paging
     */
    public $paging;

    /**
     * @access public
     * @var string
     */
    public $localeCode;

    /**
     * @access public
     * @var string
     */
    public $currencyCode;

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

      public function __construct($searchParameters = null, $ideaType = null, $requestType = null, $requestedAttributeTypes = null, $paging = null, $localeCode = null, $currencyCode = null)
      {
          $this->searchParameters = $searchParameters;
          $this->ideaType = $ideaType;
          $this->requestType = $requestType;
          $this->requestedAttributeTypes = $requestedAttributeTypes;
          $this->paging = $paging;
          $this->localeCode = $localeCode;
          $this->currencyCode = $currencyCode;
      }
  }
}

