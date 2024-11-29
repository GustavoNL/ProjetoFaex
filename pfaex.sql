-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2024 às 01:12
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pfaex`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `register` int(30) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `students`
--

INSERT INTO `students` (`id`, `name`, `phone`, `email`, `register`, `course`, `year`) VALUES
(18, 'Lucas', '542365456', 'a@a', 2134565, 'engenharia', 2015),
(19, 'jessica', '69251', 'b@b', 234567, 'ads', 2143),
(20, 'Jucicleia', '42654565', 'd@d', 2134565, 'pedagogia', 2025),
(21, 'sophia', '845456121', 'e@e', 87654, 'psicologia', 2345),
(23, 'joege', '5461245', 'l@l', 123152, 'veterinaria', 2022),
(24, 'carlos', '123456', 'L@l', 13245, 'MEDICINA', 2025);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `password` varchar(60) NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `nivel`) VALUES
(7, 'Gustavo', 'gustavo.lopes@faex.edu.br', '4532345', '$2y$10$rTBwP.WL1OvMsSeh9gyESeSPsEY5XQvxIt4S7V30tvunB9LKyr.F6', 0),
(8, 'heuheu', 'gustavogame@gmail.com', '4532345', '$2y$10$j12T7aXj9GfTRYpGRS6WP.PCgZqz3Stv629Fn1U/7p6swWHQQusIe', 0),
(9, 'gus', 'a@a', '123456', '$2y$10$nMPxaSAqoK7bscNgREFLIOgcyj5yWBc59FhyE3bYervs6DK9kOZai', 0),
(10, 'htyefds', 'test@test', '342567', '$2y$10$zg516Se4zWoDveQYYjimxOnYHeGdYvp4dlZhzt3.qiCRLA8LpA9t6', 0),
(11, 'asdfgh', 'b@b', '23456', '$2y$10$hUd7U4bQ.0CSCGApY5ouy.KGaH8hpLqrp55R3GoJjUHy6W1JuMeoy', 0),
(12, 'sfdgh', 'c@c', '23456', '$2y$10$g8jWGeVmjCrvSNN7k3Rv5ufrzL3P8p6yVbXItgaQQkDC20M1wuHgS', 0),
(13, 'rogerio', 'x@x', '12265123651', '$2y$10$t7pjpx7c2fNekjY5ZipSXOncOamrzgIivgcY5KimQR0vJB6Uf03Sm', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
