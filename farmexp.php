<?php
#Variable 

$totalGross = 0;
$totalTransport = 0;
$totalNet = 0;

$quantities = [
    "Maize" => 50,
    "Beans" => 30,
    "Rice" => 20,
    "Cassava" => 25,
    "Sweet Potatoes" => 15
];

define("TRANSPORT_RATE", 500);
define("HIGH_SALES_THRESHOLD", 500000);

$producePrices = [
    "Maize" => 2000,
    "Beans" => 3500,
    "Rice" => 4000,
    "Cassava" => 1500,
    "Sweet Potatoes" => 1800
];


?>