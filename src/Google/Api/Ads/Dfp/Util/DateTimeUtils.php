<?php
namespace Google\Api\Ads\Dfp\Util ;

/**
 * A utility class for converting PHP DateTime objects to DFP native objects and
 * vice versa.
 *
 * PHP version 5
 *
 * Copyright 2011, Google Inc. All Rights Reserved.
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
 * @subpackage Util
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
 * @author     Vincent Tsao
 */

/**
 * A utility class to for converting PHP DateTime objects to DFP native objects.
 *
 * @package GoogleApiAdsDfp
 * @subpackage Util
 */
class DateTimeUtils
{

  /**
   * ISO-8601 date time format (example: 2005-08-15T15:52:01+00:00).
   */
  const ISO8601 = "Y-m-d\TH:i:sP";

  /**
   * Format string used to format a DateTime for use with DFP PQL.
   *
   * @var string
   * @deprecated
   */
  public static $DFP_DATE_TIME_STRING_FORMAT = 'Y-m-d\TH:i:s';

    const DFP_DATE_PATTERN = "%04d-%02d-%02d";

  /**
   * {@link DateTimeUtils} is meant to be used statically.
   */
  private function __construct()
  {
  }

  /**
   * @deprecated use ToDfpDateTime() instead
   */
  public static function GetDfpDateTime(DateTime $dateTime)
  {
      return self::ToDfpDateTime($dateTime);
  }

  /**
   * @deprecated use FromDfpDateTime() instead
   */
  public static function GetDateTime(DfpDateTime $dfpDateTime,
      $timezone = null)
  {
      return self::FromDfpDateTime($dfpDateTime);
  }

  /**
   * Converts a PHP DateTime to a DfpDateTime.
   *
   * @param DateTime $dateTime a PHP DateTime object
   * @return DfpDateTime a DfpDateTime object
   */
  public static function ToDfpDateTime(DateTime $dateTime)
  {
      $result = new DfpDateTime();
      if (class_exists('Date', false)) {
          $result->date = new Date();
      }
      $result->date->year = (int) $dateTime->format('Y');
      $result->date->month = (int) $dateTime->format('m');
      $result->date->day = (int) $dateTime->format('d');
      $result->hour = (int) $dateTime->format('H');
      $result->minute = (int) $dateTime->format('i');
      $result->second = (int) $dateTime->format('s');
      $result->timeZoneID = $dateTime->format('e');

      return $result;
  }

