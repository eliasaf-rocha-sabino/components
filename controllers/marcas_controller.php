<?php

function marcasController(&$log){
    $log[] = "6. Controller de Marcas recebeu a requisição.";
    $marcas = marcasService($log);
    $log[] = "8. Controller recebeu os dados do Service.";

    $html  = '<div class="card">';
    $html .= '<h3>🏷️ Marcas Parceiras</h3>';
    $html .= '<ul class="lista">';
    foreach ($marcas as $m) {
        $html .= '<li>' . htmlspecialchars($m) . '</li>';
    }
    $html .= '</ul></div>';

    return [
        'titulo'   => 'Marcas',
        'conteudo' => $html
    ];
}       