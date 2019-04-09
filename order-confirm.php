<?php

/**
 *  Author:         Zane Stearman
 *  Date:           04/08/2019
 *  File:           order-confirm.php
 *  URL:            http://zts.greenriverdev.com/328/cupcakes/order-confirm.php
 *  Description:    Confirmation page for Cupcake order, via cupcakes/index.php
 */

require ('functions.php');
?>

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
</h2>
<p>Order Summary: </p>
<ul>
    <?php
        if(isset($_POST['flavor']))
            {
                foreach ($_POST['flavor'] as $item)
                {
                    foreach ($flavors as $key => $value)
                    {
                        if ($item == $key)
                        {
                            echo '<li>' . $value . '</li>';
                            $cost += 3.50;
                        }

                    }
                }
            }

        ?>
</ul>
<p>Order Total: $ <?php echo number_format($cost, 2); ?></p>

</body>


