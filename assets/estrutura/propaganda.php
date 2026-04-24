<?php
require_once 'C:/xampp/htdocs/lanchonete-array-burguer/dados/dados.php';
?>
<div class="propaganda">
    <h2 style="text-align: center; background-color: #671c1c; color: #fff2c3;">Promoção Especial!</h2>
    <ul>
        <li>
            <img class="img-propaganda" src="<?php echo $lanches[0]['imagem']; ?>" alt="<?php echo $lanches[0]['nome']; ?>">

        </li>
        <li><img class="img-propaganda" src="<?php echo $acompanhamentos[0]['imagem']; ?>" alt="<?php echo $acompanhamentos[0]['nome']; ?>"></li>
        <li><img class="img-propaganda" src="<?php echo $lanches[1]['imagem']; ?>" alt="<?php echo $lanches[1]['nome']; ?>">
        </li>
        <li><img class="img-propaganda" src="<?php echo $acompanhamentos[1]['imagem']; ?>" alt="<?php echo $acompanhamentos[1]['nome']; ?>"></li>
        <li><img class="img-propaganda" src="<?php echo $lanches[2]['imagem']; ?>" alt="<?php echo $lanches[2]['nome']; ?>">
        </li>
        <li><img class="img-propaganda" src="<?php echo $sobremesas[2]['imagem']; ?>" alt="<?php echo $sobremesas[2]['nome']; ?>"></li>
    </ul>
</div>