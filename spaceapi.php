<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Cache-Control: no-cache');

readfile("http://hub.57north.org.uk/spaceapi");
