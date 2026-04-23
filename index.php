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
                <li><a href="cadastro.php">Cadastro de Produtos</a></li>
                <li><a href="listar.php">Listar Produtos</a></li>
            </ul>
        </div>
    </nav>

    <main class="welcome">
        <h1>Bem-vindo ao Array Burguer!</h1>
        <p>O melhor lugar para encontrar os melhores hambúrgueres da cidade.</p>
        <img class="banner-img" src="assets/images/banner.png" alt="Imagem de um hambúrguer suculento">
    </main>

    <section class="sessao-lanches">
        <h2>Confira nossos lanches</h2>
        <div class="lanche-container">
            <?php
            // Array de lanches
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
            echo '<div class="lanche">';
            foreach ($lanches as $lanche) {
                echo '<img src="' . $lanche['imagem'] . '" alt="' . $lanche['nome'] . '">';
                echo '<h3>' . $lanche['nome'] . '</h3>';
                echo '<p>' . $lanche['descricao'] . '</p>';
                echo '<p>Preço: R$ ' . number_format($lanche['preco'], 2, ',', '.') . '</p>';
                echo '</div>';
            }

            ?>
        </div>
    </section>

</body>

</html>