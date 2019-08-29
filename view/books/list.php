<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<a href="index.php?page=books&books=add">Add Book</a>
<div class="container">
    <h2>List</h2>
    <table class="table table-striped">
        <tr>
            <th>NO</th>
            <th>Name</th>
            <th>Loan</th>
            <th>Total</th>
            <th>Category</th>
        </tr>
        <?php foreach ($books as $key => $book) {
            ?>
            <tr>
                <td><?php echo ++$key?></td>
                <td><?php echo $book->name ?></td>
                <td><?php echo $book->loan ?></td>
                <td><?php echo $book->total ?></td>
                <td><?php echo $book->cateName ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>