<?php

namespace App\Controllers;

use App\Models\Usuario;

class UsuarioController {

    public function crear(string $nombre, string $email): Usuario {
        $usuario = new Usuario($nombre, $email);
        return $usuario;
    }
}