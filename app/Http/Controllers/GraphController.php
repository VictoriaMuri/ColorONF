<?php

namespace App\Http\Controllers;

use App\Models\Graph;
use Illuminate\Http\Request;

class GraphController extends Controller {
  public function store(Request $request) {
    $new_graph = new Graph();
    $new_graph->date = $request->date;
    $new_graph->time = $request->time;
    $new_graph->status = 'свободно';
    $new_graph->save();

    return redirect()
      ->back()
      ->withSuccess('График успешно добавлен!');
  }

  public function destroy($id) {
    Graph::find($id)->delete();
    return redirect()
      ->back()
      ->withSuccess('График удален!');
  }

  public function index() {
    $graphs = Graph::all();

    return view('admin.graph', [
      'graphs' => $graphs,
    ]);
  }
}
