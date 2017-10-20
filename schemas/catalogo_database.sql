-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema catalogo_form
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema catalogo_form
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `catalogo_form` DEFAULT CHARACTER SET utf8 ;
USE `catalogo_form` ;

-- -----------------------------------------------------
-- Table `catalogo_form`.`formulario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `catalogo_form`.`formulario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(225) NULL,
  `cargo` VARCHAR(50) NULL,
  `email` VARCHAR(60) NULL,
  `telefone` VARCHAR(15) NULL,
  `curriculo_link` VARCHAR(45) NULL,
  `interesses` TEXT(1000) NULL,
  `especialidades` TEXT(1000) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `catalogo_form`.`objetivo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `catalogo_form`.`objetivo` (
  `formulario_id` INT NOT NULL,
  `valor` VARCHAR(45) NULL,
  INDEX `fk_objetivos_formulario_idx` (`formulario_id` ASC),
  CONSTRAINT `fk_objetivos_formulario`
    FOREIGN KEY (`formulario_id`)
    REFERENCES `catalogo_form`.`formulario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `catalogo_form`.`experiencias_profissionais`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `catalogo_form`.`experiencias_profissionais` (
  `formulario_id` INT NOT NULL,
  `instituicao` VARCHAR(45) NULL,
  `ano` VARCHAR(10) NULL,
  `atividades` TEXT(1000) NULL,
  INDEX `fk_experiencias_profissionais_formulario1_idx` (`formulario_id` ASC),
  CONSTRAINT `fk_experiencias_profissionais_formulario1`
    FOREIGN KEY (`formulario_id`)
    REFERENCES `catalogo_form`.`formulario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `catalogo_form`.`formacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `catalogo_form`.`formacao` (
  `formulario_id` INT NOT NULL,
  `inicio` INT(4) NULL,
  `fim` INT(4) NULL,
  `titulo` VARCHAR(45) NULL,
  `curso` VARCHAR(45) NULL,
  INDEX `fk_formacao_formulario1_idx` (`formulario_id` ASC),
  CONSTRAINT `fk_formacao_formulario1`
    FOREIGN KEY (`formulario_id`)
    REFERENCES `catalogo_form`.`formulario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
