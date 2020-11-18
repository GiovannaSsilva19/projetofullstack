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

    <form class="form-group text-center mt-5 mb-5 container-fluid" action="" method="post">
        <div class="row align-items-center justify-content-center">
        <label for="nome" class="col-sm-2 col-form-label "><h4>Nome: </h4></label>
        <input class="form-control-sm col-sm-2 form-control-plaintext" type="text" name="nome" placeholder="Digite seu nome">
        </div>
        <div class="row align-items-center justify-content-center mt-3">
        <label for="msg" class="col-sm-2 col-form-label"><h4>Mensagem: </h4></label>
        <textarea class="form-control-lg col-sm-2 form-control-plaintext" name="msg" placeholder="Digite sua mensagem"></textarea>
        </div>
        <div class="row align-items-center justify-content-center">
        <input class="btn btn-danger col-sm-1 mt-5" onclick="exibeMsg()" type="submit" value="Enviar">
        </div>
    </form>

   
    
    <!--Cabeçalho-->
    <footer>
        <h4 class="h4pagamento">Formas de Pagamento</h4>
        <img class="imgpagamento"  src="imagens/forma de pagamento.jpg" alt="Formas de Pagamento">
        <p class="final"> &copy;RecodePro 2020</p>
    </footer>
    
    <!--Fim Cabeçalho-->
</body>
</html>

