<?php /** app/Views/profesores/form.php */ ?>
<div class="page-header">
    <div>
        <h1 class="page-header-title"><i class="bi bi-person-add me-2 text-primary-custom"></i>Nuevo Profesor</h1>
        <p class="page-header-subtitle">Registre un nuevo investigador o docente en el sistema</p>
    </div>
    <a href="<?= BASE_URL ?>?route=profesores" class="btn btn-outline-secondary btn-sm"><i class="bi bi-arrow-left me-1"></i>Volver</a>
</div>
<div class="row g-3">
    <div class="col-12 col-lg-8">
        <div class="card">
            <div class="card-header"><div class="card-title-text"><i class="bi bi-pencil-square"></i> Datos del Profesor</div></div>
            <div class="card-body p-4">
                <div class="alert alert-warning d-flex gap-2 align-items-center mb-4">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    <span>Formulario visual. El guardado en base de datos se implementará en la siguiente fase.</span>
                </div>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nombres *</label>
                            <input type="text" class="form-control" placeholder="Nombres del profesor">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Apellidos *</label>
                            <input type="text" class="form-control" placeholder="Apellidos">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Correo Institucional *</label>
                            <input type="email" class="form-control" placeholder="correo@universidad.edu">
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
                            <label class="form-label">Grupo de Investigación</label>
                            <select class="form-select">
                                <option value="">Sin grupo</option>
                                <option>IA & Salud Digital</option>
                                <option>QuímicaVerde</option>
                                <option>Desarrollo Sostenible</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Cargo</label>
                            <select class="form-select">
                                <option>Profesor Titular</option>
                                <option>Profesor Asociado</option>
                                <option>Profesor Asistente</option>
                                <option>Cátedra</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Dedicación</label>
                            <select class="form-select">
                                <option>Tiempo Completo</option>
                                <option>Medio Tiempo</option>
                                <option>Cátedra</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Estado</label>
                            <select class="form-select">
                                <option>Activo</option>
                                <option>Inactivo</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex gap-2 mt-4">
                        <button type="submit" class="btn btn-primary-custom" onclick="alert('Función disponible en la siguiente fase.');">
                            <i class="bi bi-save me-1"></i>Guardar Profesor
                        </button>
                        <a href="<?= BASE_URL ?>?route=profesores" class="btn btn-outline-secondary">Cancelar</a>
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
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>El correo debe ser único en el sistema.</li>
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Un profesor puede pertenecer a un solo grupo.</li>
                    <li><i class="bi bi-check-circle text-success me-2"></i>La dedicación afecta las horas máximas por proyecto.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
