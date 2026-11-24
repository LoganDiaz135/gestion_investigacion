<?php
/**
 * app/Views/consultas/index.php
 * Módulo de consultas y reportes (vista preliminar).
 */
?>

<div class="page-header">
    <div>
        <h1 class="page-header-title">
            <i class="bi bi-bar-chart-fill me-2 text-primary-custom"></i>Consultas y Reportes
        </h1>
        <p class="page-header-subtitle">Análisis y estadísticas del sistema de investigación</p>
    </div>
    <button class="btn btn-outline-secondary btn-sm" disabled>
        <i class="bi bi-download me-1"></i>Exportar (próx.)
    </button>
</div>

<!-- Aviso de módulo en desarrollo -->
<div class="alert alert-info d-flex align-items-center gap-3 mb-4">
    <i class="bi bi-tools fs-4"></i>
    <div>
        <strong>Módulo en desarrollo.</strong>
        Las consultas SQL y reportes dinámicos se implementarán en la siguiente fase, junto con la conexión a base de datos.
        A continuación se muestra una vista previa de los reportes disponibles.
    </div>
</div>

<!-- Tarjetas de reportes disponibles -->
<div class="row g-3 mb-4">
    <?php
    $reportes = [
        ['icono' => 'bi-building',           'titulo' => 'Proyectos por Facultad',          'desc' => 'Total de proyectos agrupados por cada facultad.',           'color' => 'icon-primary'],
        ['icono' => 'bi-people-fill',         'titulo' => 'Proyectos por Grupo',             'desc' => 'Proyectos activos, programados y terminados por grupo.',     'color' => 'icon-accent'],
        ['icono' => 'bi-person-badge-fill',   'titulo' => 'Profesores por Facultad',         'desc' => 'Distribución de investigadores por facultad y dedicación.',  'color' => 'icon-teal'],
        ['icono' => 'bi-diagram-3-fill',      'titulo' => 'Participaciones por Proyecto',    'desc' => 'Lista de participantes y roles en cada proyecto.',           'color' => 'icon-purple'],
        ['icono' => 'bi-calendar-range',      'titulo' => 'Proyectos por Estado y Período',  'desc' => 'Proyectos filtrados por estado y rango de fechas.',          'color' => 'icon-success'],
        ['icono' => 'bi-trophy-fill',         'titulo' => 'Grupos con más Proyectos',        'desc' => 'Ranking de grupos de investigación por productividad.',       'color' => 'icon-warning'],
    ];
    foreach ($reportes as $r): ?>
    <div class="col-12 col-md-6 col-xl-4">
        <div class="card h-100">
            <div class="card-body d-flex gap-3 align-items-start p-4">
                <div class="stat-card-icon <?= $r['color'] ?>" style="width:48px;height:48px;border-radius:10px;font-size:1.3rem;flex-shrink:0;">
                    <i class="bi <?= $r['icono'] ?>"></i>
                </div>
                <div>
                    <div class="fw-600 mb-1"><?= $r['titulo'] ?></div>
                    <div class="text-muted fs-13"><?= $r['desc'] ?></div>
                    <button class="btn btn-outline-primary btn-sm mt-2" disabled>
                        <i class="bi bi-play-fill me-1"></i>Ejecutar (próx.)
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<!-- Vista previa de tabla de reporte -->
<div class="card">
    <div class="card-header">
        <div class="card-title-text">
            <i class="bi bi-table"></i>
            Vista Previa — Proyectos por Facultad (Datos ficticios)
        </div>
    </div>
    <div class="table-wrapper">
        <table class="table">
            <thead>
                <tr>
                    <th>Facultad</th>
                    <th class="text-center">Grupos</th>
                    <th class="text-center">Profesores</th>
                    <th class="text-center">Proy. Programados</th>
                    <th class="text-center">Proy. Activos</th>
                    <th class="text-center">Proy. Terminados</th>
                    <th class="text-center">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $resumen = [
                    ['facultad' => 'Ingeniería',           'grupos' => 5, 'profesores' => 28, 'prog' => 2, 'act' => 9,  'term' => 3, 'total' => 14],
                    ['facultad' => 'Ciencias Exactas',     'grupos' => 4, 'profesores' => 21, 'prog' => 1, 'act' => 7,  'term' => 2, 'total' => 10],
                    ['facultad' => 'Ciencias Sociales',    'grupos' => 3, 'profesores' => 17, 'prog' => 2, 'act' => 4,  'term' => 2, 'total' =>  8],
                    ['facultad' => 'Ciencias de la Vida',  'grupos' => 3, 'profesores' => 15, 'prog' => 2, 'act' => 5,  'term' => 2, 'total' =>  9],
                    ['facultad' => 'Derecho y C. Políticas','grupos'=> 2, 'profesores' =>  8, 'prog' => 1, 'act' => 2,  'term' => 1, 'total' =>  4],
                    ['facultad' => 'Economía y Negocios',  'grupos' => 1, 'profesores' =>  5, 'prog' => 0, 'act' => 2,  'term' => 0, 'total' =>  2],
                ];
                foreach ($resumen as $row): ?>
                <tr>
                    <td class="fw-600"><?= htmlspecialchars($row['facultad']) ?></td>
                    <td class="text-center"><span class="badge bg-primary-subtle text-primary"><?= $row['grupos'] ?></span></td>
                    <td class="text-center"><span class="badge bg-info-subtle text-info"><?= $row['profesores'] ?></span></td>
                    <td class="text-center"><span class="badge bg-warning-subtle text-warning"><?= $row['prog'] ?></span></td>
                    <td class="text-center"><span class="badge bg-success-subtle text-success"><?= $row['act'] ?></span></td>
                    <td class="text-center"><span class="badge bg-secondary-subtle text-secondary"><?= $row['term'] ?></span></td>
                    <td class="text-center fw-600"><?= $row['total'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
