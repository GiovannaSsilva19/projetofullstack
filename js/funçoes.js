function exibir_categoria(categoria) {
 let produtos = document.getElementsByClassName('box_produtos');
  for (i=0; i < produtos.length; i++) {
      if(categoria == produtos[i].id) {
          produtos[i].style = "display:inline-block";
      } else {
        produtos[i].style = "display:none";
      }
  }

};

function exibir_todos(){
    let produtos = document.getElementsByClassName('box_produtos');
    for (i=0; i < produtos.length; i++) {
        if(produtos.length <= 12) {
            produtos[i].style = "display:inline-block";
        } 
        
    }
};


    



