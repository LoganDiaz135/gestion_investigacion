<?php
/**
 * app/Views/proyectos/index.php
 */
?>

<div class="page-header">
    <div>
        <h1 class="page-header-title">
            <i class="bi bi-folder2-open me-2 text-primary-custom"></i>Proyectos de Investigación
        </h1>
        <p class="page-header-subtitle">Proyectos activos, programados y finalizados del sistema</p>
    </div>
    <a href="<?= BASE_URL ?>?route=proyectos/nuevo" class="btn btn-primary-custom">
        <i class="bi bi-folder-plus"></i> Nuevo Proyecto
    </a>
</div>

<!-- Filtros -->
<div class="card mb-4">
    <div class="card-body py-2 px-3">
        <div class="d-flex align-items-center gap-3 flex-wrap">
            <div class="input-group" style="max-width:320px;">
                <span class="input-group-text bg-white border-end-0"><i class="bi bi-search text-muted"></i></span>
                <input type="text" class="form-control border-start-0 ps-0"
                       placeholder="Buscar proyecto..."
                       data-table-filter="tabla-proyectos">
            </div>
            <div class="d-flex gap-2 ms-auto flex-wrap">
                <select class="form-select form-select-sm" style="width:auto;">
                    <option>Todos los estados</option>
                    <option>Activo</option>
                    <option>Programado</option>
                    <option>Terminado</option>
                </select>
                <span class="text-muted fs-13 d-flex align-items-center"><?= count($proyectos) ?> proyectos</span>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="table-wrapper">
        <table class="table" id="tabla-proyectos">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Grupo</th>
                    <th>Líder</th>
                    <th>Presupuesto</th>
                    <th>Participantes</th>
                    <th>Estado</th>
                    <th>Inicio</th>
                    <th>Fin</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proyectos as $p): ?>
                <tr>
                    <td><code class="text-primary-custom fw-600 fs-13"><?= htmlspecialchars($p['id']) ?></code></td>
                    <td>
                        <div class="fw-600" style="max-width:260px;" title="<?= htmlspecialchars($p['titulo']) ?>">
                            <?= htmlspecialchars(mb_strimwidth($p['titulo'], 0, 55, '…')) ?>
                        </div>
                        <div class="text-muted fs-13"><?= htmlspecialchars($p['facultad']) ?></div>
                    </td>
                    <td class="text-muted fs-13"><?= htmlspecialchars($p['grupo']) ?></td>
                    <td class="fs-13"><?= htmlspecialchars($p['lider']) ?></td>
                    <td class="fs-13 fw-600"><?= htmlspecialchars($p['presupuesto']) ?></td>
                    <td class="text-center">
                        <span class="badge bg-info-subtle text-info fw-600"><?= $p['participantes'] ?></span>
                    </td>
                    <td>
                        <?php $estadoClass = match($p['estado']) {
                            'Activo'      => 'badge-activo',
                            'Terminado'   => 'badge-terminado',
                            'Programado'  => 'badge-programado',
                            default       => 'badge-inactivo',
                        }; ?>
                        <span class="badge-estado <?= $estadoClass ?>"><?= htmlspecialchars($p['estado']) ?></span>
                    </td>
                    <td class="text-muted fs-13"><?= htmlspecialchars($p['inicio']) ?></td>
                    <td class="text-muted fs-13"><?= htmlspecialchars($p['fin']) ?></td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-1">
                            <a href="<?= BASE_URL ?>?route=proyectos/ver&id=<?= urlencode($p['id']) ?>"
                               class="btn btn-outline-primary btn-action" title="Ver detalle" data-bs-toggle="tooltip">
                                <i class="bi bi-eye"></i>
                            </a>
                            <button class="btn btn-outline-secondary btn-action" disabled title="Editar (próx.)" data-bs-toggle="tooltip"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-outline-danger btn-action" disabled title="Eliminar (próx.)" data-bs-toggle="tooltip"><i class="bi bi-trash"></i></button>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
