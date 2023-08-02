# pokelist

Se ha generado un repositorio con diferentes Releases, por lo que se podrá acceder a la fase 1 y la fase 2 con independencia

## Fase 1

https://github.com/m-lopez-f/pokelist/tree/Fase1

## Fase 2

- Versión 2
- Versión de PHP 8.2
- Versión de Laravel 10


### Descargarse el proyecto e instalación

una vez descargado será necesario realizar la instalción de los paquetes composer, mediante el comando `composer install`

Una vez instalado los paquetes será necesario levantar la base de datos. Para ello modificaremos los datos de conexión en el fichero `.env`. Una vez modificados ejecutaremos el siguiente comando.

- 1: `php artisan migrate`

**En caso de usar la misma DB que para la fase 1 será necesario la ejecución del siguiente comando: `php artisan migrate:refresh`**

Estos comandos nos permitiran crear las tablas y generar datos de ejemplo para está segunda fase. 

### Ejecución

Se ha generado una documentación para la interpretación de la API, se podrá visualizar en: `http://<your-IP>:<your-Port>/api/documentation`. Una vez hayas levantado la aplicación con `php artisan serve` o prepares un entorno con NGINX/APACHE


