<?php
/**
 * app/Controllers/DashboardController.php
 * Controlador del panel principal (dashboard).
 */

require_once APP_PATH . '/Controllers/BaseController.php';

class DashboardController extends BaseController
{
    public function index(): void
    {
        // --- Datos ficticios de demostración ---
        $stats = [
            'facultades'          => 6,
            'grupos'              => 18,
            'profesores'          => 94,
            'proyectos_total'     => 47,
            'proyectos_programados' => 8,
            'proyectos_activos'   => 29,
            'proyectos_terminados'=> 10,
        ];

        $proyectos_recientes = [
            [
                'id'         => 'PRY-2024-001',
                'titulo'     => 'Modelos de aprendizaje automático para diagnóstico temprano de enfermedades tropicales',
                'grupo'      => 'IA & Salud Digital',
                'facultad'   => 'Ingeniería',
                'estado'     => 'Activo',
                'inicio'     => '2024-03-01',
                'fin'        => '2025-08-31',
            ],
            [
                'id'         => 'PRY-2024-002',
                'titulo'     => 'Impacto socioeconómico del cambio climático en comunidades rurales andinas',
                'grupo'      => 'Desarrollo Sostenible',
                'facultad'   => 'Ciencias Sociales',
                'estado'     => 'Activo',
                'inicio'     => '2024-01-15',
                'fin'        => '2025-12-31',
            ],
            [
                'id'         => 'PRY-2023-015',
                'titulo'     => 'Nanomateriales fotocatalíticos para tratamiento de aguas residuales',
                'grupo'      => 'QuímicaVerde',
                'facultad'   => 'Ciencias Exactas',
                'estado'     => 'Terminado',
                'inicio'     => '2023-02-01',
                'fin'        => '2024-11-30',
            ],
            [
                'id'         => 'PRY-2024-003',
                'titulo'     => 'Blockchain aplicado a la trazabilidad de cadenas agroalimentarias',
                'grupo'      => 'TIC & Sociedad',
                'facultad'   => 'Ingeniería',
                'estado'     => 'Activo',
                'inicio'     => '2024-04-01',
                'fin'        => '2026-03-31',
            ],
            [
                'id'         => 'PRY-2024-004',
                'titulo'     => 'Desarrollo de energías renovables en zonas no interconectadas',
                'grupo'      => 'Energías Limpias',
                'facultad'   => 'Ingeniería',
                'estado'     => 'Programado',
                'inicio'     => '2025-01-01',
                'fin'        => '2026-12-31',
            ],
            [
                'id'         => 'PRY-2024-005',
                'titulo'     => 'Análisis genómico de poblaciones indígenas colombianas',
                'grupo'      => 'Genómica & Biodiversidad',
                'facultad'   => 'Ciencias de la Vida',
                'estado'     => 'Activo',
                'inicio'     => '2024-06-01',
                'fin'        => '2026-05-31',
            ],
        ];

        $actividad_reciente = [
            ['accion' => 'Nuevo proyecto registrado', 'detalle' => 'PRY-2024-005 — Genómica', 'tiempo' => 'Hace 2 horas', 'icono' => 'bi-folder-plus', 'color' => 'success'],
            ['accion' => 'Profesor asignado',         'detalle' => 'Dr. Carlos Méndez → IA & Salud Digital', 'tiempo' => 'Hace 5 horas', 'icono' => 'bi-person-check', 'color' => 'primary'],
            ['accion' => 'Proyecto finalizado',        'detalle' => 'PRY-2023-015 — QuímicaVerde', 'tiempo' => 'Hace 1 día', 'icono' => 'bi-check-circle', 'color' => 'info'],
            ['accion' => 'Nueva facultad actualizada', 'detalle' => 'Facultad de Ciencias de la Vida', 'tiempo' => 'Hace 2 días', 'icono' => 'bi-building', 'color' => 'warning'],
        ];

        $this->render('dashboard/index', [
            'pageTitle'          => 'Dashboard',
            'activeMenu'         => 'dashboard',
            'stats'              => $stats,
            'proyectos_recientes'=> $proyectos_recientes,
            'actividad_reciente' => $actividad_reciente,
        ]);
    }
}
