<?php
    require_once('../inc/database.php');
    $id = $_GET['id'];

    $isDeleted = deleteBook($id);

    if($isDeleted){
        header('Location: index.php?page=khmerbook');
    }