-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2021 at 06:51 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ejemplo`
--

-- --------------------------------------------------------

--
-- Table structure for table `rover`
--

CREATE TABLE `rover` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `pais_origen` varchar(20) NOT NULL,
  `agencia` varchar(11) NOT NULL,
  `mision_rover` varchar(100) NOT NULL,
  `data_rover` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rover`
--

INSERT INTO `rover` (`id`, `nombre`, `pais_origen`, `agencia`, `mision_rover`, `data_rover`) VALUES
(0, 'Sojourney', 'Estados Unidos', 'NASA', 'MARS PATHFINDER\r\n\r\n', 'En 1997, los científicos de la NASA hicieron algo bastante sorprendente. Por primera vez, utilizaron un robot de ruedas pequeñas para estudiar la superficie de Marte. Este explorador robótico, llamado rover, fue nombrado Sojourner. Sólo tenía el tamaño de un horno de microondas. Sin embargo, pasó a compartir mucha información nueva importante con los científicos.\r\nSojourner no estaba solo durante su viaje a Marte. Viajó dentro de una nave espacial, un aterrizador. El aterrizador tenía forma de pirámide y estaba cubierto de bolsas de aire. Los airbags ayudaron a que el aterrizador tenga un aterrizaje seguro y lleno de baches. La forma de la pirámide ayudó a asegurar que el aterrizador y el rover pudieran voltearse hacia la derecha, independientemente de cómo aterrizaran. Después de que el aterrizador aterrizó en Marte, un panel se abrió y Sojourner salió para comenzar a explorar.\r\nEl rover exploró una zona de Marte cerca de su lugar de aterrizaje llamado Ares Vallis. Los científicos estaban interesados en esta área porque parecía el sitio de una antigua inundación. El agua que corría de una inundación habría movido muchas rocas y suciedad en un solo lugar. Esto significa que el rover podría estudiar un montón de diferentes tipos de rocas sin viajar muy lejos.\r\nA los ingenieros también les gustó el área porque parecía un lugar plano y seguro para Sojourner.\r\nMientras conducía distancias cortas, utilizó su cámara para tomar fotografías del paisaje marciano. Envió más de 550 fotos del Planeta Rojo. El rover usó instrumentos para estudiar de qué estaban hechas las rocas marcianas y la suciedad. Su lander también recogió información sobre vientos y otros factores meteorológicos en Marte.'),
(1, 'Spirit & Opportunity', 'Estados Unidos', 'NASA', 'MARS EXPLORATION ROVERS\r\n\r\n', 'Spirit y Opportunity fueron hechos como gemelos. Ambos portaban todos los mismos instrumentos científicos. Y cada uno era aproximadamente del tamaño de un carrito de golf.\r\nEn la Tierra, donde hay agua, hay vida. Spirit y Opportunity fueron enviados a Marte para encontrar más pistas sobre la historia del agua allí, y para ver si el Planeta Rojo podría haber tenido formas de vida. Para hacer esto, los científicos enviaron a los dos rovers a dos sitios de aterrizaje diferentes. Los rovers aterrizaron en lados opuestos del planeta.\r\nSpirit aterrizó en una región llamada cráter Gusev. Los científicos querían explorar el cráter porque pensaban que podría haber aguantado agua hace mucho tiempo. Segun fotos tomados por los satélites, los científicos pensaron que parecía que varios ríos grandes fluyeron en el cráter de Gusev.\r\n\r\nOpportunity aterrizó en el otro lado de Marte en un área llamada Meridiani Planum. Esta región era agradable porque era un lugar plano y seguro para el rover. También, estudios con un satélite alrededor de Marte mostraron que podría contener un mineral llamado hematita gris. En la Tierra, la hematita gris frecuentemente se ubica en presencia de agua.\r\nLas rocas que Spirit y Opportunity estudiaron mostraron a los científicos que hace mucho tiempo, el agua en Marte podría haber parecido mucho al agua en la Tierra. Marte alguna vez tuvo lagos y ríos en la superficie. Como la tierra tenía agua por debajo del suelo, así como vapor de agua en la atmósfera.\r\n'),
(2, 'Curiosity', 'Estados Unidos', 'NASA', 'MARS SCIENCE LABORATORY\r\n\r\n', 'En la Tierra, donde hay agua, hay seres vivos. Sabemos que Marte tenía agua hace mucho tiempo. ¿Pero también tenía otras condiciones necesarias de vida?\r\nLa NASA envió el rover Curiosity a Marte. Curiosity es el robot más grande aterrizado en otro planeta. Es del tamaño de un pequeño todoterreno.\r\nLa curiosidad aterrizó en Gale Crater. Este cráter es especial porque tiene una montaña alta en el medio. La montaña tiene muchas capas de roca. Cada capa está hecha de diferentes minerales de diferentes períodos de tiempo. Estos minerales podrían decir a los científicos acerca de la historia del agua en Marte.\r\nEl rover utiliza muchos instrumentos científicos para estudiar las rocas en el cráter Gale. Curiosity usó su taladro para hacer un agujero en una roca que alguna vez fue barro en el fondo de un lago. Uno de sus otros instrumentos estudió el polvo perforado de la roca. Esta información ayudó a los científicos a aprender que el cráter de Gale tenía componentes que la vida antigua habría necesitado para sobrevivir.\r\nLos científicos enviaron Curiosity a Marte para medir muchas otras cosas, también - incluyendo la radiación. La radiación es un tipo de energía que puede provenir del sol. Viaja en ondas de alta energía que pueden ser dañinas para los seres vivos. Curiosity encontró que Marte tiene niveles altos y peligrosos de radiación. La NASA usará los datos de radiación de Curiosity para diseñar misiones para ser más seguras para los exploradores humanos. Curiosity trajo 17 cámaras al Planeta Rojo, más que cualquier otro rover. Usa algunas de sus cámaras para tomar fotos de su viaje. Las cámaras también actúan como los ojos de Curiosity, ayudándola a detectar y alejarse del peligro. Una de las cámaras de Curiosity, al final de su brazo robótico de 7 pies de largo, actúa como una especie de \"stick selfie\". ¡Ella puede sostener la cámara dos metros lejos y tomar un selfie para enviar a la tierra!'),
(3, 'Perseverance', 'Estados Unidos', 'NASA', 'MARS 2020 MISSION\r\n\r\n', 'Rovers en Marte han recogido pruebas de agua y algunos de los componentes químicos de la vida. Los científicos piensan que podría ser posible que la vida existiera en Marte hace mucho tiempo. Si había seres vivos, probablemente eran organismos pequeños, algo así como bacterias aquí en la Tierra. Pero, ¿empezó la vida en Marte?La misión Mars 2020 espera poder responder a esa pregunta. La misión enviará un rover muy similar a Curiosity para explorar las rocas, la suciedad y el aire en Marte. Igual que Curiosity, el Perseverance rover es del tamaño de un todoterreno pequeño. El nuevo rover tiene un objetivo diferente y diferentes instrumentos. Buscará directamente signos de vida pasada en Marte.El nuevo rover también experimentará con un recurso natural que sería útil en la planificación de una misión humana a Marte.La atmósfera de Marte esta compuesta sobre todo de un gas llamado dióxido de carbono. Pero muchos seres vivos (incluyendo humanos) necesitan oxígeno para respirar. Si un ser humano fuera a Marte, tendría que traer mucho oxígeno. Sin embargo, no hay mucho espacio en la nave espacial para traer oxígeno líquido.El rover probará un método para obtener oxígeno del aire en la atmósfera marciana. Esto ayudará a la NASA a planear los mejores diseños para enviar astronautas humanos a explorar Marte un día.\r\nEl rover Perseverance se lanzó desde la Tierra el 30 de julio de 2020 y llegará a Marte el 18 de febrero de 2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rover`
--
ALTER TABLE `rover`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
