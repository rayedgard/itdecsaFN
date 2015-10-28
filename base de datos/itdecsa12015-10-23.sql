/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.26-log : Database - itdecsa1
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

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(8) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `user` varchar(100) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL,
  `tipo` int(1) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `admin` */

LOCK TABLES `admin` WRITE;

insert  into `admin`(`id`,`nombre`,`apellidos`,`correo`,`user`,`pass`,`tipo`,`telefono`,`estado`) values (1,'Edgard','Rayme Quispe','rayedgard@gmail.com','edgard','1234',0,'993026679',0);

UNLOCK TABLES;

/*Table structure for table `tcategoria` */

DROP TABLE IF EXISTS `tcategoria`;

CREATE TABLE `tcategoria` (
  `Id` varchar(6) NOT NULL,
  `NomCategoria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
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
  PRIMARY KEY (`IdCiudad`),
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
  PRIMARY KEY (`IdCliente`),
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
  PRIMARY KEY (`Id_Venta`,`Id_Producto`),
  KEY `Id_Producto` (`Id_Producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tdetalle` */

LOCK TABLES `tdetalle` WRITE;

UNLOCK TABLES;

/*Table structure for table `tnoticias` */

DROP TABLE IF EXISTS `tnoticias`;

CREATE TABLE `tnoticias` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `descripcion` text,
  `fecha` date DEFAULT NULL,
  `link` text,
  `estado` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `tnoticias` */

LOCK TABLES `tnoticias` WRITE;

insert  into `tnoticias`(`id`,`nombre`,`imagen`,`descripcion`,`fecha`,`link`,`estado`) values (1,'Expertos en seguridad informÃ¡tica alertan del incremento de ataques a dispositivos mÃ³viles','ecommerce--644x362.jpg','<p style=\"text-align: justify;\">Preocupados por los virus inform&aacute;tico. Por la seguridad de sus aparatos electr&oacute;nicos. Y, sin duda, por su dinero. El incremento de los servicios bancarios en internet ha abierto la puerta a los ciberdelincuentes, esmerados en detectar cualquier fuga por donde acceder. La importancia de los datos que manejan les ha obligado a ponerse firme sobre las posibles amenazas.</p>\r\n<p style=\"text-align: justify;\">Los expertos en seguridad inform&aacute;tica han detectado un incremento exponencial en los &uacute;ltimos meses de los llamados &laquo;<span style=\"color: #ff6600;\">troyanos bancarios</span>&raquo;, capaces de espiar y manipular los datos transferidos por los usuairos, por lo que el robo de credenciales puede desembocar en una sustracci&oacute;n de tintes econ&oacute;micos.</p>\r\n<p style=\"text-align: justify;\">Esta situaci&oacute;n, de hecho, se mantendr&aacute; a lo largo de los pr&oacute;ximos meses, seg&uacute;n se desprende del &uacute;ltimo informe sobre &laquo;malware&raquo; de la firma de seguridad G DATA del primer semestre, que ha desvelado las 20 entidades que m&aacute;s veces se repiten en los c&oacute;digos maliciosos de esos m&aacute;s de 6.000 &laquo;malwares&raquo; financieros.</p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: medium;\">De habla inglesa</span><br />As&iacute;, el banco estadounidense Wells Fargo encabeza la lista al dirigirse el 35% de los troyanos analizados. La mayor&iacute;a de bancos afectados pertenecen a EE.UU. y Reino Unido, aunque tambi&eacute;n se encuentra el proveedor de servicios de pago PayPal (27%), el portal de compra venta en internet eBay (20%) y dos de los grandes bancos espa&ntilde;oles, BBVA (21%) y Santander (20%).</p>\r\n<p style=\"text-align: justify;\">Estos &laquo;troyanos bancarios&raquo; se han convertido en la peor amenaza de los dispositivos m&oacute;viles, convertidos ahora en la principal puerta de acceso a internet y que, cada vez m&aacute;s, se utilizan como m&eacute;todos de pago y consulta de movimientos financeros. Pese a la situaci&oacute;n, la mayor&iacute;a de los propietarios de m&oacute;viles sigue percibiendo estos dispositivos como un simple tel&eacute;fono y, por tanto, lo compara con cualquier otro peque&ntilde;o aparato electr&oacute;nico. &laquo;Esto es un grave error ya que los smartphones actuales son mucho m&aacute;s potentes que los ordenadores de hace una d&eacute;cada y, adem&aacute;s, contienen informaci&oacute;n muy valiosa. Probablemente, sea incluso m&aacute;s importante que la que se guarda en el PC&raquo;, seg&uacute;n destacan fuentes de la firma de seguridad Kaspersky Lab.</p>\r\n<p style=\"text-align: justify;\"><span style=\"color: #ff6600; font-size: medium;\">&laquo;Existen un gran n&uacute;mero de t&eacute;cnicas de ingenier&iacute;a social que atraen al usuario&raquo;</span><br />El problema de esta situaci&oacute;n es que en esas aplicaciones se pueden almacenar e introducir datos confidenciales de gran importancia. Solo por poner un ejemplo, la mayor&iacute;a de los bancos utilizan los n&uacute;meros de tel&eacute;fono para autorizar ciertas acciones (env&iacute;an contrase&ntilde;as de un solo uso mediante mensajes de texto), por lo que es posible que los cibercriminales usen estos canales de comunicaci&oacute;n y realicen pagos y transferencias desde las cuentas bancarias de su v&iacute;ctima. &laquo;Actualmente, existen un gran n&uacute;mero de t&eacute;cnicas de ingenier&iacute;a social que atraen al usuario para que instale el troyano&raquo;, relatan los expertos.<br />En ese caso, el informe de Kaspersky desvela que la mayor&iacute;a de los troyanos bancarios (m&aacute;s del 50%) tienen como objetivo Rusia y los pa&iacute;ses de la Comunidad de Estados Independientes, adem&aacute;s de la India y Vietnam. Sin embargo, &laquo;&uacute;ltimamente est&aacute; emergiendo una nueva generaci&oacute;n de malware m&oacute;vil universal&raquo; capaz de descargar perfiles actualizados de diferentes bancos extranjeros desde EE.UU., Alemania y Reino Unido.</p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: medium; color: #ff6600;\">M&eacute;todos principales de los &laquo;troyanos bancarios&raquo;</span><br /><span style=\"color: #ff6600;\">Esconder los mensajes de texto</span>: el &laquo;malware&raquo; en dispositivos m&oacute;viles esconde los SMS entrantes de los bancos y los env&iacute;a a los cibercriminales con el fin de transferir dinero a sus cuentas bancarias.<br /><span style=\"color: #ff6600;\">Peque&ntilde;os movimientos bancarios</span>: a menudo los hackers transfieren de manera ocasional peque&ntilde;as sumas de dinero a cuentas bancarias fraudulentas desde la cuenta de un usuario infectado.<br /><span style=\"color: #ff6600;\">Efecto espejo en las &laquo;apps&raquo;</span>: el &laquo;malware&raquo; imita las aplicaciones m&oacute;viles de los bancos con el fin de obtener las credenciales del usuario y acceder con sus datos a la aplicaci&oacute;n real para llevar a cabo las dos acciones anteriores.</p>','2015-10-21','http://www.abc.es/tecnologia/redes/20151021/abci-troyano-bancario-amenazas-201510211223.html#',0),(2,'Algoritmos para reemplazar la intuiciÃ³n humana','img_31356.jpg','<p>La intuici&oacute;n ha sido a menudo referida como una habilidad netamente propia de seres vivos inteligentes y fuera del alcance de las m&aacute;quinas. Ahora, parece que la situaci&oacute;n ya no estar&aacute; tan clara.</p>\r\n<p>El an&aacute;lisis de cantidades masivas de datos se basa en la b&uacute;squeda de patrones sutiles que tienen alg&uacute;n tipo de poder predictivo. Pero elegir qu&eacute; &ldquo;propiedades&rdquo; de los datos analizar precisa normalmente de cierta intuici&oacute;n humana.<br /> <img style=\"float: right;\" src=\"https://laklave.files.wordpress.com/2015/03/17064-b051bb4f_680_400.jpg?w=700&amp;h=412\" alt=\"17064-b051bb4f_680_400\" width=\"393\" height=\"231\" /><br />El equipo de Max Kanter, del Instituto Tecnol&oacute;gico de Massachusetts (MIT), en Cambridge, Estados Unidos, tiene como objetivo sacar al elemento humano del an&aacute;lisis de grandes cantidades de datos, con un nuevo sistema que no solo busca patrones sino que tambi&eacute;n escoge qu&eacute; &ldquo;propiedades&rdquo; de los datos son las m&aacute;s prometedoras para analizar. Para probar el primer prototipo de su sistema, &eacute;l y sus colegas lo inscribieron en tres competiciones cient&iacute;ficas de an&aacute;lisis de datos, en las que compiti&oacute; contra equipos humanos para encontrar patrones predictivos en conjuntos de datos sin conocimiento previo sobre los mismos. De los 906 equipos que participaron en las tres competiciones, la &ldquo;Data Science Machine&rdquo; (M&aacute;quina Cient&iacute;fica de Datos) de los investigadores acab&oacute; por encima del puesto 615. Dicho de otro modo, el sistema que reemplaza a la intuici&oacute;n humana con algoritmos fue m&aacute;s eficaz que 615 de los 906 equipos humanos.</p>\r\n<p>En dos de las tres competiciones, las predicciones realizadas por la Data Science Machine fueron tan fiables, en un 94 y un 96 por ciento, como las de las propuestas ganadoras. En el tercero, la cifra fue m&aacute;s modesta, un 87 por ciento. Pero mientras que los equipos de humanos trabajaron normalmente sobre sus algoritmos de predicci&oacute;n durante meses, la Data Science Machine necesit&oacute; solo entre 2 y 12 horas para producir cada uno de sus registros.</p>','2015-10-23','http://noticiasdelaciencia.com/not/16571/algoritmos-para-reemplazar-la-intuicion-humana/',0);

UNLOCK TABLES;

/*Table structure for table `tpais` */

DROP TABLE IF EXISTS `tpais`;

CREATE TABLE `tpais` (
  `IdPais` varchar(6) NOT NULL,
  `NomPais` varchar(50) NOT NULL,
  PRIMARY KEY (`IdPais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tpais` */

LOCK TABLES `tpais` WRITE;

UNLOCK TABLES;

/*Table structure for table `tperfil` */

DROP TABLE IF EXISTS `tperfil`;

CREATE TABLE `tperfil` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `cargo` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `face` text,
  `google` text,
  `lin` text,
  `imagen` varchar(100) DEFAULT NULL,
  `descripcion` text,
  `file` varchar(200) DEFAULT NULL,
  `estado` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `tperfil` */

LOCK TABLES `tperfil` WRITE;

insert  into `tperfil`(`id`,`nombre`,`cargo`,`correo`,`face`,`google`,`lin`,`imagen`,`descripcion`,`file`,`estado`) values (1,'Edgard Rayme Quispe','Gerente General','rayedgard@itdecsa.com','','','','descarga.jpg','<p>sdsalkdmasd dasmdnadsa dasdakhdsa daï¿½lls dslkd dsd dsf sdfs fdsfs asï¿½asd</p>','EVALUACIÃ“N TÃ‰CNICA.xls',0),(2,'Lizbeth Bejar Palomino','Gerente de ventas','riithzu@itdecsa.com',NULL,NULL,NULL,'operadora1.png','<p>gerente general de ventas</p>','37775-398171910-6.pdf',0);

UNLOCK TABLES;

/*Table structure for table `tproducto` */

DROP TABLE IF EXISTS `tproducto`;

CREATE TABLE `tproducto` (
  `IdProdc` varchar(6) NOT NULL,
  `NomProduc` varchar(50) DEFAULT NULL,
  `Descripcion` text,
  `precio` decimal(8,2) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `idCategoria` varchar(6) NOT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `accesorios` text,
  `eliminar` int(11) DEFAULT NULL,
  `descuento` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`IdProdc`),
  KEY `idCategoria` (`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tproducto` */

LOCK TABLES `tproducto` WRITE;

UNLOCK TABLES;

/*Table structure for table `tsistemas` */

DROP TABLE IF EXISTS `tsistemas`;

CREATE TABLE `tsistemas` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `descripcion` text,
  `file` varchar(150) NOT NULL,
  `tecnicas` text,
  `requisitos` text,
  `estado` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_archivo` (`file`),
  CONSTRAINT `tsistemas_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tvideos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `tsistemas` */

LOCK TABLES `tsistemas` WRITE;

insert  into `tsistemas`(`id`,`nombre`,`imagen`,`descripcion`,`file`,`tecnicas`,`requisitos`,`estado`) values (2,'Sistema de Control de Asistencia y Permanencia de Personal para entidades publicas','control de asistencia _n.jpg','<p>Descripci&oacute;n... sisitemas de control de asistencia</p>','EEPP Cambio denominaciÃ³n social.pdf','<p>Especificaciones t&eacute;cnicas... &nbsp;dd</p>','<p>Requisitos minimos...fdsfs</p>',0),(3,'Sistema de Ventas y Facturacion','facebook1.jpg','<p>Descripci&oacute;n...ddddddddd</p>','02 Servicios tÃ©cnicos.xlsx','<p>Especificaciones t&eacute;cnicas...dsd</p>','<p>Requisitos minimos...dsd</p>',0);

UNLOCK TABLES;

/*Table structure for table `tusuario` */

DROP TABLE IF EXISTS `tusuario`;

CREATE TABLE `tusuario` (
  `IdUsuario` varchar(6) NOT NULL,
  `Usuario` varchar(20) NOT NULL,
  `Contraseña` varchar(32) NOT NULL,
  `Activo` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`IdUsuario`),
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
  `Anulado` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`IdVenta`),
  KEY `Id_Cliente` (`Id_Cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tventa` */

LOCK TABLES `tventa` WRITE;

UNLOCK TABLES;

/*Table structure for table `tvideos` */

DROP TABLE IF EXISTS `tvideos`;

CREATE TABLE `tvideos` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `ids` int(8) NOT NULL,
  `nombre` varchar(400) NOT NULL,
  `link` text NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`ids`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `tvideos` */

LOCK TABLES `tvideos` WRITE;

insert  into `tvideos`(`id`,`ids`,`nombre`,`link`,`estado`) values (1,2,'Turismo Vivencial en CUSCO','-euutYB29Lk',0),(2,2,'Turismo en CUSCO','skuQBlw2y-Y',0),(3,3,'Origen del CUSCO Ombligo del Mundo','xhPzlMrBTII',0),(4,2,'talia','kanyeO5uoNo',1);

UNLOCK TABLES;

/*Table structure for table `tvideosoftware` */

DROP TABLE IF EXISTS `tvideosoftware`;

CREATE TABLE `tvideosoftware` (
  `ids` int(8) DEFAULT NULL,
  `idv` int(8) DEFAULT NULL,
  KEY `ids` (`ids`),
  KEY `idv` (`idv`),
  CONSTRAINT `tvideosoftware_ibfk_2` FOREIGN KEY (`idv`) REFERENCES `video` (`id`)
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `video` */

LOCK TABLES `video` WRITE;

insert  into `video`(`id`,`nombre`,`linkvideo`,`eliminar`) values (1,'Turismo Vivencial en CUSCO','-euutYB29Lk',0),(2,'Turismo en CUSCO','skuQBlw2y-Y',0),(3,'Origen del CUSCO Ombligo del Mundo','xhPzlMrBTII',0);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
