<?php
/**
 * app/Views/profesores/index.php
 */
?>

<div class="page-header">
    <div>
        <h1 class="page-header-title">
            <i class="bi bi-person-badge-fill me-2 text-primary-custom"></i>Profesores
        </h1>
        <p class="page-header-subtitle">Investigadores y docentes vinculados al sistema</p>
    </div>
    <a href="<?= BASE_URL ?>?route=profesores/nuevo" class="btn btn-primary-custom">
        <i class="bi bi-person-add"></i> Nuevo Profesor
    </a>
</div>

<div class="card mb-4">
    <div class="card-body py-2 px-3">
        <div class="d-flex align-items-center gap-3 flex-wrap">
            <div class="input-group" style="max-width:320px;">
                <span class="input-group-text bg-white border-end-0"><i class="bi bi-search text-muted"></i></span>
                <input type="text" class="form-control border-start-0 ps-0"
                       placeholder="Buscar profesor..."
                       data-table-filter="tabla-profesores">
            </div>
            <div class="d-flex gap-2 ms-auto flex-wrap">
                <select class="form-select form-select-sm" style="width:auto;">
                    <option>Todas las facultades</option>
                    <option>Ingeniería</option>
                    <option>Ciencias Exactas</option>
                    <option>Ciencias Sociales</option>
                    <option>Ciencias de la Vida</option>
                </select>
                <span class="text-muted fs-13 d-flex align-items-center"><?= count($profesores) ?> registros</span>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="table-wrapper">
        <table class="table" id="tabla-profesores">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Profesor/a</th>
                    <th>Facultad</th>
                    <th>Grupo</th>
                    <th>Cargo</th>
                    <th>Dedicación</th>
                    <th>Proyectos</th>
                    <th>Estado</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($profesores as $p): ?>
                <tr>
                    <td class="text-muted fs-13"><?= $p['id'] ?></td>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <div class="sidebar-avatar" style="width:34px;height:34px;font-size:.75rem;flex-shrink:0;">
                                <?= strtoupper(substr($p['nombre'], 0, 1)) ?>
                            </div>
                            <div>
                                <div class="fw-600"><?= htmlspecialchars($p['nombre']) ?></div>
                                <div class="text-muted fs-13"><?= htmlspecialchars($p['email']) ?></div>
                            </div>
                        </div>
                    </td>
                    <td class="text-muted fs-13"><?= htmlspecialchars($p['facultad']) ?></td>
                    <td class="fs-13"><?= htmlspecialchars($p['grupo']) ?></td>
                    <td class="fs-13"><?= htmlspecialchars($p['cargo']) ?></td>
                    <td>
                        <?php $ded = $p['dedicacion'];
                        $dedClass = match($ded) {
                            'Tiempo Completo' => 'bg-success-subtle text-success',
                            'Medio Tiempo'    => 'bg-warning-subtle text-warning',
                            default           => 'bg-secondary-subtle text-secondary',
                        }; ?>
                        <span class="badge <?= $dedClass ?> fs-13"><?= htmlspecialchars($ded) ?></span>
                    </td>
                    <td><span class="badge bg-primary-subtle text-primary fw-600"><?= $p['proyectos'] ?></span></td>
                    <td>
                        <span class="badge-estado <?= $p['estado'] === 'Activo' ? 'badge-activo' : 'badge-inactivo' ?>">
                            <?= htmlspecialchars($p['estado']) ?>
                        </span>
                    </td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-1">
                            <a href="<?= BASE_URL ?>?route=profesores/ver&id=<?= $p['id'] ?>"
                               class="btn btn-outline-primary btn-action" title="Ver detalle" data-bs-toggle="tooltip">
                                <i class="bi bi-eye"></i>
                            </a>
                            <button class="btn btn-outline-secondary btn-action" disabled title="Editar (próx.)" data-bs-toggle="tooltip">
                                <i class="bi bi-pencil"></i>
                            </button>
                            <button class="btn btn-outline-danger btn-action" disabled title="Eliminar (próx.)" data-bs-toggle="tooltip">
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
