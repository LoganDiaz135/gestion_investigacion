<?php
/**
 * app/Controllers/ProfesoresController.php
 */
require_once APP_PATH . '/Controllers/BaseController.php';

class ProfesoresController extends BaseController
{
    private array $profesores = [
        ['id'=>1,  'nombre'=>'Dr. Carlos Méndez',    'email'=>'c.mendez@universidad.edu',    'facultad'=>'Ingeniería',          'grupo'=>'IA & Salud Digital',   'cargo'=>'Profesor Titular',   'dedicacion'=>'Tiempo Completo', 'proyectos'=>4, 'estado'=>'Activo'],
        ['id'=>2,  'nombre'=>'Dra. Patricia Lozano', 'email'=>'p.lozano@universidad.edu',    'facultad'=>'Ciencias Exactas',    'grupo'=>'QuímicaVerde',         'cargo'=>'Decana',             'dedicacion'=>'Tiempo Completo', 'proyectos'=>3, 'estado'=>'Activo'],
        ['id'=>3,  'nombre'=>'Dr. Julio Fernández',  'email'=>'j.fernandez@universidad.edu', 'facultad'=>'Ciencias Sociales',   'grupo'=>'Desarrollo Sostenible','cargo'=>'Profesor Asociado',  'dedicacion'=>'Tiempo Completo', 'proyectos'=>2, 'estado'=>'Activo'],
        ['id'=>4,  'nombre'=>'Dra. Sara Gómez',      'email'=>'s.gomez@universidad.edu',     'facultad'=>'Ciencias de la Vida', 'grupo'=>'Genómica & Biodiversidad','cargo'=>'Profesora Titular','dedicacion'=>'Tiempo Completo','proyectos'=>5, 'estado'=>'Activo'],
        ['id'=>5,  'nombre'=>'Dr. Felipe Rueda',     'email'=>'f.rueda@universidad.edu',     'facultad'=>'Ingeniería',          'grupo'=>'TIC & Sociedad',       'cargo'=>'Profesor Asistente', 'dedicacion'=>'Medio Tiempo',    'proyectos'=>2, 'estado'=>'Activo'],
        ['id'=>6,  'nombre'=>'Dra. Ana Blanco',      'email'=>'a.blanco@universidad.edu',    'facultad'=>'Ingeniería',          'grupo'=>'Energías Limpias',     'cargo'=>'Profesora Asociada', 'dedicacion'=>'Tiempo Completo', 'proyectos'=>3, 'estado'=>'Activo'],
        ['id'=>7,  'nombre'=>'Dr. Eduardo Soto',     'email'=>'e.soto@universidad.edu',      'facultad'=>'Ciencias Exactas',    'grupo'=>'Matemática Aplicada',  'cargo'=>'Profesor Titular',   'dedicacion'=>'Tiempo Completo', 'proyectos'=>2, 'estado'=>'Activo'],
        ['id'=>8,  'nombre'=>'Dra. Claudia Nieto',   'email'=>'c.nieto@universidad.edu',     'facultad'=>'Ciencias Sociales',   'grupo'=>'Gobernanza & Paz',     'cargo'=>'Profesora Asistente','dedicacion'=>'Cátedra',         'proyectos'=>1, 'estado'=>'Activo'],
        ['id'=>9,  'nombre'=>'Dr. Héctor Prieto',    'email'=>'h.prieto@universidad.edu',    'facultad'=>'Ingeniería',          'grupo'=>'Robótica & Automatización','cargo'=>'Profesor Asociado','dedicacion'=>'Tiempo Completo','proyectos'=>3,'estado'=>'Activo'],
        ['id'=>10, 'nombre'=>'Dr. Jorge Pinto',      'email'=>'j.pinto@universidad.edu',     'facultad'=>'Ciencias Exactas',    'grupo'=>'Física de Materiales', 'cargo'=>'Profesor Asistente', 'dedicacion'=>'Medio Tiempo',    'proyectos'=>2, 'estado'=>'Inactivo'],
    ];

    public function index(): void
    {
        $this->render('profesores/index', [
            'pageTitle'  => 'Profesores',
            'activeMenu' => 'profesores',
            'profesores' => $this->profesores,
        ]);
    }

    public function nuevo(): void
    {
        $this->render('profesores/form', [
            'pageTitle'  => 'Nuevo Profesor',
            'activeMenu' => 'profesores',
            'modo'       => 'crear',
        ]);
    }

    public function ver(): void
    {
        $id = (int) ($_GET['id'] ?? 1);
        $profesor = null;
        foreach ($this->profesores as $p) {
            if ($p['id'] === $id) { $profesor = $p; break; }
        }
        $this->render('profesores/ver', [
            'pageTitle'  => 'Detalle del Profesor',
            'activeMenu' => 'profesores',
            'profesor'   => $profesor,
        ]);
    }
}
