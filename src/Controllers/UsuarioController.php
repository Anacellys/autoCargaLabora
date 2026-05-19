<?php

namespace App\Controllers;

use App\Models\Usuario;

class UsuarioController {

    public function crear(string $nombre): Usuario {
        $usuario = new Usuario($nombre, );
        return $usuario;
    }
}