<?php
require "./includes/common.php";
// get details
$email = mysqli_real_escape_string( $con, $_POST["email"] );
$name = mysqli_real_escape_string( $con, $_POST["name"] );
$password = mysqli_real_escape_string( $con, $_POST["password"] );
$contact = mysqli_real_escape_string( $con, $_POST["contact"] );
$city = mysqli_real_escape_string( $con, $_POST["city"] );
$address = mysqli_real_escape_string( $con, $_POST["address"] );
// hash password
$hash_password = md5( $password );
$query1 = "SELECT id FROM users WHERE email = '$email' AND password = '$hash_password'";
$query1 = "INSERT INTO users (name, email, password, contact, city, address) VALUES ('$name', '$email', '$hash_password', '$contact', '$city', '$address')";

// check if already registered user
$result = mysqli_query( $con, $query1 );
if ( mysqli_num_rows( $result ) > 0 ) {
    // email already exists
    echo "Email id already exists. Try another";
} else {
    // perform query operation
    $result = mysqli_query( $con, $query2 );
    $_SESSION["email_id"] = $email;
    $_SESSION["id"] = mysqli_insert_id( $con );

    // redirect to products page
    header( "location: products.php" );
}
