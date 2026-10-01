<?php

function servidorHTTP(){
    $log = [];
    $log[] = "1. Servidor HTTP recebeu a requisição.";
    router($log);
}