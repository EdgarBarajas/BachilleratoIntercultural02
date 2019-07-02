-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 02-07-2019 a las 15:42:22
-- Versión del servidor: 5.7.23-23
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bachill1_bachillerato`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `correo` text NOT NULL,
  `password` text NOT NULL,
  `semestre` text NOT NULL,
  `fecha_ingreso` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `correo`, `password`, `semestre`, `fecha_ingreso`) VALUES
(1, 'Cortes Sanchez Maria Isabel', 'mariaisabel@gmail.com', '123', '1', ''),
(2, 'Cortes Velazquez Obed Edom', 'obededom@gmail.com', '123', '2', ''),
(3, 'Fernandez Perez Victor Hugo', 'victorhugo@gmail.com', '321', '3', ''),
(4, 'Garcia Perez Dulce Tania', 'dulcetania@gmail.com', '123', '4', ''),
(5, 'Deaquino Guzman Guillermina', 'guillermina@gmail.com', '123', '5', ''),
(6, 'Guzman Garcia Geydi', 'geydi@gmail.com', '123', '6', ''),
(7, 'zzz', 'z2@a.com', '123', '6', '2019-06-26 17:35:19'),
(8, 'az', 'abcd@gmail.com', '123', '1', '2019-06-26 17:36:29'),
(9, 'aza', 'a@a.com', '123', '6', '2019-06-26 17:40:30'),
(10, 'xzx', 'v@cf.v', '123', '6', '2019-06-26 17:42:05'),
(12, 'Soto Mercado Julian ', 'julian@gmail.com', '123', '1', '2019-06-26 18:17:11'),
(13, 'Velazquez Perez Juan', 'juan@gmail.com', '123', '1', '2019-06-30 11:32:02'),
(14, 'SACNITE GUERRERO R', 'sasdfsf@dfsadf.com', '123456', '1', '2019-07-02 12:42:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos_pub`
--

CREATE TABLE `archivos_pub` (
  `id` int(11) NOT NULL,
  `docente` text NOT NULL,
  `nombre` text NOT NULL,
  `identificador` text NOT NULL,
  `fecha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `archivos_pub`
--

INSERT INTO `archivos_pub` (`id`, `docente`, `nombre`, `identificador`, `fecha`) VALUES
(1, 'Hugo Alberto', 'Definicion telematica.pdf', '5CPaupEVADELJT0NDStq', '25-06-2019'),
(2, 'Hugo Alberto', 'telematica.docx', '5CPaupEVADELJT0NDStq', '25-06-2019');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `comentario` text NOT NULL,
  `fecha` text NOT NULL,
  `id_pub` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `usuario`, `comentario`, `fecha`, `id_pub`) VALUES
(1, 'mariaisabel@gmail.com', 'Gracias maestro, nos vemos.\r\nSaludos!', '2019-06-25 19:55:39', 1),
(2, 'obededom@gmail.com', 'Llevare mi lap profe.. nos vemos\r\n', '2019-06-25 19:57:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id_docente` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `correo` text NOT NULL,
  `password` text NOT NULL,
  `identificador_docente` text NOT NULL,
  `fecha_registro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id_docente`, `nombre`, `correo`, `password`, `identificador_docente`, `fecha_registro`) VALUES
(1, 'Hugo Alberto', 'cruz20_trujillo@hotmail.com', '123', 'identificador', ''),
(2, 'Heydi Laura', '21ebw0002.sep@gmail.com', '123', '', ''),
(3, 'Erica', 'erica1607199@gmail.com', '123', '', ''),
(4, 'Francisca', 'perezfran0001@gmail.com', '123', '', '2019-05-27 12:07:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos_pub`
--

CREATE TABLE `fotos_pub` (
  `id` int(11) NOT NULL,
  `docente` text NOT NULL,
  `nombre` text NOT NULL,
  `identificador` text NOT NULL,
  `fecha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fotos_pub`
--

INSERT INTO `fotos_pub` (`id`, `docente`, `nombre`, `identificador`, `fecha`) VALUES
(1, 'Hugo Alberto', 'Telematica.jpg', '5CPaupEVADELJT0NDStq', '25-06-2019'),
(2, 'Hugo Alberto', 'Telematica2.jpg', '5CPaupEVADELJT0NDStq', '25-06-2019');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nombre_docente` text NOT NULL,
  `correo_docente` text NOT NULL,
  `materia` text NOT NULL,
  `semestre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre_docente`, `correo_docente`, `materia`, `semestre`) VALUES
(1, '', 'cruz20_trujillo@hotmail.com', 'MATEMÁTICAS I', '1'),
(2, '', 'cruz20_trujillo@hotmail.com', 'FISICA I', '1'),
(3, '', 'cruz20_trujillo@hotmail.com', 'QUIMICA I', '1'),
(4, '', 'cruz20_trujillo@hotmail.com', 'CONTEXTO SOCIAL NAL. REG. COMUNITARIO', '1'),
(5, '', 'cruz20_trujillo@hotmail.com', 'CULTURA Y LENGUA INDIGENA I', '1'),
(6, '', 'cruz20_trujillo@hotmail.com', 'ESPAÑOL I', '1'),
(7, '', 'cruz20_trujillo@hotmail.com', 'INGLES I', '1'),
(8, '', 'cruz20_trujillo@hotmail.com', 'TIC I', '1'),
(9, '', 'cruz20_trujillo@hotmail.com', 'VINULACIÓN COMUNITARIA', '1'),
(12, '', 'cruz20_trujillo@hotmail.com', 'TIC IV', '6'),
(13, '', 'cruz20_trujillo@hotmail.com', 'CULTURA Y LENGUA INDIGENA  IV', '5'),
(14, '', 'cruz20_trujillo@hotmail.com', 'CULTURA Y LENGUA II', '2'),
(15, '', 'cruz20_trujillo@hotmail.com', 'MATEMÁTICAS II', '5'),
(16, '', 'cruz20_trujillo@hotmail.com', 'VINCULACION COMUNITARIA VI', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `correo_docente` text NOT NULL,
  `nombre_docente` text NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion_breve` text NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `identificador` text NOT NULL,
  `links` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `news`
--

INSERT INTO `news` (`id`, `correo_docente`, `nombre_docente`, `titulo`, `descripcion_breve`, `descripcion`, `imagen`, `fecha`, `identificador`, `links`) VALUES
(1, 'cruz20_trujillo@hotmail.com', 'Hugo Alberto', 'Recursos para el curso de Telemática', 'Chicos de 2do semestre aquí les dejo los recursos que necesitaran para el curso de telemática', 'El curso se llevará a cabo el día viernes, llevar libreta y computadora.\r\nSerá en la sala audiovisual a las 11 horas.\r\nSaludos!', 'no hay imagen principal', '25-06-2019', '5CPaupEVADELJT0NDStq', 'https://www.unadmexico.mx/index.php/licenciaturas/telematica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semetre_1`
--

CREATE TABLE `semetre_1` (
  `id` int(11) NOT NULL,
  `alumno` text NOT NULL,
  `matematicas1` text NOT NULL,
  `matematicas2` text NOT NULL,
  `matematicas3` text NOT NULL,
  `promedio_matematicas` text NOT NULL,
  `final_matematicas` text NOT NULL,
  `fisica1` text NOT NULL,
  `fisica2` text NOT NULL,
  `fisica3` text NOT NULL,
  `promedio_fisica` text NOT NULL,
  `final_fisica` text NOT NULL,
  `quimica1` text NOT NULL,
  `quimica2` text NOT NULL,
  `quimica3` text NOT NULL,
  `promedio_quimica` text NOT NULL,
  `final_quimica` text NOT NULL,
  `contextosocial1` text NOT NULL,
  `contextosocial2` text NOT NULL,
  `contextosocial3` text NOT NULL,
  `promedio_contextos` text NOT NULL,
  `final_contextos` text NOT NULL,
  `cultura1` text NOT NULL,
  `cultura2` text NOT NULL,
  `cultura3` text NOT NULL,
  `promedio_cultura` text NOT NULL,
  `final_cultura` text NOT NULL,
  `espanol1` text NOT NULL,
  `espanol2` text NOT NULL,
  `espanol3` text NOT NULL,
  `promedio_espanol` text NOT NULL,
  `final_espanol` text NOT NULL,
  `ingles1` text NOT NULL,
  `ingles2` text NOT NULL,
  `ingles3` text NOT NULL,
  `promedio_ingles` text NOT NULL,
  `final_ingles` text NOT NULL,
  `tic1` text NOT NULL,
  `tic2` text NOT NULL,
  `tic3` text NOT NULL,
  `promedio_tic` text NOT NULL,
  `final_tic` text NOT NULL,
  `vinculacion1` text NOT NULL,
  `vinculacion2` text NOT NULL,
  `vinculacion3` text NOT NULL,
  `promedio_vinculacion` text NOT NULL,
  `final_vinculacion` text NOT NULL,
  `promedio_gral` text NOT NULL,
  `semestre` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semetre_a1`
--

CREATE TABLE `semetre_a1` (
  `id` int(11) NOT NULL,
  `alumno` text NOT NULL,
  `matematicas1` text NOT NULL,
  `fisica1` text NOT NULL,
  `quimica1` text NOT NULL,
  `contextosocial1` text NOT NULL,
  `cultura1` text NOT NULL,
  `espanol1` text NOT NULL,
  `ingles1` text NOT NULL,
  `tic1` text NOT NULL,
  `vinculacion1` text NOT NULL,
  `promedio_gral` text NOT NULL,
  `semestre` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `correo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `semetre_a1`
--

INSERT INTO `semetre_a1` (`id`, `alumno`, `matematicas1`, `fisica1`, `quimica1`, `contextosocial1`, `cultura1`, `espanol1`, `ingles1`, `tic1`, `vinculacion1`, `promedio_gral`, `semestre`, `id_alumno`, `correo`) VALUES
(1, 'Cortes Sanchez Maria Isabel', '7,9,8,8', '8,9,7,8,(ORD)', '6,8,7,7,(ORD)', '9,7,8,8,(ORD)', '10,9,6,8.33,(REG)', '6,6,9,7,(REG)', '9,7,10,8.67,(REG)', '10,9,6,8.33,(REG)', '3,2,9,5,(ORD)', '', 1, 0, 'mariaisabel@gmail.com'),
(2, 'Cortes Velazquez Obed Edom', '1,1,1,1,(ORD)', '1,2,3', '7,6,9,7.3333333333333,7', '8,8,6,7.3333333333333,7', '9,8,6,7.6666666666667,8', '7,6,9,7.3333333333333,7', '8,8,6,7.3333333333333,7', '9,8,6,7.6666666666667,8', '7,6,9,7.3333333333333,7', '7.1333333333333', 1, 0, ''),
(3, 'Gomez Perez Rufina', '1,1,1,1,(REG)', '6,6,6,6,6', '7,6,9,7.3333333333333,7', '7,8,6,6.6,7', '6,6,6,6,6', '7,6,9,7.3333333333333,7', '7,8,6,6.6,7', '6,6,6,6,6', '7,6,9,7.3333333333333,7', '6.5066666666667', 1, 0, ''),
(4, 'Guzman Perez Gustavo', '7,8,8,7.6666666666667,8', '5,4,6,5,5', '8,6,9,7.6666666666667,8', '7,8,8,7.6666666666667,8', '5,4,6,5,5', '8,6,9,7.6666666666667,8', '7,8,8,7.6666666666667,8', '5,4,6,5,5', '8,6,9,7.6666666666667,8', '6.8', 1, 0, ''),
(5, 'Mendoza Velazquez Edivaldo', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '7.9333333333333', 1, 0, ''),
(6, 'Mendoza Velazquez Yadira', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '7.9333333333333', 1, 0, ''),
(7, 'Nuñez Velazquez Abraham', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8', 1, 0, ''),
(8, 'Nuñez Velazquez Floridalia', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8', 1, 0, ''),
(9, 'Perez Perez Carlos Irben', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8', 1, 0, ''),
(10, 'Perez Rodriguez Rosa', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8', 1, 0, ''),
(11, 'Perez Velazquez Ingrid', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8', 1, 0, ''),
(12, 'Sanchez Cortes Miguel Angel', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,9,8,8.3333333333333,8', '8.1333333333333', 1, 0, ''),
(13, 'Velazquez Gomez Salvador', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '7.8666666666667', 1, 0, ''),
(14, 'Velazquez Guzman Dionicio', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '7.8666666666667', 1, 0, ''),
(15, 'Velazquez Juarez Andrea', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '7.8666666666667', 1, 0, ''),
(16, 'Velazquez Juarez Guztavo', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '7.8666666666667', 1, 0, ''),
(17, 'Velazquez Nuñes Griselda', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '7.8666666666667', 1, 0, ''),
(18, 'Velazquez Vega Odilon', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '7.8666666666667', 1, 0, ''),
(19, 'Velazquez Velazquez Ivan', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '7.8666666666667', 1, 0, ''),
(20, 'Velazquez Velazquez Maria Candelaria', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '7.8666666666667', 1, 0, ''),
(21, 'Soto Mercado Julian ', '10,9,8,9,(REG)', '8,9,10,9,(REG)', '7,10,9,9,(REG)', '7,8,9,8,(REG)', '6,7,6,6,(ORD)', '9,10,10,10,(REG)', '10,8,9,9,(REG)', '10,10,10,10,(ORD)', '8,9,10,9,(ORD)', 'sin promediar', 1, 0, 'julian@gmail.com'),
(22, 'Velazquez Perez Juan', '8,0,0,3', '', '', '', '', '', '', '', '', 'sin promediar', 1, 0, 'juan@gmail.com'),
(23, 'SACNITE GUERRERO R', '8,8,7,8,(REG)', '', '', '', '', '', '', '', '', 'sin promediar', 1, 0, 'sasdfsf@dfsadf.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semetre_a2`
--

CREATE TABLE `semetre_a2` (
  `id` int(11) NOT NULL,
  `alumno` text NOT NULL,
  `matematicas2` text NOT NULL,
  `biologia1` text NOT NULL,
  `historia` text NOT NULL,
  `formacion` text NOT NULL,
  `cultura2` text NOT NULL,
  `espanol2` text NOT NULL,
  `ingles2` text NOT NULL,
  `tic2` text NOT NULL,
  `vinculacion2` text NOT NULL,
  `promedio_gral` text NOT NULL,
  `semestre` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `correo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `semetre_a2`
--

INSERT INTO `semetre_a2` (`id`, `alumno`, `matematicas2`, `biologia1`, `historia`, `formacion`, `cultura2`, `espanol2`, `ingles2`, `tic2`, `vinculacion2`, `promedio_gral`, `semestre`, `id_alumno`, `correo`) VALUES
(1, 'Cortes Sanchez Maria Isabel', '9,7,8,8,8', '10,9,6,8.3333333333333,8', '6,6,9,7,7', '10,9,6,8.3333333333333,8', '9,7,8,8,8', '10,9,6,8.3333333333333,8', '6,6,9,7,7', '9,7,10,8.6666666666667,9', '6,6,9,7,7', '7.7777777777778', 2, 0, ''),
(2, 'Cortes Velazquez Obed Edom', '8,8,6,7.3333333333333,7', '9,8,6,7.6666666666667,8', '7,6,9,7.3333333333333,7', '9,8,6,7.6666666666667,8', '8,8,6,7.3333333333333,7', '9,8,6,7.6666666666667,8', '7,6,9,7.3333333333333,7', '8,8,6,7.3333333333333,7', '7,6,9,7.3333333333333,7', '7.1333333333333', 2, 0, 'obededom@gmail.com'),
(3, 'Gomez Perez Rufina', '7,8,6,6.6,7', '6,6,6,6,6', '7,6,9,7.3333333333333,7', '6,6,6,6,6', '7,8,6,6.6,7', '6,6,6,6,6', '7,6,9,7.3333333333333,7', '7,8,6,6.6,7', '7,6,9,7.3333333333333,7', '6.5066666666667', 2, 0, ''),
(4, 'Guzman Perez Gustavo', '7,8,8,7.6666666666667,8', '5,4,6,5,5', '8,6,9,7.6666666666667,8', '5,4,6,5,5', '7,8,8,7.6666666666667,8', '5,4,6,5,5', '8,6,9,7.6666666666667,8', '7,8,8,7.6666666666667,8', '8,6,9,7.6666666666667,8', '6.8', 2, 0, ''),
(5, 'Mendoza Velazquez Edivaldo', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '7,10,8,8.3333333333333,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '8,7,9,8,8', '7,7,8,7.3333333333333,7', '7.9333333333333', 2, 0, ''),
(6, 'Mendoza Velazquez Yadira', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '7,10,8,8.3333333333333,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '8,7,9,8,8', '7,7,8,7.3333333333333,7', '7.9333333333333', 2, 0, ''),
(7, 'Nuñez Velazquez Abraham', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '7,10,8,8.3333333333333,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '8,7,8,7.6666666666667,8', '8', 2, 0, ''),
(8, 'Nuñez Velazquez Floridalia', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '7,10,8,8.3333333333333,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '8,7,8,7.6666666666667,8', '8', 2, 0, ''),
(9, 'Perez Perez Carlos Irben', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '7,10,8,8.3333333333333,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '8,7,8,7.6666666666667,8', '8', 2, 0, ''),
(10, 'Perez Rodriguez Rosa', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '7,10,8,8.3333333333333,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '8,7,8,7.6666666666667,8', '8', 2, 0, ''),
(11, 'Perez Velazquez Ingrid', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '7,10,8,8.3333333333333,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '8,7,8,7.6666666666667,8', '8', 2, 0, ''),
(12, 'Sanchez Cortes Miguel Angel', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,9,8,8.3333333333333,8', '7,10,8,8.3333333333333,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '8,9,8,8.3333333333333,8', '8.1333333333333', 2, 0, ''),
(13, 'Velazquez Gomez Salvador', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '7,6,8,7,7', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '8,9,8,8.3333333333333,8', '7.8666666666667', 2, 0, ''),
(14, 'Velazquez Guzman Dionicio', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '7,6,8,7,7', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '8,9,8,8.3333333333333,8', '7.8666666666667', 2, 0, ''),
(15, 'Velazquez Juarez Andrea', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '7,6,8,7,7', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '8,9,8,8.3333333333333,8', '7.8666666666667', 2, 0, ''),
(16, 'Velazquez Juarez Guztavo', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '7,6,8,7,7', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '8,9,8,8.3333333333333,8', '7.8666666666667', 2, 0, ''),
(17, 'Velazquez Nuñes Griselda', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '7,6,8,7,7', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '8,9,8,8.3333333333333,8', '7.8666666666667', 2, 0, ''),
(18, 'Velazquez Vega Odilon', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '7,6,8,7,7', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '8,9,8,8.3333333333333,8', '7.8666666666667', 2, 0, ''),
(19, 'Velazquez Velazquez Ivan', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '7,6,8,7,7', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '8,9,8,8.3333333333333,8', '7.8666666666667', 2, 0, ''),
(20, 'Velazquez Velazquez Maria Candelaria', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '7,6,8,7,7', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '8,9,8,8.3333333333333,8', '7.8666666666667', 2, 0, ''),
(21, 'Perez Soto Ramiro V2', '', '', '', '', '', '', '', '', '', '', 2, 0, 'ramiro@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semetre_a3`
--

CREATE TABLE `semetre_a3` (
  `id` int(11) NOT NULL,
  `alumno` text NOT NULL,
  `matematicas3` text NOT NULL,
  `fisica2` text NOT NULL,
  `geografia1` text NOT NULL,
  `historia2` text NOT NULL,
  `cultura3` text NOT NULL,
  `espanol3` text NOT NULL,
  `ingles3` text NOT NULL,
  `formacion2` text NOT NULL,
  `vinculacion3` text NOT NULL,
  `promedio_gral` text NOT NULL,
  `semestre` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `correo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `semetre_a3`
--

INSERT INTO `semetre_a3` (`id`, `alumno`, `matematicas3`, `fisica2`, `geografia1`, `historia2`, `cultura3`, `espanol3`, `ingles3`, `formacion2`, `vinculacion3`, `promedio_gral`, `semestre`, `id_alumno`, `correo`) VALUES
(1, 'Fernandez Perez Victor Hugo', '9,7,8,8,8', '10,9,6,8.3333333333333,8', '6,6,9,7,7', '9,7,8,8,8', '10,9,6,8.3333333333333,8', '6,6,9,7,7', '9,7,10,8.6666666666667,9', '10,9,6,8.3333333333333,8', '6,6,9,7,7', '7.7777777777778', 3, 0, 'victorhugo@gmail.com'),
(2, 'Garcia Perez Dulce Tania', '8,8,6,7.3333333333333,7', '9,8,6,7.6666666666667,8', '7,6,9,7.3333333333333,7', '8,8,6,7.3333333333333,7', '9,8,6,7.6666666666667,8', '7,6,9,7.3333333333333,7', '8,8,6,7.3333333333333,7', '9,8,6,7.6666666666667,8', '7,6,9,7.3333333333333,7', '7.1333333333333', 3, 0, ''),
(3, 'Gomez Perez Lizeth', '7,8,6,6.6,7', '6,6,6,6,6', '7,6,9,7.3333333333333,7', '7,8,6,6.6,7', '6,6,6,6,6', '7,6,9,7.3333333333333,7', '7,8,6,6.6,7', '6,6,6,6,6', '7,6,9,7.3333333333333,7', '6.5066666666667', 3, 0, ''),
(4, 'Gutierrez Nuñez Griselda', '7,8,8,7.6666666666667,8', '5,4,6,5,5', '8,6,9,7.6666666666667,8', '7,8,8,7.6666666666667,8', '5,4,6,5,5', '8,6,9,7.6666666666667,8', '7,8,8,7.6666666666667,8', '5,4,6,5,5', '8,6,9,7.6666666666667,8', '6.8', 3, 0, ''),
(5, 'Guzman Deaquino Gabriela', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '7.9333333333333', 3, 0, ''),
(6, 'Guzman Guzman Jose Ricardo', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '7.9333333333333', 3, 0, ''),
(7, 'Guzman Perez Azucena', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8', 3, 0, ''),
(8, 'Guzman Velazquez Modesto', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8', 3, 0, ''),
(9, 'Hernandez Rodriguez Heron', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8', 3, 0, ''),
(10, 'Juarez Perez Yohny', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8', 3, 0, ''),
(11, 'Nuñez Velazquez Lizbeth', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8', 3, 0, ''),
(12, 'Pasion Velazquez Maria Lizeth', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,9,8,8.3333333333333,8', '8.1333333333333', 3, 0, ''),
(13, 'Perez Juarez Filiberto', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '7.8666666666667', 3, 0, ''),
(14, 'Velazquez Juarez Cloe', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '7.8666666666667', 3, 0, ''),
(15, 'Velazquez Perez Ernesto', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '7.8666666666667', 3, 0, ''),
(16, 'Velazquez Perez Rosalinda', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '7.8666666666667', 3, 0, ''),
(17, 'Velazquez Rodriguez Ana Irma', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '7.8666666666667', 3, 0, ''),
(18, 'Velazquez Velazquez Abigail', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '7.8666666666667', 3, 0, ''),
(19, 'Velazquez Velazquez Brian', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '7.8666666666667', 3, 0, ''),
(20, 'Velazquez Velazquez Cruz', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '7.8666666666667', 3, 0, ''),
(21, 'Velazquez Velazquez Francis', '8,9,9,8.6666666666667,9', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,9,8,8,8', '10,9,8,8.75,9', '8', 3, 0, ''),
(22, 'Velazquez Velazquez Hercules', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,9,8,8,8', '8,8,8,8,8', '7.9259259259259', 3, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semetre_a4`
--

CREATE TABLE `semetre_a4` (
  `id` int(11) NOT NULL,
  `alumno` text NOT NULL,
  `matematicas4` text NOT NULL,
  `quimica2` text NOT NULL,
  `literatura` text NOT NULL,
  `cultura4` text NOT NULL,
  `espanol4` text NOT NULL,
  `ingles4` text NOT NULL,
  `formacion3` text NOT NULL,
  `vinculacion4` text NOT NULL,
  `promedio_gral` text NOT NULL,
  `semestre` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `correo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `semetre_a4`
--

INSERT INTO `semetre_a4` (`id`, `alumno`, `matematicas4`, `quimica2`, `literatura`, `cultura4`, `espanol4`, `ingles4`, `formacion3`, `vinculacion4`, `promedio_gral`, `semestre`, `id_alumno`, `correo`) VALUES
(1, 'Fernandez Perez Victor Hugo', '9,7,8,8,8', '10,9,6,8.3333333333333,8', '6,6,9,7,7', '9,7,8,8,8', '10,9,6,8.3333333333333,8', '6,6,9,7,7', '9,7,10,8.6666666666667,9', '10,9,6,8.3333333333333,8', '7', 4, 0, ''),
(2, 'Garcia Perez Dulce Tania', '8,8,6,7.3333333333333,7', '9,8,6,7.6666666666667,8', '7,6,9,7.3333333333333,7', '8,8,6,7.3333333333333,7', '9,8,6,7.6666666666667,8', '7,6,9,7.3333333333333,7', '8,8,6,7.3333333333333,7', '9,8,6,7.6666666666667,8', '6.5555555555556', 4, 0, 'dulcetania@gmail.com'),
(3, 'Gomez Perez Lizeth', '7,8,6,6.6,7', '6,6,6,6,6', '7,6,9,7.3333333333333,7', '7,8,6,6.6,7', '6,6,6,6,6', '7,6,9,7.3333333333333,7', '7,8,6,6.6,7', '6,6,6,6,6', '5.8888888888889', 4, 0, ''),
(4, 'Gutierrez Nuñez Griselda', '7,8,8,7.6666666666667,8', '5,4,6,5,5', '8,6,9,7.6666666666667,8', '7,8,8,7.6666666666667,8', '5,4,6,5,5', '8,6,9,7.6666666666667,8', '7,8,8,7.6666666666667,8', '5,4,6,5,5', '6.1111111111111', 4, 0, ''),
(5, 'Guzman Deaquino Gabriela', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '6.8888888888889', 4, 0, ''),
(6, 'Guzman Guzman Jose Ricardo', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '6.8888888888889', 4, 0, ''),
(7, 'Guzman Perez Azucena', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7.1111111111111', 4, 0, ''),
(8, 'Guzman Velazquez Modesto', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7.1111111111111', 4, 0, ''),
(9, 'Hernandez Rodriguez Heron', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7.1111111111111', 4, 0, ''),
(10, 'Juarez Perez Yohny', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7.1111111111111', 4, 0, ''),
(11, 'Nuñez Velazquez Lizbeth', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7.1111111111111', 4, 0, ''),
(12, 'Pasion Velazquez Maria Lizeth', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7.1111111111111', 4, 0, ''),
(13, 'Perez Juarez Filiberto', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '6.7777777777778', 4, 0, ''),
(14, 'Velazquez Juarez Cloe', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '6.7777777777778', 4, 0, ''),
(15, 'Velazquez Perez Ernesto', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '6.7777777777778', 4, 0, ''),
(16, 'Velazquez Perez Rosalinda', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '6.7777777777778', 4, 0, ''),
(17, 'Velazquez Rodriguez Ana Irma', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '6.7777777777778', 4, 0, ''),
(18, 'Velazquez Velazquez Abigail', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '6.7777777777778', 4, 0, ''),
(19, 'Velazquez Velazquez Brian', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '6.7777777777778', 4, 0, ''),
(20, 'Velazquez Velazquez Cruz', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '6.7777777777778', 4, 0, ''),
(21, 'Velazquez Velazquez Francis', '8,9,10,9,9', '8,9,7,8,8', '7,8,8,7.6666666666667,8', '7,8,9,8,8', '8,9,9,8.6666666666667,9', '9,7,7,7.6666666666667,8', '9,8,7,8,8', '7,7,7,7,7', '7.2222222222222', 4, 0, ''),
(22, 'Velazquez Velazquez Hercules', '9,10,8,9,9', '8,6,5,6.3333333333333,6', '8,9,8,8.3333333333333,8', '7,8,9,8,8', '8,9,9,8.6666666666667,9', '9,7,7,7.6666666666667,8', '9,8,7,8,8', '8,9,6,7.6666666666667,8', '7.1111111111111', 4, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semetre_a5`
--

CREATE TABLE `semetre_a5` (
  `id` int(11) NOT NULL,
  `alumno` text NOT NULL,
  `matematicas_aplicadas` text NOT NULL,
  `biologia2` text NOT NULL,
  `formacion_etica1` text NOT NULL,
  `cultura5` text NOT NULL,
  `espanol5` text NOT NULL,
  `ingles5` text NOT NULL,
  `tic3` text NOT NULL,
  `formacion4` text NOT NULL,
  `vinculacion5` text NOT NULL,
  `form_prop` text NOT NULL,
  `promedio_gral` text NOT NULL,
  `semestre` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `correo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `semetre_a5`
--

INSERT INTO `semetre_a5` (`id`, `alumno`, `matematicas_aplicadas`, `biologia2`, `formacion_etica1`, `cultura5`, `espanol5`, `ingles5`, `tic3`, `formacion4`, `vinculacion5`, `form_prop`, `promedio_gral`, `semestre`, `id_alumno`, `correo`) VALUES
(1, 'Deaquino Guzman Guillermina', '9,7,8,8,8', '10,9,6,8.3333333333333,8', '6,6,9,7,7', '9,7,8,8,8', '10,9,6,8.3333333333333,8', '6,6,9,7,7', '9,7,10,8.6666666666667,9', '9,7,10,8.6666666666667,9', '10,9,6,8.3333333333333,8', '10,9,6,8.3333333333333,8', '8', 5, 0, 'guillermina@gmail.com'),
(2, 'Guzman Garcia Geydi', '8,8,6,7.3333333333333,7', '9,8,6,7.6666666666667,8', '7,6,9,7.3333333333333,7', '8,8,6,7.3333333333333,7', '9,8,6,7.6666666666667,8', '7,6,9,7.3333333333333,7', '8,8,6,7.3333333333333,7', '8,8,6,7.3333333333333,7', '9,8,6,7.6666666666667,8', '9,8,6,7.6666666666667,8', '7.4', 5, 0, ''),
(3, 'Guzman Perez Efrain', '7,8,6,6.6,7', '6,6,6,6,6', '7,6,9,7.3333333333333,7', '7,8,6,6.6,7', '6,6,6,6,6', '7,6,9,7.3333333333333,7', '7,8,6,6.6,7', '7,8,6,6.6,7', '6,6,6,6,6', '6,6,6,6,6', '6.6', 5, 0, ''),
(4, 'Hernandez Juarez Griselda', '7,8,8,7.6666666666667,8', '5,4,6,5,5', '8,6,9,7.6666666666667,8', '7,8,8,7.6666666666667,8', '5,4,6,5,5', '8,6,9,7.6666666666667,8', '7,8,8,7.6666666666667,8', '7,8,8,7.6666666666667,8', '5,4,6,5,5', '5,4,6,5,5', '6.8', 5, 0, ''),
(5, 'Juarez Nuñez Viridiana', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '8,7,9,8,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,10,8,8.3333333333333,8', '7.8', 5, 0, ''),
(6, 'Juarez Velazquez Florida', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '8,7,9,8,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,10,8,8.3333333333333,8', '7.8', 5, 0, ''),
(7, 'Juarez Zamora Yoselin', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,10,8,8.3333333333333,8', '8', 5, 0, ''),
(8, 'Lopez Mendoza Genaro', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,10,8,8.3333333333333,8', '8', 5, 0, ''),
(9, 'Lucas Guzman Jorge', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,10,8,8.3333333333333,8', '8', 5, 0, ''),
(10, 'Mendoza Velazquez Rut', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,10,8,8.3333333333333,8', '8', 5, 0, ''),
(11, 'Nuñez Perez Marlizeth', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,10,8,8.3333333333333,8', '8', 5, 0, ''),
(12, 'Perez Mendoza Elias', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,10,8,8.3333333333333,8', '8', 5, 0, ''),
(13, 'Perez Velazquez Josue', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '8,7,9,8,8', '7,6,8,7,7', '7,6,8,7,7', '7.6', 5, 0, ''),
(14, 'Sanchez Cortes Ricardo', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '8,7,9,8,8', '7,6,8,7,7', '7,6,8,7,7', '7.6', 5, 0, ''),
(15, 'Vazquez Salazar Jose Florentino', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '8,7,9,8,8', '7,6,8,7,7', '7,6,8,7,7', '7.6', 5, 0, ''),
(16, 'Velazquez Esteban Teodoro', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '8,7,9,8,8', '7,6,8,7,7', '7,6,8,7,7', '7.6', 5, 0, ''),
(17, 'Velazquez Nuñez Froylan ', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '8,7,9,8,8', '7,6,8,7,7', '7,6,8,7,7', '7.6', 5, 0, ''),
(18, 'Velazquez Velazquez Edgar', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '8,7,9,8,8', '7,6,8,7,7', '7,6,8,7,7', '7.6', 5, 0, ''),
(19, 'Velazquez Velazquez Jazmin', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '8,7,9,8,8', '7,6,8,7,7', '7,6,8,7,7', '7.6', 5, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semetre_a6`
--

CREATE TABLE `semetre_a6` (
  `id` int(11) NOT NULL,
  `alumno` text NOT NULL,
  `matematicas_aplicadas2` text NOT NULL,
  `ecologia1` text NOT NULL,
  `filosofia1` text NOT NULL,
  `proyecto_disc_campo` text NOT NULL,
  `tic4` text NOT NULL,
  `form_prop2` text NOT NULL,
  `vinculacion6` text NOT NULL,
  `form_prop_lit` text NOT NULL,
  `promedio_gral` text NOT NULL,
  `semestre` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `correo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `semetre_a6`
--

INSERT INTO `semetre_a6` (`id`, `alumno`, `matematicas_aplicadas2`, `ecologia1`, `filosofia1`, `proyecto_disc_campo`, `tic4`, `form_prop2`, `vinculacion6`, `form_prop_lit`, `promedio_gral`, `semestre`, `id_alumno`, `correo`) VALUES
(1, 'Deaquino Guzman Guillermina', '9,7,8,8,8', '10,9,6,8.3333333333333,8', '6,6,9,7,7', '9,7,8,8,8', '10,9,6,8.3333333333333,8', '6,6,9,7,7', '9,7,10,8.6666666666667,9', '10,9,6,8.3333333333333,8', '7', 6, 0, ''),
(2, 'Guzman Garcia Geydi', '8,8,6,7.3333333333333,7', '9,8,6,7.6666666666667,8', '7,6,9,7.3333333333333,7', '8,8,6,7.3333333333333,7', '9,8,6,7.6666666666667,8', '7,6,9,7.3333333333333,7', '8,8,6,7.3333333333333,7', '9,8,6,7.6666666666667,8', '6.5555555555556', 6, 0, 'geydi@gmail.com'),
(3, 'Guzman Perez Efrain', '7,8,6,6.6,7', '6,6,6,6,6', '7,6,9,7.3333333333333,7', '7,8,6,6.6,7', '6,6,6,6,6', '7,6,9,7.3333333333333,7', '7,8,6,6.6,7', '6,6,6,6,6', '5.8888888888889', 6, 0, ''),
(4, 'Hernandez Juarez Griselda', '7,8,8,7.6666666666667,8', '5,4,6,5,5', '8,6,9,7.6666666666667,8', '7,8,8,7.6666666666667,8', '5,4,6,5,5', '8,6,9,7.6666666666667,8', '7,8,8,7.6666666666667,8', '5,4,6,5,5', '6.1111111111111', 6, 0, ''),
(5, 'Juarez Nuñez Viridiana', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '6.8888888888889', 6, 0, ''),
(6, 'Juarez Velazquez Florida', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7,7,8,7.3333333333333,7', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '6.8888888888889', 6, 0, ''),
(7, 'Juarez Zamora Yoselin', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7.1111111111111', 6, 0, ''),
(8, 'Lopez Mendoza Genaro', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7.1111111111111', 6, 0, ''),
(9, 'Lucas Guzman Jorge', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7.1111111111111', 6, 0, ''),
(10, 'Mendoza Velazquez Rut', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7.1111111111111', 6, 0, ''),
(11, 'Nuñez Perez Marlizeth', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,7,8,7.6666666666667,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7.1111111111111', 6, 0, ''),
(12, 'Perez Mendoza Elias', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,10,8,8.3333333333333,8', '7.1111111111111', 6, 0, ''),
(13, 'Perez Velazquez Josue', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '6.7777777777778', 6, 0, ''),
(14, 'Sanchez Cortes Ricardo', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '6.7777777777778', 6, 0, ''),
(15, 'Vazquez Salazar Jose Florentino', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '6.7777777777778', 6, 0, ''),
(16, 'Velazquez Esteban Teodoro', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '6.7777777777778', 6, 0, ''),
(17, 'Velazquez Nuñez Froylan ', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '6.7777777777778', 6, 0, ''),
(18, 'Velazquez Velazquez Edgar', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '6.7777777777778', 6, 0, ''),
(19, 'Velazquez Velazquez Jazmin', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '8,9,8,8.3333333333333,8', '8,7,9,8,8', '7,6,8,7,7', '6.7777777777778', 6, 0, ''),
(20, 'z2', '', '', '', '', '', '', '', '0,0,0,0', '', 6, 0, 'z2@a.com'),
(21, 'xzx', '', '', '', '', '', '', '', '', '', 6, 0, 'v@cf.v'),
(22, 'alala', '', '', '', '', '', '', '', '', 'sin promediar', 6, 0, 'lala@xs.c');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `archivos_pub`
--
ALTER TABLE `archivos_pub`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id_docente`);

--
-- Indices de la tabla `fotos_pub`
--
ALTER TABLE `fotos_pub`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `semetre_1`
--
ALTER TABLE `semetre_1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `semetre_a1`
--
ALTER TABLE `semetre_a1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `semetre_a2`
--
ALTER TABLE `semetre_a2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `semetre_a3`
--
ALTER TABLE `semetre_a3`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `semetre_a4`
--
ALTER TABLE `semetre_a4`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `semetre_a5`
--
ALTER TABLE `semetre_a5`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `semetre_a6`
--
ALTER TABLE `semetre_a6`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `archivos_pub`
--
ALTER TABLE `archivos_pub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id_docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `fotos_pub`
--
ALTER TABLE `fotos_pub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `semetre_1`
--
ALTER TABLE `semetre_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `semetre_a1`
--
ALTER TABLE `semetre_a1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `semetre_a2`
--
ALTER TABLE `semetre_a2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `semetre_a3`
--
ALTER TABLE `semetre_a3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `semetre_a4`
--
ALTER TABLE `semetre_a4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `semetre_a5`
--
ALTER TABLE `semetre_a5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `semetre_a6`
--
ALTER TABLE `semetre_a6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
