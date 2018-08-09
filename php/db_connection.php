<?php

$dbname = "GloveITMailingList";
$host = "localhost";
$username = "root";
$password = "89562332";
$connection = new PDO("mysql:dbname=$dbname;host=$host", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

?>