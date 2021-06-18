-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2021 a las 22:30:40
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `library`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `No_admin` int(11) NOT NULL,
  `Nombre_Admin` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido_Padmin` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido_Madmin` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Correo_Admin` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`No_admin`, `Nombre_Admin`, `Apellido_Padmin`, `Apellido_Madmin`, `Correo_Admin`) VALUES
(1, 'yukimaru', 'kurusu', 'yato', 'ken@gmail.com');

--
-- Disparadores `administrador`
--
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `No_alu` int(11) NOT NULL,
  `Nombre_alu` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido_P` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido_M` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `grado_grupo` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`No_alu`, `Nombre_alu`, `Apellido_P`, `Apellido_M`, `grado_grupo`) VALUES
(1, 'Yukimaru', 'Kurusu', 'Hebi', '1B'),
(2, 'Kenji', 'Midory', 'Bakugen', '1A'),
(3, 'Tonathiu', 'Higuera', 'Kanbara', '1B'),
(4, 'Natsume', 'Kurohan', 'Hebi', '1C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `id_autor` int(11) NOT NULL,
  `Nombre_au` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_au` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`id_autor`, `Nombre_au`, `apellido_au`) VALUES
(1, 'Kahiu', 'Shirai'),
(2, 'Kenji', 'Midory'),
(3, 'Sakae', 'Esuno'),
(4, 'Riichiro', 'Inagaki'),
(5, 'Sakae', 'Esuno'),
(9, 'James', 'Dashner');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

CREATE TABLE `editorial` (
  `id_edi` int(11) NOT NULL,
  `Nombre_edi` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`id_edi`, `Nombre_edi`) VALUES
(1, 'Panini'),
(2, 'Kamito'),
(3, 'Shueisha'),
(7, 'V&R');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `auto` int(50) NOT NULL,
  `edi` int(150) NOT NULL,
  `status` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `titulo`, `auto`, `edi`, `status`) VALUES
(1, 'The promised neverland', 1, 1, 'Prestado'),
(2, 'Mirai Nikki', 3, 2, 'Prestado'),
(3, 'Dr Stone', 4, 3, 'Disponible'),
(4, 'Ansatsu kyoshitsu', 3, 2, 'Disponible'),
(8, 'Maze Runner', 9, 7, 'Prestado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id_p` int(11) NOT NULL,
  `id_lib` int(11) NOT NULL,
  `id_alu` int(11) NOT NULL,
  `fecha_prestamo` date NOT NULL,
  `fecha_entrega` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`id_p`, `id_lib`, `id_alu`, `fecha_prestamo`, `fecha_entrega`) VALUES
(1, 1, 2, '2020-07-07', '2020-07-14'),
(3, 2, 3, '2020-07-07', '2020-07-09'),
(4, 8, 1, '2021-02-08', '2021-02-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `control` int(20) NOT NULL,
  `password_Usua` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Nivel` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`control`, `password_Usua`, `Nivel`) VALUES
(1, 'dashi01', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`No_admin`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`No_alu`);

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indices de la tabla `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`id_edi`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`),
  ADD KEY `edi` (`edi`),
  ADD KEY `auto` (`auto`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `No_alu` (`id_alu`),
  ADD KEY `id_libro` (`id_lib`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`control`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `No_alu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `editorial`
--
ALTER TABLE `editorial`
  MODIFY `id_edi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`edi`) REFERENCES `editorial` (`id_edi`),
  ADD CONSTRAINT `libros_ibfk_2` FOREIGN KEY (`auto`) REFERENCES `autor` (`id_autor`);

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`id_alu`) REFERENCES `alumnos` (`No_alu`),
  ADD CONSTRAINT `prestamos_ibfk_10` FOREIGN KEY (`id_lib`) REFERENCES `libros` (`id_libro`),
  ADD CONSTRAINT `prestamos_ibfk_2` FOREIGN KEY (`id_lib`) REFERENCES `libros` (`id_libro`),
  ADD CONSTRAINT `prestamos_ibfk_3` FOREIGN KEY (`id_alu`) REFERENCES `alumnos` (`No_alu`),
  ADD CONSTRAINT `prestamos_ibfk_4` FOREIGN KEY (`id_lib`) REFERENCES `libros` (`id_libro`),
  ADD CONSTRAINT `prestamos_ibfk_5` FOREIGN KEY (`id_alu`) REFERENCES `alumnos` (`No_alu`),
  ADD CONSTRAINT `prestamos_ibfk_6` FOREIGN KEY (`id_lib`) REFERENCES `libros` (`id_libro`),
  ADD CONSTRAINT `prestamos_ibfk_7` FOREIGN KEY (`id_alu`) REFERENCES `alumnos` (`No_alu`),
  ADD CONSTRAINT `prestamos_ibfk_8` FOREIGN KEY (`id_lib`) REFERENCES `libros` (`id_libro`),
  ADD CONSTRAINT `prestamos_ibfk_9` FOREIGN KEY (`id_alu`) REFERENCES `alumnos` (`No_alu`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`control`) REFERENCES `administrador` (`No_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
