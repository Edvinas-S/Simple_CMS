<?php

ob_start();

// Set sessions
if(!isset($_SESSION)) {
    session_start();
}

//connect to database
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "simple_cms_db";

$conn_db = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn_db){
    die( "Sorry! Database connection not established.");
}

// define site path
define('ROOT', 'http://localhost/simple_cms/');

// define admin site path
define('ADMIN','http://localhost/simple_cms/admin/');


include('functions.php');
?>