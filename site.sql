-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 04-Jun-2018 às 16:02
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

DROP TABLE IF EXISTS `postagem`;
CREATE TABLE IF NOT EXISTS `postagem` (
  `post_titulo` varchar(200) NOT NULL,
  `post_imagem` varchar(200) NOT NULL,
  `post_texto` text NOT NULL,
  `post_cod` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`post_cod`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`post_titulo`, `post_imagem`, `post_texto`, `post_cod`) VALUES
('TÃ­tulo 2', 'Desert.jpg', 'TEXTO\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n2', 2),
('Boas vindas 2Âº Semestre de 2017', 'Boas vindas.png', 'Fonte (imagem): Faber-Castel\r\n\r\nGostaria de desejar boas vindas a todos. Ã‰ com muito prazer que caminharemos juntos esse semestre e espero que possa passar um pouco de conhecimento a vocÃªs e que possa aprender tambÃ©m.\r\n\r\nO aprendizado Ã© uma via de mÃ£o dupla, e a troca de experiÃªncias Ã© que nos faz aprender. Gosto dessa frase acima pois:â€œNinguÃ©m Ã© tÃ£o grande que nÃ£o possa aprender, nem tÃ£o pequeno que nÃ£o possa ensinarâ€™ (ESOPO). Outra frase muito bacana Ã© do Mario Sergio Cortella que diz que conhecimento serve para encantar as pessoas e nÃ£o para humilhÃ¡-las.\r\n\r\nPortanto, quero dizer que estarei aqui para o que puder ajudar nesse crescimento de vocÃªs, e espero crescer com as experiÃªncias trocadas.\r\n\r\nAcessem o Moodle, bom inÃ­cio de semestre e boa sorte.\r\n\r\nUm abraÃ§os a todos.\r\n\r\n=D', 3),
('Palestra / Bate Papo Sobre Tecnologia da informaÃ§Ã£o no Workshop ProfissÃµes no COC Jaboticabal', 'Palestra.jpg', 'Palestra / Bate Papo Sobre Tecnologia da informaÃ§Ã£o no Workshop ProfissÃµes no COC JaboticabalPalestra / Bate Papo Sobre Tecnologia da informaÃ§Ã£o no Workshop ProfissÃµes no COC JaboticabalPalestra / Bate Papo Sobre Tecnologia da informaÃ§Ã£o no Workshop ProfissÃµes no COC JaboticabalPalestra / Bate Papo Sobre Tecnologia da informaÃ§Ã£o no Workshop ProfissÃµes no COC JaboticabalPalestra / Bate Papo Sobre Tecnologia da informaÃ§Ã£o no Workshop ProfissÃµes no COC JaboticabalPalestra / Bate Papo Sobre Tecnologia da informaÃ§Ã£o no Workshop ProfissÃµes no COC JaboticabalPalestra / Bate Papo Sobre Tecnologia da informaÃ§Ã£o no Workshop ProfissÃµes no COC JaboticabalPalestra / Bate Papo Sobre Tecnologia da informaÃ§Ã£o no Workshop ProfissÃµes no COC JaboticabalPalestra / Bate Papo Sobre Tecnologia da informaÃ§Ã£o no Workshop ProfissÃµes no COC JaboticabalPalestra / Bate Papo Sobre Tecnologia da informaÃ§Ã£o no Workshop ProfissÃµes no COC JaboticabalPalestra / Bate Papo Sobre Tecnologia da informaÃ§Ã£o no Workshop ProfissÃµes no COC JaboticabalPalestra / Bate Papo Sobre Tecnologia da informaÃ§Ã£o no Workshop ProfissÃµes no COC Jaboticabal', 6),
('Quais as novidades da Google? - Google I/O', 'google.png', '   ComeÃ§a em 08/05 a conferÃªncia anual de programadores Google I/O 2018, no Shoreline Amphitheatre.  Durante 3 dias irÃ£o ser certamente apresentadas vÃ¡rias novidades, especialmente ao nÃ­vel do Android P, Google Home, Wear OS e Google Assistant.\r\n\r\n   Para os mais desatentos, ou simplesmente para os que nÃ£o acompanham afincadamente o mundo das tecnologias, a Google I/O Ã© uma conferÃªncia de programadores organizada anualmente pela Google. O objetivo Ã© mostrar aos programadores as novas ferramentas que foram criadas, orientando-os a desenvolver e melhorar o seu software. Para alÃ©m dos variados workshops organizados pela Google, esta aproveita o evento para apresentar as novidades do vasto mundo Google.\r\n\r\n   O Google I/O 2017 terÃ¡ lugar de 8 a 10 de maio no Shoreline Amphitheatre em Mountain View, CalifÃ³rnia. Quem pretender pode acompanhar todas as novidades online.', 7),
('Como o processo de transformaÃ§Ã£o digital vai impactar o crescimento da tecnologia SD-Wan', 'sd-wan.png', 'O mundo corporativo estÃ¡ cada dia mais globalizado e conectado. Para garantir a eficiÃªncia de sua operaÃ§Ã£o, uma empresa que deseja atuar entre os principais players do mercado, precisa estar apta a processar arquivos armazenados em unidades distribuÃ­das por diversos pontos do mundo e permitir o acesso e troca de informaÃ§Ãµes, remotamente e em tempo real. Por conta desta necessidade, cada vez mais, as empresas estÃ£o investindo fortemente em ferramentas de TransformaÃ§Ã£o Digital (DX) e 3rd Plataform Technologies, como Cloud, Big Data e Analytics, Mobilidade e Social Business.\r\n\r\nPorÃ©m, para dar suporte ao investimento nestas tecnologias, Ã© essencial desenvolver uma boa estratÃ©gia de rede, que permita um acesso rÃ¡pido, seguro e eficaz a essas informaÃ§Ãµes, que podem ser sigilosas e cruciais para o sucesso do negÃ³cio. A escolha do tipo de rede que serÃ¡ usada deve ser pautada em quatro pontos primordiais: custo-benefÃ­cio, seguranÃ§a, privacidade e controle.\r\n\r\nNeste cenÃ¡rio, vemos uma tendÃªncia ganhando bastante forÃ§a no mercado internacional, a tecnologia SD-Wan. Conhecida como uma excelente alternativa para baratear o custo e oferecer mais seguranÃ§a e controle da rede, a tecnologia SD-Wan (Software Defined Wan) promete dominar o Brasil nos prÃ³ximos anos. Segundo previsÃ£o do IDC â€“ International Data Corporation (lÃ­der mundial em inteligÃªncia de mercado), estima-se que o mercado SD-Wan deve alcanÃ§ar US$ 8 bilhÃµes em 2021, uma expectativa que revela o promissor potencial mundial desta ferramenta.\r\n\r\nFonte: www.administradores.com.br/noticias\r\n', 9),
('NASA aprimora tecnologia para tornar Marte habitÃ¡vel', 'marte.jpg', 'Um foguete Atlas decolou da CalifÃ³rnia em maio para Marte, a 55 milhÃµes de quilÃ´metros da Terra, para a missÃ£o InSight. O foguete leva a sonda InSight Lander e dois pequenos veÃ­culos, em formato cÃºbico, chamados de MarCO (Mars Cube One). A sonda e os veÃ­culos pousarÃ£o na PlanÃ­cie Elysium, no planeta vermelho, no final de novembro. Pelo ineditismo, serÃ¡ um show de tecnologia da NASA (AgÃªncia Espacial Norte-Americana). Mas a missÃ£o seguinte, em 2020, ainda serÃ¡ mais impressionante: ela terÃ¡ um helicÃ³ptero para voar em Marte.\r\n\r\nA sonda InSight Lander, por exemplo, Ã© algo completamente novo. Ela tem ferramentas especiais para perfurar o solo e estudar a crosta, o manto e o nÃºcleo do planeta. A NASA acredita que, com a missÃ£o atual, aprenderÃ¡ bastante sobre a formaÃ§Ã£o de Marte, hÃ¡ 4,5 bilhÃµes de anos. AtÃ© agora sabemos alguma coisa sobre a superfÃ­cie de Marte, mas nada sobre seu interior.\r\n\r\nFonte: www.vivotech.com.br', 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `resto`
--

DROP TABLE IF EXISTS `resto`;
CREATE TABLE IF NOT EXISTS `resto` (
  `link_facebook` varchar(255) DEFAULT NULL,
  `link_twitter` varchar(255) DEFAULT NULL,
  `link_google` varchar(255) DEFAULT NULL,
  `img_cod` int(11) NOT NULL AUTO_INCREMENT,
  `img_logo` varchar(255) NOT NULL,
  PRIMARY KEY (`img_cod`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `resto`
--

INSERT INTO `resto` (`link_facebook`, `link_twitter`, `link_google`, `img_cod`, `img_logo`) VALUES
(NULL, NULL, NULL, 1, ''),
(NULL, NULL, NULL, 2, ''),
(NULL, NULL, NULL, 3, ''),
(NULL, NULL, NULL, 4, 'logo.png'),
(NULL, NULL, NULL, 5, 'arduino.png'),
(NULL, NULL, NULL, 6, 'favicon.ico'),
(NULL, NULL, NULL, 7, 'logo.png'),
(NULL, NULL, NULL, 8, 'arduino.png'),
(NULL, NULL, NULL, 9, 'favicon.ico'),
(NULL, NULL, NULL, 10, 'logo.png'),
(NULL, NULL, NULL, 11, 'favicon.ico'),
(NULL, NULL, NULL, 12, 'logo.png'),
(NULL, NULL, NULL, 13, 'arduino.png'),
(NULL, NULL, NULL, 14, 'favicon.ico'),
(NULL, NULL, NULL, 15, 'logo.png'),
(NULL, NULL, NULL, 16, 'fundomenu.jpg'),
(NULL, NULL, NULL, 17, 'etec.png'),
(NULL, NULL, NULL, 18, 'arduino.png'),
(NULL, NULL, NULL, 19, 'logo.png'),
(NULL, NULL, NULL, 20, 'logoatual.jpg'),
(NULL, NULL, NULL, 21, 'logo.png'),
(NULL, NULL, NULL, 22, 'icon-facebook-hover.png'),
(NULL, NULL, NULL, 23, 'slide 1.jpg'),
(NULL, NULL, NULL, 24, 'logo.png'),
(NULL, NULL, NULL, 25, 'fundoblue.jpg'),
(NULL, NULL, NULL, 26, 'arduino.png'),
(NULL, NULL, NULL, 27, 'etec.png'),
(NULL, NULL, NULL, 28, 'arduino.png'),
(NULL, NULL, NULL, 29, 'icon-facebook-hover.png'),
(NULL, NULL, NULL, 30, 'arduino.png'),
(NULL, NULL, NULL, 31, 'fundoLoja.jpg'),
(NULL, NULL, NULL, 32, 'compumed.jpg'),
(NULL, NULL, NULL, 33, 'logo.png'),
(NULL, NULL, NULL, 34, 'logoatual.jpg'),
(NULL, NULL, NULL, 35, 'logo.png'),
(NULL, NULL, NULL, 36, 'fundoLoja.jpg'),
(NULL, NULL, NULL, 37, ''),
(NULL, NULL, NULL, 38, ''),
(NULL, NULL, NULL, 39, ''),
(NULL, NULL, NULL, 40, ''),
(NULL, NULL, NULL, 41, ''),
(NULL, NULL, NULL, 42, ''),
(NULL, NULL, NULL, 43, ''),
(NULL, NULL, NULL, 44, ''),
(NULL, NULL, NULL, 45, ''),
(NULL, NULL, NULL, 46, ''),
(NULL, NULL, NULL, 47, 'fundoLoja.jpg'),
(NULL, NULL, NULL, 48, 'etec.png'),
(NULL, NULL, NULL, 49, 'compumed.jpg'),
(NULL, NULL, NULL, 50, 'logoatual.jpg'),
(NULL, NULL, NULL, 51, 'logo.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
