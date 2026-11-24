<?php
/**
 * app/Controllers/BaseController.php
 * Controlador base con utilidades comunes para renderizar vistas.
 */

class BaseController
{
    /**
     * Renderiza una vista dentro del layout principal.
     *
     * @param string $view   Ruta relativa de la vista dentro de app/Views/
     * @param array  $data   Variables que estarán disponibles en la vista
     * @param string $layout Layout a utilizar (por defecto: main)
     */
    protected function render(string $view, array $data = [], string $layout = 'main'): void
    {
        // Extraer variables para que estén disponibles en las vistas
        extract($data, EXTR_SKIP);

        $viewFile   = APP_PATH . '/Views/' . $view . '.php';
        $layoutFile = APP_PATH . '/Views/layouts/' . $layout . '.php';

        // Capturar el contenido de la vista
        if (file_exists($viewFile)) {
            ob_start();
            require $viewFile;
            $content = ob_get_clean();
        } else {
            $content = '<div class="alert alert-danger">Vista no encontrada: ' . htmlspecialchars($view) . '</div>';
        }

        // Renderizar el layout con el contenido inyectado
        if (file_exists($layoutFile)) {
            require $layoutFile;
        } else {
            echo $content;
        }
    }

    /**
     * Redirige a una ruta interna de la aplicación.
     */
    protected function redirect(string $route): void
    {
        header('Location: ' . BASE_URL . '?route=' . ltrim($route, '/'));
        exit;
    }
}
