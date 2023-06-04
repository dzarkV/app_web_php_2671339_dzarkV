<?php
    require_once "models/User.php";
    class Users{
        public function __construct(){}
        public function main(){
            header("Location:?c=Dashboard");
        }
        # Función del Controlador para Crear Rol
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
                header("Location:?c=Users&a=readRol");
            }
        }
        # Función del Controlador para Consultar Roles
        public function readRol(){
            $roles = new User;
            $roles = $roles->readRol();
            require_once "views/roles/admin/header.view.php";            
            require_once "views/modules/1_users/read_rol.view.php";
            require_once "views/roles/admin/footer.view.php";
        }
        # Función del Controlador para Actualizar Rol
        public function updateRol(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $rol = new User;
                $rol = $rol->getRolByCode($_GET['rolCode']);
                require_once "views/roles/admin/header.view.php";
                require_once "views/modules/1_users/update_rol.view.php";
                require_once "views/roles/admin/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            }
        }
        # Función del Controlador para Crear Usuario
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