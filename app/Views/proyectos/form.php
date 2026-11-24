<?php /** app/Views/proyectos/form.php */ ?>
<div class="page-header">
    <div>
        <h1 class="page-header-title"><i class="bi bi-folder-plus me-2 text-primary-custom"></i>Nuevo Proyecto de Investigación</h1>
        <p class="page-header-subtitle">Registre un nuevo proyecto en el sistema</p>
    </div>
    <a href="<?= BASE_URL ?>?route=proyectos" class="btn btn-outline-secondary btn-sm"><i class="bi bi-arrow-left me-1"></i>Volver</a>
</div>
<div class="row g-3">
    <div class="col-12 col-lg-8">
        <div class="card">
            <div class="card-header"><div class="card-title-text"><i class="bi bi-pencil-square"></i> Datos del Proyecto</div></div>
            <div class="card-body p-4">
                <div class="alert alert-warning d-flex gap-2 align-items-center mb-4">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    <span>Formulario visual. El guardado en base de datos se implementará en la siguiente fase.</span>
                </div>
                <form>
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Título del Proyecto *</label>
                            <input type="text" class="form-control" placeholder="Título completo del proyecto de investigación">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Grupo de Investigación *</label>
                            <select class="form-select">
                                <option value="">Seleccione un grupo...</option>
                                <option>IA & Salud Digital</option>
                                <option>QuímicaVerde</option>
                                <option>Desarrollo Sostenible</option>
                                <option>TIC & Sociedad</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Investigador Líder *</label>
                            <select class="form-select">
                                <option value="">Seleccione un profesor...</option>
                                <option>Dr. Carlos Méndez</option>
                                <option>Dra. Patricia Lozano</option>
                                <option>Dr. Julio Fernández</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Estado</label>
                            <select class="form-select">
                                <option>Programado</option>
                                <option>Activo</option>
                                <option>Terminado</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Fecha de Inicio *</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Fecha de Finalización *</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Presupuesto (COP)</label>
                            <input type="number" class="form-control" placeholder="Ej: 120000000">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Descripción / Objetivos</label>
                            <textarea class="form-control" rows="4" placeholder="Describa los objetivos generales del proyecto..."></textarea>
                        </div>
                    </div>
                    <div class="d-flex gap-2 mt-4">
                        <button type="submit" class="btn btn-primary-custom" onclick="alert('Función disponible en la siguiente fase.');">
                            <i class="bi bi-save me-1"></i>Guardar Proyecto
                        </button>
                        <a href="<?= BASE_URL ?>?route=proyectos" class="btn btn-outline-secondary">Cancelar</a>
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
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>El ID del proyecto se genera automáticamente.</li>
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>El grupo determina la facultad del proyecto.</li>
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>La fecha de fin debe ser posterior a la de inicio.</li>
                    <li><i class="bi bi-check-circle text-success me-2"></i>Tras crear el proyecto, agregue participantes desde el módulo de Participaciones.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
