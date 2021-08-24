<?php
    require_once('inc/database.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $isUpdate = updateBook($_POST);
    }
    if($isUpdate and $_POST['category'] == 1){
        header('location: index.php?page=khmerbook');
    }elseif ($isUpdate and $_POST['category'] == 2) {
        header('location: index.php?page=englishbook');
    }