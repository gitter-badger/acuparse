<?php
/**
 * Acuparse - AcuRite®‎ smartHUB and IP Camera Data Processing, Display, and Upload.
 * @copyright Copyright (C) 2015-2017 Maxwell Power
 * @author Maxwell Power <max@acuparse.com>
 * @link http://www.acuparse.com
 * @license AGPL-3.0+
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this code. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * File: src/fcn/wmark.php
 * Builds the watermark for the camera image
 */

function camWmark()
{
    // Get the loader
    require(dirname(__DIR__) . '/inc/loader.php');

    // Load weather Data:
    require(APP_BASE_PATH . '/fcn/weather/GetCurrentWeatherData.php');
    $GetData = new GetCurrentWeatherData();
    $wx = $GetData->getConditions();
    echo 'Baro: ' . $wx->pressure_kPa . ' kPa | RelH: ' . $wx->relH . '% | Temp: ' . $wx->tempC . '°C | Wind: ' . $wx->windDIR . ' @ ' . $wx->windSkmh . ' km/h | Accum: ' . $wx->rainTotalMM_today . ' mm';
}
