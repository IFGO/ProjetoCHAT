--
-- detÃ©m (Interromper) as entradas de bate-papo individuais
--

CREATE TABLE `Bate Papo` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nome` varchar(16) NOT NULL,
   --´senha´ int(10) NOT NULL,
  `e-mail` varchar(32) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `data` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`),
  KEY `data` (`data`)
);

-- --------------------------------------------------------


-- estamos armazenando os participantes do bate-papo.


CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nome` varchar(16) NOT NULL,
  ´senha´ int(10) NOT NULL,
  `e-mail` varchar(32) NOT NULL,
  `usuarios` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `nome` (`nome`),
  KEY `usuarios` (`usuarios`)
) ;

