<?php
$lanches = [
    [
        'nome' => 'X-Burguer',
        'descricao' => 'Hambúrguer clássico com queijo, alface, tomate e maionese.',
        'preco' => 15.00,
        'imagem' => 'https://api-middleware-mcd.mcdonaldscupones.com/media/image/product$300x225_Frango.png/200/200/original?country=br'
    ],
    [
        'nome' => 'X-Salada',
        'descricao' => 'Hambúrguer com queijo, alface, tomate, cebola e maionese.',
        'preco' => 18.00,
        'imagem' => 'https://api-middleware-mcd.mcdonaldscupones.com/media/image/product$300x225_Carne.png/200/200/original?country=br'
    ],
    [
        'nome' => 'X-Bacon',
        'descricao' => 'Hambúrguer com queijo, bacon crocante, alface, tomate e maionese.',
        'preco' => 20.00,
        'imagem' => 'https://api-middleware-mcd.mcdonaldscupones.com/media/image/product$k6X0kr6l/200/200/original?country=br'
    ]
];
$acompanhamentos = [
    [
        'nome' => 'McFritas Grande',
        'descricao' => 'Porção de batatas fritas crocantes e douradas.',
        'preco' => '12.00',
        'imagem' => 'https://api-middleware-mcd.mcdonaldscupones.com/media/image/product$kUXVg4F7/200/200/original?country=br'
    ],
    [
        'nome' => 'Chicken McNuggets 15 unidadess',
        'descricao' => 'Crocantes, leves e deliciosos. Os irresistíveis McNuggets são feitos com carne 100% peito de frango',
        'preco' => '14.00',
        'imagem' => 'https://api-middleware-mcd.mcdonaldscupones.com/media/image/product$kdXkXf2d/200/200/original?country=br'
    ],
    [
        'nome' => 'Side Salad',
        'descricao' => 'Porção com 6 nuggets de frango crocantes.',
        'preco' => '13.50',
        'imagem' => 'https://api-middleware-mcd.mcdonaldscupones.com/media/image/product$knXN16VD/200/200/original?country=br'
    ]
];

$sobremesas = [
    [
        'nome' => 'Sorvete',
        'descricao' => 'Bola de sorvete cremoso nos sabores chocolate,<br> baunilha ou morango.',
        'preco' => '8.00',
        'imagem' => 'https://api-middleware-mcd.mcdonaldscupones.com/media/image/product$McColosso Blueberry.png/200/200/original?country=br'
    ],
    [
        'nome' => 'Petit Gateau',
        'descricao' => 'Bolinho de chocolate quente com recheio cremoso, acompanhado de sorvete.',
        'preco' => '16.00',
        'imagem' => 'https://api-middleware-mcd.mcdonaldscupones.com/media/image/product$300x225 (1).png/200/200/original?country=br'
    ],
    [
        'nome' => 'Brownie',
        'descricao' => 'Brownie de chocolate macio servido com calda de chocolate.',
        'preco' => '12.00',
        'imagem' => 'https://api-middleware-mcd.mcdonaldscupones.com/media/image/product$kpXltAm5/200/200/original?country=br'
    ]
];
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
    <button class = "inicio-pagina" onclick="window.scrollTo({ top: 0, behavior: 'smooth' });">Início</button>
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
                echo '<button class="btn-comprar">Comprar</button>';
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