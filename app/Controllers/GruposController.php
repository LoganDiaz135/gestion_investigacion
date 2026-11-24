<?php
/**
 * app/Controllers/GruposController.php
 */
require_once APP_PATH . '/Controllers/BaseController.php';

class GruposController extends BaseController
{
    private array $grupos = [
        ['id' => 1,  'nombre' => 'IA & Salud Digital',        'facultad' => 'Ingeniería',          'lider' => 'Dr. Carlos Méndez',    'categoria' => 'A1', 'miembros' => 8,  'proyectos' => 4, 'estado' => 'Activo'],
        ['id' => 2,  'nombre' => 'TIC & Sociedad',            'facultad' => 'Ingeniería',          'lider' => 'Dr. Felipe Rueda',     'categoria' => 'A',  'miembros' => 6,  'proyectos' => 3, 'estado' => 'Activo'],
        ['id' => 3,  'nombre' => 'Energías Limpias',          'facultad' => 'Ingeniería',          'lider' => 'Dra. Ana Blanco',      'categoria' => 'B',  'miembros' => 5,  'proyectos' => 4, 'estado' => 'Activo'],
        ['id' => 4,  'nombre' => 'Robótica & Automatización', 'facultad' => 'Ingeniería',          'lider' => 'Dr. Héctor Prieto',    'categoria' => 'B',  'miembros' => 4,  'proyectos' => 3, 'estado' => 'Activo'],
        ['id' => 5,  'nombre' => 'QuímicaVerde',              'facultad' => 'Ciencias Exactas',    'lider' => 'Dra. Patricia Lozano', 'categoria' => 'A',  'miembros' => 7,  'proyectos' => 4, 'estado' => 'Activo'],
        ['id' => 6,  'nombre' => 'Matemática Aplicada',       'facultad' => 'Ciencias Exactas',    'lider' => 'Dr. Eduardo Soto',     'categoria' => 'B',  'miembros' => 5,  'proyectos' => 3, 'estado' => 'Activo'],
        ['id' => 7,  'nombre' => 'Física de Materiales',      'facultad' => 'Ciencias Exactas',    'lider' => 'Dr. Jorge Pinto',      'categoria' => 'C',  'miembros' => 3,  'proyectos' => 2, 'estado' => 'Activo'],
        ['id' => 8,  'nombre' => 'Desarrollo Sostenible',     'facultad' => 'Ciencias Sociales',   'lider' => 'Dr. Julio Fernández',  'categoria' => 'A',  'miembros' => 6,  'proyectos' => 3, 'estado' => 'Activo'],
        ['id' => 9,  'nombre' => 'Gobernanza & Paz',          'facultad' => 'Ciencias Sociales',   'lider' => 'Dra. Claudia Nieto',   'categoria' => 'B',  'miembros' => 4,  'proyectos' => 3, 'estado' => 'Activo'],
        ['id' => 10, 'nombre' => 'Genómica & Biodiversidad',  'facultad' => 'Ciencias de la Vida', 'lider' => 'Dra. Sara Gómez',      'categoria' => 'A1', 'miembros' => 9,  'proyectos' => 5, 'estado' => 'Activo'],
    ];

    public function index(): void
    {
        $this->render('grupos/index', [
            'pageTitle'  => 'Grupos de Investigación',
            'activeMenu' => 'grupos',
            'grupos'     => $this->grupos,
        ]);
    }

    public function nuevo(): void
    {
        $this->render('grupos/form', [
            'pageTitle'  => 'Nuevo Grupo',
            'activeMenu' => 'grupos',
            'modo'       => 'crear',
        ]);
    }

    public function ver(): void
    {
        $id = (int) ($_GET['id'] ?? 1);
        $grupo = null;
        foreach ($this->grupos as $g) {
            if ($g['id'] === $id) { $grupo = $g; break; }
        }
        $this->render('grupos/ver', [
            'pageTitle'  => 'Detalle del Grupo',
            'activeMenu' => 'grupos',
            'grupo'      => $grupo,
        ]);
    }
}
