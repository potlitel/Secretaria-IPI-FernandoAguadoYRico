-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 20-04-2014 a las 20:44:36
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.1.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `secre`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `db_estudiantes`
-- 

CREATE TABLE `db_estudiantes` (
  `id` int(11) NOT NULL auto_increment,
  `ap_1` text NOT NULL,
  `ap_2` text NOT NULL,
  `nombre` text NOT NULL,
  `ci` text NOT NULL,
  `edad` text NOT NULL,
  `sexo` text NOT NULL,
  `piel` text NOT NULL,
  `ano_ini` text NOT NULL,
  `ano_fin` text NOT NULL,
  `proc_soc_p` text NOT NULL,
  `proc_soc_m` text NOT NULL,
  `calle` text NOT NULL,
  `no_casa` text NOT NULL,
  `apto` text NOT NULL,
  `piso_apto` text NOT NULL,
  `entre_c` text NOT NULL,
  `barrio` text NOT NULL,
  `mcpio_al` text NOT NULL,
  `prov_al` text NOT NULL,
  `tipo_c` text NOT NULL,
  `grado` text NOT NULL,
  `esp_esp` text NOT NULL,
  `esp_art` text NOT NULL,
  `esp_ofic` text NOT NULL,
  `regimen` text NOT NULL,
  `estatus` text NOT NULL,
  `d_sesion` text NOT NULL,
  `no_mat` text NOT NULL,
  `ing_tec_med` text NOT NULL,
  `ing_ofic` text NOT NULL,
  `ing_esp` text NOT NULL,
  `ing_sup_jo` text NOT NULL,
  `nomb_cent` text NOT NULL,
  `sector` text NOT NULL,
  `codigo` text NOT NULL,
  `mcpio_c` text NOT NULL,
  `prov_c` text NOT NULL,
  `fecha` text NOT NULL,
  `repit` text NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=92 ;

-- 
-- Volcar la base de datos para la tabla `db_estudiantes`
-- 

INSERT INTO `db_estudiantes` VALUES (88, 'r', 'r', 'r', 'r', 'r', '---', '---', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', '---', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', '---', 'r', '---', 'images/user/unknow.jpg');
INSERT INTO `db_estudiantes` VALUES (87, 'e', 'e', 'e', 'e', 'e', '---', '---', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', '---', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', '---', 'e', '---', 'images/user/unknow.jpg');
INSERT INTO `db_estudiantes` VALUES (85, 'q', 'q', 'q', 'q', 'q', '---', '---', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', '---', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', '---', 'q', '---', 'images/user/unknow.jpg');
INSERT INTO `db_estudiantes` VALUES (86, 'w', 'w', 'w', 'w', 'w', 'Masculino', '---', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', '---', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', '---', 'w', '---', 'images/user/unknow.jpg');
INSERT INTO `db_estudiantes` VALUES (89, 't', 't', 't', 't', 't', '---', '---', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', '---', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', '---', 't', '---', 'images/user/unknow.jpg');
INSERT INTO `db_estudiantes` VALUES (90, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '');
INSERT INTO `db_estudiantes` VALUES (91, '', '', '', '', '', '---', '---', '', '', '', '', '', '', '', '', '', '', '', '---', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '---', '', '---', 'images/user/unknow.jpg');
