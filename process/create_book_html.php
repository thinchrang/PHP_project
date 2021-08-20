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
                <input type="text" class="form-control" placeholder="Description" name="description">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="authorname" name="authorname">
            </div>
            <div class="form-group">
                <input type="file" class="form-control" name="file">
            </div>
            <select class="custom-select" name="type" required style="margin-bottom: 10px;">
                    <option value="">Type Book</option>
                    <option value="1">Khmer Book</option>
                    <option value="2">English book</option>
                    <option value="3">Chinese book</option>
                    <option value="3">PHP bookk</option>
                </select>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" name="submit">Post</button>
            </div>
        </form>
    </div>

<?php include_once('../partial/footer.php'); ?>