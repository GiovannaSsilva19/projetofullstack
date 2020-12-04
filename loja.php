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
        <h1>Nossas lojas</h1>
        <hr>
    </header>
    <table class="table table-danger">
  <thead>
    <tr>
      <th scope="col">Rua/Av</th>
      <th scope="col">Número(n°)</th>
      <th scope="col">Bairro</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>Av.Baronesa de Muritiba</td>
      <td>9520</td>
      <td>Parque São Rafael</td>
      <td>São Paulo-SP</td>
    </tr>
    <tr>
    <td>Rua 25 de março</td>
      <td>584</td>
      <td>Sé</td>
      <td>São Paulo-SP</td>
      
    </tr>
    <tr>
      
    <td>Rua Santa Tereza</td>
      <td>752</td>
      <td>Rio Grande da Serra</td>
      <td>São Paulo-SP</td>
    </tr>
  </tbody>
</table>
    </table>
    
  
    
   

   <!--Cabeçalho-->
   <?php
        require('footer.html');
    ?>

<!--Fim Cabeçalho-->
</body>
</html>

