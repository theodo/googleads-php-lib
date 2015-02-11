<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the AdwordsUserListService
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


if (!class_exists("DateSpecificRuleUserList", false)) {
    /**
   * Visitors of a page during specific dates. The visiting periods are defined as follows:
   * <ul>
   * <li> between {@code startDate} (inclusive) and {@code endDate} (inclusive);
   * <li> before {@code endDate} (exclusive) with {@code startDate} = 2000-01-01;
   * <li> after {@code startDate} (exclusive) with {@code endDate} = 2037-12-30.
   * </ul>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class DateSpecificRuleUserList extends RuleBasedUserList
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201409";
      const XSI_TYPE = "DateSpecificRuleUserList";

    /**
     * @access public
     * @var Rule
     */
    public $rule;

    /**
     * @access public
     * @var string
     */
    public $startDate;

    /**
     * @access public
     * @var string
     */
    public $endDate;

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

      public function __construct($rule = null, $startDate = null, $endDate = null)
      {
          parent::__construct();
          $this->rule = $rule;
          $this->startDate = $startDate;
          $this->endDate = $endDate;
      }
  }
}

