CREATE DATABASE crud;

CREATE TABLE `crud`.`cadastro` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `Nome` VARCHAR(90) NOT NULL , 
    `Sexo` VARCHAR(30) NOT NULL , 
    `Cidade` VARCHAR(50) NOT NULL , 
    PRIMARY KEY (`id`)) ENGINE = InnoDB;