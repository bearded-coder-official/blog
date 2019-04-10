<?php

namespace App\Http\Controllers;

use App\Service;

class ServicesController
{
    public function services()
    {
        $services = Service::all();

        return view('services', ['services' => $services]);
    }

    public function service($slug)
    {
        $services = Service::all();

        $service = Service::where('slug', '=', $slug)->first();

        return view('service', ['service' => $service, 'services' => $services]);
    }
}