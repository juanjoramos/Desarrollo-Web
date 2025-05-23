:: Crear estructura de directorios
mkdir red_social_pascualina
mkdir red_social_pascualina\server
mkdir red_social_pascualina\server\config
mkdir red_social_pascualina\server\models
mkdir red_social_pascualina\server\repositories
mkdir red_social_pascualina\server\routes
mkdir red_social_pascualina\server\migrations
mkdir red_social_pascualina\client
mkdir red_social_pascualina\client\css
mkdir red_social_pascualina\client\js
mkdir red_social_pascualina\client\img

:: Crear archivos
type nul > red_social_pascualina\server\config\database.js
type nul > red_social_pascualina\server\models\TipoProyecto.js
type nul > red_social_pascualina\server\repositories\TipoProyectoRepository.js
type nul > red_social_pascualina\server\routes\Tipo_proyectoRoutes.js
type nul > red_social_pascualina\server\migrations\001-create-tipos-proyectos.sql
type nul > red_social_pascualina\client\index.html
type nul > red_social_pascualina\client\css\style.css
type nul > red_social_pascualina\client\js\app.js
type nul > red_social_pascualina\server.js

:: Mensaje final
echo Estructura de carpetas y archivos vacíos creada exitosamente.
pause