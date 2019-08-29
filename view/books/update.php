<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<form action="" method="post">
    <div class="form-group">
        <label for="bookName">Book Name</label>
        <input type="text" name="bookName">
    </div>
    <div class="form-group">
        <label for="loan">Loan</label>
        <input type="number" name="loan">
    </div>
    <div class="form-group">
        <label for="exist">Exist</label>
        <input type="number" name="exist">
    </div>
    <div class="form-group">
        <select name="cate" id="category">
            <?php foreach ($categories as $category){  ?>
                <option value="<?php echo $category->cateNumber ?>"><?php echo $category->name ?></option>
            <?php } ?>
        </select>
    </div>
    <button type="submit" class="btn btn-default">Update Book</button>
</form>