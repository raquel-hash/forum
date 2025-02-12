🚀 Forum - Laravel + Livewire + Vite

Este es un foro construido con Laravel, Livewire, y Vite. Este proyecto permite a los usuarios publicar temas y responder a discusiones en un entorno interactivo.

📦 Requisitos

Antes de instalar el proyecto, asegúrate de tener instalados los siguientes requisitos:

PHP >=8.x

Composer >=2.x

Node.js >=16.x (para Vite)

MySQL o PostgreSQL (según la configuración de .env)

Extensiones de PHP: pdo, mbstring, openssl, fileinfo, etc.

🚀 Instalación

1️⃣ Clonar el repositorio

git clone https://github.com/raquel-hash/forum.git
cd forum

2️⃣ Instalar dependencias de Laravel

composer install

3️⃣ Configurar variables de entorno

cp .env.example .env

🔹 **Edita el archivo **`` y configura los datos de la base de datos:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=forum
DB_USERNAME=root
DB_PASSWORD=

4️⃣ Generar clave de la aplicación

php artisan key:generate

5️⃣ Ejecutar migraciones y seeders

php artisan migrate --seed

📌 Esto creará las tablas necesarias y añadirá datos iniciales.

6️⃣ Instalar dependencias frontend

npm install
npm run dev

🔹 Usa npm run build para producción.

🌍 Ejecución del servidor

Inicia el servidor de desarrollo con:

php artisan serve

Accede al proyecto en:🔗 http://127.0.0.1:8000

🔐 Acceso a la demo

Si configuraste los seeders, puedes usar las siguientes credenciales:

Usuario: admin@example.com

Contraseña: password

# Limpiar caché
php artisan cache:clear
php artisan config:clear
