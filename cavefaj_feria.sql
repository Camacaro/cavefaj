-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2019 a las 15:47:30
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cavefaj_feria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `id` int(11) NOT NULL,
  `estado_id` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `capital` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`id`, `estado_id`, `ciudad`, `capital`) VALUES
(1, '1', 'Maroa', '0'),
(2, '1', 'Puerto Ayacucho', '1'),
(3, '1', 'San Fernando de Atabapo', '0'),
(4, '2', 'Anaco', '0'),
(5, '2', 'Aragua de Barcelona', '0'),
(6, '2', 'Barcelona', '1'),
(7, '2', 'Boca de Uchire', '0'),
(8, '2', 'Cantaura', '0'),
(9, '2', 'Clarines', '0'),
(10, '2', 'El Chaparro', '0'),
(11, '2', 'El Pao Anzoátegui', '0'),
(12, '2', 'El Tigre', '0'),
(13, '2', 'El Tigrito', '0'),
(14, '2', 'Guanape', '0'),
(15, '2', 'Guanta', '0'),
(16, '2', 'Lechería', '0'),
(17, '2', 'Onoto', '0'),
(18, '2', 'Pariaguán', '0'),
(19, '2', 'Píritu', '0'),
(20, '2', 'Puerto La Cruz', '0'),
(21, '2', 'Puerto Píritu', '0'),
(22, '2', 'Sabana de Uchire', '0'),
(23, '2', 'San Mateo Anzoátegui', '0'),
(24, '2', 'San Pablo Anzoátegui', '0'),
(25, '2', 'San Tomé', '0'),
(26, '2', 'Santa Ana de Anzoátegui', '0'),
(27, '2', 'Santa Fe Anzoátegui', '0'),
(28, '2', 'Santa Rosa', '0'),
(29, '2', 'Soledad', '0'),
(30, '2', 'Urica', '0'),
(31, '2', 'Valle de Guanape', '0'),
(43, '3', 'Achaguas', '0'),
(44, '3', 'Biruaca', '0'),
(45, '3', 'Bruzual', '0'),
(46, '3', 'El Amparo', '0'),
(47, '3', 'El Nula', '0'),
(48, '3', 'Elorza', '0'),
(49, '3', 'Guasdualito', '0'),
(50, '3', 'Mantecal', '0'),
(51, '3', 'Puerto Páez', '0'),
(52, '3', 'San Fernando de Apure', '1'),
(53, '3', 'San Juan de Payara', '0'),
(54, '4', 'Barbacoas', '0'),
(55, '4', 'Cagua', '0'),
(56, '4', 'Camatagua', '0'),
(58, '4', 'Choroní', '0'),
(59, '4', 'Colonia Tovar', '0'),
(60, '4', 'El Consejo', '0'),
(61, '4', 'La Victoria', '0'),
(62, '4', 'Las Tejerías', '0'),
(63, '4', 'Magdaleno', '0'),
(64, '4', 'Maracay', '1'),
(65, '4', 'Ocumare de La Costa', '0'),
(66, '4', 'Palo Negro', '0'),
(67, '4', 'San Casimiro', '0'),
(68, '4', 'San Mateo', '0'),
(69, '4', 'San Sebastián', '0'),
(70, '4', 'Santa Cruz de Aragua', '0'),
(71, '4', 'Tocorón', '0'),
(72, '4', 'Turmero', '0'),
(73, '4', 'Villa de Cura', '0'),
(74, '4', 'Zuata', '0'),
(75, '5', 'Barinas', '1'),
(76, '5', 'Barinitas', '0'),
(77, '5', 'Barrancas', '0'),
(78, '5', 'Calderas', '0'),
(79, '5', 'Capitanejo', '0'),
(80, '5', 'Ciudad Bolivia', '0'),
(81, '5', 'El Cantón', '0'),
(82, '5', 'Las Veguitas', '0'),
(83, '5', 'Libertad de Barinas', '0'),
(84, '5', 'Sabaneta', '0'),
(85, '5', 'Santa Bárbara de Barinas', '0'),
(86, '5', 'Socopó', '0'),
(87, '6', 'Caicara del Orinoco', '0'),
(88, '6', 'Canaima', '0'),
(89, '6', 'Ciudad Bolívar', '1'),
(90, '6', 'Ciudad Piar', '0'),
(91, '6', 'El Callao', '0'),
(92, '6', 'El Dorado', '0'),
(93, '6', 'El Manteco', '0'),
(94, '6', 'El Palmar', '0'),
(95, '6', 'El Pao', '0'),
(96, '6', 'Guasipati', '0'),
(97, '6', 'Guri', '0'),
(98, '6', 'La Paragua', '0'),
(99, '6', 'Matanzas', '0'),
(100, '6', 'Puerto Ordaz', '0'),
(101, '6', 'San Félix', '0'),
(102, '6', 'Santa Elena de Uairén', '0'),
(103, '6', 'Tumeremo', '0'),
(104, '6', 'Unare', '0'),
(105, '6', 'Upata', '0'),
(106, '7', 'Bejuma', '0'),
(107, '7', 'Belén', '0'),
(108, '7', 'Campo de Carabobo', '0'),
(109, '7', 'Canoabo', '0'),
(110, '7', 'Central Tacarigua', '0'),
(111, '7', 'Chirgua', '0'),
(112, '7', 'Ciudad Alianza', '0'),
(113, '7', 'El Palito', '0'),
(114, '7', 'Guacara', '0'),
(115, '7', 'Guigue', '0'),
(116, '7', 'Las Trincheras', '0'),
(117, '7', 'Los Guayos', '0'),
(118, '7', 'Mariara', '0'),
(119, '7', 'Miranda', '0'),
(120, '7', 'Montalbán', '0'),
(121, '7', 'Morón', '0'),
(122, '7', 'Naguanagua', '0'),
(123, '7', 'Puerto Cabello', '0'),
(124, '7', 'San Joaquín', '0'),
(125, '7', 'Tocuyito', '0'),
(126, '7', 'Urama', '0'),
(127, '7', 'Valencia', '1'),
(128, '7', 'Vigirimita', '0'),
(129, '8', 'Aguirre', '0'),
(130, '8', 'Apartaderos Cojedes', '0'),
(131, '8', 'Arismendi', '0'),
(132, '8', 'Camuriquito', '0'),
(133, '8', 'El Baúl', '0'),
(134, '8', 'El Limón', '0'),
(135, '8', 'El Pao Cojedes', '0'),
(136, '8', 'El Socorro', '0'),
(137, '8', 'La Aguadita', '0'),
(138, '8', 'Las Vegas', '0'),
(139, '8', 'Libertad de Cojedes', '0'),
(140, '8', 'Mapuey', '0'),
(141, '8', 'Piñedo', '0'),
(142, '8', 'Samancito', '0'),
(143, '8', 'San Carlos', '1'),
(144, '8', 'Sucre', '0'),
(145, '8', 'Tinaco', '0'),
(146, '8', 'Tinaquillo', '0'),
(147, '8', 'Vallecito', '0'),
(148, '9', 'Tucupita', '1'),
(149, '24', 'Caracas', '1'),
(150, '24', 'El Junquito', '0'),
(151, '10', 'Adícora', '0'),
(152, '10', 'Boca de Aroa', '0'),
(153, '10', 'Cabure', '0'),
(154, '10', 'Capadare', '0'),
(155, '10', 'Capatárida', '0'),
(156, '10', 'Chichiriviche', '0'),
(157, '10', 'Churuguara', '0'),
(158, '10', 'Coro', '1'),
(159, '10', 'Cumarebo', '0'),
(160, '10', 'Dabajuro', '0'),
(161, '10', 'Judibana', '0'),
(162, '10', 'La Cruz de Taratara', '0'),
(163, '10', 'La Vela de Coro', '0'),
(164, '10', 'Los Taques', '0'),
(165, '10', 'Maparari', '0'),
(166, '10', 'Mene de Mauroa', '0'),
(167, '10', 'Mirimire', '0'),
(168, '10', 'Pedregal', '0'),
(169, '10', 'Píritu Falcón', '0'),
(170, '10', 'Pueblo Nuevo Falcón', '0'),
(171, '10', 'Puerto Cumarebo', '0'),
(172, '10', 'Punta Cardón', '0'),
(173, '10', 'Punto Fijo', '0'),
(174, '10', 'San Juan de Los Cayos', '0'),
(175, '10', 'San Luis', '0'),
(176, '10', 'Santa Ana Falcón', '0'),
(177, '10', 'Santa Cruz De Bucaral', '0'),
(178, '10', 'Tocopero', '0'),
(179, '10', 'Tocuyo de La Costa', '0'),
(180, '10', 'Tucacas', '0'),
(181, '10', 'Yaracal', '0'),
(182, '11', 'Altagracia de Orituco', '0'),
(183, '11', 'Cabruta', '0'),
(184, '11', 'Calabozo', '0'),
(185, '11', 'Camaguán', '0'),
(196, '11', 'Chaguaramas Guárico', '0'),
(197, '11', 'El Socorro', '0'),
(198, '11', 'El Sombrero', '0'),
(199, '11', 'Las Mercedes de Los Llanos', '0'),
(200, '11', 'Lezama', '0'),
(201, '11', 'Onoto', '0'),
(202, '11', 'Ortíz', '0'),
(203, '11', 'San José de Guaribe', '0'),
(204, '11', 'San Juan de Los Morros', '1'),
(205, '11', 'San Rafael de Laya', '0'),
(206, '11', 'Santa María de Ipire', '0'),
(207, '11', 'Tucupido', '0'),
(208, '11', 'Valle de La Pascua', '0'),
(209, '11', 'Zaraza', '0'),
(210, '12', 'Aguada Grande', '0'),
(211, '12', 'Atarigua', '0'),
(212, '12', 'Barquisimeto', '1'),
(213, '12', 'Bobare', '0'),
(214, '12', 'Cabudare', '0'),
(215, '12', 'Carora', '0'),
(216, '12', 'Cubiro', '0'),
(217, '12', 'Cují', '0'),
(218, '12', 'Duaca', '0'),
(219, '12', 'El Manzano', '0'),
(220, '12', 'El Tocuyo', '0'),
(221, '12', 'Guaríco', '0'),
(222, '12', 'Humocaro Alto', '0'),
(223, '12', 'Humocaro Bajo', '0'),
(224, '12', 'La Miel', '0'),
(225, '12', 'Moroturo', '0'),
(226, '12', 'Quíbor', '0'),
(227, '12', 'Río Claro', '0'),
(228, '12', 'Sanare', '0'),
(229, '12', 'Santa Inés', '0'),
(230, '12', 'Sarare', '0'),
(231, '12', 'Siquisique', '0'),
(232, '12', 'Tintorero', '0'),
(233, '13', 'Apartaderos Mérida', '0'),
(234, '13', 'Arapuey', '0'),
(235, '13', 'Bailadores', '0'),
(236, '13', 'Caja Seca', '0'),
(237, '13', 'Canaguá', '0'),
(238, '13', 'Chachopo', '0'),
(239, '13', 'Chiguara', '0'),
(240, '13', 'Ejido', '0'),
(241, '13', 'El Vigía', '0'),
(242, '13', 'La Azulita', '0'),
(243, '13', 'La Playa', '0'),
(244, '13', 'Lagunillas Mérida', '0'),
(245, '13', 'Mérida', '1'),
(246, '13', 'Mesa de Bolívar', '0'),
(247, '13', 'Mucuchíes', '0'),
(248, '13', 'Mucujepe', '0'),
(249, '13', 'Mucuruba', '0'),
(250, '13', 'Nueva Bolivia', '0'),
(251, '13', 'Palmarito', '0'),
(252, '13', 'Pueblo Llano', '0'),
(253, '13', 'Santa Cruz de Mora', '0'),
(254, '13', 'Santa Elena de Arenales', '0'),
(255, '13', 'Santo Domingo', '0'),
(256, '13', 'Tabáy', '0'),
(257, '13', 'Timotes', '0'),
(258, '13', 'Torondoy', '0'),
(259, '13', 'Tovar', '0'),
(260, '13', 'Tucani', '0'),
(261, '13', 'Zea', '0'),
(262, '14', 'Araguita', '0'),
(263, '14', 'Carrizal', '0'),
(264, '14', 'Caucagua', '0'),
(265, '14', 'Chaguaramas Miranda', '0'),
(266, '14', 'Charallave', '0'),
(267, '14', 'Chirimena', '0'),
(268, '14', 'Chuspa', '0'),
(269, '14', 'Cúa', '0'),
(270, '14', 'Cupira', '0'),
(271, '14', 'Curiepe', '0'),
(272, '14', 'El Guapo', '0'),
(273, '14', 'El Jarillo', '0'),
(274, '14', 'Filas de Mariche', '0'),
(275, '14', 'Guarenas', '0'),
(276, '14', 'Guatire', '0'),
(277, '14', 'Higuerote', '0'),
(278, '14', 'Los Anaucos', '0'),
(279, '14', 'Los Teques', '1'),
(280, '14', 'Ocumare del Tuy', '0'),
(281, '14', 'Panaquire', '0'),
(282, '14', 'Paracotos', '0'),
(283, '14', 'Río Chico', '0'),
(284, '14', 'San Antonio de Los Altos', '0'),
(285, '14', 'San Diego de Los Altos', '0'),
(286, '14', 'San Fernando del Guapo', '0'),
(287, '14', 'San Francisco de Yare', '0'),
(288, '14', 'San José de Los Altos', '0'),
(289, '14', 'San José de Río Chico', '0'),
(290, '14', 'San Pedro de Los Altos', '0'),
(291, '14', 'Santa Lucía', '0'),
(292, '14', 'Santa Teresa', '0'),
(293, '14', 'Tacarigua de La Laguna', '0'),
(294, '14', 'Tacarigua de Mamporal', '0'),
(295, '14', 'Tácata', '0'),
(296, '14', 'Turumo', '0'),
(297, '15', 'Aguasay', '0'),
(298, '15', 'Aragua de Maturín', '0'),
(299, '15', 'Barrancas del Orinoco', '0'),
(300, '15', 'Caicara de Maturín', '0'),
(301, '15', 'Caripe', '0'),
(302, '15', 'Caripito', '0'),
(303, '15', 'Chaguaramal', '0'),
(305, '15', 'Chaguaramas Monagas', '0'),
(307, '15', 'El Furrial', '0'),
(308, '15', 'El Tejero', '0'),
(309, '15', 'Jusepín', '0'),
(310, '15', 'La Toscana', '0'),
(311, '15', 'Maturín', '1'),
(312, '15', 'Miraflores', '0'),
(313, '15', 'Punta de Mata', '0'),
(314, '15', 'Quiriquire', '0'),
(315, '15', 'San Antonio de Maturín', '0'),
(316, '15', 'San Vicente Monagas', '0'),
(317, '15', 'Santa Bárbara', '0'),
(318, '15', 'Temblador', '0'),
(319, '15', 'Teresen', '0'),
(320, '15', 'Uracoa', '0'),
(321, '16', 'Altagracia', '0'),
(322, '16', 'Boca de Pozo', '0'),
(323, '16', 'Boca de Río', '0'),
(324, '16', 'El Espinal', '0'),
(325, '16', 'El Valle del Espíritu Santo', '0'),
(326, '16', 'El Yaque', '0'),
(327, '16', 'Juangriego', '0'),
(328, '16', 'La Asunción', '1'),
(329, '16', 'La Guardia', '0'),
(330, '16', 'Pampatar', '0'),
(331, '16', 'Porlamar', '0'),
(332, '16', 'Puerto Fermín', '0'),
(333, '16', 'Punta de Piedras', '0'),
(334, '16', 'San Francisco de Macanao', '0'),
(335, '16', 'San Juan Bautista', '0'),
(336, '16', 'San Pedro de Coche', '0'),
(337, '16', 'Santa Ana de Nueva Esparta', '0'),
(338, '16', 'Villa Rosa', '0'),
(339, '17', 'Acarigua', '0'),
(340, '17', 'Agua Blanca', '0'),
(341, '17', 'Araure', '0'),
(342, '17', 'Biscucuy', '0'),
(343, '17', 'Boconoito', '0'),
(344, '17', 'Campo Elías', '0'),
(345, '17', 'Chabasquén', '0'),
(346, '17', 'Guanare', '1'),
(347, '17', 'Guanarito', '0'),
(348, '17', 'La Aparición', '0'),
(349, '17', 'La Misión', '0'),
(350, '17', 'Mesa de Cavacas', '0'),
(351, '17', 'Ospino', '0'),
(352, '17', 'Papelón', '0'),
(353, '17', 'Payara', '0'),
(354, '17', 'Pimpinela', '0'),
(355, '17', 'Píritu de Portuguesa', '0'),
(356, '17', 'San Rafael de Onoto', '0'),
(357, '17', 'Santa Rosalía', '0'),
(358, '17', 'Turén', '0'),
(359, '18', 'Altos de Sucre', '0'),
(360, '18', 'Araya', '0'),
(361, '18', 'Cariaco', '0'),
(362, '18', 'Carúpano', '0'),
(363, '18', 'Casanay', '0'),
(364, '18', 'Cumaná', '1'),
(365, '18', 'Cumanacoa', '0'),
(366, '18', 'El Morro Puerto Santo', '0'),
(367, '18', 'El Pilar', '0'),
(368, '18', 'El Poblado', '0'),
(369, '18', 'Guaca', '0'),
(370, '18', 'Guiria', '0'),
(371, '18', 'Irapa', '0'),
(372, '18', 'Manicuare', '0'),
(373, '18', 'Mariguitar', '0'),
(374, '18', 'Río Caribe', '0'),
(375, '18', 'San Antonio del Golfo', '0'),
(376, '18', 'San José de Aerocuar', '0'),
(377, '18', 'San Vicente de Sucre', '0'),
(378, '18', 'Santa Fe de Sucre', '0'),
(379, '18', 'Tunapuy', '0'),
(380, '18', 'Yaguaraparo', '0'),
(381, '18', 'Yoco', '0'),
(382, '19', 'Abejales', '0'),
(383, '19', 'Borota', '0'),
(384, '19', 'Bramon', '0'),
(385, '19', 'Capacho', '0'),
(386, '19', 'Colón', '0'),
(387, '19', 'Coloncito', '0'),
(388, '19', 'Cordero', '0'),
(389, '19', 'El Cobre', '0'),
(390, '19', 'El Pinal', '0'),
(391, '19', 'Independencia', '0'),
(392, '19', 'La Fría', '0'),
(393, '19', 'La Grita', '0'),
(394, '19', 'La Pedrera', '0'),
(395, '19', 'La Tendida', '0'),
(396, '19', 'Las Delicias', '0'),
(397, '19', 'Las Hernández', '0'),
(398, '19', 'Lobatera', '0'),
(399, '19', 'Michelena', '0'),
(400, '19', 'Palmira', '0'),
(401, '19', 'Pregonero', '0'),
(402, '19', 'Queniquea', '0'),
(403, '19', 'Rubio', '0'),
(404, '19', 'San Antonio del Tachira', '0'),
(405, '19', 'San Cristobal', '1'),
(406, '19', 'San José de Bolívar', '0'),
(407, '19', 'San Josecito', '0'),
(408, '19', 'San Pedro del Río', '0'),
(409, '19', 'Santa Ana Táchira', '0'),
(410, '19', 'Seboruco', '0'),
(411, '19', 'Táriba', '0'),
(412, '19', 'Umuquena', '0'),
(413, '19', 'Ureña', '0'),
(414, '20', 'Batatal', '0'),
(415, '20', 'Betijoque', '0'),
(416, '20', 'Boconó', '0'),
(417, '20', 'Carache', '0'),
(418, '20', 'Chejende', '0'),
(419, '20', 'Cuicas', '0'),
(420, '20', 'El Dividive', '0'),
(421, '20', 'El Jaguito', '0'),
(422, '20', 'Escuque', '0'),
(423, '20', 'Isnotú', '0'),
(424, '20', 'Jajó', '0'),
(425, '20', 'La Ceiba', '0'),
(426, '20', 'La Concepción de Trujllo', '0'),
(427, '20', 'La Mesa de Esnujaque', '0'),
(428, '20', 'La Puerta', '0'),
(429, '20', 'La Quebrada', '0'),
(430, '20', 'Mendoza Fría', '0'),
(431, '20', 'Meseta de Chimpire', '0'),
(432, '20', 'Monay', '0'),
(433, '20', 'Motatán', '0'),
(434, '20', 'Pampán', '0'),
(435, '20', 'Pampanito', '0'),
(436, '20', 'Sabana de Mendoza', '0'),
(437, '20', 'San Lázaro', '0'),
(438, '20', 'Santa Ana de Trujillo', '0'),
(439, '20', 'Tostós', '0'),
(440, '20', 'Trujillo', '1'),
(441, '20', 'Valera', '0'),
(442, '21', 'Carayaca', '0'),
(443, '21', 'Litoral', '0'),
(444, '25', 'Archipiélago Los Roques', '0'),
(445, '22', 'Aroa', '0'),
(446, '22', 'Boraure', '0'),
(447, '22', 'Campo Elías de Yaracuy', '0'),
(448, '22', 'Chivacoa', '0'),
(449, '22', 'Cocorote', '0'),
(450, '22', 'Farriar', '0'),
(451, '22', 'Guama', '0'),
(452, '22', 'Marín', '0'),
(453, '22', 'Nirgua', '0'),
(454, '22', 'Sabana de Parra', '0'),
(455, '22', 'Salom', '0'),
(456, '22', 'San Felipe', '1'),
(457, '22', 'San Pablo de Yaracuy', '0'),
(458, '22', 'Urachiche', '0'),
(459, '22', 'Yaritagua', '0'),
(460, '22', 'Yumare', '0'),
(461, '23', 'Bachaquero', '0'),
(462, '23', 'Bobures', '0'),
(463, '23', 'Cabimas', '0'),
(464, '23', 'Campo Concepción', '0'),
(465, '23', 'Campo Mara', '0'),
(466, '23', 'Campo Rojo', '0'),
(467, '23', 'Carrasquero', '0'),
(468, '23', 'Casigua', '0'),
(469, '23', 'Chiquinquirá', '0'),
(470, '23', 'Ciudad Ojeda', '0'),
(471, '23', 'El Batey', '0'),
(472, '23', 'El Carmelo', '0'),
(473, '23', 'El Chivo', '0'),
(474, '23', 'El Guayabo', '0'),
(475, '23', 'El Mene', '0'),
(476, '23', 'El Venado', '0'),
(477, '23', 'Encontrados', '0'),
(478, '23', 'Gibraltar', '0'),
(479, '23', 'Isla de Toas', '0'),
(480, '23', 'La Concepción del Zulia', '0'),
(481, '23', 'La Paz', '0'),
(482, '23', 'La Sierrita', '0'),
(483, '23', 'Lagunillas del Zulia', '0'),
(484, '23', 'Las Piedras de Perijá', '0'),
(485, '23', 'Los Cortijos', '0'),
(486, '23', 'Machiques', '0'),
(487, '23', 'Maracaibo', '1'),
(488, '23', 'Mene Grande', '0'),
(489, '23', 'Palmarejo', '0'),
(490, '23', 'Paraguaipoa', '0'),
(491, '23', 'Potrerito', '0'),
(492, '23', 'Pueblo Nuevo del Zulia', '0'),
(493, '23', 'Puertos de Altagracia', '0'),
(494, '23', 'Punta Gorda', '0'),
(495, '23', 'Sabaneta de Palma', '0'),
(496, '23', 'San Francisco', '0'),
(497, '23', 'San José de Perijá', '0'),
(498, '23', 'San Rafael del Moján', '0'),
(499, '23', 'San Timoteo', '0'),
(500, '23', 'Santa Bárbara Del Zulia', '0'),
(501, '23', 'Santa Cruz de Mara', '0'),
(502, '23', 'Santa Cruz del Zulia', '0'),
(503, '23', 'Santa Rita', '0'),
(504, '23', 'Sinamaica', '0'),
(505, '23', 'Tamare', '0'),
(506, '23', 'Tía Juana', '0'),
(507, '23', 'Villa del Rosario', '0'),
(508, '21', 'La Guaira', '1'),
(509, '21', 'Catia La Mar', '0'),
(510, '21', 'Macuto', '0'),
(511, '21', 'Naiguatá', '0'),
(512, '25', 'Archipiélago Los Monjes', '0'),
(513, '25', 'Isla La Tortuga y Cayos adyacentes', '0'),
(514, '25', 'Isla La Sola', '0'),
(515, '25', 'Islas Los Testigos', '0'),
(516, '25', 'Islas Los Frailes', '0'),
(517, '25', 'Isla La Orchila', '0'),
(518, '25', 'Archipiélago Las Aves', '0'),
(519, '25', 'Isla de Aves', '0'),
(520, '25', 'Isla La Blanquilla', '0'),
(521, '25', 'Isla de Patos', '0'),
(522, '25', 'Islas Los Hermanos', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int(10) UNSIGNED NOT NULL,
  `contacto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identificacion_persona` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_de_identificacion_persona` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefijo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visitante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `contacto`, `identificacion_persona`, `tipo_de_identificacion_persona`, `cargo`, `prefijo`, `celular`, `telefono`, `email`, `visitante`, `created_at`, `updated_at`) VALUES
(1, '.', '1', 'V', '.', '', '1', '02869517262', 'yrisquares@hotmail.com', '.', '2019-05-07 02:49:41', '2019-05-07 02:49:41'),
(2, '1', '2', 'V', '1', '', '1', '2869315280', 'gorgonejr@gmail.com', '1', '2019-05-07 02:58:54', '2019-05-07 02:58:54'),
(3, '1', '3', 'V', '1', '', '1', '02869619071', 'jalv29@gmail.com', '1', '2019-05-07 03:00:46', '2019-05-07 03:00:46'),
(4, '1', '4', 'V', '1', '', '1', '02869521860', 'shuruata@hotmail.com', '1', '2019-05-07 03:15:33', '2019-05-07 03:15:33'),
(5, '1', '5', 'V', '1', '', '1', '02869625162', 'carlossellan67@hotmail.com', '1', '2019-05-07 03:16:53', '2019-05-07 03:16:53'),
(6, '1', '6', 'V', '1', '', '1', '04265921190', 'acsgrjm@hotmail.com', '1', '2019-05-07 03:18:15', '2019-05-07 03:18:15'),
(7, '1', '7', 'V', '1', '', '1', '02869614147', '1@mail', '1', '2019-05-07 03:20:04', '2019-05-07 03:20:04'),
(8, '1', '8', 'V', '1', '', '1', '02869239811', 'babyplacepzo@gmail.com', '1', '2019-05-07 03:21:39', '2019-05-07 03:21:39'),
(9, '1', '9', 'V', '1', '', '1', '02869233113', 'comercialsupersonico@gmail.com', '1', '2019-05-07 03:23:00', '2019-05-07 03:23:00'),
(10, '1', '10', 'V', '1', '', '1', '02869626205', 'candilejasdecoraciones@gmail.com', '1', '2019-05-07 03:24:14', '2019-05-07 03:24:14'),
(11, '1', '11', 'V', '1', '', '1', '02869237965', 'tiendacasanueva@gmail.com', '1', '2019-05-07 03:31:09', '2019-05-07 03:31:09'),
(12, '1', '12', 'V', '1', '', '1', '02869614839', 'angela-contreras@hotmail.com', '1', '2019-05-07 03:32:40', '2019-05-07 03:32:40'),
(13, '1', '13', 'V', '1', '', '1', '04166878333', 'castropalaciosyasociados@gmail.com', '1', '2019-05-07 03:34:52', '2019-05-07 03:34:52'),
(14, '1', '14', 'V', '1', '', '1', '02856540109', 'alipumar@hotmail.com', '1', '2019-05-07 03:36:11', '2019-05-07 03:36:11'),
(15, '1', '15', 'V', '1', '', '1', '02864171577', 'chuloibebe81@hotmail.com', '1', '2019-05-07 03:37:16', '2019-05-07 03:37:16'),
(16, '1', '16', 'V', '1', '', '1', '2869744864', '1@mail', '1', '2019-05-07 03:38:21', '2019-05-07 03:38:21'),
(17, '1', '17', 'V', '1', '', '1', '02486861127', 'alfrevelo@gmail.com', '1', '2019-05-07 03:40:42', '2019-05-07 03:40:42'),
(18, '1', '18', 'V', '1', '', '1', '02869749056', 'guiying065@163.com', '1', '2019-05-07 03:42:53', '2019-05-07 03:42:53'),
(19, '1', '19', 'V', '1', '', '1', '02869713353', 'banyuanyi@hotmail.com', '1', '2019-05-07 03:44:57', '2019-05-07 03:44:57'),
(20, '1', '20', 'V', '1', '', '1', '02869236284', 'claportenaiica@gmail.com', '1', '2019-05-07 03:48:21', '2019-05-07 03:48:21'),
(21, '.', '1', 'V', '.', '', '1', '02869613949', 'comerciallatina@gmail.com', '.', '2019-05-07 20:25:56', '2019-05-07 20:25:56'),
(22, '..', '1', 'V', '.', '', '1', '02869537725', '609951758@qq.com', '.', '2019-05-07 20:27:33', '2019-05-07 20:27:33'),
(23, '..', '1', 'V', '.', '', '1', '02856544401', 'comercialromarca@gmail.com', '.', '2019-05-07 20:28:55', '2019-05-07 20:28:55'),
(24, '..', '1', 'V', '.', '', '04121861104', '1', 'comercialrojicang3@hotmail.com', '.', '2019-05-07 20:30:37', '2019-05-07 20:30:37'),
(25, '..', '1', 'V', '.', '', '04249201416', '1', 'comercialuniquecenter@gmail.com', '.', '2019-05-07 20:32:41', '2019-05-07 20:32:41'),
(26, '..', '1', 'V', '.', '', '1', '02856324673', 'teresafortunato44@gmail.com', '.', '2019-05-07 22:24:42', '2019-05-07 22:24:42'),
(27, '..', '1', 'V', '.', '', '1', '02882216049', 'confiteriamarluisca@gmail.com', '.', '2019-05-07 22:26:44', '2019-05-07 22:26:44'),
(28, '..', '1', 'V', '.', '', '1', '02952631010', 'corporacionaka@gmail.com', '.', '2019-05-07 22:29:37', '2019-05-07 22:29:37'),
(29, '..', '1', 'V', '.', '', '1', '02869238805', 'carichuna@gmail.com', '.', '2019-05-07 22:32:23', '2019-05-07 22:32:58'),
(30, '..', '1', 'V', '.', '', '1', '02819713386', '.@gmail.com', '.', '2019-05-07 22:34:57', '2019-05-07 22:34:57'),
(31, '..', '1', 'V', '.', '', '1', '02869742602', 'corpojapon@hotmail.com', '.', '2019-05-07 22:42:37', '2019-05-07 22:42:37'),
(32, '..', '1', 'V', '.', '', '1', '02869237157', 'vectorcor@hotmail.com', '.', '2019-05-07 22:52:37', '2019-05-07 22:53:03'),
(33, '..', '1', 'V', '.', '', '04149894520', '1', 'dfiestas.ca@hotmail.com', '.', '2019-05-07 22:56:33', '2019-05-07 22:56:33'),
(34, '..', '1', 'V', '.', '', '1', '02869234012', 'dandyinportca@yahoo.es', '.', '2019-05-07 23:04:03', '2019-05-07 23:04:03'),
(35, '..', '1', 'V', '.', '', '1', '02856316367', 'evar27@hotmail.com', '.', '2019-05-07 23:07:32', '2019-05-07 23:07:32'),
(36, '..', '1', 'V', '.', '', '1', '02869228693', 'deliciasguayana@hotmail.com', '.', '2019-05-07 23:13:33', '2019-05-07 23:13:33'),
(37, '..', '1', 'V', '.', '', '1', '02856325067', 'detallessrl@hotmail.com', '.', '2019-05-07 23:26:53', '2019-05-07 23:26:53'),
(38, '..', '1', 'V', '.', '', '1', '2866316055', 'disenospr@hotmail.com', '.', '2019-05-07 23:28:21', '2019-05-07 23:28:21'),
(39, '..', '1', 'V', '.', '', '1', '2869233326', 'distbrandon@cantv.net', '.', '2019-05-07 23:29:38', '2019-05-07 23:29:38'),
(40, '.', '1', 'V', '.', '', '1', '02877212302', 'aciarcia@cantv.net', '.', '2019-05-08 00:02:29', '2019-05-08 00:02:29'),
(41, '.', '1', 'V', '.', '', '1', '02869628343', 'osglaca@cantv.net', '.', '2019-05-08 00:05:08', '2019-05-08 00:05:08'),
(42, '.', '1', 'V', '.', '', '1', '02856321802', 'elmaratonsportca@gmail.com', '.', '2019-05-08 00:06:18', '2019-05-08 00:06:18'),
(43, '.', '1', 'V', '.', '', '04265907015', '1', '.@gmail.com', '.', '2019-05-08 00:07:26', '2019-05-08 00:07:26'),
(44, '.', '1', 'V', '.', '', '1', '02869741928', 'nadi-issa@hotmail.com', '.', '2019-05-08 01:36:11', '2019-05-08 01:36:11'),
(45, '.', '1', 'V', '.', '', '1', '02869713250', 'carol_254@hotmail.com', '.', '2019-05-08 01:37:45', '2019-05-08 01:37:45'),
(46, 'MANUEL MOREIRA', '18478256', 'V', 'PRESIDENTE', '', '04166851140', '02856541186', 'manuelmoreiradesa@hotmail.com', '1', '2019-05-08 22:42:21', '2019-05-08 22:42:21'),
(47, 'YOMARA ORDOÑES', '18212119', 'V', 'PRESIDENTA', '', '04249691667', '02856317071', 'inversionesyomi@gmail.com', '1', '2019-05-08 23:16:20', '2019-05-08 23:31:07'),
(48, 'LEONARDO ROJAS', '12350594', 'V', 'PRESIDENTE', '', '04148716341', '02', 'LEOFILA@YAHHO.COM', '2', '2019-05-08 23:22:09', '2019-05-08 23:22:09'),
(49, 'GUSTAVO OLIVERO', '10567016', 'V', 'PRESIDENTE', '', '04148936497', '02869521290', 'ZONAIFANTIL@GMAIL.COM', '2', '2019-05-08 23:27:02', '2019-05-08 23:27:02'),
(50, 'MILEIDYS MARTINEZ', '3310642', 'V', 'VICE PRESIDENTA', '', '04148698278', '02882212511', 'VA_PEMAR@HOTMAIL.COM', '3', '2019-05-09 00:07:41', '2019-05-09 00:09:13'),
(51, 'JOSE LEAL', '81473189', 'E', 'GERENTE', '', '1', '02869619071', 'JALV29@GMAIL.COM', '1', '2019-05-09 00:31:21', '2019-05-09 00:31:21'),
(52, 'ARTSEM BURMISTRAU', '84586793', 'E', 'GERENTE DE COMPRAS', '', '04249281472', '02869626155', 'ARTSEMBUMISTRAU@TIENDASKIOTO.COM', '1', '2019-05-09 02:23:37', '2019-05-09 02:23:37'),
(53, 'PAOLA GARCIA', '17211775', 'V', 'GERENTE ADMINISTRATIVO', '', '04148755592', '02869222089', 'RECORCA_ADM@HOTMAIL.COM', '2', '2019-05-09 02:47:18', '2019-05-09 02:47:18'),
(54, 'OSCAR QUIJADA', '8932995', 'V', 'GERENTE', '', '04249143544', '02869226563', 'OSCAR.QUIJADA63@GMAIL.COM', '2', '2019-05-09 02:57:32', '2019-05-09 02:57:32'),
(55, 'JHAN RENDEROS', '17338519', 'V', 'GERENTE', '', '04140999176', '02869531178', 'JHANR_21@HOTMAIL.COM', '1', '2019-05-09 03:01:31', '2019-05-09 03:01:31'),
(56, 'CARMEN CRUZ', '13090823', 'V', 'PRESIDENTA', '', '04148740075', '02867189727', 'FABICENTER2013@GMAIL.COM', '2', '2019-05-09 03:06:31', '2019-05-09 03:06:31'),
(57, 'GLENYS CRUZ', '15781518', 'V', 'PRESIDENTA', '', '04148654844', '02869718164', 'GLENYS2011@HOTMAIL.COM', '1', '2019-05-09 03:10:27', '2019-05-09 03:12:28'),
(58, 'ZULY VIVAS', '13015412', 'V', 'PRESIDENTA', '', '04140959890', '02869230258', 'DFIESTAS.CA@HOTMAIL.COM', '2', '2019-05-09 04:19:20', '2019-05-09 04:19:20'),
(59, 'ALÍ MAJZOUB', '4497973', 'V', 'PROPIETARIO', '', '04147919752', '0286-9617244', 'IGLERS@HOTMAIL.COM', '1', '2019-05-09 04:30:48', '2019-05-10 00:11:53'),
(60, 'LEUDYS URBANO', '19040505', 'V', 'ASISTENTE A LA GERENCIA', '', '04249391569', '02869401609', 'TERESA.URBANO@SAINT-GOBAIN.COM', '1', '2019-05-09 05:10:40', '2019-05-09 05:10:40'),
(61, 'ERIKA STAGNARO', '82136823', 'V', 'PRESIDENTA', '', '04128656822', '02869603292', 'KIKASDETALLESCA@GMAIL.COM', '3', '2019-05-09 05:19:24', '2019-05-09 05:22:54'),
(62, 'DANIEL HASEGAWA', '13443856', 'V', 'SUPERVISOR', '', '04143869297', '02869742602', 'CORPOJAPON@HOTMAIL.COM', '2', '2019-05-09 05:27:31', '2019-05-09 05:27:31'),
(63, 'BELKIS MEDINA', '5567676', 'V', 'ADMINISTRADORA', '', '04149054566', '02869232621', 'ESPUERTOORDAZ@GMAIL.COM', '2', '2019-05-09 06:13:16', '2019-05-09 06:32:26'),
(64, 'CARMEN CACERES', '24849671', 'V', 'ADMINISTRADOR', '', '04249567498', '02869515949', 'PAPGUARAPICHE@HOTMAIL.COM', '3', '2019-05-09 06:27:40', '2019-05-09 06:31:58'),
(65, 'GUSTAVO VIVAS', '99446338', 'V', 'GERENTE', '', '04148897905', '02869222864', 'LGUARAPICHE@GMAIL.COM', '1', '2019-05-09 06:33:38', '2019-05-09 06:33:38'),
(66, 'FENG JUN WING', '29643558', 'V', 'PROPIETARIO', '', '04148622688', '02869740575', 'MERCANTIL@QQ.COM', '2', '2019-05-09 06:45:22', '2019-05-09 07:05:48'),
(67, 'JOTIS PANAGEOTOPOLOS', '18450156', 'V', 'ADMINISTRADOR', '', '04261960064', '02869236284', 'CLAPORTENAIICA@GMAIL.COM', '3', '2019-05-09 06:56:22', '2019-05-09 06:56:22'),
(68, 'RUBEN MORANDI', '14669395', 'V', 'PRESIDENTE', '', '0412286507', '02869516122', 'SUGARPLAZA@GMAIL.COM', '1', '2019-05-09 07:17:18', '2019-05-09 07:17:18'),
(69, 'EDYDD FERRER', '11515213', 'V', 'PROPIETARIO', '', '04142288918', '1', 'GUAYANAMIL@GMAIL.COM', '2', '2019-05-09 07:53:33', '2019-05-09 07:53:33'),
(70, 'MAGLIU MOYA', '18983718', 'V', 'GERENTE', '', '04149976260', '02869512180', 'NUEVOMUNDOPAPELES@GMAIL.COM', '3', '2019-05-09 07:58:28', '2019-05-09 07:58:28'),
(71, 'JOSE MANUEL MARTINEZ', '8867150', 'V', 'GERENTE', '', '04249517295', '02856544401', 'COMERCIALROMARCA@GMAIL.COM', '1', '2019-05-09 22:34:29', '2019-05-09 22:34:29'),
(72, 'EVELYN DE LEON', '3854113', 'V', 'GERENTE', '', '04148928166', '02869621847', 'COMERCIALIZADORAISKITA@GMAIL.COM', '1', '2019-05-09 22:39:02', '2019-05-09 22:39:02'),
(73, 'KATTY VALENZUELA', '81608264', 'E', 'GERENTE', '', '04166860772', '02869619124', 'COMERCIALTINA@GMAIL.COM', '2', '2019-05-09 22:46:49', '2019-05-09 22:46:49'),
(74, 'ADRIANA VILLARROEL', '12051812', 'V', 'DIRECTORA', '', '04249318876', '02869526702', 'SPORLANDIASTORE@GMAIL.COM', '1', '2019-05-09 23:04:07', '2019-05-09 23:04:07'),
(75, 'NORKA DE MEDERO', '4794384', 'V', 'PROPIETARIO', '', '04148940388', '02869221529', 'NORRKAFLOWER@GMAIL.COM', '3', '2019-05-10 00:52:55', '2019-05-09 23:56:27'),
(76, 'MELISA LEPAGE', '20079842', 'V', 'ENCARGADA', '', '04122511933', '02856325682', 'MULTIGRABA2@GMAILCOM', '2', '2019-05-10 01:13:59', '2019-05-10 01:13:59'),
(77, 'YU YONG LIANG', '22825225', 'V', 'PROPIETARIO', '', '04148974871', '2', 'MAOGUO2014@GMAIL.COM', '2', '2019-05-09 23:18:18', '2019-05-09 23:18:18'),
(78, 'RAFAEL MILLAN', '17069162', 'V', 'GERENTE COMPRAS', '', '04148858057', '02882214919', 'COMPRAS.GALMI@GMAIL.COM', '1', '2019-05-09 23:44:48', '2019-05-09 23:44:48'),
(79, 'BLANCA APONTE', '18171360', 'V', 'VENDEDOR', '', '04249375532', '0286', 'BLANQUITADAYAPONTE@GMAIL.COM', '2', '2019-05-09 23:54:12', '2019-05-09 23:54:12'),
(80, 'ADIL AYSAMI', '9474537', 'V', 'PROPIETARIO', '', '04148773654', '2', 'ADELAYSIMI@GMAIL.COM', '1', '2019-05-10 00:10:17', '2019-05-10 00:10:17'),
(81, 'HENRRY DIAZ', '12360832', 'V', 'PRESIDENTE', '', '04148601078', '02869627033', 'PLANETASME@GMAIL.COM', '2', '2019-05-10 00:31:46', '2019-05-10 00:31:46'),
(82, 'GERMAN CABALLERO', '265999724', 'V', 'ADMINISTRADOR', '', '04148830394', '0286', 'PABLOPAPELES.CA@GMAIL.COM', '1', '2019-05-10 01:20:55', '2019-05-10 01:20:55'),
(83, 'NASSER RAYESS', '12600779', 'V', 'PRESIDENTE', '', '04148686709', '02869616177', 'ESTAR_SPORCA@HOTMAIL.COM', '1', '2019-05-10 02:22:52', '2019-05-10 02:22:52'),
(84, 'CAROLINA LI', '82296009', 'V', 'PROPIETARIO', '', '04128658733', '02869712980', 'WUJIANWEI_DAVID@HOTMAIL.COM', '2', '2019-05-10 02:41:10', '2019-05-10 02:41:10'),
(85, 'ANGELA VIVAS', '5683601', 'V', 'PROPIETARIO', '', '04166860682', '0286', 'ANGELMAIL.COMA-CONTRERAS@HOT', '2', '2019-05-10 03:09:53', '2019-05-10 03:09:53'),
(86, 'ANGELA VIVAS', '5683601', 'V', 'PROPIETARIO', '0416', '6860682', '11111111111', 'ANGELMAIL.COMA-CONTRERAS@HOT', '2', '2019-05-15 15:45:43', '2019-05-15 15:45:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edicionferia`
--

CREATE TABLE `edicionferia` (
  `id` int(10) UNSIGNED NOT NULL,
  `feria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sede` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `edicionferia`
--

INSERT INTO `edicionferia` (`id`, `feria`, `year`, `sede`, `created_at`, `updated_at`) VALUES
(1, 'asd', '2019', 'asd', NULL, NULL),
(2, 'Edicion 1', '2019', 'caracas', '2019-04-28 15:09:00', '2019-04-28 15:09:00'),
(3, 'Edicion 2', '2019', 'Maracay', '2019-04-28 15:09:15', '2019-04-28 15:09:15'),
(4, 'Edicion 3', '2020', 'Valencia', '2019-04-28 15:20:00', '2019-04-28 15:20:00'),
(5, 'Edicion 1', '2018', 'Maturin', '2019-04-28 15:24:11', '2019-04-28 15:24:11'),
(6, 'Edicion 2', '2017', 'Caracas', '2019-04-28 15:25:40', '2019-04-28 15:25:40'),
(7, 'Edicion 1', '2016', 'Trujillo', '2019-04-28 15:26:46', '2019-04-28 15:26:46'),
(8, 'Edicion 3', '2015', 'Carabobo', '2019-04-28 15:28:37', '2019-04-28 15:28:37'),
(9, 'Edicion 2', '2019', 'PUERTO ORDAZ', '2019-05-07 02:44:45', '2019-05-07 02:44:45'),
(10, 'Edicion 2', '2019', 'VALENCIA', '2019-05-15 17:01:39', '2019-05-15 17:01:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_empresa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_persona` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edicion_feria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sede` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_de_identificacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identificacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ubicacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observacion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_registro` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `nombre`, `tipo_empresa`, `tipo_persona`, `edicion_feria`, `sede`, `tipo_de_identificacion`, `identificacion`, `ubicacion`, `ciudad`, `estado`, `facebook`, `twitter`, `instagram`, `observacion`, `fecha_registro`, `created_at`, `updated_at`) VALUES
(1, 'ACCESORIOS NOAH C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J296084939', 'CC PLAZA ATLANTICO MALL PB LOCAL 45-B', 'Puerto Ordaz', 'Bolivar', '.', '.', NULL, 'Email', NULL, '2019-05-07 02:49:41', '2019-05-07 03:11:42'),
(2, 'AGRO DEPORTES GORGONE, C.A.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J095035182', 'EL ROBLE POR FUERA', 'San Felipe', 'Bolivar', '1', NULL, NULL, 'Email', NULL, '2019-05-07 02:58:53', '2019-05-07 03:12:06'),
(3, 'AMERICAS SHOP, C.A.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J305098760', 'C.C. ALTA VISTA I,  PISO 1, LOCAL 22', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 03:00:46', '2019-05-07 03:12:33'),
(4, 'ARTESANIA SHURUATA', 'Comprador', 'Natural', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'CI', 'V041405500', 'AV GUAYANA  AEROPUERTO INTERNACIONAL DEL ORINOCO MANUEL CARLOS PIAR', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 03:15:33', '2019-05-07 03:15:33'),
(5, 'ARTISONIDO, C.A.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J095023648', 'C.C. ALTA VISTA I, PISO 1, LOCAL 118', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 03:16:53', '2019-05-07 03:16:53'),
(6, 'ASOC. COOP. SUMINISTROS GENERALES R.J.M  , RL', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J296336989', 'CALLE TACHIRA  CASA NUMERO 53 BARRIO JOSE ANTONIO PAEZ PARROQUIA JOSE ANTONIO PAEZ', 'Ciudad Bolivar', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 03:18:15', '2019-05-07 03:18:15'),
(7, 'AUTO QUINCALLA CHEN, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J316803899', 'CALLE CAURA EDIF MONTEREY PB LOCAL I', 'Puerto Ordaz', 'Bolivar', NULL, '.', NULL, 'Email', NULL, '2019-05-07 03:20:04', '2019-05-09 07:07:27'),
(8, 'BABY PLACE C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J297944915', 'CC TREBOL 1 NIVEL PB LOCL 19B - 21', 'Puerto Ordaz', 'Bolivar', '1', NULL, NULL, 'Email', NULL, '2019-05-07 03:21:38', '2019-05-07 03:21:38'),
(9, 'CA COMERCIAL SUPERSONICO', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J095042316', 'CALLE GUASIPATI CON VIA CARACAS, CENTRO PUERTO ORDAZ, PB, LOCAL UNICO, EDIF. SUPERSONICO', 'Puerto Ordaz', 'Bolivar', '1', NULL, NULL, 'Email', NULL, '2019-05-07 03:23:00', '2019-05-07 03:23:00'),
(10, 'CANDILEJAS DECORACIONES C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J312826606', 'CC BABILONIA MALL CENTER MEZZANINA 1 LOCAL 8', 'Puerto Ordaz', 'Bolivar', '1', NULL, NULL, 'Email', NULL, '2019-05-07 03:24:14', '2019-05-07 03:24:14'),
(11, 'CASA NUEVA, C.A.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J306395040', 'C.C. MINAS, CARRERA GUASIPATI, CENTRO DE PUERTO ORDAZ, SOTANO', 'Puerto Ordaz', 'Bolivar', '1', NULL, NULL, 'Email', NULL, '2019-05-07 03:31:09', '2019-05-07 03:31:09'),
(12, 'CASSABELL', 'Comprador', 'Natural', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'CI', 'V056836011', 'AV ATLANTICO CC SANTO TOME III PRIMER PISO LOCAL 38 Y 39 LOS OLIVOS', 'Puerto Ordaz', 'Bolivar', '1', NULL, NULL, 'Email', NULL, '2019-05-07 03:32:40', '2019-05-07 03:32:40'),
(13, 'CASTRO PALACIOS & ASOCIADOS', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J298370092', 'TORRE LORETO PISO 3 OFI 3A', 'Puerto Ordaz', 'Bolivar', '1', NULL, NULL, 'Email', NULL, '2019-05-07 03:34:52', '2019-05-07 03:34:52'),
(14, 'CHILDRENS, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J317281616', 'CALLE BETHEL LOCAL # A2 SECTOR NEGRO PRIMERO, CD BOLIVAR', 'Ciudad Bolivar', 'Bolivar', '1', NULL, NULL, 'Email', NULL, '2019-05-07 03:36:11', '2019-05-07 03:36:11'),
(15, 'CHINALANDIA C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J308034215', 'CC TREBOL III ZOTANO LOCAL 1 Y 2', 'Puerto Ordaz', 'Bolivar', '1', NULL, NULL, 'Email', NULL, '2019-05-07 03:37:16', '2019-05-07 03:37:16'),
(16, 'COMERCIAL 28, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J316629252', 'CALLE 4 SECTOR CENTRO DE SAN FELIX CASA N6', 'Puerto Ordaz', 'Bolivar', '1', NULL, NULL, 'Email', NULL, '2019-05-07 03:38:21', '2019-05-07 03:38:21'),
(17, 'COMERCIAL ARVEL', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J305862567', 'AV 23 DE ENERO EDIFICO NELFA LOCAL 1 DIAGONAL A LA UNIVECIDAD SANTA MARIA', 'Puerto Ayacucho', 'Amazonas', '1', NULL, NULL, 'Email', NULL, '2019-05-07 03:40:42', '2019-05-07 03:40:42'),
(18, 'COMERCIAL EL CENTRO 168, C.A.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J307356537', 'AV. MANUEL PIAR, C.C. ARICHUNA II, NIVEL PB, LOCAL 01, 02, 03, 04, SECTOR CHIRICA', 'San Felix', 'Bolivar', '1', NULL, NULL, 'Email', NULL, '2019-05-07 03:42:53', '2019-05-07 03:42:53'),
(19, 'COMERCIAL FIESTA TROPICAL, C.A.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J310581282', 'CALLE CEDEÑO CON CARRERA 2, LOCAL 29-A. CENTRO DE SAN FELIX', 'Puerto Ordaz', 'Bolivar', '1', NULL, NULL, 'Email', NULL, '2019-05-07 03:44:57', '2019-05-07 03:44:57'),
(20, 'COMERCIAL LA PORTEÑA II, C.A.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J303188826', 'CALLE GUASIPATI, NRO. 16', 'Puerto Ordaz', 'Bolivar', '1', NULL, NULL, 'Email', NULL, '2019-05-07 03:48:21', '2019-05-07 03:48:21'),
(21, 'COMERCIAL LATINA C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J095030296', 'C.C. ZULIA, LOCAL 6', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 20:25:56', '2019-05-07 20:25:56'),
(22, 'COMERCIAL PRIMERO UNARE 1, C.A.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J402361653', 'AV. GARAPICHE, LOCAL PARCELA 02-07-06, UNARE 1, U-29', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 20:27:33', '2019-05-07 20:27:33'),
(23, 'COMERCIAL ROMAN C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J095006638', 'AVE ROTARIO EDIF, SAN TOME, URB. VISTA HERMOSA CUIDAD BOLIVAR , EDO BOLIVAR', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 20:28:39', '2019-05-07 20:28:39'),
(24, 'COMERCIAL ROMAN C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J095006638', 'AVE ROTARIO EDIF, SAN TOME, URB. VISTA HERMOSA CUIDAD BOLIVAR , EDO BOLIVAR', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 20:28:55', '2019-05-07 20:28:55'),
(25, 'COMERCIAL UNIOFERTAS, C.A.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J299174394', 'CALLE VENEZUELA, C.C. OLIMPICO, PB, LOCAL 1, SECTOR PASEO ORINOCO', 'Ciudad Bolivar', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 20:30:37', '2019-05-07 20:30:37'),
(26, 'COMERCIAL UNIQUE CENTER, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J298400870', 'AV, PASEO MENESES LOCAL 55, CDAD BOLIVAR', 'Ciudad Bolivar', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 20:32:40', '2019-05-07 20:32:40'),
(27, 'COMERCIAL Y SERVICIOS FORTUNATO, S.R.L.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J303651720', 'PASEO MENESES, EDIF. MALLULARI, LOCAL NRO. 3, AL LADO DE REPUESTOS REX', 'Ciudad Bolivar', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 22:24:10', '2019-05-07 22:24:10'),
(28, 'COMERCIAL Y SERVICIOS FORTUNATO, S.R.L.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J303651720', 'PASEO MENESES, EDIF. MALLULARI, LOCAL NRO. 3, AL LADO DE REPUESTOS REX', 'Ciudad Bolivar', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 22:24:41', '2019-05-07 22:24:41'),
(29, 'CONFITERIA MARLUIS C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J305711194', 'FINAL AV RAUL LEONI LOCAL 6 UPATA', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 22:26:24', '2019-05-07 22:26:24'),
(30, 'CONFITERIA MARLUIS C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J305711194', 'FINAL AV RAUL LEONI LOCAL 6 UPATA', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 22:26:43', '2019-05-07 22:26:43'),
(31, 'CORPORACION AKA, C.A.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J316044874', 'CC. ORINOKIA LOCAL 158', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Seleccionar', NULL, '2019-05-07 22:29:36', '2019-05-07 22:29:36'),
(32, 'COMERCIAL ARICHUNA C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J296372950', 'AV. PRINCIPAL DE CASTILLITO, EDIF. ARICHUNA, LOCAL 10', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 22:32:19', '2019-05-07 22:32:19'),
(33, 'COMERCIAL ARICHUNA C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J296372950', 'AV. PRINCIPAL DE CASTILLITO, EDIF. ARICHUNA, LOCAL 10', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 22:32:23', '2019-05-07 22:32:23'),
(34, 'CORPORACION EL PERFECTO 168,C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J314986155', 'CALLE CEDEÑO LOCAL N 37.', 'San Felix', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 22:34:04', '2019-05-07 22:34:04'),
(35, 'CORPORACION EL PERFECTO 168,C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J314986155', 'CALLE CEDEÑO LOCAL N 37.', 'San Felix', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 22:34:57', '2019-05-07 22:34:57'),
(36, 'CORPORACION JAPONESA, C.A.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J300957756', 'FRENTE A LA PAZA BOLIVAR, CENTRO DE SAN FELIX', 'San Felix', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 22:41:22', '2019-05-07 22:41:22'),
(37, 'CORPORACION JAPONESA, C.A.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J300957756', 'FRENTE A LA PAZA BOLIVAR, CENTRO DE SAN FELIX', 'San Felix', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 22:41:22', '2019-05-07 22:41:22'),
(38, 'CORPORACION JAPONESA, C.A.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J300957756', 'FRENTE A LA PAZA BOLIVAR, CENTRO DE SAN FELIX', 'San Felix', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 22:42:37', '2019-05-07 22:42:37'),
(39, 'CORPORACION VECTOR, C.A.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J296140774', 'CALLE SANTA ROSALIA, EDIF. RODRIGUEZ, LOCAL 1', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 22:52:10', '2019-05-07 22:52:10'),
(40, 'CORPORACION VECTOR, C.A.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J296140774', 'CALLE SANTA ROSALIA, EDIF. RODRIGUEZ, LOCAL 1', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 22:52:37', '2019-05-07 22:52:37'),
(41, 'D FIESTAS, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J403080550', 'AV BOLIVIA EDIF PARIS PB LOCAL 04-B URB VILLA BOLIVA PZO', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 22:55:15', '2019-05-07 22:55:15'),
(42, 'D FIESTAS, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J403080550', 'AV BOLIVIA EDIF PARIS PB LOCAL 04-B URB VILLA BOLIVA PZO', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 22:56:33', '2019-05-07 22:56:33'),
(43, 'DANDY IMPORT, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J294363377', 'SECTOR CASILLITO CARRERA LAS BONITAS C.C DOÑA DELIA, PUERTO ORDAZ', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 23:03:42', '2019-05-07 23:03:42'),
(44, 'DANDY IMPORT, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J294363377', 'SECTOR CASILLITO CARRERA LAS BONITAS C.C DOÑA DELIA, PUERTO ORDAZ', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 23:04:02', '2019-05-07 23:04:02'),
(45, 'DECORACION DE INTERIORES SPAZIO, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J400890373', 'AV. SUCRE C.C SANTA CATALINA, LOCAL 6', 'Ciudad Bolivar', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 23:07:32', '2019-05-07 23:07:32'),
(46, 'DELICIAS GUAYANA LA MEGA CONFITERIA C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J313436720', 'AV MONSEÑOR SABALETA EDF LANCIA PB', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 23:13:33', '2019-05-07 23:13:33'),
(47, 'DETALLES S.R.L', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J095096106', 'AV CASACOIMA MORENO DE MENDOZA ED DETALLES CD BOLIVAR', 'Ciudad Bolivar', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 23:26:28', '2019-05-07 23:26:28'),
(48, 'DETALLES S.R.L', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J095096106', 'AV CASACOIMA MORENO DE MENDOZA ED DETALLES CD BOLIVAR', 'Ciudad Bolivar', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 23:26:35', '2019-05-07 23:26:35'),
(49, 'DETALLES S.R.L', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J095096106', 'AV CASACOIMA MORENO DE MENDOZA ED DETALLES CD BOLIVAR', 'Ciudad Bolivar', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 23:26:53', '2019-05-07 23:26:53'),
(50, 'DISEÑOS PR C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J297767029', 'VISTA HERMOSA, CDAD BOLIVAR', 'Ciudad Bolivar', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 23:28:21', '2019-05-07 23:28:21'),
(51, 'DISTRIBUIDORA BRANDON, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J303006000', 'URB ORINOCO, CALLE ACARIGUA, EDF ALTO BRANDO, PTO ORDAZ', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 23:29:18', '2019-05-07 23:29:18'),
(52, 'DISTRIBUIDORA BRANDON, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J303006000', 'URB ORINOCO, CALLE ACARIGUA, EDF ALTO BRANDO, PTO ORDAZ', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 23:29:21', '2019-05-07 23:29:21'),
(53, 'DISTRIBUIDORA BRANDON, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J303006000', 'URB ORINOCO, CALLE ACARIGUA, EDF ALTO BRANDO, PTO ORDAZ', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-07 23:29:37', '2019-05-07 23:29:37'),
(54, 'DISTRIBUIDORA ITALIA C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J294181406', 'CALLE DALA COSTA NRO 22', 'Tucupita', 'Delta Amacuro', '.', NULL, NULL, 'Email', NULL, '2019-05-08 00:02:29', '2019-05-08 00:02:29'),
(55, 'DISTRIBUIDORA OSGLA, C.A.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J075523105', 'C.C. CUIDAD ALTA VISTA I, PISO 1, LOCAL 19', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-08 00:04:45', '2019-05-08 00:04:45'),
(56, 'DISTRIBUIDORA OSGLA, C.A.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J075523105', 'C.C. CUIDAD ALTA VISTA I, PISO 1, LOCAL 19', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-08 00:05:07', '2019-05-08 00:05:07'),
(57, 'EL MARATON SPORT', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J095108368', 'CIUDAD BOLIVAR, PASEO ORINOCO, CALLE VENEZUELA, LOCAL 6', 'Ciudad Bolivar', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-08 00:06:01', '2019-05-08 00:06:01'),
(58, 'EL MARATON SPORT', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J095108368', 'CIUDAD BOLIVAR, PASEO ORINOCO, CALLE VENEZUELA, LOCAL 6', 'Ciudad Bolivar', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-08 00:06:18', '2019-05-08 00:06:18'),
(59, 'EL MUNDO DE LAS FIESTAS NICOLE FP', 'Comprador', 'Natural', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'CI', 'V083349871', 'CC LAS CUPULAS LOCAL 33 SECTOR RIO ARO', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-08 00:07:10', '2019-05-08 00:07:10'),
(60, 'EL MUNDO DE LAS FIESTAS NICOLE FP', 'Comprador', 'Natural', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'CI', 'V083349871', 'CC LAS CUPULAS LOCAL 33 SECTOR RIO ARO', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-08 00:07:12', '2019-05-08 00:07:12'),
(61, 'EL MUNDO DE LAS FIESTAS NICOLE FP', 'Comprador', 'Natural', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'CI', 'V083349871', 'CC LAS CUPULAS LOCAL 33 SECTOR RIO ARO', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-08 00:07:26', '2019-05-08 00:07:26'),
(62, 'EL MUNDO DE LAS FLORES, C.A.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J295634315', 'CENTRO DE SAN FELIX, CALLE MARIÑO, LOCAL 58', 'San Felix', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-08 01:35:49', '2019-05-08 01:35:49'),
(63, 'EL MUNDO DE LAS FLORES, C.A.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J295634315', 'CENTRO DE SAN FELIX, CALLE MARIÑO, LOCAL 58', 'San Felix', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-08 01:36:11', '2019-05-08 01:36:11'),
(64, 'EL REY DE LAS FLORES, C.A.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J293817471', 'CALLE MARIÑO, EDIF. SAN ANTONIO, PB, LOCAL A', 'San Felix', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-08 01:37:25', '2019-05-08 01:37:25'),
(65, 'EL REY DE LAS FLORES, C.A.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J293817471', 'CALLE MARIÑO, EDIF. SAN ANTONIO, PB, LOCAL A', 'San Felix', 'Bolivar', '.', NULL, NULL, 'Email', NULL, '2019-05-08 01:37:45', '2019-05-08 01:37:45'),
(66, 'LIBRERIA BELLA VISTA, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'j299008516', 'AV SAN FRANCISCO DE ASIS', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Carta de expositores', NULL, '2019-05-08 22:42:21', '2019-05-09 20:51:57'),
(67, 'INVERSIONES YOMI, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J309209337', 'AV. 17 DICIEMBRE', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Por Cavefaj', NULL, '2019-05-08 23:16:19', '2019-05-09 20:52:36'),
(68, 'UX PUERTO  ORDAZ C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J313752304', 'C.C ORINOKIA LOCAR 187', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Seleccionar', NULL, '2019-05-08 23:20:19', '2019-05-08 23:20:19'),
(69, 'UX PUERTO  ORDAZ C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J313752304', 'C.C ORINOKIA LOCAR 187', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Invitacio Telefónica', NULL, '2019-05-08 23:20:29', '2019-05-08 23:20:29'),
(70, 'UX PUERTO  ORDAZ C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J313752304', 'C.C ORINOKIA LOCAR 187', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Invitacio Telefónica', NULL, '2019-05-08 23:20:39', '2019-05-08 23:20:39'),
(71, 'UX PUERTO  ORDAZ C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J313752304', 'C.C ORINOKIA LOCAR 187', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Invitacio Telefónica', NULL, '2019-05-08 23:20:59', '2019-05-08 23:20:59'),
(72, 'UX PUERTO  ORDAZ C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J313752304', 'C.C ORINOKIA LOCAR 187', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Invitacio Telefónica', NULL, '2019-05-08 23:21:16', '2019-05-08 23:21:16'),
(73, 'UX PUERTO  ORDAZ, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J313752304', 'C.C ORINOKIA LOCAR 187', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Invitacio Telefónica', NULL, '2019-05-08 23:22:09', '2019-05-09 07:10:26'),
(74, 'ZONA INFANTIL, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J294362052', 'C.C PLZA ATLANTICO MOL LOCAR PN1-29', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Por Cavefaj', NULL, '2019-05-08 23:27:02', '2019-05-09 07:10:52'),
(75, 'VARIEDADES PEMAR, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J095173895', 'CALLE MIRANDA CASCO CENTRAL', 'Ciudad Guayana', 'Bolivar', NULL, NULL, NULL, 'Por Cavefaj', NULL, '2019-05-09 00:07:41', '2019-05-09 07:11:19'),
(76, 'AMERICAS SHOP, C.A.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J305098760', 'C.C. ALTA VISTA I,  PISO 1, LOCAL 22', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Carta de expositores', NULL, '2019-05-09 00:31:21', '2019-05-09 00:31:21'),
(77, 'CORPORACION CVP, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J003684937', 'CALLE NEVERI UNARE I', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Carta de expositores', NULL, '2019-05-09 02:23:37', '2019-05-09 07:11:46'),
(78, 'RECORCA', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J303487866', 'AV LAS AMERICAS EDIF. STAR PB', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Seleccionar', NULL, '2019-05-09 02:47:18', '2019-05-09 02:47:18'),
(79, 'LIBRERIA LATINA ORINOKIA, CA', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J313649716', 'CC ORINOKIA MALL NIVEL PLAZA ACERO', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Carta de expositores', NULL, '2019-05-09 02:57:32', '2019-05-09 07:12:11'),
(80, 'INVERSIONES Y SUMINISTROS JOR, CA', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J400177332', 'CC GUAYANA MALL PB LOCALES 23 B Y C', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Carta de expositores', NULL, '2019-05-09 03:01:31', '2019-05-09 03:01:31'),
(81, 'FABI CENTER, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J401981020', 'UNARE II SECTOR 2 AV.2 LOCAR 30  BLOQUE 15', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Invitacio Telefónica', NULL, '2019-05-09 03:06:31', '2019-05-09 07:09:20'),
(82, 'INVERSIONES FESTELSA, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J401958869', 'SECTOR VILLA BETANIA AV PRINCIPAL MANZANA 6 SCA 34', 'Puerto Ordaz', 'Bolivar', NULL, NULL, 'INV.FESTELSA', 'Carta de expositores', NULL, '2019-05-09 03:10:27', '2019-05-09 07:08:33'),
(83, 'D FIESTAS, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J403080550', 'AV BOLIVIA EDIF PARIS PB LOCAL 04-B URB VILLA BOLIVA PZO', 'Puerto Ordaz', 'Bolivar', 'DFIESTAC.A', NULL, '@DFIESTASC.A', 'Carta de expositores', NULL, '2019-05-09 04:19:20', '2019-05-09 21:05:27'),
(84, 'SAMYS, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J-309296884', 'ALTA VISTA CC ALTA VISTA LOCAL 1-23', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Carta de expositores', NULL, '2019-05-09 04:30:48', '2019-05-09 04:30:48'),
(85, 'SAINT GOBAIN', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J301307135', 'ZONA INDUSTRIAL CAÑAVERAL', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Carta de expositores', NULL, '2019-05-09 05:10:40', '2019-05-09 21:06:37'),
(86, 'KIKAS DETALLES, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J316688348', 'C.C ORINOKIA', 'Puerto Ordaz', 'Bolivar', NULL, NULL, 'KIKAS DETALLES', 'Carta de expositores', NULL, '2019-05-09 05:19:24', '2019-05-09 07:06:29'),
(87, 'CORPORACION JAPONESA, C.A.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J300957756', 'FRENTE A LA PAZA BOLIVAR, CENTRO DE SAN FELIX', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Carta de expositores', NULL, '2019-05-09 05:27:31', '2019-05-09 05:27:31'),
(88, 'INVERSIONES MARCA RAPIDO, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J297630015', 'VILLA COLOMBIA AV BOLIVIA CON VIA CALLE COLOMBIA', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Carta de expositores', NULL, '2019-05-09 06:13:16', '2019-05-09 08:17:02'),
(89, 'PAPELERIA GUARAPICHE, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J306426841', 'UNARE I AV GUARAPICHE LOCAR 1 PBA', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Carta de expositores', NULL, '2019-05-09 06:27:40', '2019-05-09 07:07:09'),
(90, 'LIBRERIA GUARAPICHE CENTRO, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J297860347', 'C.C VILLA ALIANZA LOCAR 2 PB', 'Puerto Ordaz', 'Bolivar', NULL, NULL, '@LIBRERIA_GUARAPICHE', 'Carta de expositores', NULL, '2019-05-09 06:33:38', '2019-05-09 08:16:27'),
(91, 'MENCALTIL NUEVO MUNDO C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J308436860', 'SAN FELIX  CALLE  CARRERA LOCAR 37', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Carta de expositores', NULL, '2019-05-09 06:42:12', '2019-05-09 06:42:12'),
(92, 'MENCALTIL NUEVO MUNDO C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J308436860', 'SAN FELIX  CALLE  CARRERA LOCAR 37', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Carta de expositores', NULL, '2019-05-09 06:42:54', '2019-05-09 06:42:54'),
(93, 'MENCALTIL NUEVO MUNDO C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J308436860', 'SAN FELIX  CALLE  CARRERA LOCAR 37', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Carta de expositores', NULL, '2019-05-09 06:43:17', '2019-05-09 06:43:17'),
(94, 'MENCALTIL NUEVO MUNDO C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J308436860', 'SAN FELIX  CALLE  CARRERA LOCAR 37', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Carta de expositores', NULL, '2019-05-09 06:44:35', '2019-05-09 06:44:35'),
(95, 'MERCANTIL NUEVO MUNDO, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J308436860', 'SAN FELIX  CALLE  CARRERA LOCAR 37', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Carta de expositores', NULL, '2019-05-09 06:45:22', '2019-05-09 07:07:58'),
(96, 'COMERCIAL LA PORTEÑA II, C.A.', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J303188826', 'CALLE GUASIPATI, NRO. 16', 'Puerto Ordaz', 'Bolivar', '1', NULL, NULL, 'Por Cavefaj', NULL, '2019-05-09 06:56:22', '2019-05-09 06:56:22'),
(97, 'SUGAR PLAZA, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J299569909', 'AV. ATLANTICO CC PLAZA ATLANTICO MALL PISO 1', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Carta de expositores', NULL, '2019-05-09 07:17:09', '2019-05-09 07:17:09'),
(98, 'SUGAR PLAZA, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J299569909', 'AV. ATLANTICO CC PLAZA ATLANTICO MALL PISO 1', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Carta de expositores', NULL, '2019-05-09 07:17:18', '2019-05-09 07:17:18'),
(99, 'GUAYAMILL C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J408318660', 'C.C PORTOFINO', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, NULL, NULL, '2019-05-09 07:53:05', '2019-05-09 07:53:05'),
(100, 'GUAYAMILL C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J408318660', 'C.C PORTOFINO', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, NULL, NULL, '2019-05-09 07:53:07', '2019-05-09 07:53:07'),
(101, 'GUAYAMILL, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J408318660', 'C.C PORTOFINO', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Por Cavefaj', NULL, '2019-05-09 07:53:33', '2019-05-09 08:07:59'),
(102, 'NUEVO MUNDO PAPELES, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J401367887', 'AV ATLANTICO CC COSTA DEL SOL PALTA LOCAR PA06', 'Puerto Ordaz', 'Bolivar', NULL, NULL, 'NUEVOMUNDOPAPELES', 'Carta de expositores', NULL, '2019-05-09 07:58:28', '2019-05-09 08:06:53'),
(103, 'COMERCIAL ROMAR, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J095006638', 'AV ROTARIO EDIF, SAN TOME, URB. VISTA HERMOSA', 'Ciudad Bolivar', 'Bolivar', '.', NULL, NULL, 'Por Cavefaj', NULL, '2019-05-09 22:34:29', '2019-05-09 22:34:29'),
(104, 'ISKITA COMERCIALIZADORA, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J294265910', 'AV GUAYANA CALLE CUCHIVEROS CC ALTAVISTA 1 LOCAL 86 PB', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Carta de expositores', NULL, '2019-05-09 22:39:02', '2019-05-09 22:39:02'),
(105, 'COMERCIAL LATINA, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J095030296', 'C.C. ZULIA, LOCAL 6', 'Puerto Ordaz', 'Bolivar', '.', NULL, NULL, 'Por Cavefaj', NULL, '2019-05-09 22:46:49', '2019-05-09 22:46:49'),
(106, 'SPORLANDIA STORE C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J401116167', 'C.C PLAZA ATLANTICA PISO 1 LOCAR PN1-11', 'Puerto Ordaz', 'Bolivar', NULL, NULL, 'SPORLANDIASTORE', 'Carta de expositores', NULL, '2019-05-09 23:04:07', '2019-05-09 23:04:07'),
(107, 'NORKA FLOWER C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J308147583', 'CC PORTOFINO PB', 'Puerto Ordaz', 'Bolivar', NULL, NULL, 'FLORISTERÍA NORKAFLOWER', 'Por Cavefaj', NULL, '2019-05-10 00:52:55', '2019-05-10 00:52:55'),
(108, 'MULTICREDITOS  RUIZ C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J095017451', 'CAALLE LIBERTAD NUM 16 CASCO HISTORICO', 'Ciudad Bolivar', 'Bolivar', NULL, NULL, NULL, 'Por Cavefaj', NULL, '2019-05-10 01:13:59', '2019-05-10 01:13:59'),
(109, 'CASA CONTENTA LEING LEING C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J317686799', 'UNARE II CALLE  AV 2LOCAL N 63', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'whatsapp', NULL, '2019-05-09 23:18:17', '2019-05-09 23:18:17'),
(110, 'DISTRIBUIDORA GALMI, C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J402144881', 'CALLE MIRANDA CC MIRANDA LOCAL 2 Y 4', 'Upata', 'Bolivar', NULL, NULL, NULL, 'Seleccionar', NULL, '2019-05-09 23:44:48', '2019-05-10 02:49:53'),
(111, 'MARLUIS C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J305386412', 'CC GUAYANA MOLL LOCAR N 20-21PB', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Carta de expositores', NULL, '2019-05-09 23:54:12', '2019-05-09 23:54:12'),
(114, 'PIÑATERIA Y JUGUETREIA MACARENA', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J305705500', 'CC. LTA VISTA I', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Carta de expositores', NULL, '2019-05-10 00:10:17', '2019-05-10 00:10:17'),
(115, 'PLANETASME C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J304529112', 'CC ORINOKIA MOLL', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Por Cavefaj', NULL, '2019-05-10 00:31:46', '2019-05-10 00:31:46'),
(116, 'PABLOPAPELES C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J305924864', 'C.C ATA VISTA I OCAR 1-45 PISO I', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Carta de expositores', NULL, '2019-05-10 01:20:55', '2019-05-10 01:20:55'),
(117, 'ESTAR SPOR C.A', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J301947371', 'C.C ZULIA PB LOCAR 56', 'Puerto Ordaz', 'Bolivar', NULL, NULL, NULL, 'Carta de expositores', NULL, '2019-05-10 02:22:52', '2019-05-10 02:22:52'),
(118, 'INVERSIONES OFERTA 2011', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'J315048256', 'CENTR DE SAN FELIX CALLE CEDEÑO LOCAR N 41', 'Ciudad Guayana', 'Bolivar', NULL, NULL, NULL, 'Carta de expositores', NULL, '2019-05-10 02:41:10', '2019-05-10 03:48:31'),
(119, 'CASSA BELLI', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'PUERTO ORDAZ', 'Rif', 'V56836019', 'CC SANTO TOME LOS OLIVOS PISP I LOCAR 39', 'Puerto Ordaz', 'Bolivar', NULL, NULL, 'ANGELAVIVAS', 'Carta de expositores', NULL, '2019-05-10 03:09:53', '2019-05-10 03:09:53'),
(120, 'CASSA BELLI', 'Comprador', 'Jurídico', 'Edicion 2 - 2019', 'VALENCIA', 'Rif', 'V56836019', 'CC SANTO TOME LOS OLIVOS PISP I LOCAR 39', '2', '3', '@', '@', 'ANGELAVIVAS', 'Por Cavefaj', '2019-05-15 04:00:00', '2019-05-15 15:45:43', '2019-05-15 15:45:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas_contactos`
--

CREATE TABLE `empresas_contactos` (
  `id` int(10) UNSIGNED NOT NULL,
  `empresa_id` int(10) UNSIGNED NOT NULL,
  `contacto_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresas_contactos`
--

INSERT INTO `empresas_contactos` (`id`, `empresa_id`, `contacto_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-05-07 02:49:42', '2019-05-07 02:49:42'),
(2, 2, 2, '2019-05-07 02:58:54', '2019-05-07 02:58:54'),
(3, 3, 3, '2019-05-07 03:00:46', '2019-05-07 03:00:46'),
(4, 4, 4, '2019-05-07 03:15:33', '2019-05-07 03:15:33'),
(5, 5, 5, '2019-05-07 03:16:53', '2019-05-07 03:16:53'),
(6, 6, 6, '2019-05-07 03:18:15', '2019-05-07 03:18:15'),
(7, 7, 7, '2019-05-07 03:20:04', '2019-05-07 03:20:04'),
(8, 8, 8, '2019-05-07 03:21:39', '2019-05-07 03:21:39'),
(9, 9, 9, '2019-05-07 03:23:00', '2019-05-07 03:23:00'),
(10, 10, 10, '2019-05-07 03:24:15', '2019-05-07 03:24:15'),
(11, 11, 11, '2019-05-07 03:31:09', '2019-05-07 03:31:09'),
(12, 12, 12, '2019-05-07 03:32:40', '2019-05-07 03:32:40'),
(13, 13, 13, '2019-05-07 03:34:52', '2019-05-07 03:34:52'),
(14, 14, 14, '2019-05-07 03:36:12', '2019-05-07 03:36:12'),
(15, 15, 15, '2019-05-07 03:37:17', '2019-05-07 03:37:17'),
(16, 16, 16, '2019-05-07 03:38:21', '2019-05-07 03:38:21'),
(17, 17, 17, '2019-05-07 03:40:43', '2019-05-07 03:40:43'),
(18, 18, 18, '2019-05-07 03:42:53', '2019-05-07 03:42:53'),
(19, 19, 19, '2019-05-07 03:44:57', '2019-05-07 03:44:57'),
(20, 20, 20, '2019-05-07 03:48:22', '2019-05-07 03:48:22'),
(21, 21, 21, '2019-05-07 20:25:56', '2019-05-07 20:25:56'),
(22, 22, 22, '2019-05-07 20:27:33', '2019-05-07 20:27:33'),
(23, 24, 23, '2019-05-07 20:28:56', '2019-05-07 20:28:56'),
(24, 25, 24, '2019-05-07 20:30:37', '2019-05-07 20:30:37'),
(25, 26, 25, '2019-05-07 20:32:41', '2019-05-07 20:32:41'),
(26, 28, 26, '2019-05-07 22:24:42', '2019-05-07 22:24:42'),
(27, 30, 27, '2019-05-07 22:26:44', '2019-05-07 22:26:44'),
(28, 31, 28, '2019-05-07 22:29:37', '2019-05-07 22:29:37'),
(29, 33, 29, '2019-05-07 22:32:23', '2019-05-07 22:32:23'),
(30, 35, 30, '2019-05-07 22:34:57', '2019-05-07 22:34:57'),
(31, 38, 31, '2019-05-07 22:42:37', '2019-05-07 22:42:37'),
(32, 40, 32, '2019-05-07 22:52:37', '2019-05-07 22:52:37'),
(33, 42, 33, '2019-05-07 22:56:33', '2019-05-07 22:56:33'),
(34, 44, 34, '2019-05-07 23:04:03', '2019-05-07 23:04:03'),
(35, 45, 35, '2019-05-07 23:07:32', '2019-05-07 23:07:32'),
(36, 46, 36, '2019-05-07 23:13:33', '2019-05-07 23:13:33'),
(37, 49, 37, '2019-05-07 23:26:53', '2019-05-07 23:26:53'),
(38, 50, 38, '2019-05-07 23:28:21', '2019-05-07 23:28:21'),
(39, 53, 39, '2019-05-07 23:29:38', '2019-05-07 23:29:38'),
(40, 54, 40, '2019-05-08 00:02:29', '2019-05-08 00:02:29'),
(41, 56, 41, '2019-05-08 00:05:08', '2019-05-08 00:05:08'),
(42, 58, 42, '2019-05-08 00:06:18', '2019-05-08 00:06:18'),
(43, 61, 43, '2019-05-08 00:07:26', '2019-05-08 00:07:26'),
(44, 23, 23, NULL, NULL),
(45, 27, 27, NULL, NULL),
(46, 63, 44, '2019-05-08 01:36:11', '2019-05-08 01:36:11'),
(47, 65, 45, '2019-05-08 01:37:45', '2019-05-08 01:37:45'),
(48, 66, 46, '2019-05-08 22:42:21', '2019-05-08 22:42:21'),
(49, 67, 47, '2019-05-08 23:16:20', '2019-05-08 23:16:20'),
(50, 73, 48, '2019-05-08 23:22:09', '2019-05-08 23:22:09'),
(51, 74, 49, '2019-05-08 23:27:02', '2019-05-08 23:27:02'),
(52, 75, 50, '2019-05-09 00:07:41', '2019-05-09 00:07:41'),
(53, 76, 51, '2019-05-09 00:31:21', '2019-05-09 00:31:21'),
(54, 77, 52, '2019-05-09 02:23:37', '2019-05-09 02:23:37'),
(55, 78, 53, '2019-05-09 02:47:18', '2019-05-09 02:47:18'),
(56, 79, 54, '2019-05-09 02:57:32', '2019-05-09 02:57:32'),
(57, 80, 55, '2019-05-09 03:01:31', '2019-05-09 03:01:31'),
(58, 81, 56, '2019-05-09 03:06:31', '2019-05-09 03:06:31'),
(59, 82, 57, '2019-05-09 03:10:27', '2019-05-09 03:10:27'),
(60, 83, 58, '2019-05-09 04:19:20', '2019-05-09 04:19:20'),
(61, 84, 59, '2019-05-09 04:30:48', '2019-05-09 04:30:48'),
(62, 85, 60, '2019-05-09 05:10:40', '2019-05-09 05:10:40'),
(63, 86, 61, '2019-05-09 05:19:24', '2019-05-09 05:19:24'),
(64, 87, 62, '2019-05-09 05:27:31', '2019-05-09 05:27:31'),
(65, 88, 63, '2019-05-09 06:13:16', '2019-05-09 06:13:16'),
(66, 89, 64, '2019-05-09 06:27:40', '2019-05-09 06:27:40'),
(67, 90, 65, '2019-05-09 06:33:38', '2019-05-09 06:33:38'),
(68, 95, 66, '2019-05-09 06:45:22', '2019-05-09 06:45:22'),
(69, 96, 67, '2019-05-09 06:56:22', '2019-05-09 06:56:22'),
(70, 98, 68, '2019-05-09 07:17:18', '2019-05-09 07:17:18'),
(71, 101, 69, '2019-05-09 07:53:33', '2019-05-09 07:53:33'),
(72, 102, 70, '2019-05-09 07:58:28', '2019-05-09 07:58:28'),
(73, 103, 71, '2019-05-09 22:34:29', '2019-05-09 22:34:29'),
(74, 104, 72, '2019-05-09 22:39:02', '2019-05-09 22:39:02'),
(75, 105, 73, '2019-05-09 22:46:49', '2019-05-09 22:46:49'),
(76, 106, 74, '2019-05-09 23:04:07', '2019-05-09 23:04:07'),
(77, 107, 75, '2019-05-10 00:52:55', '2019-05-10 00:52:55'),
(78, 108, 76, '2019-05-10 01:13:59', '2019-05-10 01:13:59'),
(79, 109, 77, '2019-05-09 23:18:18', '2019-05-09 23:18:18'),
(80, 110, 78, '2019-05-09 23:44:48', '2019-05-09 23:44:48'),
(81, 111, 79, '2019-05-09 23:54:12', '2019-05-09 23:54:12'),
(82, 114, 80, '2019-05-10 00:10:17', '2019-05-10 00:10:17'),
(83, 115, 81, '2019-05-10 00:31:46', '2019-05-10 00:31:46'),
(84, 116, 82, '2019-05-10 01:20:55', '2019-05-10 01:20:55'),
(85, 117, 83, '2019-05-10 02:22:52', '2019-05-10 02:22:52'),
(86, 118, 84, '2019-05-10 02:41:10', '2019-05-10 02:41:10'),
(87, 119, 85, '2019-05-10 03:09:53', '2019-05-10 03:09:53'),
(88, 120, 86, '2019-05-15 15:45:43', '2019-05-15 15:45:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas_ramos`
--

CREATE TABLE `empresas_ramos` (
  `id` int(10) UNSIGNED NOT NULL,
  `empresa_id` int(10) UNSIGNED NOT NULL,
  `ramo_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresas_ramos`
--

INSERT INTO `empresas_ramos` (`id`, `empresa_id`, `ramo_id`, `created_at`, `updated_at`) VALUES
(5, 1, 9, '2019-05-07 03:11:43', '2019-05-07 03:11:43'),
(7, 2, 5, '2019-05-07 03:12:12', '2019-05-07 03:12:12'),
(8, 3, 5, '2019-05-07 03:12:33', '2019-05-07 03:12:33'),
(9, 4, 4, '2019-05-07 03:15:33', '2019-05-07 03:15:33'),
(10, 5, 4, '2019-05-07 03:16:53', '2019-05-07 03:16:53'),
(11, 6, 5, '2019-05-07 03:18:15', '2019-05-07 03:18:15'),
(13, 8, 8, '2019-05-07 03:21:39', '2019-05-07 03:21:39'),
(14, 9, 4, '2019-05-07 03:23:00', '2019-05-07 03:23:00'),
(15, 10, 9, '2019-05-07 03:24:14', '2019-05-07 03:24:14'),
(16, 11, 13, '2019-05-07 03:31:09', '2019-05-07 03:31:09'),
(17, 12, 7, '2019-05-07 03:32:40', '2019-05-07 03:32:40'),
(18, 13, 4, '2019-05-07 03:34:52', '2019-05-07 03:34:52'),
(19, 14, 1, '2019-05-07 03:36:11', '2019-05-07 03:36:11'),
(20, 15, 3, '2019-05-07 03:37:16', '2019-05-07 03:37:16'),
(21, 16, 2, '2019-05-07 03:38:21', '2019-05-07 03:38:21'),
(22, 17, 1, '2019-05-07 03:40:42', '2019-05-07 03:40:42'),
(23, 18, 3, '2019-05-07 03:42:53', '2019-05-07 03:42:53'),
(24, 19, 3, '2019-05-07 03:44:57', '2019-05-07 03:44:57'),
(26, 20, 14, '2019-05-07 03:48:43', '2019-05-07 03:48:43'),
(27, 21, 7, '2019-05-07 20:25:56', '2019-05-07 20:25:56'),
(28, 22, 4, '2019-05-07 20:27:33', '2019-05-07 20:27:33'),
(29, 23, 1, '2019-05-07 20:28:39', '2019-05-07 20:28:39'),
(30, 24, 1, '2019-05-07 20:28:55', '2019-05-07 20:28:55'),
(31, 25, 4, '2019-05-07 20:30:37', '2019-05-07 20:30:37'),
(32, 26, 1, '2019-05-07 20:32:41', '2019-05-07 20:32:41'),
(33, 27, 2, '2019-05-07 22:24:10', '2019-05-07 22:24:10'),
(34, 28, 2, '2019-05-07 22:24:42', '2019-05-07 22:24:42'),
(35, 29, 2, '2019-05-07 22:26:24', '2019-05-07 22:26:24'),
(36, 30, 2, '2019-05-07 22:26:44', '2019-05-07 22:26:44'),
(37, 31, 5, '2019-05-07 22:29:37', '2019-05-07 22:29:37'),
(38, 32, 12, '2019-05-07 22:32:19', '2019-05-07 22:32:19'),
(40, 33, 12, '2019-05-07 22:32:58', '2019-05-07 22:32:58'),
(41, 34, 3, '2019-05-07 22:34:05', '2019-05-07 22:34:05'),
(42, 35, 3, '2019-05-07 22:34:57', '2019-05-07 22:34:57'),
(43, 36, 4, '2019-05-07 22:41:22', '2019-05-07 22:41:22'),
(44, 37, 4, '2019-05-07 22:41:22', '2019-05-07 22:41:22'),
(45, 38, 4, '2019-05-07 22:42:37', '2019-05-07 22:42:37'),
(46, 39, 7, '2019-05-07 22:52:10', '2019-05-07 22:52:10'),
(48, 40, 7, '2019-05-07 22:53:03', '2019-05-07 22:53:03'),
(49, 41, 2, '2019-05-07 22:55:15', '2019-05-07 22:55:15'),
(50, 42, 2, '2019-05-07 22:56:33', '2019-05-07 22:56:33'),
(51, 43, 9, '2019-05-07 23:03:42', '2019-05-07 23:03:42'),
(52, 44, 9, '2019-05-07 23:04:02', '2019-05-07 23:04:02'),
(53, 45, 2, '2019-05-07 23:07:32', '2019-05-07 23:07:32'),
(54, 46, 2, '2019-05-07 23:13:33', '2019-05-07 23:13:33'),
(55, 47, 2, '2019-05-07 23:26:28', '2019-05-07 23:26:28'),
(56, 48, 2, '2019-05-07 23:26:35', '2019-05-07 23:26:35'),
(57, 49, 2, '2019-05-07 23:26:53', '2019-05-07 23:26:53'),
(58, 50, 7, '2019-05-07 23:28:21', '2019-05-07 23:28:21'),
(59, 51, 7, '2019-05-07 23:29:18', '2019-05-07 23:29:18'),
(60, 52, 7, '2019-05-07 23:29:21', '2019-05-07 23:29:21'),
(61, 53, 7, '2019-05-07 23:29:38', '2019-05-07 23:29:38'),
(62, 54, 1, '2019-05-08 00:02:29', '2019-05-08 00:02:29'),
(63, 55, 1, '2019-05-08 00:04:45', '2019-05-08 00:04:45'),
(64, 56, 1, '2019-05-08 00:05:08', '2019-05-08 00:05:08'),
(65, 57, 5, '2019-05-08 00:06:01', '2019-05-08 00:06:01'),
(66, 58, 5, '2019-05-08 00:06:18', '2019-05-08 00:06:18'),
(67, 59, 2, '2019-05-08 00:07:10', '2019-05-08 00:07:10'),
(68, 60, 2, '2019-05-08 00:07:12', '2019-05-08 00:07:12'),
(69, 61, 2, '2019-05-08 00:07:26', '2019-05-08 00:07:26'),
(70, 62, 11, '2019-05-08 01:35:49', '2019-05-08 01:35:49'),
(71, 63, 11, '2019-05-08 01:36:11', '2019-05-08 01:36:11'),
(72, 64, 11, '2019-05-08 01:37:26', '2019-05-08 01:37:26'),
(73, 65, 11, '2019-05-08 01:37:45', '2019-05-08 01:37:45'),
(76, 68, 5, '2019-05-08 23:20:19', '2019-05-08 23:20:19'),
(77, 69, 5, '2019-05-08 23:20:29', '2019-05-08 23:20:29'),
(78, 70, 5, '2019-05-08 23:20:39', '2019-05-08 23:20:39'),
(79, 71, 5, '2019-05-08 23:20:59', '2019-05-08 23:20:59'),
(80, 72, 5, '2019-05-08 23:21:16', '2019-05-08 23:21:16'),
(86, 76, 5, '2019-05-09 00:31:21', '2019-05-09 00:31:21'),
(88, 78, 3, '2019-05-09 02:47:18', '2019-05-09 02:47:18'),
(90, 80, 1, '2019-05-09 03:01:31', '2019-05-09 03:01:31'),
(102, 87, 4, '2019-05-09 05:27:31', '2019-05-09 05:27:31'),
(108, 91, 3, '2019-05-09 06:42:12', '2019-05-09 06:42:12'),
(109, 92, 3, '2019-05-09 06:42:54', '2019-05-09 06:42:54'),
(110, 93, 3, '2019-05-09 06:43:17', '2019-05-09 06:43:17'),
(111, 94, 3, '2019-05-09 06:44:36', '2019-05-09 06:44:36'),
(114, 96, 14, '2019-05-09 06:56:22', '2019-05-09 06:56:22'),
(116, 86, 1, '2019-05-09 07:06:29', '2019-05-09 07:06:29'),
(117, 89, 7, '2019-05-09 07:07:10', '2019-05-09 07:07:10'),
(118, 7, 3, '2019-05-09 07:07:27', '2019-05-09 07:07:27'),
(119, 95, 3, '2019-05-09 07:07:59', '2019-05-09 07:07:59'),
(120, 82, 7, '2019-05-09 07:08:33', '2019-05-09 07:08:33'),
(121, 81, 7, '2019-05-09 07:09:20', '2019-05-09 07:09:20'),
(123, 73, 5, '2019-05-09 07:10:26', '2019-05-09 07:10:26'),
(124, 74, 1, '2019-05-09 07:10:52', '2019-05-09 07:10:52'),
(125, 75, 1, '2019-05-09 07:11:19', '2019-05-09 07:11:19'),
(126, 77, 5, '2019-05-09 07:11:46', '2019-05-09 07:11:46'),
(127, 79, 7, '2019-05-09 07:12:11', '2019-05-09 07:12:11'),
(128, 97, 3, '2019-05-09 07:17:09', '2019-05-09 07:17:09'),
(129, 98, 3, '2019-05-09 07:17:18', '2019-05-09 07:17:18'),
(130, 99, 14, '2019-05-09 07:53:05', '2019-05-09 07:53:05'),
(131, 100, 14, '2019-05-09 07:53:07', '2019-05-09 07:53:07'),
(137, 90, 7, '2019-05-09 08:16:27', '2019-05-09 08:16:27'),
(138, 88, 12, '2019-05-09 08:17:02', '2019-05-09 08:17:02'),
(140, 66, 10, '2019-05-09 20:51:57', '2019-05-09 20:51:57'),
(141, 67, 1, '2019-05-09 20:52:36', '2019-05-09 20:52:36'),
(142, 83, 2, '2019-05-09 21:05:27', '2019-05-09 21:05:27'),
(143, 85, 6, '2019-05-09 21:06:37', '2019-05-09 21:06:37'),
(144, 103, 1, '2019-05-09 22:34:29', '2019-05-09 22:34:29'),
(145, 104, 1, '2019-05-09 22:39:02', '2019-05-09 22:39:02'),
(149, 101, 14, '2019-05-09 22:42:06', '2019-05-09 22:42:06'),
(150, 105, 7, '2019-05-09 22:46:49', '2019-05-09 22:46:49'),
(151, 106, 5, '2019-05-09 23:04:07', '2019-05-09 23:04:07'),
(152, 102, 7, '2019-05-09 23:08:52', '2019-05-09 23:08:52'),
(153, 84, 4, '2019-05-10 00:11:53', '2019-05-10 00:11:53'),
(155, 108, 5, '2019-05-10 01:13:59', '2019-05-10 01:13:59'),
(156, 109, 2, '2019-05-09 23:18:18', '2019-05-09 23:18:18'),
(158, 111, 2, '2019-05-09 23:54:12', '2019-05-09 23:54:12'),
(159, 107, 1, '2019-05-09 23:56:27', '2019-05-09 23:56:27'),
(163, 114, 2, '2019-05-10 00:10:17', '2019-05-10 00:10:17'),
(164, 115, 7, '2019-05-10 00:31:46', '2019-05-10 00:31:46'),
(165, 116, 7, '2019-05-10 01:20:55', '2019-05-10 01:20:55'),
(166, 117, 5, '2019-05-10 02:22:52', '2019-05-10 02:22:52'),
(168, 110, 4, '2019-05-10 02:49:53', '2019-05-10 02:49:53'),
(169, 119, 7, '2019-05-10 03:09:53', '2019-05-10 03:09:53'),
(170, 118, 3, '2019-05-10 03:48:31', '2019-05-10 03:48:31'),
(171, 120, 7, '2019-05-15 15:45:43', '2019-05-15 15:45:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `estado`) VALUES
(1, 'Amazonas'),
(2, 'Anzoátegui'),
(3, 'Apure'),
(4, 'Aragua'),
(5, 'Barinas'),
(6, 'Bolívar'),
(7, 'Carabobo'),
(8, 'Cojedes'),
(9, 'Delta Amacuro'),
(10, 'Falcón'),
(11, 'Guárico'),
(12, 'Lara'),
(13, 'Mérida'),
(14, 'Miranda'),
(15, 'Monagas'),
(16, 'Nueva Esparta'),
(17, 'Portuguesa'),
(18, 'Sucre'),
(19, 'Táchira'),
(20, 'Trujillo'),
(21, 'Vargas'),
(22, 'Yaracuy'),
(23, 'Zulia'),
(24, 'Distrito Capital'),
(25, 'Dependencias Federales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_07_174310_entrust_setup_tables', 1),
(4, '2019_04_15_110629_tabla_contactos', 1),
(5, '2019_04_15_110818_tabla_empresas', 1),
(6, '2019_04_15_111543_tabla_ramos', 1),
(7, '2019_04_15_111624_tabla_empresas_contactos', 1),
(8, '2019_04_15_111750_tabla_empresas_ramos', 1),
(9, '2019_04_28_065257_tabla_de_edicion_feria', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'user', 'Usuario', 'El usuario puede acceder', '2019-04-28 09:53:25', '2019-04-28 09:53:25'),
(2, 'admin', 'Administrador', 'El administrador puede acceder', '2019-04-28 09:53:25', '2019-04-28 09:53:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ramos`
--

CREATE TABLE `ramos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ramos`
--

INSERT INTO `ramos` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Juguetería', '2019-04-28 09:53:25', '2019-04-28 09:53:25'),
(2, 'Piñatería', '2019-04-28 09:53:25', '2019-04-28 09:53:25'),
(3, 'Quincalla', '2019-04-28 09:53:25', '2019-04-28 09:53:25'),
(4, 'Tienda por DPTOS', '2019-04-28 09:53:25', '2019-04-28 09:53:25'),
(5, 'Deportes', '2019-04-28 09:53:25', '2019-04-28 09:53:25'),
(6, 'Sector Oficial', '2019-04-28 09:53:25', '2019-04-28 09:53:25'),
(7, 'Librería/Papelería', '2019-04-28 09:53:25', '2019-04-28 09:53:25'),
(8, 'Puericultura', '2019-04-28 09:53:25', '2019-04-28 09:53:25'),
(9, 'Bazar', '2019-04-28 09:53:25', '2019-04-28 09:53:25'),
(10, 'Educativos', '2019-04-28 09:53:25', '2019-04-28 09:53:25'),
(11, 'Floristeria', '2019-04-28 09:53:25', '2019-04-28 09:53:25'),
(12, 'Utilitaria', '2019-04-28 09:53:25', '2019-04-28 09:53:25'),
(13, 'Muebleria', '2019-05-06 03:00:00', '2019-05-06 03:00:00'),
(14, 'Textil', '2019-05-06 03:00:00', '2019-05-06 03:00:00'),
(15, 'Calzado', '2019-05-06 03:00:00', '2019-05-06 03:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrador', 'Administrador', '2019-04-28 14:53:25', '2019-04-28 14:53:25'),
(2, 'user', 'Usuario', 'Usuario', '2019-04-28 14:53:25', '2019-04-28 14:53:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'admin', NULL, '$2y$10$Jy8XuHWPY1T54QYTi9o6vuaRIbqt0Gmqu5M0ooE13wjP1AB4w6S7W', 'UJBM3TpkqxkZPKhvoXKjbXjMopdLfVtDciUbGoeYG4rH3kxe4PY61X6sjGHm', '2019-04-28 14:53:25', '2019-05-08 01:43:20'),
(2, 'Operador', 'operador', NULL, '$2y$10$p.1dSv.Jq1.4LN.4o.h8LOuCzHBzLS5CD4UqYehP4Ucvv0fwgqjn2', 'YL1oFHEo0bjUrrwj01boritDotRXBGiUrMgCWNhxz2khD2xavV3CYL6VXC2t', '2019-04-28 14:53:25', '2019-05-08 20:39:50');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `edicionferia`
--
ALTER TABLE `edicionferia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresas_contactos`
--
ALTER TABLE `empresas_contactos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresas_contactos_empresa_id_foreign` (`empresa_id`),
  ADD KEY `empresas_contactos_contacto_id_foreign` (`contacto_id`);

--
-- Indices de la tabla `empresas_ramos`
--
ALTER TABLE `empresas_ramos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresas_ramos_empresa_id_foreign` (`empresa_id`),
  ADD KEY `empresas_ramos_ramo_id_foreign` (`ramo_id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `ramos`
--
ALTER TABLE `ramos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=523;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de la tabla `edicionferia`
--
ALTER TABLE `edicionferia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT de la tabla `empresas_contactos`
--
ALTER TABLE `empresas_contactos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT de la tabla `empresas_ramos`
--
ALTER TABLE `empresas_ramos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ramos`
--
ALTER TABLE `ramos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empresas_contactos`
--
ALTER TABLE `empresas_contactos`
  ADD CONSTRAINT `empresas_contactos_contacto_id_foreign` FOREIGN KEY (`contacto_id`) REFERENCES `contactos` (`id`),
  ADD CONSTRAINT `empresas_contactos_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`);

--
-- Filtros para la tabla `empresas_ramos`
--
ALTER TABLE `empresas_ramos`
  ADD CONSTRAINT `empresas_ramos_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`),
  ADD CONSTRAINT `empresas_ramos_ramo_id_foreign` FOREIGN KEY (`ramo_id`) REFERENCES `ramos` (`id`);

--
-- Filtros para la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
