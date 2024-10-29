{{--@extends('Components.layout')--}}
{{--@section('content')--}}
{{--    <section class="mt-5 mb-5">--}}
{{--        <div class="container h-auto">--}}
{{--            <div class="row d-flex justify-content-center align-items-center h-100">--}}
{{--                <div class="col-xl-9">--}}
{{--                    <h1  class="text-center mb-4" style="color: black">Add New Order</h1>--}}
{{--                    <form action="{{ route('orders.store') }}" method="POST" class="card shadow-lg"--}}
{{--                          style="border-radius: 15px; background-color: #ffffff;" enctype="multipart/form-data">--}}
{{--                        @csrf--}}
{{--                        @method('post')--}}
{{--                        <div class="mb-3">--}}
{{--                            <label for="product_id" class="form-label" style="font-weight: 600;">Product</label>--}}
{{--                            <select name="product_id" class="form-select">--}}
{{--                                @foreach($products as $product)--}}
{{--                                    <option value="{{ $product['id'] }}">{{ $product['name'] }}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="mb-3">--}}
{{--                            <label for="user_id" class="form-label" style="font-weight: 600;">User</label>--}}
{{--                            <select name="user_id" class="form-select">--}}
{{--                                @foreach($users as $user)--}}
{{--                                    <option value="{{ $user['id'] }}">{{ $user['name'] }}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                            <div class="mb-3">--}}
{{--                                <label for="TotalPrice" class="form-label" style="font-weight: 600;">Total Price</label>--}}
{{--                                <input type="text" name="TotalPrice" class="form-control"/>--}}
{{--                                @error('TotalPrice')--}}
{{--                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        <div class="mb-3">--}}
{{--                            <label for="OrderDate" class="form-label" style="font-weight: 600;">Order Date</label>--}}
{{--                            <input type="date" name="OrderDate" class="form-control"/>--}}
{{--                            @error('OrderDate')--}}
{{--                            <span class="text-danger">{{ $message }}</span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                            <div class="mb-3">--}}
{{--                                <label for="delivery_status" class="form-label" style="font-weight: 600;">delivery Status</label>--}}
{{--                                <select name="delivery_status" id="delivery_status" class="form-select">--}}
{{--                                    <option value="">Select status</option>--}}
{{--                                    <option value="Delivered">Delivered</option>--}}
{{--                                    <option value="undelivered">undelivered</option>--}}
{{--                                </select>--}}
{{--                                @error('delivery_status')--}}
{{--                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                            <div class="text-center">--}}
{{--                                <button type="submit" class="btn  btn-lg"--}}
{{--                                        style="background-color:  #ffd480;color: black">Add Order--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endsection--}}
@extends('Components.layout')
@section('content')
    <section class="mt-5 mb-5">
        <div class="container h-auto">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">
                    <h1 class="text-center mb-4" style="color: #333; font-weight: bold;">Add New Order</h1>
                    <form action="{{ route('orders.store') }}" method="POST" class="card shadow-lg p-4"
                          style="border-radius: 15px; background-color: #f8f9fa;" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="mb-3">
                            <label for="product_id" class="form-label" style="font-weight: 600;">Product</label>
                            <select name="product_id" class="form-select">
                                @foreach($products as $product)
                                    <option value="{{ $product['id'] }}">{{ $product['name'] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="user_id" class="form-label" style="font-weight: 600;">User</label>
                            <select name="user_id" class="form-select">
                                @foreach($users as $user)
                                    <option value="{{ $user['id'] }}">{{ $user['name'] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="TotalPrice" class="form-label" style="font-weight: 600;">Total Price</label>
                            <input type="text" name="TotalPrice" class="form-control" placeholder="Enter total price"/>
                            @error('TotalPrice')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="OrderDate" class="form-label" style="font-weight: 600;">Order Date</label>
                            <input type="date" name="OrderDate" class="form-control"/>
                            @error('OrderDate')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="delivery_status" class="form-label" style="font-weight: 600;">Delivery Status</label>
                            <select name="delivery_status" id="delivery_status" class="form-select">
                                <option value="">Select status</option>
                                <option value="Delivered">Delivered</option>
                                <option value="Undelivered">Undelivered</option>
                            </select>
                            @error('delivery_status')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-lg"
                                    style="background-color: #ffd480; color: black; font-weight: bold;">
                                Add Order
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

