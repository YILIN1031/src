<?php

// shell.hamk.fi >>> localhost
// dbname: wp_xxx

/*
// local machine, docker desktop
$servername = "web-dev-env-main-db-1";
$username = "app1";
$password = "password";
$dbname = "app1";
*/

// shell.hamk.fi
$servername = "localhost";
$username = "yilin23000";
$password = "7Y6BNxgK";
$dbname = "wp_yilin23000";

// create database connection 
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn -> connect_error)
{
    die("Connection Failed:" . $conn -> connect_error);
}
echo "Connected successfully!      ";

?>