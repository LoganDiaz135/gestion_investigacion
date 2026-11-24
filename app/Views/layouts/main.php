<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle ?? 'Sistema') ?> — <?= APP_NAME ?></title>

    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/app.css">
</head>
<body>

<!-- ===================== SIDEBAR ===================== -->
<div id="sidebar" class="sidebar d-flex flex-column">
    <!-- Logo / Marca -->
    <div class="sidebar-brand">
        <div class="sidebar-brand-icon">
            <i class="bi bi-mortarboard-fill"></i>
        </div>
        <div class="sidebar-brand-text">
            <span class="brand-title">SGIU</span>
            <span class="brand-subtitle">Investigación</span>
        </div>
    </div>

    <!-- Separador -->
    <hr class="sidebar-divider">

    <!-- Menú de navegación -->
    <nav class="sidebar-nav flex-grow-1">
        <div class="nav-section-label">Principal</div>

        <a href="<?= BASE_URL ?>?route=dashboard"
           class="nav-item <?= ($activeMenu ?? '') === 'dashboard' ? 'active' : '' ?>">
            <i class="bi bi-speedometer2"></i>
            <span>Dashboard</span>
        </a>

        <div class="nav-section-label mt-2">Gestión</div>

        <a href="<?= BASE_URL ?>?route=facultades"
           class="nav-item <?= ($activeMenu ?? '') === 'facultades' ? 'active' : '' ?>">
            <i class="bi bi-building"></i>
            <span>Facultades</span>
        </a>

        <a href="<?= BASE_URL ?>?route=grupos"
           class="nav-item <?= ($activeMenu ?? '') === 'grupos' ? 'active' : '' ?>">
            <i class="bi bi-people-fill"></i>
            <span>Grupos de Investigación</span>
        </a>

        <a href="<?= BASE_URL ?>?route=profesores"
           class="nav-item <?= ($activeMenu ?? '') === 'profesores' ? 'active' : '' ?>">
            <i class="bi bi-person-badge-fill"></i>
            <span>Profesores</span>
        </a>

        <a href="<?= BASE_URL ?>?route=proyectos"
           class="nav-item <?= ($activeMenu ?? '') === 'proyectos' ? 'active' : '' ?>">
            <i class="bi bi-folder2-open"></i>
            <span>Proyectos</span>
        </a>

        <a href="<?= BASE_URL ?>?route=participaciones"
           class="nav-item <?= ($activeMenu ?? '') === 'participaciones' ? 'active' : '' ?>">
            <i class="bi bi-diagram-3-fill"></i>
            <span>Participaciones</span>
        </a>

        <div class="nav-section-label mt-2">Análisis</div>

        <a href="<?= BASE_URL ?>?route=consultas"
           class="nav-item <?= ($activeMenu ?? '') === 'consultas' ? 'active' : '' ?>">
            <i class="bi bi-bar-chart-fill"></i>
            <span>Consultas y Reportes</span>
        </a>
    </nav>

    <!-- Pie del sidebar -->
    <div class="sidebar-footer">
        <div class="d-flex align-items-center gap-2">
            <div class="sidebar-avatar">A</div>
            <div class="sidebar-user-info">
                <div class="sidebar-user-name">Admin</div>
                <div class="sidebar-user-role">Administrador</div>
            </div>
        </div>
    </div>
</div>
<!-- ===================== FIN SIDEBAR ===================== -->

<!-- ===================== CONTENIDO PRINCIPAL ===================== -->
<div id="main-content" class="main-content">

    <!-- Barra superior (topbar) -->
    <div class="topbar">
        <div class="d-flex align-items-center gap-3">
            <!-- Botón toggle sidebar (móvil/tablet) -->
            <button id="sidebarToggle" class="btn btn-sm btn-topbar-toggle" title="Menú">
                <i class="bi bi-list fs-5"></i>
            </button>
            <!-- Breadcrumb / Título -->
            <div class="topbar-title">
                <span><?= htmlspecialchars($pageTitle ?? 'Panel') ?></span>
            </div>
        </div>

        <div class="d-flex align-items-center gap-3">
            <!-- Badge demo -->
            <span class="badge bg-warning text-dark">
                <i class="bi bi-flask me-1"></i>Modo Demo
            </span>
            <!-- Notificaciones -->
            <div class="topbar-icon-btn position-relative" title="Notificaciones">
                <i class="bi bi-bell-fill"></i>
                <span class="topbar-badge">3</span>
            </div>
            <!-- Usuario -->
            <div class="topbar-icon-btn" title="Perfil">
                <i class="bi bi-person-circle"></i>
            </div>
        </div>
    </div>

    <!-- Área de contenido -->
    <div class="page-content">
        <!-- ALERTA DEMO visible en todas las páginas -->
        <div class="alert alert-info alert-dismissible fade show d-flex align-items-center gap-2 mb-4" role="alert">
            <i class="bi bi-info-circle-fill fs-5"></i>
            <div>
                <strong>Modo demostración:</strong> Los datos mostrados son ficticios y se utilizan únicamente para ilustrar la interfaz. La conexión a base de datos se implementará en la siguiente fase.
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>

        <?= $content ?>
    </div>
</div>
<!-- ===================== FIN CONTENIDO PRINCIPAL ===================== -->

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- JS de la aplicación -->
<script src="<?= BASE_URL ?>/assets/js/app.js"></script>
</body>
</html>
