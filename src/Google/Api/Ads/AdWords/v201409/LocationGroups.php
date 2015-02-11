<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the CampaignCriterionService
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


if (!class_exists("LocationGroups", false)) {
    /**
   * Represents a criterion containing a function that when evaluated specifies how to target
   * based on the type of the location. These "location groups" are custom, dynamic bundles of
   * locations (for instance "High income areas in California" or "Airports in France").
   *
   * <p>Examples:</p>
   *
   * For income demographic targeting, we need to specify the income tier and the geo
   * which it targets. Areas in California that are in the top national income tier can be
   * represented by:
   * <pre><code>
   * Function function = new Function();
   * function.setLhsOperand(Arrays.asList(
   * (Operand) new IncomeOperand(IncomeTier.TIER_1));
   * function.setOperator(Operator.AND);
   * function.setRhsOperand(Arrays.asList(
   * (Operand) new GeoTargetOperand(Lists.newArrayList(new CriterionId(21137L))));
   * </code></pre>
   *
   * For place of interest targeting, we need to specify the place of interest category and the geo
   * which it targets. Airports in France can be represented by:
   * <pre><code>
   * Function function = new Function();
   * function.setLhsOperand(Arrays.asList(
   * (Operand) new PlacesOfInterestOperand(PlacesOfInterestOperand.Category.AIRPORT));
   * function.setOperator(Operator.AND);
   * function.setRhsOperand(Arrays.asList(
   * (Operand) new GeoTargetOperand(Lists.newArrayList(new CriterionId(2250L))));
   * </code></pre>
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class LocationGroups extends Criterion
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "LocationGroups";

    /**
     * @access public
     * @var Function
     */
    public $matchingFunction;

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

      public function __construct($matchingFunction = null, $id = null, $type = null, $CriterionType = null)
      {
          parent::__construct();
          $this->matchingFunction = $matchingFunction;
          $this->id = $id;
          $this->type = $type;
          $this->CriterionType = $CriterionType;
      }
  }
}

