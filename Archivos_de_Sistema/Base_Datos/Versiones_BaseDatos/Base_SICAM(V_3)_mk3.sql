CREATE DATABASE Base_SICAM;

USE Base_SICAM;

CREATE TABLE Grupos (
    Id_Grupos INT(10) PRIMARY KEY AUTO_INCREMENT,
    Grado VARCHAR(10),
    Grupo VARCHAR(10)
);

/*------------------------TABLAS de Usuarios ------------------*/

CREATE Table Alumno(
    Numero_Cuenta int(10) primary key NOT NULL,
    Nombre_usuario varchar(50),
    Nombre varchar(50),
    Apellidos varchar(50),
    Fecha_nacimiento date,
    Correo varchar(50),
    Contrasena varchar(50),
    Id_Grupo int(10), /*Llave Foranea*/

    foreign key (Id_Grupo) references Grupos(Id_Grupos) /*Relacion con tabla Grupos*/

);

CREATE TABLE Profesor (
    Numero_Cuenta INT PRIMARY KEY NOT NULL,
    Nombre_usuario varchar(50),
    Contraseña VARCHAR(50),
    Correo VARCHAR(50),
    Nombre VARCHAR(50),
    Telefono VARCHAR(15),
    Fecha_nacimiento date,
    Apellidos VARCHAR(50)
);

CREATE TABLE Administrador (
    Numero_Cuenta INT PRIMARY KEY NOT NULL,
    Nombre_usuario varchar(50),
    Contraseña VARCHAR(50),
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
    
    FOREIGN KEY (Id_Asignatura) REFERENCES Asignatura(Id_Asignatura),
    FOREIGN KEY (Id_Profesor) REFERENCES Profesor(Numero_Cuenta)
);

CREATE TABLE Asistencias_Asignatura (
    Id_AsisAsig INT PRIMARY KEY AUTO_INCREMENT,
    Id_Alumno INT,     /*Llave Foranea*/
    Id_Asignatura INT, /*Llave Foranea*/
    Fecha DATE,
    Hora TIME,
    Asistencia BOOLEAN,
    Justificado BOOLEAN,

    foreign key (Id_Alumno) references Alumno(Numero_Cuenta), /*Relacion con tabla Alumno*/
    foreign key (Id_Asignatura) references Asignatura(Id_Asignatura) /*Relacion con tabla Asignatura*/
);

CREATE TABLE Justificaciones_Asignatura (
    ID_JustificacionAsig INT PRIMARY KEY AUTO_INCREMENT,
    ID_AsisAsig INT, /*Llave Foranea*/
    ID_Alumno INT,   /*Llave Foranea*/
    Fecha DATE,
    Hora TIME,
    Justificado BOOLEAN,
    Motivo VARCHAR(100),

    FOREIGN KEY (ID_AsisAsig) REFERENCES Asistencias_Asignatura(Id_AsisAsig), /*Relacion con tabla Asistencias_Asignatura*/
    FOREIGN KEY (ID_Alumno) REFERENCES Alumno(Numero_Cuenta)  /*Relacion con tabla Alumno*/
);

/*--Tabla de Relacion entre Administrador y Justificante*/
CREATE TABLE Administra_JAsig (
    ID_Justificante INT,
    ID_Administra INT,
    
    FOREIGN KEY (ID_Justificante) REFERENCES Justificaciones_Asignatura(ID_JustificacionAsig),
    FOREIGN KEY (ID_Administra) REFERENCES Administrador(Numero_Cuenta)
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


/*------------------------TABLAS con relacion a Clubes ------------------*/

CREATE TABLE Club (
    Id_Club INT PRIMARY KEY AUTO_INCREMENT,
    Nombre VARCHAR(50),
    Descripción VARCHAR(100)
);

/*--Tabla de relacion entre Alumnos y Club*/
CREATE TABLE Inscrito (
    Id_Club INT,
    Id_Alumno INT,
    
    FOREIGN KEY (Id_Alumno) REFERENCES Alumno(Numero_Cuenta),
    FOREIGN KEY (Id_Club) REFERENCES Club(Id_Club)
);

CREATE TABLE Asistencias_Club (
    Id_AsisClub INT PRIMARY KEY AUTO_INCREMENT,
    Id_Alumno INT,  /*Llave Foranea*/
    Id_Club INT,    /*Llave Foranea*/
    Fecha DATE,
    Hora TIME,
    Asistencia BOOLEAN,
    Justificado BOOLEAN,

    foreign key (Id_Alumno) references Alumno(Numero_Cuenta), /*Relacion con tabla Alumno*/
    foreign key (Id_Club) references Club(Id_Club) /*Relacion con tabla Club*/
);

CREATE TABLE Justificaciones_Club (
    ID_JustificacionClub INT PRIMARY KEY AUTO_INCREMENT,
    ID_AsisClub INT, /*Llave Foranea*/
    ID_Alumno INT,  /*Llave Foranea*/
    Fecha DATE,
    Hora TIME,
    Justificado BOOLEAN,
    Motivo VARCHAR(100),

    foreign key (ID_AsisClub) references Asistencias_Club(Id_AsisClub), /*Relacion con tabla Asistencias_Club*/
    foreign key (ID_Alumno) references Alumno(Numero_Cuenta) /*Relacion con tabla Alumno*/

);

/*--Tabla de relacion entre Justificaciones_Club y Administrador*/
CREATE TABLE Administra_JClub (
    ID_Justificante INT,
    ID_Admin INT,
    
    FOREIGN KEY (ID_Justificante) REFERENCES Justificaciones_Club(ID_JustificacionClub),
    FOREIGN KEY (ID_Admin) REFERENCES Administrador(Numero_Cuenta)
);








