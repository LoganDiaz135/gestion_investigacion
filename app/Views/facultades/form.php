<?php
/**
 * app/Views/facultades/form.php
 * Formulario de creación/edición de facultad (visual, sin CRUD real).
 */
?>

<div class="page-header">
    <div>
        <h1 class="page-header-title">
            <i class="bi bi-building-add me-2 text-primary-custom"></i>
            <?= $modo === 'crear' ? 'Nueva Facultad' : 'Editar Facultad' ?>
        </h1>
        <p class="page-header-subtitle">Complete los campos para registrar una facultad</p>
    </div>
    <a href="<?= BASE_URL ?>?route=facultades" class="btn btn-outline-secondary btn-sm">
        <i class="bi bi-arrow-left me-1"></i>Volver al listado
    </a>
</div>

<div class="row g-3">
    <div class="col-12 col-lg-8">
        <div class="card">
            <div class="card-header">
                <div class="card-title-text">
                    <i class="bi bi-pencil-square"></i> Información de la Facultad
                </div>
            </div>
            <div class="card-body p-4">
                <div class="alert alert-warning d-flex align-items-center gap-2 mb-4">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    <span>Este formulario es visual. El guardado en base de datos se implementará en la siguiente fase.</span>
                </div>

                <form>
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Nombre de la Facultad *</label>
                            <input type="text" class="form-control" placeholder="Ej: Facultad de Ingeniería" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Decano / Decana *</label>
                            <input type="text" class="form-control" placeholder="Nombre completo">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Fecha de Creación</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Descripción</label>
                            <textarea class="form-control" rows="3" placeholder="Descripción breve de la facultad..."></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Estado</label>
                            <select class="form-select">
                                <option value="Activa">Activa</option>
                                <option value="Inactiva">Inactiva</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex gap-2 mt-4">
                        <button type="submit" class="btn btn-primary-custom" onclick="alert('Función disponible en la siguiente fase.');">
                            <i class="bi bi-save me-1"></i>Guardar Facultad
                        </button>
                        <a href="<?= BASE_URL ?>?route=facultades" class="btn btn-outline-secondary">
                            Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Ayuda -->
    <div class="col-12 col-lg-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title-text"><i class="bi bi-info-circle"></i> Ayuda</div>
            </div>
            <div class="card-body">
                <ul class="list-unstyled fs-13 text-muted">
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>El nombre debe ser único.</li>
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>El decano/a debe ser un profesor registrado.</li>
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>La fecha de creación es informativa.</li>
                    <li><i class="bi bi-check-circle text-success me-2"></i>Solo las facultades activas aparecen en el listado de grupos.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
