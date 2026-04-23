<?php
include '../assets/estrutura/navegacao-lanche.php';
include '../dados/dados.php';   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
        <?php 
    echo "<div class=\"lanche-detalhes\">";
        echo "<h1>" . $lanches[2]['nome'] . "</h1>"; 
        echo "<img src=\"" . $lanches[2]['imagem'] . "\" alt=\"" . $lanches[2]['nome'] . "\">";
        echo "<p>" . $lanches[2]['descricao'] . "</p>";
        echo "<p><b>Preço: R$ " . number_format($lanches[2]['preco'], 2, ',', '.') . "</b></p>";
        echo "<a href=\"" . $lanches[2]['url'] . "\"><button class=\"btn-comprar\">Comprar</button></a>";
    echo "</div>";
        ?>
</body>
</html>