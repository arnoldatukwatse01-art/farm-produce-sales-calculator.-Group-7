<?php
/**
 * Application Name: farm_produce_sales_calculator.php
 * Group Scenario 7: Farm Produce Sales Calculator - Group 7
 * Course: COM213 Advanced Web Development
 */

define('TRANSPORT_RATE', 500);          
define('HIGH_SALES_THRESHOLD', 500000); 

$produce_orders = [
    ["produce_name" => "Maize", "unit" => "Kg", "quantity" => 200, "unit_price" => 3],
    ["produce_name" => "Beans", "unit" => "Kg", "quantity" => 100, "unit_price" => 2]
];
function calculateGross(array $orders): float {
    $gross_sales = 0.0;
    
    foreach ($orders as $order) {
        if ($order['quantity'] < 0) {
            echo "[ERROR NOTICE]: Invalid quantity (" . $order['quantity'] . ") detected for " . $order['produce_name'] . "!\n";
            continue;
        }
        $subtotal = $order['quantity'] * $order['unit_price'];
        $gross_sales += $subtotal;
    }
    
    return $gross_sales;
}

function calculateTransport(array $orders): float {
    $total_quantity = 0;
    
    foreach ($orders as $order) {
        if ($order['quantity'] > 0) {
            $total_quantity += $order['quantity'];
        }
    }
    
    return $total_quantity * TRANSPORT_RATE;
}

function calculateNet(float $gross_sales, float $transport_cost): float {
    return $gross_sales - $transport_cost;
}

$header_text = "=== FARM PRODUCE SALES REPORT (GROUP 7) ===";
echo $header_text . "\n\n";

echo "Detailed Item Breakdown:\n";
foreach ($produce_orders as $index => $item) {
    $item_total = $item['quantity'] * $item['unit_price'];
    $formatted_name = strtoupper($item['produce_name']);
    echo "Item " . ($index + 1) . ": " . $formatted_name . " | Qty: " . $item['quantity'] . " " . $item['unit'] . " @ UGX " . number_format($item['unit_price']) . " = UGX " . number_format($item_total) . "\n";
}

$gross_sales = calculateGross($produce_orders);
$transport_cost = calculateTransport($produce_orders);
$net_proceeds = calculateNet($gross_sales, $transport_cost);

echo "\n----------------------------------------\n";
echo "Gross Sales     : UGX " . number_format($gross_sales) . "\n";
echo "Transport Cost  : UGX " . number_format($transport_cost) . "\n";
echo "Net Proceeds    : UGX " . number_format($net_proceeds) . "\n";
echo "----------------------------------------\n";

if ($net_proceeds > HIGH_SALES_THRESHOLD) {
    echo "Status: HIGH PERFORMANCE - Target exceeded successfully!\n";
} elseif ($net_proceeds > 0) {
    echo "Status: STANDARD PERFORMANCE - Profitable cycle.\n";
} else {
    echo "Status: LOSS / BREAK-EVEN - Review operational costs.\n";
}
?>