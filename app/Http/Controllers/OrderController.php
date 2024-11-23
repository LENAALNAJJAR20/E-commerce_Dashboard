<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\OrdersExport;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Order::with('product')->paginate(20);
        return view('Order.index', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $orders = Order::all();
        $products = Product::all();
        $users = User::all();
        return view('Order.create', compact('orders','products','users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = request()->validate([
            'product_id' => 'required|exists:products,id',
            'user_id' => 'required|exists:users,id',
            'delivery_status' => 'required',
            'TotalPrice' => 'required',
            'OrderDate' => 'required',
        ]);
        Order::create($validate);
        return redirect()->route('orders.index');
    }

    public function export()
    {
        return Excel::download(new OrdersExport, 'orders.xlsx');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $products = Product::all();
        $users = User::all();
        return view('Order.edit', compact('order', 'products','users'));
    }

    public function update(Request $request, Order $order)
    {
        $validate = request()->validate([
            'product_id' => 'required|exists:products,id',
            'user_id' => 'required|exists:users,id',
            'delivery_status' => 'required',
            'TotalPrice' => 'required',
            'OrderDate' => 'required',
        ]);
        $order->update($validate);
        return redirect()->route('orders.index');
    }

    public function destroy($id)
    {
        Order::destroy($id);
        return redirect()->route('orders.index');
    }
}
