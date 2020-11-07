<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gsouza Eletro </title>
    <link rel="stylesheet" href="css/estilo.css">
    <<script src="js/funçoes.js"></script>

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

    <!-- Main -->
    <main>
         <h2 class="menuh2">Seja bem vindo(a)</h2>
         <p> Seja bem vindo(a) você está no lugar certo! </p>
         <p> Faça suas compras aqui na GSOUZA ELETRO! Onde bom atendimento e qualidade,andam lado a lado.  </p>
    </main>
    <!-- Fim Main -->
    <?php
        $servername = "localhost";
        $username = "root";
        $passoword = "";
        $database = "fseletro";

        $conn = mysqli_connect($servername,$username,$passoword, $database);
        
        // if(isset($_POST['nome']) && isset($_POST['email'] )) {
        //     echo "dados recebidos";

            $nome = $_POST['nome'];
            $email = $_POST ['email'];

            $sql = "Insert into mensagem (nome, email) values ('$nome','$email')";
            $result = $conn ->query($sql);

            if($result){
                echo "cadastrado dev :)";
            } else {
                echo "";
            }

        // }

        ?>

    <!--Cabeçalho-->
    <footer>
        <h4 class="h4pagamento">Formas de Pagamento</h4>
        <img class="imgpagamento"  src="./imagens/forma de pagamento.jpg" alt="Formas de Pagamento">
        <p class="final"> &copy;RecodePro 2020</p>
    </footer>
    
    <!--Fim Cabeçalho-->
</body>
</html>