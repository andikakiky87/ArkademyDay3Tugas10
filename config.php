<?php

$mysql = new mysqli("localhost", "root", "", "arkademy");

if($mysql->connect_error){
    die("Failed" . $mysql->connect_error);
}


?>