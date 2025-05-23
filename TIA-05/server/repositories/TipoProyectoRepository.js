const db = require('../config/database');
const TipoProyecto = require('../models/Tipoproyecto');

class TipoProyectoRepository {
  // Obtener todos los tipo_proyectos
  async getAll() {
    const { rows } = await db.query('SELECT * FROM estudiantes');
    return rows.map(row => new TipoProyecto(
      row.id,
      row.codigo,
      row.descripcion,
      row.abreviatura,
      row.fecha_registro
    ));
  }

  // Obtener un tipo_proyecto por ID
  async getById(id) {
    const { rows } = await db.query('SELECT * FROM estudiantes WHERE id = $1', [id]);
    if (rows.length === 0) return null;
    const row = rows[0];
    return new TipoProyecto(
      row.id,
      row.codigo,
      row.descripcion,
      row.abreviatura,
      row.fecha_registro
    );
  }

  // Crear un nuevo tipo_proyecto
  async create(tipoProyecto) {
    const { rows } = await db.query(
      'INSERT INTO estudiantes (codigo, descripcion, abreviatura) VALUES ($1, $2, $3) RETURNING *',
      [tipoProyecto.codigo, tipoProyecto.descripcion, tipoProyecto.abreviatura]
    );
    const row = rows[0];
    return new TipoProyecto(
      row.id,
      row.codigo,
      row.descripcion,
      row.abreviatura,
      row.fecha_registro
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
    return new TipoProyecto(
      row.id,
      row.codigo,
      row.descripcion,
      row.abreviatura,
      row.fecha_registro
    );
  }

  // Eliminar un tipo_proyecto
  async delete(id) {
    const { rowCount } = await db.query('DELETE FROM estudiantes WHERE id = $1', [id]);
    return rowCount > 0;
  }

}

module.exports = new TipoProyectoRepository();
