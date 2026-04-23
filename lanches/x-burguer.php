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
    echo "<form action=\"../controller/efetua-compra.php\" method=\"post\">";
        echo "<h1>" . $lanches[0]['nome'] . "</h1>"; 
        echo "<img src=\"" . $lanches[0]['imagem'] . "\" alt=\"" . $lanches[0]['nome'] . "\">";
        echo "<p>" . $lanches[0]['descricao'] . "</p>";
        echo "<p><b>Preço: R$ " . number_format($lanches[0]['preco'], 2, ',', '.') . "</b></p>";
        echo "<a href=\"" . $lanches[0]['url'] . "\"><button class=\"btn-comprar\">Comprar</button></a>";
        echo "</form>";
    echo "</div>";
        ?>
</body>

</html>