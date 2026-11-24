<?php
/**
 * app/Views/facultades/ver.php
 * Detalle de una facultad (datos ficticios).
 */
?>

<div class="page-header">
    <div>
        <h1 class="page-header-title">
            <i class="bi bi-building me-2 text-primary-custom"></i>Detalle de Facultad
        </h1>
        <p class="page-header-subtitle">Información completa de la facultad seleccionada</p>
    </div>
    <a href="<?= BASE_URL ?>?route=facultades" class="btn btn-outline-secondary btn-sm">
        <i class="bi bi-arrow-left me-1"></i>Volver
    </a>
</div>

<?php if (!$facultad): ?>
    <div class="alert alert-danger"><i class="bi bi-exclamation-circle me-2"></i>Facultad no encontrada.</div>
<?php else: ?>
<div class="row g-3">
    <div class="col-12 col-lg-8">
        <div class="card mb-3">
            <div class="card-header">
                <div class="card-title-text"><i class="bi bi-info-circle"></i> Información General</div>
                <button class="btn btn-outline-secondary btn-sm" disabled>
                    <i class="bi bi-pencil me-1"></i>Editar (próx.)
                </button>
            </div>
            <div class="card-body p-4">
                <dl class="row mb-0">
                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">Nombre</dt>
                    <dd class="col-sm-8 fw-600"><?= htmlspecialchars($facultad['nombre']) ?></dd>

                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">Decano/a</dt>
                    <dd class="col-sm-8"><?= htmlspecialchars($facultad['decano']) ?></dd>

                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">Estado</dt>
                    <dd class="col-sm-8">
                        <span class="badge-estado badge-activo"><?= htmlspecialchars($facultad['estado']) ?></span>
                    </dd>

                    <dt class="col-sm-4 text-muted fs-13 text-uppercase">Fecha Creación</dt>
                    <dd class="col-sm-8"><?= htmlspecialchars($facultad['creada']) ?></dd>
                </dl>
            </div>
        </div>

        <!-- Estadísticas de la facultad -->
        <div class="row g-3">
            <div class="col-4">
                <div class="stat-card">
                    <div class="stat-card-icon icon-accent"><i class="bi bi-people-fill"></i></div>
                    <div class="stat-card-info">
                        <div class="stat-value"><?= $facultad['grupos'] ?></div>
                        <div class="stat-label">Grupos</div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="stat-card">
                    <div class="stat-card-icon icon-teal"><i class="bi bi-person-badge-fill"></i></div>
                    <div class="stat-card-info">
                        <div class="stat-value"><?= $facultad['profesores'] ?></div>
                        <div class="stat-label">Profesores</div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="stat-card">
                    <div class="stat-card-icon icon-purple"><i class="bi bi-folder2-open"></i></div>
                    <div class="stat-card-info">
                        <div class="stat-value"><?= $facultad['proyectos'] ?></div>
                        <div class="stat-label">Proyectos</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg-4">
        <div class="card">
            <div class="card-header"><div class="card-title-text"><i class="bi bi-lightning-charge-fill"></i> Acciones</div></div>
            <div class="card-body d-flex flex-column gap-2">
                <a href="<?= BASE_URL ?>?route=grupos" class="btn btn-outline-primary btn-sm">
                    <i class="bi bi-people me-1"></i>Ver grupos de esta facultad
                </a>
                <a href="<?= BASE_URL ?>?route=profesores" class="btn btn-outline-primary btn-sm">
                    <i class="bi bi-person-badge me-1"></i>Ver profesores
                </a>
                <a href="<?= BASE_URL ?>?route=proyectos" class="btn btn-outline-primary btn-sm">
                    <i class="bi bi-folder2-open me-1"></i>Ver proyectos
                </a>
                <hr>
                <button class="btn btn-outline-danger btn-sm" disabled>
                    <i class="bi bi-trash me-1"></i>Eliminar (próx.)
                </button>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
