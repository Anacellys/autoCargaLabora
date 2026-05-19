# Laboratorio - Implementación de Autoload con PSR-4 en PHP

## Descripción

Este laboratorio consiste en implementar la carga automática de clases en PHP utilizando Composer bajo el estándar PSR-4.

El proyecto elimina el uso de `include`, `include_once`, `require` y `require_once`, utilizando Composer para gestionar automáticamente la carga de clases mediante Namespaces.

---

# Objetivos

- Comprender el funcionamiento del estándar PSR-4.
- Configurar correctamente Composer Autoload.
- Organizar el proyecto utilizando Namespaces.
- Implementar carga automática de clases.
- Mejorar la mantenibilidad y organización del sistema.

---

# Tecnologías utilizadas

- PHP
- Composer
- PSR-4
- GitHub

---

# Instalación del proyecto

## 1. Clonar el repositorio

```bash
git clone https://github.com/anacellys/autocargavii.git
```

---

## 2. Entrar a la carpeta del proyecto

```bash
cd autocargavii
```

---

## 3. Verificar Composer

```bash
composer --version
```

---

## 4. Instalar dependencias

```bash
composer install
```

---

## 5. Generar el autoload

```bash
composer dump-autoload
```

---

# Estructura del proyecto

```plaintext
AUTOCARGAVII/
│
├── src/
│   ├── Controllers/
│   │   └── UsuarioController.php
│   │
│   └── Models/
│       └── Usuario.php
│
├── vendor/
│   ├── composer/
│   └── autoload.php
│
├── composer.json
└── index.php
```

---

# Relación entre Namespaces y carpetas

| Namespace | Carpeta Física |
|---|---|
| App\Controllers | src/Controllers |
| App\Models | src/Models |

---

# Configuración del composer.json

```json
{
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    }
}
```

---

# Explicación de la configuración

- `"App\\"` representa el Namespace principal.
- `"src/"` representa la carpeta física donde se encuentran las clases.
- Composer conecta automáticamente los Namespaces con las carpetas correspondientes.

---

# Modelo Usuario

## Archivo: src/Models/Usuario.php

```php
<?php

namespace App\Models;

class Usuario {

    public function saludar() {
        return "Hola, bienvenida";
    }
} 
```

---

# Controlador UsuarioController

## Archivo: src/Controllers/UsuarioController.php

```php
<?php

namespace App\Controllers;

use App\Models\Usuario;

class UsuarioController {

    public function crear(string $nombre): Usuario {
        $usuario = new Usuario($nombre, );
        return $usuario;
    }
}
```

---

# Archivo principal

## Archivo: index.php

```php
<?php
require 'vendor/autoload.php';

use App\Models\Usuario;

try {

    $usuario = new Usuario();

    
    echo $usuario->saludar();

} catch (Error $e) {

    echo "✗ Error: " . $e->getMessage();

}
```

---

# Evidencia de ejecución

## Resultado esperado

```plaintext
PS C:\Users\Panam\Music\autoCargaVII> php index.php
Hola, bienvenida
```

---

# Validaciones realizadas

- Composer genera correctamente `vendor/autoload.php`.
- Las clases son cargadas automáticamente.
- No se utilizan `include` ni `require_once`.
- Los Namespaces funcionan correctamente.
- El sistema evita errores de tipo “Class not found”.

---

# Archivo .gitignore

```gitignore
/vendor/

composer.lock
```

---

# Importancia del .gitignore

El archivo `.gitignore` evita subir la carpeta `vendor/` al repositorio de GitHub.

Esto obliga a que cada desarrollador genere localmente las dependencias utilizando:

```bash
composer install
```

Esto mantiene el repositorio más limpio y profesional.

---

# Conclusiones Técnicas

## 1. Mantenibilidad

El estándar PSR-4 permite agregar nuevas clases sin modificar archivos globales ni escribir múltiples instrucciones `require`.

La estructura del proyecto se vuelve más organizada y fácil de mantener.

---

## 2. Eficiencia de Memoria

Composer utiliza Lazy Loading, lo que significa que las clases solo se cargan cuando son necesarias durante la ejecución.

Esto mejora el rendimiento y optimiza el uso de memoria del servidor.

---

## 3. Estandarización

PSR-4 proporciona una estructura estándar para organizar proyectos PHP.

Esto facilita el trabajo colaborativo entre desarrolladores.

---

## 4. Escalabilidad

El proyecto puede crecer fácilmente agregando nuevos módulos, carpetas y clases sin afectar el funcionamiento del sistema.

---

# Problemas encontrados

Durante el desarrollo del laboratorio se presentaron errores relacionados con:

- Namespaces incorrectos.
- Rutas mal definidas.
- No ejecutar `composer dump-autoload`.
- Diferencias entre nombres de clases y nombres de archivos.

Estos problemas fueron solucionados reorganizando correctamente la estructura del proyecto.

---

# Aprendizaje obtenido

Este laboratorio permitió comprender cómo Composer simplifica la carga automática de clases y mejora la organización de proyectos PHP modernos.

También permitió aplicar correctamente el estándar PSR-4 y comprender la importancia de los Namespaces.

---

# Autor

Anacelis Boniche 
Laboratorio Nº 3 Autocarga 
Universidad Tecnologíca de Panamá 

---

# Referencias



Universidad Tecnológica de Panamá. (2026). *Guía de Autocarga en PHP*. Desarrollo de Software VII.
