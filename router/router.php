<?php

function router(&$log){
    $log[] = "2. Router está analisando a URL.";
    $rota = $_GET['rota'] ?? 'produtos';
    middleware($rota, $log);
}