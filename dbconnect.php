<?php
ob_start();
session_start();

    //comment these two line when your code started working without any error
    error_reporting( E_ALL);//check all type of errors
    ini_set('display_errors',1); // display those errors so that you can rectify them

    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBNAME', 'dbtest');

  
// Create connection
$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

?>
