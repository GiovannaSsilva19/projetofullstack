
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gsouza Eletro </title>
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/funçoes.js"></script>
</head>
<body class="container-fluid px-0">
    <?php
        require('menu.html');
   ?>

    <header>
        <h1 class="h1_contatos">Contato</h1><hr>
    </header>
    
    <div class="row container-fluid align-items-center justify-content-center mb-5">
        
                <img class="col-sm-1" id="img1" src="imagens/email.jpg"  alt="">
                <p class="col-sm-4">ContatoGsouzaeletro.com</p>
            

            
                <img class="col-sm-1" id="img2" src="imagens/wpp.png"  alt="">
                <p class="col-sm-4>"> (11)99965-9906</p>
            
            
</div>

    </table>

    <?php
        $servername = "localhost";
        $username = "root";
        $passoword = "";
        $database = "fseletro";

        $conn = mysqli_connect($servername,$username,$passoword, $database);
        
         if (!$conn) {
             die("deu ruim". mysqli_connect_error());
         }
         
        if(isset($_GET['nome']) && isset($_GET['email'])){
             $nome = $_GET['nome'];
             $email = $_GET['email'];

           $sql = "insert into mensagemok (nome,email) values('$nome','$email')";
             $result = $conn->query($sql); 

             if($result){
                 echo "cadastro realizado : $nome,$email";
                 $array =array('um' => '$nome','dois'=>'$email');
                 print_r($array);
                 json_encode($array);
                 print_r($array);
             } else {
                 echo "";
             }
             
         }


 ?>
    
    <?php
        require('formulario.html');
   ?>

   
    
    <!--Cabeçalho-->
    <footer>
        <h4 class="h4pagamento">Formas de Pagamento</h4>
        <img class="imgpagamento"  src="imagens/forma de pagamento.jpg" alt="Formas de Pagamento">
        <p class="final"> &copy;RecodePro 2020</p>
    </footer>
    
    <!--Fim Cabeçalho-->
</body>
</html>

