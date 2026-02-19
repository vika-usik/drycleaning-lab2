<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return "Ласкаво просимо на сайт хімчистки!";
    }

    public function about()
    {
        return "Цей сайт дозволяє замовляти послуги хімчистки онлайн.";
    }
}
