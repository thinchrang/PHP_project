<?php 
include_once('partial/header.php');
include_once('partial/navbar.php'); 
?>  
        <div class="container p-4">

            <?php
                require_once("inc/database.php");
                $id = $_GET['id'];
                echo $id;

                $data = getBookById($id);
                foreach($data as $book):

            ?>
            
                <form action="update_model.php" method="post">
                <input type="hidden" name="id" value="<?= $data['book_id']; ?>">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= $data['title']; ?>" name="title">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" value="<?= $data['price']; ?>" name="price">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= $data['description']; ?>" name="description">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" name="submit">Post</button>
                    </div>
                </form>

                <?php endforeach; ?>
        </div>
