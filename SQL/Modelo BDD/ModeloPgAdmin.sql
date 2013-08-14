BEGIN TRANSACTION;

DROP TABLE IF EXISTS usuarios CASCADE;
CREATE TABLE usuarios (
    pk serial NOT NULL,
    rut int NOT NULL,
    nombre varchar(100) NOT NULL,
    permiso boolean DEFAULT false,
    email varchar(150),
    fecha_nacimiento date,
    nacionalidad varchar(50),
    estado_civil varchar(50),
    fecha_actualizacion timestamp with time zone DEFAULT now() NOT NULL,
    
    UNIQUE (rut),
    PRIMARY KEY (pk)
);


DROP TABLE IF EXISTS accesos CASCADE;
CREATE TABLE accesos (
    pk bigserial NOT NULL,
    usuario_fk int NOT NULL REFERENCES usuarios(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    fecha timestamp NOT NULL DEFAULT NOW(),
    ip inet NOT NULL DEFAULT '127.0.0.1',
    PRIMARY KEY (pk)
);


DROP TABLE IF EXISTS estudios CASCADE;
CREATE TABLE estudios (
    pk bigserial NOT NULL,
    usuario_fk int NOT NULL REFERENCES usuarios(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    titulo varchar(150) NOT NULL,
    grado_academico varchar(100) NOT NULL,
    institucion varchar(100) NOT NULL,
    fecha date NOT NULL,
    pais varchar(100) NOT NULL,
    fecha_actualizacion timestamp with time zone DEFAULT now() NOT NULL,

    PRIMARY KEY (pk)
);


COMMIT;
