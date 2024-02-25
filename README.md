# Prueba técnica Europe Language Jobs 

Este proyecto consiste en la implementación de un clasificador de perros utilizando las tecnologías Laravel, VueJS 3 con Composition API y Quasar. El objetivo principal es crear una Single Page Application (SPA) que permita a los usuarios subir una foto de un perro junto con información detallada, como el nombre de la raza, tamaño y color de pelo.

## Configuración del Entorno

## Requisitos Previos

- PHP 
- Composer
- NPM

## Configuración de la Base de Datos

0. Dentro de la carpeta classification-backend:
1. Copia el archivo `.env.example` y renómbralo a `.env`.
2. Configura las variables de entorno en el archivo `.env` para la conexión a la base de datos.

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_base_de_datos
DB_USERNAME=nombre_de_tu_usuario
DB_PASSWORD=contraseña_de_tu_usuario
```
2. Puede inicializar su base de datos usando el comando migrate:refresh, que también revertirá y volverá a ejecutar todas sus migraciones con datos pre-cargados:
``php artisan migrate:refresh --seed``

## Instalación de Dependencias

### Backend
```
cd classification-backend
composer install
```

### Frontend
```
cd classification-frontend
npm install
```

## Ejecución del Proyecto

### Backend (Laravel)
```
cd classification-backend
php artisan serve
```
La aplicación estará disponible en http://localhost:8000.

### Frontend (Quasar)
```
cd classification-frontend
npm quasar dev
```
La aplicación frontend estará disponible en http://localhost:8080.

## Uso
La aplicación inicia en una página simple con un logo central. Cuenta con un navbar que contiene un boton a su izquierda para dirigir al Home, y dos botones sobre la derecha para Agregar perros y ver un listado de los mismos.
Dentro de Agregar, se encuentra un formulario sencillo con 4 campos a completar para agregar los datos del perro (Nombre de la raza, Color de pelo, Tamaño y Foto), completando los datos y haciendo click en Guardar se registra el nuevo perro en la base de datos.
Por último, en la sección Listar se puede ver una lista de los perros guardados con sus caracteristicas y fotos. A su vez, cada item de la lista cuenta con dos botones dando la posibilidad de eliminar y/o editar el perro en cuestion.

