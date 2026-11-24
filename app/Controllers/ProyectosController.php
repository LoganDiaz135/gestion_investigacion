<?php
/**
 * app/Controllers/ProyectosController.php
 */
require_once APP_PATH . '/Controllers/BaseController.php';

class ProyectosController extends BaseController
{
    private array $proyectos = [
        ['id'=>'PRY-2024-001','titulo'=>'Modelos de aprendizaje automático para diagnóstico temprano de enfermedades tropicales','grupo'=>'IA & Salud Digital',       'facultad'=>'Ingeniería',          'lider'=>'Dr. Carlos Méndez',   'presupuesto'=>'$120,000,000','estado'=>'Activo',      'inicio'=>'2024-03-01','fin'=>'2025-08-31','participantes'=>5],
        ['id'=>'PRY-2024-002','titulo'=>'Impacto socioeconómico del cambio climático en comunidades rurales andinas',           'grupo'=>'Desarrollo Sostenible',    'facultad'=>'Ciencias Sociales',   'lider'=>'Dr. Julio Fernández', 'presupuesto'=>'$85,000,000', 'estado'=>'Activo',      'inicio'=>'2024-01-15','fin'=>'2025-12-31','participantes'=>4],
        ['id'=>'PRY-2023-015','titulo'=>'Nanomateriales fotocatalíticos para tratamiento de aguas residuales',                 'grupo'=>'QuímicaVerde',             'facultad'=>'Ciencias Exactas',    'lider'=>'Dra. Patricia Lozano','presupuesto'=>'$95,000,000', 'estado'=>'Terminado',   'inicio'=>'2023-02-01','fin'=>'2024-11-30','participantes'=>6],
        ['id'=>'PRY-2024-003','titulo'=>'Blockchain aplicado a la trazabilidad de cadenas agroalimentarias',                   'grupo'=>'TIC & Sociedad',           'facultad'=>'Ingeniería',          'lider'=>'Dr. Felipe Rueda',    'presupuesto'=>'$70,000,000', 'estado'=>'Activo',      'inicio'=>'2024-04-01','fin'=>'2026-03-31','participantes'=>3],
        ['id'=>'PRY-2024-004','titulo'=>'Desarrollo de energías renovables en zonas no interconectadas',                       'grupo'=>'Energías Limpias',         'facultad'=>'Ingeniería',          'lider'=>'Dra. Ana Blanco',     'presupuesto'=>'$150,000,000','estado'=>'Programado',  'inicio'=>'2025-01-01','fin'=>'2026-12-31','participantes'=>7],
        ['id'=>'PRY-2024-005','titulo'=>'Análisis genómico de poblaciones indígenas colombianas',                             'grupo'=>'Genómica & Biodiversidad', 'facultad'=>'Ciencias de la Vida', 'lider'=>'Dra. Sara Gómez',     'presupuesto'=>'$200,000,000','estado'=>'Activo',      'inicio'=>'2024-06-01','fin'=>'2026-05-31','participantes'=>9],
        ['id'=>'PRY-2023-010','titulo'=>'Gobernanza ambiental y participación ciudadana en municipios de alta biodiversidad',  'grupo'=>'Gobernanza & Paz',         'facultad'=>'Ciencias Sociales',   'lider'=>'Dra. Claudia Nieto',  'presupuesto'=>'$60,000,000', 'estado'=>'Terminado',   'inicio'=>'2023-01-01','fin'=>'2024-06-30','participantes'=>3],
        ['id'=>'PRY-2024-006','titulo'=>'Robots colaborativos para ensamblaje de microdispositivos electrónicos',             'grupo'=>'Robótica & Automatización','facultad'=>'Ingeniería',          'lider'=>'Dr. Héctor Prieto',   'presupuesto'=>'$110,000,000','estado'=>'Programado',  'inicio'=>'2025-03-01','fin'=>'2027-02-28','participantes'=>4],
    ];

    public function index(): void
    {
        $this->render('proyectos/index', [
            'pageTitle'  => 'Proyectos de Investigación',
            'activeMenu' => 'proyectos',
            'proyectos'  => $this->proyectos,
        ]);
    }

    public function nuevo(): void
    {
        $this->render('proyectos/form', [
            'pageTitle'  => 'Nuevo Proyecto',
            'activeMenu' => 'proyectos',
            'modo'       => 'crear',
        ]);
    }

    public function ver(): void
    {
        $idParam = $_GET['id'] ?? 'PRY-2024-001';
        $proyecto = null;
        foreach ($this->proyectos as $p) {
            if ($p['id'] === $idParam) { $proyecto = $p; break; }
        }
        $this->render('proyectos/ver', [
            'pageTitle'  => 'Detalle del Proyecto',
            'activeMenu' => 'proyectos',
            'proyecto'   => $proyecto,
        ]);
    }
}
