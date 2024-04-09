# Technical Test
This project involves the implementation of a dog classifier using Laravel, VueJS 3 with Composition API, and Quasar technologies. The main objective is to create a Single Page Application (SPA) that allows users to upload a photo of a dog along with detailed information such as breed name, size, and hair color.

## Configuración del Entorno

## Prerequisites
-PHP
-Composer
-NPM

## Database Configuration

1. Inside the classification-backend folder:
2. Copy the .env.example file and rename it to .env.
3. Configure the environment variables in the .env file for the database connection.

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_base_de_datos
DB_USERNAME=nombre_de_tu_usuario
DB_PASSWORD=contraseña_de_tu_usuario
```
2. You can initialize your database using the migrate:refresh command, which will also rollback and re-run all of your migrations with pre-seeded data:
``php artisan migrate:refresh --seed``

## Dependency Installation

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

## Running the Project
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
The application will be available at http://localhost:8000.

## Usage
The application starts on a simple page with a central logo. It has a navbar containing a button on its left to navigate to the Home, and two buttons on the right to Add dogs and view a list of them.
Inside Add, there is a simple form with 4 fields to complete to add the dog's data (Breed Name, Hair Color, Size, and Photo). By completing the data and clicking Save, the new dog is registered in the database.
In the List section, you can see a list of the saved dogs with their characteristics and photos. Additionally, each item in the list has two buttons giving the option to delete and/or edit the respective dog.
Lastly, the Europe Language Jobs section was added to the menu, which is a layout of the page https://www.europelanguagejobs.com/companies

