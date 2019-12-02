
/* Eminina tablas
 ****************************************************/
DROP TABLE pf_usuarios;
DROP TABLE pf_listacontactos;

/* Borrar datos de una tabla
 ****************************************************/
TRUNCATE TABLE pf_usuarios;
TRUNCATE TABLE pf_listacontactos;

/* Select 
 ***************************************************/
SELECT * FROM pf_usuarios;
SELECT * FROM pf_listacontactos;
/* Seleccionar usuario especifico */
SELECT idUsuario, tipo_usuario, nombre, username, edad, género, foto, correo, fecha_registro FROM pf_usuarios WHERE idUsuario=1;

/* Selecionar todos los usuarios de mi lista de contactos */
SELECT tipo_usuario, nombre, username, edad, género, foto, correo, fecha_registro
FROM pf_listacontactos l
JOIN pf_usuarios WHERE l.idUsuario = 2;

/* Buscar un usuario */
SELECT idUsuario, nombre, username, foto FROM pf_usuarios WHERE (idUsuario <> 2) AND (nombre LIKE '%ra%' OR username LIKE '%ra%')

/* Lista de contactos */
SELECT cont.idUsuario, cont.nombre, cont.username, cont.edad, cont.género, cont.foto, cont.correo, cont.fecha_registro FROM pf_listacontactos AS list
INNER JOIN pf_usuarios AS u ON list.idUsuario = u.idUsuario
INNER JOIN pf_usuarios AS cont ON list.idContacto = cont.idUsuario
WHERE u.idUsuario = 2

/* Insertar many to many
 *****************************************************/
INSERT INTO pf_usuarios (nombre, username, edad, género, foto, correo, contraseña) VALUES ('Jesus Nzatet', 'minijisus', 2000, 'M','foto.jpg', 'jisus@gmail.com', '12345');
INSERT INTO pf_listacontactos (idUsuario, idContacto) VALUES (2,1);
