# Task Management Project - Laravel 11

Este proyecto es una aplicación de gestión de tareas construida con Laravel 11.

## Requisitos previos

Asegúrate de tener instaladas las siguientes herramientas antes de comenzar:

- [PHP ^8.2](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) y [npm](https://www.npmjs.com/)
- [MySQL](https://www.mysql.com/)

## Instalación

Sigue los siguientes pasos para configurar el proyecto en tu máquina local.

### 1. Clonar el repositorio

```bash
git clone https://github.com/CristopherBuitrago/tasks.git
cd tasks
```

### 2. Instalar dependencias de PHP

Usa Composer para instalar las dependencias del proyecto.

```bash
composer install
```

### 3. Configurar el archivo `.env`

Duplica el archivo `.env.example` y renómbralo a `.env`.

```bash
cp .env.example .env
```

Luego, actualiza los valores de la configuración de base de datos en el archivo `.env` con tus propios detalles:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_la_base_de_datos
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

### 4. Generar la clave de la aplicación

Ejecuta el siguiente comando para generar una clave de aplicación única:

```bash
php artisan key:generate
```

### 5. Ejecutar las migraciones

Corre las migraciones para crear las tablas necesarias en la base de datos:

```bash
php artisan migrate
```

### 6. Instalar dependencias de Node.js

Usa npm para instalar las dependencias del frontend:

```bash
npm install
```

### 7. Compilar los archivos del frontend

Compila los archivos de CSS y JavaScript usando Vite:

```bash
npm run dev
```

## Ejecutar el servidor de desarrollo

Finalmente, levanta el servidor de desarrollo de Laravel:

```bash
php artisan serve
```

Esto iniciará el servidor en `http://127.0.0.1:8000`.

## Credenciales por defecto

Email : admin@gmail.com
Password: admin123

## Comandos útiles

- **Correr las migraciones**: `php artisan migrate`
- **Revertir las migraciones**: `php artisan migrate:rollback`
- **Ejecutar pruebas**: `php artisan test`
