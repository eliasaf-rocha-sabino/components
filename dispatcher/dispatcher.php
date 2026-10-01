<?php

function dispatcher($rota, &$log){
    $log[] = "5. Dispatcher decidiu qual controller deve executar.";

    if ($rota === "produtos") {
        $resultado = produtosController($log);
    } elseif ($rota === "marcas") {
        $resultado = marcasController($log);
    } else {
        $log[] = "404 - Rota não encontrada!";
        $resultado = [
            'titulo'   => '404 - Não encontrado',
            'conteudo' => '<div class="alerta-erro">Rota não encontrada.</div>'
        ];
    }

    renderLayout($resultado['titulo'], $resultado['conteudo'], $log, $rota);
}