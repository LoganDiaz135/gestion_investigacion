<?php /** app/Views/proyectos/ver.php */ ?>
<div class="page-header">
    <div>
        <h1 class="page-header-title"><i class="bi bi-folder2-open me-2 text-primary-custom"></i>Detalle del Proyecto</h1>
        <p class="page-header-subtitle">Información completa del proyecto de investigación</p>
    </div>
    <a href="<?= BASE_URL ?>?route=proyectos" class="btn btn-outline-secondary btn-sm"><i class="bi bi-arrow-left me-1"></i>Volver</a>
</div>
<?php if (!$proyecto): ?>
    <div class="alert alert-danger"><i class="bi bi-exclamation-circle me-2"></i>Proyecto no encontrado.</div>
<?php else:
    $estadoClass = match($proyecto['estado']) {
        'Activo'     => 'badge-activo',
        'Terminado'  => 'badge-terminado',
        'Programado' => 'badge-programado',
        default      => 'badge-inactivo',
    };
?>
<div class="row g-3">
    <div class="col-12 col-lg-8">
        <div class="card mb-3">
            <div class="card-header">
                <div class="card-title-text"><i class="bi bi-info-circle"></i> Información del Proyecto</div>
                <div class="d-flex gap-2">
                    <span class="badge-estado <?= $estadoClass ?>"><?= htmlspecialchars($proyecto['estado']) ?></span>
                    <button class="btn btn-outline-secondary btn-sm" disabled><i class="bi bi-pencil me-1"></i>Editar (próx.)</button>
                </div>
            </div>
            <div class="card-body p-4">
                <div class="mb-3">
                    <div class="text-muted fs-13 text-uppercase fw-600 mb-1">Título</div>
                    <div class="fw-600 fs-6"><?= htmlspecialchars($proyecto['titulo']) ?></div>
                </div>
                <dl class="row mb-0">
                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">ID</dt>
                    <dd class="col-sm-8"><code class="text-primary-custom fw-600"><?= htmlspecialchars($proyecto['id']) ?></code></dd>
                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">Grupo</dt>
                    <dd class="col-sm-8"><?= htmlspecialchars($proyecto['grupo']) ?></dd>
                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">Facultad</dt>
                    <dd class="col-sm-8"><?= htmlspecialchars($proyecto['facultad']) ?></dd>
                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">Líder</dt>
                    <dd class="col-sm-8"><?= htmlspecialchars($proyecto['lider']) ?></dd>
                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">Presupuesto</dt>
                    <dd class="col-sm-8 fw-600"><?= htmlspecialchars($proyecto['presupuesto']) ?></dd>
                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">Participantes</dt>
                    <dd class="col-sm-8"><span class="badge bg-info"><?= $proyecto['participantes'] ?></span></dd>
                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">Inicio</dt>
                    <dd class="col-sm-8"><?= htmlspecialchars($proyecto['inicio']) ?></dd>
                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">Finalización</dt>
                    <dd class="col-sm-8"><?= htmlspecialchars($proyecto['fin']) ?></dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="card">
            <div class="card-header"><div class="card-title-text"><i class="bi bi-lightning-charge-fill"></i> Acciones</div></div>
            <div class="card-body d-flex flex-column gap-2">
                <a href="<?= BASE_URL ?>?route=participaciones" class="btn btn-outline-primary btn-sm"><i class="bi bi-diagram-3 me-1"></i>Ver participaciones</a>
                <a href="<?= BASE_URL ?>?route=consultas" class="btn btn-outline-primary btn-sm"><i class="bi bi-bar-chart me-1"></i>Ver reportes</a>
                <hr>
                <button class="btn btn-outline-danger btn-sm" disabled><i class="bi bi-trash me-1"></i>Eliminar (próx.)</button>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
