<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "student_registation";

//create connection
$db = new mysqli($servername,$username,$password, $db_name);

//check connection 
if($db->connect_error)
{

    die("connection failed" . $db->connect_error);

}




?>