<?php

//start session
session_start();

//get the page the user comes from
$origin = $_SERVER['HTTP_REFERER'];


//unset and destroy all session variables
unset($_SESSION["username"]);
unset($_SESSION["email"]);
unset($_SESSION["account_id"]);
session_destroy();


//redirect the user to $origin
header("location: $origin");

?>