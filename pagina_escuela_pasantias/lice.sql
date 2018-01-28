-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2018 a las 02:43:29
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lice`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `id_actividad` varchar(5) NOT NULL,
  `nombre` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`id_actividad`, `nombre`) VALUES
('AC001', 'Taller de clases'),
('AC002', 'Control de lectura'),
('AC003', 'Examen de periodo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` varchar(5) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `clave` varchar(75) NOT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `nombre`, `apellido`, `clave`, `estado`) VALUES
('GP141', 'Eduardo Josue', 'Garcia Perez', 'b221d9dbb083a7f33428d7c2a3c3198ae925614d70210e28716ccaa7cd4ddb79', 'Activo'),
('VM141', 'Rodrigo Alejandro', 'Valladares Mejia', 'b221d9dbb083a7f33428d7c2a3c3198ae925614d70210e28716ccaa7cd4ddb79', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` varchar(8) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `nie` varchar(15) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `id_detalle_grado` varchar(8) NOT NULL,
  `estado` varchar(15) NOT NULL DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `nombre`, `apellido`, `nie`, `clave`, `id_detalle_grado`, `estado`) VALUES
('GP141513', 'Eduardo Josue', 'Garcia Perez', '06141207971061', 'b221d9dbb083a7f33428d7c2a3c3198ae925614d70210e28716ccaa7cd4ddb79', 'DT000006', 'Activo'),
('JS000124', 'LOREM IPSU', 'IPSU LOREM', '06141207971061', 'b221d9dbb083a7f33428d7c2a3c3198ae925614d70210e28716ccaa7cd4ddb79', 'DT000001', 'Activo'),
('VM152233', 'Rodrigo Alejandro', 'Valladares Mejia', '06141207971060', 'b221d9dbb083a7f33428d7c2a3c3198ae925614d70210e28716ccaa7cd4ddb79', 'DT000001', 'Activo'),
('VM152234', 'Rod', 'Vall', '222', 'e633f4fc79badea1dc5db970cf397c8248bac47cc3acf9915ba60b5d76b0e88f', 'DT000001', 'Activo'),
('VM332251', 'Alejandro Rodrigo', 'Mejia Valladares', '06141207971061', 'b221d9dbb083a7f33428d7c2a3c3198ae925614d70210e28716ccaa7cd4ddb79', 'DT000001', 'Activo');

--
-- Disparadores `alumno`
--
DELIMITER $$
CREATE TRIGGER `insertar_mensualidad_alumno` AFTER INSERT ON `alumno` FOR EACH ROW INSERT INTO mensualidad_alumno(id_mensua,id_alumno,fecha_limi,estado,mora,anio) VALUES
(1,new.id_alumno,'31-Enero',"No Pagado",'NO',YEAR(NOW())),
(2,new.id_alumno,'28-Febrero',"No Pagado",'NO',YEAR(NOW())),
(3,new.id_alumno,'31-Marzo',"No Pagado",'NO',YEAR(NOW())),
(4,new.id_alumno,'30-Abril',"No Pagado",'NO',YEAR(NOW())),
(5,new.id_alumno,'31-Mayo',"No Pagado",'NO',YEAR(NOW())),
(6,new.id_alumno,'30-Junio',"No Pagado",'NO',YEAR(NOW())),
(7,new.id_alumno,'31-Julio',"No Pagado",'NO',YEAR(NOW())),
(8,new.id_alumno,'31-Agosto',"No Pagado",'NO',YEAR(NOW())),
(9,new.id_alumno,'30-Septiembre',"No Pagado",'NO',YEAR(NOW())),
(10,new.id_alumno,'31-Octubre',"No Pagado",'NO',YEAR(NOW())),
(11,new.id_alumno,'30-Noviembre',"No Pagado",'NO',YEAR(NOW()))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id_area` varchar(5) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id_area`, `nombre`) VALUES
('AR001', 'Educacion basica'),
('AR002', 'Educacion media'),
('AR003', 'Educacion avanzada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_materia`
--

CREATE TABLE `asignacion_materia` (
  `id_asignacion_materia` int(11) NOT NULL,
  `id_profesor` varchar(5) NOT NULL,
  `id_materia` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asignacion_materia`
--

INSERT INTO `asignacion_materia` (`id_asignacion_materia`, `id_profesor`, `id_materia`) VALUES
(1, 'HK001', 'MA001'),
(2, 'HK002', 'IG001'),
(3, 'HK003', 'IG001'),
(4, 'HK001', 'SC001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `hora` varchar(25) NOT NULL,
  `id_alumno` varchar(8) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `id_detalle_materia` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_asistencia`, `fecha`, `hora`, `id_alumno`, `estado`, `id_detalle_materia`) VALUES
(1, '2017-12-15', '', 'VM152233', 'Ausente', 'DM001'),
(2, '2017-12-15', '', 'VM332251', 'Ausente', 'DM001'),
(3, '2017-12-15', '', 'JS000124', 'No ausente', 'DM001'),
(4, '2017-12-15', '', 'VM152233', 'No ausente', 'DM002'),
(5, '2017-12-15', '', 'VM332251', 'No ausente', 'DM002'),
(6, '2017-12-15', '', 'JS000124', 'No ausente', 'DM002'),
(7, '2018-01-02', '20:24:49', 'GP141513', 'Ausente', 'DM001'),
(8, '2018-01-02', '20:24:49', 'JS000124', 'Ausente', 'DM001'),
(9, '2018-01-02', '20:24:49', 'VM152233', 'Ausente', 'DM001'),
(10, '2018-01-02', '20:24:50', 'VM332251', 'Ausente', 'DM001'),
(11, '2018-01-01', '20:43:57', 'GP141513', 'No ausente', 'DM001'),
(12, '2018-01-01', '20:43:57', 'JS000124', 'No ausente', 'DM001'),
(13, '2018-01-01', '20:43:57', 'VM152233', 'No ausente', 'DM001'),
(14, '2018-01-01', '20:43:57', 'VM332251', 'No ausente', 'DM001'),
(15, '2018-01-06', '22:38:40', 'GP141513', 'Ausente', 'DM001'),
(16, '2018-01-06', '22:38:40', 'JS000124', 'No ausente', 'DM001'),
(17, '2018-01-06', '22:38:40', 'VM152233', 'Ausente', 'DM001'),
(18, '2018-01-06', '22:38:40', 'VM332251', 'Ausente', 'DM001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avisos`
--

CREATE TABLE `avisos` (
  `id_aviso` varchar(5) NOT NULL,
  `fecha` varchar(40) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `descripcion` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `avisos`
--

INSERT INTO `avisos` (`id_aviso`, `fecha`, `nombre`, `descripcion`) VALUES
('AV001', '2017-10-30', 'Reunion', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'),
('AV002', '2017-11-22', 'Entrega', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.'),
('AV003', '2017-11-28', 'Asamblea', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.'),
('AV004', '2017-12-06', 'Reunion', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.'),
('AV005', '2017-12-15', 'Reunion', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigo`
--

CREATE TABLE `codigo` (
  `id_cod` int(5) NOT NULL,
  `id_tip_cod` int(5) NOT NULL,
  `nombre` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `codigo`
--

INSERT INTO `codigo` (`id_cod`, `id_tip_cod`, `nombre`) VALUES
(3, 1, 'Falta a clases'),
(4, 2, 'Roba pertenencia de los demas'),
(6, 3, 'Come en  clases'),
(7, 2, 'Cabello largo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigo_alumno`
--

CREATE TABLE `codigo_alumno` (
  `id_cod_al` int(5) NOT NULL,
  `id_cod` int(5) NOT NULL,
  `id_alumno` varchar(8) NOT NULL,
  `id_profesor` varchar(5) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `codigo_alumno`
--

INSERT INTO `codigo_alumno` (`id_cod_al`, `id_cod`, `id_alumno`, `id_profesor`, `fecha`) VALUES
(2, 3, 'GP141513', 'HK001', '21-12-2017'),
(3, 4, 'VM152233', 'HK001', '21-12-17'),
(4, 7, 'GP141513', 'HK001', '22-12-2017');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_actividad`
--

CREATE TABLE `detalle_actividad` (
  `id_detalle_actividad` varchar(5) NOT NULL,
  `id_periodo` varchar(5) NOT NULL,
  `id_actividad` varchar(5) NOT NULL,
  `ponderacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_actividad`
--

INSERT INTO `detalle_actividad` (`id_detalle_actividad`, `id_periodo`, `id_actividad`, `ponderacion`) VALUES
('AR003', 'PE003', 'AC002', 2),
('DA001', 'PE001', 'AC001', 40),
('DA002', 'PE001', 'AC002', 10),
('DA003', 'PE001', 'AC003', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_grado`
--

CREATE TABLE `detalle_grado` (
  `id_detalle_grado` varchar(8) NOT NULL,
  `id_grado` varchar(5) NOT NULL,
  `id_seccion` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_grado`
--

INSERT INTO `detalle_grado` (`id_detalle_grado`, `id_grado`, `id_seccion`) VALUES
('DT000001', 'GR001', 'SEC01'),
('DT000002', 'GR001', 'SEC02'),
('DT000003', 'GR001', 'SEC03'),
('DT000004', 'GR002', 'SEC01'),
('DT000005', 'GR002', 'SEC02'),
('DT000006', 'GR002', 'SEC03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_horario`
--

CREATE TABLE `detalle_horario` (
  `id_detalle_horario` varchar(5) NOT NULL,
  `id_horario` varchar(5) NOT NULL,
  `id_asignacion_materia` int(11) NOT NULL,
  `dia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_horario`
--

INSERT INTO `detalle_horario` (`id_detalle_horario`, `id_horario`, `id_asignacion_materia`, `dia`) VALUES
('DH001', 'H0001', 1, 'Lunes'),
('DH002', 'H0002', 2, 'Lunes'),
('DH003', 'H0003', 1, 'Lunes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_materia`
--

CREATE TABLE `detalle_materia` (
  `id_detalle_materia` varchar(5) NOT NULL,
  `id_detalle_grado` varchar(8) NOT NULL,
  `id_detalle_horario` varchar(5) NOT NULL,
  `id_area` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_materia`
--

INSERT INTO `detalle_materia` (`id_detalle_materia`, `id_detalle_grado`, `id_detalle_horario`, `id_area`) VALUES
('DM001', 'DT000001', 'DH001', 'AR001'),
('DM002', 'DT000001', 'DH002', 'AR001'),
('DM003', 'DT000004', 'DH003', 'AR001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `id_grado` varchar(5) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`id_grado`, `nombre`) VALUES
('GR001', 'Primer grado'),
('GR002', 'Segundo grado'),
('GR003', 'Tercer grado'),
('GR004', 'Cuarto grado'),
('GR005', 'Quinto grado'),
('GR006', 'Sexto grado'),
('GR007', 'Septimo grado'),
('GR008', 'Octavo grado'),
('GR009', 'Noveno grado'),
('GR010', 'Primer a?o'),
('GR011', 'Segundo a?o');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id_horario` varchar(5) NOT NULL,
  `hora_inicio` varchar(25) NOT NULL,
  `hora_fin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id_horario`, `hora_inicio`, `hora_fin`) VALUES
('H0001', '7:00', '7:45'),
('H0002', '7:45', '8:30'),
('H0003', '9:00', '9:45'),
('H0004', '9:45', '10:30'),
('H0005', '10:45', '11:30'),
('H0006', '11:30', '12:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `id_inscripcion` varchar(5) NOT NULL,
  `id_responsable` int(15) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `id_padre` int(11) NOT NULL,
  `id_madre` int(11) NOT NULL,
  `id_alumno` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `madres`
--

CREATE TABLE `madres` (
  `id_madre` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `celular` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `madres`
--

INSERT INTO `madres` (`id_madre`, `nombre`, `apellido`, `dui`, `correo`, `celular`) VALUES
(0, 'Mar', 'LOREM IPSU', '1231231231', 'rodrigovalladares1@gmail.com', '78244943'),
(1, 'Claudia Alejandra', 'Garcia', '012345678', 'claudia@gmail.com', '73198133');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id_materia` varchar(5) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id_materia`, `nombre`) VALUES
('CN001', 'Ciencias naturales'),
('ED001', 'Educacion Fisica'),
('IG001', 'Lenguaje'),
('MA001', 'Matematicas'),
('SC001', 'Estudio sociales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensualidad`
--

CREATE TABLE `mensualidad` (
  `id_mensua` int(2) NOT NULL,
  `mes` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mensualidad`
--

INSERT INTO `mensualidad` (`id_mensua`, `mes`) VALUES
(1, 'Enero'),
(2, 'Febrero'),
(3, 'Marzo'),
(4, 'Abril'),
(5, 'Mayo'),
(6, 'Junio'),
(7, 'Julio'),
(8, 'Agosto'),
(9, 'Septiembre'),
(10, 'Octubre'),
(11, 'Noviembre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensualidad_alumno`
--

CREATE TABLE `mensualidad_alumno` (
  `id_ma` int(11) NOT NULL,
  `id_mensua` int(2) NOT NULL,
  `id_alumno` varchar(8) CHARACTER SET utf8 NOT NULL,
  `estado` varchar(75) CHARACTER SET utf8 NOT NULL,
  `fecha_limi` varchar(50) CHARACTER SET utf8 NOT NULL,
  `fech_pago` date DEFAULT NULL,
  `mora` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `anio` varchar(4) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `mensualidad_alumno`
--

INSERT INTO `mensualidad_alumno` (`id_ma`, `id_mensua`, `id_alumno`, `estado`, `fecha_limi`, `fech_pago`, `mora`, `anio`) VALUES
(1, 1, 'GP141513', '1', '31-Enero', '2018-01-13', '2', '2018'),
(2, 2, 'GP141513', '1', '28-Febrero', '2017-12-27', '1', '2018'),
(3, 3, 'GP141513', '2', '31-Marzo', NULL, '2', '2018'),
(4, 4, 'GP141513', '2', '30-Abril', NULL, '2', '2018'),
(5, 5, 'GP141513', '2', '31-Mayo', NULL, '2', '2018'),
(6, 6, 'GP141513', '2', '30-Junio', NULL, '2', '2018'),
(7, 7, 'GP141513', '2', '31-Julio', NULL, '2', '2018'),
(8, 8, 'GP141513', '2', '31-Agosto', NULL, '2', '2018'),
(9, 9, 'GP141513', '2', '30-Septiembre', NULL, '2', '2018'),
(10, 10, 'GP141513', '2', '31-Octubre', NULL, '2', '2018'),
(11, 11, 'GP141513', '2', '30-Noviembre', NULL, '2', '2018'),
(12, 1, 'VM152233', 'No Pagado', '31-Enero', NULL, 'NO', '2018'),
(13, 2, 'VM152233', 'No Pagado', '28-Febrero', NULL, 'NO', '2018'),
(14, 3, 'VM152233', 'No Pagado', '31-Marzo', NULL, 'NO', '2018'),
(15, 4, 'VM152233', 'No Pagado', '30-Abril', NULL, 'NO', '2018'),
(16, 5, 'VM152233', 'No Pagado', '31-Mayo', NULL, 'NO', '2018'),
(17, 6, 'VM152233', 'No Pagado', '30-Junio', NULL, 'NO', '2018'),
(18, 7, 'VM152233', 'No Pagado', '31-Julio', NULL, 'NO', '2018'),
(19, 8, 'VM152233', 'No Pagado', '31-Agosto', NULL, 'NO', '2018'),
(20, 9, 'VM152233', 'No Pagado', '30-Septiembre', NULL, 'NO', '2018'),
(21, 10, 'VM152233', 'No Pagado', '31-Octubre', NULL, 'NO', '2018'),
(22, 11, 'VM152233', 'No Pagado', '30-Noviembre', NULL, 'NO', '2018');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id_notas` int(11) NOT NULL,
  `id_detalle_actividad` varchar(5) NOT NULL,
  `nota` decimal(15,0) NOT NULL,
  `id_alumno` varchar(8) NOT NULL,
  `id_detalle_materia` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id_notas`, `id_detalle_actividad`, `nota`, `id_alumno`, `id_detalle_materia`) VALUES
(1, 'DA001', '10', 'JS000124', 'DM001'),
(2, 'DA002', '5', 'JS000124', 'DM001'),
(3, 'DA003', '6', 'JS000124', 'DM001'),
(4, 'DA001', '10', 'VM332251', 'DM001'),
(5, 'DA002', '10', 'VM332251', 'DM001'),
(6, 'DA003', '10', 'VM332251', 'DM001'),
(7, 'DA001', '10', 'VM152233', 'DM001'),
(8, 'DA002', '3', 'VM152233', 'DM001'),
(9, 'DA003', '8', 'VM152233', 'DM001'),
(10, 'DA001', '5', 'VM152233', 'DM002'),
(11, 'DA002', '5', 'VM152233', 'DM002'),
(12, 'DA003', '5', 'VM152233', 'DM002');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observaciones`
--

CREATE TABLE `observaciones` (
  `id_observacion` int(11) NOT NULL,
  `fecha` varchar(40) NOT NULL,
  `id_alumno` varchar(8) NOT NULL,
  `id_profesor` varchar(5) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `id_codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `observaciones`
--

INSERT INTO `observaciones` (`id_observacion`, `fecha`, `id_alumno`, `id_profesor`, `descripcion`, `id_codigo`) VALUES
(1, '13-12-2017', 'VM152233', 'HK001', 'No trae utiles', 3),
(2, '13-12-2017', 'GP141513', 'HK002', 'prueba 2', 6),
(3, '13-12-2017', 'GP141513', 'HK001', 'PRUEBA 1', 7),
(4, '14-12-2017', 'GP141513', 'HK001', 'NO TRAE UTILES', 7),
(5, '14-12-2017', 'GP141513', 'HK001', 'FALTO A CLASES', 3),
(6, '14-12-2017', 'GP141513', 'HK001', 'asd', 6),
(11, '21-12-2017', 'GP141513', 'HK001', 'PRUEBA 3', 4),
(12, '2018-01-07', 'GP141513', 'HK001', 'saadsasd', 4),
(13, '2018-01-07', 'VM152233', 'HK001', 'dasdasdd', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pardres`
--

CREATE TABLE `pardres` (
  `id_padre` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `celular` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pardres`
--

INSERT INTO `pardres` (`id_padre`, `nombre`, `apellido`, `dui`, `correo`, `celular`) VALUES
(2, 'Alexander Javier', 'Valladares', '1223123', 'rodrigovalladares1@gmail.com', '78244943');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `id_periodo` varchar(5) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `ponderacion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`id_periodo`, `nombre`, `ponderacion`) VALUES
('PE001', 'Primer periodo', '30'),
('PE002', 'Segundo periodo', '35'),
('PE003', 'Tercer periodo', '35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id_profesor` varchar(5) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `estado` varchar(15) NOT NULL DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id_profesor`, `nombre`, `apellido`, `clave`, `dui`, `telefono`, `correo`, `direccion`, `estado`) VALUES
('DR001', 'Carlos Roberto', 'Duran Rodriguez', 'b221d9dbb083a7f33428d7c2a3c3198ae925614d70210e28716ccaa7cd4ddb79', '0123456789', '73967920', 'carlos@gmail.com', 'APOPA', 'Inactivo'),
('HK001', 'Rodrigo Alejrandro', 'OPSU LORME', 'b221d9dbb083a7f33428d7c2a3c3198ae925614d70210e28716ccaa7cd4ddb79', '055583427', '71526065', 'ajaoakakaa@gmail.com', 'Col. Asdasd ', 'Activo'),
('HK002', 'Francisco Alejandro', 'IOS IPS', 'b221d9dbb083a7f33428d7c2a3c3198ae925614d70210e28716ccaa7cd4ddb79', '055583422', '71526065', 'ajaoakakaa@gmail.com', 'Col. Asdasd ', 'Activo'),
('HK003', 'Axel Alejandro', 'LOREM IPSU', 'b221d9dbb083a7f33428d7c2a3c3198ae925614d70210e28716ccaa7cd4ddb79', '1323123123', '78244943', 'rodrigovalladares1@gmail.com', '', 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resonsables`
--

CREATE TABLE `resonsables` (
  `id_responsable` int(15) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `dui` varchar(9) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `celular` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `resonsables`
--

INSERT INTO `resonsables` (`id_responsable`, `nombre`, `apellido`, `dui`, `correo`, `celular`) VALUES
(1, 'RS001', 'JUMM', 'MM', '1213123', 'rodrigoval');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `id_seccion` varchar(5) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`id_seccion`, `nombre`, `estado`) VALUES
('PE004', 'D', 'Activo'),
('SEC01', 'A', 'Activo'),
('SEC02', 'B', 'Activo'),
('SEC03', 'C', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_codigo`
--

CREATE TABLE `tipo_codigo` (
  `id_tip_cod` int(5) NOT NULL,
  `nombre` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_codigo`
--

INSERT INTO `tipo_codigo` (`id_tip_cod`, `nombre`) VALUES
(1, 'Leve'),
(2, 'Grave'),
(3, 'Muy Grave');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`id_actividad`);

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `FK_alumno_1` (`id_detalle_grado`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `asignacion_materia`
--
ALTER TABLE `asignacion_materia`
  ADD PRIMARY KEY (`id_asignacion_materia`),
  ADD KEY `FK_asignacion_materia_1` (`id_profesor`),
  ADD KEY `FK_asignacion_materia_2` (`id_materia`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`),
  ADD KEY `FK_asistencia_1` (`id_detalle_materia`),
  ADD KEY `FK_asistencia_2` (`id_alumno`);

--
-- Indices de la tabla `avisos`
--
ALTER TABLE `avisos`
  ADD PRIMARY KEY (`id_aviso`);

--
-- Indices de la tabla `codigo`
--
ALTER TABLE `codigo`
  ADD PRIMARY KEY (`id_cod`),
  ADD KEY `FK_codigo_tipo` (`id_tip_cod`);

--
-- Indices de la tabla `codigo_alumno`
--
ALTER TABLE `codigo_alumno`
  ADD PRIMARY KEY (`id_cod_al`),
  ADD KEY `FK_CODIGO_ALUMNO_1` (`id_cod`),
  ADD KEY `FK_CODIGO_ALUMNO_2` (`id_alumno`),
  ADD KEY `FK_CODIGO_ALUMNO_3` (`id_profesor`);

--
-- Indices de la tabla `detalle_actividad`
--
ALTER TABLE `detalle_actividad`
  ADD PRIMARY KEY (`id_detalle_actividad`),
  ADD KEY `FK_detalle_actividad_1` (`id_periodo`),
  ADD KEY `FK_detalle_actividad_2` (`id_actividad`);

--
-- Indices de la tabla `detalle_grado`
--
ALTER TABLE `detalle_grado`
  ADD PRIMARY KEY (`id_detalle_grado`),
  ADD KEY `FK_detalle_grado_1` (`id_grado`),
  ADD KEY `FK_detalle_grado_2` (`id_seccion`);

--
-- Indices de la tabla `detalle_horario`
--
ALTER TABLE `detalle_horario`
  ADD PRIMARY KEY (`id_detalle_horario`),
  ADD KEY `FK_detalle_horario_1` (`id_horario`),
  ADD KEY `FK_detalle_horario_2` (`id_asignacion_materia`);

--
-- Indices de la tabla `detalle_materia`
--
ALTER TABLE `detalle_materia`
  ADD PRIMARY KEY (`id_detalle_materia`),
  ADD KEY `FK_detalle_materia_1` (`id_detalle_grado`),
  ADD KEY `FK_detalle_materia_2` (`id_detalle_horario`),
  ADD KEY `FK_detalle_materia_3` (`id_area`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`id_grado`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`);

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`id_inscripcion`),
  ADD KEY `FK_inscripcion_1` (`id_responsable`),
  ADD KEY `FK_inscripcion_2` (`id_padre`),
  ADD KEY `FK_inscripcion_3` (`id_madre`),
  ADD KEY `FK_inscripcion_4` (`id_alumno`);

--
-- Indices de la tabla `madres`
--
ALTER TABLE `madres`
  ADD PRIMARY KEY (`id_madre`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `mensualidad`
--
ALTER TABLE `mensualidad`
  ADD PRIMARY KEY (`id_mensua`);

--
-- Indices de la tabla `mensualidad_alumno`
--
ALTER TABLE `mensualidad_alumno`
  ADD PRIMARY KEY (`id_ma`),
  ADD KEY `FK_ma_mensualidad_1` (`id_mensua`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id_notas`),
  ADD KEY `FK_notas_1` (`id_detalle_actividad`),
  ADD KEY `FK_notas_2` (`id_detalle_materia`),
  ADD KEY `FK_notas_3` (`id_alumno`);

--
-- Indices de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  ADD PRIMARY KEY (`id_observacion`),
  ADD KEY `FK_observaciones_2` (`id_profesor`),
  ADD KEY `FK_observaciones_1` (`id_alumno`);

--
-- Indices de la tabla `pardres`
--
ALTER TABLE `pardres`
  ADD PRIMARY KEY (`id_padre`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`id_periodo`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id_profesor`);

--
-- Indices de la tabla `resonsables`
--
ALTER TABLE `resonsables`
  ADD PRIMARY KEY (`id_responsable`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`id_seccion`);

--
-- Indices de la tabla `tipo_codigo`
--
ALTER TABLE `tipo_codigo`
  ADD PRIMARY KEY (`id_tip_cod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignacion_materia`
--
ALTER TABLE `asignacion_materia`
  MODIFY `id_asignacion_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `codigo`
--
ALTER TABLE `codigo`
  MODIFY `id_cod` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `codigo_alumno`
--
ALTER TABLE `codigo_alumno`
  MODIFY `id_cod_al` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `mensualidad`
--
ALTER TABLE `mensualidad`
  MODIFY `id_mensua` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `mensualidad_alumno`
--
ALTER TABLE `mensualidad_alumno`
  MODIFY `id_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id_notas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  MODIFY `id_observacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `pardres`
--
ALTER TABLE `pardres`
  MODIFY `id_padre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `resonsables`
--
ALTER TABLE `resonsables`
  MODIFY `id_responsable` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo_codigo`
--
ALTER TABLE `tipo_codigo`
  MODIFY `id_tip_cod` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `FK_alumno_1` FOREIGN KEY (`id_detalle_grado`) REFERENCES `detalle_grado` (`id_detalle_grado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asignacion_materia`
--
ALTER TABLE `asignacion_materia`
  ADD CONSTRAINT `FK_asignacion_materia_1` FOREIGN KEY (`id_profesor`) REFERENCES `profesores` (`id_profesor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_asignacion_materia_2` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `FK_asistencia_1` FOREIGN KEY (`id_detalle_materia`) REFERENCES `detalle_materia` (`id_detalle_materia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_asistencia_2` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `codigo`
--
ALTER TABLE `codigo`
  ADD CONSTRAINT `FK_codigo_tipo` FOREIGN KEY (`id_tip_cod`) REFERENCES `tipo_codigo` (`id_tip_cod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `codigo_alumno`
--
ALTER TABLE `codigo_alumno`
  ADD CONSTRAINT `FK_CODIGO_ALUMNO_1` FOREIGN KEY (`id_cod`) REFERENCES `codigo` (`id_cod`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CODIGO_ALUMNO_2` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CODIGO_ALUMNO_3` FOREIGN KEY (`id_profesor`) REFERENCES `profesores` (`id_profesor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_actividad`
--
ALTER TABLE `detalle_actividad`
  ADD CONSTRAINT `FK_detalle_actividad_1` FOREIGN KEY (`id_periodo`) REFERENCES `periodo` (`id_periodo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_detalle_actividad_2` FOREIGN KEY (`id_actividad`) REFERENCES `actividad` (`id_actividad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_grado`
--
ALTER TABLE `detalle_grado`
  ADD CONSTRAINT `FK_detalle_grado_1` FOREIGN KEY (`id_grado`) REFERENCES `grado` (`id_grado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_detalle_grado_2` FOREIGN KEY (`id_seccion`) REFERENCES `seccion` (`id_seccion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_horario`
--
ALTER TABLE `detalle_horario`
  ADD CONSTRAINT `FK_detalle_horario_1` FOREIGN KEY (`id_horario`) REFERENCES `horario` (`id_horario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_detalle_horario_2` FOREIGN KEY (`id_asignacion_materia`) REFERENCES `asignacion_materia` (`id_asignacion_materia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_materia`
--
ALTER TABLE `detalle_materia`
  ADD CONSTRAINT `FK_detalle_materia_1` FOREIGN KEY (`id_detalle_grado`) REFERENCES `detalle_grado` (`id_detalle_grado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_detalle_materia_2` FOREIGN KEY (`id_detalle_horario`) REFERENCES `detalle_horario` (`id_detalle_horario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_detalle_materia_3` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `FK_inscripcion_1` FOREIGN KEY (`id_responsable`) REFERENCES `resonsables` (`id_responsable`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_inscripcion_2` FOREIGN KEY (`id_padre`) REFERENCES `pardres` (`id_padre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_inscripcion_3` FOREIGN KEY (`id_madre`) REFERENCES `madres` (`id_madre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_inscripcion_4` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mensualidad_alumno`
--
ALTER TABLE `mensualidad_alumno`
  ADD CONSTRAINT `FK_ma_mensualidad_1` FOREIGN KEY (`id_mensua`) REFERENCES `mensualidad` (`id_mensua`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `FK_notas_1` FOREIGN KEY (`id_detalle_actividad`) REFERENCES `detalle_actividad` (`id_detalle_actividad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_notas_2` FOREIGN KEY (`id_detalle_materia`) REFERENCES `detalle_materia` (`id_detalle_materia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_notas_3` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `observaciones`
--
ALTER TABLE `observaciones`
  ADD CONSTRAINT `FK_observaciones_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_observaciones_2` FOREIGN KEY (`id_profesor`) REFERENCES `profesores` (`id_profesor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
