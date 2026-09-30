<?php

function dispatcher($rota){
    echo "5. Encaminhamento interno.<br>";
    if ($rota === "/carros") {
        usuarioController();
    }
}