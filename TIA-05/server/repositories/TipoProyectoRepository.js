const db = require('../config/database');
const Estudiante = require('../models/Tipoproyecto');

class TipoProyectoRepository {
  // Obtener todos los tipo_proyectos
  async getAll() {
    const { rows } = await db.query('SELECT * FROM estudiantes');
    return rows.map(row => new Estudiante(
      row.id,
      row.tipo_identificacion,
      row.identificacion,
      row.nombres_apellidos,
      row.fecha_nacimiento,
      row.genero,
      row.telefono,
      row.correo,
      row.fotografia,
      row.redes_sociales
    ));
  }

  // Obtener un tipo_proyecto por ID
  async getById(id) {
    const { rows } = await db.query('SELECT * FROM estudiantes WHERE id = $1', [id]);
    if (rows.length === 0) return null;
    const row = rows[0];
    return new Estudiante(
      row.id,
      row.tipo_identificacion,
      row.identificacion,
      row.nombres_apellidos,
      row.fecha_nacimiento,
      row.genero,
      row.telefono,
      row.correo,
      row.fotografia,
      row.redes_sociales
    );
  }

  // Crear un nuevo tipo_proyecto
  async create(tipoProyecto) {
    const { rows } = await db.query(
      'INSERT INTO estudiantes (tipo_identificacion, identificacion, nombres_apellidos, fecha_nacimiento, genero, telefono, correo, fotografia, redes_sociales) VALUES ($1, $2, $3) RETURNING *',
      [tipoProyecto.codigo, tipoProyecto.descripcion, tipoProyecto.abreviatura]
    );
    const row = rows[0];
    return new Estudiante(
      row.id,
      row.tipo_identificacion,
      row.identificacion,
      row.nombres_apellidos,
      row.fecha_nacimiento,
      row.genero,
      row.telefono,
      row.correo,
      row.fotografia,
      row.redes_sociales
    );
  }

  // Actualizar un tipo_proyecto
  async update(id, tipoProyecto) {
    const { rows } = await db.query(
      'UPDATE estudiantes SET codigo = $1, descripcion = $2, abreviatura = $3 WHERE id = $4 RETURNING *',
      [tipoProyecto.codigo, tipoProyecto.descripcion, tipoProyecto.abreviatura, id]
    );
    if (rows.length === 0) return null;
    const row = rows[0];
    return new Estudiante(
      row.id,
      row.tipo_identificacion,
      row.identificacion,
      row.nombres_apellidos,
      row.fecha_nacimiento,
      row.genero,
      row.telefono,
      row.correo,
      row.fotografia,
      row.redes_sociales
    );
  }

  // Eliminar un tipo_proyecto
  async delete(id) {
    const { rowCount } = await db.query('DELETE FROM estudiantes WHERE id = $1', [id]);
    return rowCount > 0;
  }

}

module.exports = new TipoProyectoRepository();