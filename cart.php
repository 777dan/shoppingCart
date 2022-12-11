<?php
$elemPhonesNames = ['add1', 'add2', 'add3', 'add4', 'add5', 'add6', 'add7'];
$count = 0;
for ($i = 0; $i < count($elemPhonesNames); $i++) {
    if (isset($_POST[$elemPhonesNames[$i]])) {
        // echo $phoneModels[$i];
        setcookie("cart[$count]", $models[$i]);
        $count++;
        ob_end_flush();
        // $count++;
    }
}
echo "<h3>Корзина</h3><br>";
if (isset($_COOKIE['cart'])) {
    foreach ($_COOKIE['cart'] as $name => $value) {
      echo "1: $value <br />";
    }
  }
// print_r($_COOKIE['cart']);
