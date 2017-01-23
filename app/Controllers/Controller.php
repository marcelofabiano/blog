<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class Controller
{
    protected $request;

    protected $view;

    protected $response;

    public function __construct(Request $request, Response $response, $view)
    {
        $this->request = $request;
        $this->response = $response;
        $this->view = $view;
    }

    protected function render($view, $args = [])
    {
        return $this->view->render($this->response, $view, $args);
    }
}
