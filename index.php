<?php
require 'vendor/autoload.php';

use App\Models\Usuario;

try {

    $usuario = new Usuario();

    
    echo $usuario->saludar();

} catch (Error $e) {

    echo "✗ Error: " . $e->getMessage();

}