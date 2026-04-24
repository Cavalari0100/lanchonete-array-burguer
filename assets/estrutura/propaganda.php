<?php
require_once 'C:/xampp/htdocs/lanchonete-array-burguer/dados/dados.php';

$itens_promo = [
    ['dados' => $lanches[0],        'categoria' => 'Lanche'],
    ['dados' => $acompanhamentos[0],'categoria' => 'Acompanhamento'],
    ['dados' => $lanches[1],        'categoria' => 'Lanche'],
    ['dados' => $acompanhamentos[1],'categoria' => 'Acompanhamento'],
    ['dados' => $lanches[2],        'categoria' => 'Lanche'],
    ['dados' => $sobremesas[2],     'categoria' => 'Sobremesa'],
];
?>

<section class="propaganda">
    <h2>🔥 Promoção Especial!</h2>
    <p class="propaganda-subtitulo">Aproveite nossas ofertas imperdíveis de hoje</p>

    <div class="propaganda-grid">
        <?php foreach ($itens_promo as $item): ?>
            <div class="propaganda-card">
                <span class="propaganda-badge"><?php echo htmlspecialchars($item['categoria']); ?></span>
                <img
                    class="img-propaganda"
                    src="<?php echo htmlspecialchars($item['dados']['imagem']); ?>"
                    alt="<?php echo htmlspecialchars($item['dados']['nome']); ?>"
                    loading="lazy"
                >
                <p class="propaganda-nome"><?php echo htmlspecialchars($item['dados']['nome']); ?> - <?php echo " R$ " . number_format($item['dados']['preco'], 2, ',', '.'); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>
