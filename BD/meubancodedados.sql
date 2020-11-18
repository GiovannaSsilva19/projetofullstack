CREATE SCHEMA `fseletro` ;
use `fseletro`;
CREATE TABLE `pedidos` (
`idpedidos` int NOT NULL AUTO_INCREMENT,
`nome_cliente` varchar(100) NOT NULL,
`endereco_cliente` varchar(100) NOT NULL,
`telefone_cliente` int DEFAULT NULL,
`nome_produto` varchar(50) NOT NULL,
`valor_unitario` decimal(15,2) NOT NULL,
`quantidade_produto` int NOT NULL,
`valor_total_pedido` decimal(15,2) NOT NULL,

PRIMARY KEY (`idpedidos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `fseletro`.`pedidos` (`nome_cliente`, `endereco_cliente`, `telefone_cliente`, `nome_produto`, `valor_unitario`, `quantidade_produto`, `valor_total_pedido`) VALUES ('Maria Aparecida', 'Av. dos Estados,258', '(11)5555-5555', 'Fritadeira Elétrica Airfryer Viva Philips Walita', 'R$999.90', '3', 'R$2999.7');
INSERT INTO `fseletro`.`pedidos` (`nome_cliente`, `endereco_cliente`, `telefone_cliente`, `nome_produto`, `valor_unitario`, `quantidade_produto`, `valor_total_pedido`) VALUES ('Joise', 'Rua Pires,425', '(11)8888-8888', 'Geladeira Esmaltec RCD34 Preto 276L 110V - 375L', 'R$1499.00', '1', 'R$1499.00');
INSERT INTO `fseletro`.`pedidos` (`nome_cliente`, `endereco_cliente`, `telefone_cliente`, `nome_produto`, `valor_unitario`, `quantidade_produto`, `valor_total_pedido`) VALUES ('Carlos', 'Praça Dom Bosco,778', '(11)9999-9999', 'Geladeira Electrolux 579L Duplex DM84X Inox', 'R$ 5199.00', '1', 'R$ 5199.00');


CREATE TABLE `produtos` (
`idprodutos` int NOT NULL AUTO_INCREMENT,
`nome_produto` varchar(50) NOT NULL,
`descricao_produto` varchar(100) NOT NULL,
`preco_produto` decimal(15,2) NOT NULL,
`imagem` varchar(100) NOT NULL,
PRIMARY KEY (`idprodutos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `fseletro`.`produtos` (`nome_produto`, `descricao_produto`, `preco_produto`, `imagem`) VALUES ('Geladeira', 'Geladeira Electrolux 579L Duplex DM84X Inox', 'R$ 5199.00', 'imagens/geladeira1.jpg');
INSERT INTO `fseletro`.`produtos` (`nome_produto`, `descricao_produto`, `preco_produto`, `imagem`) VALUES ('Geladeira', 'Geladeira Esmaltec RCD34 Preto 276L 110V - 375L', 'R$1499.00', 'imagens/geladeira3.jpg');
INSERT INTO `fseletro`.`produtos` (`nome_produto`, `descricao_produto`, `preco_produto`, `imagem`) VALUES ('Geladeira', 'Geladeira Brastemp Frost Free Duplex Evox - 375L BRM45 HKANA', 'R$2654.10', 'imagens/geladeira2.jpg');
INSERT INTO `fseletro`.`produtos` (`nome_produto`, `descricao_produto`, `preco_produto`, `imagem`) VALUES ('Fogão', 'Fogão cooktop 5 bocas a gas bivolt acendimento automático Braslar', 'R$389.90', 'imagens/fog%C3%A3o1.jpg');
INSERT INTO `fseletro`.`produtos` (`nome_produto`, `descricao_produto`, `preco_produto`, `imagem`) VALUES ('Fogão', 'Fogão 5 Bocas Consul Acendimento Automático', 'R$1561.47', 'imagens/fogao2.jpg');
INSERT INTO `fseletro`.`produtos` (`nome_produto`, `descricao_produto`, `preco_produto`, `imagem`) VALUES ('Micro-ondas ', 'Micro-ondas 20 Litros Consul com Porta Espelhada e Puxador', 'R$494.90', 'imagens/micro1.jpg');
INSERT INTO `fseletro`.`produtos` (`nome_produto`, `descricao_produto`, `preco_produto`, `imagem`) VALUES ('Micro-ondas ', 'Micro-ondas Consul- Branco 32L', 'R$ 611.00', 'imagens/micro2.jpg');
INSERT INTO `fseletro`.`produtos` (`nome_produto`, `descricao_produto`, `preco_produto`, `imagem`) VALUES ('Forno Elétrico', 'Forno Elétrico de Bancada Britânia 40L', 'R$ 333.90', 'imagens/micro1.jpg');
INSERT INTO `fseletro`.`produtos` (`nome_produto`, `descricao_produto`, `preco_produto`, `imagem`) VALUES ('Forno Elétrico', 'Forno Elétrico de Bancada Lenoxx 36L - Chef Red Gourmet', 'R$415.00', 'imagens/fornoeletrico2.jpg');
INSERT INTO `fseletro`.`produtos` (`nome_produto`, `descricao_produto`, `preco_produto`, `imagem`) VALUES ('Liquidificado', 'Liquidificador Mondial Turbo Power L-99 FB 2.2 Litros com Filtro 3 Velocidades', 'R$89.90', 'imagens/liqui1.jpg');
INSERT INTO `fseletro`.`produtos` (`nome_produto`, `descricao_produto`, `preco_produto`, `imagem`) VALUES ('Fritadeira Elétrica', 'Fritadeira Elétrica Airfryer Viva Philips Walita', 'R$999,90', 'imagens/frita.jpg');

CREATE TABLE `fseletro`.`mensagem` (
  `id` INT(11) NOT NULL,
  `nome` VARCHAR(80) NOT NULL,
  `email` VARCHAR(80) NOT NULL);

INSERT INTO `fseletro`.`mensagem` (`id`, `nome`, `email`) VALUES ('1', 'daiana ', 'daiana@gmail.com');
INSERT INTO `fseletro`.`mensagem` (`id`, `nome`, `email`) VALUES ('2', 'paulo', 'paulo@hotmail.com');
INSERT INTO `fseletro`.`mensagem` (`id`, `nome`, `email`) VALUES ('3', 'roberto', 'roberto@gmail.com');
