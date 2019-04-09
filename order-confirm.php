<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="confirm.css">
</head>
<body>

<h1>Pizza Order Confirmation</h1>

<h2>Thank you, <?php echo $_POST['name']; ?>
    , for your order!
<?php

echo '<br>';
echo $_POST['name'];
echo $_POST['flavors[]'];
//echo '<br>';
//var_dump($_POST['pizzas']);
//$num_pizzas = (int)$_POST['pizzas'];
//echo '<br>';
//var_dump($num_pizzas);

?>
</body>


