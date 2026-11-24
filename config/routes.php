<?php
/**
 * config/routes.php
 * Tabla de rutas de la aplicación.
 * Formato: 'ruta' => ['controller' => 'NombreController', 'action' => 'metodo']
 */

return [
    // Dashboard
    ''          => ['controller' => 'DashboardController', 'action' => 'index'],
    'dashboard' => ['controller' => 'DashboardController', 'action' => 'index'],

    // Facultades
    'facultades'        => ['controller' => 'FacultadesController', 'action' => 'index'],
    'facultades/nueva'  => ['controller' => 'FacultadesController', 'action' => 'nueva'],
    'facultades/ver'    => ['controller' => 'FacultadesController', 'action' => 'ver'],

    // Grupos de investigación
    'grupos'       => ['controller' => 'GruposController', 'action' => 'index'],
    'grupos/nuevo' => ['controller' => 'GruposController', 'action' => 'nuevo'],
    'grupos/ver'   => ['controller' => 'GruposController', 'action' => 'ver'],

    // Profesores
    'profesores'        => ['controller' => 'ProfesoresController', 'action' => 'index'],
    'profesores/nuevo'  => ['controller' => 'ProfesoresController', 'action' => 'nuevo'],
    'profesores/ver'    => ['controller' => 'ProfesoresController', 'action' => 'ver'],

    // Proyectos
    'proyectos'        => ['controller' => 'ProyectosController', 'action' => 'index'],
    'proyectos/nuevo'  => ['controller' => 'ProyectosController', 'action' => 'nuevo'],
    'proyectos/ver'    => ['controller' => 'ProyectosController', 'action' => 'ver'],

    // Participaciones
    'participaciones'        => ['controller' => 'ParticipacionesController', 'action' => 'index'],
    'participaciones/nueva'  => ['controller' => 'ParticipacionesController', 'action' => 'nueva'],

    // Consultas y reportes
    'consultas' => ['controller' => 'ConsultasController', 'action' => 'index'],

    // 404
    '404' => ['controller' => 'ErrorController', 'action' => 'notFound'],
];
