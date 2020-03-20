<?php
require_once "RestaurantCollection.php";

$restaurants2 = RestaurantCollection::createFromJson();

print_r($restaurants2);

