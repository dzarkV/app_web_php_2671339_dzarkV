<?php
    class User{
        // 1ra Parte: Modelo de acuerdo a la POO
        private $userCode;
        private $userName;
        private $userEmail;
        private $userPass;        
        public function __construct(){
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
        public function __construct4($userCode,$userName,$userEmail,$userPass){
            $this->userCode = $userCode;
            $this->userName = $userName;
            $this->userEmail = $userEmail;
            $this->userPass = $userPass;
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

        // 2da Parte: Modelo Negocio (Acceso a Datos -> DB)

    }
?>