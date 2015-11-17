-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2015 a las 08:07:36
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `letras_juridicas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE IF NOT EXISTS `articulo` (
  `id_articulo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_articulo` varchar(100) DEFAULT NULL,
  `resumen_articulo` text,
  `Revista_id_revista` int(11) NOT NULL,
  `ruta_articulo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_articulo`),
  KEY `fk_Articulo_Revista1_idx` (`Revista_id_revista`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `id_comentario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_comentario` varchar(100) DEFAULT NULL,
  `nombre_autor` varchar(40) DEFAULT NULL,
  `apPaterno_autor` varchar(20) DEFAULT NULL,
  `apMaterno_autor` varchar(20) DEFAULT NULL,
  `Revista_id_revista` int(11) NOT NULL,
  `ruta_comentario` varchar(255) NOT NULL,
  PRIMARY KEY (`id_comentario`),
  KEY `fk_Comentario_Revista1_idx` (`Revista_id_revista`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `nombre`, `descripcion`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE IF NOT EXISTS `libro` (
  `id_libro` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_libro` varchar(100) DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  `ruta_libro` varchar(255) NOT NULL,
  PRIMARY KEY (`id_libro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_noticia` varchar(100) DEFAULT NULL,
  `fecha_publcacion` date DEFAULT NULL,
  `Revista_id_revista` int(11) NOT NULL,
  `ruta_noticia` varchar(255) NOT NULL,
  PRIMARY KEY (`id_noticia`),
  KEY `fk_Noticia_Revista1_idx` (`Revista_id_revista`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reseña`
--

CREATE TABLE IF NOT EXISTS `reseña` (
  `id_reseña` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_reseña` varchar(100) DEFAULT NULL,
  `nombre_autor` varchar(40) DEFAULT NULL,
  `apPaterno_autor` varchar(20) DEFAULT NULL,
  `apMaterno_autor` varchar(20) DEFAULT NULL,
  `Revista_id_revista` int(11) NOT NULL,
  `ruta_reseña` varchar(255) NOT NULL,
  PRIMARY KEY (`id_reseña`),
  KEY `fk_Reseña_Revista1_idx` (`Revista_id_revista`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revista`
--

CREATE TABLE IF NOT EXISTS `revista` (
  `id_revista` int(11) NOT NULL AUTO_INCREMENT,
  `numero_revista` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_revista`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(40) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1444614991, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', 'isay gonzález', '$2y$08$fCgVv0rimwFPafmozO9oyeJdyHPD7lRExZAlBqOe0QA4hV4wdAFNu', NULL, 'inside2504@hotmail.com', NULL, '2qoSSNSCR4ixIXxM3EMFLe9e8dc3f251d2765034', 1436201688, NULL, 1436157703, 1436158746, 1, 'Isay', 'González', 'CEDEGS', '2281384593'),
(3, '::1', 'manuel cruz', '$2y$08$MAJ8qRYXqotzNP.3mtn0hexiOpas5qo8RgkY/ll4m8kMARj.0LVqm', NULL, 'manuel.cruzflorencia@gmail.com', '5760ef87ae41a5b66e26d02c9c03946356a90db6', NULL, NULL, NULL, 1436284542, 1436284566, 0, 'Manuel', 'Cruz', 'CEDEGS', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(4, 1, 1),
(5, 1, 2),
(3, 2, 2),
(6, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_has_libro`
--

CREATE TABLE IF NOT EXISTS `users_has_libro` (
  `users_id` int(11) unsigned NOT NULL,
  `Libro_id_libro` int(11) NOT NULL,
  KEY `fk_users_has_Libro_Libro1_idx` (`Libro_id_libro`),
  KEY `fk_users_has_Libro_users1_idx` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_has_revista`
--

CREATE TABLE IF NOT EXISTS `users_has_revista` (
  `id` int(11) NOT NULL,
  `users_id` int(11) unsigned NOT NULL,
  `Revista_id_revista` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_has_Revista_Revista1_idx` (`Revista_id_revista`),
  KEY `fk_users_has_Revista_users1_idx` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
