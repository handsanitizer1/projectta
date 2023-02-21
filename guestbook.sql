-- SQL Manager Lite for PostgreSQL 6.2.0.54471
-- ---------------------------------------
-- Host      : localhost
-- Database  : guestbook
-- Version   : PostgreSQL 14.1, compiled by Visual C++ build 1914, 64-bit



CREATE SCHEMA request AUTHORIZATION nugraha;
CREATE SCHEMA event AUTHORIZATION nugraha;
CREATE SCHEMA users AUTHORIZATION nugraha;
SET check_function_bodies = false;
--
-- Definition for sequence visitor_id_seq (OID = 16422) : 
--
SET search_path = users, pg_catalog;
CREATE SEQUENCE users.visitor_id_seq
    START WITH 1
    INCREMENT BY 1
    MAXVALUE 2147483647
    NO MINVALUE
    CACHE 1;
--
-- Structure for table employee (OID = 16432) : 
--
CREATE TABLE users.employee (
    id serial NOT NULL,
    "employee_Name" varchar(200) NOT NULL,
    "employee_Telephone" varchar(20) NOT NULL,
    "employee_Email" varchar(100) NOT NULL,
    "employee_JobPosition" varchar(150) NOT NULL,
    is_deleted boolean DEFAULT false NOT NULL
)
WITH (oids = false);
--
-- Structure for table event (OID = 16495) : 
--
SET search_path = event, pg_catalog;
CREATE TABLE event.event (
    id serial NOT NULL,
    event_name varchar(200) NOT NULL,
    event_description text NOT NULL,
    event_at date NOT NULL,
    event_start time(0) without time zone NOT NULL,
    is_deleted boolean DEFAULT false NOT NULL,
    event_end time(0) without time zone NOT NULL
)
WITH (oids = false);
--
-- Structure for table attendance (OID = 16520) : 
--
SET search_path = request, pg_catalog;
CREATE TABLE request.attendance (
    id serial NOT NULL,
    id_participant integer NOT NULL,
    att_ischeckin boolean DEFAULT false NOT NULL,
    att_checkinat time(0) without time zone,
    att_checkoutat time(0) without time zone,
    att_meettime varchar(100),
    is_deleted boolean DEFAULT false NOT NULL
)
WITH (oids = false);
--
-- Structure for table participant (OID = 16529) : 
--
CREATE TABLE request.participant (
    id serial NOT NULL,
    id_user integer,
    id_employee integer,
    id_event integer,
    event_at date NOT NULL,
    event_start time(0) without time zone NOT NULL,
    event_name varchar(200) NOT NULL,
    employee_status boolean,
    employee_reason varchar(200),
    is_deleted boolean DEFAULT false NOT NULL,
    is_done boolean DEFAULT false NOT NULL
)
WITH (oids = false);
--
-- Structure for table user_session (OID = 16557) : 
--
SET search_path = users, pg_catalog;
CREATE TABLE users.user_session (
    id serial NOT NULL,
    id_user integer NOT NULL,
    token varchar(200),
    expired_at integer,
    login_at integer,
    is_login boolean DEFAULT true
)
WITH (oids = false);
--
-- Structure for table users (OID = 16586) : 
--
SET search_path = public, pg_catalog;
CREATE TABLE public.users (
    id serial NOT NULL,
    user_name varchar(200) NOT NULL,
    user_gender integer NOT NULL,
    user_address text,
    user_telephone varchar(20) NOT NULL,
    user_email varchar(100) NOT NULL,
    user_password varchar(100) NOT NULL,
    user_role integer NOT NULL,
    is_deleted boolean DEFAULT false NOT NULL
)
WITH (oids = false);
--
-- Structure for table users (OID = 16601) : 
--
SET search_path = users, pg_catalog;
CREATE TABLE users.users (
    id serial NOT NULL,
    user_name varchar(200) NOT NULL,
    user_gender integer,
    user_address text,
    user_telephone varchar(20) NOT NULL,
    user_email varchar(100) NOT NULL,
    user_password varchar(100) NOT NULL,
    user_role integer NOT NULL,
    is_deleted boolean DEFAULT false NOT NULL
)
WITH (oids = false);
--
-- Data for table users.employee (OID = 16432) (LIMIT 0,1)
--
INSERT INTO employee (id, "employee_Name", "employee_Telephone", "employee_Email", "employee_JobPosition", is_deleted)
VALUES (1, 'Nugraha', '0813 3691 6070', 'nugrahaazka24@gmail.com', 'Human  Resource', false);

SET search_path = event, pg_catalog;
SET search_path = request, pg_catalog;
SET search_path = users, pg_catalog;
--
-- Data for table users.user_session (OID = 16557) (LIMIT 0,22)
--
INSERT INTO user_session (id, id_user, token, expired_at, login_at, is_login)
VALUES (1, 2, 'f6389fc150e73f36391e21df4bae6ba5c88e3fd4a30e7e4a974ae06c21803bb3', 1679157296, 1676741696, false);

INSERT INTO user_session (id, id_user, token, expired_at, login_at, is_login)
VALUES (2, 2, '690bd3977cd69c1f5553bfb7f47082e4d6605a16977206109b379a6eb5f0cdb1', 1679272409, 1676856809, false);

INSERT INTO user_session (id, id_user, token, expired_at, login_at, is_login)
VALUES (3, 2, '907cbab3f7607754de0ea1c0f26ce0b062aea38b6d50a2c73ab94d4a28f56062', 1679272709, 1676857109, false);

INSERT INTO user_session (id, id_user, token, expired_at, login_at, is_login)
VALUES (4, 2, 'bfaabc0ac30370bc9672f6cfa3a6315b17af1fee7f806189322c05630cd236c7', 1679272844, 1676857244, false);

INSERT INTO user_session (id, id_user, token, expired_at, login_at, is_login)
VALUES (5, 2, 'a428fe21f0f2c396aea5844d1fff4f0c6fd9c026abac355819de1230f4f31b50', 1679272935, 1676857335, false);

INSERT INTO user_session (id, id_user, token, expired_at, login_at, is_login)
VALUES (6, 2, 'dc059f983256c4180c99bf3cf8ac3a82c2dc7e41987fb51850753c3b3d9fc4cb', 1679272970, 1676857370, false);

INSERT INTO user_session (id, id_user, token, expired_at, login_at, is_login)
VALUES (7, 2, '8bd825b34ddd2c5e762a59db485ebdcda26d104a8fd89452bbf727eb5678ca7a', 1679273128, 1676857528, false);

INSERT INTO user_session (id, id_user, token, expired_at, login_at, is_login)
VALUES (8, 2, '9a601dc346faf2722e8b7edb30b370cb6afbdb99b3364ceca44b41ec59d33b61', 1679273336, 1676857736, false);

INSERT INTO user_session (id, id_user, token, expired_at, login_at, is_login)
VALUES (9, 2, '6d6714aa2e9530f40041ccd5daf04874aff483d757c486400c635a294d9444c7', 1679273353, 1676857753, false);

INSERT INTO user_session (id, id_user, token, expired_at, login_at, is_login)
VALUES (10, 2, '6024748a64ff0de66f2fc597ff3b1c04bf52191107ac9b9110770d742ebd97a1', 1679275083, 1676859483, false);

INSERT INTO user_session (id, id_user, token, expired_at, login_at, is_login)
VALUES (11, 2, 'e72f02ceef6742649b09fcf95c48c8b2b7f288785cfa929709364d1fcc2fe0f5', 1679278997, 1676863397, false);

INSERT INTO user_session (id, id_user, token, expired_at, login_at, is_login)
VALUES (13, 8, '82e623f300ef3ab3e999fd5a785709d8727316cb0df85ca5733bb8d94305843c', 1679376679, 1676961079, true);

INSERT INTO user_session (id, id_user, token, expired_at, login_at, is_login)
VALUES (12, 2, '545793b736f9b12871789f4628c4d9b166ece2eb072d8d24ace51d6590778832', 1679303821, 1676888221, false);

INSERT INTO user_session (id, id_user, token, expired_at, login_at, is_login)
VALUES (14, 9, '04e73724df805deeceb15aa752be91a5d7857dc4aa60f835eb81abde94bc1178', 1679379995, 1676964395, false);

INSERT INTO user_session (id, id_user, token, expired_at, login_at, is_login)
VALUES (15, 9, '9adc90a53a86a97b5faea6e76dc6b9d57cf5a9f0cbccb488f0e79920be3b60e5', 1679380370, 1676964770, false);

INSERT INTO user_session (id, id_user, token, expired_at, login_at, is_login)
VALUES (16, 9, '9318884375802c106ec892d77e88bdcdc53890ab296f79613b975bc9cec55e6b', 1679380470, 1676964870, false);

INSERT INTO user_session (id, id_user, token, expired_at, login_at, is_login)
VALUES (17, 9, '39c20fba54e7a22bfb01b34b129727b275ec095d103119d556109b9bbdade239', 1679380586, 1676964986, false);

INSERT INTO user_session (id, id_user, token, expired_at, login_at, is_login)
VALUES (18, 9, '45e4a57fe4d34db643ac495ba1a9ef196924757cd1dbf5d92dc66e709fbc5cfa', 1679380678, 1676965078, false);

INSERT INTO user_session (id, id_user, token, expired_at, login_at, is_login)
VALUES (19, 9, '706af159a1695eee82f539c3b8547a4736ff03ccc97bc5f2b7d08355307914b8', 1679381588, 1676965988, false);

INSERT INTO user_session (id, id_user, token, expired_at, login_at, is_login)
VALUES (20, 9, '1c0aa26c037baabc0d1e4820f940740c3e386cb6ba60ec31418997712bf0ffb2', 1679385151, 1676969551, false);

INSERT INTO user_session (id, id_user, token, expired_at, login_at, is_login)
VALUES (22, 9, '2e39fda06398d9b1f1d86abf0a8b1d2485dbf147d82af10b9220b63cdb0ced0b', 1679400466, 1676984866, true);

INSERT INTO user_session (id, id_user, token, expired_at, login_at, is_login)
VALUES (21, 9, '884b3d70f5a6327ea3dc016d687a603d837871ea29efd8ac221139cc0cec6b55', 1679397914, 1676982314, false);

SET search_path = public, pg_catalog;
SET search_path = users, pg_catalog;
--
-- Data for table users.users (OID = 16601) (LIMIT 0,8)
--
INSERT INTO users (id, user_name, user_gender, user_address, user_telephone, user_email, user_password, user_role, is_deleted)
VALUES (2, 'Nugraha', 0, NULL, '0813', 'nugraha@gmail.com', '1234', 1, false);

INSERT INTO users (id, user_name, user_gender, user_address, user_telephone, user_email, user_password, user_role, is_deleted)
VALUES (4, 'Nugraha Azka', NULL, 'Kota Batu', '081336916070', 'nugrahaazka24@gmail.com', '$2y$10$K41wWLN1YZIaBEbNsEWX2eFm4qRTizgn4tepgIcgLbS57HkNwfYx6', 3, false);

INSERT INTO users (id, user_name, user_gender, user_address, user_telephone, user_email, user_password, user_role, is_deleted)
VALUES (3, 'Nugraha Azka', NULL, 'Kota Batu', '081336916070', 'nugrahaazka24@gmail.com', '123456', 3, false);

INSERT INTO users (id, user_name, user_gender, user_address, user_telephone, user_email, user_password, user_role, is_deleted)
VALUES (5, 'abcdef', NULL, 'Jakarta , Indonesia', '0813123456', 'coba@gmail.com', '$2y$10$CqW1fUwUvx/KiZOT78SHhOMb9aVXxwb9/FyjfGhVCJt28J7oYC/2S', 3, false);

INSERT INTO users (id, user_name, user_gender, user_address, user_telephone, user_email, user_password, user_role, is_deleted)
VALUES (6, 'qwertyuiop', NULL, 'London , UK', '089876543212', 'tes@gmail.com', '$2y$10$rax9TuH/TV1hHECi1JPd8edy46k9zXahbTWW5p26vFQ8cMBhfKEFC', 3, false);

INSERT INTO users (id, user_name, user_gender, user_address, user_telephone, user_email, user_password, user_role, is_deleted)
VALUES (7, 'POIUYTREWQ', NULL, 'Beijing , China', '0812345678676', 'nugraha@gmail.com', '$2y$10$LTP5O3ys7W8xCHaIBIBG7eJHIuiTnF.yhIZ/UcsgdVOn3ujOYdhJG', 3, false);

INSERT INTO users (id, user_name, user_gender, user_address, user_telephone, user_email, user_password, user_role, is_deleted)
VALUES (8, 'Nugrahaa', NULL, 'Batu, Indonesia', '08989898989', 'nugrahaa@gmail.com', '$2y$10$gCDkuit2GVUs27t8IZGGQOb7JZQGQ5psZVL.f8AQA9kDj7UCMdDpG', 3, false);

INSERT INTO users (id, user_name, user_gender, user_address, user_telephone, user_email, user_password, user_role, is_deleted)
VALUES (9, 'Nugraha Azka Mahindra ', NULL, 'JL. Masbro', '081336916070', 'aabbccdd@gmail.com', '$2y$10$KG/UgiPNqMysf0mPQY/VzubX7VoxJFUj2wkyb1qWr8tur6AxMmVc2', 1, false);

--
-- Definition for index employee_pkey (OID = 16437) : 
--
ALTER TABLE ONLY employee
    ADD CONSTRAINT employee_pkey
    PRIMARY KEY (id);
--
-- Definition for index event_pkey (OID = 16502) : 
--
SET search_path = event, pg_catalog;
ALTER TABLE ONLY event
    ADD CONSTRAINT event_pkey
    PRIMARY KEY (id);
--
-- Definition for index attendance_pkey (OID = 16526) : 
--
SET search_path = request, pg_catalog;
ALTER TABLE ONLY attendance
    ADD CONSTRAINT attendance_pkey
    PRIMARY KEY (id);
--
-- Definition for index participant_pkey (OID = 16534) : 
--
ALTER TABLE ONLY participant
    ADD CONSTRAINT participant_pkey
    PRIMARY KEY (id);
--
-- Definition for index attendance_fk (OID = 16536) : 
--
ALTER TABLE ONLY attendance
    ADD CONSTRAINT attendance_fk
    FOREIGN KEY (id_participant) REFERENCES participant(id) ON UPDATE CASCADE ON DELETE CASCADE;
--
-- Definition for index participant_fk (OID = 16541) : 
--
ALTER TABLE ONLY participant
    ADD CONSTRAINT participant_fk
    FOREIGN KEY (id_employee) REFERENCES users.employee(id) ON UPDATE CASCADE ON DELETE CASCADE;
--
-- Definition for index participant_fk1 (OID = 16546) : 
--
ALTER TABLE ONLY participant
    ADD CONSTRAINT participant_fk1
    FOREIGN KEY (id_event) REFERENCES event.event(id) ON UPDATE CASCADE ON DELETE CASCADE;
--
-- Definition for index user_session_pkey (OID = 16562) : 
--
SET search_path = users, pg_catalog;
ALTER TABLE ONLY user_session
    ADD CONSTRAINT user_session_pkey
    PRIMARY KEY (id);
--
-- Definition for index users_pkey (OID = 16593) : 
--
SET search_path = public, pg_catalog;
ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey
    PRIMARY KEY (id);
--
-- Definition for index participant_fk2 (OID = 16595) : 
--
SET search_path = request, pg_catalog;
ALTER TABLE ONLY participant
    ADD CONSTRAINT participant_fk2
    FOREIGN KEY (id_user) REFERENCES users.user_session(id) ON UPDATE CASCADE ON DELETE CASCADE;
--
-- Definition for index users_pkey (OID = 16608) : 
--
SET search_path = users, pg_catalog;
ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey
    PRIMARY KEY (id);
--
-- Definition for index user_session_fk (OID = 16611) : 
--
ALTER TABLE ONLY user_session
    ADD CONSTRAINT user_session_fk
    FOREIGN KEY (id_user) REFERENCES users(id) ON UPDATE CASCADE ON DELETE CASCADE;
--
-- Data for sequence users.visitor_id_seq (OID = 16422)
--
SELECT pg_catalog.setval('visitor_id_seq', 1, false);
--
-- Data for sequence users.employee_id_seq (OID = 16431)
--
SELECT pg_catalog.setval('employee_id_seq', 3, true);
--
-- Data for sequence event.event_id_seq (OID = 16494)
--
SET search_path = event, pg_catalog;
SELECT pg_catalog.setval('event_id_seq', 1, false);
--
-- Data for sequence request.attendance_id_seq (OID = 16519)
--
SET search_path = request, pg_catalog;
SELECT pg_catalog.setval('attendance_id_seq', 1, true);
--
-- Data for sequence request.participant_id_seq (OID = 16528)
--
SELECT pg_catalog.setval('participant_id_seq', 1, true);
--
-- Data for sequence users.user_session_id_seq (OID = 16556)
--
SET search_path = users, pg_catalog;
SELECT pg_catalog.setval('user_session_id_seq', 22, true);
--
-- Data for sequence public.users_id_seq (OID = 16585)
--
SET search_path = public, pg_catalog;
SELECT pg_catalog.setval('users_id_seq', 1, false);
--
-- Data for sequence users.users_id_seq (OID = 16600)
--
SET search_path = users, pg_catalog;
SELECT pg_catalog.setval('users_id_seq', 9, true);
--
-- Comments
--
COMMENT ON SCHEMA public IS 'standard public schema';
SET search_path = public, pg_catalog;
COMMENT ON COLUMN public.users.user_gender IS '0 : Men
1 : Woman';
COMMENT ON COLUMN public.users.user_role IS '0 : SuperAdmin
1 : Admin
2 : Employee
3 : Visitor';
SET search_path = users, pg_catalog;
COMMENT ON COLUMN users.users.user_gender IS '1 :Male
2 :Female';
COMMENT ON COLUMN users.users.user_role IS '0 : SuperAdmin
1 : Admin
2 : Employee
3 : Visitor';
