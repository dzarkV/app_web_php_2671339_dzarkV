<?php
    class Login{
        public function __construct(){}
        public function main(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/business/header.view.php";
                require_once "views/business/login.view.php";
                require_once "views/roles/business/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                require_once "views/roles/business/header.view.php";
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                echo "<br>Usuario: " . $user;
                echo "<br>Contraseña: " . $pass;
                require_once "views/roles/business/footer.view.php";
            }

        }
    }    
?>