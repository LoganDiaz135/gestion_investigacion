<?php /** app/Views/participaciones/form.php */ ?>
<div class="page-header">
    <div>
        <h1 class="page-header-title"><i class="bi bi-diagram-3 me-2 text-primary-custom"></i>Nueva Participación</h1>
        <p class="page-header-subtitle">Vincule un investigador a un proyecto de investigación</p>
    </div>
    <a href="<?= BASE_URL ?>?route=participaciones" class="btn btn-outline-secondary btn-sm"><i class="bi bi-arrow-left me-1"></i>Volver</a>
</div>
<div class="row g-3">
    <div class="col-12 col-lg-8">
        <div class="card">
            <div class="card-header"><div class="card-title-text"><i class="bi bi-pencil-square"></i> Datos de la Participación</div></div>
            <div class="card-body p-4">
                <div class="alert alert-warning d-flex gap-2 align-items-center mb-4">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    <span>Formulario visual. El guardado en base de datos se implementará en la siguiente fase.</span>
                </div>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Proyecto *</label>
                            <select class="form-select">
                                <option value="">Seleccione un proyecto...</option>
                                <option>PRY-2024-001 — IA & Salud Digital</option>
                                <option>PRY-2024-002 — Cambio Climático</option>
                                <option>PRY-2024-003 — Blockchain</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Profesor / Investigador *</label>
                            <select class="form-select">
                                <option value="">Seleccione un profesor...</option>
                                <option>Dr. Carlos Méndez</option>
                                <option>Dra. Patricia Lozano</option>
                                <option>Dr. Julio Fernández</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Rol en el Proyecto *</label>
                            <select class="form-select">
                                <option>Investigador Principal</option>
                                <option>Co-investigador</option>
                                <option>Joven Investigador</option>
                                <option>Auxiliar de Investigación</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Horas Semanales Dedicadas</label>
                            <input type="number" class="form-control" min="1" max="40" placeholder="Ej: 20">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Fecha de Inicio *</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Fecha de Fin</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="d-flex gap-2 mt-4">
                        <button type="submit" class="btn btn-primary-custom" onclick="alert('Función disponible en la siguiente fase.');">
                            <i class="bi bi-save me-1"></i>Guardar Participación
                        </button>
                        <a href="<?= BASE_URL ?>?route=participaciones" class="btn btn-outline-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="card">
            <div class="card-header"><div class="card-title-text"><i class="bi bi-info-circle"></i> Ayuda</div></div>
            <div class="card-body fs-13 text-muted">
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Un profesor no puede participar dos veces en el mismo proyecto.</li>
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Solo un investigador puede ser Principal por proyecto.</li>
                    <li><i class="bi bi-check-circle text-success me-2"></i>Las horas semanales no deben superar el máximo según la dedicación del profesor.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
