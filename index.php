<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gsouza Eletro </title>

    <link rel="stylesheet" href="css/estilo.css">
    <<script src="js/funçoes.js"></script>

</head>
<body class="container-fluid px-0">
    <?php
        require('menu.html');
    ?>
    

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
    <?php
        require('footer.html');
    ?>
    
    <!--Fim Cabeçalho-->
</body>
</html>