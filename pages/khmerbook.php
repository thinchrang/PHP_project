

<?php

    include_once('partial/header.php');
    require_once('inc/database.php');
    $books = getKhbook();
?>
    <div class="d-flex justify-content-end mr-5">
        <form method="post" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
<div class="container" style="display=flex; flex-wrap: wrap; margin-top: 20px;">
    
    <div class="row row-cols-1 row-cols-md-3">
  <?php
      $books = "";
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $books = research($_POST);
      }else{
        $books = getKhbook();
      }
      if($books->num_rows > 0):
        foreach ($books as $book):

      ?>
        <div class="col mb-4">
          <div class="card">
          <img src="assets/images/<?= $book['image']?>" class="card-img-top" alt="..." style="width: 100%; height: 50vh">
            <div class="card-body">
              <h5 class="card-title"><?= $book['title']?></h5>
              <p class="card-text"><?= $book['price']?></p>
              <p class="card-text"><?= $book['description']?></p>
              <div class="d-flex justify-content-between flex-column">
                <div class="button d-flex justify-content-end">
                    <a href="update.php?id=<?= $book['bookid'] ?>" class="btn btn-primary mr-1"><i class="fa fa-pencil"></i></a>
                    <a href="delete_book.php?categoryid=<?=$book['categoryid']?>&id=<?=$book['bookid']?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; 

        else:
        ?>
        <h1>No result</h1>
        <?php endif;?>
      </div>
</div>

<?php include_once('partial/foot.php'); ?>
