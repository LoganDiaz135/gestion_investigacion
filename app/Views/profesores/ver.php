<?php /** app/Views/profesores/ver.php */ ?>
<div class="page-header">
    <div>
        <h1 class="page-header-title"><i class="bi bi-person-badge-fill me-2 text-primary-custom"></i>Detalle del Profesor</h1>
        <p class="page-header-subtitle">Perfil del investigador/docente</p>
    </div>
    <a href="<?= BASE_URL ?>?route=profesores" class="btn btn-outline-secondary btn-sm"><i class="bi bi-arrow-left me-1"></i>Volver</a>
</div>
<?php if (!$profesor): ?>
    <div class="alert alert-danger"><i class="bi bi-exclamation-circle me-2"></i>Profesor no encontrado.</div>
<?php else: ?>
<div class="row g-3">
    <div class="col-12 col-lg-8">
        <div class="card">
            <div class="card-header">
                <div class="card-title-text"><i class="bi bi-info-circle"></i> Información del Profesor</div>
                <button class="btn btn-outline-secondary btn-sm" disabled><i class="bi bi-pencil me-1"></i>Editar (próx.)</button>
            </div>
            <div class="card-body p-4">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div class="sidebar-avatar" style="width:56px;height:56px;font-size:1.3rem;">
                        <?= strtoupper(substr($profesor['nombre'], 0, 1)) ?>
                    </div>
                    <div>
                        <div class="fw-600 fs-5"><?= htmlspecialchars($profesor['nombre']) ?></div>
                        <div class="text-muted"><?= htmlspecialchars($profesor['email']) ?></div>
                    </div>
                </div>
                <dl class="row mb-0">
                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">Facultad</dt>
                    <dd class="col-sm-8"><?= htmlspecialchars($profesor['facultad']) ?></dd>
                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">Grupo</dt>
                    <dd class="col-sm-8"><?= htmlspecialchars($profesor['grupo']) ?></dd>
                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">Cargo</dt>
                    <dd class="col-sm-8"><?= htmlspecialchars($profesor['cargo']) ?></dd>
                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">Dedicación</dt>
                    <dd class="col-sm-8"><?= htmlspecialchars($profesor['dedicacion']) ?></dd>
                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">Proyectos</dt>
                    <dd class="col-sm-8"><span class="badge bg-primary"><?= $profesor['proyectos'] ?></span></dd>
                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">Estado</dt>
                    <dd class="col-sm-8">
                        <span class="badge-estado <?= $profesor['estado'] === 'Activo' ? 'badge-activo' : 'badge-inactivo' ?>">
                            <?= htmlspecialchars($profesor['estado']) ?>
                        </span>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="card">
            <div class="card-header"><div class="card-title-text"><i class="bi bi-lightning-charge-fill"></i> Acciones</div></div>
            <div class="card-body d-flex flex-column gap-2">
                <a href="<?= BASE_URL ?>?route=proyectos" class="btn btn-outline-primary btn-sm"><i class="bi bi-folder2-open me-1"></i>Ver proyectos</a>
                <a href="<?= BASE_URL ?>?route=participaciones" class="btn btn-outline-primary btn-sm"><i class="bi bi-diagram-3 me-1"></i>Ver participaciones</a>
                <hr>
                <button class="btn btn-outline-danger btn-sm" disabled><i class="bi bi-trash me-1"></i>Eliminar (próx.)</button>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
