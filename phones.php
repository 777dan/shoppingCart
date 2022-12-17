<?php ob_start(); ?>
<?php 
if (isset($_COOKIE['count'])) {
    $counter = $_COOKIE['count'];
} else {
    $counter = 0;
}
// $models = ['Samsung A70', 'Samsung J7', 'Samsung J5', 'Samsung A50', 'Samsung S20', 'Samsung S21', 'Samsung 6S+'];
$models = [
    'Samsung A70' => "add1",
    'Samsung J7' => "add2",
    'Samsung J5' => "add3",
    'Samsung A50' => "add4",
    'Samsung S20' => "add5",
    'Samsung S21' => "add6",
    'Samsung 6S+' => "add7"
];
include("cart.php");
$title = "Phones";
$header = "Телефоны";
include ("pattern.php");