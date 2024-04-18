<?php

function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    $bd = "crud_db";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}


?>