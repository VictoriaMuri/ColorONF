<?php

namespace App\Http\Controllers;

use App\Models\OtherService;
use Illuminate\Http\Request;

class OtherServiceController extends Controller
{
    public function store(Request $request){
        $new_otherService = new OtherService();
        $new_otherService->name = $request->name;
        $new_otherService->price = $request->price;
        $new_otherService->save();

        return redirect()->back()->withSuccess('Услуга успешно добавлена!');
    }

    public function delete($id){
        OtherService::find($id)->delete();
        return redirect()->back()->withSuccess('Запись удалена!');
    }
}
