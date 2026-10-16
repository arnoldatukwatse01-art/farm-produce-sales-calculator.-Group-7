
<?php

// GROUP 7: FARM PRODUCE SALES CALCULATOR

// 1. CONSTANTS: Fixed prices and transport rates
define("MAIZE_PRICE_PER_KG", 1800);
define("MAIZE_PRICE_PER_SACK", 180000);

define("BEANS_PRICE_PER_KG", 3500);
define("BEANS_PRICE_PER_SACK", 350000);

define("RICE_PRICE_PER_KG", 4000);
define("RICE_PRICE_PER_SACK", 400000);

define("GROUNDNUTS_PRICE_PER_KG", 5000);
define("GROUNDNUTS_PRICE_PER_SACK", 500000);

define("TRANSPORT_COST_PER_KG", 100);
define("TRANSPORT_COST_PER_SACK", 5000);


// 2. ARRAYS: Available produce and their prices

$produceNames = ["Maize", "Beans", "Rice", "Groundnuts"];

$prices = [
    "Maize" => [
        "kg" => MAIZE_PRICE_PER_KG,
        "sack" => MAIZE_PRICE_PER_SACK
    ],
    "Beans" => [
        "kg" => BEANS_PRICE_PER_KG,
        "sack" => BEANS_PRICE_PER_SACK
    ],
    "Rice" => [
        "kg" => RICE_PRICE_PER_KG,
        "sack" => RICE_PRICE_PER_SACK
    ],
    "Groundnuts" => [
        "kg" => GROUNDNUTS_PRICE_PER_KG,
        "sack" => GROUNDNUTS_PRICE_PER_SACK
    ]
];


// 3. VARIABLES: Store sales and totals

$salesRecords = [];
$totalGrossSales = 0;
$totalTransportCost = 0;

?>
