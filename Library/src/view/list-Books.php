<table border="1px" bgcolor="#1e90ff">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Year</th>
        <th>Quantity</th>
        <th>Category_id</th>
        <th>Language_id</th>
        <th>Publishing_Company_id</th>
        <th>Author_id</th>
        <th>Location_id</th>
        <th>Warehouse_id</th>
    </tr>
    <?php foreach ($book as $item): ?>
        <tr>
            <td><?php echo $item["id"]?></td>
            <td><?php echo $item["Name"]?></td>
            <td><?php echo $item["Year"]?></td>
            <td><?php echo $item["Quantity"]?></td>
            <td><?php echo $item["Category_id"]?></td>
            <td><?php echo $item["Language_id"]?></td>
            <td><?php echo $item["Publishing_Company_id"]?></td>
            <td><?php echo $item["Author_id"]?></td>
            <td><?php echo $item["Location_id"]?></td>
            <td><?php echo $item["Warehouse_id"]?></td>
        </tr>
    <?php endforeach;?>
</table>