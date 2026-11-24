<?php
/**
 * app/Controllers/ConsultasController.php
 */
require_once APP_PATH . '/Controllers/BaseController.php';

class ConsultasController extends BaseController
{
    public function index(): void
    {
        $this->render('consultas/index', [
            'pageTitle'  => 'Consultas y Reportes',
            'activeMenu' => 'consultas',
        ]);
    }
}
