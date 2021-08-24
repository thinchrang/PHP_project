<?php
    require_once('inc/database.php');
    $id = $_GET['id'];
    $categoryid = $_GET['categoryid'];

    $isDeleted = deleteBook($id);

    if($isDeleted and $categoryid == 1){
        header('location: index.php?page=khmerbook');
    }elseif ($isDeleted and $categoryid == 2) {
        header('location: index.php?page=englishbook');
    }