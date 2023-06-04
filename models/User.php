<?php
    class User{
        // 1ra Parte: Modelo de acuerdo a la POO
        private $dbh;
        private $rolCode = null;
        private $rolName;
        private $userCode;
        private $userName;
        private $userLastName;
        private $userEmail;
        private $userPass;        
        private $userStatus;        
        public function __construct(){
            $this->dbh = DataBase::connection();
            $a = func_get_args();
            $i = func_num_args();
            if (method_exists($this, $f = '__construct' . $i)) {
                call_user_func_array(array($this, $f), $a);
            }
        }
        public function __construct2($userEmail,$userPass){
            $this->userEmail = $userEmail;
            $this->userPass = $userPass;
        }        
        public function __construct7($rolCode,$userCode,$userName,$userLastName,$userEmail,$userPass,$userStatus){
            $this->rolCode = $rolCode;
            $this->userCode = $userCode;
            $this->userName = $userName;
            $this->userLastName = $userLastName;
            $this->userEmail = $userEmail;
            $this->userPass = $userPass;
            $this->userStatus = $userStatus;
        }
        # Código Rol
        public function setRolCode($rolCode){
            $this->rolCode = $rolCode;
        }
        public function getRolCode(){
            return $this->rolCode;
        }
        # Nombre Rol
        public function setRolName($rolName){
            $this->rolName = $rolName;
        }
        public function getRolName(){
            return $this->rolName;
        }
        # Código Usuario
        public function setUserCode($userCode){
            $this->userCode = $userCode;
        }
        public function getUserCode(){
            return $this->userCode;
        }
        # Nombre Usuario
        public function setUserName($userName){
            $this->userName = $userName;
        }
        public function getUserName(){
            return $this->userName;
        }
        # Apellido Usuario
        public function setUserLastName($userLastName){
            $this->userLastName = $userLastName;
        }
        public function getUserLastName(){
            return $this->userLastName;
        }
        # Email Usuario
        public function setUserEmail($userEmail){
            $this->userEmail = $userEmail;
        }
        public function getUserEmail(){
            return $this->userEmail;
        }
        # PassWord Usuario
        public function setUserPass($userPass){
            $this->userPass = $userPass;
        }
        public function getUserPass(){
            return $this->userPass;
        }
        # Estado Usuario
        public function setUserStatus($userStatus){
            $this->userStatus = $userStatus;
        }
        public function getUserStatus(){
            return $this->userStatus;
        }

        // 2da Parte: Modelo Negocio (Acceso a Datos -> DB)
        
        # CU01 - Iniciar Sesión
        public function login(){
            $sql = 'SELECT * FROM USERS                    
                    WHERE user_email = :userEmail AND user_pass = :userPass';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('userEmail', $this->getUserEmail());
            $stmt->bindValue('userPass', sha1($this->getUserPass()));
            $stmt->execute();
            $userDb = $stmt->fetch();
            if ($userDb) {
                $user = new User(                    
                    $userDb['rol_code'],
                    $userDb['user_code'],
                    $userDb['user_name'],
                    $userDb['user_lastname'],
                    $userDb['user_email'],
                    $userDb['user_pass'],
                    $userDb['user_status']
                );
                return $user;
            } else {
                return false;
            }
        }
        # CU02 - Crear Rol        
        public function createRol(){
            try {                
                $sql = 'INSERT INTO ROLES VALUES (:rolCode,:rolName)';                
                $stmt = $this->dbh->prepare($sql);                
                $stmt->bindValue('rolCode', $this->getRolCode());
                $stmt->bindValue('rolName', $this->getRolName());                
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        # CU03 - Consultar Roles
        public function readRol(){
            try {
                $rolList = [];
                $sql = 'SELECT * FROM ROLES';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $rol) {                    
                    $rolObj = new User;
                    $rolObj->setRolCode($rol['rol_code']);
                    $rolObj->setRolName($rol['rol_name']);
                    array_push($rolList, $rolObj);
                }
                return $rolList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        # CU04 - Actualizar Rol
        # CU05 - Eliminar Rol
        # CU06 - Crear Usuario
        # CU07 - Consultar Usuarios
        # CU08 - Actualizar usuario
        # CU09 - Eliminar usuario
        # CU10 - Cerrar Sesión
    }
?>