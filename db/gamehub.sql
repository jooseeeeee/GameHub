-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2024 a las 13:19:09
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gamehub`
--
CREATE DATABASE IF NOT EXISTS `gamehub` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gamehub`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `platforms` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `genre` varchar(60) NOT NULL,
  `score` decimal(2,1) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `recommended` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `games`
--

INSERT INTO `games` (`id`, `title`, `description`, `platforms`, `date`, `genre`, `score`, `photo`, `recommended`) VALUES
(1, 'Chrono Trigger', 'Embárcate en un viaje épico a través del tiempo con Chrono Trigger. Este clásico juego de rol japonés te sumerge en una emocionante aventura donde controlas a Crono y sus amigos mientras intentan salvar el mundo de un destino catastrófico. Con un innovador sistema de combate que permite batallas fluidas y estratégicas, una narrativa rica y emocionante, así como múltiples finales que se ven influenciados por tus decisiones, Chrono Trigger es un tesoro atemporal que cautivará tanto a los veteranos de los juegos de rol como a los recién llegados. Descubre la magia de la amistad y el poder de la determinación mientras exploras paisajes variados, luchas contra enemigos formidables y desentrañas los misterios del tiempo en este clásico inolvidable de PlayStation', 'PS1', '1995-03-11', 'Rol', 9.0, 'caratulas/ChronoTrigger.png', 0),
(2, 'Crash Bandicoot', 'Sumérgete en la acción trepidante y la diversión sin fin con Crash Bandicoot para PlayStation. Únete a Crash, un marsupial intrépido con una actitud audaz, en su misión para detener al malvado Doctor Neo Cortex y salvar a su amiga Tawna. Con gráficos vibrantes y coloridos, niveles desafiantes llenos de obstáculos y enemigos, y una banda sonora inolvidable, Crash Bandicoot es una experiencia clásica de plataformas que te mantendrá enganchado durante horas. ¡Prepárate para saltar, girar y girar mientras te abres camino a través de selvas exuberantes, ruinas antiguas y peligrosos laboratorios en esta aventura llena de nostalgia que ha cautivado a jugadores de todas las edades!', 'PS1', '1996-09-09', 'Plataformas', 7.5, 'caratulas/CrashBandicoot.png', 1),
(3, 'Crash Team Racing', 'Únete a Crash Bandicoot y a sus amigos mientras compiten en emocionantes carreras de karts llenas de giros, saltos y poderosos power-ups. Con una amplia variedad de personajes jugables, desde los héroes favoritos de los fans hasta los villanos más astutos, y una selección de pistas desafiantes y vibrantes llenas de secretos por descubrir, Crash Team Racing ofrece una experiencia multijugador inigualable que te mantendrá regresando por más. ¡Domina los derrapes, ejecuta acrobacias impresionantes y lucha por el primer lugar en este clásico juego de carreras que es una explosión de diversión para toda la familia', 'PS1', '1999-12-16', 'Carreras', 8.0, 'caratulas/CrashTeamRacing.png', 0),
(4, 'Dino Crisis', 'Adéntrate en un mundo lleno de terror y supervivencia con Dino Crisis para PlayStation! De los creadores de Resident Evil, este emocionante juego de acción y aventura te transporta a una isla infestada de dinosaurios creados genéticamente. Como la agente especial Regina, tu misión es investigar una instalación de investigación secreta y descubrir los misterios detrás de la desaparición de un equipo de científicos. Con gráficos realistas y una atmósfera tensa, Dino Crisis ofrece una experiencia de juego inmersiva y llena de suspense. Utiliza armas y herramientas estratégicamente mientras te enfrentas a peligrosos reptiles prehistóricos en combates intensos y resuelve intrincados rompecabezas para avanzar en la historia. ¡Prepárate para la lucha por la supervivencia en este clásico del género de horror de PlayStation que te mantendrá en vilo hasta el último momento', 'PS1', '1999-07-01', 'Terror', 7.0, 'caratulas/DinoCrisis.png', 0),
(5, 'Final Fantasy VII', 'Sumérgete en un mundo de fantasía épica y emocionante con Final Fantasy VII para PlayStation. Este icónico juego de rol te lleva a la ciudad de Midgar y más allá, donde te unirás a Cloud Strife, un mercenario ex-SOLDADO, en su lucha contra la malévola corporación Shinra y el despiadado Sephiroth. Con gráficos impresionantes para su época, una narrativa profunda y compleja, y un sistema de combate estratégico basado en turnos, Final Fantasy VII ofrece una experiencia de juego inolvidable que ha cautivado a jugadores de todo el mundo durante décadas. Explora paisajes vastos y variados, conoce a personajes inolvidables y desentraña los secretos de un mundo al borde del colapso en este clásico atemporal de PlayStation que sigue siendo una obra maestra del género de los juegos de rol.', 'PS1', '1997-01-31', 'Rol', 9.5, 'caratulas/FinalFantasyVII.png', 1),
(6, 'Resident Evil', 'Ambientado en la misteriosa mansión de los Spencer en las afueras de Raccoon City, este juego de terror clásico te desafía a explorar sus ominosos pasillos infestados de zombis y criaturas mutantes. Como miembro de los equipos especiales de S.T.A.R.S., tu misión es descubrir los oscuros secretos detrás de los experimentos biológicos ilegales llevados a cabo por la corporación Umbrella. Con gráficos realistas y una atmósfera tensa, Resident Evil ofrece una experiencia de juego inmersiva que te mantendrá al borde de tu asiento. Resuelve acertijos, administra recursos limitados y lucha por tu vida en este clásico del género de horror de supervivencia que ha dejado una marca indeleble en la historia de los videojuegos.', 'PS1', '1998-07-24', 'Terror', 9.7, 'caratulas/ResidentEvil.png', 1),
(7, 'Resident Evil 2', 'Ambientado en la desolada Raccoon City, este clásico juego de terror te lleva a enfrentarte a hordas de zombis y criaturas monstruosas mientras intentas sobrevivir y descubrir la verdad detrás del brote viral que ha consumido la ciudad. Con una narrativa envolvente, gráficos detallados y un sistema de juego inmersivo, Resident Evil 2 ofrece una experiencia escalofriante que desafiará tus nervios y habilidades. Elige entre dos personajes jugables, Leon Kennedy y Claire Redfield, cada uno con su propia historia y desafíos únicos, y desbloquea múltiples finales mientras exploras los oscuros rincones de Raccoon City en busca de respuestas. Prepárate para enfrentarte a tus peores pesadillas en este clásico atemporal de PlayStation que sigue siendo una referencia en el género de los juegos de terror de supervivencia.', 'PS1', '1998-01-21', 'Terror', 9.8, 'caratulas/ResidentEvil2.png', 1),
(8, 'Donkey Kong CR', '¡La aventura clásica de Donkey Kong regresa con una explosión en Donkey Kong Country Returns! Únete a Donkey Kong y a su fiel compañero Diddy Kong en una emocionante misión para recuperar su preciosa reserva de plátanos de las garras de los malvados Tiki Tak Tribe. Viaja a través de paisajes exuberantes y desafiantes, desde junglas frondosas hasta cuevas subterráneas, mientras saltas, corres y ruedas por niveles llenos de acción y secretos por descubrir. ¡Prepárate para enfrentarte a jefes gigantescos y superar obstáculos intensos en esta nueva entrega de la serie Donkey Kong Country! ¿Tienes lo que se necesita para ayudar a Donkey Kong y Diddy Kong a salvar su hogar?', 'Wii', '2010-11-21', 'Plataformas', 9.2, 'caratulas/DonkeyKongCountryReturns.png', 1),
(9, 'Mario Kart Wii', '¡Prepárate para la carrera más emocionante de tu vida con Mario Kart Wii! Únete a Mario, Luigi, Peach y otros personajes favoritos de Nintendo en una aventura de velocidad sin límites. ¡Elige tu vehículo, agarra un control y acelera a través de emocionantes pistas llenas de obstáculos, trampas y potenciadores! Domina el volante y muestra tus habilidades en una variedad de modos de juego, incluyendo Grand Prix, Time Trials y el frenético modo Battle. ¡Conéctate con hasta 12 jugadores en línea y compite contra corredores de todo el mundo! ¡Mario Kart Wii te llevará a la línea de meta con diversión y emoción sin fin para toda la familia!', 'Wii', '2008-04-27', 'Carreras', 9.1, 'caratulas/MarioKartWii.png', 1),
(10, 'Super Mario Galaxy', '¡Únete a Mario mientras explora planetas misteriosos y emocionantes en Super Mario Galaxy! Acompaña a Mario mientras viaja a través del espacio para rescatar a la Princesa Peach de las garras de Bowser una vez más. Salta de planeta en planeta, desafía la gravedad y derrota a enemigos intergalácticos en una aventura épica llena de acción y diversión. Con controles intuitivos y una historia cautivadora, Super Mario Galaxy lleva la franquicia a nuevas alturas. ¿Estás listo para salvar el universo?', 'Wii', '2007-11-12', 'Plataformas', 8.8, 'caratulas/SuperMarioGalaxy.png', 1),
(11, 'Super Smash Bros', 'Únete a tus personajes favoritos de Nintendo en una batalla épica con Super Smash Bros: Brawl, el juego de lucha definitivo que reúne a los personajes más icónicos de Nintendo y más allá en una batalla frenética y llena de acción. Con un elenco de más de 30 personajes jugables, incluidos Mario, Link, Pikachu, Kirby y muchos más, prepárate para librar emocionantes combates en una amplia variedad de escenarios inspirados en los juegos clásicos de Nintendo. Descubre modos de juego emocionantes como el modo historia Subspace Emissary, donde lucharás contra enemigos en una narrativa épica para salvar el universo de la destrucción. Además, disfruta de emocionantes batallas multijugador local y en línea, donde podrás desafiar a tus amigos o competir contra jugadores de todo el mundo.', 'Wii', '2008-06-27', 'Pelea', 8.5, 'caratulas/SuperSmashBrosBrawl.png', 1),
(12, 'Wii Sports', ' Domina cinco emocionantes disciplinas deportivas: tenis, béisbol, bolos, golf y boxeo, ¡todo con el poder de tus movimientos! Agarra tu mando de Wii y sumérgete en juegos rápidos y divertidos diseñados para jugadores de todas las edades y habilidades. Desde un emocionante partido de tenis hasta una ronda relajante de golf, Wii Sports ofrece algo para todos. ¡Reúne a amigos y familiares para competir en torneos y desafíos o simplemente disfruta de la diversión sin fin en solitario! Con controles intuitivos y una variedad de modos de juego, Wii Sports es la manera perfecta de hacer ejercicio y divertirse frente a la pantalla.', 'Wii', '2006-11-19', 'Deportes', 9.0, 'caratulas/WiiSports.png', 1),
(13, 'Resident Evil 4', 'Únete a Leon S. Kennedy en su peligrosa misión para rescatar a la hija del presidente en un oscuro pueblo rural plagado de criaturas horripilantes. Con controles intuitivos y mejorados para la Wii, apunta, dispara y lucha contra tus enemigos con precisión mortal mientras te sumerges en una trama llena de giros y sorpresas. Desde enfrentamientos aterradores con jefes hasta secuencias de acción emocionantes, Resident Evil 4 te mantendrá al borde de tu asiento en cada momento. ¿Tienes lo que se necesita para sobrevivir a esta pesadilla?', 'Wii', '2007-06-19', 'Terror', 9.0, 'caratulas/ResidentEvil4.png', 1),
(14, 'TLoZ: Skyward Sword', 'Únete a Link en una épica aventura donde la princesa Zelda ha desaparecido, secuestrada por una fuerza oscura conocida como Ghirahim, que busca liberar a un antiguo mal conocido como el Señor Demonio. Ahora, Link debe volar sobre los cielos, explorar el vasto mundo bajo las nubes y enfrentarse a poderosos enemigos para salvar a su amiga y desentrañar el misterio de su propio destino. Vive una historia emocionante llena de giros inesperados y personajes memorables. Convierte tu mando de Wii en la espada y el escudo de Link y sumérgete en emocionantes combates con controles precisos y sensibles al movimiento gracias al Wii MotionPlus. Explora las vastas tierras de Hyrule, resuelve acertijos desafiantes y desentraña antiguos misterios.', 'Wii', '2011-11-18', 'Aventura', 9.6, 'caratulas/TheLegendOfZeldaSW.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(1, 'Jose Morenoo', 'jose', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_games`
--

DROP TABLE IF EXISTS `users_games`;
CREATE TABLE `users_games` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users_games`
--

INSERT INTO `users_games` (`id`, `user_id`, `game_id`) VALUES
(58, 1, 9),
(59, 1, 5),
(60, 1, 13),
(61, 1, 14),
(62, 1, 11),
(63, 1, 10),
(64, 1, 4),
(65, 1, 6),
(66, 1, 7),
(67, 1, 12),
(68, 1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_favorite_games`
--

DROP TABLE IF EXISTS `user_favorite_games`;
CREATE TABLE `user_favorite_games` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `game_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user_favorite_games`
--

INSERT INTO `user_favorite_games` (`id`, `user_id`, `game_id`) VALUES
(27, 1, 8),
(28, 1, 14),
(29, 1, 12),
(30, 1, 9);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users_games`
--
ALTER TABLE `users_games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`),
  ADD KEY `fk_game_id` (`game_id`);

--
-- Indices de la tabla `user_favorite_games`
--
ALTER TABLE `user_favorite_games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id_favorite` (`user_id`),
  ADD KEY `fk_game_id_favorite` (`game_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users_games`
--
ALTER TABLE `users_games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `user_favorite_games`
--
ALTER TABLE `user_favorite_games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users_games`
--
ALTER TABLE `users_games`
  ADD CONSTRAINT `fk_game_id` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_favorite_games`
--
ALTER TABLE `user_favorite_games`
  ADD CONSTRAINT `fk_game_id_favorite` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_user_id_favorite` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
