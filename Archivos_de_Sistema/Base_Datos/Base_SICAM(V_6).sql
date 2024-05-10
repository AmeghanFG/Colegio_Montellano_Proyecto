CREATE DATABASE Base_SICAM;

USE Base_SICAM;

CREATE TABLE Grupos (
    Id_Grupos INT(10) PRIMARY KEY AUTO_INCREMENT,
    Grado VARCHAR(10),
    Grupo VARCHAR(10)
);

/*------------------------TABLAS de Usuarios ------------------*/

CREATE Table Alumno(
    Numero_Cuenta int(10) primary key NOT NULL AUTO_INCREMENT,
    Nombre_usuario varchar(50),
    Nombre_Completo VARCHAR(100),
    Fecha_nacimiento date,
    Correo varchar(50),
    Contrasena varchar(50),
    Id_Grupo int(10), /*Llave Foranea*/

    foreign key (Id_Grupo) references Grupos(Id_Grupos) /*Relacion con tabla Grupos*/

);

CREATE TABLE Profesor (
    Numero_Cuenta INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Nombre_usuario varchar(50),
    Nombre_Completo VARCHAR(100),
    Contrasena VARCHAR(50),
    Correo VARCHAR(50),
    Telefono VARCHAR(15),
    Fecha_nacimiento date
);

CREATE TABLE Administrador (
    Numero_Cuenta INT PRIMARY KEY NOT NULL  AUTO_INCREMENT,
    Nombre_usuario varchar(50),
    Contrasena VARCHAR(50),
    Correo VARCHAR(50),
    Nombre_Completo VARCHAR(100),
    Telefono VARCHAR(15)
);


/*------------------------TABLAS con relacion a Asignatura ------------------*/

CREATE TABLE Asignatura (
    Id_Asignatura INT PRIMARY KEY AUTO_INCREMENT,
    Nombre VARCHAR(50)
);

/*-- Tabla de Relacion entre Profesor y Asignatura*/
CREATE TABLE Imparten (
    Id_Asignatura INT,
    Id_Profesor INT,
    

    FOREIGN KEY (Id_Asignatura) REFERENCES Asignatura(Id_Asignatura), /*Relacion con tabla Asignatura*/
    FOREIGN KEY (Id_Profesor) REFERENCES Profesor(Numero_Cuenta) /*Relacion con tabla profesores*/
);


/*--Tabla de Relacion entre Alumno y Asignatura*/
CREATE TABLE Asignados(
    Id_Alumno INT,
    Id_Asignatura INT, /*Llave Foranea*/
    
    FOREIGN KEY (Id_Alumno) REFERENCES Alumno(Numero_Cuenta), /*Relacion con tabla Alumno*/
    FOREIGN KEY (Id_Asignatura) REFERENCES Asignatura(Id_Asignatura) /*Relacion con tabla Asignatura*/
);

CREATE TABLE Asistencias(
    Id_Asistencia INT PRIMARY KEY AUTO_INCREMENT,
    Id_Alumno INT,     /*Llave Foranea*/
    Id_Asignatura INT, /*Llave Foranea*/
    Fecha DATE,
    Hora TIME,
    Asistencia BOOLEAN,
    Justificado BOOLEAN,

    foreign key (Id_Alumno) references Alumno(Numero_Cuenta), /*Relacion con tabla Alumno*/
    foreign key (Id_Asignatura) references Asignatura(Id_Asignatura) /*Relacion con tabla Asignatura*/
);

CREATE TABLE Justificantes(
    ID_Justificante INT PRIMARY KEY AUTO_INCREMENT,
    ID_Asistencia INT, /*Llave Foranea*/
    ID_Alumno INT,   /*Llave Foranea*/
    Fecha DATE,
    Hora TIME,
    Justificado BOOLEAN,
    Motivo VARCHAR(100),

    FOREIGN KEY (ID_Asistencia) REFERENCES Asistencias(Id_Asistencia), /*Relacion con tabla Asistencias */
    FOREIGN KEY (ID_Alumno) REFERENCES Alumno(Numero_Cuenta)  /*Relacion con tabla Alumno*/
);

/*--Tabla de Relacion entre Administrador y Justificante*/
CREATE TABLE Aceptados (
    ID_Justificante INT,
    ID_Administra INT,
    
    FOREIGN KEY (ID_Justificante) REFERENCES Justificantes(ID_Justificante), /*Relacion con tabla de Justificantes*/
    FOREIGN KEY (ID_Administra) REFERENCES Administrador(Numero_Cuenta) /*Relacion con tabla de administradores*/
);

CREATE TABLE Evaluaciones (
    ID_Evaluacion INT PRIMARY KEY AUTO_INCREMENT,
    Id_Alumno INT,   /*Llave Foranea*/
    Parcial1 FLOAT,
    Parcial2 FLOAT,
    Parcial3 FLOAT,
    Calificacion_total FLOAT,

    foreign key (Id_Alumno) references Alumno(Numero_Cuenta) /*Relacion con tabla Alumno*/
);

/*--Tabla de Relacion entre Asignatura y Evaluacion*/
CREATE TABLE Evalua (
    Id_Asignatura INT,
    Id_Evaluacion INT,
    
    FOREIGN KEY (Id_Asignatura) REFERENCES Asignatura(Id_Asignatura),
    FOREIGN KEY (Id_Evaluacion) REFERENCES Evaluaciones(ID_Evaluacion)
);

/*------------------------TABLA de Horarios ------------------*/

CREATE TABLE Horarios (
    Id_Horarios INT PRIMARY KEY AUTO_INCREMENT, 
    Id_Grupos INT,    /*Llave Foranea*/
    Id_Profesor INT,  /*Llave Foranea*/
    Id_Asignatura INT, /*Llave Foranea*/
    Dia VARCHAR(10),
    Hora_inicio TIME,
    Hora_Finalización TIME,

    foreign key (Id_Grupos) references Grupos(Id_Grupos), /*Relacion con tabla Grupos*/
    foreign key (Id_Profesor) references Profesor(Numero_Cuenta), /*Relacion con tabla Profesor*/
    foreign key (Id_Asignatura) references Asignatura(Id_Asignatura) /*Relacion con tabla Asignatura*/

);

INSERT INTO Administrador (Nombre_usuario, Contrasena, Correo, Nombre_Completo, Telefono)
VALUES ('admin0', 'omnissiah', 'admin0@gmail.com', 'Admin cero', '3128429212');

INSERT INTO Profesor (Nombre_usuario, Contrasena, Correo, Nombre_Completo, Telefono, Fecha_nacimiento)
VALUES ('profesordummy', 'secreta123', 'profesor@example.com', 'Profe dummy', '5551234567', '1990-01-01');

INSERT INTO Alumno (Nombre_usuario, Nombre_Completo, Fecha_nacimiento, Correo, Contrasena, Id_Grupo)
VALUES ('alumno123', 'Juan Pérez', '2000-01-01', 'juan@example.com', 'secreta123', NULL);