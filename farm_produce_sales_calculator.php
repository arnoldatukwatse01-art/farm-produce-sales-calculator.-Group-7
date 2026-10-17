<?php
// Branch 3: Loops, Conditions, and String Functions

$salesRecords = [
    ['crop' => 'Maize', 'unit' => 'sack', 'quantity' => 10],
    ['crop' => 'Beans', 'unit' => 'kg', 'quantity' => 250],
    ['crop' => 'Rice', 'unit' => 'sack', 'quantity' => 5],
    ['crop' => 'Groundnuts', 'unit' => 'kg', 'quantity' => 60]
];

// FOREACH LOOP
foreach ($salesRecords as $record) {
    $crop = $record['crop'];
    $unit = $record['unit'];
    $quantity = $record['quantity'];

    $grossSales = $quantity * 2000; // placeholder test value
    $transportCost = $quantity * 100;
    $netSales = $grossSales - $transportCost;

    // IF-ELSE CONDITIONAL LOGIC
    if ($netSales > 1000000) {
        $performanceStatus = "High Performance";
    } elseif ($netSales >= 300000) {
        $performanceStatus = "Standard Performance";
    } else {
        $performanceStatus = "Low Performance";
    }

    // STRTTOUPPER() STRING FUNCTION
    $formattedCrop = strtoupper($crop);
    $formattedStatus = strtoupper($performanceStatus);

    echo "Produce: $formattedCrop | Net: UGX " . number_format($netSales) . " | Status: $formattedStatus\n";
}
?>