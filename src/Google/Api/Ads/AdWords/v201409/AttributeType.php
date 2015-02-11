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


if (!class_exists("AttributeType", false)) {
    /**
   * Represents the type of
   * {@link com.google.ads.api.services.common.optimization.attributes.Attribute}.
   * <p><b>{@link IdeaType} KEYWORD supports the following {@link AttributeType}s:</b><br/>
   * <ul><li>{@link #AVERAGE_CPC}</li>
   * <li>{@link #CATEGORY_PRODUCTS_AND_SERVICES}</li>
   * <li>{@link #COMPETITION}</li>
   * <li>{@link #CRITERION}</li>
   * <li>{@link #EXTRACTED_FROM_WEBPAGE}</li>
   * <li>{@link #IDEA_TYPE}</li>
   * <li>{@link #KEYWORD_TEXT}</li>
   * <li>{@link #SEARCH_VOLUME}</li>
   * <li>{@link #TARGETED_MONTHLY_SEARCHES}</li>
   * </ul>
   * <p><b>{@link IdeaType} PLACEMENT supports the following {@link AttributeType}s:</b><br/>
   * <ul><li>{@link #AD_TYPE_SPEC}</li>
   * <li>{@link #APPROX_CONTENT_IMPRESSIONS_PER_DAY}</li>
   * <li>{@link #CRITERION}</li>
   * <li>{@link #IDEA_TYPE}</li>
   * <li>{@link #IN_STREAM_AD_INFO}</li>
   * <li>{@link #PLACEMENT_CATEGORY}</li>
   * <li>{@link #PLACEMENT_NAME}</li>
   * <li>{@link #PLACEMENT_TYPE}</li>
   * <li>{@link #SAMPLE_URL}</li>
   * </ul>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class AttributeType
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201409";
      const XSI_TYPE = "AttributeType";

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

