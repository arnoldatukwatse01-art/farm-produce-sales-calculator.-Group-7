<?php
// Branch 3: Strictly Loops Implementation

$produce_sales = [
    ['crop' => 'beans', 'quantity_kg' => 400, 'price_per_kg' => 2500],
    ['crop' => 'maize', 'quantity_kg' => 1000, 'price_per_kg' => 1500],
    ['crop' => 'simsim', 'quantity_kg' => 150, 'price_per_kg' => 4000]
];

$processed_sales = [];

// Pure loop execution without conditions or CLI printing
foreach ($produce_sales as $item) {
    $crop = $item['crop'] ?? '';
    $quantity = $item['quantity_kg'] ?? 0;
    $price = $item['price_per_kg'] ?? 0;

    $gross_sales = $quantity * $price;
    $transport_cost = $quantity * 500;
    $net_sales = $gross_sales - $transport_cost;

    $processed_sales[] = [
        'crop' => $crop,
        'net_sales' => $net_sales
    ];
}