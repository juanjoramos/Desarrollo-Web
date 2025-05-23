CREATE TABLE estudiantes (
    id SERIAL PRIMARY KEY,
    tipo_identificacion VARCHAR(50),
    identificacion VARCHAR(50),
    nombres_apellidos VARCHAR(100),
    fecha_nacimiento DATE,
    genero VARCHAR(10),
    telefono VARCHAR(20),
    correo VARCHAR(100),
    fotografia VARCHAR(255),
    redes_sociales TEXT
);