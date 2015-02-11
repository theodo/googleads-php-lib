<?php
namespace Google\Api\Ads\AdWords\v201409 ;

/**
 * Contains all client objects for the CampaignService
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


if (!class_exists("MutateLabel", false)) {
    /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : ADD, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
   *
   *
   *
   * Adds labels to the {@linkplain Campaign campaign} or removes
   * {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}s from the
   * {@linkplain Campaign campaign}.
   * <p>Add - Apply an existing label to an existing
   * {@linkplain Campaign campaign}. The {@code campaignId} must reference an existing
   * {@linkplain Campaign}. The {@code labelId} must reference an existing
   * {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}.</p>
   * <p>Remove - Removes the link between the specified
   * {@linkplain Campaign campaign} and
   * {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}.</p>
   * @param operations the operations to apply.
   * @return a list of {@linkplain CampaignLabel}s where each entry in the list is the result of
   * applying the operation in the input list with the same index. For an
   * add operation, the returned CampaignLabel contains the CampaignId and the LabelId.
   * In the case of a remove operation, the returned CampaignLabel will only have CampaignId.
   * @throws ApiException when there are one or more errors with the request.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class MutateLabel
  {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var CampaignLabelOperation[]
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

