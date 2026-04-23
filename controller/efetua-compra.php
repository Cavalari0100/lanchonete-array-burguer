<?php
include '../dados/dados.php';
// Lógica para efetuar a compra
// Exemplo: processar o pedido e redirecionar para uma página de confirmação
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Aqui você pode adicionar a lógica para processar o pedido, como salvar no banco de dados, enviar email, etc.
 echo "Compra efetuada com sucesso!";   
    // Redirecionar para uma página de confirmação (exemplo: confirmacao.php)
    header('Location: ../assets/estrutura/confirmacao.php');
    exit();
}
?>