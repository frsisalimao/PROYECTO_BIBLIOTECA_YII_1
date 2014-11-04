SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `boleteria_cariamanga`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boleteria_cariamanga`.`usuario` (
  `idusuario` INT NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `cedula` VARCHAR(45) NULL,
  `nombre` VARCHAR(45) NULL,
  `telefono` VARCHAR(45) NULL,
  `direccion` VARCHAR(45) NULL,
  `password` VARCHAR(150) NULL,
  `estado` VARCHAR(45) NULL,
  PRIMARY KEY (`idusuario`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `boleteria_cariamanga`.`cajero`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boleteria_cariamanga`.`cajero` (
  `idcajero` INT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `contraseña` VARCHAR(45) NULL,
  `estado` VARCHAR(45) NULL,
  PRIMARY KEY (`idcajero`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `boleteria_cariamanga`.`catalogo_ruta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boleteria_cariamanga`.`catalogo_ruta` (
  `idcatalogo_ruta` INT NOT NULL,
  `ciudad_origen` VARCHAR(45) NULL,
  `catalogo_rutacol` VARCHAR(45) NULL,
  `costo` VARCHAR(45) NULL,
  PRIMARY KEY (`idcatalogo_ruta`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `boleteria_cariamanga`.`horario_viaje`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boleteria_cariamanga`.`horario_viaje` (
  `idhorario_viaje` INT NOT NULL,
  `hora_salida` VARCHAR(45) NULL,
  `hora_llegada` VARCHAR(45) NULL,
  `idcatalogo_ruta` INT NOT NULL,
  PRIMARY KEY (`idhorario_viaje`),
  INDEX `fk_horario_viaje_catalogo_ruta_idx` (`idcatalogo_ruta` ASC),
  CONSTRAINT `fk_horario_viaje_catalogo_ruta`
    FOREIGN KEY (`idcatalogo_ruta`)
    REFERENCES `boleteria_cariamanga`.`catalogo_ruta` (`idcatalogo_ruta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `boleteria_cariamanga`.`unidad_transporte`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boleteria_cariamanga`.`unidad_transporte` (
  `idunidad_transaporte` INT NOT NULL,
  `placa` VARCHAR(45) NULL,
  `numero_unidad` VARCHAR(45) NULL,
  `capacidad` VARCHAR(45) NULL,
  `estado` VARCHAR(45) NULL,
  `idhorario_viaje` INT NOT NULL,
  PRIMARY KEY (`idunidad_transaporte`),
  INDEX `fk_unidad_transaporte_horario_viaje1_idx` (`idhorario_viaje` ASC),
  CONSTRAINT `fk_unidad_transaporte_horario_viaje1`
    FOREIGN KEY (`idhorario_viaje`)
    REFERENCES `boleteria_cariamanga`.`horario_viaje` (`idhorario_viaje`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `boleteria_cariamanga`.`venta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boleteria_cariamanga`.`venta` (
  `idventa` INT NOT NULL,
  `fecha` VARCHAR(45) NULL,
  `hora` VARCHAR(45) NULL,
  `total` VARCHAR(45) NULL,
  `idcajero` INT NOT NULL,
  PRIMARY KEY (`idventa`),
  INDEX `fk_venta_cajero1_idx` (`idcajero` ASC),
  CONSTRAINT `fk_venta_cajero1`
    FOREIGN KEY (`idcajero`)
    REFERENCES `boleteria_cariamanga`.`cajero` (`idcajero`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `boleteria_cariamanga`.`reserva_oficina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boleteria_cariamanga`.`reserva_oficina` (
  `idreserva_oficina` INT NOT NULL,
  `fecha` VARCHAR(45) NULL,
  `hora` VARCHAR(45) NULL,
  `total` VARCHAR(45) NULL,
  `idcajero` INT NOT NULL,
  PRIMARY KEY (`idreserva_oficina`),
  INDEX `fk_reserva_oficina_cajero1_idx` (`idcajero` ASC),
  CONSTRAINT `fk_reserva_oficina_cajero1`
    FOREIGN KEY (`idcajero`)
    REFERENCES `boleteria_cariamanga`.`cajero` (`idcajero`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `boleteria_cariamanga`.`compra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boleteria_cariamanga`.`compra` (
  `idcompra` INT NOT NULL,
  `fecha` VARCHAR(45) NULL,
  `hora` VARCHAR(45) NULL,
  `total` VARCHAR(45) NULL,
  `estado` VARCHAR(45) NULL,
  `usuario_idusuario` INT NOT NULL,
  PRIMARY KEY (`idcompra`),
  INDEX `fk_compra_usuario1_idx` (`usuario_idusuario` ASC),
  CONSTRAINT `fk_compra_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `boleteria_cariamanga`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `boleteria_cariamanga`.`reserva`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boleteria_cariamanga`.`reserva` (
  `idreserva` INT NOT NULL,
  `fecha` VARCHAR(45) NULL,
  `hora` VARCHAR(45) NULL,
  `total` VARCHAR(45) NULL,
  `estado` VARCHAR(45) NULL,
  `usuario_idusuario` INT NOT NULL,
  PRIMARY KEY (`idreserva`),
  INDEX `fk_reserva_usuario1_idx` (`usuario_idusuario` ASC),
  CONSTRAINT `fk_reserva_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `boleteria_cariamanga`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `boleteria_cariamanga`.`boleto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boleteria_cariamanga`.`boleto` (
  `idboleto` INT NOT NULL,
  `numero_boleto` VARCHAR(45) NULL,
  `tipo` VARCHAR(45) NULL,
  `estado` VARCHAR(45) NULL,
  `idunidad_transaporte` INT NOT NULL,
  `idventa` INT NULL,
  `idreserva_oficina` INT NULL,
  `compra_idcompra` INT NULL,
  `reserva_idreserva` INT NULL,
  PRIMARY KEY (`idboleto`),
  INDEX `fk_boleto_unidad_transaporte1_idx` (`idunidad_transaporte` ASC),
  INDEX `fk_boleto_venta1_idx` (`idventa` ASC),
  INDEX `fk_boleto_reserva_oficina1_idx` (`idreserva_oficina` ASC),
  INDEX `fk_boleto_compra1_idx` (`compra_idcompra` ASC),
  INDEX `fk_boleto_reserva1_idx` (`reserva_idreserva` ASC),
  CONSTRAINT `fk_boleto_unidad_transaporte1`
    FOREIGN KEY (`idunidad_transaporte`)
    REFERENCES `boleteria_cariamanga`.`unidad_transporte` (`idunidad_transaporte`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_boleto_venta1`
    FOREIGN KEY (`idventa`)
    REFERENCES `boleteria_cariamanga`.`venta` (`idventa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_boleto_reserva_oficina1`
    FOREIGN KEY (`idreserva_oficina`)
    REFERENCES `boleteria_cariamanga`.`reserva_oficina` (`idreserva_oficina`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_boleto_compra1`
    FOREIGN KEY (`compra_idcompra`)
    REFERENCES `boleteria_cariamanga`.`compra` (`idcompra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_boleto_reserva1`
    FOREIGN KEY (`reserva_idreserva`)
    REFERENCES `boleteria_cariamanga`.`reserva` (`idreserva`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
