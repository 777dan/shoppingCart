<?php
echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>' . $title . '</title>
</head>

<body>
    <h1 class="container">'. $header .'</h1>
    <div class="container">';
echo "<form action='" . $_SERVER['PHP_SELF'] . "' method='post'><div class='row'>";
foreach ($models as $key => $value) {
    echo "<div class='col-sm'><div>$key</div><input type='submit' name='$value' value='+''></div>";
}
echo " </div>
        </form>
    </div>
</body>

</html>";
