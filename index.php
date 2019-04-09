
<?php
/**
 *  Author:         Zane Stearman
 *  Date:           04/08/2019
 *  File:           index.php
 *  URL:            http://zts.greenriverdev.com/328/cupcakes/
 *  Description:    Index page for Cupcake Fundraiser order form.
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//define a default route
//you can do GET /home/main/hello/
$f3->route('GET /', function(){
    echo '<h1>Cupcake Fundraiser!</h1>';
});

//Run Fat-free
$f3->run();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcakes</title>
    <style type="text/css">
        ul{
            list-style: none;
        }
    </style>
</head>
<body>
<?php require('functions.php'); ?>
<form action="order-confirm.php" method="post">
    <h3>Your name: </h3>
    <input type="text" name="name" placeholder="Please input your name." required>
    <h3>Cupcake flavors: </h3>
    <ul><?php echo printArr($flavors); ?></ul>
    <input type="submit" value="Order">
</form>

</body>
</html>
