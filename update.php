<?php 
include_once('partial/header.php');

?>
<?php 
    require_once('inc/database.php');
    $id = $_GET['id'];
    $update = getBookById($id);
    foreach($update as $book):;

?>

<div class="container p-4">
    <form action="update_model.php" method="post">
    <input type="hidden" name="id" value="<?=$book['bookid'] ?>">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Book title" name="title" value="<?=$book['title'] ?>">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="Book price" name="price" value="<?=$book['price'] ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Description" name="description" value="<?=$book['description'] ?>">
        </div>
        <select name="category" required class="mb-3">
            <option value="1">Khmer Book</option>
            <option value="2">English book</option>
        </select>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="authorname" name="authorname" value="<?=$book['authorname'] ?>">
        </div>
            <button type="submit" class="btn btn-primary btn-block" name="submit">Post</button>
        </div>
        
    </form>
</div>
<?php endforeach; ?>

<?php include_once('partial/footer.php'); ?>
