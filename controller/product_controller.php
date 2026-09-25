<?php

require_once __DIR__ . "/../model/database.php";
require_once __DIR__ . "/../model/product.php";

$products = get_products();

include __DIR__ . "/../view/display_products.php";

?>
