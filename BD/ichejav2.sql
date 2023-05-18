-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2023 a las 04:23:15
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ichejav2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinaciones`
--

CREATE TABLE `coordinaciones` (
  `IdCoord` int(15) NOT NULL,
  `N_C` varchar(10) DEFAULT NULL,
  `Clave1` varchar(10) NOT NULL,
  `Clave2` varchar(10) DEFAULT NULL,
  `Ubicacion` varchar(15) NOT NULL,
  `Inmueble` varchar(10) NOT NULL,
  `Nombre_Coord` varchar(60) NOT NULL,
  `Direccion` varchar(250) DEFAULT NULL,
  `Localizacion` varchar(500) DEFAULT NULL,
  `Estatusregistro` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `coordinaciones`
--

INSERT INTO `coordinaciones` (`IdCoord`, `N_C`, `Clave1`, `Clave2`, `Ubicacion`, `Inmueble`, `Nombre_Coord`, `Direccion`, `Localizacion`, `Estatusregistro`) VALUES
(1, '0003', '3', '3', '3', '3', '3', 'pruebas de necesidades', '3', 0),
(5, '0003', '122', '123', '132', '1231', '12321', '31312', '321321', 1),
(11, '2121', '0200', '003', '3', '343', 'fggb', 'prueba deptos ', 'prueba coord con deptos', 1),
(23, '0003', '122', '123', '132', '1231', '12321', '31312', 'prueba agruras\r\n', 0),
(47, '0003', '2', '1', '1', '1', '1', '1', '1', 0),
(48, '0003', '5555555555', '555555', '55555', '55555', '55555555', '55555', '555555555', 0),
(49, '1', '1', '1', '1', '1', '1', '1', '1', 0),
(50, '21', '2312', '3123', '123', '324234', '2342', '42343', '42342', 0),
(52, '0003', '122', '123', '132', '1231', '12321', '31312', '321321', 0),
(53, '0003', '122', '123', '132', '1231', '12321', '31312', '321321', 0),
(54, '0003', '122', '123', '132', '1231', '12321', '31312', '321321', 0),
(64, '23123', '1232', '321312', '12312', '312312', '23123', '12312', '3333333', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `IdDeptos` int(15) NOT NULL,
  `N_C` varchar(10) DEFAULT NULL,
  `Clave1` varchar(10) NOT NULL,
  `Clave2` varchar(10) DEFAULT NULL,
  `Ubicacion` varchar(15) NOT NULL,
  `Inmueble` varchar(10) NOT NULL,
  `Nombre_Depto` varchar(60) NOT NULL,
  `Direccion` varchar(250) DEFAULT NULL,
  `Localizacion` varchar(500) DEFAULT NULL,
  `Estatusregistro` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`IdDeptos`, `N_C`, `Clave1`, `Clave2`, `Ubicacion`, `Inmueble`, `Nombre_Depto`, `Direccion`, `Localizacion`, `Estatusregistro`) VALUES
(1, '0003', '234', '132', '13213', '132321', 'tipopruebasezarblue', '413123', 'dqqdw', 1),
(2, '0003', '123', '132', '13213', '132321', 'tipopruebasezarblue', '413123', 'dqqdw', 0),
(3, '', '', '', '', '', '', '', '', 0),
(4, '4563', '234234', '2342', 'av prueba para ', '1231', 'prueba para paginacion', '3e2e32ed', 'dwdw23d3', 0),
(6, '312', '13', '16', 'kyukuk', 'yukyukuku', 'ykukyk', 'nfngfn', 'tyjtjngn', 1),
(8, '5674', '645', '564', 'sfsfde345', '675hfghf', 'ryty54y', 'bggtgr', 'e44t3t3t3', 0),
(9, '5155', '321688', '9845', 'kjbibini', '', 'ykukyk', '8498ffeffe', 'erfefr56', 0),
(10, '7', '777777', '7777', 'kk7.k7', '7777', 'vacas', '43535efr', 'frefr345', 0),
(11, '0003', '324', '872', '78277', '228', '2', '827', '782', 0),
(12, '782', '78278', '78272', '782782', '78', '787', '7282', '2222', 0),
(13, '572525478', '825425', '424420', '04552', '424252', '5875', '7585', '5978', 0),
(14, '7', '55', '454', '456456', '5464657', '5678678', '6867', '46546', 0),
(15, '9434', '4353', '5353', '4c3r', 'd34d4', 'paginacionprueba1', '3edewd', '32e32', 0),
(16, '1', '324', '24', '44', '2', '4443', '34', '34', 0),
(17, '23444444', '434', '3432', '4234rr', '23re', '23rer3', 'ffdfew', '32r32', 0),
(18, 'ger34', '4535', '5453', 'fefre34', '345', 'ertfntj', '543', 'fr', 0),
(19, '0003', '24343', '112', '123231', '45345', '345345', 'rrwer', 'r43r43r', 1),
(20, '1', '99', '77', 'gggd', '5y4y4tyr', '354435', 'ertete', '3t43t3', 0),
(21, '4344', '4343', '2445', 'efeebwd', '5252', 'pruebas', '25r23r', 'hola como estas', 1),
(22, '45345', '634634', '345345', 'erefngj', '45345', 'ykukyk', '345ffffffffffff', 'ffffffffff343', 1),
(24, '7888', '56765', '56756', 'fkkskofodo', '123221', '3123', 'dqdw', 'dqdwq', 0),
(25, '789785675', '75567', '56765', '7576', '5675', '5675656', '576575', '57567', 1),
(26, '54645', '464645', '5464', '2345', '34535', '35345', '34534', '34534', 1),
(27, '2953', '0100', '4443', 'werwr223', '23442r', '23r23r', 'wf32e', '2e23we', 0),
(29, '0003', '4', '4', '4', '4', '4', '4', '4', 0),
(30, '23', '4', '5', '5', '5', '5', '5', '5', 1),
(31, '222', '222', '222', '222', '222', '222', 'lewis campeon', '222', 0),
(32, '1', '1', '1', '1', '1', '1', 'prueba actual', '1', 0),
(33, '6', '6', '6', '6', '6', '6', '6', '6', 0),
(34, '8', '8', '8', '8', '8', '8', '8', '8', 1),
(35, '9', '9', '9', '9', '9', '9', '9', '9', 0),
(36, '9', '9', '9', '9', '9', '9', '9', '9', 1),
(37, '0', '0', '0', '0', '0', '0', '0', '0', 1),
(38, '9', '98', '8', '8', '8', '8', '8', '8', 1),
(39, '3', '3', '3', '3', '3', '3', '3', '3', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventariogeneral`
--

CREATE TABLE `inventariogeneral` (
  `No` varchar(10) NOT NULL,
  `COG` varchar(10) NOT NULL,
  `NumInvenCompleto` varchar(50) NOT NULL,
  `TramiteBajas2023` varchar(100) NOT NULL,
  `Estatus` varchar(100) NOT NULL,
  `NombreBien` varchar(150) NOT NULL,
  `Descripcion` longtext NOT NULL,
  `Estado` varchar(30) NOT NULL,
  `Municipio` varchar(100) NOT NULL,
  `Inmueble` varchar(10) NOT NULL,
  `CoordinacionZona` varchar(50) NOT NULL,
  `NombreLugar` varchar(50) NOT NULL,
  `ClaveUbicacion` varchar(50) NOT NULL,
  `NombreUsuario` varchar(200) NOT NULL,
  `NumUsuario` varchar(50) NOT NULL,
  `Costo` int(100) NOT NULL,
  `FechaAdquisicion` varchar(50) NOT NULL,
  `FormaAdquisicion` varchar(50) NOT NULL,
  `Proveedor` varchar(300) NOT NULL,
  `Factura` varchar(150) NOT NULL,
  `Condiciones` varchar(50) NOT NULL,
  `Observacion` varchar(200) NOT NULL,
  `ObservacionGral` varchar(200) NOT NULL,
  `NumeroInventarioConsumo` varchar(100) NOT NULL,
  `SERAPE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inventariogeneral`
--

INSERT INTO `inventariogeneral` (`No`, `COG`, `NumInvenCompleto`, `TramiteBajas2023`, `Estatus`, `NombreBien`, `Descripcion`, `Estado`, `Municipio`, `Inmueble`, `CoordinacionZona`, `NombreLugar`, `ClaveUbicacion`, `NombreUsuario`, `NumUsuario`, `Costo`, `FechaAdquisicion`, `FormaAdquisicion`, `Proveedor`, `Factura`, `Condiciones`, `Observacion`, `ObservacionGral`, `NumeroInventarioConsumo`, `SERAPE`) VALUES
('06', '', 'ID-ALMACEN-44411', '', 'LOCALIZADO', 'M?DEMS', 'M?DEMS, EQUIPO EXTERIOR DE CONECTIVIDAD CPE 4 G (CPE) MODELO B2368-A22 MARCA HUAWEI SERIE:2102313KRJ7SN2502981, EQUIPO EXTERIOR DE SERVICIO (AP) MODELO AIRENGINE6760R-51, SERIE:2102353KCM6RN1000785, TARJETA SIM (ICC) SERIE:8952140061770854831F, IMEI:862398040737020, INCLUYE 2 CABLES UTP DE 15 M., 26 CINCHOS SUJETA CABLE DE 142 MM. 30 GRAPAS PARA CABLE TIPO U?A, L?MINA GALVANIZADA RECTANGULAR DE 35X26 CM. CON VINIL QUE INCLUYE 2 PIEZAS DE FLEJE ACERO INOXIDABLE DE 1/2\", 2 PIEZAS DE HEBILLA DE ACERO INOXIDABLE PARA FLEJE DE 1/2\" DE 5 M.', '07', '089', '0199', '1160  COORDINACI?N DE ZONA TAPACHULA NORTE', 'C090-11', 'C090-11', 'SANTIAGO TRUJILLO GOMEZ', '261', 0, '01/08/2022', 'COMODATO', 'C.F.E.', 'ACTA 04-2022', 'X', 'ACTA DE ENTREGA-RECEPCI?N DE EQUIPOS TECNOL?GICOS Y TRAJEAS SIM, PARA EL SERVICIO DE INTERNET GRATUITO EN SITIOS P?BLICOS (PUNTO DE ATENCI?N PRIORITARIA)\n\n', 'INEA', '', 'ANEXO 22'),
('07', '', 'ID-ALMACEN-44412', '', 'LOCALIZADO', 'M?DEMS', 'M?DEMS, EQUIPO EXTERIOR DE CONECTIVIDAD CPE 4 G (CPE) MODELO B2368-A22 MARCA HUAWEI SERIE:2102313KRJ7SN2503024, EQUIPO EXTERIOR DE SERVICIO (AP) MODELO AIRENGINE6760R-51, SERIE:2102353KCM6RN2001346, TARJETA SIM (ICC) SERIE:8952140061770854849F, IMEI:862398040737111, INCLUYE 2 CABLES UTP DE 15 M., 26 CINCHOS SUJETA CABLE DE 142 MM. 30 GRAPAS PARA CABLE TIPO U?A, L?MINA GALVANIZADA RECTANGULAR DE 35X26 CM. CON VINIL QUE INCLUYE 2 PIEZAS DE FLEJE ACERO INOXIDABLE DE 1/2\", 2 PIEZAS DE HEBILLA DE ACERO INOXIDABLE PARA FLEJE DE 1/2\" DE 5 M.', '07', '015', '0132', '1160  COORDINACI?N DE ZONA TAPACHULA NORTE', '028-02 PLAZA COMUNITARIA: CACAHOATAN', '028-02', ' MAGDALENA BAUTISTA MARTINEZ', '260', 0, '01/08/2022', 'COMODATO', 'C.F.E.', 'ACTA 04-2022', 'X', 'ACTA DE ENTREGA-RECEPCI?N DE EQUIPOS TECNOL?GICOS Y TRAJEAS SIM, PARA EL SERVICIO DE INTERNET GRATUITO EN SITIOS P?BLICOS (PUNTO DE ATENCI?N PRIORITARIA)\n\n', 'INEA', '', 'ANEXO 22'),
('08', '', 'ID-ALMACEN-44413', '', 'LOCALIZADO', 'M?DEMS', 'M?DEMS, EQUIPO EXTERIOR DE CONECTIVIDAD CPE 4 G (CPE) MODELO B2368-A22 MARCA HUAWEI SERIE:2102313KRJ7SN2502903, EQUIPO EXTERIOR DE SERVICIO (AP) MODELO AIRENGINE6760R-51, SERIE:2102353KCMW0N1001443, TARJETA SIM (ICC) SERIE:8952140061770854906F, IMEI:862398040736394, INCLUYE 2 CABLES UTP DE 15 M., 26 CINCHOS SUJETA CABLE DE 142 MM. 30 GRAPAS PARA CABLE TIPO U?A, L?MINA GALVANIZADA RECTANGULAR DE 35X26 CM. CON VINIL QUE INCLUYE 2 PIEZAS DE FLEJE ACERO INOXIDABLE DE 1/2\", 2 PIEZAS DE HEBILLA DE ACERO INOXIDABLE PARA FLEJE DE 1/2\" DE 5 M.', '07', '037', '0167', '1270  COORDINACI?N DE ZONA TAPACHULA SUR', '058-02 PLAZA COMUNITARIA: ESTACI?N HUEHUETAN', '058-02', 'ALFREDO CUETO CISNEROS', '435', 0, '01/08/2022', 'COMODATO', 'C.F.E.', 'ACTA 04-2022', 'X', 'ACTA DE ENTREGA-RECEPCI?N DE EQUIPOS TECNOL?GICOS Y TRAJEAS SIM, PARA EL SERVICIO DE INTERNET GRATUITO EN SITIOS P?BLICOS (PUNTO DE ATENCI?N PRIORITARIA)\n\n', 'INEA', '', 'ANEXO 22'),
('09', '', 'ID-ALMACEN-44414', '', 'LOCALIZADO', 'M?DEMS', 'M?DEMS, EQUIPO EXTERIOR DE CONECTIVIDAD CPE 4 G (CPE) MODELO B2368-A22 MARCA HUAWEI SERIE:2102313KRJ7SN2502797, EQUIPO EXTERIOR DE SERVICIO (AP) MODELO AIRENGINE6760R-51, SERIE:2102353KCM6RN1001623, TARJETA SIM (ICC) SERIE:8952140061770854856F, IMEI:862398040737095, INCLUYE 2 CABLES UTP DE 15 M., 26 CINCHOS SUJETA CABLE DE 142 MM. 30 GRAPAS PARA CABLE TIPO U?A, L?MINA GALVANIZADA RECTANGULAR DE 35X26 CM. CON VINIL QUE INCLUYE 2 PIEZAS DE FLEJE ACERO INOXIDABLE DE 1/2\", 2 PIEZAS DE HEBILLA DE ACERO INOXIDABLE PARA FLEJE DE 1/2\" DE 5 M.', '07', '015', '0078', '1160  COORDINACI?N DE ZONA TAPACHULA NORTE', '004-03 PLAZA COMUNITARIA: CASA EJIDAL, FAJA DE ORO', '004-03', ' MAGDALENA BAUTISTA MARTINEZ', '260', 0, '01/08/2022', 'COMODATO', 'C.F.E.', 'ACTA 04-2022', 'X', 'ACTA DE ENTREGA-RECEPCI?N DE EQUIPOS TECNOL?GICOS Y TRAJEAS SIM, PARA EL SERVICIO DE INTERNET GRATUITO EN SITIOS P?BLICOS (PUNTO DE ATENCI?N PRIORITARIA)\n\n', 'INEA', '', 'ANEXO 22'),
('10', '', 'ID-ALMACEN-44415', '', 'LOCALIZADO', 'M?DEMS', 'M?DEMS, EQUIPO EXTERIOR DE CONECTIVIDAD CPE 4 G (CPE) MODELO B2368-A22 MARCA HUAWEI SERIE:2102313KRJ7SN2502934, EQUIPO EXTERIOR DE SERVICIO (AP) MODELO AIRENGINE6760R-51, SERIE:2102353KCMW0N2000167, TARJETA SIM (ICC) SERIE:8952140061770854914F, IMEI:862398040736907, INCLUYE 2 CABLES UTP DE 15 M., 26 CINCHOS SUJETA CABLE DE 142 MM. 30 GRAPAS PARA CABLE TIPO U?A, L?MINA GALVANIZADA RECTANGULAR DE 35X26 CM. CON VINIL QUE INCLUYE 2 PIEZAS DE FLEJE ACERO INOXIDABLE DE 1/2\", 2 PIEZAS DE HEBILLA DE ACERO INOXIDABLE PARA FLEJE DE 1/2\" DE 5 M.', '07', '015', '0072', '1160  COORDINACI?N DE ZONA TAPACHULA NORTE', '003-03 PLAZA COMUNITARIA: BIBLIOTECA Y CASA EJIDAL', '003-03', 'ARIOSTO M?NDEZ RAM?REZ ', '253', 0, '01/08/2022', 'COMODATO', 'C.F.E.', 'ACTA 04-2022', 'X', 'ACTA DE ENTREGA-RECEPCI?N DE EQUIPOS TECNOL?GICOS Y TRAJEAS SIM, PARA EL SERVICIO DE INTERNET GRATUITO EN SITIOS P?BLICOS (PUNTO DE ATENCI?N PRIORITARIA)\n\n', 'INEA', '', 'ANEXO 22'),
('11', '', 'ID-ALMACEN-44416', '', 'LOCALIZADO', 'M?DEMS', 'M?DEMS, EQUIPO EXTERIOR DE CONECTIVIDAD CPE 4 G (CPE) MODELO B2368-A22 MARCA HUAWEI SERIE:2102313KRJ7SN2502792, EQUIPO EXTERIOR DE SERVICIO (AP) MODELO AIRENGINE6760R-51, SERIE:2102353KCMW0N2000229, TARJETA SIM (ICC) SERIE:8952140061770854864F, IMEI:862398040736766, INCLUYE 2 CABLES UTP DE 15 M., 26 CINCHOS SUJETA CABLE DE 142 MM. 30 GRAPAS PARA CABLE TIPO U?A, L?MINA GALVANIZADA RECTANGULAR DE 35X26 CM. CON VINIL QUE INCLUYE 2 PIEZAS DE FLEJE ACERO INOXIDABLE DE 1/2\", 2 PIEZAS DE HEBILLA DE ACERO INOXIDABLE PARA FLEJE DE 1/2\" DE 5 M.', '07', '003', '0057', '1250  COORDINACI?N DE ZONA HUIXTLA', '001-02 PLAZA COMUNITARIA: ACAPETAHUA', '001-02', 'LUCIO JIMENEZ GERONIMO ', '531', 0, '01/08/2022', 'COMODATO', 'C.F.E.', 'ACTA 04-2022', 'X', 'ACTA DE ENTREGA-RECEPCI?N DE EQUIPOS TECNOL?GICOS Y TRAJEAS SIM, PARA EL SERVICIO DE INTERNET GRATUITO EN SITIOS P?BLICOS (PUNTO DE ATENCI?N PRIORITARIA)\n\n', 'INEA', '', 'ANEXO 22'),
('12', '', 'ID-ALMACEN-44417', '', 'LOCALIZADO', 'M?DEMS', 'M?DEMS, EQUIPO EXTERIOR DE CONECTIVIDAD CPE 4 G (CPE) MODELO B2368-A22 MARCA HUAWEI SERIE:2102313KRJ7SN2502977, EQUIPO EXTERIOR DE SERVICIO (AP) MODELO AIRENGINE6760R-51, SERIE:2102353KCM6RN2001352, TARJETA SIM (ICC) SERIE:8952140061770854922F, IMEI:862398040736758, INCLUYE 2 CABLES UTP DE 15 M., 26 CINCHOS SUJETA CABLE DE 142 MM. 30 GRAPAS PARA CABLE TIPO U?A, L?MINA GALVANIZADA RECTANGULAR DE 35X26 CM. CON VINIL QUE INCLUYE 2 PIEZAS DE FLEJE ACERO INOXIDABLE DE 1/2\", 2 PIEZAS DE HEBILLA DE ACERO INOXIDABLE PARA FLEJE DE 1/2\" DE 5 M.', '07', '114', '0162', '1250  COORDINACI?N DE ZONA HUIXTLA', '053-02 PLAZA COMUNITARIA: ESCUINTLA', '053-02', 'CLEMENTE ROBLERO OVANDO', '537', 0, '01/08/2022', 'COMODATO', 'C.F.E.', 'ACTA 04-2022', 'X', 'ACTA DE ENTREGA-RECEPCI?N DE EQUIPOS TECNOL?GICOS Y TRAJEAS SIM, PARA EL SERVICIO DE INTERNET GRATUITO EN SITIOS P?BLICOS (PUNTO DE ATENCI?N PRIORITARIA)\n\n', 'INEA', '', 'ANEXO 22'),
('13', '', 'ID-ALMACEN-44418', '', 'LOCALIZADO', 'M?DEMS', 'M?DEMS, EQUIPO EXTERIOR DE CONECTIVIDAD CPE 4 G (CPE) MODELO B2368-A22 MARCA HUAWEI SERIE:2102313KRJ7SN2503022, EQUIPO EXTERIOR DE SERVICIO (AP) MODELO AIRENGINE6760R-51, SERIE:2102353KCMW0N2000305, TARJETA SIM (ICC) SERIE:8952140061770854260F, IMEI:862398040736998, INCLUYE 2 CABLES UTP DE 15 M., 26 CINCHOS SUJETA CABLE DE 142 MM. 30 GRAPAS PARA CABLE TIPO U?A, L?MINA GALVANIZADA RECTANGULAR DE 35X26 CM. CON VINIL QUE INCLUYE 2 PIEZAS DE FLEJE ACERO INOXIDABLE DE 1/2\", 2 PIEZAS DE HEBILLA DE ACERO INOXIDABLE PARA FLEJE DE 1/2\" DE 5 M.', '07', '001', '0093', '1250  COORDINACI?N DE ZONA HUIXTLA', '008-05 PLAZA COMUNITARIA: ACACOYAGUA', '008-05', 'ELAI RODAS PAZ', '395', 0, '01/08/2022', 'COMODATO', 'C.F.E.', 'ACTA 04-2022', 'X', 'ACTA DE ENTREGA-RECEPCI?N DE EQUIPOS TECNOL?GICOS Y TRAJEAS SIM, PARA EL SERVICIO DE INTERNET GRATUITO EN SITIOS P?BLICOS (PUNTO DE ATENCI?N PRIORITARIA)\n\n', 'INEA', '', 'ANEXO 22'),
('14', '', 'ID-ALMACEN-44419', '', 'LOCALIZADO', 'M?DEMS', 'M?DEMS, EQUIPO EXTERIOR DE CONECTIVIDAD CPE 4 G (CPE) MODELO B2368-A22 MARCA HUAWEI SERIE:2102313KRJ7SN2503000, EQUIPO EXTERIOR DE SERVICIO (AP) MODELO AIRENGINE6760R-51, SERIE:2102353KCMW0N2000170, TARJETA SIM (ICC) SERIE:8952140061770854278F, IMEI:862398040736931, INCLUYE 2 CABLES UTP DE 15 M., 26 CINCHOS SUJETA CABLE DE 142 MM. 30 GRAPAS PARA CABLE TIPO U?A, L?MINA GALVANIZADA RECTANGULAR DE 35X26 CM. CON VINIL QUE INCLUYE 2 PIEZAS DE FLEJE ACERO INOXIDABLE DE 1/2\", 2 PIEZAS DE HEBILLA DE ACERO INOXIDABLE PARA FLEJE DE 1/2\" DE 5 M.', '07', '051', '0150', '1250  COORDINACI?N DE ZONA HUIXTLA', '041-02 PLAZA COMUNITARIA: MAPASTEPEC', '041-02', 'MAR?ANO DE LOS SANTOS ZAVALA', '396', 0, '01/08/2022', 'COMODATO', 'C.F.E.', 'ACTA 04-2022', 'X', 'ACTA DE ENTREGA-RECEPCI?N DE EQUIPOS TECNOL?GICOS Y TRAJEAS SIM, PARA EL SERVICIO DE INTERNET GRATUITO EN SITIOS P?BLICOS (PUNTO DE ATENCI?N PRIORITARIA)\n\n', 'INEA', '', 'ANEXO 22'),
('15', '', 'ID-ALMACEN-44420', '', 'LOCALIZADO', 'M?DEMS', 'M?DEMS, EQUIPO EXTERIOR DE CONECTIVIDAD CPE 4 G (CPE) MODELO B2368-A22 MARCA HUAWEI SERIE:2102313KRJ7SN2503041, EQUIPO EXTERIOR DE SERVICIO (AP) MODELO AIRENGINE6760R-51, SERIE:2102353KCMW0N2000206, TARJETA SIM (ICC) SERIE:8952140061770854872F, IMEI:862398040737186, INCLUYE 2 CABLES UTP DE 15 M., 26 CINCHOS SUJETA CABLE DE 142 MM. 30 GRAPAS PARA CABLE TIPO U?A, L?MINA GALVANIZADA RECTANGULAR DE 35X26 CM. CON VINIL QUE INCLUYE 2 PIEZAS DE FLEJE ACERO INOXIDABLE DE 1/2\", 2 PIEZAS DE HEBILLA DE ACERO INOXIDABLE PARA FLEJE DE 1/2\" DE 5 M.', '07', '097', '0112', '1150  COORDINACI?N DE ZONA TONALA', '018-02 PLAZA COMUNITARIA: CASA DEL ANCIANO, TONALA', '018-02', 'PAULA LABRADOR ZAVALA', '245', 0, '01/08/2022', 'COMODATO', 'C.F.E.', 'ACTA 04-2022', 'X', 'ACTA DE ENTREGA-RECEPCI?N DE EQUIPOS TECNOL?GICOS Y TRAJEAS SIM, PARA EL SERVICIO DE INTERNET GRATUITO EN SITIOS P?BLICOS (PUNTO DE ATENCI?N PRIORITARIA)\n\n', 'INEA', '', 'ANEXO 22'),
('16', '', 'ID-ALMACEN-44421', '', 'LOCALIZADO', 'M?DEMS', 'M?DEMS, EQUIPO EXTERIOR DE CONECTIVIDAD CPE 4 G (CPE) MODELO B2368-A22 MARCA HUAWEI SERIE:2102313KRJ7SN2502895, EQUIPO EXTERIOR DE SERVICIO (AP) MODELO AIRENGINE6760R-51, SERIE:2102353KCM6RN1002585, TARJETA SIM (ICC) SERIE:8952140061770854880F, IMEI:862398040736469, INCLUYE 2 CABLES UTP DE 15 M., 26 CINCHOS SUJETA CABLE DE 142 MM. 30 GRAPAS PARA CABLE TIPO U?A, L?MINA GALVANIZADA RECTANGULAR DE 35X26 CM. CON VINIL QUE INCLUYE 2 PIEZAS DE FLEJE ACERO INOXIDABLE DE 1/2\", 2 PIEZAS DE HEBILLA DE ACERO INOXIDABLE PARA FLEJE DE 1/2\" DE 5 M.', '07', '099', '0131', '1180  COORDINACI?N DE ZONA COMITAN', '027-03 PLAZA COMUNITARIA: LA TRINITARIA FLAVIO A. ', '027-03', 'GER?NIMO AGUILAR L?PEZ', '281', 0, '01/08/2022', 'COMODATO', 'C.F.E.', 'ACTA 04-2022', 'X', 'ACTA DE ENTREGA-RECEPCI?N DE EQUIPOS TECNOL?GICOS Y TRAJEAS SIM, PARA EL SERVICIO DE INTERNET GRATUITO EN SITIOS P?BLICOS (PUNTO DE ATENCI?N PRIORITARIA)\n\n', 'INEA', '', 'ANEXO 22'),
('17', '', 'ID-ALMACEN-44422', '', 'LOCALIZADO', 'M?DEMS', 'M?DEMS, EQUIPO EXTERIOR DE CONECTIVIDAD CPE 4 G (CPE) MODELO B2368-A22 MARCA HUAWEI SERIE:2102313KRJ75N2502872, EQUIPO EXTERIOR DE SERVICIO (AP) MODELO AIRENGINE6760R-51, SERIE:2102353KCMW0N2000212, TARJETA SIM (ICC) SERIE:8952140061770854898F, IMEI:862398040737160, INCLUYE 2 CABLES UTP DE 15 M., 26 CINCHOS SUJETA CABLE DE 142 MM. 30 GRAPAS PARA CABLE TIPO U?A, L?MINA GALVANIZADA RECTANGULAR DE 35X26 CM. CON VINIL QUE INCLUYE 2 PIEZAS DE FLEJE ACERO INOXIDABLE DE 1/2\", 2 PIEZAS DE HEBILLA DE ACERO INOXIDABLE PARA FLEJE DE 1/2\" DE 5 M.', '07', '009', '00185', '1150  COORDINACI?N DE ZONA TONALA', '007-16 PLAZA COMUNITARIA: ALEJANDRO ANTONIO PATRIN', '007-16', 'ABRIL DEL ROCI? DE LOS SANTOS MART?NEZ', '235', 0, '01/08/2022', 'COMODATO', 'C.F.E.', 'ACTA 04-2022', 'X', 'ACTA DE ENTREGA-RECEPCI?N DE EQUIPOS TECNOL?GICOS Y TRAJEAS SIM, PARA EL SERVICIO DE INTERNET GRATUITO EN SITIOS P?BLICOS (PUNTO DE ATENCI?N PRIORITARIA)\n\n', 'INEA', '', 'ANEXO 22'),
('18', '', 'ID-ALMACEN-44423', '', 'LOCALIZADO', 'M?DEMS', 'M?DEMS, EQUIPO EXTERIOR DE CONECTIVIDAD CPE 4 G (CPE) MODELO B2368-A22 MARCA HUAWEI SERIE:2102313KRJ7SN1500496, EQUIPO EXTERIOR DE SERVICIO (AP) MODELO AIRENGINE6760R-51, SERIE:2102353KCM6RN1002589, TARJETA SIM (ICC) SERIE:8952140061770854286F, IMEI:862398040683976, INCLUYE 2 CABLES UTP DE 15 M., 26 CINCHOS SUJETA CABLE DE 142 MM. 30 GRAPAS PARA CABLE TIPO U?A, L?MINA GALVANIZADA RECTANGULAR DE 35X26 CM. CON VINIL QUE INCLUYE 2 PIEZAS DE FLEJE ACERO INOXIDABLE DE 1/2\", 2 PIEZAS DE HEBILLA DE ACERO INOXIDABLE PARA FLEJE DE 1/2\" DE 5 M.', '07', '019', '0082', '1180  COORDINACI?N DE ZONA COMITAN', '005-03 PLAZA COMUNITARIA: IDH. COMITAN DR. BELISAR', '005-03', 'MARIANO RAMIRO GUERRA ESPINOSA ', '289', 0, '01/08/2022', 'COMODATO', 'C.F.E.', 'ACTA 04-2022', 'X', 'ACTA DE ENTREGA-RECEPCI?N DE EQUIPOS TECNOL?GICOS Y TRAJEAS SIM, PARA EL SERVICIO DE INTERNET GRATUITO EN SITIOS P?BLICOS (PUNTO DE ATENCI?N PRIORITARIA)\n\n', 'INEA', '', 'ANEXO 22'),
('19', '', 'ID-ALMACEN-44424', '', 'LOCALIZADO', 'M?DEMS', 'M?DEMS, EQUIPO EXTERIOR DE CONECTIVIDAD CPE 4 G (CPE) MODELO B2368-A22 MARCA HUAWEI SERIE:2102313KRJ7SN1500579, EQUIPO EXTERIOR DE SERVICIO (AP) MODELO AIRENGINE6760R-51, SERIE:2102353KCM6RN1005431, TARJETA SIM (ICC) SERIE:8952140061770854294F, IMEI:862398040685690, INCLUYE 2 CABLES UTP DE 15 M., 26 CINCHOS SUJETA CABLE DE 142 MM. 30 GRAPAS PARA CABLE TIPO U?A, L?MINA GALVANIZADA RECTANGULAR DE 35X26 CM. CON VINIL QUE INCLUYE 2 PIEZAS DE FLEJE ACERO INOXIDABLE DE 1/2\", 2 PIEZAS DE HEBILLA DE ACERO INOXIDABLE PARA FLEJE DE 1/2\" DE 5 M.', '07', '083', '0067', '1320  COORDINACI?N DE ZONA LAS ROSAS', '002-05 PLAZA COMUNITARIA: DR. BELISARIO DOMINGUEZ,', '002-05', 'ELVA HERN?NDEZ N??EZ ', '195', 0, '01/08/2022', 'COMODATO', 'C.F.E.', 'ACTA 04-2022', 'X', 'ACTA DE ENTREGA-RECEPCI?N DE EQUIPOS TECNOL?GICOS Y TRAJEAS SIM, PARA EL SERVICIO DE INTERNET GRATUITO EN SITIOS P?BLICOS (PUNTO DE ATENCI?N PRIORITARIA)\n\n', 'INEA', '', 'ANEXO 22'),
('20', '', 'ID-ALMACEN-44425', '', 'LOCALIZADO', 'M?DEMS', 'M?DEMS, EQUIPO EXTERIOR DE CONECTIVIDAD CPE 4 G (CPE) MODELO B2368-A22 MARCA HUAWEI SERIE:2102313KRJ7SN1500620, EQUIPO EXTERIOR DE SERVICIO (AP) MODELO AIRENGINE6760R-51, SERIE:2102353KCM6RN1004474, TARJETA SIM (ICC) SERIE:8952140061770854336F, IMEI:862398040686136, INCLUYE 2 CABLES UTP DE 15 M., 26 CINCHOS SUJETA CABLE DE 142 MM. 30 GRAPAS PARA CABLE TIPO U?A, L?MINA GALVANIZADA RECTANGULAR DE 35X26 CM. CON VINIL QUE INCLUYE 2 PIEZAS DE FLEJE ACERO INOXIDABLE DE 1/2\", 2 PIEZAS DE HEBILLA DE ACERO INOXIDABLE PARA FLEJE DE 1/2\" DE 5 M.', '07', '106', '0141', '1280  COORDINACI?N DE ZONA SAN CRISTOBAL TSOTSIL', '033-02 PLAZA COMUNITARIA: TEOPISCA', '033-02', 'MARIA DE LOS ANGELES TORRES GARCIA ', '457', 0, '01/08/2022', 'COMODATO', 'C.F.E.', 'ACTA 04-2022', 'X', 'ACTA DE ENTREGA-RECEPCI?N DE EQUIPOS TECNOL?GICOS Y TRAJEAS SIM, PARA EL SERVICIO DE INTERNET GRATUITO EN SITIOS P?BLICOS (PUNTO DE ATENCI?N PRIORITARIA)\n\n', 'INEA', '', 'ANEXO 22'),
('21', '', 'ID-ALMACEN-44426', '', 'LOCALIZADO', 'M?DEMS', 'M?DEMS, EQUIPO EXTERIOR DE CONECTIVIDAD CPE 4 G (CPE) MODELO B2368-A22 MARCA HUAWEI SERIE:2102313KRJ7SN1500631, EQUIPO EXTERIOR DE SERVICIO (AP) MODELO AIRENGINE6760R-51, SERIE:2102353KCMW0N2000236, TARJETA SIM (ICC) SERIE:8952140061770854302F, IMEI:862398040685898, INCLUYE 2 CABLES UTP DE 15 M., 26 CINCHOS SUJETA CABLE DE 142 MM. 30 GRAPAS PARA CABLE TIPO U?A, L?MINA GALVANIZADA RECTANGULAR DE 35X26 CM. CON VINIL QUE INCLUYE 2 PIEZAS DE FLEJE ACERO INOXIDABLE DE 1/2\", 2 PIEZAS DE HEBILLA DE ACERO INOXIDABLE PARA FLEJE DE 1/2\" DE 5 M.', '07', '101', '0085', '1260  COORDINACI?N DE ZONA TUXTLA ORIENTE', '006-02 PLAZA COMUNITARIA: IDH. COPOYA', '006-02', 'OMAR URBIETA SALINAS', '421', 0, '01/08/2022', 'COMODATO', 'C.F.E.', 'ACTA 04-2022', 'X', 'ACTA DE ENTREGA-RECEPCI?N DE EQUIPOS TECNOL?GICOS Y TRAJEAS SIM, PARA EL SERVICIO DE INTERNET GRATUITO EN SITIOS P?BLICOS (PUNTO DE ATENCI?N PRIORITARIA)\n\n', 'INEA', '', 'ANEXO 22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plazascomunitarias`
--

CREATE TABLE `plazascomunitarias` (
  `IdPlazas` int(11) NOT NULL,
  `N_C` varchar(10) NOT NULL,
  `CoordZona` varchar(50) NOT NULL,
  `NumPlaza` int(3) NOT NULL,
  `NombrePlaza` varchar(70) NOT NULL,
  `Ubicacion` varchar(30) NOT NULL,
  `Ubicacion2` int(11) NOT NULL,
  `Estatus` text NOT NULL,
  `NumUbicacion` varchar(20) NOT NULL,
  `Localidad` varchar(60) NOT NULL,
  `Municipio` varchar(30) NOT NULL,
  `Observaciones` varchar(300) DEFAULT NULL,
  `CodigoPostal` int(11) DEFAULT NULL,
  `Estatusregistro` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `plazascomunitarias`
--

INSERT INTO `plazascomunitarias` (`IdPlazas`, `N_C`, `CoordZona`, `NumPlaza`, `NombrePlaza`, `Ubicacion`, `Ubicacion2`, `Estatus`, `NumUbicacion`, `Localidad`, `Municipio`, `Observaciones`, `CodigoPostal`, `Estatusregistro`) VALUES
(1, '1', '34', 243, 'cfew', '234', 234, 'cfwe', '234', '2cd', 'dewdew', 'edw23', 23423, 1),
(5, '7', '1', 1, '1', '1', 1, '1', '1', '1', '1', '1', 1, 1),
(55, '23', '23', 23, '23', '23', 23, '', '23', '23', '23', '23', 23, 1),
(60, '7', '7', 7, 'plaza prueba', '7', 7, '7', '7', '7', '7', '7', 7, 0),
(61, '343', '22', 2, '2', '2', 12, '13', '2', '6563', '2', '2', 2, 0),
(62, '123', '123', 213, '123', '123', 123, '', '12', '12', '12', '123', 123, 1),
(63, '343', '213', 213, '312', '321', 213, 'pruebaa', '3123', '12321', '312', '213', 123, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioadmin`
--

CREATE TABLE `usuarioadmin` (
  `IdUsuario` int(11) NOT NULL,
  `NombreUsuario` varchar(100) NOT NULL,
  `Contrasena` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarioadmin`
--

INSERT INTO `usuarioadmin` (`IdUsuario`, `NombreUsuario`, `Contrasena`) VALUES
(1, 'Admin', '1234'),
(2, 'Icheja', '1111');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuario` int(15) NOT NULL,
  `No_User` varchar(10) DEFAULT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `Estatusregistro` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `No_User`, `Nombre`, `Telefono`, `Estatusregistro`) VALUES
(1, '', 'qewqeq', '', 1),
(2, NULL, 'prueba 2', NULL, 1),
(3, NULL, 'prueba 2', NULL, 1),
(4, '231', 'paolodust137', '1231', 1),
(5, '231', 'paolo', '1231', 1),
(6, '137', 'pruebajason dominguez', '9613311864', 0),
(7, '137', 'pruebajason dominguez', '9613311864', 1),
(8, '1970', 'pericoprueba paolo', '132131213232', 1),
(9, '12312', 'paolo prueba script', '123131', 1),
(10, '12344', 'en un sueño muy raro', '9613311864', 0),
(11, '12312', 'luis armando', '4234523', 1),
(12, '99999', 'bernabe fernandez', '455354353', 0),
(13, '55555', 'roxana balcazar', '9613311864', 0),
(14, '23423423', 'luis felipe', '123234444', 0),
(15, '3424442', 'alan alexis', '324234234', 1),
(16, '77553', 'ricardo delgado', '12321', 1),
(17, '098908', 'guillermo', '3242423', 1),
(18, '34234', 'angel durantes', '634634', 1),
(19, '0927272', 'josvan venabides', '954948', 1),
(20, '6514984', 'brando barrera', '598489', 0),
(21, '65654', 'lucas', '12959', 1),
(22, '6548498', 'fernanda sofia', '65484', 1),
(23, '234342', 'albert adrian', '332342', 1),
(24, '654984', 'pablo cazali', '3342432', 1),
(25, '342432', 'roberto martinez', '6164849', 1),
(26, '5464', 'jacobo wong', '654984', 1),
(27, '2342342', 'richie ofarrill', '949849', 1),
(28, '34242', 'richie ofarrill', '3424234', 1),
(29, '137', 'cristiano ronaldo dos santos', '9613311864', 1),
(30, '2093', 'lance stroll', '9613311864', 1),
(31, '6515', 'lewis hamilton', '132131213232', 1),
(32, '2918', 'kevin de bruyne', '7878', 1),
(33, '11', 'neymar jr', '9613311864', 1),
(34, '14444', 'marcel sabitzer', '9613311864', 1),
(35, '0982', 'romero alfonso', '9613311864', 1),
(36, '343434', 'jefe maestro', '9613311864', 1),
(37, '2222', 'chester', '9613311864', 1),
(38, '05993049', 'romero hicks', '9613311864', 1),
(39, '5555', 'peralta', '9613311864', 1),
(40, '34', 'coño', '9613311864', 1),
(41, '3342', 'llorente gabriel', '9613311864', 1),
(42, '3333', 'fastball', '66654', 1),
(43, '1377', 'Claudia Janeth', '242342342423', 1),
(44, '2234', 'diego', '9613311864', 1),
(45, '1333', 'babo', '44444', 1),
(46, '1992', 'chalino sanchez', '1955', 1),
(47, '8', 'lucarios filomeno', '123131', 1),
(48, '543', 'tata martino', '9613311864', 1),
(49, '123', 'maestro roshi', '1312', 1),
(50, '5342', 'canaca', '1231', 1),
(51, '234324', 'gigio', '9613311864', 1),
(52, '5435', 'orlandi', '9613311864', 1),
(53, '2993', 'ilie oleart', '9613311864', 1),
(54, '43242', 'frank cuesta', '9613311864', 1),
(55, '424', 'la mole', '9613311864', 1),
(56, '424', 'la mole', '9613311864', 1),
(57, '231', 'paoo', '1231232', 1),
(58, '231', 'paoo', '1231232', 1),
(59, '123', 'paolo', '213', 1),
(60, '3', 'tito', '242342342423', 1),
(61, '158', 'TUXTLA GTZ.-TUXTLA GTZ.-AV. 2A. NTE. OTE. 431, SAN MARCOS, 29043 TUXTLA GUTIÉRREZ, CHIS.', 'INACTIVA', 1),
(62, '234', '234', '234', 1),
(63, '334', '3343', '334', 1),
(64, '197011', 'paoloprueba16', '9613311864', 1),
(65, '23432', 'luis Prueba 16', '9613311864', 1),
(66, '13213', 'Bernabe Prueba 16', '9613311864', 1),
(67, '23423', 'Roxana Prueba 16', '9613311864', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `coordinaciones`
--
ALTER TABLE `coordinaciones`
  ADD PRIMARY KEY (`IdCoord`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`IdDeptos`);

--
-- Indices de la tabla `plazascomunitarias`
--
ALTER TABLE `plazascomunitarias`
  ADD PRIMARY KEY (`IdPlazas`);

--
-- Indices de la tabla `usuarioadmin`
--
ALTER TABLE `usuarioadmin`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD UNIQUE KEY `Contrasena` (`Contrasena`),
  ADD UNIQUE KEY `NombreUsuario` (`NombreUsuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `coordinaciones`
--
ALTER TABLE `coordinaciones`
  MODIFY `IdCoord` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `IdDeptos` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `plazascomunitarias`
--
ALTER TABLE `plazascomunitarias`
  MODIFY `IdPlazas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `usuarioadmin`
--
ALTER TABLE `usuarioadmin`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuario` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
