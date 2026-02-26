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
        return view('services', [
            'services' => $this->services
        ]);
    }

    public function show($id)
    {
        if (!isset($this->services[$id])) {
            abort(404);
        }

        return view('service', [
            'service' => $this->services[$id]
        ]);
    }
}
