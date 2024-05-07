-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-05-2024 a las 21:25:28
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
DROP DATABASE IF EXISTS `gamehub`;
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
  `platform` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `genre` varchar(20) NOT NULL,
  `score` decimal(2,1) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `recommended` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `games`
--

INSERT INTO `games` (`id`, `title`, `description`, `platform`, `date`, `genre`, `score`, `photo`, `recommended`) VALUES
(1, 'Chrono Trigger', 'Embárcate en un viaje épico a través del tiempo con Chrono Trigger. Este clásico juego de rol japonés te sumerge en una emocionante aventura donde controlas a Crono y sus amigos mientras intentan salvar el mundo de un destino catastrófico. Con un innovador sistema de combate que permite batallas fluidas y estratégicas, una narrativa rica y emocionante, así como múltiples finales que se ven influenciados por tus decisiones, Chrono Trigger es un tesoro atemporal que cautivará tanto a los veteranos de los juegos de rol como a los recién llegados. Descubre la magia de la amistad y el poder de la determinación mientras exploras paisajes variados, luchas contra enemigos formidables y desentrañas los misterios del tiempo en este clásico inolvidable de PlayStation', 'PS1', '1995-03-11', 'Rol', 9.0, 'caratulas/ChronoTrigger.png', 0),
(2, 'Crash Bandicoot', 'Sumérgete en la acción trepidante y la diversión sin fin con Crash Bandicoot para PlayStation. Únete a Crash, un marsupial intrépido con una actitud audaz, en su misión para detener al malvado Doctor Neo Cortex y salvar a su amiga Tawna. Con gráficos vibrantes y coloridos, niveles desafiantes llenos de obstáculos y enemigos, y una banda sonora inolvidable, Crash Bandicoot es una experiencia clásica de plataformas que te mantendrá enganchado durante horas. ¡Prepárate para saltar, girar y girar mientras te abres camino a través de selvas exuberantes, ruinas antiguas y peligrosos laboratorios en esta aventura llena de nostalgia que ha cautivado a jugadores de todas las edades!', 'PS1', '1996-09-09', 'Plataformas', 7.5, 'caratulas/CrashBandicoot.png', 0),
(3, 'Crash Team Racing', 'Únete a Crash Bandicoot y a sus amigos mientras compiten en emocionantes carreras de karts llenas de giros, saltos y poderosos power-ups. Con una amplia variedad de personajes jugables, desde los héroes favoritos de los fans hasta los villanos más astutos, y una selección de pistas desafiantes y vibrantes llenas de secretos por descubrir, Crash Team Racing ofrece una experiencia multijugador inigualable que te mantendrá regresando por más. ¡Domina los derrapes, ejecuta acrobacias impresionantes y lucha por el primer lugar en este clásico juego de carreras que es una explosión de diversión para toda la familia', 'PS1', '1999-12-16', 'Carreras', 8.0, 'caratulas/CrashTeamRacing.png', 0),
(4, 'Dino Crisis', 'Adéntrate en un mundo lleno de terror y supervivencia con Dino Crisis para PlayStation! De los creadores de Resident Evil, este emocionante juego de acción y aventura te transporta a una isla infestada de dinosaurios creados genéticamente. Como la agente especial Regina, tu misión es investigar una instalación de investigación secreta y descubrir los misterios detrás de la desaparición de un equipo de científicos. Con gráficos realistas y una atmósfera tensa, Dino Crisis ofrece una experiencia de juego inmersiva y llena de suspense. Utiliza armas y herramientas estratégicamente mientras te enfrentas a peligrosos reptiles prehistóricos en combates intensos y resuelve intrincados rompecabezas para avanzar en la historia. ¡Prepárate para la lucha por la supervivencia en este clásico del género de horror de PlayStation que te mantendrá en vilo hasta el último momento', 'PS1', '1999-07-01', 'Terror', 7.0, 'caratulas/DinoCrisis.png', 0),
(5, 'Final Fantasy VII', 'Sumérgete en un mundo de fantasía épica y emocionante con Final Fantasy VII para PlayStation. Este icónico juego de rol te lleva a la ciudad de Midgar y más allá, donde te unirás a Cloud Strife, un mercenario ex-SOLDADO, en su lucha contra la malévola corporación Shinra y el despiadado Sephiroth. Con gráficos impresionantes para su época, una narrativa profunda y compleja, y un sistema de combate estratégico basado en turnos, Final Fantasy VII ofrece una experiencia de juego inolvidable que ha cautivado a jugadores de todo el mundo durante décadas. Explora paisajes vastos y variados, conoce a personajes inolvidables y desentraña los secretos de un mundo al borde del colapso en este clásico atemporal de PlayStation que sigue siendo una obra maestra del género de los juegos de rol.', 'PS1', '1997-01-31', 'Rol', 9.5, 'caratulas/FinalFantasyVII.png', 1),
(6, 'Resident Evil', 'Ambientado en la misteriosa mansión de los Spencer en las afueras de Raccoon City, este juego de terror clásico te desafía a explorar sus ominosos pasillos infestados de zombis y criaturas mutantes. Como miembro de los equipos especiales de S.T.A.R.S., tu misión es descubrir los oscuros secretos detrás de los experimentos biológicos ilegales llevados a cabo por la corporación Umbrella. Con gráficos realistas y una atmósfera tensa, Resident Evil ofrece una experiencia de juego inmersiva que te mantendrá al borde de tu asiento. Resuelve acertijos, administra recursos limitados y lucha por tu vida en este clásico del género de horror de supervivencia que ha dejado una marca indeleble en la historia de los videojuegos.', 'PS1', '1998-07-24', 'Terror', 9.7, 'caratulas/ResidentEvil.png', 0),
(7, 'Resident Evil 2', 'Ambientado en la desolada Raccoon City, este clásico juego de terror te lleva a enfrentarte a hordas de zombis y criaturas monstruosas mientras intentas sobrevivir y descubrir la verdad detrás del brote viral que ha consumido la ciudad. Con una narrativa envolvente, gráficos detallados y un sistema de juego inmersivo, Resident Evil 2 ofrece una experiencia escalofriante que desafiará tus nervios y habilidades. Elige entre dos personajes jugables, Leon Kennedy y Claire Redfield, cada uno con su propia historia y desafíos únicos, y desbloquea múltiples finales mientras exploras los oscuros rincones de Raccoon City en busca de respuestas. Prepárate para enfrentarte a tus peores pesadillas en este clásico atemporal de PlayStation que sigue siendo una referencia en el género de los juegos de terror de supervivencia.', 'PS1', '1998-01-21', 'Terror', 9.8, 'caratulas/ResidentEvil2.png', 1),
(8, 'Donkey Kong CR', '¡La aventura clásica de Donkey Kong regresa con una explosión en Donkey Kong Country Returns! Únete a Donkey Kong y a su fiel compañero Diddy Kong en una emocionante misión para recuperar su preciosa reserva de plátanos de las garras de los malvados Tiki Tak Tribe. Viaja a través de paisajes exuberantes y desafiantes, desde junglas frondosas hasta cuevas subterráneas, mientras saltas, corres y ruedas por niveles llenos de acción y secretos por descubrir. ¡Prepárate para enfrentarte a jefes gigantescos y superar obstáculos intensos en esta nueva entrega de la serie Donkey Kong Country! ¿Tienes lo que se necesita para ayudar a Donkey Kong y Diddy Kong a salvar su hogar?', 'Wii', '2010-11-21', 'Plataformas', 7.0, 'caratulas/DonkeyKongCountryReturns.png', 0),
(9, 'Mario Kart Wii', '¡Prepárate para la carrera más emocionante de tu vida con Mario Kart Wii! Únete a Mario, Luigi, Peach y otros personajes favoritos de Nintendo en una aventura de velocidad sin límites. ¡Elige tu vehículo, agarra un control y acelera a través de emocionantes pistas llenas de obstáculos, trampas y potenciadores! Domina el volante y muestra tus habilidades en una variedad de modos de juego, incluyendo Grand Prix, Time Trials y el frenético modo Battle. ¡Conéctate con hasta 12 jugadores en línea y compite contra corredores de todo el mundo! ¡Mario Kart Wii te llevará a la línea de meta con diversión y emoción sin fin para toda la familia!', 'Wii', '2008-04-27', 'Carreras', 9.1, 'caratulas/MarioKartWii.png', 0),
(10, 'Super Mario Galaxy', '¡Únete a Mario mientras explora planetas misteriosos y emocionantes en Super Mario Galaxy! Acompaña a Mario mientras viaja a través del espacio para rescatar a la Princesa Peach de las garras de Bowser una vez más. Salta de planeta en planeta, desafía la gravedad y derrota a enemigos intergalácticos en una aventura épica llena de acción y diversión. Con controles intuitivos y una historia cautivadora, Super Mario Galaxy lleva la franquicia a nuevas alturas. ¿Estás listo para salvar el universo?', 'Wii', '2007-11-12', 'Plataformas', 8.8, 'caratulas/SuperMarioGalaxy.png', 1),
(11, 'Super Smash Bros', 'Únete a tus personajes favoritos de Nintendo en una batalla épica con Super Smash Bros: Brawl, el juego de lucha definitivo que reúne a los personajes más icónicos de Nintendo y más allá en una batalla frenética y llena de acción. Con un elenco de más de 30 personajes jugables, incluidos Mario, Link, Pikachu, Kirby y muchos más, prepárate para librar emocionantes combates en una amplia variedad de escenarios inspirados en los juegos clásicos de Nintendo. Descubre modos de juego emocionantes como el modo historia Subspace Emissary, donde lucharás contra enemigos en una narrativa épica para salvar el universo de la destrucción. Además, disfruta de emocionantes batallas multijugador local y en línea, donde podrás desafiar a tus amigos o competir contra jugadores de todo el mundo.', 'Wii', '2008-06-27', 'Pelea', 8.5, 'caratulas/SuperSmashBrosBrawl.png', 0),
(12, 'Wii Sports', ' Domina cinco emocionantes disciplinas deportivas: tenis, béisbol, bolos, golf y boxeo, ¡todo con el poder de tus movimientos! Agarra tu mando de Wii y sumérgete en juegos rápidos y divertidos diseñados para jugadores de todas las edades y habilidades. Desde un emocionante partido de tenis hasta una ronda relajante de golf, Wii Sports ofrece algo para todos. ¡Reúne a amigos y familiares para competir en torneos y desafíos o simplemente disfruta de la diversión sin fin en solitario! Con controles intuitivos y una variedad de modos de juego, Wii Sports es la manera perfecta de hacer ejercicio y divertirse frente a la pantalla.', 'Wii', '2006-11-19', 'Deportes', 9.0, 'caratulas/WiiSports.png', 0),
(13, 'Resident Evil 4', 'Únete a Leon S. Kennedy en su peligrosa misión para rescatar a la hija del presidente en un oscuro pueblo rural plagado de criaturas horripilantes. Con controles intuitivos y mejorados para la Wii, apunta, dispara y lucha contra tus enemigos con precisión mortal mientras te sumerges en una trama llena de giros y sorpresas. Desde enfrentamientos aterradores con jefes hasta secuencias de acción emocionantes, Resident Evil 4 te mantendrá al borde de tu asiento en cada momento. ¿Tienes lo que se necesita para sobrevivir a esta pesadilla?', 'Wii', '2007-06-19', 'Terror', 9.0, 'caratulas/ResidentEvil4.png', 1),
(14, 'TLoZ: Skyward Sword', 'Únete a Link en una épica aventura donde la princesa Zelda ha desaparecido, secuestrada por una fuerza oscura conocida como Ghirahim, que busca liberar a un antiguo mal conocido como el Señor Demonio. Ahora, Link debe volar sobre los cielos, explorar el vasto mundo bajo las nubes y enfrentarse a poderosos enemigos para salvar a su amiga y desentrañar el misterio de su propio destino. Vive una historia emocionante llena de giros inesperados y personajes memorables. Convierte tu mando de Wii en la espada y el escudo de Link y sumérgete en emocionantes combates con controles precisos y sensibles al movimiento gracias al Wii MotionPlus. Explora las vastas tierras de Hyrule, resuelve acertijos desafiantes y desentraña antiguos misterios.', 'Wii', '2011-11-18', 'Aventura', 9.6, 'caratulas/TheLegendOfZeldaSW.png', 0),
(15, 'F1 2023', 'Apura la frenada en EA SPORTS™️ F1®️ 23, el videojuego oficial del 2023 FIA Formula One World Championship™, que incluye todos los coches de 2023 actualizados, con la parrilla oficial de F1®️ y sus 20 pilotos y 10 equipos. Crea el equipo de tus sueños y compite para ganar en el modo Carrera profesional de Mi equipo, compite en pantalla dividida o en el multijugador ampliado con multiplataforma y socializa en las nuevas ligas de RaceNet. 33? ;)', 'PC', '2023-06-16', 'Carreras', 8.2, 'caratulas/F123.png', 1),
(16, 'Alan Wake 2', 'Alan Wake, escritor superventas afincado en Nueva York, desapareció en 2010 durante unas vacaciones en el noroeste del Pacífico con su esposa, Alice Wake, cuando una fuerza de oscuridad sobrenatural se cruzó en sus vidas y provocó que el relato de Wake, una historia de terror, se hiciera realidad. Wake le plantó cara a esta presencia oscura y logro devolverla a su guarida, un lugar oscuro de pesadilla oculto bajo un lago volcánico a las afueras de la pequeña ciudad de Bright Falls. Wake escribió un final para su historia de terror y logró así liberar a su esposa de la oscuridad bajo el lago, pero a cambio fue él quien quedó atrapado allí.\n\nAlan Wake no está muerto, aunque ha deseado estarlo en muchas ocasiones. Lleva 13 años prisionero en el lugar oscuro, donde sus pesadillas, sus miedos y sus relatos se manifiestan como la realidad que lo rodea. Durante 13 años ha luchado por mantenerse cuerdo y escribir una historia que cambie la realidad de su mundo para poder escapar.', 'PC', '2023-10-27', 'Terror', 9.9, 'caratulas/AlanWake2.png', 1),
(17, 'Cyberpunk 2077', 'Cyberpunk 2077 es un RPG de acción y aventura de mundo abierto ambientada en Night City, una megalópolis obsesionada con el poder, el glamour y la modificación corporal. Juega en la piel de V, un mercenario ciberpunk, y enfréntate a las fuerzas más poderosas de la ciudad en una lucha por la gloria y la supervivencia. En la Ultimate Edition, experimenta la historia original de Cyberpunk 2077, así como una nueva aventura de espías y thriller en la expansión Phantom Liberty, una historia de espionaje de alto riesgo ambientada en el letal distrito de Dogtown. Aquí nacerán leyendas. ¿Cuál será la tuya?', 'PC', '2020-12-10', 'Shooter', 9.5, 'caratulas/cyberPunk2077.png', 0),
(18, 'Hollow Knight', '¡Forja tu propio camino en Hollow Knight! Una aventura épica a través de un vasto reino de insectos y héroes que se encuentra en ruinas.\r\nHollow Knight es una aventura de acción clásica en 2D ambientada en un vasto mundo interconectado. Explora cavernas tortuosas, ciudades antiguas y páramos mortales. Combate contra criaturas corrompidas, haz nuevas amistades con extraños insectos y resuelve los antiguos misterios que yacen en el corazón del reino.', 'PC', '2017-02-24', 'Plataformas', 9.9, 'caratulas/HollowKnight.png', 1),
(19, 'TLoZ: Breath of the wild', 'Entra en un mundo de aventura\r\n\r\nOlvida todo lo que sabes sobre los juegos de The Legend of Zelda. Entra en un mundo de descubrimientos, exploración y aventura en The Legend of Zelda: Breath of the Wild, un nuevo juego de la aclamada serie que rompe con las convenciones. Viaja por prados, bosques y cumbres montañosas para descubrir qué ha sido del asolado reino de Hyrule en esta maravillosa aventura a cielo abierto.', 'Switch', '2017-03-03', 'Aventura', 9.4, 'caratulas/TheLegendOfZeldaBreathOfTheWild.png', 0),
(20, 'Mario Bros Wonder', '¡Únete a Mario y sus amigos en una nueva y maravillosa aventura de desplazamiento lateral en 2D!\r\n\r\nCada nivel cuenta con su propia Flor Maravilla. Al recogerla, ¡puede ocurrir de todo! Las tuberías se moverán por sí solas, el terreno se inclinará, aparecerán Plantas Piraña cantarinas, una manada de Embistontes saldrá en estampida, caerás al vacío, flotarás por el espacio exterior ¡y mil cosas más! Hasta puede que te transformes en algo totalmente inesperado.\r\n\r\n¡Elige entre Mario, Luigi, Peach y varios personajes más! Todos se controlan de la misma manera, así que puedes usar a tu personaje preferido sin mayor problema.', 'Switch', '2023-10-20', 'Plataformas', 8.0, 'caratulas/SuperMarioBrosWonder.png', 1),
(21, 'Metal Gear Solid 3', '\r\nPor supuesto, aquí tienes una posible descripción de la parte trasera de la caja de Metal Gear Solid 3: Snake Eater:\r\n\r\n¡Experimenta la épica misión de supervivencia en la Guerra Fría!\r\n\r\nEn Metal Gear Solid 3: Snake Eater, sumérgete en una intensa aventura de espionaje y disparos en la jungla de la Unión Soviética durante la década de 1960. Encarna a Naked Snake, un agente de élite enviado en una peligrosa misión para detener una crisis mundial y salvar al mundo de la destrucción total. ¿Tienes lo necesario para enfrentarte a los peligros de la jungla y salvar al mundo? ¡Descúbrelo ahora!', 'PS2', '2004-10-17', 'Shooter', 9.0, 'caratulas/MetalGearSolid3SnakeEater.png', 1),
(22, 'Devil May Cry', 'Sumérgete en un mundo donde lo sobrenatural se encuentra con la acción desenfrenada. En Devil May Cry, encarnas a Dante, un cazador de demonios con una mezcla única de habilidades y un misterioso pasado por descubrir. Ambientado en un entorno gótico y siniestro, te embarcarás en una aventura épica llena de peligros y secretos ocultos.\r\n\r\nExplora paisajes oscuros y misteriosos mientras enfrentas desafíos que pondrán a prueba tus habilidades de combate y agilidad. Enfréntate a una amplia variedad de enemigos demoníacos, cada uno con sus propias habilidades y tácticas, mientras te abres camino a través de escenarios impactantes y detallados.', 'PS2', '2001-08-23', 'Aventura', 8.6, 'caratulas/DevilMayCry.png', 1),
(23, 'Bloodborne', 'Sumérgete en las profundidades de la oscuridad en la ciudad de Yharnam, donde una enfermedad misteriosa ha sumido a sus habitantes en la locura y la desesperación. Como cazador, te enfrentarás a horrores indescriptibles en un viaje desgarrador en busca de respuestas y una cura para la enfermedad de la sangre que asola la ciudad.\r\n\r\nExplora calles retorcidas, catacumbas siniestras y antiguos cementerios mientras desentrañas los oscuros secretos que se esconden en las sombras. En tu camino, encontrarás criaturas retorcidas y grotescas, cada una más terrorífica que la anterior, desafiando tus habilidades y tu valentía en cada paso del camino.', 'PS4', '2015-03-24', 'Aventura', 9.9, 'caratulas/Bloodborne.png', 1),
(24, 'Demons Souls', 'Sumérgete en el oscuro reino de Boletaria, donde la maldad se ha apoderado y los demonios acechan en cada sombra. En Demon\'s Souls, te convertirás en un valiente aventurero empeñado en enfrentar los desafíos más difíciles y desentrañar los misterios más profundos de esta tierra maldita.\r\n\r\nExplora una tierra devastada por la oscuridad y el caos, llena de ruinas antiguas y peligros mortales. En tu búsqueda para liberar Boletaria de su terrible destino, te enfrentarás a enemigos despiadados y desafiantes jefes demoníacos, cada uno más poderoso que el anterior.\r\n\r\nCon un combate táctico y desafiante, tendrás que emplear todas tus habilidades y estrategias para sobrevivir a los encuentros mortales que te esperan. Cada paso adelante es un riesgo, pero también una oportunidad para descubrir secretos ocultos y obtener recompensas valiosas.', 'PS3', '2009-02-05', 'Aventura', 9.3, 'caratulas/DemonsSouls.png', 1);

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
(1, 'Jose Morenooooo', 'jose', '12345');

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
(59, 1, 5),
(61, 1, 14),
(65, 1, 6),
(86, 1, 18),
(87, 1, 21),
(88, 1, 22),
(89, 1, 23),
(90, 1, 15);

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
(28, 1, 14),
(45, 1, 15),
(46, 1, 18),
(47, 1, 17),
(48, 1, 23),
(49, 1, 5);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `users_games`
--
ALTER TABLE `users_games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT de la tabla `user_favorite_games`
--
ALTER TABLE `user_favorite_games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

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
--
-- Base de datos: `phpmyadmin`
--
DROP DATABASE IF EXISTS `phpmyadmin`;
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__bookmark`
--

DROP TABLE IF EXISTS `pma__bookmark`;
CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__central_columns`
--

DROP TABLE IF EXISTS `pma__central_columns`;
CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__column_info`
--

DROP TABLE IF EXISTS `pma__column_info`;
CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__designer_settings`
--

DROP TABLE IF EXISTS `pma__designer_settings`;
CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__export_templates`
--

DROP TABLE IF EXISTS `pma__export_templates`;
CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__favorite`
--

DROP TABLE IF EXISTS `pma__favorite`;
CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__history`
--

DROP TABLE IF EXISTS `pma__history`;
CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__navigationhiding`
--

DROP TABLE IF EXISTS `pma__navigationhiding`;
CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__pdf_pages`
--

DROP TABLE IF EXISTS `pma__pdf_pages`;
CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__recent`
--

DROP TABLE IF EXISTS `pma__recent`;
CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Volcado de datos para la tabla `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"gamehub\",\"table\":\"games\"},{\"db\":\"gamehub\",\"table\":\"users_games\"},{\"db\":\"gamehub\",\"table\":\"users\"},{\"db\":\"gamehub\",\"table\":\"user_favorite_games\"}]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__relation`
--

DROP TABLE IF EXISTS `pma__relation`;
CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__savedsearches`
--

DROP TABLE IF EXISTS `pma__savedsearches`;
CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_coords`
--

DROP TABLE IF EXISTS `pma__table_coords`;
CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_info`
--

DROP TABLE IF EXISTS `pma__table_info`;
CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_uiprefs`
--

DROP TABLE IF EXISTS `pma__table_uiprefs`;
CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__tracking`
--

DROP TABLE IF EXISTS `pma__tracking`;
CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__userconfig`
--

DROP TABLE IF EXISTS `pma__userconfig`;
CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Volcado de datos para la tabla `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2024-05-07 19:25:17', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"es\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__usergroups`
--

DROP TABLE IF EXISTS `pma__usergroups`;
CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__users`
--

DROP TABLE IF EXISTS `pma__users`;
CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indices de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indices de la tabla `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indices de la tabla `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indices de la tabla `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indices de la tabla `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indices de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indices de la tabla `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indices de la tabla `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indices de la tabla `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indices de la tabla `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indices de la tabla `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Base de datos: `test`
--
DROP DATABASE IF EXISTS `test`;
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
