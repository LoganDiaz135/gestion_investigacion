<?php /** app/Views/errors/404.php */ ?>

<div class="empty-module py-5 text-center">
    <div style="font-size:5rem;color:#dee2e6;margin-bottom:16px;">
        <i class="bi bi-exclamation-triangle"></i>
    </div>
    <h2 class="fw-700 text-muted mb-2">404 — Página no encontrada</h2>
    <p class="text-muted mb-4">La ruta solicitada no existe en el sistema.</p>
    <a href="<?= BASE_URL ?>?route=dashboard" class="btn btn-primary-custom">
        <i class="bi bi-house-fill me-1"></i>Ir al Dashboard
    </a>
</div>
