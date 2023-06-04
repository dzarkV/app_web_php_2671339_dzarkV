<?php
    require_once "models/User.php";
    class Users{
        public function __construct(){}
        public function main(){
            header("Location:?c=Dashboard");
        }
        # Controlador para Crear Rol
        public function createRol(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/admin/header.view.php";
                require_once "views/modules/1_users/create_rol.view.php";
                require_once "views/roles/admin/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $rolObj = new User;
                $rolObj->setRolName($_POST['rolName']);
                $rolObj->createRol();                
                header("Location:?c=Dashboard");
            }
        }
        # Controlador para Crear Usuario
        // public function createUser(){
        //     if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                // require_once "views/roles/admin/header.view.php";
                // echo "Vista para crear usuario";
                // require_once "views/roles/admin/footer.view.php";
        //     }
        //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //         echo "Estoy en el POST de crear usuario";
        //     }
        // }

    }

?>