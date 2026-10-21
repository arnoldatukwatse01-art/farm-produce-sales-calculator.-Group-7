<?php
// Include or define the functions to test
const TRANSPORT_PER_KG = 1000;
const TRANSPORT_PER_SACK = 4000;

function calculateGrossSales($products) {
    $totalGrossSales = 0;
    foreach ($products as $product) {
        $totalGrossSales += $product["quantity"] * $product["price_for_each"];
    }
    return $totalGrossSales;
}

function calculateTransportCosts($products) {
    $totalTransport = 0;
    foreach ($products as $product) {
        if ($product["unit"] == "kg") {
            $totalTransport += $product["quantity"] * TRANSPORT_PER_KG;
        } else {
            $totalTransport += $product["quantity"] * TRANSPORT_PER_SACK;
        }
    }
    return $totalTransport;
}

function evaluateStatus($netProceeds) {
    if ($netProceeds > 0) {
        return "Profit";
    } elseif ($netProceeds == 0) {
        return "Break-even";
    } else {
        return "Loss";
    }
}

// --- AUTOMATED TEST SUITE ---
echo "=== RUNNING FARM CALCULATOR TESTS ===\n\n";

// Test 1: Standard Calculation Case
$standardProducts = [
    ["name" => "maize", "unit" => "kg", "quantity" => 10, "price_for_each" => 3000],
    ["name" => "beans", "unit" => "sack", "quantity" => 2, "price_for_each" => 20000],
    ["name" => "peas", "unit" => "kg", "quantity" => 2, "price_for_each" => 4500]
];

$gross1 = calculateGrossSales($standardProducts);
$transport1 = calculateTransportCosts($standardProducts);
$net1 = $gross1 - $transport1;
$status1 = evaluateStatus($net1);

assert($gross1 === 79000, "Test 1 Failed: Gross sales should be 79000");
assert($transport1 === 20000, "Test 1 Failed: Transport should be 20000");
assert($net1 === 59000, "Test 1 Failed: Net proceeds should be 59000");
assert($status1 === "Profit", "Test 1 Failed: Status should be Profit");
echo "[PASS] Test 1: Standard Calculation Case Passed.\n";

// Test 2: Boundary / Zero-Quantity Case
$zeroProducts = [
    ["name" => "maize", "unit" => "kg", "quantity" => 0, "price_for_each" => 3000]
];

$gross2 = calculateGrossSales($zeroProducts);
$transport2 = calculateTransportCosts($zeroProducts);
$net2 = $gross2 - $transport2;
$status2 = evaluateStatus($net2);

assert($gross2 === 0, "Test 2 Failed: Gross sales should be 0");
assert($transport2 === 0, "Test 2 Failed: Transport should be 0");
assert($net2 === 0, "Test 2 Failed: Net proceeds should be 0");
assert($status2 === "Break-even", "Test 2 Failed: Status should be Break-even");
echo "[PASS] Test 2: Boundary / Zero-Quantity Case Passed.\n";

// Test 3: Loss / Negative Net Proceeds Case
$lossProducts = [
    ["name" => "maize", "unit" => "sack", "quantity" => 5, "price_for_each" => 2000]
]; // Gross = 10,000 | Transport = 5 * 4000 = 20,000 | Net = -10,000

$gross3 = calculateGrossSales($lossProducts);
$transport3 = calculateTransportCosts($lossProducts);
$net3 = $gross3 - $transport3;
$status3 = evaluateStatus($net3);

assert($net3 === -10000, "Test 3 Failed: Net proceeds should be -10000");
assert($status3 === "Loss", "Test 3 Failed: Status should be Loss");
echo "[PASS] Test 3: Loss / Negative Net Proceeds Case Passed.\n";

echo "\n=====================================\n";
echo "ALL TESTS COMPLETED SUCCESSFULLY!\n";
echo "=====================================\n";
?>