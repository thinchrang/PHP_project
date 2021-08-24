<?php
    include_once('partial/header.php');
    include_once('partial/navbar.php');

    
    if(isset($_GET['page'])) {

        include_once('pages/'. $_GET['page'].'.php');
        
    }else{
        include_once('pages/home.php');
    }

    include_once('partial/footer.php');

?>