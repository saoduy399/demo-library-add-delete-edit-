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
        <input type="text" name="student-name" value="<?php echo $student['Name']?>">
        <input type="text" name="student-age" value="<?php echo $student['Age']?>">
        <input type="text" name="student-class" value="<?php echo $student['Class']?>">
        <button type="submit">OK</button>
    </fieldset>
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {

    $id = $student['id'];
    $name = $_REQUEST["student-name"];
    $age = $_REQUEST["student-age"];
    $class = $_REQUEST["student-class"];

    $controller->updateStudent($id,$name, $age, $class);

    header("location:index.php?page=student");
}