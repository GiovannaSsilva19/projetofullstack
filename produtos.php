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
        
         if (!$conn)  {
             die("deu ruim". mysqli_connect_error());
         }

       


        ?>




 <!--Menu-->
 <?php
        require('menu.html');
   ?>   
<!--Fim Menu-->

     <header>
        <h1 class="h1_produtos">Produtos</h1><hr>
     </header>
    
     <div class="row container-fluid mx-0 px-0 align-items-start">    
    <section class="indice ml-4 mr-0  col-sm-2"> 
        <h3 class="mt-3 mb-5" >Categorias</h3>
            <ul>
                <li class="my-3" onclick="exibir_todos()">Todos(11)</li>
                <li class="my-3" onclick="exibir_categoria('Geladeira')">Geladeira(3)</li>
                <li class="my-3" onclick="exibir_categoria('Fogão')">Fogões(2)</li>
                <li class="my-3" onclick="exibir_categoria('Microondas')">Microondas(2)</li>
                <li class="my-3" onclick="exibir_categoria('Fornoeletrico')">Forno Elétrico(2)</li>
                <li class="my-3" onclick="exibir_categoria('Liquidificador')">Liquidificador(1)</li>
                <li class="my-3" onclick="exibir_categoria('Fritadeiraeletrica')">Fritadeita Elétrica(1)</li>
            </ul>
            
    </section>

    <section class="sectionprodutos">

<?php

$sql = "select * from produtos";
$result = $conn->query($sql);

echo '<pre>';
print_r ($result);
echo '</pre>';

if($result->num_rows >0){
    while ($rows = $result->fetch_assoc()) {            


 ?>   
        
        <div class="col-sm-4 my-3" id=  style="display: block;">
            <img class="imagem" id="produtos"  src="<?php  echo $rows["imagem"]; ?>" alt="" onclick="destaque(this) />
            </br>
            <p class= "nomeproduto"> <?php  echo $rows["nome_produto"]; ?> </p>
            <hr>
            <p class="descrição" > <?php  echo $rows["descricao_produto"]; ?> </p>
            <p class="preco"> <?php  echo $rows["preco_produto"]; ?> </p>
        </div>

        
        <?php
           }
       }else{
           echo "sme produto";     
       }

       
       ?>  
       

    </section>
        
    
    <!--Fomas de pagamento-->
    <?php
        require('footer.html');
    ?>
    
    <!--Fim Cabeçalho-->
</body>
</html>