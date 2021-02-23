<?php
    declare(strict_types = 1);
    include 'class-autoloader.php';

    $operator = $_POST["operator"];
    $num0 = $_POST["num0"];
    $num1 = $_POST["num1"];

    $calc = new Calc($operator, (int)$num0, (int)$num1);

    try {
        echo $calc->calculate();
    } catch (TypeError $e) {
        echo "Error: " . $e->getMessage();
    }
?>