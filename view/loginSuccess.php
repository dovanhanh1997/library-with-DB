<?php
session_start();
if ($_SESSION['status_login']) {
    ?>
    <h1>Welcome to Library</h1>

    <h3><a href="../index.php?page=category">Category list</a></h3>
    <h3><a href="../index.php?page=students">Student List</a></h3>
    <h3><a href="../index.php?page=books">Book List</a></h3>
    <h3><a href="../index.php?page=orders">Loan List</a></h3>

    <a href="logout.php">Log Out</a>
    <?php
}
else {
echo '<h1>You must login to use Library</h1>';
}?>
