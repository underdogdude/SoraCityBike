-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema sora_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sora_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sora_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `sora_db` ;

-- -----------------------------------------------------
-- Table `sora_db`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sora_db`.`user` (
  `user_id` BIGINT(120) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(16) NOT NULL,
  `password` VARCHAR(32) NOT NULL,
  `role` VARCHAR(45) NULL,
  `email` VARCHAR(255) NULL,
  `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`));


-- -----------------------------------------------------
-- Table `sora_db`.`content`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sora_db`.`content` (
  `id` BIGINT(120) NOT NULL AUTO_INCREMENT,
  `user_id` BIGINT(120) NULL,
  `cont_lang_id` BIGINT(120) NULL,
  `cont_name` VARCHAR(120) NULL,
  `cont_author` VARCHAR(120) NULL,
  `cont_slug` VARCHAR(200) NOT NULL,
  `cont_status` VARCHAR(20) NOT NULL,
  `cont_modified` DATETIME NULL,
  `menu_order` INT(11) NULL,
  `cont_type` VARCHAR(20) NULL,
  `cont_mine_type` VARCHAR(100) NULL,
  `cont_order` INT(11) NULL,
  `create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  INDEX `user_id_fk_idx` (`user_id` ASC),
  CONSTRAINT `user_id_fk`
    FOREIGN KEY (`user_id`)
    REFERENCES `sora_db`.`user` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sora_db`.`language`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sora_db`.`language` (
  `lang_id` BIGINT(120) NOT NULL AUTO_INCREMENT,
  `lang_code` VARCHAR(8) NOT NULL,
  `lang_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`lang_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sora_db`.`content_translation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sora_db`.`content_translation` (
  `trans_id` BIGINT(120) NOT NULL AUTO_INCREMENT,
  `cont_id` BIGINT(120) NULL,
  `lang_id` BIGINT(120) NULL,
  `cont_title` TEXT NOT NULL,
  `cont_content` LONGTEXT NOT NULL,
  PRIMARY KEY (`trans_id`),
  INDEX `cont_id_idx` (`cont_id` ASC),
  INDEX `lang_code_idx` (`lang_id` ASC),
  CONSTRAINT `content_id_fk`
    FOREIGN KEY (`cont_id`)
    REFERENCES `sora_db`.`content` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `lang_code_fk`
    FOREIGN KEY (`lang_id`)
    REFERENCES `sora_db`.`language` (`lang_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sora_db`.`content_meta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sora_db`.`content_meta` (
  `meta_id` BIGINT(120) NOT NULL AUTO_INCREMENT,
  `cont_id` BIGINT(120) NULL,
  `meta_key` VARCHAR(255) NOT NULL,
  `meta_value` LONGTEXT NULL,
  PRIMARY KEY (`meta_id`),
  INDEX `cont_id_fk_idx` (`cont_id` ASC),
  CONSTRAINT `cont_id_fk`
    FOREIGN KEY (`cont_id`)
    REFERENCES `sora_db`.`content` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sora_db`.`category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sora_db`.`category` (
  `cat_id` BIGINT(120) NOT NULL AUTO_INCREMENT,
  `cat_name` VARCHAR(255) NOT NULL,
  `cat_slug` VARCHAR(200) NULL,
  `cat_type` VARCHAR(45) NOT NULL,
  `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cat_id`));


-- -----------------------------------------------------
-- Table `sora_db`.`category_relationships`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sora_db`.`category_relationships` (
  `category_relationship_id` BIGINT(120) NOT NULL AUTO_INCREMENT,
  `cont_id` BIGINT(120) NOT NULL,
  `cat_id` BIGINT(120) NOT NULL,
  PRIMARY KEY (`category_relationship_id`),
  INDEX `cat_id_idx` (`cat_id` ASC),
  CONSTRAINT `cont_id`
    FOREIGN KEY (`cont_id`)
    REFERENCES `sora_db`.`content` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `cat_id`
    FOREIGN KEY (`cat_id`)
    REFERENCES `sora_db`.`category` (`cat_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sora_db`.`slide`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sora_db`.`slide` (
  `slide_id` BIGINT(120) NOT NULL AUTO_INCREMENT,
  `img_url` VARCHAR(255) NULL,
  `content` TEXT NULL,
  `content_url` VARCHAR(255) NULL,
  `type` VARCHAR(45) NOT NULL,
  `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`slide_id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;