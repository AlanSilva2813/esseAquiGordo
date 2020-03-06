<?php

// Configuração inicial da página
require ('_config.php');

// Define o título "desta" página
$titulo = "";

// Opção ativa no menu principal
// Valores possíveis: "", "artigos", "noticias", "contatos", "sobre", "procurar"
// Valores diferentes destes = ""
$menu = "";

// Aponta para o CSS "desta" página. Ex.: /css/contatos.css
// Deixe vazio para não usar CSS adicional nesta página
$css = "css/new.css";

// Aponta para o JavaScript "desta" página. Ex.: /js/contatos.js
// Deixe vazio para não usar JavaScript adicional nesta página
$js = "";

/*********************************************/
/*  SEUS CÓDIGOS PHP DESTA PÁGINA FICAM AQUI */
/*********************************************/



/************************************************/
/*  SEUS CÓDIGOS PHP DESTA PÁGINA TERMINAM AQUI */
/************************************************/

// Inclui o cabeçalho do template
require ('_header.php');
?>
<h1>Cardápio</h1>
<hr>
<div class="container-fluid">
    <div class="cardapio">
        <div class="col-md-4" >
            
            <h3>Bacalhau com Bacon</h3>
                
            <img class="img-rounded" src="img/pizza05.jpg " alt="" >

            <h1>R$25,00</h1>
            
        </div>
     </div>
     <div class="cardapio2">
        <div class="col-md-4" >
            
            <h3>Calabresa Clássica</h3>
                
            <img class="img-rounded" src="img/pizza02.jpg " alt="" >

            <h1>R$30,00</h1>
            
        </div>
     </div>
            
     <div class="cardapio3">
        <div class="col-md-4" >
            
            <h3>Margueritta</h3>
                
            <img class="img-rounded" src="img/pizza03.jpg " alt="" >

            <h1>R$50,00</h1>
            
        </div>
     </div>
     <div class="cardapio">
        <div class="col-md-4" >
            
            <h3>Chocolate com M&M</h3>
                
            <img class="img-rounded" src="img/pizza06.jpg " alt="" >

            <h1>R$35,00</h1>
            
        </div>
     </div>
     <div class="cardapio2">
        <div class="col-md-4" >
            
            <h3>Champignon com Azeitona </h3>
                
            <img class="img-rounded" src="img/pizza04.jpg " alt="" >

            <h1>R$40,00</h1>
            
        </div>
     </div>
            
     <div class="cardapio3">
        <div class="col-md-4" >
            
            <h3>Alho</h3>
                
            <img class="img-rounded" src="img/pizza01.jpg " alt="" >

            <h1>R$25,00</h1>
            
        </div>
     </div>
</div>





<?php

// Inclui o rodapé do template
require ('_footer.php');

?>