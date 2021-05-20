<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Design;
use App\Models\OtherService;
use App\Models\TypeService;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index(){
        
        $services = Service::all();
        $designs = Design::all();
        $otherServices = OtherService::all();
        $typeServices = TypeService::all();

        return view('pages.price', [
            'services' => $services,
            'designs' => $designs,
            'otherServices' => $otherServices,
            'typeServices' => $typeServices
        ]);
    }
}
