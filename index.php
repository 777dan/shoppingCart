<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Store</title>
</head>

<body>
    <h1 сlass='container'>Магазин электроники</h1>
    <form сlass='container' action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="row">
            <input class="col-sm" type="submit" name="phones" value="Телефоны">
            <input class="col-sm" type="submit" name="tablets" value="Планштеы">
            <input class="col-sm" type="submit" name="laptops" value="Ноутбуки">
        </div>
    </form>
    <?php
    $elemNames = ['phones', 'tablets', 'laptops'];
    for ($i = 0; $i < count($elemNames); $i++) {
        if (isset($_POST[$elemNames[$i]])) {
            header("Location: " . $elemNames[$i] . ".php");
            ob_end_flush();
        }
    }
    ?>
</body>

</html>