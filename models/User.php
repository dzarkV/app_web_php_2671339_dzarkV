<?php
    class User{
        // 1ra Parte: Modelo de acuerdo a la POO
        private $userCode;
        private $userName;
        private $userEmail;
        private $userPass;        
        public function __construct(){}
        # Código Usuario
        public function setUserCode($userCode){
            $this->userCode = $userCode;
        }
        public function getUserCode(){
            return $this->getUserCode;
        }
        # Nombre Usuario
        public function setUserName($UserName){
            $this->UserName = $UserName;
        }
        public function getUserName(){
            return $this->getUserName;
        }
        # Email Usuario
        public function setUserEmail($UserEmail){
            $this->UserEmail = $UserEmail;
        }
        public function getUserEmail(){
            return $this->getUserEmail;
        }
        # PassWord Usuario
        public function setUserPass($UserPass){
            $this->UserPass = $UserPass;
        }
        public function getUserPass(){
            return $this->getUserPass;
        }

        // 2da Parte: Modelo Negocio (Acceso a Datos -> DB)
        
    }
?>