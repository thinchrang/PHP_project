<?php
    include_once('partial/header.php');
    include_once('partial/navbar.php');

    
    if(isset($_GET['page'])) {

        if($_GET['page'] == "home"){
            include_once('pages/home.php');
        }elseif($_GET['page'] == "englishbook"){
            include_once('pages/engbook.php');
        }elseif($_GET['page'] == "khmerbook"){
            include_once('pages/khmerbook.php');
        }elseif($_GET['page'] == "post"){
            include_once('pages/post.php');
        }elseif($_GET['page'] == "login"){
            include_once('pages/login.php');
        }
    }else{
        include_once('pages/home.php');
    }


    include_once('partial/foot.php');

    include_once('partial/footer.php');

?>