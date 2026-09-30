<?php

function router(){
    echo "2. Mapeamento de endereço.<br>";
    $rota = "/carros";
    $parametro = "id=123";
    middleware($rota);
}
