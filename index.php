<?php 
    @ob_start();
    session_start();

    if(!empty($_SESSION['admin'])){
        require 'config.php';
        include $view;
        $lihat = new view($config);
        $toko = $lihat->toko();
        
        // Check the role of the logged-in user
        if($_SESSION['admin']['id_member'] == 1) {
            // Admin
            include 'admin/template/header.php';
            include 'admin/template/sidebar.php';
            if(!empty($_GET['page'])){
                include 'admin/module/'.$_GET['page'].'/index.php';
            } else {    
                include 'admin/template/home.php';
            }
            include 'admin/template/footer.php';
        } elseif($_SESSION['admin']['id_member'] == 2) {
            // customer
            include 'customer/template/header.php';
            include 'customer/template/sidebar.php';
            if(!empty($_GET['page'])){
                include 'customer/module/'.$_GET['page'].'/index.php';
            } else {
                include 'customer/template/home.php';
            }
            include 'customer/template/footer.php';
        } elseif($_SESSION['admin']['id_member'] == 3) {
            // owner
            include 'owner/template/header.php';
            include 'owner/template/sidebar.php';
            if(!empty($_GET['page'])){
                include 'owner/module/'.$_GET['page'].'/index.php';
            } else {
                include 'owner/template/home.php';
            }
            include 'owner/template/footer.php';
        } else {
            // Invalid role, log out the user
            echo '<script>alert("Peran tidak valid");window.location="logout.php";</script>';
        }
    } else {
        echo '<script>window.location="landing-page/index.php";</script>';
    }
?>
