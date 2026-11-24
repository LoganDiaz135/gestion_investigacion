<?php
/**
 * public/index.php
 * Punto de entrada único de la aplicación.
 */

// Cargar configuración
require_once dirname(__DIR__) . '/config/app.php';

// Autoload manual de controladores
spl_autoload_register(function (string $class): void {
    $file = APP_PATH . '/Controllers/' . $class . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

// Cargar tabla de rutas
$routes = require_once CONFIG_PATH . '/routes.php';

// Obtener ruta solicitada
$route = trim($_GET['route'] ?? '', '/');

// Resolver ruta
if (array_key_exists($route, $routes)) {
    $target = $routes[$route];
} else {
    $target = $routes['404'];
}

$controllerName = $target['controller'];
$action         = $target['action'];

// Instanciar y ejecutar el controlador
$controllerFile = APP_PATH . '/Controllers/' . $controllerName . '.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controller = new $controllerName();
    $controller->$action();
} else {
    // Fallback: controlador no encontrado
    require_once APP_PATH . '/Controllers/ErrorController.php';
    $controller = new ErrorController();
    $controller->notFound();
}
