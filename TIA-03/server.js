const express = require('express');
const cors = require('cors');

const tipoProyectoRouter = require('./server/routes/Tipo_proyectoRoutes');

const app = express();

// Middleware
app.use(cors());
app.use(express.json());

// Servir archivos estáticos desde "client"
app.use(express.static('client'));

// Rutas API
app.use('/api/Tipo_proyectos', tipoProyectoRouter); // Cambié a "/api/tipo_proyectos" en lugar de "/api/usuarios"

// Ruta principal (index.html)
app.get('/', (req, res) => {
  res.sendFile(__dirname + '/client/index.html');
});

// Manejo de errores
app.use((err, req, res, next) => {
  console.error(err.stack);
  res.status(500).json({ message: 'Error interno del servidor' });
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Servidor corriendo en http://localhost:${PORT}`);
});
