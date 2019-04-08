<?php
/** Created by PHPStorm. ... */

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

$flavors = array(
    'grasshopper' => 'The Grasshopper',
    'maple' => 'Whiskey Maple Bacon',
    'carrot' => 'Carrot Walnut',
    'caramel' => 'Salted Caramel Cupcake',
    'velvet' => 'Red Velvet',
    'lemon' => 'Lemon Drop',
    'tiramisu' => 'Tiramisu');

function printArr($array){
    foreach ($array as $item)
    {
        echo '<li><input type="checkbox"> ' . $item . '<input></li><br>';
    }
}

echo '<h2>Cupcake flavors</h2><br><ul>' . printArr($flavors) . '</ul>';


//Run Fat-free
$f3->run();