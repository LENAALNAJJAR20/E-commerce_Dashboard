<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\Message;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $todayUsersCount = Admin::count();
        $todayAdminsCount = Admin::whereDate('created_at', Carbon::today())->count();
        $totalUsersCount = User::count();
        $totalMessage = Message::count();
        $totalCategory = Category::count();
        $totalProduct = Product::count();
        $totalOrder = Order::count();
        $totalPriceOrder = Order::sum('TotalPrice');

        return view('index', compact('todayUsersCount', 'todayAdminsCount', 'totalUsersCount', 'totalCategory', 'totalProduct', 'totalMessage', 'totalOrder', 'totalPriceOrder'));
    }
}

