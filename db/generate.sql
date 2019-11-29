CREATE TABLE IF NOT EXISTS `pf_usuarios` (
  `idUsuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_usuario` enum('administrador','normal') DEFAULT 'normal',
  `nombre` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL UNIQUE,
  `edad` int(3) DEFAULT NULL,
  `género` enum('F','M','B','O') DEFAULT NULL,
  `foto` varchar(10) DEFAULT NULL,
  `correo` varchar(35) DEFAULT NULL,
  `contraseña` varchar(15) DEFAULT NULL,
  `fecha_registro` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `pf_sitios` (
  `idSitio` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `categoría` varchar(50) DEFAULT NULL,
  `ubicación` varchar(20) DEFAULT NULL,
  `calificación` float(3,1) DEFAULT NULL,
  `num_opiniones` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `descripción` varchar(300) DEFAULT NULL,
  `lat` float(7,4) DEFAULT NULL,
  `longitud` float(7,4) DEFAULT NULL,
  PRIMARY KEY (`idSitio`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `pf_opiniones` (
  `idOpinion` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idSitio` int(10) unsigned DEFAULT NULL,
  `idUsuario` int(10) unsigned DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `opinión` varchar(300) DEFAULT NULL,
  `calificación` float(4,3) DEFAULT NULL,
  PRIMARY KEY (`idOpinion`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `pf_listacontactos` (
  `idUsuario` int(11) unsigned DEFAULT NULL,
  `idContacto` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `pf_fotositios` (
  `idFoto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idSitio` int(10) unsigned DEFAULT NULL,
  `foto` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idFoto`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `pf_busquedas` (
  `idBusqueda` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idUsuario` int(10) unsigned DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `categoría` varchar(50) DEFAULT NULL,
  `ubicación` varchar(20) DEFAULT NULL,
  `calificación` float(3,1) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`idBusqueda`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;