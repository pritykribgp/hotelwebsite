<?php
//error_reporting(0);
    $servarname = "localhost";
    $username = "admin";
    $password = "admin";
    $dbname = "hotel";



    $conn = mysqli_connect($servarname,$username,$password,$dbname);



    if($conn)
    {
        //echo "connection okey";

    }
    else{
        echo "connection fail" .mysqli_connect_error();
    }

?>