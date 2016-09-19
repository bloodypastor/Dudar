<?php
    require_once "connect.php";

function getNews (){
    global $mysqli;
    $result = $mysqli->query("SELECT * FROM 'news'");
    return resultToArray ($result);

}


function resultToArray($result) {
    $array = array ();
    while (($row = $result->fetch_assoc()) !=false);
        $array[] = $row;
    return $array;
}
