<?php

<<<<<<< HEAD
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
=======

function middleware($rota) {
   echo "3. Middleware está verificando a requisição.<br>";
   $permitido = true;

   if ($permitido) {
   echo "4. Middleware permitiu continuar.<br>";
   dispatcher($rota);
   } else {
    echo "4. Middleware bloqueou a requisição.<br>";
   }
}
>>>>>>> 3999489952aacf6bd1513539c68fabc2e12bfdba
