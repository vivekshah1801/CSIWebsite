<?php
        if(!isset($_SESSION))
            session_start();

        if(isset($_SESSION['user'])){
            header('Location: admin_login.php');
        }
        else{
            
            echo 'Hello';
        }
    ?>
