<?php

session_start();

//connect to database
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "simple_cms_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die( "Sorry! There seems to be a problem connecting to our database.");
}

// define site path
define('ROOT', 'http://localhost/simple_cms/');

// define admin site path
define('ADMIN','http://localhost/simple_cms/admin/');

?>