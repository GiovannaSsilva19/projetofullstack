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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Tabela para identificar os pedidos dos clientes do fs eletro';

UPDATE `fseletro`.`pedidos` SET `telefone_cliente` = '(11)5555-6666', `valor_unitario` = 'R$ 611.00', `quantidade_produto` = '2', `valor_total_pedido` = 'R$1222' WHERE (`idpedidos` = '1');
UPDATE `fseletro`.`pedidos` SET `telefone_cliente` = '(11)9999-8888', `valor_unitario` = 'R$ 415.00', `quantidade_produto` = '1', `valor_total_pedido` = 'R$415.00' WHERE (`idpedidos` = '2');
UPDATE `fseletro`.`pedidos` SET `telefone_cliente` = '(11)6666-6060', `valor_unitario` = 'R$ 5.199.00', `quantidade_produto` = '1', `valor_total_pedido` = 'R$5199.00' WHERE (`idpedidos` = '3');

CREATE TABLE `produtos` (
`idprodutos` int NOT NULL AUTO_INCREMENT,
`nome_produto` varchar(50) NOT NULL,
`descricao_produto` varchar(100) NOT NULL,
`preco_produto` decimal(15,2) NOT NULL,
`imagem` varchar(100) NOT NULL,
PRIMARY KEY (`idprodutos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Tabela para cadastrar os produtos do cliente fs eletro';

UPDATE `fseletro`.`produtos` SET `preco_produto` = 'R$ 5199.00' WHERE (`idprodutos` = '1');
UPDATE `fseletro`.`produtos` SET `preco_produto` = 'R$1499.00' WHERE (`idprodutos` = '2');
UPDATE `fseletro`.`produtos` SET `preco_produto` = 'R$2654.10' WHERE (`idprodutos` = '3');
UPDATE `fseletro`.`produtos` SET `preco_produto` = 'R$389.90' WHERE (`idprodutos` = '4');
UPDATE `fseletro`.`produtos` SET `preco_produto` = 'R$1561.47' WHERE (`idprodutos` = '5');
UPDATE `fseletro`.`produtos` SET `preco_produto` = 'R$494.90' WHERE (`idprodutos` = '6');
UPDATE `fseletro`.`produtos` SET `preco_produto` = 'R$ 611.00' WHERE (`idprodutos` = '7');
UPDATE `fseletro`.`produtos` SET `preco_produto` = 'R$ 333.90' WHERE (`idprodutos` = '8');
UPDATE `fseletro`.`produtos` SET `preco_produto` = 'R$415.00' WHERE (`idprodutos` = '9');
UPDATE `fseletro`.`produtos` SET `preco_produto` = 'R$89.90' WHERE (`idprodutos` = '10');
UPDATE `fseletro`.`produtos` SET `preco_produto` = 'R$999.90' WHERE (`idprodutos` = '11'); 