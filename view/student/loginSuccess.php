<?php
session_start();
var_dump($_SESSION['status_login']);

?>
<h1>Login Success</h1>
<a href="../../index.php?page=add">Go Home Page</a>