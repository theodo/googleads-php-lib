<?php
namespace Google\Api\Ads\Dfp\v201411 ;

/**
 * Contains all client objects for the CreativeService
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
 * @package    GoogleApiAdsDfp
 * @subpackage v201411
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
use Google\Api\Ads\Dfp\Lib\DfpSoapClient ;


if (!class_exists("CustomCreativeAsset", false)) {
    /**
   * A {@code CustomCreativeAsset} is an association between a
   * {@link CustomCreative} and an asset. Any assets that are associated with a
   * creative can be inserted into its HTML snippet.
   * @package GoogleApiAdsDfp
   * @subpackage v201411
   */
  class CustomCreativeAsset
  {

    const WSDL_NAMESPACE = "https://www.google.com/apis/ads/publisher/v201411";
      const XSI_TYPE = "CustomCreativeAsset";

    /**
     * @access public
     * @var string
     */
    public $macroName;

    /**
     * @access public
     * @var integer
     */
    public $assetId;

    /**
     * @access public
     * @var base64Binary
     */
    public $assetByteArray;

    /**
     * @access public
     * @var string
     */
    public $fileName;

    /**
     * @access public
     * @var integer
     */
    public $fileSize;

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

      public function __construct($macroName = null, $assetId = null, $assetByteArray = null, $fileName = null, $fileSize = null)
      {
          $this->macroName = $macroName;
          $this->assetId = $assetId;
          $this->assetByteArray = $assetByteArray;
          $this->fileName = $fileName;
          $this->fileSize = $fileSize;
      }
  }
}

