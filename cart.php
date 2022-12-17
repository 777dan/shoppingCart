<?php
// $elemPhonesNames = ['add1', 'add2', 'add3', 'add4', 'add5', 'add6', 'add7'];
// for ($i = 0; $i < count($models); $i++) {
foreach ($models as $key => $value) {
  if (isset($_POST[$value])) {
    // echo $phoneModels[$i];
    setcookie("cart[$counter]", $key);
    $counter++;
    setcookie("count", $counter);
    ob_end_flush();
    // $count++;
  }
}
// }
echo "<h3>Корзина</h3><br>";

function output()
{
  // $url = str_replace("/shoppingCart/", "", explode('?', $_SERVER['REQUEST_URI']))[0];
  // header("Location: $url");
  $score = 0;
  echo "<form id='cart' action=" . $_SERVER['PHP_SELF'] . " method='post'>";
  echo "<script>document.getElementById('cart').innerHTML = '';</script>";
  foreach ($_COOKIE['cart'] as $name => $value) {
    $buttonsDel = "del" . $score;
    $score++;
    echo "<div id='$buttonsDel' style='margin:10px;'><span>$score: $value</span><input style='margin-left:10px;' type='submit' name='$buttonsDel' value='-'></div>";
  }
  echo '</form>';
}

$buttonsDelArr = [];
if (isset($_COOKIE['cart'])) {
  output();
  for ($i = 0; $i < count($_COOKIE['cart']); $i++) {
    $buttonsDelArr[$i] = "del" . $i;
  }
}

for ($i = 0; $i < count($buttonsDelArr); $i++) {
  if (isset($_POST[$buttonsDelArr[$i]])) {
    $flippedButtonsDelArr = array_flip($buttonsDelArr);
    $index = $buttonsDelArr[$i];
    // setcookie("value", $flippedButtonsDelArr[$index]);
    setcookie("cart[$flippedButtonsDelArr[$index]]", "", time() - 3600);
    output();
  }
}
