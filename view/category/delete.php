<?php
$id = $_GET['id'];
?>
<h1>Do you want to Delete this Category</h1>

<form action="index.php?page=category&category=delete" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <button type="submit">Delete</button>
    <a href="index.php?page=category">Cancel</a>

</form>