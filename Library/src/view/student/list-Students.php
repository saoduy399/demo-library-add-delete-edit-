<table border="1px" bgcolor="#faebd7">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Age</th>
        <th>Class</th>
        <th>action</th>
    </tr>
    <?php foreach ($student as $item):?>
        <tr>
            <td><?php echo $item['id']?></td>
            <td><?php echo $item['Name']?></td>
            <td><?php echo $item['Age']?></td>
            <td><?php echo $item['Class']?></td>
            <td><a href="index.php?page=delete-student&id=<?php echo $item['id']?>">delete</a></td>
            <td><a href="index.php?page=edit-student&id=<?php echo $item['id']?>">edit</a></td>
        </tr>
    <?php endforeach; ?>
</table>
