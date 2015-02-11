<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the ExpressBusinessService
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


if (!class_exists("RegionCode", false)) {
    /**
   * A region (country, territory, continent, etc), as defined by Unicode's
   * "CLDR", itself based on ISO 3166 (UN country codes).
   *
   * <p>See:
   *
   * http://unicode.org/cldr/charts/supplemental/territory_containment_un_m_49.html
   *
   * <p>It contains no behavior, but is the authoritative definition of Region
   * <em>identity</em> in java Google code.
   *
   * <p>Do:
   * <ul>
   * <li>use it everywhere you need to compare regions</li>
   * <li>use it in all APIs that take/return a region (such as a country),
   * particularly all public APIs</li>
   * <li>get the instance corresponding to an CLDR code using {@link #forString}
   * </li>
   * <li>get the String CLDR code with {@link #toString}</li>
   * <li>use the String CLDR code in your DB as a key to currencies</li>
   * <li>if your API supports only a subset of these codes, make sure to
   * validate (e.g. by creating an EnumSet and using Precondition)
   * <li>put your project-specific region-related information in a class under
   * your project root, using an EnumMap or BiMap to map these Regions to your
   * objects.
   * </li>
   * </ul>
   *
   * Do <em>not</em>:
   * <ul>
   * <li>depend on the ordinal of a region, for example using {@link #ordinal()}
   * or depending on the index of a particular region in the {@link #values}
   * array.
   * <li>depend on the comparison order of regions, via
   * {@link Enum#compareTo(Enum)}), or via the iteration order of an
   * EnumSet, etc.
   * <li>use {@link #valueOf} or {@link #name()}. The CLDR numeric codes aren't
   * valid for java, so they were prepended by "UN" (as in "UN001" for the
   * CLDR code "001").
   * <li>assume that these are the same as the two-letter ISO codes. Oftentimes
   * they will be, but CLDR guarantees stability, so ISO codes that change
   * will be different from the entries in this enum.
   * </ul>
   *
   * This enum does not:
   * <ul>
   * <li>have i18n features</li>
   * <li>have application-specific data</li>
   * </ul>
   *
   * These concerns will be addressed by other classes, some in
   * application-specific packages, others in common.base.i18n. The latter ones
   * will be listed with "see" tags in this class.
   * This class does not supply methods for getting information about regions.
   * For those methods, see {@link RegionInfo}.
   *
   * <p>Note that not all regions have a "two-letter" country code. Instead, some
   * have a three digit number -- the UN M.49 (United Nations) area code.
   * These are the enum items prepended with "UN". See:
   *
   * <ul>
   * <li>http://unstats.un.org/unsd/methods/m49/m49alpha.htm
   * <li>http://unstats.un.org/unsd/methods/m49/m49.htm
   * </ul>
   *
   * <p>Also note that CLDR -- contrary to ISO -- <em>guarantees</em> non-reuse of
   * country codes. Thus, though most times CLDR codes are the same as the ISO
   * codes, sometimes they are not.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class RegionCode
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201409";
      const XSI_TYPE = "RegionCode";

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

      public function __construct()
      {
      }
  }
}

