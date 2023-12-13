CREATE TABLE Usuarios (
    id_usuario INT PRIMARY KEY,
    nombre_usuario VARCHAR(255),
    password VARCHAR(255),
    rol_usuario VARCHAR(50)
);

-- Tabla Materia
CREATE TABLE Materia (
    id_curso INT PRIMARY KEY,
    nombre_curso VARCHAR(255),
    descripcion_curso TEXT,
    creditos INT
);

-- Tabla Matriculas
CREATE TABLE Matriculas (
    id_matricula INT PRIMARY KEY,
    id_estudiante INT,
    id_curso INT,
    fecha_matricula DATE,
    FOREIGN KEY (id_estudiante) REFERENCES Estudiante(id_estudiante),
    FOREIGN KEY (id_curso) REFERENCES Materia(id_curso)
);

-- Tabla Estudiante
CREATE TABLE Estudiante (
    id_estudiante INT PRIMARY KEY,
    nombre_estudiante VARCHAR(255),
    apellido_estudiante VARCHAR(255),
    fecha_nacimiento DATE,
    direccion TEXT
);

-- Tabla Estado_Matricula
CREATE TABLE Estado_Matricula (
    id_estado INT PRIMARY KEY,
    nombre VARCHAR(100),
    id_matricula INT,
    FOREIGN KEY (id_matricula) REFERENCES Matriculas(id_matricula)
);

-- Tabla Horarios
CREATE TABLE Horarios (
    id_horario INT PRIMARY KEY,
    dia_semana VARCHAR(20),
    hora_inicio TIME,
    hora_fin TIME,
    id_curso INT,
    id_docente INT,
    FOREIGN KEY (id_curso) REFERENCES Materia(id_curso),
    FOREIGN KEY (id_docente) REFERENCES Docentes(id_docente)
);

-- Tabla Docentes
CREATE TABLE Docentes (
    id_docente INT PRIMARY KEY,
    nombre_docente VARCHAR(255),
    apellido_docente VARCHAR(255)
);


