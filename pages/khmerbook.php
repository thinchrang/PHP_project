

<?php

    include_once('partial/header.php');
    require_once('inc/database.php');
    $books = getAllbook();
?>

<div class="container" style="display=flex; flex-wrap: wrap;">
    <div class="d-flex justify-content-end p-4">
        <a href="process/create_book_html.php" class="btn btn-primary">Add Book+</a>
    </div>

    <div class="row row-cols-1 row-cols-md-3">
      <?php foreach ($books as $book): ?>
        <div class="col mb-4">
          <div class="card">
          <img src="assets/images/<?= $book['image']?>" class="card-img-top" alt="..." style="width: 100%; height: 50vh">
            <div class="card-body">
              <h5 class="card-title"><?= $book['title']?></h5>
              <p class="card-text"><?= $book['price']?></p>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between flex-column">
                <div class="button d-flex justify-content-end">
                    <a href="update.php?id=<?= $book['bookid'] ?>" class="btn btn-primary mr-1"><i class="fa fa-pencil"></i></a>
                    <a href="delete.php?id=<?= $book['bookid'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
</div>
