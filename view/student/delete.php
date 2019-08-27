<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<div class="jumbotron text-center">
    <h3>Do you want delete this STUDENT</h3>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php $id = $_GET['id'];echo $id;?>">
        <button type="submit">Delete</button>
        <a href="index.php?page=students">Cancel</a>
    </form>
</div>