--
-- PostgreSQL database dump
--

-- Dumped from database version 11.0
-- Dumped by pg_dump version 11.0

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: email; Type: TABLE; Schema: public; Owner: testuser
--

CREATE TABLE public.email (
    id integer,
    email text
);


ALTER TABLE public.email OWNER TO testuser;

--
-- Name: fruit; Type: TABLE; Schema: public; Owner: testuser
--

CREATE TABLE public.fruit (
    id integer,
    name text
);


ALTER TABLE public.fruit OWNER TO testuser;

--
-- Name: meibo; Type: TABLE; Schema: public; Owner: testuser
--

CREATE TABLE public.meibo (
    id integer NOT NULL,
    name text NOT NULL,
    zip character(8),
    address text,
    birth date,
    sex boolean NOT NULL
);


ALTER TABLE public.meibo OWNER TO testuser;

--
-- Name: meibo_id_seq; Type: SEQUENCE; Schema: public; Owner: testuser
--

CREATE SEQUENCE public.meibo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.meibo_id_seq OWNER TO testuser;

--
-- Name: meibo_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: testuser
--

ALTER SEQUENCE public.meibo_id_seq OWNED BY public.meibo.id;


--
-- Name: user_meta; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.user_meta (
    id integer NOT NULL,
    user_id integer NOT NULL,
    meta_key text NOT NULL,
    meta_value text,
    rg_date timestamp without time zone DEFAULT '2021-05-13 12:16:54.487857'::timestamp without time zone NOT NULL,
    up_date timestamp with time zone DEFAULT '2021-05-13 12:18:40.890063+09'::timestamp with time zone NOT NULL
);


ALTER TABLE public.user_meta OWNER TO postgres;

--
-- Name: user_meta_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.user_meta_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_meta_id_seq OWNER TO postgres;

--
-- Name: user_meta_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.user_meta_id_seq OWNED BY public.user_meta.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id integer NOT NULL,
    name text NOT NULL,
    email text NOT NULL,
    gender character(1) NOT NULL,
    age smallint DEFAULT 0 NOT NULL,
    rg_date timestamp without time zone DEFAULT '2021-04-28 16:35:33.432808'::timestamp without time zone NOT NULL,
    up_date timestamp without time zone DEFAULT '2021-04-28 16:35:44.985791'::timestamp without time zone NOT NULL,
    CONSTRAINT users_age_check CHECK ((age > 0)),
    CONSTRAINT users_gender_check CHECK ((gender = ANY (ARRAY['M'::bpchar, 'F'::bpchar])))
);


ALTER TABLE public.users OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: meibo id; Type: DEFAULT; Schema: public; Owner: testuser
--

ALTER TABLE ONLY public.meibo ALTER COLUMN id SET DEFAULT nextval('public.meibo_id_seq'::regclass);


--
-- Name: user_meta id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.user_meta ALTER COLUMN id SET DEFAULT nextval('public.user_meta_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Data for Name: email; Type: TABLE DATA; Schema: public; Owner: testuser
--

COPY public.email (id, email) FROM stdin;
2	ichiro@aaa.com
6	junko@bbb.com
\.


--
-- Data for Name: fruit; Type: TABLE DATA; Schema: public; Owner: testuser
--

COPY public.fruit (id, name) FROM stdin;
1	banana
3	melon
\.


--
-- Data for Name: meibo; Type: TABLE DATA; Schema: public; Owner: testuser
--

COPY public.meibo (id, name, zip, address, birth, sex) FROM stdin;
1	鈴木花子	111-0000	東京都千代田区	1058-01-01	f
2	田中一郎	222-3333	神奈川県横浜市	1078-05-05	t
4	佐藤道子	333-4444	千葉県千葉市	1988-03-03	f
6	石川順子	555-6666	北海道札幌市	2000-05-03	f
3	山田太郎	555-6666	愛知県名古屋市	1998-07-29	t
\.


--
-- Data for Name: user_meta; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.user_meta (id, user_id, meta_key, meta_value, rg_date, up_date) FROM stdin;
2	1	出身地	香美町	2021-05-13 12:16:54.487857	2021-05-13 12:18:40.890063+09
3	2	出身地	加古川市	2021-05-13 12:16:54.487857	2021-05-13 12:18:40.890063+09
4	3	出身地	香美町	2021-05-13 12:16:54.487857	2021-05-13 12:18:40.890063+09
5	4	出身地	姫路市	2021-05-13 12:16:54.487857	2021-05-13 12:18:40.890063+09
6	5	出身地	神戸市	2021-05-13 12:16:54.487857	2021-05-13 12:18:40.890063+09
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (id, name, email, gender, age, rg_date, up_date) FROM stdin;
6	秦 伊吹	hata@sr-co.co.jp	M	22	2021-04-28 16:35:33.432808	2021-04-28 16:35:44.985791
7	豊島 由夏	yuka_t@sr-co.co.jp	M	22	2021-04-28 16:35:33.432808	2021-04-28 16:35:44.985791
8	伊藤 明洋	itou@sr-co.co.jp	M	22	2021-04-28 16:35:33.432808	2021-04-28 16:35:44.985791
9	花岡 宗史	hanaoka@sr-co.co.jp	M	22	2021-04-28 16:35:33.432808	2021-04-28 16:35:44.985791
10	畑本 珠貴	tamaki@sr-co.co.jp	M	22	2021-04-28 16:35:33.432808	2021-04-28 16:35:44.985791
\.


--
-- Name: meibo_id_seq; Type: SEQUENCE SET; Schema: public; Owner: testuser
--

SELECT pg_catalog.setval('public.meibo_id_seq', 6, true);


--
-- Name: user_meta_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.user_meta_id_seq', 6, true);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 10, true);


--
-- Name: user_meta 	user_meta_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.user_meta
    ADD CONSTRAINT "	user_meta_unique" UNIQUE (id) INCLUDE (id);


--
-- Name: meibo meibo_pkey; Type: CONSTRAINT; Schema: public; Owner: testuser
--

ALTER TABLE ONLY public.meibo
    ADD CONSTRAINT meibo_pkey PRIMARY KEY (id);


--
-- Name: user_meta user_meta_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.user_meta
    ADD CONSTRAINT user_meta_pkey PRIMARY KEY (id);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: id_idx; Type: INDEX; Schema: public; Owner: testuser
--

CREATE UNIQUE INDEX id_idx ON public.meibo USING btree (id);


--
-- PostgreSQL database dump complete
--

