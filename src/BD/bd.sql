CREATE DATABASE IF NOT EXISTS `inter` DEFAULT CHARACTER SET utf8 ;
USE `inter` ;
SET foreign_key_checks = 0;
-- -----------------------------------------------------
-- Table `inter`.`tb_aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inter`.`tb_aluno` (
  `ra` CHAR(9) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(16) NOT NULL,
  PRIMARY KEY (`ra`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inter`.`tb_professor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inter`.`tb_professor` (
  `codigo` CHAR(9) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(45) NULL,
  `descricao` VARCHAR(100) NULL,
  `imagem` VARCHAR(200) NULL,
  `senha` VARCHAR(16) NOT NULL,
  PRIMARY KEY (`codigo`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inter`.`tb_disciplina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inter`.`tb_disciplina` (
  `codigo` INT NOT NULL,
  `nome_disciplina` VARCHAR(45) NOT NULL,
  `area` VARCHAR(45) NOT NULL,
  `carga_horaria` INT NOT NULL,
  `periodo` CHAR NOT NULL,
  `cod_professor` CHAR(9) NOT NULL,
  PRIMARY KEY (`codigo`),
  INDEX `fk_disciplina_professor_idx` (`cod_professor` ASC),
  CONSTRAINT `fk_disciplina_professor`
    FOREIGN KEY (`cod_professor`)
    REFERENCES `inter`.`tb_professor` (`codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `inter`.`tb_aluno_disciplina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inter`.`tb_aluno_disciplina` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ra_aluno` CHAR(9) NOT NULL,
  `cod_disciplina` INT NOT NULL,
  `isAtivo` TINYINT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_aluno_idx` (`ra_aluno` ASC),
  INDEX `fk_disciplina_idx` (`cod_disciplina` ASC),
  CONSTRAINT `fk_aluno`
    FOREIGN KEY (`ra_aluno`)
    REFERENCES `inter`.`tb_aluno` (`ra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_disciplina_cursada`
    FOREIGN KEY (`cod_disciplina`)
    REFERENCES `inter`.`tb_disciplina` (`codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inter`.`tb_chamadas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inter`.`tb_chamadas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ra_aluno` CHAR(9) NOT NULL,
  `cod_disciplina` INT NOT NULL,
  `isPresente` TINYINT NOT NULL,
  `horario` DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  INDEX `fk_aluno_idx` (`ra_aluno` ASC),
  INDEX `fk_disciplina_idx` (`cod_disciplina` ASC),
  CONSTRAINT `fk_chamada_aluno`
    FOREIGN KEY (`ra_aluno`)
    REFERENCES `inter`.`tb_aluno` (`ra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_chamada_disciplina_`
    FOREIGN KEY (`cod_disciplina`)
    REFERENCES `inter`.`tb_disciplina` (`codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `inter` ;
