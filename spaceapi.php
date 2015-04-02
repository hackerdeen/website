<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Cache-Control: no-cache');

$hub = json_decode(file_get_contents("http://hackerdeen.org/spaceapi"));

$hub->contact->ml = "57north-discuss@lists.57north.co";

//$hub->sensors->temperature = array();
//$hub->sensors->temperature[0]->value = file_get_contents('temperature.txt'); // + 0.0;
//$hub->sensors->temperature[0]->location = "The Space";
//$hub->sensors->temperature[0]->unit = "°C";
//
//$hub->sensors->humidity = array();
//$hub->sensors->humidity[0]->value = file_get_contents('humidity.txt'); //  + 0.0;
//$hub->sensors->humidity[0]->location = "The Space";
//$hub->sensors->humidity[0]->unit = "%";

$membership = json_decode(file_get_contents("http://hackerdeen.org/api/membership"));

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

#$hub->sensors->network_connections = array();
#
#$hub->sensors->network_connections[0]->type = "cable";
#$hub->sensors->network_connections[0]->description = "Wired LAN";
#$hub->sensors->network_connections[0]->value = $whiteboard->wired;
#
#$hub->sensors->network_connections[1]->type = "wifi";
#$hub->sensors->network_connections[1]->description = "Wireless LAN";
#$hub->sensors->network_connections[1]->value = $whiteboard->wireless;

$hub->feeds->calendar->type = "ical";
$hub->feeds->calendar->url = "http://opentechcalendar.co.uk/api1/group/151/events.ical";

$hub->feeds->wiki->type = "atom";
$hub->feeds->wiki->url = "https://wiki.57north.org.uk/api.php?hidebots=1&days=7&limit=50&action=feedrecentchanges&feedformat=atom";

$hub->contact->email = "contact@57north.co";
$hub->contact->phone = "+441224583491";

$hub->space = "57North Hacklab";

echo(json_encode($hub));

