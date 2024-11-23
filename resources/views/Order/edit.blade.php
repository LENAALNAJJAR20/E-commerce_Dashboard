@extends('Components.layout')
@section('content')
    <section class="mt-5 mb-5">
        <div class="container h-auto">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-md-10 col-sm-12">
                    <h1 class="text-center text-dark mb-4" style="font-size: 2.5rem; font-weight: 700;">Edit Order</h1>
                    <form action="{{ route('orders.update', $order->id) }}" method="POST" class="card shadow-lg p-4" style="border-radius: 15px; background-color: #ffffff;" enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <!-- Product Selection -->
                        <div class="mb-4">
                            <label for="product_id" class="form-label" style="font-weight: 600; font-size: 1rem;">Product</label>
                            <select name="product_id" id="product_id" class="form-select">
                                @foreach($products as $product)
                                    <option value="{{ $product['id'] }}" {{ $order->product_id == $product['id'] ? 'selected' : '' }}>
                                        {{ $product['name'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- User Selection -->
                        <div class="mb-4">
                            <label for="user_id" class="form-label" style="font-weight: 600; font-size: 1rem;">User</label>
                            <select name="user_id" id="user_id" class="form-select">
                                @foreach($users as $user)
                                    <option value="{{ $user['id'] }}" {{ $order->user_id == $user['id'] ? 'selected' : '' }}>
                                        {{ $user['name'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Total Price -->
                        <div class="mb-4">
                            <label for="TotalPrice" class="form-label" style="font-weight: 600; font-size: 1rem;">Total Price</label>
                            <input type="text" name="TotalPrice" class="form-control" value="{{ old('TotalPrice', $order->TotalPrice) }}" />
                            @error('TotalPrice')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Order Date -->
                        <div class="mb-4">
                            <label for="OrderDate" class="form-label" style="font-weight: 600; font-size: 1rem;">Order Date</label>
                            <input type="date" name="OrderDate" class="form-control" value="{{ old('OrderDate', $order->OrderDate) }}" />
                            @error('OrderDate')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Delivery Status -->
                        <div class="mb-4">
                            <label for="delivery_status" class="form-label" style="font-weight: 600; font-size: 1rem;">Status</label>
                            <select name="delivery_status" id="delivery_status" class="form-select">
                                <option value="">Select status</option>
                                <option value="Delivered" {{ old('delivery_status', $order->delivery_status) == 'Delivered' ? 'selected' : '' }}>
                                    Delivered
                                </option>
                                <option value="undelivered" {{ old('delivery_status', $order->delivery_status) == 'undelivered' ? 'selected' : '' }}>
                                    Undelivered
                                </option>
                            </select>
                            @error('delivery_status')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg" style="background-color: #ffd480; color: black; border-radius: 10px; padding: 12px 30px;">
                                Update Order
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection


