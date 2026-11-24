<?php
/**
 * app/Views/grupos/index.php
 * Listado de grupos de investigación.
 */
?>

<div class="page-header">
    <div>
        <h1 class="page-header-title">
            <i class="bi bi-people-fill me-2 text-primary-custom"></i>Grupos de Investigación
        </h1>
        <p class="page-header-subtitle">Grupos registrados en el sistema de investigación universitaria</p>
    </div>
    <a href="<?= BASE_URL ?>?route=grupos/nuevo" class="btn btn-primary-custom">
        <i class="bi bi-plus-circle"></i> Nuevo Grupo
    </a>
</div>

<div class="card mb-4">
    <div class="card-body py-2 px-3">
        <div class="d-flex align-items-center gap-3 flex-wrap">
            <div class="input-group" style="max-width:320px;">
                <span class="input-group-text bg-white border-end-0">
                    <i class="bi bi-search text-muted"></i>
                </span>
                <input type="text" class="form-control border-start-0 ps-0"
                       placeholder="Buscar grupo..."
                       data-table-filter="tabla-grupos">
            </div>
            <div class="d-flex gap-2 ms-auto flex-wrap">
                <select class="form-select form-select-sm" style="width:auto;">
                    <option>Todas las categorías</option>
                    <option>A1</option><option>A</option><option>B</option><option>C</option>
                </select>
                <span class="text-muted fs-13 d-flex align-items-center">
                    <?= count($grupos) ?> grupos
                </span>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="table-wrapper">
        <table class="table" id="tabla-grupos">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre del Grupo</th>
                    <th>Facultad</th>
                    <th>Líder</th>
                    <th>Categoría</th>
                    <th>Miembros</th>
                    <th>Proyectos</th>
                    <th>Estado</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($grupos as $g): ?>
                <tr>
                    <td class="text-muted fs-13"><?= $g['id'] ?></td>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <div class="stat-card-icon icon-accent" style="width:34px;height:34px;border-radius:8px;font-size:.9rem;flex-shrink:0;">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <span class="fw-600"><?= htmlspecialchars($g['nombre']) ?></span>
                        </div>
                    </td>
                    <td class="text-muted fs-13"><?= htmlspecialchars($g['facultad']) ?></td>
                    <td><?= htmlspecialchars($g['lider']) ?></td>
                    <td>
                        <?php $cat = $g['categoria'];
                        $catClass = match($cat) {
                            'A1' => 'bg-primary text-white',
                            'A'  => 'bg-info text-white',
                            'B'  => 'bg-secondary text-white',
                            default => 'bg-light text-dark',
                        }; ?>
                        <span class="badge <?= $catClass ?>"><?= htmlspecialchars($cat) ?></span>
                    </td>
                    <td><span class="badge bg-primary-subtle text-primary fw-600"><?= $g['miembros'] ?></span></td>
                    <td><span class="badge bg-success-subtle text-success fw-600"><?= $g['proyectos'] ?></span></td>
                    <td>
                        <span class="badge-estado <?= $g['estado'] === 'Activo' ? 'badge-activo' : 'badge-inactivo' ?>">
                            <?= htmlspecialchars($g['estado']) ?>
                        </span>
                    </td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-1">
                            <a href="<?= BASE_URL ?>?route=grupos/ver&id=<?= $g['id'] ?>"
                               class="btn btn-outline-primary btn-action" title="Ver detalle"
                               data-bs-toggle="tooltip">
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
