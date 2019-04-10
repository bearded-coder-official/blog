<?php

namespace App\Services;

use App\Service;

class GetServices
{
    public function get()
    {
        $services = Service::all();

        return $services;
    }
}