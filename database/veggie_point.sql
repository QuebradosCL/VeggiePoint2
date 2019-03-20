-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2019 a las 20:26:16
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veggie_point`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `advancement`
--

CREATE TABLE `advancement` (
  `IDADVENCEMENT` int(11) NOT NULL,
  `VALUEADCENMENT` int(11) DEFAULT NULL,
  `ADVANCEMENTDESCRIPTION` varchar(650) DEFAULT NULL,
  `URLADVANCEMENT` varchar(1024) DEFAULT NULL,
  `NAMEADVANCEMENT` varchar(250) DEFAULT NULL,
  `TIPO_ADVANCEMENT` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `advancement`
--

INSERT INTO `advancement` (`IDADVENCEMENT`, `VALUEADCENMENT`, `ADVANCEMENTDESCRIPTION`, `URLADVANCEMENT`, `NAMEADVANCEMENT`, `TIPO_ADVANCEMENT`) VALUES
(12, 2147483647, 'asdasd', 'images/promos/3BE.jpg', 'PIZZA', 'Pizzas'),
(13, 456, 'asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, ', 'images/promos/7BE.jpg', 'BURGER', 'Hamburguesas'),
(14, 159876, 'asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, ', 'images/promos/5AA.jpg', 'producto', 'Tipo 3'),
(15, 158000, 'sdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, assdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, assdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, assdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, assdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd, asdasdasd', 'images/promos/FB_IMG_1506193489046.jpg', 'Hamburguesas 3', 'Hamburguesas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact`
--

CREATE TABLE `contact` (
  `IDCONTACT` int(11) NOT NULL,
  `EMAILCONTACT` varchar(250) DEFAULT NULL,
  `FACEBOOKCONTACT` varchar(650) DEFAULT NULL,
  `INSTAGRAM` varchar(650) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contact`
--

INSERT INTO `contact` (`IDCONTACT`, `EMAILCONTACT`, `FACEBOOKCONTACT`, `INSTAGRAM`) VALUES
(1, 'veggiepoint@gmail.com ', 'https://www.facebook.com/veggie.point.96', 'instagram.comhttps://www.instagram.com/veggiepoint_/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `delivery_request`
--

CREATE TABLE `delivery_request` (
  `IDREQUEST` int(11) NOT NULL,
  `IDDELIVERYREQUEST` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `information`
--

CREATE TABLE `information` (
  `CODWHO` int(11) NOT NULL,
  `WHOARE` varchar(2050) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `information`
--

INSERT INTO `information` (`CODWHO`, `WHOARE`) VALUES
(1, 'Una descripciÃ³n es la acciÃ³n y efecto de describir, esto es, de explicar o representar detalladamente por medio del lenguaje los rasgos caracterÃ­sticos de un objeto, persona, lugar, situaciÃ³n o acontecimiento.\r\n\r\nLa descripciÃ³n tiene como fin crear en el oyente o lector una imagen mental del asunto referido en su ausencia. Gramaticalmente, la palabra descripciÃ³n es un sustantivo femenino.\r\n\r\nLas descripciones pueden variar de tipo segÃºn la funciÃ³n que tienen en el contexto de la comunicaciÃ³n: Ã¡mbitos cientÃ­ficos, literarios, publicitarios, analÃ­ticos, entre otros. Existen diferentes tipos de descripciÃ³n, entre los cuales mencionaremos solo los mÃ¡s comunes.\r\n\r\nTipos de descripciÃ³n\r\nDescripciÃ³n objetiva\r\nSe trata de aquella descripciÃ³n en la que el emisor del mensaje intenta transmitir la imagen de aquello que describe de una manera precisa, sin hacer juicios de valor y sin dejar intervenir los sentimientos.\r\n\r\nEn principio, se supone que una descripciÃ³n objetiva no omitirÃ¡ detalle alguno y pretenderÃ¡ construir un retrato fiel de lo representado, sin jerarquizar los elementos.\r\n\r\nSe usa habitualmente en las diferentes disciplinas cientÃ­ficas para explicar los mÃ¡s diversos fenÃ³menos y conceptos.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `ID_MENU` int(11) NOT NULL,
  `NAMEMENU` varchar(250) DEFAULT NULL,
  `MENU_VALUE` int(11) DEFAULT NULL,
  `MENU_DESCRIPTION` varchar(650) DEFAULT NULL,
  `URLMENU` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`ID_MENU`, `NAMEMENU`, `MENU_VALUE`, `MENU_DESCRIPTION`, `URLMENU`) VALUES
(1, 'menu 1', 123, 'Esto es la decripcion de menu, Esto es la decripcion de menu, Esto es la decripcion de menu, Esto es la decripcion de menu, Esto es la decripcion de menu, Esto es la decripcion de menu, Esto es la decripcion de menu, Esto es la decripcion de menu, Esto es la decripcion de menu, Esto es la decripcion de menu, Esto es la decripcion de menu, Esto es la decripcion de menu, Esto es la decripcion de menu, Esto es la decripcion de menu, Esto es la decripcion de menu, Esto es la decripcion de menu, Esto es la decripcion de menu, Esto es la decripcion de menu, Esto es la decripcion de menu, Esto es la decripcion de menu, Esto es la decripcion de menu.', 'images/menus/762.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_product`
--

CREATE TABLE `menu_product` (
  `ID_MENU` int(11) NOT NULL,
  `IDPRODUCT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phone`
--

CREATE TABLE `phone` (
  `IDPRODUCT` int(11) NOT NULL,
  `NUMBER` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `phone`
--

INSERT INTO `phone` (`IDPRODUCT`, `NUMBER`) VALUES
(3, '56984877618'),
(4, '56982270676');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `IDPRODUCT` int(11) NOT NULL,
  `NAMEPRODUCT` varchar(250) DEFAULT NULL,
  `IDTYPEPRODUCT` int(11) DEFAULT NULL,
  `DESCRIPTIONVALUE` varchar(650) DEFAULT NULL,
  `PRODUCTVALUE` int(11) DEFAULT NULL,
  `URLPRODUCT` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`IDPRODUCT`, `NAMEPRODUCT`, `IDTYPEPRODUCT`, `DESCRIPTIONVALUE`, `PRODUCTVALUE`, `URLPRODUCT`) VALUES
(1, 'producto', 1, 's', 12, '/images/products/23A.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_advancement`
--

CREATE TABLE `product_advancement` (
  `IDADVENCEMENT` int(11) NOT NULL,
  `IDPRODUCT` int(11) NOT NULL,
  `DATEADVANCEMENT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `state_request`
--

CREATE TABLE `state_request` (
  `IDREQUEST` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_advancement`
--

CREATE TABLE `type_advancement` (
  `IDTYPE_A` int(11) NOT NULL,
  `NAMETYPE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `type_advancement`
--

INSERT INTO `type_advancement` (`IDTYPE_A`, `NAMETYPE`) VALUES
(1, 'Hamburguesas'),
(4, 'Pizzas'),
(5, 'Tipo 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_product`
--

CREATE TABLE `type_product` (
  `IDTYPEPRODUCT` int(11) NOT NULL,
  `NAMETYPE` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `type_product`
--

INSERT INTO `type_product` (`IDTYPEPRODUCT`, `NAMETYPE`) VALUES
(1, 'type 1'),
(2, 'type 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `EMAIL_CONTACT` varchar(250) NOT NULL,
  `PASSWORD` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`EMAIL_CONTACT`, `PASSWORD`) VALUES
('developer', '12345678'),
('developer@veggie_point.com', '12345678');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `advancement`
--
ALTER TABLE `advancement`
  ADD PRIMARY KEY (`IDADVENCEMENT`);

--
-- Indices de la tabla `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`IDCONTACT`);

--
-- Indices de la tabla `delivery_request`
--
ALTER TABLE `delivery_request`
  ADD PRIMARY KEY (`IDREQUEST`);

--
-- Indices de la tabla `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`CODWHO`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID_MENU`);

--
-- Indices de la tabla `menu_product`
--
ALTER TABLE `menu_product`
  ADD PRIMARY KEY (`ID_MENU`,`IDPRODUCT`),
  ADD KEY `FK_PRODUCTMENUPRODUCT` (`IDPRODUCT`);

--
-- Indices de la tabla `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`IDPRODUCT`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`IDPRODUCT`),
  ADD KEY `FK_TYPEPRODUCTPRODUCT` (`IDTYPEPRODUCT`);

--
-- Indices de la tabla `product_advancement`
--
ALTER TABLE `product_advancement`
  ADD PRIMARY KEY (`IDADVENCEMENT`,`IDPRODUCT`),
  ADD KEY `FK_PRODUCTPRODUCTADVANCEMENT` (`IDPRODUCT`);

--
-- Indices de la tabla `state_request`
--
ALTER TABLE `state_request`
  ADD PRIMARY KEY (`IDREQUEST`);

--
-- Indices de la tabla `type_advancement`
--
ALTER TABLE `type_advancement`
  ADD PRIMARY KEY (`IDTYPE_A`);

--
-- Indices de la tabla `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`IDTYPEPRODUCT`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`EMAIL_CONTACT`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `advancement`
--
ALTER TABLE `advancement`
  MODIFY `IDADVENCEMENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `contact`
--
ALTER TABLE `contact`
  MODIFY `IDCONTACT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `ID_MENU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `phone`
--
ALTER TABLE `phone`
  MODIFY `IDPRODUCT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `IDPRODUCT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `type_advancement`
--
ALTER TABLE `type_advancement`
  MODIFY `IDTYPE_A` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `type_product`
--
ALTER TABLE `type_product`
  MODIFY `IDTYPEPRODUCT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `delivery_request`
--
ALTER TABLE `delivery_request`
  ADD CONSTRAINT `FK_STATEREQUESTDELIVERY` FOREIGN KEY (`IDREQUEST`) REFERENCES `state_request` (`IDREQUEST`);

--
-- Filtros para la tabla `menu_product`
--
ALTER TABLE `menu_product`
  ADD CONSTRAINT `FK_MENUPRODUCT` FOREIGN KEY (`ID_MENU`) REFERENCES `menu` (`ID_MENU`),
  ADD CONSTRAINT `FK_PRODUCTMENUPRODUCT` FOREIGN KEY (`IDPRODUCT`) REFERENCES `product` (`IDPRODUCT`);

--
-- Filtros para la tabla `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_TYPEPRODUCTPRODUCT` FOREIGN KEY (`IDTYPEPRODUCT`) REFERENCES `type_product` (`IDTYPEPRODUCT`);

--
-- Filtros para la tabla `product_advancement`
--
ALTER TABLE `product_advancement`
  ADD CONSTRAINT `FK_ADVANCEMENTPRODUCTADVANCEMENT` FOREIGN KEY (`IDADVENCEMENT`) REFERENCES `advancement` (`IDADVENCEMENT`),
  ADD CONSTRAINT `FK_PRODUCTPRODUCTADVANCEMENT` FOREIGN KEY (`IDPRODUCT`) REFERENCES `product` (`IDPRODUCT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
