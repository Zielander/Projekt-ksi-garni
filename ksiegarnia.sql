-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema ksiegarnia
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `ksiegarnia` ;

-- -----------------------------------------------------
-- Schema ksiegarnia
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ksiegarnia` DEFAULT CHARACTER SET utf8 ;
USE `ksiegarnia` ;

-- -----------------------------------------------------
-- Table `ksiegarnia`.`rola`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ksiegarnia`.`rola` ;

CREATE TABLE IF NOT EXISTS `ksiegarnia`.`rola` (
  `id_roli` INT NOT NULL AUTO_INCREMENT,
  `nazwa_roli` VARCHAR(5) NOT NULL,
  PRIMARY KEY (`id_roli`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ksiegarnia`.`konto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ksiegarnia`.`konto` ;

CREATE TABLE IF NOT EXISTS `ksiegarnia`.`konto` (
  `id_konta` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(15) NOT NULL,
  `haslo` VARCHAR(15) NOT NULL,
  `email` VARCHAR(40) NOT NULL,
  `rola_id_roli` INT NOT NULL,
  PRIMARY KEY (`id_konta`, `rola_id_roli`),
  INDEX `fk_konto_rola_idx` (`rola_id_roli` ASC),
  UNIQUE INDEX `login_UNIQUE` (`login` ASC),
  CONSTRAINT `fk_konto_rola`
    FOREIGN KEY (`rola_id_roli`)
    REFERENCES `ksiegarnia`.`rola` (`id_roli`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ksiegarnia`.`zamowienie`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ksiegarnia`.`zamowienie` ;

CREATE TABLE IF NOT EXISTS `ksiegarnia`.`zamowienie` (
  `id_zamowienia` INT NOT NULL AUTO_INCREMENT,
  `status` VARCHAR(12) NOT NULL,
  `koszt` VARCHAR(45) NOT NULL,
  `konto_id_konta` INT NOT NULL,
  `konto_rola_id_roli` INT NOT NULL,
  PRIMARY KEY (`id_zamowienia`, `konto_id_konta`, `konto_rola_id_roli`),
  INDEX `fk_zamowienie_konto1_idx` (`konto_id_konta` ASC, `konto_rola_id_roli` ASC),
  CONSTRAINT `fk_zamowienie_konto1`
    FOREIGN KEY (`konto_id_konta` , `konto_rola_id_roli`)
    REFERENCES `ksiegarnia`.`konto` (`id_konta` , `rola_id_roli`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ksiegarnia`.`ksiazki`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ksiegarnia`.`ksiazki` ;

CREATE TABLE IF NOT EXISTS `ksiegarnia`.`ksiazki` (
  `id_ksiazki` INT NOT NULL AUTO_INCREMENT,
  `autor` VARCHAR(40) NOT NULL,
  `tytul` VARCHAR(40) NOT NULL,
  `gatunek` VARCHAR(15) NOT NULL,
  `cena` DOUBLE NOT NULL,
  PRIMARY KEY (`id_ksiazki`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ksiegarnia`.`ksiazki_zamowienie`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ksiegarnia`.`ksiazki_zamowienie` ;

CREATE TABLE IF NOT EXISTS `ksiegarnia`.`ksiazki_zamowienie` (
  `id_ksiazki_zamowienie` INT NOT NULL AUTO_INCREMENT,
  `zamowienie_id_zamowienia` INT NOT NULL,
  `nazwa` VARCHAR(45) NOT NULL,
  `grupa` VARCHAR(15) NOT NULL,
  `opis` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`id_ksiazki_zamowienie`, `zamowienie_id_zamowienia`),
  INDEX `fk_ksiazki_zamowienie_zamowienie1_idx` (`zamowienie_id_zamowienia` ASC),
  CONSTRAINT `fk_ksiazki_zamowienie_zamowienie1`
    FOREIGN KEY (`zamowienie_id_zamowienia`)
    REFERENCES `ksiegarnia`.`zamowienie` (`id_zamowienia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Data for table `ksiegarnia`.`rola`
-- -----------------------------------------------------
START TRANSACTION;
USE `ksiegarnia`;
INSERT INTO `ksiegarnia`.`rola` (`id_roli`, `nazwa_roli`) VALUES (1, 'admin');
INSERT INTO `ksiegarnia`.`rola` (`id_roli`, `nazwa_roli`) VALUES (2, 'user');

COMMIT;


-- -----------------------------------------------------
-- Data for table `ksiegarnia`.`konto`
-- -----------------------------------------------------
START TRANSACTION;
USE `ksiegarnia`;
INSERT INTO `ksiegarnia`.`konto` (`id_konta`, `login`, `haslo`, `email`, `rola_id_roli`) VALUES (1, 'admin', 'admin', 'maciej.zielinski96@wp.pl', 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `ksiegarnia`.`ksiazki`
-- -----------------------------------------------------
START TRANSACTION;
USE `ksiegarnia`;
INSERT INTO `ksiegarnia`.`ksiazki` (`id_ksiazki`, `autor`, `tytul`, `gatunek`, `cena`) VALUES (1, 'abc', 'abc', 'abc', '30');
INSERT INTO `ksiegarnia`.`ksiazki` (`id_ksiazki`, `autor`, `tytul`, `gatunek`, `cena`) VALUES (2, 'dfg', 'dfg', 'abc', '40');
INSERT INTO `ksiegarnia`.`ksiazki` (`id_ksiazki`, `autor`, `tytul`, `gatunek`, `cena`) VALUES (3, 'cvb', 'cvb', 'abc', '50);
INSERT INTO `ksiegarnia`.`ksiazki` (`id_ksiazki`, `autor`, `tytul`, `gatunek`, `cena`) VALUES (4, 'qwerty', 'qwerty', 'abc', '60');

COMMIT;

