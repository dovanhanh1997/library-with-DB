<table>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Pass</th>
        <th>Email</th>
        <th>Image</th>
    </tr>
    <?php
    foreach ($students as $key => $student) {
        ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $student->name ?></td>
        <td><?php echo $student->pass ?></td>
        <td><?php echo $student->email ?></td>
    </tr>
    <?php
    }
    ?>
</table>
<a href="view/loginSuccess.php">Home Page</a>