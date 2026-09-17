<?php


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
