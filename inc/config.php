<?php
/**
 * File: config.php
 */

// Sitewide Variables
$site_name = 'Golden Heights Weather Station';
$site_desc = 'Live weather from Golden Heights, Sturgeon County, Alberta, Canada';
$site_url = 'http://weather.maxpower.co';
$date = date('Y-m-d H:i:s');
date_default_timezone_set('America/Edmonton');
$lat = 53.9189377;
$long = -113.3702744;
$zenith = 98.9636;

// Weather Underground Settings
$wu_id = 'IALBERTA517';
$wu_password = 'P0pc0rn';

// Bridge Config
$MACADDRESS = '24C86E0479FB'; // Acurite Bridge MAC Address

// Pressure Offset from Sea Level
$PRESSURE_OFFSET = 127;

// 5N1 Sensor Config
$sensor_5n1_id = '01360';
$sensor_5n1_name = 'Master Station';

// Tower Sensor Config
$tower_sensors_active = 1; // 1 for yes, 0 for no

// Uncomment active sensors

// Tower Sensor 1
$sensor_tower1_id = '11638'; // ID from tower sensor
$sensor_tower1_name = 'Under Trailer'; // Sensor name

// Tower Sensor 2
//$sensor_tower2_id = ''; // ID from tower sensor
//$sensor_tower2_name = ''; // Sensor name

// Tower Sensor 3
//sensor_$tower3_id = ''; // ID from tower sensor
//sensor_$tower3_name = ''; // Sensor name


// DATABASE CONFIG:
$db_host="localhost"; // DB Host
$db_name="acuparse"; // DB Name
$db_username="root"; // Username
$db_password="Summer01"; // Password
// Create Connection
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
