class TipoProyecto {
    constructor(id, codigo, descripcion, abreviatura, fecha_registro) {
      this.id = id;
      this.codigo = codigo;
      this.descripcion = descripcion;
      this.abreviatura = abreviatura;
      this.fecha_registro = fecha_registro || new Date(); // Si no se proporciona fecha, se usa la fecha actual
    }
  }
  
  module.exports = TipoProyecto;
  