<?php
/**
 * app/Controllers/ParticipacionesController.php
 */
require_once APP_PATH . '/Controllers/BaseController.php';

class ParticipacionesController extends BaseController
{
    private array $participaciones = [
        ['id'=>1,'proyecto_id'=>'PRY-2024-001','proyecto'=>'Modelos ML para diagnóstico de enfermedades',    'profesor'=>'Dr. Carlos Méndez',   'rol'=>'Investigador Principal','horas'=>20,'desde'=>'2024-03-01','hasta'=>'2025-08-31','estado'=>'Activo'],
        ['id'=>2,'proyecto_id'=>'PRY-2024-001','proyecto'=>'Modelos ML para diagnóstico de enfermedades',    'profesor'=>'Dra. Sara Gómez',     'rol'=>'Co-investigador',       'horas'=>15,'desde'=>'2024-03-01','hasta'=>'2025-08-31','estado'=>'Activo'],
        ['id'=>3,'proyecto_id'=>'PRY-2024-002','proyecto'=>'Cambio climático en comunidades rurales',         'profesor'=>'Dr. Julio Fernández', 'rol'=>'Investigador Principal','horas'=>18,'desde'=>'2024-01-15','hasta'=>'2025-12-31','estado'=>'Activo'],
        ['id'=>4,'proyecto_id'=>'PRY-2023-015','proyecto'=>'Nanomateriales fotocatalíticos',                  'profesor'=>'Dra. Patricia Lozano','rol'=>'Investigador Principal','horas'=>22,'desde'=>'2023-02-01','hasta'=>'2024-11-30','estado'=>'Finalizado'],
        ['id'=>5,'proyecto_id'=>'PRY-2024-003','proyecto'=>'Blockchain agroalimentario',                      'profesor'=>'Dr. Felipe Rueda',    'rol'=>'Investigador Principal','horas'=>16,'desde'=>'2024-04-01','hasta'=>'2026-03-31','estado'=>'Activo'],
        ['id'=>6,'proyecto_id'=>'PRY-2024-005','proyecto'=>'Análisis genómico de poblaciones indígenas',      'profesor'=>'Dra. Sara Gómez',     'rol'=>'Investigador Principal','horas'=>25,'desde'=>'2024-06-01','hasta'=>'2026-05-31','estado'=>'Activo'],
        ['id'=>7,'proyecto_id'=>'PRY-2024-004','proyecto'=>'Energías renovables en zonas no interconectadas','profesor'=>'Dra. Ana Blanco',     'rol'=>'Investigador Principal','horas'=>20,'desde'=>'2025-01-01','hasta'=>'2026-12-31','estado'=>'Programado'],
        ['id'=>8,'proyecto_id'=>'PRY-2024-006','proyecto'=>'Robots colaborativos para microensamblaje',       'profesor'=>'Dr. Héctor Prieto',   'rol'=>'Investigador Principal','horas'=>18,'desde'=>'2025-03-01','hasta'=>'2027-02-28','estado'=>'Programado'],
    ];

    public function index(): void
    {
        $this->render('participaciones/index', [
            'pageTitle'       => 'Participaciones',
            'activeMenu'      => 'participaciones',
            'participaciones' => $this->participaciones,
        ]);
    }

    public function nueva(): void
    {
        $this->render('participaciones/form', [
            'pageTitle'  => 'Nueva Participación',
            'activeMenu' => 'participaciones',
            'modo'       => 'crear',
        ]);
    }
}
