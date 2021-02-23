<?php
    declare(strict_types = 1);
    include 'includes/class-autoloader.php'
?>

<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>

    <body>
        <form action="includes/calc.php" method="post">
            <input type="number"
                name="num0"
                placeholder="First Number">

            <select name="operator">
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
            </select>
            
            <input type="number"
                name="num1"
                placeholder="Second Number">

            <button type="submit"
                name="submit">
                Submit
            </button>
        </form>
    </body>
</html>