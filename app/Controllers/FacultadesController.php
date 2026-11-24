<?php
/**
 * app/Controllers/FacultadesController.php
 */
require_once APP_PATH . '/Controllers/BaseController.php';

class FacultadesController extends BaseController
{
    private array $facultades = [
        ['id' => 1, 'nombre' => 'Facultad de Ingeniería',           'decano' => 'Dr. Ramón Torres',      'grupos' => 5, 'profesores' => 28, 'proyectos' => 14, 'estado' => 'Activa', 'creada' => '2001-03-15'],
        ['id' => 2, 'nombre' => 'Facultad de Ciencias Exactas',     'decano' => 'Dra. Patricia Lozano',  'grupos' => 4, 'profesores' => 21, 'proyectos' => 10, 'estado' => 'Activa', 'creada' => '1998-08-20'],
        ['id' => 3, 'nombre' => 'Facultad de Ciencias Sociales',    'decano' => 'Dr. Julio Fernández',   'grupos' => 3, 'profesores' => 17, 'proyectos' =>  8, 'estado' => 'Activa', 'creada' => '2003-01-10'],
        ['id' => 4, 'nombre' => 'Facultad de Ciencias de la Vida',  'decano' => 'Dra. Sara Gómez',       'grupos' => 3, 'profesores' => 15, 'proyectos' =>  9, 'estado' => 'Activa', 'creada' => '2005-07-01'],
        ['id' => 5, 'nombre' => 'Facultad de Derecho y Ciencias Políticas', 'decano' => 'Dr. Andrés Molina', 'grupos' => 2, 'profesores' => 8,  'proyectos' =>  4, 'estado' => 'Activa', 'creada' => '2000-02-28'],
        ['id' => 6, 'nombre' => 'Facultad de Economía y Negocios',  'decano' => 'Dra. Lucía Vargas',     'grupos' => 1, 'profesores' => 5,  'proyectos' =>  2, 'estado' => 'Activa', 'creada' => '2010-09-05'],
    ];

    public function index(): void
    {
        $this->render('facultades/index', [
            'pageTitle'  => 'Facultades',
            'activeMenu' => 'facultades',
            'facultades' => $this->facultades,
        ]);
    }

    public function nueva(): void
    {
        $this->render('facultades/form', [
            'pageTitle'  => 'Nueva Facultad',
            'activeMenu' => 'facultades',
            'modo'       => 'crear',
        ]);
    }

    public function ver(): void
    {
        $id = (int) ($_GET['id'] ?? 1);
        $facultad = null;
        foreach ($this->facultades as $f) {
            if ($f['id'] === $id) { $facultad = $f; break; }
        }
        $this->render('facultades/ver', [
            'pageTitle'  => 'Detalle de Facultad',
            'activeMenu' => 'facultades',
            'facultad'   => $facultad,
        ]);
    }
}
