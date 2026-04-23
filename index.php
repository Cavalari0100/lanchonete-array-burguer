<?php
include 'dados/dados.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Array Burguer</title>
</head>

<body>
    <nav>
        <div class="opcoes">
            <img class="logo" src="assets/images/logo.png" alt="Logo Array Burguer">
            <ul>
                <li><a href="#lanches">Lanches</a></li>
                <li><a href="#acompanhamentos">Acompanhamentos</a></li>
                <li><a href="#sobremesas">Sobremesas</a></li>
            </ul>
        </div>
    </nav>
    <button class="inicio-pagina" onclick="window.scrollTo({ top: 0, behavior: 'smooth' });"><a href="../index.php">Início</a></button>
</body>
<button class="inicio-pagina" onclick="window.scrollTo({ top: 0, behavior: 'smooth' });">Início</button>
<main class="welcome">
    <h1>Bem-vindo ao Array Burguer!</h1>
    <p>O melhor lugar para encontrar os melhores hambúrgueres da cidade.</p>
    <img class="banner-img" src="assets/images/banner.png" alt="Imagem de um hambúrguer suculento">
</main>
<section class="sessao-lanches" id="lanches">
    <h2 style="color: #7a1010; font-size: 32px;">Confira nossos lanches</h2>
    <div class="lanche-container">
        <?php
        // Array de lanches
        foreach ($lanches as $lanche) {
            echo '<div class="lanche">';
            echo '<img src="' . $lanche['imagem'] . '" alt="' . $lanche['nome'] . '">';
            echo '<h3>' . $lanche['nome'] . '</h3>';
            echo '<p>' . $lanche['descricao'] . '</p>';
            echo '<p><b>Preço: R$ ' . number_format($lanche['preco'], 2, ',', '.') . '</b></p>';
            echo '<a href="' . $lanche['url'] . '"><button class="btn-comprar">Comprar</button></a>';
            echo '</div>';
        }
        ?>
    </div>
</section>
<section class="sessao-lanches" id="acompanhamentos">
    <h2 style="color: #7a1010; font-size: 32px;">Confira nossos acompanhamentos</h2>
    <div class="lanche-container">
        <?php
        // Array de lanches
        foreach ($acompanhamentos as $acompanhamento) {
            echo '<div class="lanche">';
            echo '<img src="' . $acompanhamento['imagem'] . '" alt="' . $acompanhamento['nome'] . '">';
            echo '<h3>' . $acompanhamento['nome'] . '</h3>';
            echo '<p>' . $acompanhamento['descricao'] . '</p>';
            echo '<p><b>Preço: R$ ' . number_format($acompanhamento['preco'], 2, ',', '.') . '</b></p>';
            echo '<button class="btn-comprar">Comprar</button>';
            echo '</div>';
        }
        ?>

    </div>
</section>
<section class="sessao-lanches" id="sobremesas">
    <h2 style="color: #7a1010; font-size: 32px;">Confira nossas sobremesas</h2>
    <div class="lanche-container">
        <?php
        // Array de sobremesas
        foreach ($sobremesas as $sobremesa) {
            echo '<div class="lanche">';
            echo '<img src="' . $sobremesa['imagem'] . '" alt="' . $sobremesa['nome'] . '">';
            echo '<h3>' . $sobremesa['nome'] . '</h3>';
            echo '<p>' . $sobremesa['descricao'] . '</p>';
            echo '<p><b>Preço: R$ ' . number_format($sobremesa['preco'], 2, ',', '.') . '</b></p>';
            echo '<button class="btn-comprar">Comprar</button>';
            echo '</div>';
        }
        ?>

    </div>
</section>
<footer>
    <p class="contatos">&copy; 2023 Array Burguer. Todos os direitos reservados. &copy; João Vitor C. Spavier</p>
</footer>

</body>

</html>