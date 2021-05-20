<?php

namespace App\Http\Controllers;

use App\Models\Design;
use App\Models\Graph;
use App\Models\Order;
use App\Models\OtherService;
use App\Models\Service;
use App\Models\TypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller {
  public function index() {
    $graphs = Graph::all()->where('status', 'свободно');
    $services = Service::all();
    $designs = Design::all();
    $otherServices = OtherService::all();
    $typeServices = TypeService::all();

    return view('pages.order', [
      'graphs' => $graphs,
      'services' => $services,
      'designs' => $designs,
      'otherServices' => $otherServices,
      'typeServices' => $typeServices,
    ]);
  }

  public function store(Request $request) {
    $new_order = new Order();
    $new_order->service_id = $request->service_id;
    $new_order->design_id = $request->design_id;
    $new_order->other_service_id = $request->other_service_id;
    $new_order->user_id = $request->user_id;
    $new_order->type_service_id = $request->type_service_id;
    $new_order->graph_id = $request->graph_id;

    $p_service = Service::find($request->service_id);
    $p_design = Design::find($request->design_id);
    $p_other_service = OtherService::find($request->other_service_id);
    $p_type_service = TypeService::find($request->type_service_id);
    $sum = $p_service->price + $p_design->price + $p_other_service->price + $p_type_service->price;

    $graph = Graph::find($request->graph_id);
    $graph->status = 'занято';
    $graph->save();

    $new_order->sum = $sum;
    $new_order->save();

    return redirect()
      ->back()
      ->withSuccess('Вы успешно записаны!');
  }

  public function getOrdersForUser() {
    $orders = Order::where('user_id', '=', Auth::user()->id)->get();

    return view('pages.ordersUser', [
      'orders' => $orders,
    ]);
  }

  public function delete($id) {
    Order::find($id)->delete();

    // $graph = Graph::find($graph_id);
    // $graph->status = 'свободно';
    // $graph->save();

    return redirect()
      ->back()
      ->withSuccess('Запись отменена');
  }
}
