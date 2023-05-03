USE facil_test;
CREATE TABLE `tb_bancos` (
  `id` int  NOT NULL AUTO_INCREMENT,
  `codigo` varchar(255)   NOT NULL,
  `nome` varchar(255)   NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tb_bancos_codigo_unique` (`codigo`)
);

CREATE TABLE `tb_convenios` (
  `id` int  NOT NULL AUTO_INCREMENT,
  `codigo` varchar(255)   NOT NULL,
  `convenio` varchar(255)   NOT NULL,
  `verba` double(8,2) NOT NULL,
  `convenio_banco` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tb_convenios_codigo_unique` (`codigo`),
  KEY `tb_convenios_convenio_banco_foreign` (`convenio_banco`),
  CONSTRAINT `tb_convenios_convenio_banco_foreign` FOREIGN KEY (`convenio_banco`) REFERENCES `tb_bancos` (`id`)
);

CREATE TABLE `tb_convenio_servicos` (
  `id` int  NOT NULL AUTO_INCREMENT,
  `codigo` varchar(255)   NOT NULL,
  `convenio_id` int NOT NULL,
  `servico` varchar(255)   NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tb_convenio_servicos_codigo_unique` (`codigo`),
  KEY `tb_convenio_servicos_convenio_id_foreign` (`convenio_id`),
  CONSTRAINT `tb_convenio_servicos_convenio_id_foreign` FOREIGN KEY (`convenio_id`) REFERENCES `tb_convenios` (`id`)
) ;

CREATE TABLE `tb_contratos` (
  `id` int  NOT NULL AUTO_INCREMENT,
  `codigo` varchar(255)   NOT NULL,
  `prazo` int NOT NULL,
  `valor` double(8,2) NOT NULL,
  `data_inclusao` datetime NOT NULL,
  `convenio_servico` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tb_contratos_codigo_unique` (`codigo`),
  KEY `tb_contratos_convenio_servico_foreign` (`convenio_servico`),
  CONSTRAINT `tb_contratos_convenio_servico_foreign` FOREIGN KEY (`convenio_servico`) REFERENCES `tb_convenio_servicos` (`id`)
);

INSERT INTO `facil_test`.`tb_bancos` (`id`, `codigo`, `nome`) VALUES ('1', '260', 'Nubank');
INSERT INTO `facil_test`.`tb_convenios` (`id`, `codigo`, `convenio`, `verba`, `convenio_banco`) VALUES ('1', '777', 'Amil', '10000.25', '1');
INSERT INTO `facil_test`.`tb_convenio_servicos` (`id`, `codigo`, `convenio_id`, `servico`) VALUES ('1', '421', '1', 'Seguro saúde');
INSERT INTO `facil_test`.`tb_contratos` (`id`, `codigo`, `prazo`, `valor`, `data_inclusao`, `convenio_servico`) VALUES ('1', '789', '90', '1000.20', '2023-04-29 02:46:38', '1');
