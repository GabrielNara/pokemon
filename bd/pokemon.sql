-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-05-2023 a las 01:13:20
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pokemon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemones`
--

CREATE TABLE `pokemones` (
  `idPokemon` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pokemones`
--

INSERT INTO `pokemones` (`idPokemon`, `numero`, `tipo`, `nombre`, `descripcion`, `imagen`) VALUES
(1, 1, 2, 'Bulbasaur', 'Bulbasaur es un Pokémon cuadrúpedo de color verde y manchas más oscuras de formas geométricas', 'Bulbasaur.webp'),
(2, 2, 2, 'Ivysaur', 'Ivysaur posee un color azulado más vivo que su preevolución Bulbasaur. Además, sus ojos adquieren un leve tono violeta y sus pupilas se vuelven negras.', 'Ivysaur.webp'),
(3, 3, 2, 'Venusaur', 'Su nombre es una combinación de las palabras Venus (una flor parecida a la planta que le crece desde su etapa como Bulbasaur) y saur, que viene del griego saurus, que quiere decir reptil o lagarto ', 'Venusaur.webp'),
(4, 4, 1, 'Charmander', 'Charmander es un pequeño lagarto bípedo. Sus características de fuego son resaltadas por su color de piel anaranjado y su cola con la punta envuelta en llamas. ', 'Charmander.webp'),
(5, 5, 1, 'Charmeleon', 'Su nombre es una contracción de las palabras inglesas char (carbonizar, quemar) y chameleon (camaleón). ', 'Charmeleon.webp'),
(6, 6, 1, 'Charizard', 'a mayoría de los Charizard viven en el Valle Charirrífico. Es conocido que les gusta vivir en lugares altos y calientes, por lo que se encuentran en muchas ocasiones cerca de volcanes. ', 'Charizard.webp'),
(7, 7, 3, 'Squirtle', 'Squirtle es una de las especies más difíciles de encontrar. Habita tanto aguas dulces como marinas, preferiblemente zonas bastante profundas.', 'Squirtle.webp'),
(8, 8, 3, 'Wartortle', 'Wartortle es una tortuga de color azul índigo, con una pomposa cola, orejas con forma de aleta, y un caparazón de color café oscuro. ', 'Wartortle.webp'),
(10, 9, 3, 'Blastoise', 'Blastoise es una enorme tortuga bípeda, que puede extender unos poderosos cañones situados en su espalda para disparar potentes chorros de agua, con la fuerza suficiente para quebrar muros de cemento o metales delgados. Pueden disparar balas de agua con s', 'Blastoise.webp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id` int(11) NOT NULL,
  `tipo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id`, `tipo`) VALUES
(1, 'Fuego'),
(2, 'Planta'),
(3, 'Agua'),
(4, 'Volador'),
(5, 'Fantasma'),
(6, 'Normal'),
(7, 'Psíquico'),
(8, 'Tierra'),
(9, 'Roca'),
(10, 'Dragón'),
(11, 'Eléctrico'),
(12, 'Bicho'),
(13, 'Lucha'),
(14, 'Veneno'),
(15, 'Acero'),
(16, 'Hada'),
(17, 'Hielo'),
(18, 'Siniestro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `contrasena`) VALUES
('admin', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pokemones`
--
ALTER TABLE `pokemones`
  ADD PRIMARY KEY (`idPokemon`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pokemones`
--
ALTER TABLE `pokemones`
  MODIFY `idPokemon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
