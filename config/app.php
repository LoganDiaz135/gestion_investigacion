<?php
/**
 * config/app.php
 * Configuración general de la aplicación.
 */

define('APP_NAME',    'Sistema de Gestión de Investigación Universitaria');
define('APP_VERSION', '1.0.0');
define('APP_ENV',     'development');   // 'production' en producción

// Rutas absolutas del proyecto
define('ROOT_PATH',   dirname(__DIR__));
define('APP_PATH',    ROOT_PATH . '/app');
define('PUBLIC_PATH', ROOT_PATH . '/public');
define('CONFIG_PATH', ROOT_PATH . '/config');

// URL base (ajusta si el proyecto no está en la raíz de htdocs)
define('BASE_URL', 'http://localhost/gestion_investigacion/public');

// Configuración de base de datos (se usará en fases posteriores)
define('DB_HOST',    'localhost');
define('DB_PORT',    '3306');
define('DB_NAME',    'gestion_investigacion');
define('DB_USER',    'root');
define('DB_PASS',    '');
define('DB_CHARSET', 'utf8mb4');

// Zona horaria
date_default_timezone_set('America/Bogota');
