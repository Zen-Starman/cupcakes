<?php
/**
 *  Author:         Zane Stearman
 *  Date:           04/08/2019
 *  File:           functions.php
 *  Description:    functions utilized in PHP Review Assignment: Cupcakes
*/
$flavors = array(
    'grasshopper' => 'The Grasshopper',
    'maple' => 'Whiskey Maple Bacon',
    'carrot' => 'Carrot Walnut',
    'caramel' => 'Salted Caramel Cupcake',
    'velvet' => 'Red Velvet',
    'lemon' => 'Lemon Drop',
    'tiramisu' => 'Tiramisu');

function printArr($array){
    foreach ($array as $key => $item)
    {
        echo '<li><input type="checkbox" name="flavor[]" value="' . $key . '"> ' . $item . '</input></li><br>';
    }
}

$cost = 0;
