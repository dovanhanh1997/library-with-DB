<table>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Exist</th>
        <th>Loaned</th>
        <th>Action</th>
    </tr>
    <?php foreach ($categories as $key => $category) {
        ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $category->name ?></td>
            <td><?php echo $category->exist ?></td>
            <td><?php echo $category->loaned ?></td>
            <td><a href="index.php?page=category&category=edit&id=<?php echo $category->cateNumber ?>">Update</a></td>
            <td><a href="index.php?page=category&category=delete&id=<?php echo $category->cateNumber ?>">Delete</a></td>
        </tr>
    <?php } ?>
</table>
<a href="index.php?page=category&category=add">Add category</a>

<form action="view/loginSuccess.php" method="post">
    <button type="submit">Home Page</button>
</form>

