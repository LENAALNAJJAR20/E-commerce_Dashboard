<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrdersExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        // Retrieve orders with related user and product data
        return Order::with(['user', 'product'])->get()->map(function ($order) {
            return [
                'Order ID' => $order->id,
                'User Name' => $order->user->name,
                'Product Name' => $order->product->name,
                'Order Date' => $order->OrderDate,
                'Total Price' => $order->TotalPrice,
                'Delivery Status' => $order->delivery_status,
                'Created At' => $order->created_at,
                'Updated At' => $order->updated_at,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Order ID',
            'User Name',
            'Product Name',
            'Order Date',
            'Total Price',
            'Delivery Status',
            'Created At',
            'Updated At',
        ];
    }
}
