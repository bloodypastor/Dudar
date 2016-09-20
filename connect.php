<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//function print_pre($object) {
//    ?><!--<pre>--><?php //print_r($object); ?><!--</pre>--><?php
//}

$host = 'localhost';
$database = 'dudar';
$username = 'root';
$password = '';

$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_error . ') ' . $mysqli->connect_error);
}

$query = $mysqli->query("SELECT * FROM news");

while ($row = $query->fetch_assoc()) {
    $result[] = $row;
}
//print_pre($result);

$query = $mysqli->query("SELECT * FROM news");
$result = $query->fetch_assoc();
//print_pre($result);

$query = $mysqli->query("SELECT * FROM news");

if ($query) {
    $result = $query->fetch_assoc();
    //print_pre($result);
}

echo 'Woohoo! No errors!';

function getNews ()
{
    global $mysqli;
    $result = $mysqli->query("SELECT * FROM news");
    return resultToArray($result);
}
function resultToArray($result) {
    $array = array ();
    while (($row = $result->fetch_assoc()) !=false);
        $array[] = $row;
    return $array;
}
