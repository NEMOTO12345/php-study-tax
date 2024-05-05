<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tax = [8,10][$_POST['kind']];
    $price = $_POST['price'] * (1 + $tax/100);
    print("<p>税込価格(税率{$tax}%)</p>");
    print("<p>{$price}円</p>");
    ?>
</body>
</html>