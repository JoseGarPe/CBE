-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2017 a las 14:34:04
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
-- Base de datos: `escuela_lice`
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
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(5) NOT NULL,
  `nombre` int(200) NOT NULL,
  `apellido` int(200) NOT NULL,
  `clave` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` varchar(5) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `clave` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `id_detalle_grado` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `nombre`, `apellido`, `nie`, `clave`, `id_detalle_grado`) VALUES
('JS000124', 'LOREM IPSU', 'IPSU LOREM', '06141207971061', 'b221d9dbb083a7f33428d7c2a3c3198ae925614d70210e28716ccaa7cd4ddb79', 'DT000001'),
('VM152233', 'Rodrigo Alejandro', 'Valladares Mejia', '06141207971060', 'b221d9dbb083a7f33428d7c2a3c3198ae925614d70210e28716ccaa7cd4ddb79', 'DT000001'),
('VM332251', 'Alejandro Rodrigo', 'Mejia Valladares', '06141207971061', 'b221d9dbb083a7f33428d7c2a3c3198ae925614d70210e28716ccaa7cd4ddb79', 'DT000001');

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
('AR002', 'Educacion media');

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
(2, 'HK002', 'IG001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `id_alumno` varchar(8) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `id_detalle_materia` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_asistencia`, `fecha`, `id_alumno`, `estado`, `id_detalle_materia`) VALUES
(1, '2017-12-15', 'VM152233', 'Ausente', 'DM001'),
(2, '2017-12-15', 'VM332251', 'Ausente', 'DM001'),
(3, '2017-12-15', 'JS000124', 'No ausente', 'DM001'),
(4, '2017-12-15', 'VM152233', 'No ausente', 'DM002'),
(5, '2017-12-15', 'VM332251', 'No ausente', 'DM002'),
(6, '2017-12-15', 'JS000124', 'No ausente', 'DM002');

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
('DA001', 'PE001', 'AC001', 25),
('DA002', 'PE001', 'AC002', 25),
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
('GR010', 'Primer año'),
('GR011', 'Segundo año');

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
('MA001', 'Matematicas'),
('CN001', 'Ciencias naturales'),
('IG001', 'Ingles'),
('SC001', 'Estudios sociales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensualidad_alumno`
--

CREATE TABLE `mensualidad_alumno` (
  `id_ma` int(11) NOT NULL,
  `id_mensua` int(2) NOT NULL,
  `id_alumno` char(8) NOT NULL,
  `estado` varchar(75) NOT NULL,
  `anio` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `id_detalle_materia` varchar(5) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `observaciones`
--

INSERT INTO `observaciones` (`id_observacion`, `fecha`, `id_alumno`, `id_detalle_materia`, `descripcion`) VALUES
(1, '2017-12-15', 'VM152233', 'DM001', 'No presenta tareas.'),
(2, '2017-12-15', 'VM152233', 'DM002', 'Corte de cabello inadecuado.');

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
  `direccion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id_profesor`, `nombre`, `apellido`, `clave`, `dui`, `telefono`, `correo`, `direccion`) VALUES
('HK001', 'LOREM IPSU', 'OPSU LORME', 'b221d9dbb083a7f33428d7c2a3c3198ae925614d70210e28716ccaa7cd4ddb79', '055583427', '71526065', 'ajaoakakaa@gmail.com', 'Col. Asdasd '),
('HK002', 'LOREM IPS', 'IOS IPS', 'b221d9dbb083a7f33428d7c2a3c3198ae925614d70210e28716ccaa7cd4ddb79', '055583422', '71526065', 'ajaoakakaa@gmail.com', 'Col. Asdasd ');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `id_seccion` varchar(5) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`id_seccion`, `nombre`) VALUES
('SEC01', 'A'),
('SEC02', 'B'),
('SEC03', 'C');

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
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `asignacion_materia`
--
ALTER TABLE `asignacion_materia`
  ADD PRIMARY KEY (`id_asignacion_materia`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`);

--
-- Indices de la tabla `avisos`
--
ALTER TABLE `avisos`
  ADD PRIMARY KEY (`id_aviso`);

--
-- Indices de la tabla `detalle_actividad`
--
ALTER TABLE `detalle_actividad`
  ADD PRIMARY KEY (`id_detalle_actividad`);

--
-- Indices de la tabla `detalle_grado`
--
ALTER TABLE `detalle_grado`
  ADD PRIMARY KEY (`id_detalle_grado`);

--
-- Indices de la tabla `detalle_horario`
--
ALTER TABLE `detalle_horario`
  ADD PRIMARY KEY (`id_detalle_horario`);

--
-- Indices de la tabla `detalle_materia`
--
ALTER TABLE `detalle_materia`
  ADD PRIMARY KEY (`id_detalle_materia`);

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
  ADD PRIMARY KEY (`id_inscripcion`);

--
-- Indices de la tabla `mensualidad_alumno`
--
ALTER TABLE `mensualidad_alumno`
  ADD PRIMARY KEY (`id_ma`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id_notas`);

--
-- Indices de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  ADD PRIMARY KEY (`id_observacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignacion_materia`
--
ALTER TABLE `asignacion_materia`
  MODIFY `id_asignacion_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `mensualidad_alumno`
--
ALTER TABLE `mensualidad_alumno`
  MODIFY `id_ma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id_notas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  MODIFY `id_observacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
