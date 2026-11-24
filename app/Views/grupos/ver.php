<?php /** app/Views/grupos/ver.php */ ?>
<div class="page-header">
    <div>
        <h1 class="page-header-title"><i class="bi bi-people-fill me-2 text-primary-custom"></i>Detalle del Grupo</h1>
        <p class="page-header-subtitle">Información del grupo de investigación</p>
    </div>
    <a href="<?= BASE_URL ?>?route=grupos" class="btn btn-outline-secondary btn-sm"><i class="bi bi-arrow-left me-1"></i>Volver</a>
</div>
<?php if (!$grupo): ?>
    <div class="alert alert-danger"><i class="bi bi-exclamation-circle me-2"></i>Grupo no encontrado.</div>
<?php else: ?>
<div class="row g-3">
    <div class="col-12 col-lg-8">
        <div class="card">
            <div class="card-header">
                <div class="card-title-text"><i class="bi bi-info-circle"></i> Información General</div>
                <button class="btn btn-outline-secondary btn-sm" disabled><i class="bi bi-pencil me-1"></i>Editar (próx.)</button>
            </div>
            <div class="card-body p-4">
                <dl class="row mb-0">
                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">Nombre</dt>
                    <dd class="col-sm-8 fw-600"><?= htmlspecialchars($grupo['nombre']) ?></dd>
                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">Facultad</dt>
                    <dd class="col-sm-8"><?= htmlspecialchars($grupo['facultad']) ?></dd>
                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">Líder</dt>
                    <dd class="col-sm-8"><?= htmlspecialchars($grupo['lider']) ?></dd>
                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">Categoría</dt>
                    <dd class="col-sm-8"><span class="badge bg-primary"><?= htmlspecialchars($grupo['categoria']) ?></span></dd>
                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">Estado</dt>
                    <dd class="col-sm-8"><span class="badge-estado badge-activo"><?= htmlspecialchars($grupo['estado']) ?></span></dd>
                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">Miembros</dt>
                    <dd class="col-sm-8"><?= $grupo['miembros'] ?></dd>
                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">Proyectos</dt>
                    <dd class="col-sm-8"><?= $grupo['proyectos'] ?></dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="card">
            <div class="card-header"><div class="card-title-text"><i class="bi bi-lightning-charge-fill"></i> Acciones</div></div>
            <div class="card-body d-flex flex-column gap-2">
                <a href="<?= BASE_URL ?>?route=proyectos" class="btn btn-outline-primary btn-sm"><i class="bi bi-folder2-open me-1"></i>Ver proyectos del grupo</a>
                <a href="<?= BASE_URL ?>?route=profesores" class="btn btn-outline-primary btn-sm"><i class="bi bi-person-badge me-1"></i>Ver miembros</a>
                <hr>
                <button class="btn btn-outline-danger btn-sm" disabled><i class="bi bi-trash me-1"></i>Eliminar (próx.)</button>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
