<table>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Pass</th>
        <th>Email</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    <?php
    foreach ($students as $key => $student) {
        ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $student->name ?></td>
        <td><?php echo $student->pass ?></td>
        <td><?php echo $student->email ?></td>
        <td>Image</td>
        <td><a href="index.php?page=students&students=update&id=<?php echo $student->id ?>">Update</a></td>
        <td><a href="index.php?page=students&students=delete&id=<?php echo $student->id ?>">Delete</a></td>
    </tr>
    <?php
    }
    ?>
</table>
<a href="view/loginSuccess.php">Home Page</a>