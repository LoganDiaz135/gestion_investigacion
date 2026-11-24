<?php
/**
 * app/Views/dashboard/index.php
 * Vista principal del dashboard con datos de demostración.
 */
?>

<!-- Page Header -->
<div class="page-header">
    <div>
        <h1 class="page-header-title">
            <i class="bi bi-speedometer2 me-2 text-primary-custom"></i>Dashboard
        </h1>
        <p class="page-header-subtitle">
            Resumen general del sistema — <?= date('d \d\e F \d\e Y') ?>
        </p>
    </div>
    <div class="d-flex gap-2 flex-wrap">
        <button class="btn btn-outline-secondary btn-sm">
            <i class="bi bi-arrow-clockwise me-1"></i>Actualizar
        </button>
        <button class="btn btn-primary-custom btn-sm">
            <i class="bi bi-download me-1"></i>Exportar
        </button>
    </div>
</div>

<!-- =============================================
     FILA 1: Tarjetas de estadísticas principales
     ============================================= -->
<div class="row g-3 mb-4">
    <div class="col-6 col-md-3">
        <div class="stat-card">
            <div class="stat-card-icon icon-primary">
                <i class="bi bi-building"></i>
            </div>
            <div class="stat-card-info">
                <div class="stat-value" data-target="<?= $stats['facultades'] ?>"><?= $stats['facultades'] ?></div>
                <div class="stat-label">Facultades</div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="stat-card">
            <div class="stat-card-icon icon-accent">
                <i class="bi bi-people-fill"></i>
            </div>
            <div class="stat-card-info">
                <div class="stat-value" data-target="<?= $stats['grupos'] ?>"><?= $stats['grupos'] ?></div>
                <div class="stat-label">Grupos de Inv.</div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="stat-card">
            <div class="stat-card-icon icon-teal">
                <i class="bi bi-person-badge-fill"></i>
            </div>
            <div class="stat-card-info">
                <div class="stat-value" data-target="<?= $stats['profesores'] ?>"><?= $stats['profesores'] ?></div>
                <div class="stat-label">Profesores</div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="stat-card">
            <div class="stat-card-icon icon-purple">
                <i class="bi bi-folder2-open"></i>
            </div>
            <div class="stat-card-info">
                <div class="stat-value" data-target="<?= $stats['proyectos_total'] ?>"><?= $stats['proyectos_total'] ?></div>
                <div class="stat-label">Proyectos Total</div>
            </div>
        </div>
    </div>
</div>

<!-- =============================================
     FILA 2: Estado de proyectos
     ============================================= -->
<div class="row g-3 mb-4">
    <div class="col-12 col-md-4">
        <div class="stat-card border-start border-3 border-warning">
            <div class="stat-card-icon icon-warning">
                <i class="bi bi-clock-history"></i>
            </div>
            <div class="stat-card-info">
                <div class="stat-value text-warning" data-target="<?= $stats['proyectos_programados'] ?>"><?= $stats['proyectos_programados'] ?></div>
                <div class="stat-label">Programados</div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="stat-card border-start border-3 border-success">
            <div class="stat-card-icon icon-success">
                <i class="bi bi-play-circle-fill"></i>
            </div>
            <div class="stat-card-info">
                <div class="stat-value text-success" data-target="<?= $stats['proyectos_activos'] ?>"><?= $stats['proyectos_activos'] ?></div>
                <div class="stat-label">Activos</div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="stat-card border-start border-3 border-info">
            <div class="stat-card-icon icon-info">
                <i class="bi bi-check-circle-fill"></i>
            </div>
            <div class="stat-card-info">
                <div class="stat-value text-info" data-target="<?= $stats['proyectos_terminados'] ?>"><?= $stats['proyectos_terminados'] ?></div>
                <div class="stat-label">Terminados</div>
            </div>
        </div>
    </div>
</div>

<!-- =============================================
     FILA 3: Tabla de proyectos + Panel lateral
     ============================================= -->
<div class="row g-3 mb-4">

    <!-- Proyectos recientes -->
    <div class="col-12 col-xl-8">
        <div class="card h-100">
            <div class="card-header">
                <div class="card-title-text">
                    <i class="bi bi-folder2-open"></i>
                    Proyectos Recientes
                </div>
                <a href="<?= BASE_URL ?>?route=proyectos" class="btn btn-outline-secondary btn-sm">
                    Ver todos <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>
            <div class="table-wrapper">
                <table class="table" id="tabla-proyectos-recientes">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Grupo</th>
                            <th>Estado</th>
                            <th>Finalización</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($proyectos_recientes as $p): ?>
                        <tr>
                            <td>
                                <code class="text-primary-custom fw-600"><?= htmlspecialchars($p['id']) ?></code>
                            </td>
                            <td>
                                <div class="fw-600" style="max-width:280px;">
                                    <?= htmlspecialchars($p['titulo']) ?>
                                </div>
                                <div class="text-muted fs-13"><?= htmlspecialchars($p['facultad']) ?></div>
                            </td>
                            <td>
                                <span class="text-muted fs-13"><?= htmlspecialchars($p['grupo']) ?></span>
                            </td>
                            <td>
                                <?php
                                $estadoClass = match($p['estado']) {
                                    'Activo'      => 'badge-activo',
                                    'Terminado'   => 'badge-terminado',
                                    'Programado'  => 'badge-programado',
                                    default       => 'badge-inactivo',
                                };
                                ?>
                                <span class="badge-estado <?= $estadoClass ?>">
                                    <?= htmlspecialchars($p['estado']) ?>
                                </span>
                            </td>
                            <td class="text-muted fs-13"><?= htmlspecialchars($p['fin']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Panel lateral: Distribución + Actividad -->
    <div class="col-12 col-xl-4 d-flex flex-column gap-3">

        <!-- Distribución de proyectos -->
        <div class="card">
            <div class="card-header">
                <div class="card-title-text">
                    <i class="bi bi-pie-chart-fill"></i>
                    Distribución de Proyectos
                </div>
            </div>
            <div class="card-body py-3">
                <?php
                $total = $stats['proyectos_total'];
                $pct_prog = round($stats['proyectos_programados'] / $total * 100);
                $pct_act  = round($stats['proyectos_activos']     / $total * 100);
                $pct_term = round($stats['proyectos_terminados']  / $total * 100);
                ?>
                <div class="progress-row">
                    <span class="progress-label"><i class="bi bi-circle-fill text-warning me-1"></i>Programados</span>
                    <div class="progress"><div class="progress-bar bg-warning" style="width:<?= $pct_prog ?>%"></div></div>
                    <span class="progress-value"><?= $pct_prog ?>%</span>
                </div>
                <div class="progress-row">
                    <span class="progress-label"><i class="bi bi-circle-fill text-success me-1"></i>Activos</span>
                    <div class="progress"><div class="progress-bar bg-success" style="width:<?= $pct_act ?>%"></div></div>
                    <span class="progress-value"><?= $pct_act ?>%</span>
                </div>
                <div class="progress-row">
                    <span class="progress-label"><i class="bi bi-circle-fill text-info me-1"></i>Terminados</span>
                    <div class="progress"><div class="progress-bar bg-info" style="width:<?= $pct_term ?>%"></div></div>
                    <span class="progress-value"><?= $pct_term ?>%</span>
                </div>
            </div>
        </div>

        <!-- Actividad reciente -->
        <div class="card flex-grow-1">
            <div class="card-header">
                <div class="card-title-text">
                    <i class="bi bi-activity"></i>
                    Actividad Reciente
                </div>
            </div>
            <div class="card-body py-2 px-3">
                <?php foreach ($actividad_reciente as $act): ?>
                <div class="activity-item">
                    <div class="activity-icon icon-<?= $act['color'] ?>">
                        <i class="bi <?= $act['icono'] ?>"></i>
                    </div>
                    <div class="activity-info">
                        <div class="activity-title"><?= htmlspecialchars($act['accion']) ?></div>
                        <div class="activity-detail"><?= htmlspecialchars($act['detalle']) ?></div>
                    </div>
                    <span class="activity-time"><?= htmlspecialchars($act['tiempo']) ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>

<!-- =============================================
     FILA 4: Accesos rápidos
     ============================================= -->
<div class="row g-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title-text">
                    <i class="bi bi-lightning-charge-fill"></i>
                    Accesos Rápidos
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <a href="<?= BASE_URL ?>?route=facultades/nueva" class="btn btn-primary-custom">
                        <i class="bi bi-building-add"></i> Nueva Facultad
                    </a>
                    <a href="<?= BASE_URL ?>?route=grupos/nuevo" class="btn btn-primary-custom">
                        <i class="bi bi-people"></i> Nuevo Grupo
                    </a>
                    <a href="<?= BASE_URL ?>?route=profesores/nuevo" class="btn btn-primary-custom">
                        <i class="bi bi-person-add"></i> Nuevo Profesor
                    </a>
                    <a href="<?= BASE_URL ?>?route=proyectos/nuevo" class="btn btn-primary-custom">
                        <i class="bi bi-folder-plus"></i> Nuevo Proyecto
                    </a>
                    <a href="<?= BASE_URL ?>?route=participaciones/nueva" class="btn btn-primary-custom">
                        <i class="bi bi-diagram-3"></i> Nueva Participación
                    </a>
                    <a href="<?= BASE_URL ?>?route=consultas" class="btn btn-outline-secondary">
                        <i class="bi bi-bar-chart"></i> Ver Reportes
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
