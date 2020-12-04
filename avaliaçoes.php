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
        <h1>Avaliações</h1>
        <img alt="avaliacao" src="imagens/avaliacao.png" width="400" height="120" />
        <hr>

        <form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
  </div>
  <hr>
  <hr>
  <form class="form-inline">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref"
  >Gostaria de ser atualizado com as novidades e promoções de GSOUZAELETRO?</label>
  <hr>
  
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option selected>Selecione uma das opções...</option>
    <option value="1">Sim</option>
    <option value="2">Não,apenas realizar cadastro</option>
    
  </select>
  <hr>
  
  <div class="custom-control custom-checkbox my-1 mr-sm-2">
    <input type="checkbox" class="custom-control-input" id="customControlInline">
    <label class="custom-control-label" for="customControlInline">Não sou um robô</label>
  </div>

  
  <button type="submit" class="btn btn-primary my-1">Enviar</button>
</form>

<div class="form-check form-check-inline">
<label class="my-1 mr-2" for="inlineFormCustomSelectPref"
  >Avalie sua experiencia com nossos produtos:</label>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Exelente</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Bom</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
  <label class="form-check-label" for="inlineRadio3">Mediano </label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
  <label class="form-check-label" for="inlineRadio4">Insatisfatório</label>
</div>




  <div class="form-group">
    <label for="exampleFormControlTextarea1">Deixe sua sugestão aqui</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>

    </header>



<?php
        require('footer.html');
    ?>
    












