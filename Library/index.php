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
<a href="index.php?page=book">list-Books</a>
<a href="index.php?page=student">list-Students</a>
<a href="index.php?page=add-student">Add Student</a>
</body>
</html>
<?php

include __DIR__ . "/vendor/autoload.php";

use obb\controller\BaseController;

$controller = new BaseController();


$page = null;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

switch ($page) {
    case 'book':
        $book = $controller->getAllBook();
        include_once 'src/view/list-Books.php';
        break;

    case 'student':
        $student = $controller->getAllStudent();
        include_once 'src/view/student/list-Students.php';
        break;
    case 'add-student':
        include_once 'src/view/student/add-student.php';
        break;
    case 'delete-student':
        $id = $_GET['id'];
        $controller->deleteStudent($id);
        header("location:index.php?page=student");
        break;
    case 'edit-student':
        $student= $controller->getStudentById($_GET['id']);
        include_once "src/view/student/edit-student.php";
        break;
}
?>

