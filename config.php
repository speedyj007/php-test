<?php
$server = "localhost";
$user = "";
$pass = "";
$db = "";

$con = mysqli_connect($server, $user, $pass, $db) or die($$con);

if($con->connect_error)
{

    echo "<h2>Something went wrong: </h2>".$con->connect_error;
}
