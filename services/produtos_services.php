<?php

function produtosService(&$log){
    $log[] = "7. Service de Produtos está executando a regra de negócio.";

    return [
        "Batom Vermelho",
        "Esmalte Verde",
        "Delineador Preto"
    ];
}