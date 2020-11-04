<?php
    # Conexão
    $link = mysqli_connect('localhost','root', '', 'fseletro');
    # Verificando a conexão
    if (!$link) {
        die ("Falha na conexão com o BD". mysqli_connect_erro());
    }   else {
        echo "Sucesso ao se conectar no banco de dados";
    }
    
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gsouza Eletro </title>
    <link rel="stylesheet" href="css/estilo.css">
    <script src="./js/funçoes.js"></script>
    
</head>
<body>
 <!--Menu-->
 <div class="menu">
    <a href="index.php"><img src="./imagens/logo.jpg" alt="GsouzaEletro"></a>        
    <a class="links"  href="produtos.php">Produtos</a>
    <a class="links"  href="loja.php">Lojas</a>
    <a class="links"  href="contato.php">Contato</a>
</div>     
<!--Fim Menu-->

     <header>
        <h1 class="h1_produtos">Produtos</h1><hr>
     </header>
    
    <section class="categorias"> 
        <h3>Categorias</h3>
            <ul>
                <li onclick="exibir_todos()">Todos(11)</li>
                <li onclick="exibir_categoria('Geladeira')">Geladeira(3)</li>
                <li onclick="exibir_categoria('Fogão')">Fogões(2)</li>
                <li onclick="exibir_categoria('Microondas')">Microondas(2)</li>
                <li onclick="exibir_categoria('Fornoeletrico')">Forno Elétrico(2)</li>
                <li onclick="exibir_categoria('Liquidificador')">Liquidificador(1)</li>
                <li onclick="exibir_categoria('Fritadeiraeletrica')">Fritadeita Elétrica(1)</li>
            </ul>
            
    </section>

    <section class="produtos">
        <div class="boxProduto"id="Geladeira" style="display:inline-block;">
                <img src="imagens/geladeira1.jpg" width="120px" onclick="destaque(this)">
                <p class="p1"> Geladeira Electrolux 579L Duplex DM84X Inox </p><hr>
                <p class="preçoAntigo"> R$5.609,90  </p>
                <p class="preçoAtual">R$ 5.199,00</p>
                
        </div>


        <div class="boxProduto"id="Geladeira"style="display:inline-block;">
            <img src="imagens/geladeira2.jpg"id="Geladeira"width="120px" onclick="destaque(this)">
            <p class="p1"> Geladeira Brastemp Frost Free Duplex Evox - 375L BRM45 HKANA </p><hr>
            <p class="preçoAntigo">R$3.299,00</p>
            <p class="preçoAtual">R$2.654,10</p>
        </div>


        <div class="boxProduto"id="Geladeira" style="display:inline-block;">
            <img src="imagens/geladeira3.jpg"width="120px" onclick="destaque(this)">
            <p class="p1"> Geladeira Esmaltec RCD34 Preto 276L 110V - 375L</p><hr>
            <p class="preçoAntigo">R$1.765,56</p>
            <p class="preçoAtual">R$1.499,00</p>
        </div>


        <div class="boxProduto" id="Fogão" style="display:inline-block;">
            <img src="imagens/fogão1.jpg" width="120px" onclick="destaque(this)">
            <p class="p1">Fogão cooktop 5 bocas a gas bivolt acendimento automático Braslar</p><hr>
            <p class="preçoAntigo">R$429,99</p>
            <p class="preçoAtual">R$389,90</p>
            <hr>
        </div>

         
        <div class="boxProduto"id="Fogão" style="display:inline-block;">
            <img src="imagens/fogao2.jpg" width="120px" onclick="destaque(this)">
            <p class="p1">Fogão 5 Bocas Consul Acendimento Automático</p><hr>
            <p class="preçoAntigo">R$ 1.979,00</p>
            <p class="preçoAtual">R$ 1.561,47</p>
        </div>
        

        <div class="boxProduto"id="Microondas" style="display:inline-block;">
            <img src="imagens/micro1.jpg" width="120px" onclick="destaque(this)">
            <p class="p1"> Micro-ondas 20 Litros Consul com Porta Espelhada e Puxador </p><hr>
            <p class="preçoAntigo">R$ 504,90</p>
            <p class="preçoAtual">R$ 494,90</p>
        </div>

        <div class="boxProduto"id="Microondas" style="display:inline-block;">
            <img src="imagens/micro2.jpg" width="120px" onclick="destaque(this)">
            <p class="p1"> Micro-ondas Consul- Branco 32L </p><hr>
            <p class="preçoAntigo">R$ 699,00</p>
            <p class="preçoAtual">R$ 611,00</p>
        </div>

        <div class="boxProduto"id="Fornoeletrico"style="display:inline-block;" >
            <img src="imagens/fornoeletrico.jpg" width="120px" onclick="destaque(this)">
            <p class="p1"> Forno Elétrico de Bancada Britânia 40L</p><hr>
            <p class="preçoAntigo">R$599,00</p>
            <p class="preçoAtual">R$ 333,90</p>
        </div>

        <div class="boxProduto"id="Fornoeletrico"style="display:inline-block;">
            <img src="imagens/fornoeletrico2.jpg"width="120px" onclick="destaque(this)" >
            <p class="p1">Forno Elétrico de Bancada Lenoxx 36L - Chef Red Gourmet </p><hr>
            <p class="preçoAntigo">R$ 559,90</p>
            <p class="preçoAtual">R$ 415,00</p>
        </div>

        <div class="boxProduto"id="Liquidificador" style="display:inline-block;">
            <img src="imagens/liqui1.jpg" width="120px" onclick="destaque(this)">
            <p class="p1"> Liquidificador Mondial Turbo Power L-99 FB 2.2 Litros com Filtro 3 Velocidades  </p><hr>
            <p class="preçoAntigo">R$ 99,90</p>
            <p class="preçoAtual">R$89,90</p>
        </div>


        <div class="boxProduto"id="Fritadeiraeletrica" style="display:inline-block;">
            <img src="imagens/frita.jpg" width="120px"onclick="destaque(this)">
            <p class="p1">Fritadeira Elétrica Airfryer Viva Philips Walita </p><hr>
            <p class="preçoAntigo">R$1.128,49</p>
            <p class="preçoAtual">R$999,90</p>
        </div>


    </section>
  
    <br><br><br><br>
    
    <!--Cabeçalho-->
    <footer>
        <h4 class="h4pagamento">Formas de Pagamento</h4>
        <img class="imgpagamento"  src="imagens/forma de pagamento.jpg" alt="Formas de Pagamento">
        <p class="final"> &copy;RecodePro 2020</p>
    </footer>
    
    <!--Fim Cabeçalho-->
</body>
</html>