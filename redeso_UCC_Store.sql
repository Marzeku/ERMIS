-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-03-2022 a las 11:58:51
-- Versión del servidor: 5.7.37
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `redeso_UCC_Store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`user_id`) VALUES
(8),
(8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'Samsung'),
(3, 'Apple'),
(4, 'Sony'),
(5, 'LG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(200) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `total_amt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amt`) VALUES
(145, 1, '0', 0, 'Samsung Duos 2', 'samsung mobile.jpg', 1, 300000, 300000),
(146, 3, '0', 0, 'iPad', 'ipad.jpg', 13, 30000, 390000),
(239, 3, '0', 28, 'iPad', 'ipad.jpg', 1, 30000, 30000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Tecnologia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `user_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`user_id`) VALUES
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(8),
(8),
(9),
(9),
(9),
(9),
(10),
(10),
(10),
(10),
(11),
(11),
(11),
(11),
(12),
(12),
(12),
(12),
(13),
(13),
(13),
(13),
(14),
(14),
(14),
(14),
(15),
(15),
(15),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31),
(32),
(34);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `Cod_Compra` int(11) NOT NULL,
  `Cod_Pago` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `Fecha_Compra` datetime DEFAULT NULL,
  `Estado` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Monto` double(11,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`Cod_Compra`, `Cod_Pago`, `user_id`, `Fecha_Compra`, `Estado`, `Monto`) VALUES
(50, 44, 8, '2019-07-15 00:00:00', 'Pendiente', 30000.00),
(51, 44, 9, '2019-10-13 13:55:00', 'Pendiente', 380000.00),
(52, 44, 10, '2019-10-01 00:00:00', 'Pendiente', 420000.00),
(53, 44, 11, '2019-09-17 00:00:00', 'Pendiente', 375000.00),
(54, 44, 12, '2019-07-15 00:00:00', 'Pendiente', 250000.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compra`
--

CREATE TABLE `detalle_compra` (
  `Cod_Compra` int(11) NOT NULL,
  `product_id` int(100) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Precio_Compra` double(11,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `detalle_compra`
--

INSERT INTO `detalle_compra` (`Cod_Compra`, `product_id`, `Cantidad`, `Precio_Compra`) VALUES
(51, 2, 4, 420000.00),
(52, 3, 25, 375000.00),
(53, 9, 10, 380000.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `Numero_Factura` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `Num_Items` int(11) DEFAULT NULL,
  `Cantidad_Vendida` int(11) DEFAULT NULL,
  `Precio_Producto` double(11,2) DEFAULT NULL,
  `Total_Venta_Producto` double(11,2) DEFAULT NULL,
  `Total_IVA_Producto` double(11,2) DEFAULT NULL,
  `Total_Descuento_Producto` double(11,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `detalle_factura`
--

INSERT INTO `detalle_factura` (`Numero_Factura`, `product_id`, `Num_Items`, `Cantidad_Vendida`, `Precio_Producto`, `Total_Venta_Producto`, `Total_IVA_Producto`, `Total_Descuento_Producto`) VALUES
(91, 2, 4, 4, 25000.00, 420000.00, 72200.00, 0.00),
(92, 3, 25, 25, 30000.00, 375000.00, 79800.00, 0.00),
(93, 9, 10, 10, 12000.00, 380000.00, 71250.00, 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_orden`
--

CREATE TABLE `detalle_orden` (
  `product_id` int(100) NOT NULL,
  `Cod_Emp_Prov` int(11) NOT NULL,
  `Fecha_Pedido` date DEFAULT NULL,
  `Fecha_Cumplimiento` date DEFAULT NULL,
  `Precio_Pedido` double(11,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `detalle_orden`
--

INSERT INTO `detalle_orden` (`product_id`, `Cod_Emp_Prov`, `Fecha_Pedido`, `Fecha_Cumplimiento`, `Precio_Pedido`) VALUES
(3, 62, '2019-07-09', '2019-07-11', 5600000.00),
(6, 61, '2019-06-24', '2019-06-17', 91800000.00),
(53, 60, '2018-03-14', '2018-04-17', 65400000.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `NIT` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Nombre_Empresa` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Descripcion_Empresa` text COLLATE utf8_unicode_ci,
  `Pais` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ciudad` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Localidad` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Barrio` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Direccion` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Telefono` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`NIT`, `Nombre_Empresa`, `Descripcion_Empresa`, `Pais`, `Ciudad`, `Localidad`, `Barrio`, `Direccion`, `Telefono`) VALUES
('830.130.705-2', 'Centro de alta tecnologia ', 'Empezó actividades en junio de 2003 (15 años). Cuenta con una gran variedad de proveedores de confianza teniendo productos de excelente calidad a su disposición. Se ofrece una amplia gama de tecnologia, computadores, impresoras, circuitos, tablets, audio y video, consolas, redes, telefonía, pos, suministros, software, accesorios, servicio tecnico, etc,', 'Colombia', 'Bogota', 'Comuna Chapinero', 'El Nogal', 'Carrera 15 No. 77-05', '(1) 5309890');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emp_proveedora`
--

CREATE TABLE `emp_proveedora` (
  `Cod_Emp_Prov` int(11) NOT NULL,
  `Nombre_Prov` text COLLATE utf8_unicode_ci,
  `ID_Proveedor` int(11) NOT NULL,
  `Primer_Nom_Prov` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Segundo_Nom_Prov` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Primer_Apell_Prov` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Segundo_Apell_Prov` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Pais_Prov` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ciudad_Prov` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Localidad_Prov` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Barrio_Prov` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Direccion_Prov` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Telefono_Prov` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Correo_Electronico` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `emp_proveedora`
--

INSERT INTO `emp_proveedora` (`Cod_Emp_Prov`, `Nombre_Prov`, `ID_Proveedor`, `Primer_Nom_Prov`, `Segundo_Nom_Prov`, `Primer_Apell_Prov`, `Segundo_Apell_Prov`, `Pais_Prov`, `Ciudad_Prov`, `Localidad_Prov`, `Barrio_Prov`, `Direccion_Prov`, `Telefono_Prov`, `Correo_Electronico`) VALUES
(60, 'IT Servicios SAS', 100, 'Andres', 'Eduardo', 'Madero', 'Marroquin ', 'Colombia', 'Bogota', 'Usaquen', 'San Gabriel', 'CALLE 116 23 06 OF 506 ', '(57-1)547 85 80', 'info@itservicios.com.co'),
(61, 'WIN Software S.A.S', 101, 'Jaime ', 'Alberto', 'Paez', 'Paez ', 'Colombia', 'Medellin', 'Santa Cruz', 'La Rosa', 'Cra. 37A N 8A – 16', '(4) 268 53 11', 'contacto@winsoftware.com.co'),
(62, 'Nexsys', 102, 'Jose', 'Fernando', 'Sotelo', 'Cubillos', 'Colombia', 'Bogota', 'Teusaquillo', 'El Campin', 'Cra. 16 #80-32', '(57) (1) 8766700', 'soporte.web@nexsysla.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `Numero_Factura` int(11) NOT NULL,
  `Fecha_Creacion` date DEFAULT NULL,
  `Fecha_Vencimiento` date DEFAULT NULL,
  `Total_Venta` double(11,2) DEFAULT NULL,
  `Total_IVA` double(11,2) DEFAULT NULL,
  `Total_Descuento` double(11,2) DEFAULT NULL,
  `Monto_Final` double(11,2) DEFAULT NULL,
  `user_id` int(10) NOT NULL,
  `NIT` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`Numero_Factura`, `Fecha_Creacion`, `Fecha_Vencimiento`, `Total_Venta`, `Total_IVA`, `Total_Descuento`, `Monto_Final`, `user_id`, `NIT`) VALUES
(91, '2019-10-13', '2025-10-13', 380000.00, 72200.00, 0.00, 452200.00, 9, '830.130.705-2'),
(92, '2019-10-01', '2025-10-01', 420000.00, 79800.00, 0.00, 499800.00, 10, '830.130.705-2'),
(93, '2019-09-17', '2025-09-17', 375000.00, 71250.00, 0.00, 446250.00, 11, '830.130.705-2'),
(94, '2019-07-15', '2025-07-15', 250000.00, 47500.00, 0.00, 297500.00, 12, '830.130.705-2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_pedido`
--

CREATE TABLE `orden_pedido` (
  `NIT` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion_Pedido` text COLLATE utf8_unicode_ci,
  `Cod_Emp_Prov` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `orden_pedido`
--

INSERT INTO `orden_pedido` (`NIT`, `Descripcion_Pedido`, `Cod_Emp_Prov`) VALUES
('830.130.705-2', 'Compra de celulares Samsung ', 60),
('830.130.705-2', 'Compra de iPads y iPhones ', 62),
('830.130.705-2', 'Compra de portátiles de HP y Samsung. Ademas, de impresoras de HP. ', 61),
('830.130.705-2', 'Compra de televisores LG', 60),
('830.130.705-2', 'Compra de celulares Samsung ', 60),
('830.130.705-2', 'Compra de iPads y iPhones ', 62),
('830.130.705-2', 'Compra de portátiles de HP y Samsung. Ademas, de impresoras de HP. ', 61),
('830.130.705-2', 'Compra de televisores LG', 60),
('830.130.705-2', 'Compra de celulares Samsung ', 60),
('830.130.705-2', 'Compra de iPads y iPhones ', 62),
('830.130.705-2', 'Compra de portátiles de HP y Samsung. Ademas, de impresoras de HP. ', 61),
('830.130.705-2', 'Compra de televisores LG', 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment`
--

CREATE TABLE `payment` (
  `Cod_Pago` int(11) NOT NULL,
  `Tipo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Monto_Pago` double(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `payment`
--

INSERT INTO `payment` (`Cod_Pago`, `Tipo`, `Monto_Pago`) VALUES
(44, 'Paypal', 250000.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(1) NOT NULL,
  `product_brand` int(1) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL,
  `Stock` int(11) NOT NULL,
  `IVA` double NOT NULL,
  `Descuento` double NOT NULL,
  `Inscripcion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`, `Stock`, `IVA`, `Descuento`, `Inscripcion`) VALUES
(1, 1, 2, 'Samsung A10', 32000, ' Es un telefono inteligente Android de gama media desarrollado por Samsung Electronics  Pantalla:  HD + Infinity-V de 6.2 pulgadas    Resolucion:  720 x 1520   Medicion:  155,6 x 75,6 x 7,9 mm   Peso:  168 kg    Almacenamiento interno:  32 GB   RAM:  2 GB   Bateria:  3400 mAh no extraible   Sistema operativo:  Android 9 (Pie) ', 'Celular Samsung Movil.png', ' Es un telefono inteligente Android de gama media desarrollado por Samsung Electronics  Pantalla:  HD + Infinity-V de 6.2 pulgadas    Resolucion:  720 x 1520   Medicion:  155,6 x 75,6 x 7,9 mm   Peso:  168 kg    Almacenamiento interno:  32 GB   RAM:  2 GB   Bateria:  3400 mAh no extraible   Sistema operativo:  Android 9 (Pie) ', 48, 0.19, 0, '2022-03-25 17:58:19'),
(2, 1, 3, 'iPhone 5s', 592000, ' El iPhone 5s es un telefono inteligente de gama alta, desarrollado por la compania estadounidense Apple.   Pantalla:  IPS de 4 pulgadas   Resolucion:  1136x640 pixeles, 326ppp   Procesador:  A7 + coprocesador M7   RAM:  1 GB   Memoria:  16/32/64 GB   Dimensiones:  123.8 x 58.6 x 7.6 mm   Peso:  112 gramos ', 'Celular iPhone 5s.PNG', ' El iPhone 5s es un telefono inteligente de gama alta, desarrollado por la compania estadounidense Apple.   Pantalla:  IPS de 4 pulgadas   Resolucion:  1136x640 pixeles, 326ppp   Procesador:  A7 + coprocesador M7   RAM:  1 GB   Memoria:  16/32/64 GB   Dimensiones:  123.8 x 58.6 x 7.6 mm   Peso:  112 gramos ', 23, 0.19, 0, '2022-03-22 18:44:53'),
(3, 1, 3, 'iPad Pro', 105000, ' El iPad Pro se enfoca principalmente en ofrecer mas productividad que una tableta convencional. Generando contenido u ofreciendo mas flexibilidad.   Tamanio de la pantalla:  11 Pulgadas   Nombre del modelo:  	12.9-inch iPad Pro Wi?Fi 128GB - Silver   Capacidad de almacenamiento:  	128 GB   Dimensiones:  	128 GB ', 'Dispositivo iPad Pro.png', ' El iPad Pro se enfoca principalmente en ofrecer mas productividad que una tableta convencional. Generando contenido u ofreciendo mas flexibilidad.   Tamanio de la pantalla:  11 Pulgadas   Nombre del modelo:  	12.9-inch iPad Pro Wi?Fi 128GB - Silver   Capacidad de almacenamiento:  	128 GB   Dimensiones:  	128 GB ', 19, 0.16, 0, '2022-03-22 23:11:36'),
(4, 1, 3, 'iPhone 6s', 702000, 'El iPhone 6s y 6s Plus son conjuntamente sucesores del iPhone 6 y iPhone 6 Plus de 2014.  Procesador:  Procesador de dos nucleos a 1.85 GHz  RAM:  16 GB  Pantalla:  4,7 pulgadas  Tamanio:  138,3 mm x 67,1 mm x 7.1 mm  Peso:  123 g  Sistema operativo:  El original es iOS 9 y el actual es iOS 14  Bateria:  1715 mAh ', 'Dispositivo iPhone 6s.png', 'El iPhone 6s y 6s Plus son conjuntamente sucesores del iPhone 6 y iPhone 6 Plus de 2014.  Procesador:  Procesador de dos nucleos a 1.85 GHz  RAM:  16 GB  Pantalla:  4,7 pulgadas  Tamanio:  138,3 mm x 67,1 mm x 7.1 mm  Peso:  123 g  Sistema operativo:  El original es iOS 9 y el actual es iOS 14  Bateria:  1715 mAh ', 36, 0.19, 0, '2022-03-25 01:56:43'),
(5, 1, 2, 'iPad 10 2 pulgadas', 70000, 'El iPad es muy poderoso y versÃ¡til, tiene una pantalla Retina de 10,2 pulgadas, el chip A12 Bionic y iPadOS Pantalla: 10,2 Pulgadas Nombre del modelo: Apple iPad, 8th Generation Capacidad de almacenamiento: 32 GB Dimensiones: 10.33 x 7.27 x 2.02 pulgadas Sistema operativo: iPadOS 14 \"', 'Celular iPad Pro.png', 'El iPad es muy poderoso y versÃ¡til, tiene una pantalla Retina de 10,2 pulgadas, el chip A12 Bionic y iPadOS Pantalla: 10,2 Pulgadas Nombre del modelo: Apple iPad, 8th Generation Capacidad de almacenamiento: 32 GB Dimensiones: 10.33 x 7.27 x 2.02 pulgadas Sistema operativo: iPadOS 14 \"', 21, 0.19, 0, '2022-03-22 23:25:22'),
(6, 1, 1, 'HP Envy 13 ', 3500000, ' Procesador 6ta generacion Intel Core i y 128 GB SSD4.   Pantalla:  LCD IPS tactil de 13,3 pulgadas Full HD   Procesador:  	Intel Core i7-1165G7   Memoria:  	8 GB DDR4-2933   Graficos:  	Intel Iris Xe   Sistema operativo:  	Windows 10 Home   Bateria:  	3 celdas 51 Wh   Dimensiones:  306 x 212 x 14 mm   Peso:  1,30 kg ', 'HP Envy 13.png', ' Procesador 6ta generacion Intel Core i y 128 GB SSD4.   Pantalla:  LCD IPS tactil de 13,3 pulgadas Full HD   Procesador:  	Intel Core i7-1165G7   Memoria:  	8 GB DDR4-2933   Graficos:  	Intel Iris Xe   Sistema operativo:  	Windows 10 Home   Bateria:  	3 celdas 51 Wh   Dimensiones:  306 x 212 x 14 mm   Peso:  1,30 kg ', 37, 0.19, 0, '2022-03-22 19:35:38'),
(7, 1, 1, 'Laptop Gaming Pavillion', 3600000, ' Portatil HP Pavilion Gaming 15-dk0001 Intel Ci5 9th 8 GB 1 TB   Memoria RAM:  8 GB   Capacidad del disco rigido:  1 TB   Cantidad de nucleos:  4   Procesador:  9 generacion de Intel Core i5-9300H   Sistema operativo:  Windows 10 Home   Peso:  2,29 kg ', 'Laptop Gaming Pavillion.png', ' Portatil HP Pavilion Gaming 15-dk0001 Intel Ci5 9th 8 GB 1 TB   Memoria RAM:  8 GB   Capacidad del disco rigido:  1 TB   Cantidad de nucleos:  4   Procesador:  9 generacion de Intel Core i5-9300H   Sistema operativo:  Windows 10 Home   Peso:  2,29 kg ', 22, 0.16, 0.04, '2022-03-23 23:01:51'),
(8, 1, 4, 'Sony Xperia L4', 60000, ' Este telefono inteligente destaca por su pantalla de 6.2 pulgadas con resolucion HD+ con relacion de aspecto de 21:9 y su camara posterior triple de 13 MP + 5 MP + 2 MP.  Pantalla:  6.2', 'Sony.png', ' Este telefono inteligente destaca por su pantalla de 6.2 pulgadas con resolucion HD+ con relacion de aspecto de 21:9 y su camara posterior triple de 13 MP + 5 MP + 2 MP.  Pantalla:  6.2', 9, 0.19, 0, '2022-03-21 03:42:00'),
(9, 1, 3, 'iPhone 12 Pro Max', 38000, ' Este celular viene con el chip A14 Bionic, junto con un sistema de camaras Pro para tomar fotos con poca luz Tamanio de la pantalla: 6.7 pulgadasCamara posterior y frontal: 12 MPMemoria interna: 512 GBCarga rapida: Si', 'iPhone 12 Pro Max.png', ' Este celular viene con el chip A14 Bionic, junto con un sistema de camaras Pro para tomar fotos con poca luz Tamanio de la pantalla: 6.7 pulgadasCamara posterior y frontal: 12 MPMemoria interna: 512 GBCarga rapida: Si', 9, 0.19, 0, '2022-03-22 18:45:16'),
(45, 1, 2, 'Samsung Galaxy Note 20 Ultra', 50000, ' Posee el sistema operativo Android 10, el cual, incorpora respuestas inteligentes y acciones sugeridas para todas las aplicaciones Pantalla: Dynamic AMOLED 6,9 pulgadas Procesador: Exynos 990 RAM: 12 GB RAM LPDDR5Almacenamiento: 256/512 GB (con MicroSD)Bateria: 4.500 mAh 25WDimensiones y peso: 77,2 x 164,8 x 8,1 mm 208 g', 'Samsung Galaxy Note 20.png', ' Posee el sistema operativo Android 10, el cual, incorpora respuestas inteligentes y acciones sugeridas para todas las aplicaciones Pantalla: Dynamic AMOLED 6,9 pulgadas Procesador: Exynos 990 RAM: 12 GB RAM LPDDR5Almacenamiento: 256/512 GB (con MicroSD)Bateria: 4.500 mAh 25WDimensiones y peso: 77,2 x 164,8 x 8,1 mm 208 g', 14, 0.19, 0, '2022-03-22 18:04:14'),
(47, 1, 3, 'Apple iPad Air 4', 2618000, ' El iPad Air hace mas que un ordenador, con las nuevas prestaciones es mas versatil que nunca. \r\n\r\n\r\n\r\n\r\nPantalla: 10.9 pulgadas\r\nAlmacenamiento: Hasta 256 GB\r\nDuracion de la bateria: 10 Horas\r\nAutentificacion segura: Sensor de huellas digitales integrado en el boton superior\r\nSistema operativo: iOS\r\n', 'Apple iPad Air.png', ' El iPad Air hace mas que un ordenador, con las nuevas prestaciones es mas versatil que nunca. \r\n\r\n\r\n\r\n\r\nPantalla: 10.9 pulgadas\r\nAlmacenamiento: Hasta 256 GB\r\nDuracion de la bateria: 10 Horas\r\nAutentificacion segura: Sensor de huellas digitales integrado en el boton superior\r\nSistema operativo: iOS\r\n', 17, 0.19, 0, '2022-03-24 23:30:37'),
(48, 1, 1, 'Impresora HP Deskjet 2050', 700000, '<center> Escanear e imprime rapidamente a una velocidad de hasta 20 ppm en negro y 16 ppm en color. </center>\r\n\r\n<p>\r\n\r\n<ul>\r\n<li><b> Puerto:</b> USB 2.0 </li>\r\n<li><b> Tamanio:</b> 427 x 406 x 249 mm (bandejas abiertas) </li>\r\n<li><b> Peso:</b> 3,6 kg </li>\r\n<li><b> Cartuchos:</b> Utiliza 2 cartuchos 122: Negro CH561HL (opcional 122XL CH563HL) / Color CH562HL (opcional CH564HL) </li>\r\n</ul>', 'HP Deskjet 2050.png', 'Impresora HP Deskjet 2050', 24, 0.19, 0, '2021-02-28 23:26:36'),
(52, 1, 4, 'Audifonos Manos Libres', 180000, '<center> Hechos para una vida activa, los audifonos WH-CH510 cuentan con un disenio liviano y son inalambricos. </center>\r\n\r\n<p>\r\n\r\n<ul>\r\n<li><b> Modelo:</b> WH-CH510 </li>\r\n<li><b> Peso del producto:</b> 0.13 kg </li>\r\n<li><b> Resistente al agua:</b> No </li>\r\n<li><b> Microfono:</b> Si </li>\r\n<li><b> Gamer:</b> No </li>\r\n</ul>', 'Auriculares manos libres.png', 'Audifonos Sony Manos Libres', 14, 0.19, 0, '2021-02-28 23:29:10'),
(53, 1, 5, 'LG Smart Al TV ', 1200000, '<center> Con este televisor se tendra un procesador de cuatro nucleos, rapido y preciso, el cual, elimina el ruido, creando colores y contrastes mas dinamicos. </center>\r\n\r\n<p>\r\n\r\n<ul>\r\n<li><b>Tipo Pantalla:</b> LED </li>\r\n<li><b>Tamanio de la pantalla:</b> 32 pulgadas </li>\r\n<li><b>Tamanio de la pantalla:</b> 32 pulgadas </li>\r\n<li><b>Sistema operativo:</b> 	webOS AI ThinQ </li>\r\n<li><b>Procesador:</b> 	Quad-core </li>\r\n<li><b>Navegador web:</b> Si </li>\r\n</ul>\r\n\r\n', 'Smart TV.png', 'Televisor Smart LG', 15, 0.19, 0, '2021-02-28 23:34:03'),
(54, 1, 2, 'Samsung Galaxy Book S', 3493000, ' Es una computadora que cuenta con un procesador Qualcomm optimizado para un portatil Pantalla: 13,3 pulgadas FHD TFT (16: 9) Dimensiones: 13,3 pulgadas Peso: 0,96 kg RAM: 8 GB Procesador: Qualcomm Snapdragon Sistema operativo: Windows 10 Home / Pro', 'Portatil Galaxy Book S.png', ' Es una computadora que cuenta con un procesador Qualcomm optimizado para un portatil Pantalla: 13,3 pulgadas FHD TFT (16: 9) Dimensiones: 13,3 pulgadas Peso: 0,96 kg RAM: 8 GB Procesador: Qualcomm Snapdragon Sistema operativo: Windows 10 Home / Pro', 23, 0.19, 0, '2022-03-22 18:46:09'),
(110, 1, 1, 'USB 256 GB', 190000, '<center> Almacena facilmente documentos grandes, fotos de alta resolucion, musica, videos HD y mucho mas </center>\r\n\r\n<p>\r\n\r\n<ul>\r\n<li><b>Modelo:</b> x796w </li>\r\n<li><b>Capacidad de almacenamiento:</b> 256 GB </li>\r\n<li><b>Version del puerto USB:</b> 3.1 </li>\r\n\r\n</ul>', 'USB HP 256 GB.png', 'USB HP 256 GB', 45, 0.19, 0, '2021-03-01 00:40:01'),
(111, 1, 1, 'Disco duro portatil ', 200000, '<center> El disco duro portatil HP es perfecto para el almacenamiento plug-and-play extra e incluye software de copia de seguridad HP </center>\r\n\r\n<p>\r\n\r\n<ul>\r\n<li><b>Altura de unidad:</b> 2.5 pulgadas </li>\r\n<li><b>Descripcion del conector:</b> USB 2.0 o 3.0 </li>\r\n<li><b>Dimensiones:</b> 85 x 120 x 16 mm </li>\r\n<li><b>Peso:</b> 0,32 kg </li>\r\n</ul>', 'Disco duro portatil.png', 'Disco Duro Portatil 1 TB', 9, 0.19, 0, '2021-03-01 00:42:43'),
(112, 1, 1, 'HP Pavilion 24\r\n', 3600000, '<center> Ofrece un perfil ultra compacto que ocupa un espacio minimo y el soporte de aluminio garantiza maxima durabilidad. </center>\r\n\r\n<p>\r\n\r\n<ul>\r\n<li><b>Sistema operativo:</b> Windows 10 Home 64 </li>\r\n<li><b>Procesador:</b> Intel Core i7-8700T </li>\r\n<li><b>Memoria estandar:</b> SDRAM DDR4-2666 de 8 GB (1 x 8 GB) </li>\r\n<li><b>Descripcion Disco Duro:</b> SATA de 1 TB y 7200 rpm </li>\r\n</ul>\r\n\r\n', 'HP Pavilion 24.png', 'Computador de escritorio', 12, 0.19, 0, '2021-03-01 00:44:42'),
(113, 1, 1, 'Mouse Alambrico Pavillion', 90000, '<center> Este mouse ambidiestro se siente perfectamente natural en ambas manos </center>\r\n\r\n<p>\r\n\r\n<ul>\r\n<li> 8 Botones para mas opciones de comandos </li>\r\n<li> Configura la velocidad hasta 4 maneras diferentes </li>\r\n<li> Agarres de goma en los laterales para mayor comodidad </li>\r\n<li> Maxima comodidad de uso con los botones personalizables </li>\r\n</ul>', 'Mouse HP Alambrico.png', 'Mouse HP Alambrico ', 16, 0.19, 0, '2021-02-14 01:33:01'),
(116, 1, 2, 'Samsung Galaxy Tab 8.4', 930000, '<center> Tablet Android con una pantalla Super AMOLED de 8.4 pulgadas a 2560 x 1600 pixels de resolucion. Ademas, cuenta con procesador octa-core Exynos 5 Octa </center>\r\n\r\n<p>\r\n\r\n<ul>\r\n<li><b>Pantalla:</b> 8.4 pulgadas </li>\r\n<li><b>Procesador:</b> 	Exynos 7904 </li>\r\n<li><b>Almacenamiento interno:</b> 	\r\n32 GB ampliables mediante tarjetas microSD </li>\r\n<li><b>RAM:</b> 3 GB </li>\r\n<li><b>Sistema Operativo:</b> Android 9.0 One UI </li>\r\n<li><b>Bateria:</b> 5.000mAh </li>\r\n</ul>', 'Samsung Galaxy Tab 8.4.png', 'Samsung Galaxy Tab 8.4', 38, 0.19, 0, '2021-03-01 00:47:29'),
(124, 1, 4, 'Televisor Sony ', 3000000, ' Este televisor LED utiliza un nuevo tipo de luz en la pantalla, que lo hace delgado. Niveles de negro mas profundos. \r\n\r\n\r\n\r\n\r\nPulgadas: 55 \r\nMedida diagonal: 138.8 cm \r\nResolucion: 4K \r\nEntradas: 3 HDMI. 3 USB \r\nVelocidad de Respuesta: 60 Hz \r\n', 'Televisor Sony.png', ' Este televisor LED utiliza un nuevo tipo de luz en la pantalla, que lo hace delgado. Niveles de negro mas profundos. \r\n\r\n\r\n\r\n\r\nPulgadas: 55 \r\nMedida diagonal: 138.8 cm \r\nResolucion: 4K \r\nEntradas: 3 HDMI. 3 USB \r\nVelocidad de Respuesta: 60 Hz \r\n', 8, 0.19, 0, '2022-03-24 23:13:54'),
(125, 1, 3, 'Prueba No. 01', 130000, '<center> Producto de Prueba No. 01 </center>', 'Imagen no Disponible.png', 'Prueba', 54, 0, 0, '2021-02-14 02:44:29'),
(132, 1, 2, 'Prueba No. 02', 350000, 'Prueba No. 02', '8806092123830-001-750Wx750H.jpg', 'Prueba No. 02', 13, 0.19, 0, '2022-03-25 18:53:33'),
(133, 1, 1, 'Prueba No. 02', 110000, 'Prueba No. 02', 'Imagen no Disponible.png', 'Prueba No. 02', 12, 0.19, 0, '2022-03-25 19:09:04'),
(134, 1, 3, 'Prueba No. 03', 100000, 'Prueba No. 03', 'Imagen no Disponible.png', 'Prueba No. 03', 11, 0.19, 0, '2022-03-25 19:31:51'),
(135, 1, 4, 'Prueba No. 04', 20000, 'Prueba No. 04', 'Imagen no Disponible.png', 'Prueba No. 04', 9, 0.19, 0, '2022-03-25 19:34:59'),
(136, 1, 2, 'Prueba No. 05', 123000, 'Prueba No. 05', '', 'Prueba No. 05', 5, 0.19, 0, '2022-03-25 19:53:45'),
(137, 1, 4, 'Prueba No. 06', 12000, 'Prueba No. 06', '', 'Prueba No. 06', 4, 0.19, 0, '2022-03-25 19:58:33'),
(138, 1, 2, 'Prueba No. 05', 10000, 'Prueba No. 05', '', 'Prueba No. 05', 4, 0.19, 0, '2022-03-25 22:11:21'),
(139, 1, 3, 'Prueba No. 06', 13500, 'Prueba No. 06', '', 'Prueba No. 06', 9, 0.19, 0, '2022-03-25 22:16:20'),
(140, 1, 3, 'Prueba No. 07', 17000, 'Prueba No. 07', '', 'Prueba No. 07', 7, 0.19, 0, '2022-03-25 22:26:14'),
(141, 1, 4, 'Prueba No. 08', 12800, 'Prueba No. 08', '', 'Prueba No. 08', 2, 0.19, 0, '2022-03-25 22:30:06'),
(142, 1, 3, 'Prueba', 12000, 'Prueba', '', 'Prueba', 3, 0.19, 0, '2022-03-25 22:38:30'),
(143, 1, 2, 'Prueba No. 08', 13400, 'Prueba No. 08', '', 'Prueba No. 08', 23, 0.19, 0, '2022-03-25 23:00:03'),
(144, 1, 1, 'Prueba No. 09', 7000, 'Prueba No. 09', '', 'Prueba No. 09', 4, 0.19, 0, '2022-03-25 23:09:48'),
(145, 1, 4, 'Prueba No. 10', 14000, 'Prueba No. 10', 'Imagen no Disponible.png', 'Prueba No. 10', 5, 0.19, 0, '2022-03-25 23:23:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_info`
--

CREATE TABLE `user_info` (
  `ID_user` int(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(320) NOT NULL,
  `password` varchar(300) NOT NULL,
  `Clave` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(80) NOT NULL,
  `Rol` enum('Cliente','Administrador') NOT NULL,
  `DNI` int(20) NOT NULL,
  `Tipo_Documento` enum('TI','CC','CE') NOT NULL,
  `Inscripcion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_info`
--

INSERT INTO `user_info` (`ID_user`, `first_name`, `last_name`, `email`, `password`, `Clave`, `mobile`, `address`, `Rol`, `DNI`, `Tipo_Documento`, `Inscripcion`) VALUES
(1, 'Marcel Edilson', 'Herrera Rodriguez', 'marzeku@gmail.com', '2cca180cbd3161b2caae24301ad635858c6137cc2218e67c89ed7e776101e589', '65687b624e1a7e6deda14b19888c3bc38e6bfb42c1db101ff5d11e63ec77e168', '3195922700', 'Cra 78 No. 65 F 70 Sur', 'Administrador', 1010041583, 'CC', '2022-03-17 18:39:40'),
(2, 'Jonathan', 'Ariza', 'jonathanfabianariza@hotmail.com', '2f2c74e923fc245894aa0da1eb081c963b50364d2317127c1c1deaa75b2fb612', '6d176dedc75f6c20067aaf2edc4622d7dd53e48f9d7bd3db71449a7fc4691a95', '3102393171', 'Calle 77 sur N14q-41', 'Cliente', 1023029507, 'CC', '2021-02-06 21:27:11'),
(3, 'Dario Alfonso', 'Arias Vega', 'swr6@gmail.com', 'cb53830140e2b0239a4d641b6c184c10dfa2e099d1ab34e7d2806388f3b5833f', 'b36c46e8c73da49b7f1aee409662fefc3460d3999d6e1cfff04685bdd76246be', '3491045321', 'Carrera 7 No. 93-01', 'Cliente', 1901836519, 'CC', '2021-06-01 03:32:53'),
(4, 'Arturo', 'Currea Meneses', 'arthur@hotmail.com', 'd2843c7b11f719436fe77f9e85a3e260eb149d7b0bd3b6ff6efd3066030e1aea', 'f8e507899b9fafeb0dad41367758fe7533016d803c345845219b90e7ba9669ad', '3319245499', 'Calle 28 A No. 19-86', 'Cliente', 1167527340, 'CC', '2022-03-15 21:38:09'),
(5, 'Antonio', 'Gonzales', 'antoniog@hotmail.com', '716b5760ba4cc6a1457650f447797bef4582b474ec1a3e2f8d4adf64d3d363a0', '1420f5d106082b331fd0e8a64c0c706ee47d3bdf2dd3b2bcd49b674bb73df49c', '3108203253', 'Carrera 4 No. 22-61', 'Cliente', 1859546142, 'CC', '2021-11-17 22:58:52'),
(6, 'Claudia Alexandra', 'Sanchez ', 'asa@gmail.com', '4bd2842901251c78949d849a7d062dfbf3ac4b47a4c94a634b03563318fcf319', '8930728fd2f41693cd072971c824d78bb5c98b771b61da9c43f7cfe4d3a4dc69', '3453466429', 'Calle 23 A No. 19-86', 'Cliente', 1275756274, 'CC', '2021-01-21 00:30:06'),
(7, 'Oscar Iván', 'Maldonado ', 'xcc@gmail.com', '5b9605ad3eefba816afbe0082c7d337e872da5ba3edf7bff3f79e344ae06e214', '67c00a05f1bd3e50c74249f4e9df6e7e895015d021530399c3e78c62b27881b4', '3424722256', 'Carrera 8 No. 6-87', 'Cliente', 1274622309, 'CC', '2021-01-21 00:30:28'),
(8, 'Juan', 'Forero', 'juan.foreroy@campusucc.edu.co', 'e314b0b88015401957889c6cf42d9a18c8bb6686e8e966f94e0aaeb50cac899f', '0b508314634525913289045cf304872bd7df3b450dd17a6bfdb15f2fa620fa45', '3816403711', 'Carrera 7 # 84- 72', 'Administrador', 1998748457, 'CC', '2021-01-21 00:30:47'),
(9, 'Andres', 'Caldon ', 'andres.caldonh@campusucc.edu.co', '9252f794fa35339ee56bc4b8b9121a7c4835cdff96633f8c28f2be77aa4acedc', '135ce54fa63494b86c2cd6ea0ed6dd81f9421e18bf3a42ee01ca8f4b6ba9d082', '3072206084', 'Calle 4 No. 5 – 10', 'Cliente', 1393100186, 'CC', '2021-01-21 00:31:05'),
(10, 'Andres Felipe', 'Caldon Hernandez', 'alfredoarosero@gmail.com', '3153514862d910d3b2caf98c1a2d40f7dd23b1226cfc50bed5d260d0cfdc6019', '2b0a82c571b787ecdcfe53f1239cf86a1c545ef891fdd5e19339fab183a6e9ab', '3195922700', 'Cra 76 No. 89 D 66 Sur', 'Cliente', 1973101438, 'CC', '2021-01-21 00:31:27'),
(11, 'Leonardo', 'Riano', 'marck@gmail.com', 'c86def7497b91210ec89984eb1aa20a644e9481b491e7788a98c789ebc190dd0', '591c0f8483d1358f87e90306d540960350720ec28ae3e98590fa1e7138db3fe3', '3457533125', 'Calle 11 No. 4 - 14', 'Cliente', 1418346340, 'CC', '2021-01-21 00:31:47'),
(12, 'Jonathan Fabian', 'Ariza Llanos', 'jonathanarizal@gmail.com', '230ce515311cd45249c993a5cbb96884d01186c2c215f91df85c0f2d7356021d', '056db6e116c112b427ac3e8c55af6324e9180a6ab96f82c67c0266796367ee78', '3708102103', 'Calle 24 N° 5-60', 'Cliente', 1581710522, 'CC', '2021-01-21 00:32:04'),
(13, 'Sebastian ', 'Bejarano Zarate', 'sebastian.bejaranoz@gmail.com', '053cb5d743ac12863ca2c1b560c105b4c4e47dd7edf031c13fd08984d1bd7f81', '1a0b2b3d732efb007038428f42510ab3c736f5eb87787a376cd4e64293c52fd9', '3203884336', 'Av. Ciudad de Cali No. 6C-09', 'Cliente', 1332982591, 'CC', '2021-01-21 00:32:32'),
(14, 'Sebastian ', 'Fuquen Martinez', 'sebastian@gmail.com', 'ddb67f3459b9de9711807d13802dcc7475c34837f1d9caf6a0191358f2b50325', '313e0eee75d231d6a18363162566a8fae28f55a1f7e2deeb79de601ad9907bd8', '3940287187', 'Calle 48b sur No. 21-13', 'Cliente', 1898450752, 'CC', '2021-01-21 00:32:47'),
(15, 'Duvar Alejandro', 'Cuellar Caicedo', 'alejandro@gmail.com', '13eadcfc6725f71e7ca605ef06bd62a160c7e7feb4f3d58b8b63151031e365c0', '2b27be87c4a23f709dff8c79b14491e069753969ad831afc9edb9f12fc134bb4', '3087842975', 'Avenida Cra. 60 No. 57-60', 'Cliente', 1286694909, 'CC', '2021-01-21 00:33:03'),
(16, 'David', 'Ramirez', 'david@gmail.com', '19a72f8cf66cbf632eb58da3e6174055a9c111f61178a2dd5c7fcf0e10d43e60', '5eaffd2ce2433d8851d244df83385cdc3a90077f883bc28e3aa2f25eb73c0296', '3019295798', 'Calle 11 No. 4-21 / 93', 'Cliente', 1577885817, 'CC', '2021-01-21 00:33:29'),
(17, 'Jaime', 'Paez', 'jaime@gmail.com', 'ddb67f3459b9de9711807d13802dcc7475c34837f1d9caf6a0191358f2b50325', '6d70814fbde029a64d8c278b50b8f0cdeedbe0f8635d008c3d3875f743dc549d', '3124563245', 'Calle 10 No. 5-22', 'Cliente', 1253219338, 'CC', '2021-01-21 00:33:51'),
(18, 'Andres David', 'Beltran', 'andresb@gmail.com', 'dbabac50d908a10f755d05b96ab5fcbba7da4521c003a0f3b8571c534bcfa719', 'b9c7ba5dc28f7b2bc089839eb9ab936428fb114240c1a86f51e8ceabbbb9e39b', '3895034821', 'Carrera 20 No. 37-54', 'Cliente', 1630824047, 'CC', '2021-01-21 00:34:17'),
(19, 'Andres Felipe', 'Herrera', 'andresh@gmail.com', 'dbabac50d908a10f755d05b96ab5fcbba7da4521c003a0f3b8571c534bcfa719', '0f428f52e49ab4ee906c682ccca05c2d5a5de2a9e6e4724db56bd66f03d59ca1', '3093886982', 'Av. Calle 19 N° 2-49 Centro', 'Cliente', 1478906394, 'CC', '2021-01-21 00:34:48'),
(20, 'Andres Felipe', 'Herrera', 'andresp@gmail.com', '67281aa2ff2089442c3fe27355f5666ad39c3c677c30b350d75fdef23119936a', '339150bcb706f0d9254168b3b7ab027b1e27fc227e2e53bd7c24654e63e34c44', '3829369953', 'Carrera 1 Este No. 17 01', 'Cliente', 1091683549, 'CC', '2021-01-21 00:35:24'),
(21, 'Edgar ', 'Diaz', 'ingcamilodiazca@hotmail.com', '8ee678d17f15c205c16f92afa8c8daab46e1ec36d50f516f0765420a3559b66b', '531d25c6d543332400e7cdbb4b6c095958f8d6c3af55518eda52a40c9dfe88d9', '3108566235', 'Calle 146 92 45', 'Cliente', 79866687, 'CC', '2021-01-21 00:35:40'),
(22, 'Jimmy Eduardo', 'Garzon ', 'jimmy@gmail.com', '85c02cb7ff0110d3b48993c498c6745319bd7bb19556083adca3dad6591f7dd9', '606cd4ef0b6eb28b29d6f4451db7bf4fbaf6ad26595aa0a105f076465dc1ba86', '3087323074', 'Carrera 13 # 26- 81', 'Cliente', 1397843784, 'CC', '2021-01-21 00:35:57'),
(23, 'Juan Daniel', 'Garcia Bilbao', 'juandaniel@gmail.com', '85c02cb7ff0110d3b48993c498c6745319bd7bb19556083adca3dad6591f7dd9', '036964e253f09ca0882a921a37c065d7604d9c8cdc2d57a24b7766d1d04ede36', '3928306225', 'Carrera 7 No. 22 - 79', 'Cliente', 1329815628, 'CC', '2021-01-21 00:36:14'),
(24, 'Breiner Harley', 'Ardila Gutierrez', 'breinerh@gmail.com', '7000ee20e78112228925374b46b31e535c86384275b956dfaa9c50bd41d40417', '757513184a64bba287fa8cba0f8ccbfbf4fea27eeb948327892e431b469d5e7d', '3724788808', 'Cra. 18 No. 82 - 35', 'Cliente', 1471393611, 'CC', '2021-01-21 00:36:31'),
(25, 'Jimmy Daniel', 'Garcia', 'garcia@gmail.com', '1b99e6da3e157877b4866ef66f53d2308e0b4a5eecb9d7e8d0000188fc6a49bf', 'f707b3163c1be10883da7cd5597b0db9fa17408c12937f3a2d813530300e6103', '3617556894', 'Carrera 6 No. 9-77', 'Cliente', 1195110993, 'CC', '2021-01-21 00:36:48'),
(26, 'Luis Angel', 'Sanchez Rodriguez', 'luismiguel@gmail.com', '7d80a9b6494cc9149334ef746ec8893aa07a599a0a089c8ecc5d2be5747872f5', 'f707b3163c1be10883da7cd5597b0db9fa17408c12937f3a2d813530300e6103', '3912799036', 'Carrera 74 No. 82a-81.', 'Cliente', 1868276640, 'CC', '2021-01-21 00:37:09'),
(27, 'David', 'Garzon ', 'swr4@gmail.com', '9b06211fed98aa862c06bcb021d501ca89a24c35f55cee274b248f89645add08', 'e93b62e4c819aba5f04339b499002a959e8ef5b3557abf2ade105230238ebe2f', '3246341051', 'Carrera 8 No. 7-21', 'Cliente', 1100627801, 'CC', '2021-01-21 00:37:24'),
(28, 'Pepe Pepe', 'Gonzales', 'pepe@hotmail.com', 'dffa9614158cf73b8dd0893b97caa5405da95f2cd47abfb5f68ad3964d586942', '687bc97d68bd0009795bd05ca85bbad9d8bbecffc6fe4e20a71f17aeda947258', '3111111111', 'Calle 14 No. 6-00', 'Cliente', 1015477040, 'CC', '2021-01-21 00:37:36'),
(29, 'Cesar David', 'Silva', 'cesard@gmail.com', '401e085dee6b071540422aee46bf906ee6eb7001c7f7b3dd3a10e0a3c14ab966', 'd21b50cfa35c2d827f367ce237f5040159c072746a26f0e8b0e3b37ba0a8cd1d', '3214567897', 'Carrera 8 No. 7-21', 'Cliente', 1112196141, 'CC', '2021-01-21 00:38:02'),
(30, 'Angel David', 'Gomez', 'angel@gmail.com', '5e027ae6c18a0c700f979dec5db4a640e3f21729f4001926109ad4a5c96b98d0', 'bacd0bcd1e8c7a21ce740aff7c2b87449200627bb3461ebf551c70b1a11035cc', '3534395230', 'Carrera 2 No. 10-70', 'Cliente', 1584958875, 'CC', '2021-05-26 18:36:27'),
(31, 'Miguel Angel', 'Revilla', 'miguel@gmail.com', '5ca45f0b74de6d2bcc6f323d6134e27c0e21692922d6ea3979ee9989b095f0a9', 'c28f6b2ae93c8ba065dacbf2c417b76b8e6ba76ab011e7116e14bc0ce85c2295', '3491045388', 'Carrera 30 No. 48-51 Igac', 'Cliente', 1247355697, 'CC', '2021-01-21 00:38:49'),
(32, 'Daniel', 'Gonzales', 'danielg@gmail.com', 'a3a527e7d1c2fdab6b521b07876a1257ae394ce27c16b77207e99241735e151d', '7e486f87d76716dacde975e60d49015054c22d7a915ba806379e34da5252ec1f', '3149865443', 'Calle 28 No. 14 D 87 Norte', 'Cliente', 1024563245, 'CC', '2021-01-21 00:39:12'),
(33, 'Edgar', 'Gonzales', 'marzeku10@gmail.com', '88e0f19c8ae275d6aaf4de718b50ceaf788cfc8948215ecd6bdb690cc74b9f72', '829d86702887a80e5473b7df4e86d9fa9ace4036c290209841254e0ce8565650', '3149865443', 'Calle 28 No. 14 D 87 Norte', 'Cliente', 1998748456, 'CC', '2021-01-21 00:40:00'),
(34, 'Julian Felipe', 'Castanio', 'julianfc@hotmail.com', '4bb228e5269f334fd590540442c14a562c8b021db3fdfc4255c2289fd75c99f1', '271d18b4ae06d9305665ac0babd6c8c633fe8939d4df7cabf18311153ec42bbd', '3126548987', 'Cra 65 R No. 78 E 90 Sur', 'Cliente', 1998748454, 'CC', '2021-05-06 21:46:32'),
(35, 'Juan Eduardo', 'Garcia', 'juanedg@gmail.com', 'abdb1bb0c4a86a33c3b4e8d41d23a6dfa96e561cf094ef7b4c06283e66efad59', 'cc72bfd4615d80f854f603aa5eb0e4c2088c0e4471c3b047c60e39d6896f29c2', '3126548165', 'Calle 28 No. 14 D 87 Norte', 'Cliente', 1024563244, 'CC', '2021-01-21 00:40:51'),
(36, 'Victor Antonio', 'Vicente', 'victor634@hotmail.com', '8ce89e1fbccd9c5871e8a454e942c74d3b0095d91a2ad6f127ffbaf87a7d5f7a', 'fdd3ea1a108ac0218034baca3e45de5d051e653f47b62d6c437fe8c5abd8a5cc', '3134781298', 'Calle 54 7-26', 'Cliente', 1045023212, 'CC', '2021-01-21 00:53:11'),
(37, 'Marcos Esteban', 'GutiÃ©rrez ', 'markus@gmail.com', '1d3a1e3eb15581638d782d9ffecd3aba63070b58df9edf56b731a432b6009226', '7e1a2bd1917542c3a24d1420f77bfd319d237cd460e743d0421ee4834f9dae7a', '3134781316', 'Calle 87 No. 65 G 23 Sur', 'Cliente', 1023029653, 'CC', '2021-01-24 01:08:16'),
(38, 'Edwin David', 'Walteros', 'edwindawal@hotmail.com', '45b6edd05f1e791ae1bd773c784a66d3dd27e3288f9fafad2253f5c8a353db75', '5dcd963d8dc47cf59ee80d73d5a7858c9f007eaa3dd593e2bc50d69a2b354139', '3984761338', 'Cra 76 No. 98 K 9 Sur', 'Cliente', 1023029456, 'CC', '2021-02-01 03:47:27'),
(39, 'Jose Efrain', 'Gonzales', 'josefrain@hotmail.com', '6c727cea4f716a554825b92dd4b043f96f01c28268670aaac9a0ee96607a7264', '6b465fff2a6892e076f6d1dfd6a5c7a54ee927365e0b280f1b04209da2e37678', '3945761112', 'Calle 12 92-98', 'Cliente', 1173029332, 'CC', '2021-02-01 04:02:34'),
(40, 'Lucy', 'Vives', 'lucyviv@gmail.com', 'd37e72ce749bd26ba92895e4e362c1c504ee29b619b4605fa72c978781c0e8ff', '3ca7bc7c3769e3cfdadc384906a2a8bc4ca44893f698de83204557871768bbf9', '3985922711', 'Cra 98 No. 96 H 95 Norte', 'Cliente', 1078629983, 'CC', '2021-02-01 04:02:46'),
(41, 'Adriana del Pilar', 'Sanchez', 'adrianapil@gmail.com', '3908594f8cb93a5c68ef8a915f97c79bd16b8ec62530f9b075e1d3e634e1935a', '5fa36aa27788ca975ec35a0ca3d8fb8c25a94f506bc453753f02a282345f82b4', '3156784312', 'Calle 97 65-88', 'Cliente', 1988544113, 'CC', '2021-02-01 04:02:52'),
(42, 'Andrea Carolina', 'Montenegro', 'andreamon@gmail.com', '4c69d80f96e0dbfcae389ce3f7aba7ce163704815fb8db3a8af9431301f12dd0', '9b764722d8b38bfd54bc66a959cbb9497ba3e3171b71ff2dbee508b18247c342', '3314981122', 'Cra 101 No. 12 H 07 Norte', 'Cliente', 1238565913, 'CC', '2021-02-04 22:33:57'),
(43, 'Daniel', 'Cubillos', 'danielcub@gmail.com', 'f2eaf7bd98500daf1e60e2c158ddf45a9579f0b633bc7c8ebef4683545089b83', '7de6443bb4cc091da80a2b48e83fa3d47f2f2fd9633878d482dddc8c6fd79000', '3231135914', 'Calle 28 9-31 Sur', 'Cliente', 1488532109, 'CC', '2021-03-24 16:39:54'),
(44, 'Juan Fernando', 'Troaquero Hernandez', 'juanfer@gmail.com', 'b0a21637f592bec20c17ffc3e075d99f8b98e91bb92b9e8c8d75f8a96aa47582', 'f12ce04fde3a3d7d18be2e27c22d468a915333da1238f621da95b982626e5fb7', '3884323199', 'Cra 81 No. 102 G 12 Sur', 'Cliente', 1987743211, 'CC', '2021-05-06 21:53:41'),
(45, 'Santiago', 'Guarnizo', 'santiago.munoz@gmail.com', '0668484b24744d463856e4f7b4decc54fda74f823577ef789280199f5c72ce61', '53f219b86b8bd5c0749b2c80fff9a279dd3f2689cc16ca8ad5cb81be152a902e', '3298765698', 'Calle 24 12-34', 'Cliente', 1237863211, 'CC', '2021-05-06 21:55:13'),
(46, 'Andres', 'Lozano', 'andres.lozano@gmail.com', '44e4062a2ad1e9ab590959e776dc28102fc14a25f1bd1de3e091a85e8e9b3a3d', 'b6a4c3158aee778915a43398fd80dc41350842be972eb2adc19e6fcf3973fc00', '3164187619', 'Cra 52 G No. 101 S Oeste', 'Cliente', 1187761719, 'CC', '2021-05-26 18:09:30'),
(47, 'Tatiana', 'Guzman', 'tatys_guz@hotmail.com', 'ddb67f3459b9de9711807d13802dcc7475c34837f1d9caf6a0191358f2b50325', '9e0837de38b50d5fb9fb0f75c8fbf662497bdfee427a7cc4fda830de293ccce2', '3456789182', 'Cra 12 No. 34 F 67 Norte', 'Cliente', 1214587921, 'CC', '2021-11-17 22:46:18'),
(48, 'Mateo', 'Lozano', 'mateos@gmail.com', '88e0f19c8ae275d6aaf4de718b50ceaf788cfc8948215ecd6bdb690cc74b9f72', '8e8c7b76e02583b2f7ef329d4f1bb9edd2fcb7c345d501d206b81a11389eb2b2', '3226789156', 'Cra 12 No. 34 F 67 Sur', 'Cliente', 1714587176, 'CC', '2021-11-18 00:39:25'),
(49, 'Jose Felipe', 'RodrÃ­guez', 'jose.rodriguez@gmail.com', '88e0f19c8ae275d6aaf4de718b50ceaf788cfc8948215ecd6bdb690cc74b9f72', '22455d8e364189d679bef211ef968e3997150366e429e11e72115cfff9f23bdd', '3116789247', 'Calle 12 No. 34 F Sur', 'Cliente', 1122699711, 'CC', '2021-11-18 20:59:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indices de la tabla `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`Cod_Compra`),
  ADD KEY `Cod_Pago` (`Cod_Pago`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  ADD KEY `Cod_Compra` (`Cod_Compra`),
  ADD KEY `product_id` (`product_id`);

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD KEY `Numero_Factura` (`Numero_Factura`),
  ADD KEY `product_id` (`product_id`);

--
-- Indices de la tabla `detalle_orden`
--
ALTER TABLE `detalle_orden`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `Cod_Emp_Prov` (`Cod_Emp_Prov`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`NIT`);

--
-- Indices de la tabla `emp_proveedora`
--
ALTER TABLE `emp_proveedora`
  ADD PRIMARY KEY (`Cod_Emp_Prov`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`Numero_Factura`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `NIT` (`NIT`);

--
-- Indices de la tabla `orden_pedido`
--
ALTER TABLE `orden_pedido`
  ADD KEY `NIT` (`NIT`),
  ADD KEY `Cod_Emp_Prov` (`Cod_Emp_Prov`);

--
-- Indices de la tabla `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Cod_Pago`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `products_fk1` (`product_brand`),
  ADD KEY `products_fk2` (`product_cat`);

--
-- Indices de la tabla `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`ID_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `Cod_Compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `emp_proveedora`
--
ALTER TABLE `emp_proveedora`
  MODIFY `Cod_Emp_Prov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `Numero_Factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT de la tabla `payment`
--
ALTER TABLE `payment`
  MODIFY `Cod_Pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT de la tabla `user_info`
--
ALTER TABLE `user_info`
  MODIFY `ID_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`ID_user`);

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`ID_user`);

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`Cod_Pago`) REFERENCES `payment` (`Cod_Pago`),
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `cliente` (`user_id`);

--
-- Filtros para la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  ADD CONSTRAINT `detalle_compra_ibfk_1` FOREIGN KEY (`Cod_Compra`) REFERENCES `compra` (`Cod_Compra`),
  ADD CONSTRAINT `detalle_compra_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Filtros para la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD CONSTRAINT `detalle_factura_ibfk_1` FOREIGN KEY (`Numero_Factura`) REFERENCES `factura` (`Numero_Factura`),
  ADD CONSTRAINT `detalle_factura_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Filtros para la tabla `detalle_orden`
--
ALTER TABLE `detalle_orden`
  ADD CONSTRAINT `detalle_orden_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `detalle_orden_ibfk_2` FOREIGN KEY (`Cod_Emp_Prov`) REFERENCES `emp_proveedora` (`Cod_Emp_Prov`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `cliente` (`user_id`),
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`NIT`) REFERENCES `empresa` (`NIT`);

--
-- Filtros para la tabla `orden_pedido`
--
ALTER TABLE `orden_pedido`
  ADD CONSTRAINT `orden_pedido_ibfk_1` FOREIGN KEY (`NIT`) REFERENCES `empresa` (`NIT`),
  ADD CONSTRAINT `orden_pedido_ibfk_2` FOREIGN KEY (`Cod_Emp_Prov`) REFERENCES `emp_proveedora` (`Cod_Emp_Prov`);

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_fk1` FOREIGN KEY (`product_brand`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `products_fk2` FOREIGN KEY (`product_cat`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
