-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Dez-2022 às 21:19
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `github`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `commits`
--

CREATE TABLE `commits` (
  `id` int(11) NOT NULL,
  `chave` varchar(250) NOT NULL,
  `loginUser` varchar(100) NOT NULL,
  `repositorio` varchar(100) NOT NULL,
  `data_commit` date NOT NULL,
  `mensagem` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `commits`
--

INSERT INTO `commits` (`id`, `chave`, `loginUser`, `repositorio`, `data_commit`, `mensagem`, `updated_at`, `created_at`) VALUES
(48, '63786e2e68aec33da38e2d108445225cc965bce4', 'thyago666', 'backcrud-laravel-', '2022-12-08', 'upload do banco', '2022-12-08 18:25:11', '2022-12-14 18:25:11'),
(49, '6185f9c924c60e2902bf56ce50dfe1db1dbc8d69', 'thyago666', 'backcrud-laravel-', '2021-11-24', 'primeiro commit', '2022-12-14 18:25:11', '2022-12-14 18:25:11'),
(50, 'd8b9a154ad3d2582c4af4304f4a181b72d2133bc', 'thyago666', 'calculo_valores-laravel-', '2021-12-25', 'reparo no modulo de lancamento', '2022-12-14 18:25:11', '2022-12-14 18:25:11'),
(51, 'fc7473aac477ef2dee764bf7851901f10452a76e', 'thyago666', 'calculo_valores-laravel-', '2022-12-06', 'subindo modulo de lancamentos', '2022-12-14 18:25:11', '2022-12-14 18:25:11'),
(52, '1ea3b6183abe3c80b4037b8a14e49725cf640918', 'thyago666', 'calculo_valores-laravel-', '2021-11-24', 'primeiro upload', '2022-12-14 18:25:11', '2022-12-14 18:25:11'),
(53, '6098651ddda1303c0c6ed531190be5932c00e03e', 'thyago666', 'cursoLaravelVue', '2021-06-16', 'primeiro commit', '2022-12-14 18:25:12', '2022-12-14 18:25:12'),
(54, 'fa7fef7016cef1df61cc2252952e0d2b80e0fd6a', 'thyago666', 'ecommerce-laravel-', '2021-03-17', 'arrumei o campo admin da tabela user', '2022-12-14 18:25:12', '2022-12-14 18:25:12'),
(55, '27138037134c63c9b7b8a11f3cd391e659bb1ca6', 'thyago666', 'ecommerce-laravel-', '2021-03-17', 'arrumei as imagens do detalhe', '2022-12-14 18:25:12', '2022-12-14 18:25:12'),
(56, '31f16de5f9867e65767e6f895cc098927d40d999', 'thyago666', 'ecommerce-laravel-', '2021-03-17', 'commit oficial', '2022-12-14 18:25:12', '2022-12-14 18:25:12'),
(57, '22bdb3d9897748176616af50d16bbd62e9d33ff8', 'thyago666', 'frontcrud-vuejs-', '2021-11-24', 'primeiro commit', '2022-12-14 18:25:12', '2022-12-14 18:25:12'),
(58, 'fdb58ec7bb70944519f6d0e8fc77296fe0d80700', 'thyago666', 'teste_jukebox', '2021-11-25', 'primeiro commit', '2022-12-14 18:25:13', '2022-12-14 18:25:13'),
(59, '86803e49df6b815c09af744652f1ef2d379f5301', 'thyago666', 'teste_reportei', '2022-12-14', 'Subindo oprojeto todo', '2022-12-14 20:12:59', '2022-12-14 20:12:59');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `commits`
--
ALTER TABLE `commits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `commits`
--
ALTER TABLE `commits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
