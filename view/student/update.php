<h1>Update Student Info</h1>
<form action="" method="post">
    <input type="hidden" name="id" value="<?php $id=$_GET['id'];echo $id;?>">
    Name: <input type="text" name="name"><br>
    Pass: <input type="password" name="pass"><br>
    Email: <input type="text" name="email"><br>
    Image: <input type="text" name="image"><br>
    Black History: <input type="number" name="blackHistory"><br>
    <button type="submit">Update</button>
</form>