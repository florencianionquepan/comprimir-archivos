-- phpMyAdmin SQL Dump
-- version 2.8.1
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 17-08-2012 a las 00:43:05
-- Versión del servidor: 5.0.21
-- Versión de PHP: 5.1.4
-- 
-- Base de datos: `infoArchivosComprimidos`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `archivoComprimido`
-- 

CREATE TABLE `archivoComprimido`(
  `Id` bigint AUTO_INCREMENT,
  `NombreTemp` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `Nombre` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `Tipo` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `Tamanio` float NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



