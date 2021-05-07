<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <fieldset>
        <input type="text" name="student-name">
        <input type="text" name="student-age">
        <input type="text" name="student-class">
        <button type="submit">OK</button>
    </fieldset>
</form>
</body>
</html>
<?php

if ($_SERVER['REQUEST_METHOD']=="POST"){

    $name = $_REQUEST["student-name"];
    $age = $_REQUEST["student-age"];
    $class = $_REQUEST["student-class"];

    $controller->addStudent($name,$age,$class);

    header("location:index.php?page=student");

}