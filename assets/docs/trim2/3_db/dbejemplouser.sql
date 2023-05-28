-- -----------------------------------------------------
-- ESTRUCTURA dbejemplouser
-- -----------------------------------------------------
CREATE DATABASE dbejemplouser DEFAULT CHARACTER SET utf8 ;
USE dbejemplouser ;

-- -----------------------------------------------------
-- TABLA USER
-- -----------------------------------------------------
CREATE TABLE USER (
  user_code INT NOT NULL AUTO_INCREMENT,
  user_name VARCHAR(150) NOT NULL,
  user_email VARCHAR(150) NOT NULL,
  user_pass VARCHAR(150) NOT NULL,
  PRIMARY KEY (user_code)
) ENGINE = InnoDB;