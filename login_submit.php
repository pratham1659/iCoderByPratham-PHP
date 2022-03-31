<?php
require "./includes/common.php";
$email = mysqli_real_escape_string( $con, $_POST["email"] );
$password = mysqli_real_escape_string( $con, $_POST["password"] );
$hash_password = md5( $password );

$query = "SELECT * FROM users WHERE email = '$email' AND password = '$hash_password'";
$query_result = mysqli_query( $con, $query );

if ( mysqli_num_rows( $query_result ) == 0 ) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Invalid !</strong> User account does not exists.<br> Please signup to this page
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>';

} else {
    $row = mysqli_fetch_array( $query_result );
    $_SESSION["email_id"] = $email;
    $_SESSION["id"] = $row["id"];

    // This tage redirect to header tag
    header( "location: products.php" );
}
