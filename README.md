<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Instalación

1. Clone el proyecto en una su equipo.
2. Dirijase a la raiz del proyecto y ejecute los siguiente comando
```
cp .env.example .env
composer install
php artisan key:generate
npm install
npm run dev
```
3. Cree una nueva Base Datos en el gestor de su equipo local
4. Regrese al proyecto y ejecute los siguientes comando
```
php artisan migrate
php artisan serve
```
5. En su navegaor de preferencias dirigase la dirección 127.0.0.1:8000

6. Haga click sobre el logo de la marca inxait, descargará en el proyecto los datos del API para llenar los datos de Departamentos y Ciudades.

> por efectos de ser prueba, puede que la consulta dure mas de 60 milisegundos, por lo tanto basta con regresar y seguir con el uso de la aplicación.

## Uso
- Para Registrar nuevos usuarios haga click en el boton registar
- Para realizar el sorteo haga click en el boton realizar concurso
- Para exportar la base datos de usuario haga click en exportar Excel
