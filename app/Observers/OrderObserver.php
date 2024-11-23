<?php

namespace App\Observers;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class OrderObserver
{
    public function creating(Order $order)
    {
        Log::info('A new order is being created by ' . Auth::guard('admin')->user()->name);
    }

    public function created(Order $order)
    {
        Log::info('Order created successfully to: ' . $order->user->name);
    }

    public function updating(Order $order)
    {
        Log::info('Order is being updated by: ' . Auth::guard('admin')->user()->name);
        Log::info('Original order data: ' . json_encode($order->getOriginal()));

    }
//    public function updating(Order $order)
//    {
//        $original = $order->getOriginal();
//        $original['product_id']= $order->product->name;
//        $original['user_id']= $order->user->name;
//        Log::info('Order is being updated from: ' . Auth::guard('admin')->user()->name);
//        Log::info('Original order data: ' . json_encode($original));
//
//    }
    public function updated(Order $order)
    {
        $changes = $order->getChanges();
        $changes['product_id'] = $order->product->name;
        $changes['user_id']= $order->user->name;
        Log::info('Order updated successfully: ' . $order->id);
        Log::info('Updated fields: ' . json_encode($changes));
        Log::info('============================= ');

    }

    public function deleting(Order $order)
    {
        Log::info('Order is being deleted from: ' . Auth::guard('admin')->user()->name);
    }

    public function deleted(Order $order)
    {
        Log::info('Order deleted successfully: ' . $order->id);
    }
}
