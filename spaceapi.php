<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Cache-Control: no-cache');

$hub = json_decode(file_get_contents("http://hub.57north.org.uk/spaceapi"));

//$hub->sensors->temperature = array();
//$hub->sensors->temperature[0]->value = file_get_contents('temperature.txt'); // + 0.0;
//$hub->sensors->temperature[0]->location = "The Space";
//$hub->sensors->temperature[0]->unit = "°C";
//
//$hub->sensors->humidity = array();
//$hub->sensors->humidity[0]->value = file_get_contents('humidity.txt'); //  + 0.0;
//$hub->sensors->humidity[0]->location = "The Space";
//$hub->sensors->humidity[0]->unit = "%";

$membership = json_decode(file_get_contents("http://hub.57north.org.uk/api/membership"));

function GetMonthString($n)
{
    $timestamp = mktime(0, 0, 0, $n, 1, 2005);
    
    return date("F", $timestamp);
}

$hub->sensors->total_member_count = array();
$hub->sensors->total_member_count[0]->value = $membership->membership[0][2];
$hub->sensors->total_member_count[0]->location = GetMonthString($membership->membership[0][0]) . " " . $membership->membership[0][1];
$hub->sensors->total_member_count[1]->value = $membership->membership[1][2];
$hub->sensors->total_member_count[1]->location = GetMonthString($membership->membership[1][0]) . " " . $membership->membership[1][1];
$hub->sensors->total_member_count[2]->value = $membership->membership[2][2];
$hub->sensors->total_member_count[2]->location = GetMonthString($membership->membership[2][0]) . " " . $membership->membership[2][1];

echo(json_encode($hub));

