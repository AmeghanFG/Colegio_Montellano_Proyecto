CREATE DATABASE BDCM;

use BDCM;

CREATE TABLE clubs
(
    ID_CLUB INT AUTO_INCREMENT PRIMARY KEY,
    hora_inicio VARCHAR(5),
    hora_final VARCHAR(5)
);

CREATE TABLE grupos
(
    ID_grupo INT AUTO_INCREMENT PRIMARY KEY,
    grupo_letra VARCHAR(2),
    grado INT,
    ID_horario INT
);

CREATE TABLE usuarios
(
    ID_usuario INT AUTO_INCREMENT PRIMARY KEY,
    Nombre_Usuario VARCHAR(50),
    apellido_Usuario VARCHAR(50),
    pass_word VARCHAR(10),
    Permisos VARCHAR(13),
    correo VARCHAR(100),
    telefono VARCHAR(12),
    IDgrupo INT
);

CREATE TABLE asignaturas
(
    ID_asignatura INT AUTO_INCREMENT PRIMARY KEY,
    nombre_asigatura VARCHAR(30),
    usuario_ID INT
);

CREATE TABLE calificaciones
(
    asignatura_ID INT,
    usuario_ID INT,
    parcial_1 DECIMAL (2,1),
    parcial_2 DECIMAL (2,1),
    parcial_3 DECIMAL (2,1),
    ordinario DECIMAL (2,1),
    final DECIMAL (2,1),
    PRIMARY KEY (asignatura_ID, usuario_ID)
);

CREATE TABLE horarios
(
    ID_horarios INT AUTO_INCREMENT PRIMARY KEY,
    dia VARCHAR(10),
    asignaturaID INT,
    hora_inicio VARCHAR(5),
    hora_final VARCHAR(5)
);

CREATE TABLE faltas
(
    IDasignatura INT,
    IDusuario INT,
    fecha DATE,
    hora_inicial VARCHAR(5),
    estado VARCHAR(50),
    PRIMARY KEY (IDasignatura, IDusuario)
);

CREATE TABLE lista_club
(
    IDCLUB INT,
    ID0usuario INT,
    PRIMARY KEY (IDCLUB, ID0usuario)
);

ALTER TABLE grupos
ADD FOREIGN KEY (ID_horario) REFERENCES horarios(ID_horarios);

ALTER TABLE usuarios
ADD FOREIGN KEY (IDgrupo) REFERENCES grupos(ID_grupo);

ALTER TABLE asignaturas
ADD FOREIGN KEY (usuario_ID) REFERENCES usuarios(ID_usuario);

ALTER TABLE calificaciones
ADD FOREIGN KEY (asignatura_ID) REFERENCES asignaturas(ID_asignatura),
ADD FOREIGN KEY (usuario_ID) REFERENCES usuarios(ID_usuario);

ALTER TABLE horarios
ADD FOREIGN KEY (asignaturaID) REFERENCES asignaturas(ID_asignatura);

ALTER TABLE faltas
ADD FOREIGN KEY (IDasignatura) REFERENCES asignaturas(ID_asignatura),
ADD FOREIGN KEY (IDusuario) REFERENCES usuarios(ID_usuario);

ALTER TABLE lista_club
ADD FOREIGN KEY (IDCLUB) REFERENCES grupos(ID_grupo),
ADD FOREIGN KEY (ID0usuario) REFERENCES usuarios(ID_usuario);

INSERT INTO usuarios (Nombre_Usuario, apellido_Usuario, pass_word, Permisos, correo, telefono, IDgrupo)
VALUES ('alexander', 'Guzman', 'omnissiah', 'admin', 'aguzman49@ucol.mx', '123456789', null);