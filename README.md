![Sitios Turísticos](./src/images/sitiosLogo.png?style=centerme)

Creado: @antony999k

[![version](https://img.shields.io/badge/version-0.1.0-ff69b4.svg)]()
[![Awesome](https://cdn.rawgit.com/sindresorhus/awesome/d7305f38d29fed78fa85652e3a63e154dd8e8829/media/badge.svg)](https://github.com/wasabeef/awesome-android-ui)

Sistema de Información que permite organizar, catalogar y ubicar sitios turísticos.

# Contribuir

## Paquetes/Librerias recomendadas (Globales/Locales)
- PHP: `v7.1.23`
- MySQL: `v5.7.28`
- Apache: `v2.4.33`

## Iniciar aplicación (Desarrollo)
- [Configurar entorno de desarrollo local *OSX*](https://websitebeaver.com/set-up-localhost-on-macos-high-sierra-apache-mysql-and-php-7-with-sslhttps)

## Estructura de archivos
Todos los archivos tienen un estilo de escritura camelCase. 

Todas las vistas (*Páginas principales*) son archivos .php en el directorio raíz

- :file_folder: **config**: *Archivos php de configuración global, como conexión a la base de datos, sesiones, etc*
- :file_folder: **controllers**: *Lógica de las vistas, que son llamadas por ajax. El nombre de los archivos es: [nombre de la vista] + Controller, ej. loginController.php*
- :file_folder: **db**: *Diagramas y archvios .sql para configurar base de datos fuera de la aplicación*
- :file_folder: **src**: *continen las imágenes, css y javascript loales de la aplicación*
    - :file_folder: **css**
    - :file_folder: **images**
    - :file_folder: **js**: Librerias de terceros y archivos ajax que mandan a llamar a los controladores, el nombre de los ajax es: [nombre de la vista] + [funcion], ej. loginPost.js
- :file_folder: **templates**: *Contiene todas las plantillas,es solo html, archvos .php*
- :page_facing_up: **index.php**
- :page_facing_up: **login.php**
- :page_facing_up: **register.php**
- :page_facing_up: **profile.php**
- :page_facing_up: **sites.php**
- :page_facing_up: **contacts.php**
- :page_facing_up: **admin.php**

## Descripción de las vistas
Las vistas que requieren autenticación incluyen el archivo *session.php* para validar sesión (se encuentra en directorio config)

### index.php :star:
*Esta ruta requiere autenticación para acceder*

Index es la vista principal, muestra cantidad especifica de sitios turisticos, dentro de esta vista está la opción de busqueda e integra completamente el **módulo de busqueda.**

Tiene conexión con los siguientes archivos:
- searchController.php: *Maneja y realiza las busquedas de los sitios*
- indexController.php: *Maneja y realiza la petición de los primeros sitios al cargar*
- indexSearch.js: *Maneja la asincronia de las búsquedas*
- indexGet.js: *Maneja la asincronia de la primera petición de los sitios*
- styles.css: *Carga los estilos personalizados*
- *Otros archivos template*

### login.php :star:
*Esta ruta requiere **no estar autenticado** para acceder*

Login permite generar una sesión en el sitio.

Tiene conexión con los siguientes archivos:
- loginController.php: *La validación y petición de inicio de sesión*
- loginPost.js: *Maneja la asincronia de la petición, como el simbólo de carga, manejo de errores, etc*
- styles.css: *Carga los estilos personalizados*
- *Otros archivos template*

### register.php :star:
*Esta ruta requiere **no estar autenticado** para acceder*

Login permite hacer un post a la base de datos y generar usuarios.

Tiene conexión con los siguientes archivos:
- registerController.php: *La validación y petición de registro*
- registerPost.js: *Maneja la asincronia de la petición, como el simbólos de carga, manejo de errores, etc*
- styles.css: *Carga los estilos personalizados*
- *Otros archivos template*

### profile.php :star:
*Esta ruta requiere autenticación para acceder*

Profile permite ver tu perfil y el de otros usuarios.

Tiene conexión con los siguientes archivos:
- profileController.php: *Hace la petición de los usuarios*
- profileGet.js: *Maneja la asincronia de la petición, como el simbólos de carga, manejo de errores, etc*
- styles.css: *Carga los estilos personalizados*
- *Otros archivos template*

### sites.php :star:
*Esta ruta requiere autenticación para acceder*

Sites mostrata la lista de los sitios guardados de usuario logeado.


### contacts.php :star:
*Esta ruta requiere autenticación para acceder*

Contacts permite ver agregar a usuarios registrados en la plataforma para compartir tus listas de sitios.

Tiene conexión con los siguientes archivos:
- contactsController.php: *Hace la petición para agregar usuarios a la lista de contáctos*
- contactsPost.js: *Maneja la asincronia de la petición, como el simbólos de carga, manejo de errores, etc*
- styles.css: *Carga los estilos personalizados*
- *Otros archivos template*

### admin.php :star:
*Esta ruta requiere autenticación de **Administrador** para acceder*

Tiene conexión con los siguientes archivos:
- *Diversos archivos **php** para manejar el CRUD de el módulo de administración
- *Otros archivos template*

Admin es un CRUD de casi todas las tablas dentro de la aplicación.

## Guía de estilos
### Mensajes en los Commits de Git

- Utilizar oraciones en presente ("Botón añadido" no "Se añadio botón")
- Comenzar el commit con mayúsculas
- Cuando solo se cambia documentacion añadir `[ci skip]` en el título del commit
- Considerar comenzar el commit con un emoji
    - :rocket: `:rocket:` cuando se lanza una nueva versión
    - :sparkles: `:sparkles:` cuando se añade nuevo código
    - :art: `:art:` mejora en el formato/estructura del código
    - :racehorse: `:racehorse:` mejora en el performance del código
    - :book: `:book:` cuando se escribe documentación
    - :bug: `:bug:` cuando se corrige un bug
    - :fire: `:fire:` cuando se eliminó código o archivos

## Notas

# Changelog

# Ayuda
@antony999k, antony999k@hotmail.com