<?php
$bookNumber = $_GET['id'];
?>
<h1>Do you want to Delete this Book</h1>

<form action="index.php?page=books&books=delete" method="post">
    <input type="hidden" name="bookNumber" value="<?php echo $bookNumber; ?>">
    <button type="submit">Delete</button>
    <a href="index.php?page=books">Cancel</a>
</form>