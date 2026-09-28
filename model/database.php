<?php

function get_db_conn()
{
    $hostname = "localhost";
    $username = "ecpi_user";
    $password = "Password1";
    $dbname = "sdc310_week4_pa";

    $db = mysqli_connect($hostname, $username, $password, $dbname);

    if (!$db) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    return $db;
}

?>
