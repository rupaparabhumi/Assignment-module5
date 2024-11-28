<?php

$products = [
    ["name" => "Laptop", "price" => 50000, "stock" => 20],
    ["name" => "Smartphone", "price" => 27000, "stock" => 30],
    ["name" => "Tablet", "price" => 18000, "stock" => 50],
    ["name" => "Headphones", "price" => 500, "stock" => 80],
    ["name" => "Smartwatch", "price" => 2000, "stock" => 40]
];

echo "<table border='1' cellpadding='10' cellspacing='1'>";
echo "<tr><th>Product Name</th><th>Price</th><th>Stock</th></tr>";

foreach ($products as $product) {
    echo "<tr>";
    echo "<td>" . $product["name"] . "</td>";
    echo "<td>$" . $product["price"] . "</td>";
    echo "<td>" . $product["stock"] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
