<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Product::with(['category'])->get()->map(function ($product) {
            return [
                'Product ID' => $product->id,
                'Name Of Product' => $product->name,
                'Category Name' => $product->category->name,
                'description' => $product->description,
                'price' => $product->price,
                'quantity' => $product->quantity,
                'status' => $product->status,
                'Created At' => $product->created_at,
                'Updated At' => $product->updated_at,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Product ID',
            'Name Of Product',
            'Category Name',
            'description',
            'price',
            'quantity ',
            'status ',
            'Created At',
            'Updated At',
        ];
    }
}
