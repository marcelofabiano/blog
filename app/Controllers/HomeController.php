<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return $this->render('home/index.twig');
    }

    public function show($id)
    {
        return $this->render('home/show.twig');
    }
}
