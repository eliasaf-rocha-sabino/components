<?php

function produtosController(&$log){
    $log[] = "6. Controller de Produtos recebeu a requisição.";
    $produtos = produtosService($log);
    $log[] = "8. Controller recebeu os dados do Service.";

    $html  = '<div class="card">';
    $html .= '<h3>💄 Produtos Disponíveis</h3>';
    $html .= '<ul class="lista">';
    foreach ($produtos as $p) {
        $html .= '<li>' . htmlspecialchars($p) . '</li>';
    }
    $html .= '</ul></div>';

    return [
        'titulo'   => 'Produtos',
        'conteudo' => $html
    ];
}