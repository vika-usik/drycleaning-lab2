<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $services = [
        1 => "Чистка куртки",
        2 => "Чистка пальта",
        3 => "Чистка костюма",
        4 => "Чистка сукні"
    ];

    public function index()
    {
        $output = "<h1>Каталог послуг хімчистки</h1><ul>";

        foreach ($this->services as $id => $service) {
            $output .= "<li>
                <a href='/services/$id'>$service</a>
            </li>";
        }

        $output .= "</ul>";

        return $output;
    }

    public function show($id)
    {
        if (isset($this->services[$id])) {

            return "
                <h1>" . $this->services[$id] . "</h1>
                <p>Опис послуги хімчистки.</p>
                <a href='/services'>Назад до каталогу</a>
            ";
        }

        return "Послугу не знайдено";
    }
}
