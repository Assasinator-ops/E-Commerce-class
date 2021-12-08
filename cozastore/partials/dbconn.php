<?php

$username = "root";
$password = "";
$host = "localhost";
$db_name = "cozastore";

    $conn = mysqli_connect($host,$username,$password,$db_name);

    if($conn->mysqli_error)
    {
        echo "Error!";
    }
    else
    {
        echo "It works!";
    }

?>