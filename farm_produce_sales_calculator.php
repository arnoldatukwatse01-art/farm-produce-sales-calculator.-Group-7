
<?php
<<<<<<< HEAD
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
=======
const TRANSPORT_PER_KG = 1000;
const TRANSPORT_PER_SACK = 4000;

//multi-dimensional array
$products = [
    ["name" => "maize", "unit" => "kg",   "quantity" => 10, "price_for_each" => 3000],
    ["name" => "beans", "unit" => "sack", "quantity" => 2,  "price_for_each" => 20000],
    ["name" => "peas",  "unit" => "kg",   "quantity" => 2,  "price_for_each" => 4500]
];

//FUNCTIONS
function calculateGrossSales($products) {
    // totalGrossSales is a local variable. It is created when the function runs and can only be accessed within this function. Outside of the function, it's value can be accessed via the return statement.
    $totalGrossSales = 0;
    //loop
    foreach ($products as $product) {
        $totalGrossSales += $product["quantity"] * $product["price_for_each"];
    }
    return $totalGrossSales;
}

function calculateTransportCosts($products) {
    $totalTransport = 0;
    //loop
    foreach ($products as $product) {
        if ($product["unit"] == "kg") {
            $totalTransport += $product["quantity"] * TRANSPORT_PER_KG;
        } else {
            $totalTransport += $product["quantity"] * TRANSPORT_PER_SACK;
        }
    }
    return $totalTransport;
}

// Adding a new product
$products[] = ["name" => "millet",  "unit" => "kg",   "quantity" => 5,  "price_for_each" => 3500];

$totalGrossSales = calculateGrossSales($products);
$transportCosts = calculateTransportCosts($products);
$totalNetProceeds = $totalGrossSales - $transportCosts;

//STATUS
if($totalNetProceeds > 0){
    $status = "Profit";
} elseif ($totalNetProceeds == 0){
    $status = "Break-even";
} else {
    $status = "Loss";
>>>>>>> 6e294dd3fdb3d53afc5ec6ec0994e71c8691f730
}

echo strtoupper("Farm produce sales summary") . "<br>"; //string_function
echo "Gross sales: " . $totalGrossSales . "<br>";
echo "Transport costs: " . $transportCosts . "<br>";
echo "Net proceeds: " . $totalNetProceeds . "<br>";
echo "Status: " . $status;
?>