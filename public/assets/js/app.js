/**
 * app.js — Sistema de Gestión de Investigación Universitaria
 * Comportamiento general de la interfaz.
 */

document.addEventListener('DOMContentLoaded', function () {

    // =========================================================
    // SIDEBAR TOGGLE (Móvil / Tablet)
    // =========================================================
    const sidebar        = document.getElementById('sidebar');
    const sidebarToggle  = document.getElementById('sidebarToggle');
    const mainContent    = document.getElementById('main-content');

    // Crear overlay dinámicamente
    const overlay = document.createElement('div');
    overlay.id = 'sidebar-overlay';
    document.body.appendChild(overlay);

    function openSidebar() {
        sidebar.classList.add('show');
        overlay.classList.add('show');
        document.body.style.overflow = 'hidden';
    }

    function closeSidebar() {
        sidebar.classList.remove('show');
        overlay.classList.remove('show');
        document.body.style.overflow = '';
    }

    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function () {
            if (sidebar.classList.contains('show')) {
                closeSidebar();
            } else {
                openSidebar();
            }
        });
    }

    overlay.addEventListener('click', closeSidebar);

    // Cerrar sidebar al hacer click en ítem de menú (móvil)
    document.querySelectorAll('.nav-item').forEach(function (item) {
        item.addEventListener('click', function () {
            if (window.innerWidth < 992) closeSidebar();
        });
    });

    // =========================================================
    // TOOLTIPS Bootstrap
    // =========================================================
    const tooltipEls = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    tooltipEls.forEach(function (el) {
        new bootstrap.Tooltip(el, { trigger: 'hover' });
    });

    // =========================================================
    // ANIMACIÓN DE NÚMEROS (cards del dashboard)
    // =========================================================
    function animateCount(el) {
        const target = parseInt(el.getAttribute('data-target') || el.textContent, 10);
        if (isNaN(target) || target === 0) return;
        const duration = 800;
        const step     = Math.ceil(target / (duration / 16));
        let current    = 0;
        const timer = setInterval(function () {
            current += step;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            el.textContent = current.toLocaleString('es-CO');
        }, 16);
    }

    document.querySelectorAll('.stat-value[data-target]').forEach(animateCount);

    // =========================================================
    // CONFIRMACIÓN DE ACCIONES DESTRUCTIVAS
    // =========================================================
    document.querySelectorAll('[data-confirm]').forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            const msg = btn.getAttribute('data-confirm') || '¿Está seguro de realizar esta acción?';
            if (!confirm(msg)) e.preventDefault();
        });
    });

    // =========================================================
    // FILTRO DE TABLAS (búsqueda en tiempo real)
    // =========================================================
    document.querySelectorAll('[data-table-filter]').forEach(function (input) {
        const tableId = input.getAttribute('data-table-filter');
        const table   = document.getElementById(tableId);
        if (!table) return;

        input.addEventListener('input', function () {
            const q = this.value.toLowerCase().trim();
            table.querySelectorAll('tbody tr').forEach(function (row) {
                row.style.display = row.textContent.toLowerCase().includes(q) ? '' : 'none';
            });
        });
    });

    // =========================================================
    // HIGHLIGHT DEL MENÚ ACTIVO (refuerzo visual)
    // =========================================================
    // Ya se gestiona desde PHP, pero animamos la entrada
    const activeItem = document.querySelector('.nav-item.active');
    if (activeItem) {
        activeItem.scrollIntoView({ block: 'nearest', behavior: 'smooth' });
    }

});
