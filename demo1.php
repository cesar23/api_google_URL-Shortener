<?php
error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 1);
/**
 * Created by PhpStorm.
 * User: Soporte
 * Date: 30/12/2016
 * Time: 02:35 PM
 */

require_once "GoogleUrl.php";
$api = new GoogleURL('AIzaSyB6P-k1pjB55zdoAKaBYruwF7JU6lQlEZg');
//ver url acortandola
echo $api->encode('http://www.vichaunter.org');
echo "\n";
//ver url real
echo $api->decode('http://goo.gl/mbMv2X');
?>