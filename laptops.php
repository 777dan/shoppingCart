<?php ob_start(); ?>
<?php
$models = ['Microsoft Surface Laptop 3', 'ASUS Zenbook Flip', 'Lenovo ThinkPad X13 Yoga', 'Lenovo ThinkPad X13 Yoga'];
include("cart.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Laptops</title>
</head>

<body>
    <h1 class="container">Ноутбуки</h1>
    <div class="container">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="row">
                <div class="col-sm">
                    <div>Microsoft Surface Laptop 3</div><input type="submit" name="add1" value="+">
                </div>
                <div class="col-sm">
                    <div>ASUS Zenbook Flip</div><input type="submit" name="add2" value="+">
                </div>
                <div class="col-sm">
                    <div>Lenovo ThinkPad X13 Yoga</div><input type="submit" name="add3" value="+">
                </div>
                <div class="col-sm">
                    <div>Lenovo ThinkPad X13 Yoga</div><input type="submit" name="add4" value="+">
                </div>
            </div>
        </form>
    </div>
</body>

</html>