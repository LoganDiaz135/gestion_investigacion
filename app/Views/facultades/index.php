<?php
/**
 * app/Views/facultades/index.php
 * Listado de facultades (datos de demostración).
 */
?>

<div class="page-header">
    <div>
        <h1 class="page-header-title">
            <i class="bi bi-building me-2 text-primary-custom"></i>Facultades
        </h1>
        <p class="page-header-subtitle">Gestión de facultades universitarias registradas en el sistema</p>
    </div>
    <div class="d-flex gap-2">
        <a href="<?= BASE_URL ?>?route=facultades/nueva" class="btn btn-primary-custom">
            <i class="bi bi-plus-circle"></i> Nueva Facultad
        </a>
    </div>
</div>

<!-- Barra de búsqueda -->
<div class="card mb-4">
    <div class="card-body py-2 px-3">
        <div class="d-flex align-items-center gap-3 flex-wrap">
            <div class="input-group" style="max-width:320px;">
                <span class="input-group-text bg-white border-end-0">
                    <i class="bi bi-search text-muted"></i>
                </span>
                <input type="text"
                       class="form-control border-start-0 ps-0"
                       placeholder="Buscar facultad..."
                       data-table-filter="tabla-facultades">
            </div>
            <span class="text-muted fs-13 ms-auto">
                Mostrando <?= count($facultades) ?> facultades
            </span>
        </div>
    </div>
</div>

<!-- Tabla -->
<div class="card">
    <div class="table-wrapper">
        <table class="table" id="tabla-facultades">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Facultad</th>
                    <th>Decano/a</th>
                    <th>Grupos</th>
                    <th>Profesores</th>
                    <th>Proyectos</th>
                    <th>Estado</th>
                    <th>Creada</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($facultades as $f): ?>
                <tr>
                    <td class="text-muted fs-13"><?= $f['id'] ?></td>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <div class="stat-card-icon icon-primary" style="width:34px;height:34px;border-radius:8px;font-size:.9rem;flex-shrink:0;">
                                <i class="bi bi-building"></i>
                            </div>
                            <div>
                                <div class="fw-600"><?= htmlspecialchars($f['nombre']) ?></div>
                            </div>
                        </div>
                    </td>
                    <td class="text-muted"><?= htmlspecialchars($f['decano']) ?></td>
                    <td>
                        <span class="badge bg-primary-subtle text-primary fw-600"><?= $f['grupos'] ?></span>
                    </td>
                    <td>
                        <span class="badge bg-info-subtle text-info fw-600"><?= $f['profesores'] ?></span>
                    </td>
                    <td>
                        <span class="badge bg-success-subtle text-success fw-600"><?= $f['proyectos'] ?></span>
                    </td>
                    <td>
                        <span class="badge-estado badge-activo"><?= htmlspecialchars($f['estado']) ?></span>
                    </td>
                    <td class="text-muted fs-13"><?= htmlspecialchars($f['creada']) ?></td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-1">
                            <a href="<?= BASE_URL ?>?route=facultades/ver&id=<?= $f['id'] ?>"
                               class="btn btn-outline-primary btn-action" title="Ver detalle"
                               data-bs-toggle="tooltip">
                                <i class="bi bi-eye"></i>
                            </a>
                            <button class="btn btn-outline-secondary btn-action" title="Editar (próximamente)"
                                    data-bs-toggle="tooltip" disabled>
                                <i class="bi bi-pencil"></i>
                            </button>
                            <button class="btn btn-outline-danger btn-action" title="Eliminar (próximamente)"
                                    data-bs-toggle="tooltip" disabled>
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
