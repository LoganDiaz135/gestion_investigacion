<?php
/**
 * app/Controllers/ErrorController.php
 */
require_once APP_PATH . '/Controllers/BaseController.php';

class ErrorController extends BaseController
{
    public function notFound(): void
    {
        http_response_code(404);
        $this->render('errors/404', [
            'pageTitle'  => 'Página no encontrada',
            'activeMenu' => '',
        ]);
    }
}
