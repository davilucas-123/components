<?php

function middleware($rota){
    echo "3. Validação de acesso.<br>";
    $permitido = true;

    if ($permitido) {
        echo "4. Autorização concluída.<br>";
        dispatcher($rota);
    } else {
        echo "4. Bloqueio Concluido.<br>";
    }
}