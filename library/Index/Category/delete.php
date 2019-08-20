<?php
include_once "../../Database/DBCategory.php";
include_once '../../Function/category.php';
?>

<script>
    let cf = '';
    cf = confirm("Do you want to delete category");
    if (cf === true) {
        <?php delete($category); ?>
        alert("Delete category success");
        window.location.replace("index.php")

    }
</script>

