<?php /** app/Views/grupos/form.php */ ?>
<div class="page-header">
    <div>
        <h1 class="page-header-title"><i class="bi bi-people me-2 text-primary-custom"></i>Nuevo Grupo de Investigación</h1>
        <p class="page-header-subtitle">Complete los campos para registrar un grupo</p>
    </div>
    <a href="<?= BASE_URL ?>?route=grupos" class="btn btn-outline-secondary btn-sm"><i class="bi bi-arrow-left me-1"></i>Volver</a>
</div>
<div class="row g-3">
    <div class="col-12 col-lg-8">
        <div class="card">
            <div class="card-header"><div class="card-title-text"><i class="bi bi-pencil-square"></i> Datos del Grupo</div></div>
            <div class="card-body p-4">
                <div class="alert alert-warning d-flex gap-2 align-items-center mb-4">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    <span>Formulario visual. El guardado en base de datos se implementará en la siguiente fase.</span>
                </div>
                <form>
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Nombre del Grupo *</label>
                            <input type="text" class="form-control" placeholder="Ej: IA & Salud Digital">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Facultad *</label>
                            <select class="form-select">
                                <option value="">Seleccione...</option>
                                <option>Ingeniería</option>
                                <option>Ciencias Exactas</option>
                                <option>Ciencias Sociales</option>
                                <option>Ciencias de la Vida</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Líder del Grupo *</label>
                            <input type="text" class="form-control" placeholder="Nombre del investigador líder">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Categoría MinCiencias</label>
                            <select class="form-select">
                                <option>A1</option><option>A</option><option>B</option><option>C</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Estado</label>
                            <select class="form-select">
                                <option>Activo</option><option>Inactivo</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Descripción</label>
                            <textarea class="form-control" rows="3" placeholder="Objetivos y líneas de investigación del grupo..."></textarea>
                        </div>
                    </div>
                    <div class="d-flex gap-2 mt-4">
                        <button type="submit" class="btn btn-primary-custom" onclick="alert('Función disponible en la siguiente fase.');">
                            <i class="bi bi-save me-1"></i>Guardar Grupo
                        </button>
                        <a href="<?= BASE_URL ?>?route=grupos" class="btn btn-outline-secondary">Cancelar</a>
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
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>El nombre del grupo debe ser único.</li>
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>La categoría corresponde a la clasificación de MinCiencias.</li>
                    <li><i class="bi bi-check-circle text-success me-2"></i>El líder debe estar registrado como profesor activo.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
