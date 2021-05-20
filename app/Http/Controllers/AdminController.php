<?php

namespace App\Http\Controllers;

use App\Models\Design;
use App\Models\OtherService;
use App\Models\Service;
use App\Models\TypeService;
use Illuminate\Http\Request;

class AdminController extends Controller {
  public function service() {
    $services = Service::all();
    $designs = Design::all();
    $otherServices = OtherService::all();
    $typeServices = TypeService::all();

    return view('admin.service', [
      'services' => $services,
      'designs' => $designs,
      'otherServices' => $otherServices,
      'typeServices' => $typeServices,
    ]);
  }

  public function main() {
    return view('admin.main-admin');
  }

  public function graph() {
    return view('admin.graph');
  }
}
