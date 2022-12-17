<?php ob_start(); ?>
<?php
if (isset($_COOKIE['count'])) {
    $counter = $_COOKIE['count'];
} else {
    $counter = 0;
}
// $models = ['Microsoft Surface Laptop 3', 'ASUS Zenbook Flip', 'Lenovo ThinkPad X13 Yoga', 'Lenovo ThinkPad X13 Yoga'];
$models = [
    'Microsoft Surface Laptop 3' => "add1",
    'ASUS Zenbook Flip' => "add2",
    'Lenovo ThinkPad X13 Yoga' => "add3",
    'Acer Swift 3' => "add4"
];
include("cart.php");
$title = "Laptops";
$header = "Ноутбуки";
include ("pattern.php");