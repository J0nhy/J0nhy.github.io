-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Mar-2021 às 01:43
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mediamarkt`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `categories`, `status`) VALUES
(5, 'Económico', 0),
(6, 'Topo de gama', 0),
(7, 'Intermédio', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(75) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `comment` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `comment`, `added_on`) VALUES
(5, 'João Custódio', 'jpsasilva@hotmail.com', '912271169', 'O meu pc nao dá', '2021-02-18 02:49:07'),
(6, 'João Custódio', 'jpsasilva@hotmail.com', '912271169', 'Olá queria um computador intermédio para desenvolver um jogo de ação no unreal engine', '2021-02-24 12:24:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` varchar(2000) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `CPU` text NOT NULL,
  `RAM` varchar(150) NOT NULL,
  `GPU` varchar(150) NOT NULL,
  `FONTE` varchar(150) NOT NULL,
  `Armazenamento` varchar(150) NOT NULL,
  `Armazenamento_Secundário` varchar(150) NOT NULL,
  `MotherBoard` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `product`
--

INSERT INTO `product` (`id`, `categories_id`, `name`, `price`, `image`, `short_desc`, `description`, `status`, `CPU`, `RAM`, `GPU`, `FONTE`, `Armazenamento`, `Armazenamento_Secundário`, `MotherBoard`) VALUES
(11, 5, 'DESKTOP PC HP PAVILION TP01-0000NP', 429, '950777246_hp-pavilion.jpg', 'DESKTOP PC HP PAVILION TP01-0000NP AMD ATHLON 8GB RAM 256GB SSD VEGA 3', 'Com design compacto, processador AMD Athlon™ 3.4 GHz, 8GB de RAM, 256GB de memória SSD e pláca gráfica Radeon™ Vega 3. \r\n \r\n\r\nO dia a dia exige desempenho excecional e durabilidade comprovada. O PC Desktop HP Pavilion oferece elevado desempenho e a fiabilidade de uma marca de confiança que protege o que é mais importante para ti.', 1, 'AMD Athlon™ 300UGE 3.4GHz', '8GB', 'Radeon™ Vega 3', '750W', '256 GB SSD', '', 'Asus'),
(14, 7, 'GAMING DESKTOP PC ASUS ROG STRI', 999, '475352248_e9c95a62bb2ebde7deb16129ce980da02e026f5a_93a5f85b-c35f-46a7-b1b6-10e62aaeadc4_large.jpg', 'DESKTOP GAMING ASUS ROG STRIX GA15 G15DH-R5D15PB2', 'Com processador AMD Ryzen 5 3600X, 8GB de Memoria RAM, 512GB de armazenamento SSD e placa gráfica com 4GB de memória dedicada GeForce GTX 1650.', 1, 'AMD Ryzen 5 3600X', '8GB', 'GeForce GTX 1650 Super 4GB', '750W', '512 GB SSD', '', 'Asus'),
(27, 6, 'GAMING DESKTOP PC ASUS ROG', 1699, '731190253_Strix.PNG', 'Computador para aquele desenvolvedor que necessita de uma besta!', 'Computador aconselhado para desenvolver jogos com a máxima qualidade, com esta máquina não se precisará de preocupar com mais nada!', 1, 'AMD Ryzen 7 3800X', '16GB', 'GeForce RTX 2660 Super 8GB', '700W', '1 TB SSD', '', 'ROG'),
(28, 6, 'GAMING DESKTOP PC OMEN GT12', 1499, '216154936_hp_9ef19aa_aba_omen_25l_i7_10700f_16gb_1572633.jpg', 'Gaming Desktop PC OMEN GT12-0006np', 'Com Processador Intel® Core™ i7 de 10.ª geração, 16 GB de memória RAM,  Armazenamento 512 SSD + 1TB HDD  e placa gráfica dedicada GeForce® GTX 1660 Super™ 6 GB. \r\n\r\nA fusão perfeita entre componentes potentes, software personalizável e design superior.\r\nPotência e desempenho para uma experiência superior de entretenimento, jogos e multitarefas.', 1, 'Core™ i7-10700 2.9Ghz', '16GB', 'GeForce® GTX 1660 Super 6GB', '1000W', '1TB HDD', '512GB SSD', 'Asus'),
(29, 6, 'GAMING DESKTOP PC ASUS', 1599, '191590754_81ID8o_2B3bYL._SL1000_1024x1024.jpg', 'Desktop Gaming Com processador Core i7 de 9ªGeração', 'Desktop Gaming Com processador Core i7 de 9ªGeração, 16GB de Memoria RAM DDR4, 256GB SSD + 1TB HDD de memória interna e placa gráfica com 6GB de memória dedicada GeForce GTX 1660 Ti', 1, 'Core™ i7-9700K 3.6 GHz', '16GB', 'GeForce GTX 1660 Ti 6GB', '750W', '1TB HDD', '256 GB SSD', 'Asus'),
(30, 6, 'GAMING DESKTOP PC OMEN OBELISK', 1449, '282003323_c06169576_large.png', 'Computador Desktop Gaming da HP Omen Obelisk 875-0048NP', 'Computador Desktop Gaming da HP Omen Obelisk 875-0048NP, com processador Intel® Core™ i7-8700 (3.2 GHz), 16GB  de memória RAM, equipado com 256GB SSD + 1TB HDD de memória interna e uma potente placa gráfica GeForce® RTX 2060(6GB).  Potência e desempenho para uma experiência superior de entretenimento, jogos e multitarefas.', 1, 'Intel® Core™ i7-8700 (3,2 GHz)', '16GB', 'NVIDIA® GeForce RTX 2060 6GB', '760W', '1TB HDD', '256GB SSD', 'Asus'),
(31, 7, 'GAMING PC HP PAVILION TG01-1021NP', 849, '929576222_c06425991_1750x1285_237f7fb1-7333-4697-8276-f5e7fafbcbd3_large.jpg', 'GAMING DESKTOP PC HP PAVILION TG01-1021NP I5 8GB RAM 512GB SSD GEFORCE GTX 4GB', 'Computador Desktop Gaming HP Pavilion TG01-1021NP\r\nCom processador Intel® Core™ i5-10400F até 4.3 GHz, 8GB de memória RAM, equipado com 512Gb de memória interna e uma potente placa gráfica NVIDIA® GeForce® GTX 1650 (4GB).  Potência e desempenho para uma experiência superior de entretenimento, jogos e multitarefas.', 1, 'Core™ i5-10400F (2.9 GHz)', '8GB', 'GeForce GTX 1650 Super 4GB', '500W', '512 GB SSD', '', 'HP'),
(32, 7, 'GAMING DESKTOP PC LENOVO', 749, '509418831_lenovo-desktop-ideacentre-t540-02_1024x1024.jpg', 'GAMING DESKTOP PC LENOVO IDEACENTRE T540-15ICB-115 - CORE I5 8GB RAM 512GB SSD GEFORCE GTX 1650 4GB', 'O IdeaCentre T540 Gaming é um potente Desktop contemporâneo que oferece o melhor de dois mundos: jogos e utilização familiar convencional. Equipado com o mais recente processador Intel® Core™, placa gráfica NVIDIA® para jogos, memória DDR4 rápida e armazenamento SSD PCIe, permite desfrutar de qualquer tarefa.', 1, 'Intel Core i5-9400 2.9 GHz', '8GB', 'GeForce GTX 1650 4GB', '750W', '512 GB SSD', '', 'Asus'),
(33, 7, 'GAMING DESKTOP PC HP', 949, '578740159_product-p018659-66087_large.jpg', 'GAMING DESKTOP PC HP PAVILION 690-0047NP I7 8GB RAM 256GB SSD GEFORCE GTX 4GB', 'Computador Desktop Gaming da HP Pavilion 690-0047np , com processador Intel® Core™ i7-8700 (3.2 GHz), 8GB  de memória RAM, equipado com 256Gb de memória interna e uma potente placa gráfica NVIDIA® GeForce® GTX 1050 Ti (4GB).  Potência e desempenho para uma experiência superior de entretenimento, jogos e multitarefas.', 1, 'Intel® Core™ i7-8700 (3.2 GHz)', '8GB', 'NVIDIA® GeForce® GTX 1050 Ti(4GB)', '750W', '256 GB SSD PCIe', '', 'HP'),
(34, 7, 'DESKTOP PC HP', 699, '750818501_624288_3_xnl_f800e45c-bca8-4e7f-831a-1280656ae104_large.jpg', 'DESKTOP PC HP M01-F0015NP - AMD RYZEN 5 3400G 8GB RAM 512GB GT1030', 'O HP M01-F0015NP, com processador AMD Ryzen™ 5 3400G (3.7GHz), 8GB de memória RAM, 512GB de capacidade de armazenamento SSD e placa gráfica AMD Radeon™ RX Vega 11, é um PC Desktop elegante, que combina o design e a tecnologia de uma marca em que podes confiar.', 1, 'AMD Ryzen™ 5 3400G', '8 GB', 'NVIDIA® GeForce® GT 1030', '750W', '512 GB SSD', '', 'HP'),
(35, 7, 'GAMING PC HP TG01-0008NP', 849, '243631129_c06425991_1750x1285_237f7fb1-7333-4697-8276-f5e7fafbcbd3_large.jpg', 'GAMING DESKTOP PC HP PAVILION TG01-0008NP I5 8GB RAM 512GB SSD GEFORCE GTX 4GB', 'Com processador Intel® Core™ i5-10400F até 4.3 GHz, 8GB de memória RAM, equipado com 512Gb de memória interna e uma potente placa gráfica NVIDIA® GeForce® GTX 1650 (4GB).  Potência e desempenho para uma experiência superior de entretenimento, jogos e multitarefas.', 1, 'Core™ i5-10400F (2.9 GHz)', '8GB', 'GeForce GTX 1650 4GB', '850W', '512 GB SSD', '', 'Asus'),
(36, 7, 'GAMING DESKTOP PC HP TG01-1024NP', 799, '373550953_c06425991_1750x1285_237f7fb1-7333-4697-8276-f5e7fafbcbd3_large.jpg', 'GAMING DESKTOP PC HP PAVILION TG01-1024NP CORE I5 16GB RAM 512GB SSD GEFORCE GTX 6GB', 'Com processador Intel® Core™ i5-10400F até 4.3 GHz, 16GB de memória RAM, equipado com 512Gb de memória interna e uma potente placa gráfica NVIDIA® GeForce® GTX 1660 (6GB).  Potência e desempenho para uma experiência superior de entretenimento, jogos e multitarefas.', 1, 'Core™ i5-10400F (2.9 GHz)', '16GB', 'GeForce GTX 1660 6GB', '750W', '512 GB SSD', '', 'Asus'),
(37, 5, 'DESKTOP PC HP PAVILION TP01-0023NP', 499, '667062693_3_p021413_large.jpg', 'DESKTOP PC HP PAVILION TP01-0023NP AMD ATHLON 8GB RAM 512GB SSD VEGA 3', 'Com design compacto, processador AMD Athlon™ 3.4 GHz, 8GB de RAM, 512GB de memória SSD e pláca gráfica Radeon™ Vega 3. \r\nO dia a dia exige desempenho excecional e durabilidade comprovada. O PC Desktop HP Pavilion oferece elevado desempenho e a fiabilidade de uma marca de confiança que protege o que é mais importante para ti.', 1, 'AMD Athlon™ 300UGE 3.4GHz', '8GB', 'Radeon™ Vega 3', '570W', '512 GB SSD', '', 'Asus'),
(38, 5, 'DESKTOP PC HP M01-F1000NP', 499, '337350914_624288_3_xnl_f800e45c-bca8-4e7f-831a-1280656ae104_large.jpg', 'DESKTOP PC HP M01-F1000NP - CORE I3 8GB RAM 256GB', 'O HP M01-F1000np, com processador Intel® Core™ i3-10100 (3.6GHz), 8GB de memória RAM, 256GB de capacidade de armazenamento SSD e placa gráfica UHD Intel® 630, é um PC Desktop elegante, que combina o design e a tecnologia de uma marca em que podes confiar.', 1, 'Intel® Core™ i3-10100', '8GB', 'UHD Intel® 630', '750W', '256 GB SSD', '', 'Asus'),
(39, 5, 'DESKTOP PC HP M01-F1013NP', 649, '389448211_624288_3_xnl_f800e45c-bca8-4e7f-831a-1280656ae104_large.jpg', 'DESKTOP PC HP M01-F1013NP - CORE I5 8GB RAM 512GB RX 550 2GB', 'O HP M01-F1013np, com processador Intel® Core™ i5-10400F (2,9GHz), 8GB de memória RAM, 512GB de capacidade de armazenamento SSD e placa gráfica AMD Radeon™ RX 550 com 2Gb de memória dedicada, é um PC Desktop elegante, que combina o design e a tecnologia de uma marca em que podes confiar.', 1, 'Intel® Core™ i5-10400F', '8GB', 'AMD Radeon™ RX 550', '780W', '512 GB SSD', '', 'Asus'),
(40, 5, 'DESKTOP PC LENOVO IDEACENTRE 720', 599, '649885257_0193268435131-2_large.jpg', 'DESKTOP PC LENOVO IDEACENTRE 720-18APR-131 | AMD RYZEN 5-2400 | 8GB RAM | 2TB HDD', 'Computador desktop Lenovo IdeaCentre 720-18APR-131. Com 8GB de RAM, memória interna de 2TB, processador AMD RYZEN 5 de 3.60 GHz de velocidade e placa gráfica integrada AMD® Radeon Rx Vega 11.', 1, 'AMD® Ryzen 5 2400G 3.60 GHz', '8GB', 'AMD® Radeon Rx Vega 11', '500W', '2 TB HDD', '', 'Asus'),
(41, 5, 'DESKTOP PC ACER ASPIRE XC-330', 549, '276129651_ad21be84c2e95d5188a18b935d6339531de8465e_large.jpg', 'DESKTOP PC ACER ASPIRE XC-330 AMD A9 8GB RAM 1TB HDD GEFORCE 2GB', 'O desktop Aspire XC-330 integra um processador AMD A9 9420 3.0 GHz Dual Core, 8 GB de RAM, a capacidade de armazenamento HDD de 1 TB e leitor de DVD integrado.', 1, 'AMD A9 9420 3.0 GHz Dual Core', '8GB', 'NVIDIA GeForce GT 720 2GB', '780W', '1 TB HDD', '', 'Asus'),
(42, 5, 'DESKTOP PC HP PAVILION 590', 549, '772293922_81qis7k-c-l-sl1500_large.jpg', 'DESKTOP PC HP PAVILION 590-P0102NP RYZEN 5 8GB RAM 1TB DISCO', 'PC Desktop HP Pavilion 590-p0102np com design compacto, com processador AMD Ryzen 5 2400G (3.6 GHz). Potência e desempenho para uma experiência superior de entretenimento, jogos e multitarefas.\r\nExecuta todas as suas atividades de forma mais fácil e rápida do que antes, com o Desktop HP Pavilion 590-p0102np, equipado com o mais recente processador e gráficos avançados. Vê os teus vídeos, edita fotografias e liga-te à família e amigos, com a potência de que necessitas para concluir as tuas tarefas.', 1, 'AMD Ryzen™ 5 2400G (3.6 GHz)', '8GB', 'AMD Radeon™ Vega 11', '750W', '1 TB HDD', '', 'Asus'),
(43, 5, 'DESKTOP PC HP M01-F0008NP', 449, '859513632_624288_3_xnl_f800e45c-bca8-4e7f-831a-1280656ae104_large.jpg', 'DESKTOP PC HP M01-F0008NP AMD ATHLON 300UGE 8GB RAM 512GB SSD', 'O HP M01-F0008np, com processador AMD Athlon 300UGE (3.4GHz), 8GB de memória RAM, 512GB de capacidade de armazenamento SSD e placa gráfica AMD Radeon Vega 3, é um PC Desktop elegante, que combina o design e a tecnologia de uma marca em que podes confiar.', 1, 'AMD Athlon™ 300UGE', '8GB', 'AMD Radeon Vega 3', '750W', '512 GB SSD', '', 'Asus'),
(44, 6, 'GAMING DESKTOP', 2599, '439399514_Rog.png', 'GAMING DESKTOP PC ASUS ROG STRIX G35CZ-70D27PB1 - CORE I7 32GB 1TB SSD + 1TB HDD GEFORCE RTX 2070 SUPER 8GB', 'Com processador Intel® Core™ i7-10700KF, 32GB de Memoria RAM, 1TB de armazenamento SSD + 1TB de armazenamento HDD e placa gráfica com 8GB de memória dedicada GeForce RTX 2070 Super.', 1, 'Intel® Core™ i7-10700KF', '32GB', 'GeForce® RTX 2070 Super 8GB', '1200W', '1TB SSD', '1TB HDD', 'Asus Rog');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
