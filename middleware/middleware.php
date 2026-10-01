<?php

function middleware($rota, &$log){
    $log[] = "3. Middleware está verificando a requisição.";
    $permitido = true;

    if ($permitido) {
        $log[] = "4. Middleware permitiu continuar.";
        dispatcher($rota, $log);
    } else {
        $log[] = "4. Middleware bloqueou a requisição.";
    }
}