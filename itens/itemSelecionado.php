<?php
include '../assets/estrutura/navegacao-lanche.php';
require '../dados/dados.php';
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
        echo "<h1>" . $_POST['nome'] . "</h1>"; 
        echo "<img src=\"" . $_POST['imagem'] . "\" alt=\"" . $_POST['nome'] . "\">";
        echo "<p>" . $_POST['descricao'] . "</p>";
        echo "<p><b>Preço: R$ " . number_format($_POST['preco'], 2, ',', '.') . "</b></p>";
        echo "<button class=\"btn-comprar\">Comprar</button>";
        echo "</form>";
    echo "</div>";
        ?>
        <?php include '../assets/estrutura/propaganda.php'; ?>
        <?php include '../assets/estrutura/rodape.php'; ?>
</body>

</html>