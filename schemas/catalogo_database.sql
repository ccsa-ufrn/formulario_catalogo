-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`formulario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`formulario` (
  `id` INT NOT NULL,
  `nome` VARCHAR(225) NULL,
  `cargo` VARCHAR(50) NULL,
  `email` VARCHAR(60) NULL,
  `telefone` VARCHAR(15) NULL,
  `objetivo` TEXT(1000) NULL,
  `curriculo_link` VARCHAR(45) NULL,
  `interesses` TEXT(1000) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`objetivo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`objetivo` (
  `formulario_id` INT NOT NULL,
  `valor` VARCHAR(45) NULL,
  INDEX `fk_objetivos_formulario_idx` (`formulario_id` ASC),
  CONSTRAINT `fk_objetivos_formulario`
    FOREIGN KEY (`formulario_id`)
    REFERENCES `mydb`.`formulario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`experiencias_profissionais`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`experiencias_profissionais` (
  `formulario_id` INT NOT NULL,
  `instituicao` VARCHAR(45) NULL,
  `ano` INT(4) NULL,
  `atividades` TEXT(1000) NULL,
  INDEX `fk_experiencias_profissionais_formulario1_idx` (`formulario_id` ASC),
  CONSTRAINT `fk_experiencias_profissionais_formulario1`
    FOREIGN KEY (`formulario_id`)
    REFERENCES `mydb`.`formulario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`formacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`formacao` (
  `formulario_id` INT NOT NULL,
  `inicio` INT(4) NULL,
  `fim` INT(4) NULL,
  `titulo` VARCHAR(45) NULL,
  `curso` VARCHAR(45) NULL,
  INDEX `fk_formacao_formulario1_idx` (`formulario_id` ASC),
  CONSTRAINT `fk_formacao_formulario1`
    FOREIGN KEY (`formulario_id`)
    REFERENCES `mydb`.`formulario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
