<?php
include_once '/var/www/html/module2/libraries-with-DB/function/Libraries.php';
$libraries = new Libraries(openConn());
$idCategory = $_GET['id'];
$sql = "SELECT cateName FROM categorys WHERE cateNumber = $idCategory;";
$libraries->query($sql);
$sql = "DELETE FROM categorys WHERE cateNumber = $idCategory;";
if ($libraries->isNumRowsNotEmpty()) {
    while ($row = $libraries->result->fetch_assoc()) {
        ?>
        <script>
            let cf = '';
            cf = confirm("Do you want to delete <?php echo $row['cateName'] ?> category");
            if (cf === true){
                <?php $libraries->query($sql); ?>
                alert("Delete category success");
            }
        </script>
        <?php
    }
}
?>