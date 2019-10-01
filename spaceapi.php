<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Cache-Control: no-cache');

if (isset($_GET['x-fields'])) {
    $fields = $_GET['x-fields'];
}

if (isset($fields)) {
    $document = json_decode(file_get_contents("https://hub.57north.org.uk/spaceapi"));
    $newdoc = array();
    $fields = explode(",", $fields);
    foreach ($document as $key => $value) {
        if (in_array($key, $fields)) {
            $newdoc[$key] = $value;
        }
    }
    echo(json_encode($newdoc));
} else {
    readfile("https://hub.57north.org.uk/spaceapi");
}
