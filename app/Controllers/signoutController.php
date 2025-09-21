<?php
Class SignoutController{
    public function logout(){
        // session_start();
        $_SESSION = [];
        session_destroy();
        header("Location: index.php?page=login");
        exit;
    }

}