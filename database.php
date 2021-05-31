<?php
function connect(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "horton";

    // Create connection
    $connect = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    } 
    return $connect;
}
?>