

<?php

    include_once('partial/header.php');
    require_once('inc/database.php');
    $books = getAllbook();
?>

<div class="p-3 container mt-3">
    <div class="d-flex justify-content-end p-4">
        <a href="process/create_book_html.php" class="btn btn-primary">Add Book+</a>
    </div>
    <?php foreach ($books as $book): ?>
    <div class="card mb-2">
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
          <img src="" class="card-img-top" alt="...">

            <div class="card-body">
              <h5 class="card-title"><?= $book['title']?></h5>
              <p class="card-text"><?= $book['price']?></p>
              <a href="#" class="btn btn-primary">Details</a>
              <div class="d-flex justify-content-between flex-column">
                <div class="button d-flex justify-content-end">
                    <a href="editBook_view.php?id=<?= $book['bookid'] ?>" class="btn btn-primary mr-1"><i class="fa fa-pencil"></i></a>
                    <a href="../process/delete.php?id=<?= $book['bookid'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </div>
                <!-- <div class="d-flex justify-content-end">
                    <span><?= $book['date']?></span>
                </div> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
            <h5 class="card-title"><?= $book['title']?></h5>
              <p class="card-text"><?= $book['price']?></p>
              <a href="#" class="btn btn-primary">Details</a>
              <div class="d-flex justify-content-between flex-column">
                <div class="button d-flex justify-content-end">
                    <a href="editBook_view.php?id=<?= $book['bookid'] ?>" class="btn btn-primary mr-1"><i class="fa fa-pencil"></i></a>
                    <a href="deleteBook.php?id=<?= $book['bookid'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </div>
                <!-- <div class="d-flex justify-content-end">
                    <span><?= $book['date']?></span>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
        
    </div>
    
    <?php endforeach; ?>
</div>

<?php include_once('partial/footer.php');?>

<!-- card -->
