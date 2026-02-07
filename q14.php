<?php
$country = $_GET['country'] ?? '';

$cities = [
    "Nepal" => ["Kathmandu", "Pokhara", "Biratnagar"],
    "India" => ["Delhi", "Mumbai", "Chennai"],
    "USA"   => ["New York", "Los Angeles", "Chicago"]
];

if (array_key_exists($country, $cities)) {
    foreach ($cities[$country] as $city) {
        echo "<option>$city</option>";
    }
}
