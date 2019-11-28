# Sitios Turísticos

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

Todas las vistas *Páginas principales* son archivos .php en el directorio raíz

    - :file_folder: config *Archivos php de configuración global, como conexión a la base de datos, sesiones, etc*
    - :file_folder: controllers *Lógica de las vistas, que son llamadas por ajax. El nombre de los archivos es igual al nombre de la vista + Controller, ej. loginController.js*
    - :file_folder: db *Diagramas y archvios .sql para configurar base de datos fuera de la aplicación*
    - :file_folder: src *continen las imágenes, css y javascript loales de la aplicación*
        - :file_folder: css
        - :file_folder: images
        - :file_folder: js
    - :file_folder: templates *Contiene todas las plantillas,es solo html, archvos .php*
    - :page_facing_up: index.php
    - :page_facing_up: login.php
    - :page_facing_up: register.php


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