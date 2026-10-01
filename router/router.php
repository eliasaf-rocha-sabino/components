<?php

<<<<<<< HEAD
function router(&$log){
    $log[] = "2. Router está analisando a URL.";
    $rota = $_GET['rota'] ?? 'produtos';
    middleware($rota, $log);
=======
function router(){
    echo "2. Router está analisando a URL.<br>";
    $rota = "/usuarios"/
    $parametro = "id-123";
    middleware($rota);
>>>>>>> 3999489952aacf6bd1513539c68fabc2e12bfdba
}