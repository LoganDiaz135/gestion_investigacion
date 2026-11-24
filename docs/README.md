# Sistema de Gestión de Investigación Universitaria (SGIU)
## Documentación Técnica — Tarea 1: Estructura Inicial

---

## Descripción del Sistema

Aplicación web académica para administrar facultades, grupos de investigación, profesores, proyectos e investigadores de una universidad.

## Tecnologías

| Tecnología | Versión |
|------------|---------|
| PHP | 8.2+ |
| Apache | XAMPP |
| Bootstrap | 5.3 |
| Bootstrap Icons | 1.11 |
| JavaScript | Vanilla ES6 |
| MySQL (futura) | 8.0 |

## Arquitectura MVC

```
gestion_investigacion/
├── .htaccess                    ← Redirige todo a public/
├── config/
│   ├── app.php                  ← Constantes globales y configuración
│   └── routes.php               ← Tabla de rutas de la aplicación
├── public/
│   ├── .htaccess                ← Reglas de reescritura de URL
│   ├── index.php                ← Punto de entrada único (front controller)
│   └── assets/
│       ├── css/app.css          ← Estilos personalizados
│       ├── js/app.js            ← JavaScript de la interfaz
│       └── img/                 ← Imágenes (vacío en Tarea 1)
├── app/
│   ├── Controllers/
│   │   ├── BaseController.php   ← Render + redirect comunes
│   │   ├── DashboardController.php
│   │   ├── FacultadesController.php
│   │   ├── GruposController.php
│   │   ├── ProfesoresController.php
│   │   ├── ProyectosController.php
│   │   ├── ParticipacionesController.php
│   │   ├── ConsultasController.php
│   │   └── ErrorController.php
│   ├── Models/                  ← Vacío en Tarea 1 (se usa en Tarea 2)
│   └── Views/
│       ├── layouts/main.php     ← Layout HTML reutilizable (sidebar + topbar)
│       ├── dashboard/index.php
│       ├── facultades/{index,form,ver}.php
│       ├── grupos/{index,form,ver}.php
│       ├── profesores/{index,form,ver}.php
│       ├── proyectos/{index,form,ver}.php
│       ├── participaciones/{index,form}.php
│       ├── consultas/index.php
│       └── errors/404.php
└── docs/
    └── README.md                ← Este archivo
```

## Flujo de Petición

```
Navegador → Apache → .htaccess → public/index.php
         → routes.php → Controller → View → Layout → HTML
```

## Rutas Disponibles

| Ruta | Controlador | Acción | Vista |
|------|-------------|--------|-------|
| / o dashboard | DashboardController | index | dashboard/index |
| facultades | FacultadesController | index | facultades/index |
| facultades/nueva | FacultadesController | nueva | facultades/form |
| facultades/ver?id=N | FacultadesController | ver | facultades/ver |
| grupos | GruposController | index | grupos/index |
| profesores | ProfesoresController | index | profesores/index |
| proyectos | ProyectosController | index | proyectos/index |
| participaciones | ParticipacionesController | index | participaciones/index |
| consultas | ConsultasController | index | consultas/index |

## Instrucciones de Ejecución en XAMPP

1. Asegúrese de tener XAMPP con Apache activo.
2. El proyecto debe estar en: `C:\xampp\htdocs\gestion_investigacion\`
3. Abra el navegador y acceda a:
   `http://localhost/gestion_investigacion/public/`
4. Si Apache no reescribe URLs, verifique que `mod_rewrite` esté habilitado en `httpd.conf`.

## Estado Actual (Tarea 1)

- [x] Estructura de directorios MVC
- [x] Sistema de rutas simple
- [x] Layout principal reutilizable (sidebar + topbar)
- [x] Dashboard con datos ficticios
- [x] Vistas de listado para todos los módulos
- [x] Formularios visuales (sin CRUD real)
- [x] Diseño responsive con Bootstrap 5
- [x] Búsqueda en tiempo real en tablas
- [x] Animación de contadores en dashboard
- [ ] Conexión MySQL (Tarea 2)
- [ ] CRUD real (Tarea 2)
- [ ] Procedimientos almacenados (Tarea 3)
- [ ] Triggers (Tarea 3)
