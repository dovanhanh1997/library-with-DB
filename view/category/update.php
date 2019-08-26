<?php
$id = $_GET['id'];
?>

<h2>Update Category Info</h2>
<form method="post" action="index.php?page=category&category=edit">
    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
    <div class="form-group">
        <label>Name</label>
        <label>
            <input type="text" name="name" value="" class="form-control"/>
        </label>
    </div>
    <div class="form-group">
        <label>Exist</label>
        <label>
            <input type="number" name="exist">
        </label></div>
    <div class="form-group">
        <label>Loaned</label>
        <label>
            <input type="number" name="loaned">
        </label></div>
    <div class="form-group">
<!--        <div>-->
<!--            <label for="">Lost</label>-->
<!--            <label>-->
<!--                <input type="number" name="lost">-->
<!--            </label>-->
<!--        </div>-->
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>