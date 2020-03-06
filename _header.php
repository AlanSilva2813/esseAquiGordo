<?php

// Tratamento do título da página
if ($titulo == "") {
    $titulo = "DZBR Pizzaria";
} else {
    $titulo = "{$titulo} - DZBR Pizzaria";
}

// Tratamento do CSS da página
if ($css != "") {
    $css = "<link rel=\"stylesheet\" href=\"{$css}\">\n";
} else {
    $css = null;
}

// Tratamento do JavaScript da página --> _footer.php
if ($js != "") {
    $js = "<script src=\"{$js}\"></script>\n";
} else {
    $js = null;
}

?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo ?></title>
    <link rel="shortcut icon" href="/img/logo03.png">
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <?php echo $css ?>
</head>
<body>
<a id="topo"></a>

<div class="wrap">

    <header class="header">
        <a href="/" title="DZDZBR PizzariaBR"><img src="img/logo03.png" alt="DZBR"></a>
    </header>

    <nav class="nav">
        <a <?php echo ( $menu == 'Home' ) ? 'class="active"' : null ?> href="/template.php"><i class="fas fa-fw fa-home"></i></a>
        <div id="menulinks">
            <a <?php echo ( $menu == 'cardapio' ) ? 'class="active"' : null ?> href="/cardapio.php"><i class="fas fa-pizza-slice"></i> Cardápio</a>
            <a <?php echo ( $menu == 'pedidos' ) ? 'class="active"' : null ?> href="/pedidos.php"><i class="fas fa-list"></i> Pedidos</a>
            <a <?php echo ( $menu == 'faleconosco' ) ? 'class="active"' : null ?> href="/faleconosco.php"><i class="fas fa-fw fa-mail-bulk"></i> Fale Conosco</a>
            <a <?php echo ( $menu == 'cadastro' ) ? 'class="active"' : null ?> href="/cadastro.php"><i class="fas fa-user-friends"></i> Cadastro</a>
        </div>
        <a href="#menu" id="menu"><i class="fas fa-fw fa-bars"></i></a>
    </nav>

    <main class="main">
<!-- CONTEÚDO DA PÁGINA -->
        
        
