-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 19/07/2012 às 20h28min
-- Versão do Servidor: 5.5.16
-- Versão do PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `lanchonet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bebida`
--

CREATE TABLE IF NOT EXISTS `bebida` (
  `id_bebida` int(11) NOT NULL AUTO_INCREMENT,
  `nome` char(20) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `validade` date DEFAULT NULL,
  PRIMARY KEY (`id_bebida`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `bebida`
--

INSERT INTO `bebida` (`id_bebida`, `nome`, `preco`, `validade`) VALUES
(1, 'Suco de Laranja', 5, '2013-01-01'),
(2, 'Suco de Cacau', 4, '2013-01-01'),
(3, 'Suco de Acerola', 3.5, '2013-01-01'),
(4, 'Suco de Umbu', 3.5, '2013-01-01'),
(5, 'Coca Cola', 2.5, '2013-01-01'),
(6, 'Coca Zero', 2.5, '2013-01-01'),
(7, 'Sprite', 2, '2013-01-01'),
(8, 'Fanta', 2, '2013-01-01'),
(9, 'Fanta Uva', 2, '2013-01-01'),
(10, 'Kuat', 2, '2013-01-01');

-- --------------------------------------------------------

--
-- Estrutura stand-in para visualizar `bebidapedido`
--
CREATE TABLE IF NOT EXISTS `bebidapedido` (
`nome_bebida` char(20)
,`preco_bebida` float
,`quantidade` int(11)
,`observacao` varchar(40)
,`id_pedido` int(11)
,`id_bebida` int(11)
);
-- --------------------------------------------------------

--
-- Estrutura da tabela `comida`
--

CREATE TABLE IF NOT EXISTS `comida` (
  `id_comida` int(11) NOT NULL AUTO_INCREMENT,
  `nome` char(20) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  PRIMARY KEY (`id_comida`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `comida`
--

INSERT INTO `comida` (`id_comida`, `nome`, `preco`) VALUES
(1, 'X-Burguer', 4.5),
(2, 'X-Egg', 5),
(3, 'X-Frango', 7),
(4, 'X-Calabresa', 7),
(5, 'X-File', 8),
(6, 'X-Picanha', 8),
(7, 'X-Bacon', 6),
(8, 'X-Bacon Egg', 7),
(9, 'X-Y', 8.5),
(10, 'Triplo-X', 10);

-- --------------------------------------------------------

--
-- Estrutura stand-in para visualizar `comidapedido`
--
CREATE TABLE IF NOT EXISTS `comidapedido` (
`nome_comida` char(20)
,`preco_comida` float
,`quantidade` int(11)
,`observacao` varchar(40)
,`id_pedido` int(11)
,`id_comida` int(11)
);
-- --------------------------------------------------------

--
-- Estrutura da tabela `comidatemingrediente`
--

CREATE TABLE IF NOT EXISTS `comidatemingrediente` (
  `id_comida` int(11) NOT NULL,
  `id_ingrediente` char(10) NOT NULL,
  PRIMARY KEY (`id_comida`,`id_ingrediente`),
  KEY `id_ingrediente` (`id_ingrediente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comidatemingrediente`
--

INSERT INTO `comidatemingrediente` (`id_comida`, `id_ingrediente`) VALUES
(1, 'alf'),
(2, 'alf'),
(3, 'alf'),
(4, 'alf'),
(5, 'alf'),
(6, 'alf'),
(7, 'alf'),
(8, 'alf'),
(9, 'alf'),
(10, 'alf'),
(7, 'bac'),
(8, 'bac'),
(4, 'cal'),
(9, 'cal'),
(10, 'cal'),
(5, 'fil'),
(3, 'fra'),
(10, 'fra'),
(1, 'ham'),
(2, 'ham'),
(7, 'ham'),
(8, 'ham'),
(9, 'ham'),
(10, 'ham'),
(1, 'mil'),
(2, 'mil'),
(3, 'mil'),
(4, 'mil'),
(5, 'mil'),
(6, 'mil'),
(7, 'mil'),
(8, 'mil'),
(9, 'mil'),
(10, 'mil'),
(2, 'ovo'),
(8, 'ovo'),
(6, 'pic'),
(3, 'pre'),
(4, 'pre'),
(5, 'pre'),
(6, 'pre'),
(9, 'pre'),
(10, 'pre'),
(1, 'que'),
(2, 'que'),
(3, 'que'),
(4, 'que'),
(5, 'que'),
(6, 'que'),
(7, 'que'),
(8, 'que'),
(9, 'que'),
(10, 'que'),
(1, 'tom'),
(2, 'tom'),
(3, 'tom'),
(4, 'tom'),
(5, 'tom'),
(6, 'tom'),
(7, 'tom'),
(8, 'tom'),
(9, 'tom'),
(10, 'tom');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingrediente`
--

CREATE TABLE IF NOT EXISTS `ingrediente` (
  `id_ingrediente` char(10) NOT NULL,
  `nome` char(10) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `validade` date DEFAULT NULL,
  PRIMARY KEY (`id_ingrediente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ingrediente`
--

INSERT INTO `ingrediente` (`id_ingrediente`, `nome`, `preco`, `validade`) VALUES
('alf', 'alface', 0.3, '2013-01-01'),
('bac', 'bacon', 1.5, '2013-01-01'),
('cal', 'calabresa', 1.5, '2013-01-01'),
('fil', 'file', 3, '2013-01-01'),
('fra', 'frango', 2, '2013-01-01'),
('ham', 'hamburguer', 0.5, '2013-01-01'),
('mil', 'milho', 2, '2013-01-01'),
('ovo', 'ovo', 0.1, '2013-01-01'),
('pic', 'picanha', 2, '2013-01-01'),
('pre', 'presunto', 1, '2013-01-01'),
('que', 'queijo', 1, '2013-01-01'),
('tom', 'tomate', 0.5, '2013-01-01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` text,
  `preco` float DEFAULT NULL,
  `data_pedido` date NOT NULL,
  PRIMARY KEY (`id_pedido`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidotembebida`
--

CREATE TABLE IF NOT EXISTS `pedidotembebida` (
  `id_pedido` int(11) NOT NULL,
  `id_bebida` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `observacao` varchar(40) DEFAULT NULL,
  KEY `id_pedido` (`id_pedido`),
  KEY `id_bebida` (`id_bebida`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidotemcomida`
--

CREATE TABLE IF NOT EXISTS `pedidotemcomida` (
  `id_pedido` int(11) NOT NULL,
  `id_comida` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `observacao` varchar(40) DEFAULT NULL,
  KEY `id_pedido` (`id_pedido`),
  KEY `id_comida` (`id_comida`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissao`
--

CREATE TABLE IF NOT EXISTS `permissao` (
  `id_permissao` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` char(40) DEFAULT NULL,
  PRIMARY KEY (`id_permissao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `permissao`
--

INSERT INTO `permissao` (`id_permissao`, `descricao`) VALUES
(1, 'Fazer Pedidos'),
(2, 'Admnistrador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `data_nasc` date NOT NULL,
  `login` varchar(15) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `endereco` varchar(40) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `profissao` varchar(15) NOT NULL,
  `sanduiche` varchar(12) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `data_nasc`, `login`, `senha`, `email`, `endereco`, `telefone`, `profissao`, `sanduiche`) VALUES
(7, 'Mateus Passos Soares Cardoso', '1990-11-05', 'Tetus', 'banana', 'mpsc.comp@gmail.com', 'Rua Júlio Brito', '7391110973', 'Estudante', 'picanha'),
(8, 'Caio', '1990-09-16', 'Caio', 'cachorro', 'caiosuzart@gmail.com', 'Rua Júlio Brito', '7391110973', 'Estudante', 'burguer'),
(9, 'Admnistrador', '2012-07-19', 'admin', '123456', 'admin@admin.com', 'admin', '12378990', 'admin', 'X Bacon');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuariofazpedido`
--

CREATE TABLE IF NOT EXISTS `usuariofazpedido` (
  `id_usuario` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  KEY `id_usuario` (`id_usuario`),
  KEY `id_pedido` (`id_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura stand-in para visualizar `usuariopedido`
--
CREATE TABLE IF NOT EXISTS `usuariopedido` (
`Pedido` int(11)
,`Usuario` int(11)
,`Descricao` text
,`Data` date
);
-- --------------------------------------------------------

--
-- Estrutura stand-in para visualizar `usuariopermissao`
--
CREATE TABLE IF NOT EXISTS `usuariopermissao` (
`usuario` int(11)
,`idpermissao` int(11)
,`descricao` char(40)
);
-- --------------------------------------------------------

--
-- Estrutura da tabela `usuariotempermissao`
--

CREATE TABLE IF NOT EXISTS `usuariotempermissao` (
  `id_usuario` int(11) NOT NULL,
  `id_permissao` int(11) NOT NULL,
  KEY `id_usuario` (`id_usuario`),
  KEY `id_permissao` (`id_permissao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuariotempermissao`
--

INSERT INTO `usuariotempermissao` (`id_usuario`, `id_permissao`) VALUES
(7, 1),
(8, 1),
(9, 2);

-- --------------------------------------------------------

--
-- Estrutura para visualizar `bebidapedido`
--
DROP TABLE IF EXISTS `bebidapedido`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bebidapedido` AS select `b`.`nome` AS `nome_bebida`,`b`.`preco` AS `preco_bebida`,`p`.`quantidade` AS `quantidade`,`p`.`observacao` AS `observacao`,`p`.`id_pedido` AS `id_pedido`,`b`.`id_bebida` AS `id_bebida` from (`bebida` `b` join `pedidotembebida` `p` on((`b`.`id_bebida` = `p`.`id_bebida`)));

-- --------------------------------------------------------

--
-- Estrutura para visualizar `comidapedido`
--
DROP TABLE IF EXISTS `comidapedido`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `comidapedido` AS select `c`.`nome` AS `nome_comida`,`c`.`preco` AS `preco_comida`,`p`.`quantidade` AS `quantidade`,`p`.`observacao` AS `observacao`,`p`.`id_pedido` AS `id_pedido`,`c`.`id_comida` AS `id_comida` from (`comida` `c` join `pedidotemcomida` `p` on((`c`.`id_comida` = `p`.`id_comida`)));

-- --------------------------------------------------------

--
-- Estrutura para visualizar `usuariopedido`
--
DROP TABLE IF EXISTS `usuariopedido`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuariopedido` AS select `p`.`id_pedido` AS `Pedido`,`u`.`id_usuario` AS `Usuario`,`p`.`descricao` AS `Descricao`,`p`.`data_pedido` AS `Data` from ((`usuario` `u` join `usuariofazpedido` on((`u`.`id_usuario` = `usuariofazpedido`.`id_usuario`))) join `pedido` `p` on((`usuariofazpedido`.`id_pedido` = `p`.`id_pedido`)));

-- --------------------------------------------------------

--
-- Estrutura para visualizar `usuariopermissao`
--
DROP TABLE IF EXISTS `usuariopermissao`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuariopermissao` AS select `u`.`id_usuario` AS `usuario`,`p`.`id_permissao` AS `idpermissao`,`p`.`descricao` AS `descricao` from ((`usuario` `u` join `usuariotempermissao` on((`u`.`id_usuario` = `usuariotempermissao`.`id_usuario`))) join `permissao` `p` on((`usuariotempermissao`.`id_permissao` = `p`.`id_permissao`)));

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `comidatemingrediente`
--
ALTER TABLE `comidatemingrediente`
  ADD CONSTRAINT `comidatemingrediente_ibfk_1` FOREIGN KEY (`id_comida`) REFERENCES `comida` (`id_comida`),
  ADD CONSTRAINT `comidatemingrediente_ibfk_2` FOREIGN KEY (`id_ingrediente`) REFERENCES `ingrediente` (`id_ingrediente`),
  ADD CONSTRAINT `FK_ComidaTemIngrediente_0` FOREIGN KEY (`id_comida`) REFERENCES `comida` (`id_comida`),
  ADD CONSTRAINT `FK_ComidaTemIngrediente_1` FOREIGN KEY (`id_ingrediente`) REFERENCES `ingrediente` (`id_ingrediente`);

--
-- Restrições para a tabela `pedidotembebida`
--
ALTER TABLE `pedidotembebida`
  ADD CONSTRAINT `pedidotembebida_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`),
  ADD CONSTRAINT `pedidotembebida_ibfk_2` FOREIGN KEY (`id_bebida`) REFERENCES `bebida` (`id_bebida`);

--
-- Restrições para a tabela `pedidotemcomida`
--
ALTER TABLE `pedidotemcomida`
  ADD CONSTRAINT `pedidotemcomida_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`),
  ADD CONSTRAINT `pedidotemcomida_ibfk_2` FOREIGN KEY (`id_comida`) REFERENCES `comida` (`id_comida`);

--
-- Restrições para a tabela `usuariofazpedido`
--
ALTER TABLE `usuariofazpedido`
  ADD CONSTRAINT `usuariofazpedido_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `usuariofazpedido_ibfk_2` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`);

--
-- Restrições para a tabela `usuariotempermissao`
--
ALTER TABLE `usuariotempermissao`
  ADD CONSTRAINT `usuariotempermissao_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `usuariotempermissao_ibfk_2` FOREIGN KEY (`id_permissao`) REFERENCES `permissao` (`id_permissao`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
