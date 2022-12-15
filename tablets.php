<?php ob_start(); ?>
<?php
if (isset($_COOKIE['count'])) {
    $count = $_COOKIE['count'];
} else {
    $count = 0;
}
$models = ['Galaxy Tab S7 Plus', 'Microsoft Surface Pro 7', 'Apple A2377 iPadPro 11', 'HONOR Pad V6', 'Lenovo Tab M10 Plus', 'HUAWEI MediaPad M6'];
include("cart.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Tablets</title>
</head>

<body>
    <h1 class="container">Плашеты</h1>
    <div class="container">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="row">
                <div class="col-sm">
                    <div>Galaxy Tab S7 Plus</div><input type="submit" name="add1" value="+">
                </div>
                <div class="col-sm">
                    <div>Microsoft Surface Pro 7</div><input type="submit" name="add2" value="+">
                </div>
                <div class="col-sm">
                    <div>Apple A2377 iPadPro 11</div><input type="submit" name="add3" value="+">
                </div>
                <div class="col-sm">
                    <div>HONOR Pad V6</div><input type="submit" name="add4" value="+">
                </div>
                <div class="col-sm">
                    <div>Lenovo Tab M10 Plus</div><input type="submit" name="add5" value="+">
                </div>
                <div class="col-sm">
                    <div>HUAWEI MediaPad M6</div><input type="submit" name="add6" value="+">
                </div>
            </div>
        </form>
    </div>
</body>

</html>