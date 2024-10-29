@extends('Components.layout')
@section('content')
    <section class="intro mt-5 mb-5">
        <h1 class="text-center  mb-4" style="color: black">Order Overview</h1>
        <a href="{{ route('orders.export') }}" style="background-color:#fac973;color: black" class="btn mb-4">Export to Excel</a>
        <div class="bg-image">
            <div class="mask d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        @foreach($order as $item)
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #ffd480 ">Order ID: {{$item->id}}</h5>
                                        <p class="card-text"><strong>User Name:</strong> {{$item->user->name}}</p>
                                        <p class="card-text"><strong>Product Name:</strong> {{$item->product->name}}</p>
                                        <p class="card-text"><strong>Order Date:</strong> {{$item->OrderDate}}</p>
                                        <p class="card-text"><strong>Total Price:</strong> {{$item->TotalPrice}} $</p>
                                        @if($item->TotalPrice > 50)
                                            <p style="color: #ffd480 "><strong>Message:</strong> Free shipping on this
                                                order!</p>
                                        @endif
                                        <p class="card-text"><small>Created
                                                At: {{$item->created_at->format('Y-m-d H:i')}}</small></p>
                                        <p class="card-text"><small>Updated
                                                At: {{$item->updated_at->format('Y-m-d H:i')}}</small></p>
                                        <p class="card-text"><strong>Delivery
                                                Status:</strong> {{$item->delivery_status}}</p>
                                        @if($item->delivery_status !== 'Delivered')
                                            <p style="color: #e8ce7d "><strong>Note:</strong> Your order will take 4
                                                days to deliver.</p>
                                        @else
                                            <p style="color: #ffd480 "><strong>Feedback:</strong> We hope you enjoyed
                                                your order! Please provide your feedback.</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


