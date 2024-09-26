<?php 


session_start();
include "config.php";

$var_loggedoff= $_SESSION['email'];
$loggedoff="UPDATE users SET status='logged out' WHERE email='$var_loggedoff'";
if(mysqli_query($conn,$loggedoff)){
    header("Location: login.php");
}
else{
    echo "Log out failed";
}
session_destroy();




// session_start();
// session_destroy();

// header("Location: index.php");

?>