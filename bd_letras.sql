SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `letras_juridicas` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `letras_juridicas` ;

-- -----------------------------------------------------
-- Table `letras_juridicas`.`Revista`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `letras_juridicas`.`Revista` (
  `id_revista` INT NOT NULL,
  `numero_revista` VARCHAR(20) NULL,
  PRIMARY KEY (`id_revista`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `letras_juridicas`.`Articulo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `letras_juridicas`.`Articulo` (
  `id_articulo` INT NOT NULL,
  `nombre_articulo` VARCHAR(100) NULL,
  `resumen_articulo` TEXT NULL,
  `Revista_id_revista` INT NOT NULL,
  PRIMARY KEY (`id_articulo`),
  INDEX `fk_Articulo_Revista1_idx` (`Revista_id_revista` ASC),
  CONSTRAINT `fk_Articulo_Revista1`
    FOREIGN KEY (`Revista_id_revista`)
    REFERENCES `letras_juridicas`.`Revista` (`id_revista`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `letras_juridicas`.`Reseña`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `letras_juridicas`.`Reseña` (
  `id_reseña` INT NOT NULL,
  `nombre_reseña` VARCHAR(100) NULL,
  `nombre_autor` VARCHAR(40) NULL,
  `apPaterno_autor` VARCHAR(20) NULL,
  `apMaterno_autor` VARCHAR(20) NULL,
  `Revista_id_revista` INT NOT NULL,
  PRIMARY KEY (`id_reseña`),
  INDEX `fk_Reseña_Revista1_idx` (`Revista_id_revista` ASC),
  CONSTRAINT `fk_Reseña_Revista1`
    FOREIGN KEY (`Revista_id_revista`)
    REFERENCES `letras_juridicas`.`Revista` (`id_revista`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `letras_juridicas`.`Comentario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `letras_juridicas`.`Comentario` (
  `id_comentario` INT NOT NULL,
  `nombre_comentario` VARCHAR(100) NULL,
  `nombre_autor` VARCHAR(40) NULL,
  `apPaterno_autor` VARCHAR(20) NULL,
  `apMaterno_autor` VARCHAR(20) NULL,
  `Revista_id_revista` INT NOT NULL,
  PRIMARY KEY (`id_comentario`),
  INDEX `fk_Comentario_Revista1_idx` (`Revista_id_revista` ASC),
  CONSTRAINT `fk_Comentario_Revista1`
    FOREIGN KEY (`Revista_id_revista`)
    REFERENCES `letras_juridicas`.`Revista` (`id_revista`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `letras_juridicas`.`Noticia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `letras_juridicas`.`Noticia` (
  `id_noticia` INT NOT NULL,
  `nombre_noticia` VARCHAR(100) NULL,
  `fecha_publcacion` DATE NULL,
  `Revista_id_revista` INT NOT NULL,
  PRIMARY KEY (`id_noticia`),
  INDEX `fk_Noticia_Revista1_idx` (`Revista_id_revista` ASC),
  CONSTRAINT `fk_Noticia_Revista1`
    FOREIGN KEY (`Revista_id_revista`)
    REFERENCES `letras_juridicas`.`Revista` (`id_revista`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `letras_juridicas`.`Libro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `letras_juridicas`.`Libro` (
  `id_libro` INT NOT NULL,
  `titulo_libro` VARCHAR(100) NULL,
  `fecha_publicacion` DATE NULL,
  PRIMARY KEY (`id_libro`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `letras_juridicas`.`groups`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `letras_juridicas`.`groups` (
  `id` MEDIUMINT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(20) NOT NULL,
  `descripcion` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;

INSERT INTO `groups` (`id`, `nombre`, `descripcion`) VALUES
     (1,'admin','Administrator'),
     (2,'members','General User');


-- -----------------------------------------------------
-- Table `letras_juridicas`.`login_attempts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `letras_juridicas`.`login_attempts` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` VARCHAR(15) NOT NULL,
  `login` VARCHAR(100) NOT NULL,
  `time` INT(11) UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `letras_juridicas`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `letras_juridicas`.`users` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` VARCHAR(15) NOT NULL,
  `username` VARCHAR(30) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `salt` VARCHAR(255) NULL,
  `email` VARCHAR(50) NOT NULL,
  `activation_code` VARCHAR(40) NULL DEFAULT NULL,
  `forgotten_password_code` VARCHAR(40) NULL,
  `forgotten_password_time` INT(11) UNSIGNED NULL DEFAULT NULL,
  `remember_code` VARCHAR(40) NULL DEFAULT NULL,
  `created_on` INT(11) UNSIGNED NOT NULL,
  `last_login` INT(11) NULL DEFAULT NULL,
  `active` TINYINT(1) UNSIGNED NULL DEFAULT NULL,
  `first_name` VARCHAR(50) NULL DEFAULT NULL,
  `last_name` VARCHAR(50) NULL DEFAULT NULL,
  `company` VARCHAR(40) NULL DEFAULT NULL,
  `phone` VARCHAR(20) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
     ('1','127.0.0.1','administrator','$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36','','admin@admin.com','',NULL,'1268889823','1268889823','1', 'Admin','istrator','ADMIN','0');


-- -----------------------------------------------------
-- Table `letras_juridicas`.`users_groups`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `letras_juridicas`.`users_groups` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) UNSIGNED NOT NULL,
  `group_id` MEDIUMINT(8) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `uc_users_groups` (`user_id` ASC, `group_id` ASC),
  INDEX `fk_users_groups_users1_idx` (`user_id` ASC),
  INDEX `fk_users_groups_groups1_idx` (`group_id` ASC),
  CONSTRAINT `fk_users_groups_groups1`
    FOREIGN KEY (`group_id`)
    REFERENCES `letras_juridicas`.`groups` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `letras_juridicas`.`users` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
     (1,1,1),
     (2,1,2);


-- -----------------------------------------------------
-- Table `letras_juridicas`.`users_has_Revista`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `letras_juridicas`.`users_has_Revista` (
  `id` INT(11) NOT NULL,
  `users_id` INT(11) UNSIGNED NOT NULL,
  `Revista_id_revista` INT(11) NOT NULL,
  INDEX `fk_users_has_Revista_Revista1_idx` (`Revista_id_revista` ASC),
  INDEX `fk_users_has_Revista_users1_idx` (`users_id` ASC),
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_users_has_Revista_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `letras_juridicas`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_Revista_Revista1`
    FOREIGN KEY (`Revista_id_revista`)
    REFERENCES ``.`Revista` (`id_revista`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `letras_juridicas`.`users_has_Libro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `letras_juridicas`.`users_has_Libro` (
  `users_id` INT(11) UNSIGNED NOT NULL,
  `Libro_id_libro` INT NOT NULL,
  INDEX `fk_users_has_Libro_Libro1_idx` (`Libro_id_libro` ASC),
  INDEX `fk_users_has_Libro_users1_idx` (`users_id` ASC),
  CONSTRAINT `fk_users_has_Libro_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `letras_juridicas`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_Libro_Libro1`
    FOREIGN KEY (`Libro_id_libro`)
    REFERENCES `letras_juridicas`.`Libro` (`id_libro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
