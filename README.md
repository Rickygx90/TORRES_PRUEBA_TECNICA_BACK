<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Hola! Para poder ejecutar el proyecto backend necesitaras ejecutar los siguientes comandos:

1.- Necesitaras tener levantado un motor de base de datos (mysql) y ejecutar los siguientes scripts:

    1.1.- CREATE DATABASE prueba;

    1.2.- USE prueba;

2.- Ejecutar el comando "php artisan serve" esto abrira un servidor de desarrollo en localhost (http://127.0.0.1) en el puerto 8000.

3.- Ejecutar el comando "php artisan migrate" lo cual ejecutara las migraciones y crear las tablas en la base de datos "prueba"

4.- Ejecutar los siguientes scripts para llenar las tablas cargos, departamentos y users:

        INSERT INTO departamentos(codigo,nombre,activo, idUsuarioCreacion) 
        VALUES ('financiero','Financiero', true, 1),
        	('informatica','Informatica', true, 1),
        	('administrativo','Administrativo', true, 1),
        	('limpieza','Limpieza', true, 1);
        	
        INSERT INTO cargos(codigo,nombre,activo, idUsuarioCreacion) 
        VALUES ('gerente','Gerente', true, 1),
        	('asistente','Asistente', true, 1),
        	('secretario','Secretario', true, 1),
        	('presidente','Presidente', true, 1),
        	('desarrollador','Desarrollador', true, 1); 
        
        INSERT INTO users(usuario,
                pnombre,
                snombre,
                papellido,
                sapellido,
                email,
                departamento,
                cargo) 
        VALUES ('dnatha','Douglas', 'Joel', 'Natha', 'Arias', 'doug@natha.com', 'informatica', 'desarrollador');

Listo
