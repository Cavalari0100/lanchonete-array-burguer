<?php
include '../assets/estrutura/navegacao-lanche.php';
require '../dados/dados.php';

$nome     = htmlspecialchars($_POST['nome']     ?? '');
$imagem   = htmlspecialchars($_POST['imagem']   ?? '');
$descricao= htmlspecialchars($_POST['descricao']?? '');
$preco    = $_POST['preco'] ?? 0;
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">
    <title><?= $nome ?> — Array Burguer</title>
    <style>
        /* ── Animações de entrada ── */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(28px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to   { opacity: 1; }
        }
        @keyframes scalePop {
            0%   { transform: scale(0.93); opacity: 0; }
            100% { transform: scale(1);    opacity: 1; }
        }

        /* ── Layout principal ── */
        .lanche-detalhes {
            all: unset;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
            min-height: 80vh;
            background: var(--creme);
        }

        /* ── Coluna da imagem ── */
        .lanche-detalhes__foto {
            position: relative;
            overflow: hidden;
            background: linear-gradient(160deg, #3a0505 0%, #7a1010 60%, #c0392b 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px 40px;
            animation: fadeIn 0.6s ease both;
        }

        .lanche-detalhes__foto::before {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(ellipse at 30% 70%, rgba(255,120,0,0.18) 0%, transparent 60%),
                radial-gradient(ellipse at 80% 20%, rgba(255,200,0,0.10) 0%, transparent 50%);
        }

        .lanche-detalhes__foto-anel {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 420px;
            aspect-ratio: 1;
            border-radius: 50%;
            border: 5px solid rgba(255,242,195,0.18);
            box-shadow:
                0 0 0 16px rgba(255,242,195,0.06),
                0 32px 80px rgba(0,0,0,0.45);
            overflow: hidden;
            animation: scalePop 0.7s cubic-bezier(0.34,1.56,0.64,1) 0.15s both;
        }

        .lanche-detalhes__foto-anel img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease;
        }

        .lanche-detalhes__foto-anel:hover img {
            transform: scale(1.06);
        }

        /* Selo de preço flutuante */
        .lanche-detalhes__preco-selo {
            position: absolute;
            bottom: 36px;
            right: 36px;
            z-index: 2;
            background: var(--creme);
            color: var(--vermelho-escuro);
            border-radius: 50%;
            width: 96px;
            height: 96px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 28px rgba(0,0,0,0.3);
            animation: fadeUp 0.6s ease 0.5s both;
            font-family: 'Gill Sans', Calibri, sans-serif;
        }

        .lanche-detalhes__preco-label {
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #7a3a3a;
            line-height: 1;
        }

        .lanche-detalhes__preco-valor {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 20px;
            font-weight: 900;
            color: var(--vermelho);
            line-height: 1.2;
        }

        /* ── Coluna de informações ── */
        .lanche-detalhes__info {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 56px 52px;
            gap: 24px;
        }

        .lanche-detalhes__categoria {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(122,16,16,0.1);
            color: var(--vermelho);
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            padding: 5px 14px;
            border-radius: 20px;
            width: fit-content;
            animation: fadeUp 0.5s ease 0.2s both;
        }

        .lanche-detalhes__titulo {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: 900;
            color: var(--vermelho-escuro);
            line-height: 1.1;
            letter-spacing: -1px;
            animation: fadeUp 0.5s ease 0.3s both;
        }

        .lanche-detalhes__divisor {
            width: 56px;
            height: 4px;
            background: linear-gradient(90deg, var(--vermelho), #ff7b00);
            border-radius: 2px;
            animation: fadeUp 0.5s ease 0.35s both;
        }

        .lanche-detalhes__descricao {
            font-family: 'Gill Sans', Calibri, sans-serif;
            font-size: 17px;
            color: #5c2a2a;
            line-height: 1.75;
            animation: fadeUp 0.5s ease 0.4s both;
        }

        /* Bloco de atributos */
        .lanche-detalhes__attrs {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
            animation: fadeUp 0.5s ease 0.45s both;
        }

        .lanche-detalhes__attr {
            background: white;
            border: 1.5px solid rgba(122,16,16,0.15);
            border-radius: 12px;
            padding: 10px 18px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2px;
            min-width: 80px;
        }

        .lanche-detalhes__attr-icone {
            font-size: 20px;
        }

        .lanche-detalhes__attr-label {
            font-size: 11px;
            color: #9a5a5a;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Formulário / ação de compra */
        .lanche-detalhes__acao {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            animation: fadeUp 0.5s ease 0.5s both;
        }

        .lanche-detalhes__acao form {
            flex: 1;
            min-width: 200px;
        }

        .btn-comprar-grande {
            width: 100%;
            background: linear-gradient(135deg, var(--vermelho), #c0392b);
            color: var(--creme);
            border: none;
            padding: 16px 32px;
            border-radius: var(--radius-md);
            cursor: pointer;
            font-size: 17px;
            font-weight: 700;
            font-family: 'Gill Sans', Calibri, sans-serif;
            letter-spacing: 0.6px;
            box-shadow: 0 6px 20px rgba(122,16,16,0.35);
            transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-comprar-grande::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(255,255,255,0.15), transparent);
            opacity: 0;
            transition: opacity 0.2s;
        }

        .btn-comprar-grande:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 28px rgba(122,16,16,0.45);
        }

        .btn-comprar-grande:hover::after {
            opacity: 1;
        }

        .btn-comprar-grande:active {
            transform: translateY(0);
            box-shadow: 0 4px 12px rgba(122,16,16,0.3);
        }

        .lanche-detalhes__voltar {
            font-family: 'Gill Sans', Calibri, sans-serif;
            font-size: 14px;
            color: #9a5a5a;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 4px;
            white-space: nowrap;
            transition: color 0.2s;
        }

        .lanche-detalhes__voltar:hover {
            color: var(--vermelho);
        }

        /* ── Responsivo ── */
        @media (max-width: 860px) {
            .lanche-detalhes {
                grid-template-columns: 1fr;
            }

            .lanche-detalhes__foto {
                padding: 40px 24px;
                min-height: 50vw;
            }

            .lanche-detalhes__foto-anel {
                max-width: 260px;
            }

            .lanche-detalhes__preco-selo {
                bottom: 16px;
                right: 16px;
                width: 80px;
                height: 80px;
            }

            .lanche-detalhes__preco-valor {
                font-size: 16px;
            }

            .lanche-detalhes__info {
                padding: 36px 24px;
                gap: 18px;
            }

            .lanche-detalhes__titulo {
                font-size: 2rem;
            }
        }

        @media (max-width: 480px) {
            .lanche-detalhes__foto-anel {
                max-width: 200px;
            }

            .lanche-detalhes__acao {
                flex-direction: column;
                align-items: stretch;
            }

            .lanche-detalhes__voltar {
                justify-content: center;
            }
        }
    </style>
</head>

<body>

<div class="lanche-detalhes">

    <!-- Coluna esquerda: foto -->
    <div class="lanche-detalhes__foto">
        <div class="lanche-detalhes__foto-anel">
            <img src="<?= $imagem ?>" alt="<?= $nome ?>">
        </div>

        <div class="lanche-detalhes__preco-selo">
            <span class="lanche-detalhes__preco-label">por</span>
            <span class="lanche-detalhes__preco-valor">R$&nbsp;<?= number_format($preco, 2, ',', '.') ?></span>
        </div>
    </div>

    <!-- Coluna direita: informações -->
    <div class="lanche-detalhes__info">

        <span class="lanche-detalhes__categoria">
            🍔 Array Burguer
        </span>

        <h1 class="lanche-detalhes__titulo"><?= $nome ?></h1>

        <div class="lanche-detalhes__divisor"></div>

        <p class="lanche-detalhes__descricao"><?= $descricao ?></p>

        <div class="lanche-detalhes__attrs">
            <div class="lanche-detalhes__attr">
                <span class="lanche-detalhes__attr-icone">🔥</span>
                <span class="lanche-detalhes__attr-label">Quente</span>
            </div>
            <div class="lanche-detalhes__attr">
                <span class="lanche-detalhes__attr-icone">⚡</span>
                <span class="lanche-detalhes__attr-label">Rápido</span>
            </div>
            <div class="lanche-detalhes__attr">
                <span class="lanche-detalhes__attr-icone">⭐</span>
                <span class="lanche-detalhes__attr-label">Popular</span>
            </div>
        </div>

        <div class="lanche-detalhes__acao">
            <form action="../controller/efetua-compra.php" method="post">
                <input type="hidden" name="nome"     value="<?= $nome ?>">
                <input type="hidden" name="imagem"   value="<?= $imagem ?>">
                <input type="hidden" name="descricao"value="<?= $descricao ?>">
                <input type="hidden" name="preco"    value="<?= $preco ?>">
                <button type="submit" class="btn-comprar-grande">
                    Adicionar ao pedido &rarr;
                </button>
            </form>

            <a href="../index.php" class="lanche-detalhes__voltar">
                ← Ver cardápio
            </a>
        </div>

    </div>
</div>

<?php include '../assets/estrutura/propaganda.php'; ?>
<?php include '../assets/estrutura/rodape.php'; ?>

</body>
</html>