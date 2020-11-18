<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gsouza Eletro </title>
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/funçoes.js"></script>

</head>
<body>

<?php
        require('menu.html');
   ?>

    <header class="lojas">
        <h1>Nossas lojas</h1><hr>
    </header>
    <table class="lojas">
        <tr>
            <td>
                <h3>São Paulo-sp </h3>
                <p>Av. Baronesa de Muritiba,n°9520</p>
                <p>3 &ordm; andar</p>
                <p>(11)4444-0404</p>
            </td>

            <td>
                <h3>São Paulo-sp</h3>
                <p>Rua 25 de Março, n°584</p>
                <p>4 &ordm; andar</p>
                <p>(11) 2055-0005</p>
            </td>

            <td>
                <h3>Suzano-sp</h3>
                <p>Rua Europa-Jardim das Rosas, n°282</p>
                <p>12 &ordm;</p>
                <p>(11) 2011-0909</p>
            </td>
        </tr>

    </table>
    
    <section class="newsletter">
       <h4>Quer estar sempre por dentro das novidades e promoções?</h4>
       <p> Insira seu email abaixo:</p>
       <form method="POST">
           <input type="text" placeholder="Seu Nome ">
           <input type="email" placeholder="Seu Email">
           <button>Cadastrar</button>
       </form>
   </section>
    
   <!--Cabeçalho-->
   <?php
        require('footer.html');
    ?>

<!--Fim Cabeçalho-->
</body>
</html>

