const express = require('express');
const router = express.Router();
const tipoProyectoRepository = require('../repositories/TipoProyectoRepository');  // Asegúrate de que esta ruta esté correcta

// Obtener todos los tipo_proyectos
router.get('/', async (req, res) => {
  try {
    const tipoProyectos = await tipoProyectoRepository.getAll();
    res.status(200).json(tipoProyectos);
  } catch (error) {
    console.error(error);
    res.status(500).json({ message: 'Error al obtener Registro', error: error.message });
  }
});

// Crear un tipo_proyecto
router.post('/', async (req, res) => {
  try {
    const nuevoTipoProyecto = await tipoProyectoRepository.create(req.body);
    res.status(201).json({ 
      message: 'Registro creado exitosamente',
      tipoProyecto: nuevoTipoProyecto
    });
  } catch (error) {
    console.error(error);
    res.status(400).json({ message: 'Error al crear Registro', error: error.message });
  }
});

// Actualizar un tipo_proyecto
router.put('/:id', async (req, res) => {
  try {
    const tipoProyectoActualizado = await tipoProyectoRepository.update(req.params.id, req.body);
    if (tipoProyectoActualizado) {
      res.status(200).json({ 
        message: 'Registro actualizado exitosamente',
        tipoProyecto: tipoProyectoActualizado
      });
    } else {
      res.status(404).json({ message: 'Registro no encontrado' });
    }
  } catch (error) {
    console.error(error);
    res.status(400).json({ message: 'Error al actualizar Registro', error: error.message });
  }
});

// Eliminar un tipo_proyecto
router.delete('/:id', async (req, res) => {
  try {
    const eliminado = await tipoProyectoRepository.delete(req.params.id);
    if (eliminado) {
      res.status(200).json({ message: 'Registro eliminado exitosamente' });
    } else {
      res.status(404).json({ message: 'Registro no encontrado' });
    }
  } catch (error) {
    console.error(error);
    res.status(500).json({ message: 'Error al eliminar Registro', error: error.message });
  }
});

module.exports = router;