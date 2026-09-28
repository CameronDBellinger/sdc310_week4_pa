<?php

function get_products()
{
    $db = get_db_conn();

    $query = "SELECT `Product#`, Name, Type
              FROM products
              ORDER BY `Product#`";

    $result = mysqli_query($db, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($db));
    }

    return $result;
}

?>
