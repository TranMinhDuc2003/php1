<?php   
    echo "bai1: <br>";
    $color = array("red","green","white");
    print_r($color);
    echo "<br>";
    echo $color[0];
    echo "<br>";


    $age = array();
    $age[0] = 10;
    $age[2] = 20;
    $age[3] = 30;
    print_r($age);
    echo "<br>";


    echo "bai3: <br>";
    define('LOCATOR',"/locator");
    define('CLASSES', LOCATOR."/code/classes");
    define('FUNCTIONS', LOCATOR."/code/functions");
    define('USERDIR', LOCATOR."/code/user");


?>