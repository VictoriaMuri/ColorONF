<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller {
  public function store(Request $request) {
    $new_service = new Service();
    $new_service->name = $request->name;
    $new_service->price = $request->price;
    $new_service->save();

    return redirect()
      ->back()
      ->withSuccess('Услуга успешно добавлена!');
  }

  public function delete($id) {
    Service::find($id)->delete();
    return redirect()
      ->back()
      ->withSuccess('Запись удалена!');
  }
}
