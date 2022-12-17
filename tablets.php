<?php ob_start(); ?>
<?php
if (isset($_COOKIE['count'])) {
    $counter = $_COOKIE['count'];
} else {
    $counter = 0;
}
// $models = ['Galaxy Tab S7 Plus', 'Microsoft Surface Pro 7', 'Apple A2377 iPadPro 11', 'HONOR Pad V6', 'Lenovo Tab M10 Plus', 'HUAWEI MediaPad M6'];
$models = [
    'Galaxy Tab S7 Plus' => "add1",
    'Microsoft Surface Pro 7' => "add2",
    'Apple A2377 iPadPro 11' => "add3",
    'HONOR Pad V6' => "add4",
    'Lenovo Tab M10 Plus' => "add5",
    'HUAWEI MediaPad M6' => "add6"
];
include("cart.php");
$title = "Tablets";
$header = "Планшеты";
include ("pattern.php");