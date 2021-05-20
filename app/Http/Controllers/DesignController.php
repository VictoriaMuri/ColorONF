<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function store(Request $request){
        $new_design = new Design();
        $new_design->name = $request->name;
        $new_design->price = $request->price;
        $new_design->save();

        return redirect()->back()->withSuccess('Услуга успешно добавлена!');
    }

    public function delete($id){
        Design::find($id)->delete();
        return redirect()->back()->withSuccess('Запись удалена!');
    }
}
