<?php
include '../dados/dados.php';
// Lógica para efetuar a compra
// Exemplo: processar o pedido e redirecionar para uma página de confirmação
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Redirecionar para uma página de confirmação (exemplo: confirmacao.php)
    
    header('Location: ../assets/estrutura/confirmacao.php');
    exit();
}
