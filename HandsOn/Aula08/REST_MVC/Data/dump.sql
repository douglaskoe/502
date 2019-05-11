--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
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
-- Name: produtos; Type: TABLE; Schema: public; Owner: aplicacao; Tablespace: 
--

CREATE TABLE produtos (
    id integer NOT NULL,
    nome character varying(60),
    preco double precision,
    categoria character varying(40)
);


ALTER TABLE produtos OWNER TO aplicacao;

--
-- Name: produtos_id_seq; Type: SEQUENCE; Schema: public; Owner: aplicacao
--

CREATE SEQUENCE produtos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE produtos_id_seq OWNER TO aplicacao;

--
-- Name: produtos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: aplicacao
--

ALTER SEQUENCE produtos_id_seq OWNED BY produtos.id;


--
-- Name: usuarios; Type: TABLE; Schema: public; Owner: aplicacao; Tablespace: 
--

CREATE TABLE usuarios (
    id integer NOT NULL,
    nome character varying(100),
    email character varying(80),
    senha character varying(15)
);


ALTER TABLE usuarios OWNER TO aplicacao;

--
-- Name: usuarios_id_seq; Type: SEQUENCE; Schema: public; Owner: aplicacao
--

CREATE SEQUENCE usuarios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE usuarios_id_seq OWNER TO aplicacao;

--
-- Name: usuarios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: aplicacao
--

ALTER SEQUENCE usuarios_id_seq OWNED BY usuarios.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: aplicacao
--

ALTER TABLE ONLY produtos ALTER COLUMN id SET DEFAULT nextval('produtos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: aplicacao
--

ALTER TABLE ONLY usuarios ALTER COLUMN id SET DEFAULT nextval('usuarios_id_seq'::regclass);


--
-- Data for Name: produtos; Type: TABLE DATA; Schema: public; Owner: aplicacao
--

COPY produtos (id, nome, preco, categoria) FROM stdin;
252	Notebook Core i7	3500	Notebooks
240	Mouse Optico	38	Acessorios
258	Monitor LG	350	Computadores
260	Novo Cadastro	89	teste
253	Notebook Core i5	3500	Notebooks
\.


--
-- Name: produtos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: aplicacao
--

SELECT pg_catalog.setval('produtos_id_seq', 260, true);


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: aplicacao
--

COPY usuarios (id, nome, email, senha) FROM stdin;
1	Administrador do Sistema	admin@app.com	123456
\.


--
-- Name: usuarios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: aplicacao
--

SELECT pg_catalog.setval('usuarios_id_seq', 1, true);


--
-- Name: produtos_pkey; Type: CONSTRAINT; Schema: public; Owner: aplicacao; Tablespace: 
--

ALTER TABLE ONLY produtos
    ADD CONSTRAINT produtos_pkey PRIMARY KEY (id);


--
-- Name: usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: aplicacao; Tablespace: 
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id);


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

