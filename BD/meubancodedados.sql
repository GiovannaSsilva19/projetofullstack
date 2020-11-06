CREATE SCHEMA `fseletro` ;
use `fseletro`;
CREATE TABLE `pedidos` (
`idpedidos` int NOT NULL AUTO_INCREMENT,
`nome_cliente` varchar(100) NOT NULL,
`endereco_cliente` varchar(100) NOT NULL,
`telefone_cliente` varchar(50) NOT NULL,
`nome_produto` varchar(50) NOT NULL,
`valor_unitario` decimal(15,2) NOT NULL,
`quantidade_produto` int NOT NULL,
`valor_total_pedido` decimal(15,2) NOT NULL,
PRIMARY KEY (`idpedidos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `fseletro`.`pedidos` (`nome_cliente`, `endereco_cliente`, `telefone_cliente`, `nome_produto`, `valor_unitario`, `quantidade_produto`, `valor_total_pedido`) VALUES ('Maria Aparecida', 'Av. dos Estados,258', '115555-5555', 'Fritadeira Elétrica Airfryer Viva Philips Walita', '999.90', '3', '2999.7');
INSERT INTO `fseletro`.`pedidos` (`nome_cliente`, `endereco_cliente`, `telefone_cliente`, `nome_produto`, `valor_unitario`, `quantidade_produto`, `valor_total_pedido`) VALUES ('Joise', 'Rua Pires,425', '118888-8888', 'Geladeira Esmaltec RCD34 Preto 276L 110V - 375L', '1499.00', '1', '1499.00');
INSERT INTO `fseletro`.`pedidos` (`nome_cliente`, `endereco_cliente`, `telefone_cliente`, `nome_produto`, `valor_unitario`, `quantidade_produto`, `valor_total_pedido`) VALUES ('Carlos', 'Praça Dom Bosco,778', '119999-9999', 'Geladeira Electrolux 579L Duplex DM84X Inox', '5199.00', '1', '5199.00');


CREATE TABLE `produtos` (
`idprodutos` int NOT NULL AUTO_INCREMENT,
`nome_produto` varchar(50) NOT NULL,
`descricao_produto` varchar(100) NOT NULL,
`preco_produto` decimal(15,2) NOT NULL,
`imagem` varchar(100) NOT NULL,
PRIMARY KEY (`idprodutos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `fseletro`.`produtos` (`nome_produto`, `descricao_produto`, `preco_produto`, `imagem`) VALUES ('Geladeira', 'Geladeira Electrolux 579L Duplex DM84X Inox', '5199.00', 'imagens/geladeira1.jpg');
INSERT INTO `fseletro`.`produtos` (`nome_produto`, `descricao_produto`, `preco_produto`, `imagem`) VALUES ('Geladeira', 'Geladeira Esmaltec RCD34 Preto 276L 110V - 375L', '1499.00', 'imagens/geladeira3.jpg');
INSERT INTO `fseletro`.`produtos` (`nome_produto`, `descricao_produto`, `preco_produto`, `imagem`) VALUES ('Geladeira', 'Geladeira Brastemp Frost Free Duplex Evox - 375L BRM45 HKANA', '2654.10', 'imagens/geladeira2.jpg');
INSERT INTO `fseletro`.`produtos` (`nome_produto`, `descricao_produto`, `preco_produto`, `imagem`) VALUES ('Fogão', 'Fogão cooktop 5 bocas a gas bivolt acendimento automático Braslar', '389.90', 'imagens/fog%C3%A3o1.jpg');
INSERT INTO `fseletro`.`produtos` (`nome_produto`, `descricao_produto`, `preco_produto`, `imagem`) VALUES ('Fogão', 'Fogão 5 Bocas Consul Acendimento Automático', '1561.47', 'imagens/fogao2.jpg');
INSERT INTO `fseletro`.`produtos` (`nome_produto`, `descricao_produto`, `preco_produto`, `imagem`) VALUES ('Micro-ondas ', 'Micro-ondas 20 Litros Consul com Porta Espelhada e Puxador', '494.90', 'imagens/micro1.jpg');
INSERT INTO `fseletro`.`produtos` (`nome_produto`, `descricao_produto`, `preco_produto`, `imagem`) VALUES ('Micro-ondas ', 'Micro-ondas Consul- Branco 32L', '611.00', 'imagens/micro2.jpg');
INSERT INTO `fseletro`.`produtos` (`nome_produto`, `descricao_produto`, `preco_produto`, `imagem`) VALUES ('Forno Elétrico', 'Forno Elétrico de Bancada Britânia 40L', '333.90', 'imagens/micro1.jpg');
INSERT INTO `fseletro`.`produtos` (`nome_produto`, `descricao_produto`, `preco_produto`, `imagem`) VALUES ('Forno Elétrico', 'Forno Elétrico de Bancada Lenoxx 36L - Chef Red Gourmet', '415.00', 'imagens/fornoeletrico2.jpg');
INSERT INTO `fseletro`.`produtos` (`nome_produto`, `descricao_produto`, `preco_produto`, `imagem`) VALUES ('Liquidificado', 'Liquidificador Mondial Turbo Power L-99 FB 2.2 Litros com Filtro 3 Velocidades', '89.90', 'imagens/liqui1.jpg');
INSERT INTO `fseletro`.`produtos` (`nome_produto`, `descricao_produto`, `preco_produto`, `imagem`) VALUES ('Fritadeira Elétrica', 'Fritadeira Elétrica Airfryer Viva Philips Walita', '999.90', 'imagens/frita.jpg');

CREATE TABLE `comentarios` (
  `idcomentarios` INT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NULL,
  `msg` VARCHAR(300) NULL,
  `data` DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY (`idcomentarios`, `data`))
ENGINE = InnoDB;

