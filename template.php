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
$css = "";

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
<h1>DZBR Pizzaria</h1>
<h3>A melhor pizzaria da Via Láctea</h3>
<hr></hr>
<img class="img-rounded" src="img/pizza02.jpg" alt="" style="width:550px;height:275px;">
<p>Aqui, você tem uma variedade de sabores, dos mais clássicos aos mais exóticos. Com preços acessíveis, e uma qualidade incomparável, nós buscamos sempre o melhor sabor para nossos clientes.</p>
<img class="img-rounded" src="img/pizza03.jpg" alt="" style="width:550px;height:275px;">
                           

<?php

// Inclui o rodapé do template
require ('_footer.php');

?>
