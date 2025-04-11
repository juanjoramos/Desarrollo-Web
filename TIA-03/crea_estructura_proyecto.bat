:: Crear estructura de directorios
mkdir proyecto_pia
mkdir proyecto_pia\server
mkdir proyecto_pia\server\config
mkdir proyecto_pia\server\models
mkdir proyecto_pia\server\repositories
mkdir proyecto_pia\server\routes
mkdir proyecto_pia\server\migrations
mkdir proyecto_pia\client
mkdir proyecto_pia\client\css
mkdir proyecto_pia\client\js
mkdir proyecto_pia\client\img

:: Crear archivos
type nul > proyecto_pia\server\config\database.js
type nul > proyecto_pia\server\models\TipoProyecto.js
type nul > proyecto_pia\server\repositories\TipoProyectoRepository.js
type nul > proyecto_pia\server\routes\Tipo_proyectoRoutes.js
type nul > proyecto_pia\server\migrations\001-create-tipos-proyectos.sql
type nul > proyecto_pia\client\index.html
type nul > proyecto_pia\client\css\style.css
type nul > proyecto_pia\client\js\app.js
type nul > proyecto_pia\server.js

:: Mensaje final
echo Estructura de carpetas y archivos vacíos creada exitosamente.
pause

