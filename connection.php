<?php

$host="localhost";
$username="root";
$password="";
$dbName="db_news";
$db=new mysqli($host,$username,$password);
$db->select_db($dbName);

?>