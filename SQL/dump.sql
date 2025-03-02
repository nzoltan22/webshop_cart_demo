--
-- PostgreSQL database dump
--

-- Dumped from database version 16.6 (Ubuntu 16.6-0ubuntu0.24.04.1)
-- Dumped by pg_dump version 16.6 (Ubuntu 16.6-0ubuntu0.24.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: cartsave; Type: TABLE; Schema: public; Owner: pgzoli
--

CREATE TABLE public.cartsave (
    sessionid character(200) NOT NULL,
    data text
);


ALTER TABLE public.cartsave OWNER TO pgzoli;

--
-- Name: products; Type: TABLE; Schema: public; Owner: pgzoli
--

CREATE TABLE public.products (
    id integer NOT NULL,
    title character(100) NOT NULL,
    author character(100) NOT NULL,
    publisher character(20) NOT NULL,
    price integer NOT NULL
);


ALTER TABLE public.products OWNER TO pgzoli;

--
-- Name: products_id_seq; Type: SEQUENCE; Schema: public; Owner: pgzoli
--

CREATE SEQUENCE public.products_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.products_id_seq OWNER TO pgzoli;

--
-- Name: products_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: pgzoli
--

ALTER SEQUENCE public.products_id_seq OWNED BY public.products.id;


--
-- Name: products id; Type: DEFAULT; Schema: public; Owner: pgzoli
--

ALTER TABLE ONLY public.products ALTER COLUMN id SET DEFAULT nextval('public.products_id_seq'::regclass);


--
-- Data for Name: cartsave; Type: TABLE DATA; Schema: public; Owner: pgzoli
--

COPY public.cartsave (sessionid, data) FROM stdin;
iqvuoae0c3rd0l7hnotrc5o7d7                                                                                                                                                                              	a:4:{i:0;i:1003;i:1;i:1004;i:2;i:1003;i:3;i:1003;}
\.


--
-- Data for Name: products; Type: TABLE DATA; Schema: public; Owner: pgzoli
--

COPY public.products (id, title, author, publisher, price) FROM stdin;
1001	Dreamweaver CS4                                                                                     	Janine Warner                                                                                       	PANEM               	3900
1002	JavaScript kliens oldalon                                                                           	Sikos László                                                                                        	BBS-INFO            	2900
1003	Java                                                                                                	Barry Burd                                                                                          	PANEM               	3700
1004	C# 2008                                                                                             	Stephen Randy Davis                                                                                 	PANEM               	3700
1005	Az Ajax alapjai                                                                                     	Joshua Eichorn                                                                                      	PANEM               	4500
1006	Algoritmusok                                                                                        	Ivanyos Gábor, Rónyai Lajos, Szabó Réka                                                             	TYPOTEX             	3600
\.


--
-- Name: products_id_seq; Type: SEQUENCE SET; Schema: public; Owner: pgzoli
--

SELECT pg_catalog.setval('public.products_id_seq', 1, false);


--
-- Name: cartsave cartsave_pkey; Type: CONSTRAINT; Schema: public; Owner: pgzoli
--

ALTER TABLE ONLY public.cartsave
    ADD CONSTRAINT cartsave_pkey PRIMARY KEY (sessionid);


--
-- Name: products products_pkey; Type: CONSTRAINT; Schema: public; Owner: pgzoli
--

ALTER TABLE ONLY public.products
    ADD CONSTRAINT products_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

