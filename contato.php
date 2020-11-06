<?php
    # Conexão
    $link = mysqli_connect('localhost','root', '','fseletro');
    # Verificando a conexão
    if (!$link) {
        die ("Falha na conexão com o BD". mysqli_connect_erro());
    }   else {
        echo "Sucesso ao se conectar no banco de dados";
    }
    if (isset($_POST['nome']) && isset ($_POST['msg'])){
        $nome=$_POST['nome'];
        $msg=$_POST['msg'];



        $sql="insert into comentarios (nome,msg values ('$nome', '$msg')";
        $result=$conn->query($sql);
    }


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gsouza Eletro </title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<!--Menu-->
   
<!--Fim Menu-->
<?php
    include " menu.html"
    ?<  
    <header>
        <h1 class="h1_contatos">Contato</h1><hr>
    </header>
    
    <table class="contatos">
        <tr>
            <td>
                <img id="img1" src="imagens/email.jpg" width="25px" alt="">
                <p>ContatoGsouzaeletro.com</p>
            </td>

            <td>
                <img id="img2" src="imagens/wpp.png" width="25px" alt="">
                <p> (11)99965-9906</p>
            </td>
        </tr>
            <td>
                <img id="img3" src="imagens/insta.jpg" width="25px" alt="">
                <p>@Eletro_GS </p>
            </td>

            <td>
                <img id="img4" src="imagens/face.png" width="25px" alt="">
                <p> Gsouza Eletro-Oficial </p>
            </td>
        </tr>

    </table>

  
    <form class="contatos2">
        <h4>Nome: </h4>
        <input type="text">
        <h4>Mensagem: </h4> 
        <textarea></textarea><br><br>
        <input type="submit" value="Enviar">
    </form>

<?php

   $sql="select * from produtos";
   $result= $conn->query($sql);

   if($result->num_rows > 0){
    
      while($rows = $result-> fetch_assoc)()){
         echo "Data: ", $rows['data']; "<br>";
         echo "Nome: ", $rows['nome']; "<br>";
         echo "Mensagem: ", $rows['msg']; "<br>";
         echo "<hr>";

        }   
    } else {
       echo "Nenhum comentário ainda!";
    }

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

