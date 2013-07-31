--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: estudio; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE estudio (
    id_estudio integer NOT NULL,
    nombre text NOT NULL,
    descripcion character varying(255) NOT NULL,
    fecha_inicio timestamp(0) without time zone NOT NULL,
    situacion smallint NOT NULL,
    ubicacion character varying(200) NOT NULL,
    id_user integer NOT NULL
);


ALTER TABLE public.estudio OWNER TO postgres;

--
-- Name: estudio_id_estudio_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE estudio_id_estudio_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.estudio_id_estudio_seq OWNER TO postgres;

--
-- Name: estudio_id_estudio_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE estudio_id_estudio_seq OWNED BY estudio.id_estudio;


--
-- Name: estudio_id_user_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE estudio_id_user_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.estudio_id_user_seq OWNER TO postgres;

--
-- Name: estudio_id_user_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE estudio_id_user_seq OWNED BY estudio.id_user;


--
-- Name: laravel_migrations; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE laravel_migrations (
    bundle character varying(50) NOT NULL,
    name character varying(200) NOT NULL,
    batch bigint NOT NULL
);


ALTER TABLE public.laravel_migrations OWNER TO postgres;

--
-- Name: usuario; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE usuario (
    id_usuario integer NOT NULL,
    nombre text NOT NULL,
    apellido_paterno text NOT NULL,
    apellido_materno text NOT NULL,
    fecha_nacimiento timestamp(0) without time zone NOT NULL,
    nacionalidad text NOT NULL,
    correo character varying(255) NOT NULL,
    fono bigint NOT NULL,
    fax bigint,
    jerarquia_academica text NOT NULL,
    funcion text NOT NULL,
    jornada text NOT NULL,
    region text,
    ciudad text,
    direccion_particular text NOT NULL,
    formacion_academica character varying(200),
    trabajo_actual character varying(200),
    "cargos_académicos" character varying(200),
    cargos_empresas character varying(200),
    "participación_proyectos_ac_em" character varying(200),
    lineas_desarrollo character varying(200),
    activo smallint NOT NULL
);


ALTER TABLE public.usuario OWNER TO postgres;

--
-- Name: usuario_id_usuario_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE usuario_id_usuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuario_id_usuario_seq OWNER TO postgres;

--
-- Name: usuario_id_usuario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE usuario_id_usuario_seq OWNED BY usuario.id_usuario;


--
-- Name: id_estudio; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY estudio ALTER COLUMN id_estudio SET DEFAULT nextval('estudio_id_estudio_seq'::regclass);


--
-- Name: id_user; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY estudio ALTER COLUMN id_user SET DEFAULT nextval('estudio_id_user_seq'::regclass);


--
-- Name: id_usuario; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario ALTER COLUMN id_usuario SET DEFAULT nextval('usuario_id_usuario_seq'::regclass);


--
-- Data for Name: estudio; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO estudio VALUES (1, 'diplomado en odontologia', 'este diplomado es de vio', '2002-01-30 00:00:00', 1, 'chile', 179915596);
INSERT INTO estudio VALUES (2, 'doctorado', 'este doctorado es para los rati y los carabineros', '2000-05-30 00:00:00', 0, 'españa', 170272374);


--
-- Name: estudio_id_estudio_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('estudio_id_estudio_seq', 1, false);


--
-- Name: estudio_id_user_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('estudio_id_user_seq', 1, false);


--
-- Data for Name: laravel_migrations; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO laravel_migrations VALUES ('application', '2013_07_08_002245_usuario', 1);
INSERT INTO laravel_migrations VALUES ('application', '2013_07_08_002541_estudio', 1);


--
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO usuario VALUES (170272374, 'guillermo', 'rojas', 'lema', '1988-12-20 00:00:00', 'chileno', 'guillermorojaslema@gmail.com', 28231918, NULL, 'academico', 'ayudante', 'part-time', 'metropolitana', 'santiago', 'el partidor 1648', 'pregrado ingenieria en informatica', 'freelancer', 'ayudante', 'programador web', 'servitenn', 'mirame wn soy hermoso, pero con mucho respeto', 1);
INSERT INTO usuario VALUES (179915596, 'cristian', 'garrido', 'amestica', '1991-05-29 00:00:00', 'chileno', 'c-garrido@hotmail.es', 222716985, NULL, 'academico', 'academico', 'fulltime', 'metropolitana', 'santiago', 'ignacio carrera pinta block 111b ', 'postgrado en software libre', 'freelancer', 'academico', 'desarrollador web', 'servitenn', 'que te importa', 1);
INSERT INTO usuario VALUES (84325676, 'carlos', 'solar', 'guerra', '1993-05-27 00:00:00', 'chileno', 'soyhermoso@soyhermoso.com', 872872826027, NULL, 'ayudante', 'ayudante', 'part-time', 'rancagua', 'rancagua', 'comotedejanentraralastiendas', NULL, NULL, NULL, NULL, NULL, NULL, 1);
INSERT INTO usuario VALUES (789607620, 'exequiel', 'arancibia', 'lopez', '1989-02-28 00:00:00', 'peruano', 'soyperueanope@soyperuano.com', 8888, NULL, 'academico', 'academico', 'part-time', NULL, NULL, 'antofa', NULL, NULL, NULL, NULL, NULL, NULL, 0);
INSERT INTO usuario VALUES (89746320, 'claudio', 'acuna', 'acuna', '1990-04-13 00:00:00', 'peruano', 'megutaelpico@megustaelpico.com', 828288865, NULL, 'ayudante', 'perkins', 'media-jornada', NULL, NULL, 'lima', NULL, NULL, NULL, NULL, NULL, NULL, 0);


--
-- Name: usuario_id_usuario_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('usuario_id_usuario_seq', 1, false);


--
-- Name: estudio_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY estudio
    ADD CONSTRAINT estudio_pkey PRIMARY KEY (id_estudio);


--
-- Name: laravel_migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY laravel_migrations
    ADD CONSTRAINT laravel_migrations_pkey PRIMARY KEY (bundle, name);


--
-- Name: usuario_correo_unique; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_correo_unique UNIQUE (correo);


--
-- Name: usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (id_usuario);


--
-- Name: id_user; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY estudio
    ADD CONSTRAINT id_user FOREIGN KEY (id_user) REFERENCES usuario(id_usuario) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

