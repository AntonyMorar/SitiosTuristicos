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

/* Crea tabla de relación muchos a muchos. Cuando se elimina un usuario se eliminan los hijos que dependen de ella.*/
CREATE TABLE IF NOT EXISTS `pf_listacontactos` (
  `id` int(10) unsigned PRIMARY KEY AUTO_INCREMENT,
  `idUsuario` int(10) unsigned,
  `idContacto` int(10) unsigned,
  FOREIGN KEY (idUsuario) REFERENCES pf_usuarios (idUsuario) ON DELETE CASCADE,
  FOREIGN KEY (idContacto) REFERENCES pf_usuarios (idUsuario) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `pf_sitios` (
  `idSitio` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `categoría` enum('Ciudad', 'Parque', 'Playa', 'Desierto', 'Selva', 'Bosque', 'Museo', 'Arquitectura', 'Lago', 'Otro') DEFAULT 'Otro',
  `ubicación` varchar(50) DEFAULT NULL,
  `descripción` TEXT DEFAULT NULL,
  `lat` float(7,4) DEFAULT NULL,
  `longitud` float(7,4) DEFAULT NULL,
  `fecha` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idSitio`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `pf_opiniones` (
  `idOpinion` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idSitio` int(10) unsigned NOT NULL,
  `idUsuario` int(10) unsigned NOT NULL,
  `opinión` TEXT DEFAULT NULL,
  `calificación` float(4,3) DEFAULT NULL,
  `fecha` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idOpinion`),
  FOREIGN KEY (`idSitio`) REFERENCES pf_sitios(`idSitio`),
  FOREIGN KEY (`idUsuario`) REFERENCES pf_usuarios(`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `pf_fotositios` (
  `idFoto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idSitio` int(10) unsigned NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idFoto`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `pf_busquedas` (
  `idBusqueda` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idUsuario` int(10) unsigned NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `categoría` varchar(50) DEFAULT NULL,
  `ubicación` varchar(30) DEFAULT NULL,
  `calificación` float(3,1) DEFAULT NULL,
  `fecha` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idBusqueda`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;