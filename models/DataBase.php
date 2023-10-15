<?php
    class DataBase{
        
        # Conexión Externa
        public static function connection(){            
            $hostname = getenv("DB_HOSTNAME");
            $port = "3306";
            $database = getenv("DB_NAME");
            $username = getenv("DB_USERNAME");
            $password = getenv("DB_PASSWORD");
            // $options = array(
            //     PDO::MYSQL_ATTR_SSL_CA => 'assets/docs/DigiCertGlobalRootCA.crt.pem' 
            // );
            // $options = array(
            //     PDO::MYSQL_ATTR_SSL_CA => 'models/DigiCertGlobalRootCA.crt.pem' 
            // );
			$pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8",$username,$password
        );
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		}
	}
        #  Conexión Local
        // public static function connection(){            
        //     $hostname = "localhost";
        //     $port = "3306";
        //     $database = "dbejemplouser";
        //     $username = "root";
        //     $password = "";
		// 	$pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8",$username,$password);
		// 	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// 	return $pdo;
		// }
	// }
?>