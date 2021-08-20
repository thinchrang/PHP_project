<?php
    require_once('inc/database.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $isUpdate = updateBook($_POST);

        if($isUpdate){
            header('Location: index.php?page=book');
        }
    }