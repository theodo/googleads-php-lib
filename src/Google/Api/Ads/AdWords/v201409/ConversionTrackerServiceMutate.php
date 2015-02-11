<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the ConversionTrackerService
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


if (!class_exists("ConversionTrackerServiceMutate", false)) {
    /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
   *
   *
   *
   * Applies the list of mutate operations such as adding or updating conversion trackers.
   * <p class="note"><b>Note:</b> {@link ConversionTrackerOperation} does not support the
   * <code>REMOVE</code> operator. In order to 'disable' a conversion type, send a
   * <code>SET</code> operation for the conversion tracker with the <code>status</code>
   * property set to <code>DISABLED</code></p>
   *
   * @param operations A list of mutate operations to perform.
   * @return The list of the conversion trackers as they appear after mutation,
   * in the same order as they appeared in the list of operations.
   * @throws com.google.ads.api.services.common.error.ApiException if problems
   * occurred while updating the data.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class ConversionTrackerServiceMutate
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var ConversionTrackerOperation[]
     */
    public $operations;

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

      public function __construct($operations = null)
      {
          $this->operations = $operations;
      }
  }
}

