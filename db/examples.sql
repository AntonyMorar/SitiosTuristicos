
/* Eminina tablas
 ****************************************************/
DROP TABLE pf_usuarios;
DROP TABLE pf_listacontactos;
DROP TABLE pf_sitios;
DROP TABLE pf_opiniones;
DROP TABLE pf_fotositios;
DROP TABLE pf_busquedas;


/* Borrar datos de una tabla
 ****************************************************/
TRUNCATE TABLE pf_usuarios;
TRUNCATE TABLE pf_listacontactos;

/* Select 
 ***************************************************/
SELECT * FROM pf_usuarios;
SELECT * FROM pf_listacontactos;
SELECT * FROM pf_sitios;
SELECT * FROM pf_opiniones;
/* Seleccionar usuario especifico */
SELECT idUsuario, tipo_usuario, nombre, username, edad, género, foto, correo, fecha_registro FROM pf_usuarios WHERE idUsuario=1

/* Selecionar todos los usuarios de mi lista de contactos */
SELECT tipo_usuario, nombre, username, edad, género, foto, correo, fecha_registro
FROM pf_listacontactos l
JOIN pf_usuarios WHERE l.idUsuario = 2;

/* Buscar un usuario */
SELECT idUsuario, nombre, username, foto FROM pf_usuarios WHERE (idUsuario <> 2) AND (nombre LIKE '%ra%' OR username LIKE '%ra%')

/* Buscar sitios */
SELECT * FROM pf_sitios WHERE (nombre LIKE '%chi%');

/* Buscar sitios + Promedio calificacion */
SELECT u.*, AVG(o.calificacion) AS ranking
FROM pf_sitios u LEFT OUTER JOIN pf_opiniones o ON u.idSitio = o.idSitio
WHERE (u.nombre LIKE '%chi%') AND (U.categoria LIKE '%%') AND (u.ubicacion LIKE '%%')
GROUP BY u.idSitio
HAVING AVG(o.calificacion) BETWEEN 0 AND 5

/* Buscar un sitio especifico */
SELECT u.*, AVG(o.calificacion) AS ranking
        FROM pf_sitios u LEFT OUTER JOIN pf_opiniones o ON u.idSitio = o.idSitio
        WHERE u.idSitio = 9
        GROUP BY u.idSitio

/* Lista de contactos */
SELECT cont.idUsuario, cont.nombre, cont.username, cont.edad, cont.género, cont.foto, cont.correo, cont.fecha_registro FROM pf_listacontactos AS list
INNER JOIN pf_usuarios AS u ON list.idUsuario = u.idUsuario
INNER JOIN pf_usuarios AS cont ON list.idContacto = cont.idUsuario
WHERE u.idUsuario = 2;

/* Lista de Opiniones */
SELECT op.idOpinion, op.opinion, op.calificacion, op.fecha, us.idUsuario, us.nombre as nombre_usuario, us.username, us.foto as foto_usuario FROM pf_opiniones AS op 
INNER JOIN pf_usuarios AS us ON us.idUsuario = op.idUsuario
WHERE op.idSitio = 9;

/* Insertar many to many
 *****************************************************/
INSERT INTO pf_usuarios (nombre, username, edad, género, foto, correo, contrasenia) VALUES ('Jesus Nzatet', 'minijisus', 2000, 'M','foto.jpg', 'jisus@gmail.com', '12345');
INSERT INTO pf_listacontactos (idUsuario, idContacto) VALUES (2,1);

/* Insertar Sitio
 ***************************************************/
INSERT INTO pf_sitios (nombre, categoria, ubicacion, descripcion, lat, longitud) VALUES ('Parque Nacional Manuel Antonio', 'Selva', 'Puntarenas', 'El pequenio gran pulmon de la costa costarricense es llamado el Parque Nacional Manuel Antonio y cerca de él se puede conseguir el poblado de Quepos.', 48.8667, 2.3333)

/* Insertar Opinion
 ***************************************************/
INSERT INTO pf_opiniones (idSitio, idUsuario, opinion, calificacion) VALUES (9,2,'Ya fui dos veces y hasta remodelaron el lugar',5);

/* Crear una resenia
 ***************************************************/
INSERT INTO pf_opiniones (idSitio, idUsuario, opinion, calificacion) VALUES (13, 2, 'Está hermoso, nunca habia salido del pais, me encanto estar con mi ruka', 3);
