/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.0.51b-community-nt-log : Database - itdecsa1
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`itdecsa1` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `itdecsa1`;

/*Table structure for table `tcategoria` */

DROP TABLE IF EXISTS `tcategoria`;

CREATE TABLE `tcategoria` (
  `Id` varchar(6) NOT NULL,
  `NomCategoria` varchar(50) default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tcategoria` */

LOCK TABLES `tcategoria` WRITE;

UNLOCK TABLES;

/*Table structure for table `tciudad` */

DROP TABLE IF EXISTS `tciudad`;

CREATE TABLE `tciudad` (
  `IdCiudad` varchar(6) NOT NULL,
  `NomCiudad` varchar(50) NOT NULL,
  `IdPais` varchar(6) NOT NULL,
  PRIMARY KEY  (`IdCiudad`),
  KEY `IdPais` (`IdPais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tciudad` */

LOCK TABLES `tciudad` WRITE;

UNLOCK TABLES;

/*Table structure for table `tcliente` */

DROP TABLE IF EXISTS `tcliente`;

CREATE TABLE `tcliente` (
  `IdCliente` varchar(6) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `IdCiudad` varchar(6) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Clave` varchar(32) NOT NULL,
  PRIMARY KEY  (`IdCliente`),
  UNIQUE KEY `Email` (`Email`),
  KEY `IdCiudad` (`IdCiudad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tcliente` */

LOCK TABLES `tcliente` WRITE;

UNLOCK TABLES;

/*Table structure for table `tdetalle` */

DROP TABLE IF EXISTS `tdetalle`;

CREATE TABLE `tdetalle` (
  `Id_Venta` varchar(6) NOT NULL,
  `Id_Producto` varchar(6) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `PU` decimal(8,2) NOT NULL,
  PRIMARY KEY  (`Id_Venta`,`Id_Producto`),
  KEY `Id_Producto` (`Id_Producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tdetalle` */

LOCK TABLES `tdetalle` WRITE;

UNLOCK TABLES;

/*Table structure for table `tpais` */

DROP TABLE IF EXISTS `tpais`;

CREATE TABLE `tpais` (
  `IdPais` varchar(6) NOT NULL,
  `NomPais` varchar(50) NOT NULL,
  PRIMARY KEY  (`IdPais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tpais` */

LOCK TABLES `tpais` WRITE;

UNLOCK TABLES;

/*Table structure for table `tproducto` */

DROP TABLE IF EXISTS `tproducto`;

CREATE TABLE `tproducto` (
  `IdProdc` varchar(6) NOT NULL,
  `NomProduc` varchar(50) default NULL,
  `Descripcion` text,
  `precio` decimal(8,2) default NULL,
  `stock` int(11) NOT NULL,
  `idCategoria` varchar(6) NOT NULL,
  `imagen` varchar(50) default NULL,
  `accesorios` text,
  `eliminar` int(11) default NULL,
  `descuento` decimal(8,2) default NULL,
  PRIMARY KEY  (`IdProdc`),
  KEY `idCategoria` (`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tproducto` */

LOCK TABLES `tproducto` WRITE;

UNLOCK TABLES;

/*Table structure for table `tsoftware` */

DROP TABLE IF EXISTS `tsoftware`;

CREATE TABLE `tsoftware` (
  `id` int(8) NOT NULL,
  `titulosoft` varchar(200) default NULL,
  `descripcion` text,
  `imagen` blob,
  `Especificaciones` text,
  `archivo` varchar(100) NOT NULL,
  `eliminar` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `id_archivo` (`archivo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tsoftware` */

LOCK TABLES `tsoftware` WRITE;

UNLOCK TABLES;

/*Table structure for table `tusuario` */

DROP TABLE IF EXISTS `tusuario`;

CREATE TABLE `tusuario` (
  `IdUsuario` varchar(6) NOT NULL,
  `Usuario` varchar(20) NOT NULL,
  `Contraseña` varchar(32) NOT NULL,
  `Activo` bit(1) NOT NULL default '',
  PRIMARY KEY  (`IdUsuario`),
  UNIQUE KEY `Usuario` (`Usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tusuario` */

LOCK TABLES `tusuario` WRITE;

UNLOCK TABLES;

/*Table structure for table `tventa` */

DROP TABLE IF EXISTS `tventa`;

CREATE TABLE `tventa` (
  `IdVenta` varchar(6) NOT NULL,
  `FechaCompra` date NOT NULL,
  `Id_Cliente` varchar(6) NOT NULL,
  `Anulado` bit(1) NOT NULL default '\0',
  PRIMARY KEY  (`IdVenta`),
  KEY `Id_Cliente` (`Id_Cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tventa` */

LOCK TABLES `tventa` WRITE;

UNLOCK TABLES;

/*Table structure for table `tvideosoftware` */

DROP TABLE IF EXISTS `tvideosoftware`;

CREATE TABLE `tvideosoftware` (
  `ids` int(8) default NULL,
  `idv` int(8) default NULL,
  KEY `ids` (`ids`),
  KEY `idv` (`idv`),
  CONSTRAINT `tvideosoftware_ibfk_2` FOREIGN KEY (`idv`) REFERENCES `video` (`id`),
  CONSTRAINT `tvideosoftware_ibfk_1` FOREIGN KEY (`ids`) REFERENCES `tsoftware` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tvideosoftware` */

LOCK TABLES `tvideosoftware` WRITE;

UNLOCK TABLES;

/*Table structure for table `video` */

DROP TABLE IF EXISTS `video`;

CREATE TABLE `video` (
  `id` int(8) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `linkvideo` text NOT NULL,
  `eliminar` int(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `video` */

LOCK TABLES `video` WRITE;

insert  into `video`(`id`,`nombre`,`linkvideo`,`eliminar`) values (1,'Turismo Vivencial en CUSCO','-euutYB29Lk',0),(2,'Turismo en CUSCO','skuQBlw2y-Y',0),(3,'Origen del CUSCO Ombligo del Mundo','xhPzlMrBTII',0);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
