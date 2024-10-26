-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema alumno1
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS alumno1 DEFAULT CHARACTER SET utf8mb4;
USE alumno1;

-- -----------------------------------------------------
-- Table alumno1.alumno
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS alumno1.alumno (
  id_alumno INT(11) NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(100) NOT NULL,
  apellido VARCHAR(100) NOT NULL,
  dni VARCHAR(20) NOT NULL,
  numero_legajo VARCHAR(20) NOT NULL,
  email VARCHAR(100) NOT NULL,
  PRIMARY KEY (numero_legajo),
  UNIQUE INDEX id_alumno (id_alumno ASC) -- Solo un índice único aquí
)
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8mb4;

-- -----------------------------------------------------
-- Table alumno1.examen
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS alumno1.examen (
  materia VARCHAR(100) NOT NULL,
  nota INT(11) NOT NULL,
  docente VARCHAR(100) NOT NULL,
  fecha DATE NOT NULL,
  alumno_id VARCHAR(30) NOT NULL,
  alumno_numero_legajo VARCHAR(20) NOT NULL,
  PRIMARY KEY (materia, fecha, alumno_numero_legajo),
  INDEX fk_examen_alumno1_idx (alumno_numero_legajo ASC),
  CONSTRAINT fk_examen_alumno1
    FOREIGN KEY (alumno_numero_legajo)
    REFERENCES alumno1.alumno (numero_legajo)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

-- -----------------------------------------------------
-- Table alumno1.materia
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS alumno1.materia (
  idMateria VARCHAR(50) NOT NULL,
  Nombre VARCHAR(50) NOT NULL,
  Descripcion VARCHAR(45) NULL DEFAULT NULL,
  alumno_id_alumno INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (idMateria),
  INDEX fk_materia_alumno (alumno_id_alumno ASC),
  CONSTRAINT fk_materia_alumno
    FOREIGN KEY (alumno_id_alumno)
    REFERENCES alumno1.alumno (id_alumno)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

-- -----------------------------------------------------
-- Table alumno1.usuario
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS alumno1.usuario (
  id_usuario INT(11) NOT NULL AUTO_INCREMENT,
  usuario_empleado VARCHAR(45) NULL DEFAULT NULL,
  clave_empleado VARCHAR(250) NULL DEFAULT NULL,
  PRIMARY KEY (id_usuario)
)
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = utf8mb4;

-- Restaurar los modos originales de SQL
SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;