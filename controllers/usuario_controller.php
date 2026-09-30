<?php

function usuarioController(){
    echo "6. Recepção do pedido.<br>";
    $usuarios = usuarioService();
    echo "8. Retorno das informações.<br>";
    echo "Carros Encontrados:<br>";
    foreach ($usuarios as $usuario) {
        echo "- " . $usuario . "<br>";
    }
}
