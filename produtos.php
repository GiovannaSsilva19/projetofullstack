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

<?php

   $sql="select * from produtos";
   $result= $conn->query($sql);

   if($result->num_rows > 0){
    
      while($rows = $result-> fetch_assoc)()){
         echo $rows["categoria"];
?>   
        <div class="boxProduto"id="Geladeira<?php echo $rows["categoria"];?> style="display:inline-block;">
                <img src="<?php echo $rows["imagem"];?>" width="120px" onclick="destaque(this)">
                <div class="descrição"><?php echo $rows["descrição"];?></div>
                <hr>
                <div class="preçoAntigo"><strike>R$ <?php echo $rows["preco"];?><strike></div>
                <div class="preçoAtual">R$<?php echo $rows["preco_venda"]; ?></div>
                
        </div>

 <?php    
       }   
    } else {
       echo "Nenhum produto cadastrado!";
    }

?>

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