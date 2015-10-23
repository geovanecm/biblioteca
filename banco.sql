-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema biblioteca
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema biblioteca
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `biblioteca` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `biblioteca` ;

-- -----------------------------------------------------
-- Table `biblioteca`.`autor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca`.`autor` (
  `codigo` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `nome` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`codigo`)  COMMENT '')
ENGINE = InnoDB;

insert into autor(`nome`)values('geovane'),('pedro');

-- -----------------------------------------------------
-- Table `biblioteca`.`livros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca`.`livros` (
  `codigo` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `titulo` VARCHAR(45) NOT NULL COMMENT '',
   `imagem` varchar(500) NOT NULL COMMENT '',
   `sinopse` varchar(5000) NOT NULL COMMENT '',
  `autor_codigo` INT NOT NULL COMMENT '',
  PRIMARY KEY (`codigo`)  COMMENT '',
  INDEX `fk_livros_autor_idx` (`autor_codigo` ASC)  COMMENT '',
  CONSTRAINT `fk_livros_autor`
    FOREIGN KEY (`autor_codigo`)
    REFERENCES `biblioteca`.`autor` (`codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `biblioteca`.`admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca`.`admin` (
  `codigo` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `email` VARCHAR(45) NOT NULL COMMENT '',
  `senha` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`codigo`)  COMMENT '')
ENGINE = InnoDB;


insert into biblioteca.admin(`email`,`senha`)value('a@gmail.com','a');

-- -----------------------------------------------------
-- Table `biblioteca`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca`.`usuarios` (
  `codigo` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `nome` VARCHAR(60) NOT NULL COMMENT '',
  `email` VARCHAR(60) NOT NULL COMMENT '',
  `senha` VARCHAR(60) NOT NULL COMMENT '',
  `imagem` VARCHAR(500) NULL COMMENT '',
  `cpf` VARCHAR(15) NULL COMMENT '',
  `sobrenome` VARCHAR(45) NULL COMMENT '',
  `idade` INT NULL COMMENT '',
  `ano` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`codigo`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `biblioteca`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca`.`cliente` (
  `codigo` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `codigo_u` VARCHAR(45) NOT NULL COMMENT '',
  `data_i` DATE NOT NULL COMMENT '',
  `data_f` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`codigo`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `biblioteca`.`livros_has_cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca`.`livros_has_cliente` (
  `livros_codigo` INT NOT NULL COMMENT '',
  `cliente_codigo` INT NOT NULL COMMENT '',
  PRIMARY KEY (`livros_codigo`, `cliente_codigo`)  COMMENT '',
  INDEX `fk_livros_has_cliente_cliente1_idx` (`cliente_codigo` ASC)  COMMENT '',
  INDEX `fk_livros_has_cliente_livros1_idx` (`livros_codigo` ASC)  COMMENT '',
  CONSTRAINT `fk_livros_has_cliente_livros1`
    FOREIGN KEY (`livros_codigo`)
    REFERENCES `biblioteca`.`livros` (`codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_livros_has_cliente_cliente1`
    FOREIGN KEY (`cliente_codigo`)
    REFERENCES `biblioteca`.`cliente` (`codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `biblioteca`.`empresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca`.`empresa` (
  `codigo` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `missao` VARCHAR(45) NOT NULL COMMENT '',
  `visao` VARCHAR(45) NOT NULL COMMENT '',
  `valores` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`codigo`)  COMMENT '')
ENGINE = InnoDB;

insert into empresa(`missao`,`visao`,`valores`)value('missao','visao','valores');



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
