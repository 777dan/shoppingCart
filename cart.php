<?php
$elemPhonesNames = ['add1', 'add2', 'add3', 'add4', 'add5', 'add6', 'add7'];
for ($i = 0; $i < count($elemPhonesNames); $i++) {
  if (isset($_POST[$elemPhonesNames[$i]])) {
    // echo $phoneModels[$i];
    setcookie("cart[$count]", $models[$i]);
    $count++;
    setcookie("count", $count);
    ob_end_flush();
    // $count++;
  }
}
echo "<h3>Корзина</h3><br>";

function output()
{
  $score = 0;
  echo "<form action=" . $_SERVER['PHP_SELF'] . " method='post'>";
  foreach ($_COOKIE['cart'] as $name => $value) {
    $buttonsDel = "del" . $score;
    $score++;
    echo "<div id='$buttonsDel' style='margin:10px;'><span>$score: $value</span><input style='margin-left:10px;' type='submit' name='$buttonsDel' value='-'></div>";
  }
  echo '</form>';
}


if (isset($_COOKIE['cart'])) {
  output();
}

$buttonsDelArr = [];
for ($i = 0; $i < count($_COOKIE['cart']); $i++) {
  $buttonsDelArr[$i] = "del" . $i;
}
for ($i = 0; $i < count($buttonsDelArr); $i++) {
  if (isset($_POST[$buttonsDelArr[$i]])) {
    // $buttonsDelReplaced = ((int)(str_replace("del", "", $buttonsDel))) - 1;
    // echo $buttonsDelReplaced;
    $_COOKIE["cart[$buttonsDelArr[$i]"] = "";
    output();
  }
}
