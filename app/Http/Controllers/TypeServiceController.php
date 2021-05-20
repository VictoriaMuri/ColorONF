<?php

namespace App\Http\Controllers;

use App\Models\TypeService;
use Illuminate\Http\Request;

class TypeServiceController extends Controller
{
    public function store(Request $request){
        $new_typeService = new TypeService();
        $new_typeService->name = $request->name;
        $new_typeService->price = $request->price;
        $new_typeService->save();

        return redirect()->back()->withSuccess('Услуга успешно добавлена!');
    }

    public function delete($id){
        TypeService::find($id)->delete();
        return redirect()->back()->withSuccess('Запись удалена!');
    }
}
