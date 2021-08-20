<?php

    include_once('../partial/header.php');

?>

<div class="container p-4">
        <form action="create_book_model.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Book title" name="title">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Book price" name="price">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Description" name="price">
            </div>
            <div class="form-group">
                <input type="file" class="form-control" name="file">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" name="submit">Post</button>
            </div>
        </form>
    </div>

<?php include_once('../partial/footer.php'); ?>