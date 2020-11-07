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

<?php
        $servername = "localhost";
        $username = "root";
        $passoword = "";
        $database = "fseletro";

        $conn = mysqli_connect($servername,$username,$passoword, $database);
        
        // if (! $conn){
        //     die("deu ruim". mysqli_connect_error());
        // }

       





        ?>




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

    <section class="sectionprodutos">

<?php

$sql = "select * from produtosfs";
$result = $conn->query($sql);

if($result->num_rows >0){
    while($rows = $result ->fetch_assoc()){            


 ?>   

        <div class="divprodutos boxprodutos"  style="display: block;">
            <img class="imgproduto" id="imgproduto1"  src="<?php  echo $rows["nomeimg"]; ?>" alt="" onclick="destaque(this) />
            </br>
            <p class= "nomeproduto"> <?php  echo $rows["nome"]; ?> </p>
            <hr>
            <p class="valorproduto"> <?php  echo $rows["preço"]; ?> </p>
            <p class="valoratual"> <?php  echo $rows["precoatual"]; ?> </p>
        </div>

        
        <?php
           }
       }else{
           echo "sme produto";     
       }

       
       ?>  
       

    </section>
        
    
    <!--Fomas de pagamento-->
    <footer>
        <h4 class="h4pagamento">Formas de Pagamento</h4>
        <img class="imgpagamento"  src="imagens/forma de pagamento.jpg" alt="Formas de Pagamento">
        <p class="final"> &copy;RecodePro 2020</p>
    </footer>
    
    <!--Fim Cabeçalho-->
</body>
</html>