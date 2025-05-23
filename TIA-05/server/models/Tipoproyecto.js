class Estudiante {
  constructor(
    id,
    tipo_identificacion,
    identificacion,
    nombres_apellidos,
    fecha_nacimiento,
    genero,
    telefono,
    correo,
    fotografia,
    redes_sociales
  ) {
    this.id = id;
    this.tipo_identificacion = tipo_identificacion;
    this.identificacion = identificacion;
    this.nombres_apellidos = nombres_apellidos;
    this.fecha_nacimiento = fecha_nacimiento;
    this.genero = genero;
    this.telefono = telefono;
    this.correo = correo;
    this.fotografia = fotografia;
    this.redes_sociales = redes_sociales;
  }
}

module.exports = Estudiante;
