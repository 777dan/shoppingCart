<?php ob_start(); ?>
<?php 
$models = ['Samsung A70', 'Samsung J7', 'Samsung J5', 'Samsung A50', 'Samsung S20', 'Samsung S21', 'Samsung 6S+'];
include("cart.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Phones</title>
</head>

<body>
    <h1 class="container">Телефоны</h1>
    <div class="container">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="row">
                <div class="col-sm">
                    <div>Samsung A70</div><input type="submit" name="add1" value="+">
                </div>
                <div class="col-sm">
                    <div>Samsung J7</div><input type="submit" name="add2" value="+">
                </div>
                <div class="col-sm">
                    <div>Samsung J5</div><input type="submit" name="add3" value="+">
                </div>
                <div class="col-sm">
                    <div>Samsung A50</div><input type="submit" name="add4" value="+">
                </div>
                <div class="col-sm">
                    <div>Samsung S20</div><input type="submit" name="add5" value="+">
                </div>
                <div class="col-sm">
                    <div>Samsung S21</div><input type="submit" name="add6" value="+">
                </div>
                <div class="col-sm">
                    <div>Iphone 6S+</div><input type="submit" name="add7" value="+">
                </div>
            </div>
        </form>
    </div>
</body>

</html>