<?php
/**
 * app/Views/participaciones/index.php
 */
?>

<div class="page-header">
    <div>
        <h1 class="page-header-title">
            <i class="bi bi-diagram-3-fill me-2 text-primary-custom"></i>Participaciones
        </h1>
        <p class="page-header-subtitle">Registro de investigadores participantes en cada proyecto</p>
    </div>
    <a href="<?= BASE_URL ?>?route=participaciones/nueva" class="btn btn-primary-custom">
        <i class="bi bi-diagram-3"></i> Nueva Participación
    </a>
</div>

<div class="card mb-4">
    <div class="card-body py-2 px-3">
        <div class="d-flex align-items-center gap-3 flex-wrap">
            <div class="input-group" style="max-width:320px;">
                <span class="input-group-text bg-white border-end-0"><i class="bi bi-search text-muted"></i></span>
                <input type="text" class="form-control border-start-0 ps-0"
                       placeholder="Buscar participación..."
                       data-table-filter="tabla-participaciones">
            </div>
            <span class="text-muted fs-13 ms-auto"><?= count($participaciones) ?> registros</span>
        </div>
    </div>
</div>

<div class="card">
    <div class="table-wrapper">
        <table class="table" id="tabla-participaciones">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Profesor</th>
                    <th>Proyecto</th>
                    <th>Rol</th>
                    <th>Horas/Sem.</th>
                    <th>Desde</th>
                    <th>Hasta</th>
                    <th>Estado</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($participaciones as $part): ?>
                <tr>
                    <td class="text-muted fs-13"><?= $part['id'] ?></td>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <div class="sidebar-avatar" style="width:30px;height:30px;font-size:.7rem;flex-shrink:0;">
                                <?= strtoupper(substr($part['profesor'], 0, 1)) ?>
                            </div>
                            <span class="fw-600"><?= htmlspecialchars($part['profesor']) ?></span>
                        </div>
                    </td>
                    <td>
                        <div class="fs-13" style="max-width:200px;" title="<?= htmlspecialchars($part['proyecto']) ?>">
                            <code class="text-primary-custom"><?= htmlspecialchars($part['proyecto_id']) ?></code>
                            <br><span class="text-muted"><?= htmlspecialchars(mb_strimwidth($part['proyecto'], 0, 40, '…')) ?></span>
                        </div>
                    </td>
                    <td>
                        <?php $rolClass = $part['rol'] === 'Investigador Principal'
                            ? 'bg-primary text-white'
                            : 'bg-secondary text-white'; ?>
                        <span class="badge <?= $rolClass ?> fs-13"><?= htmlspecialchars($part['rol']) ?></span>
                    </td>
                    <td class="text-center fw-600"><?= $part['horas'] ?></td>
                    <td class="text-muted fs-13"><?= htmlspecialchars($part['desde']) ?></td>
                    <td class="text-muted fs-13"><?= htmlspecialchars($part['hasta']) ?></td>
                    <td>
                        <?php $estClass = match($part['estado']) {
                            'Activo'     => 'badge-activo',
                            'Finalizado' => 'badge-finalizado',
                            'Programado' => 'badge-programado',
                            default      => 'badge-inactivo',
                        }; ?>
                        <span class="badge-estado <?= $estClass ?>"><?= htmlspecialchars($part['estado']) ?></span>
                    </td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-1">
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
