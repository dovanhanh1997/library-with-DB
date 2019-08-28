<?php session_start(); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<form action="index.php?page=category&category=add" method="post">
    <button type="submit">ADD</button>

</form>
<div class="table-responsive">
    <table class="table">
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Exist</th>
            <th>Loaned</th>
            <th>Action</th>
            <th>Category Code</th>
        </tr>
        <?php foreach ($categories as $key => $category) {
            ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $category->name ?></td>
                <td>
                    <a href="index.php?page=books<?php $_SESSION["cateName" . $key] = $category->name; ?>&key=<?php echo $key; ?>"><?php echo $category->exist ?></a>
                </td>
                <td><?php echo $category->loaned ?></td>
                <td><a href="index.php?page=category&category=edit&id=<?php echo $category->cateNumber ?>">Update</a>
                    <a href="index.php?page=category&category=delete&id=<?php echo $category->cateNumber ?>">Delete</a>
                </td>
                <td><?php echo $category->cateNumber ?></td>
            </tr>
        <?php } ?>
    </table>
</div>

<form action="view/loginSuccess.php" method="post">
    <button type="submit">Home Page</button>
</form>

