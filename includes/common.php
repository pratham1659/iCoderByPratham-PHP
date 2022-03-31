<?php
// connect Database php-myadmin
$servername = "localhost";
$username = "root";
$password = "";
$database = "store";

//Create connection
$con = mysqli_connect( $servername, $username, $password, $database ) or die( mysqli_error( $con ) );

//Die if connection was not successfull

if ( !isset( $_SESSION ) ) {
    session_start();
} else {
    echo "Please login to continue";
}
