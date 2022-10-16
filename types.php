<?php

declare(strict_types=1);
include 'includes/header.php';


function usuarioAutenticado(bool $autenticado): ?string
{
    if ($autenticado) {
        return "El Usuario esta autenticado";
    } else {
        return "El Usuario no esta autenticado";
    }
}

$usuario = usuarioAutenticado(false);
echo $usuario;



include 'includes/footer.php';
