@extends('Components.layout')
@section('content')
    <section class="intro mt-5 mb-5">
        <h1 class="text-center mb-4" style="color: #333; font-weight: 700; font-size: 2.5rem;">Order Overview</h1>

        <!-- Export to Excel Button -->
        <div class="text-center mb-4">
            <a href="{{ route('orders.export') }}" class="btn" style="background-color: #fac973; color: black; border-radius: 5px; font-weight: 600; padding: 12px 30px;">
                Export to Excel
            </a>
        </div>

        <!-- Order Cards -->
        <div class="bg-image">
            <div class="mask d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        @foreach($order as $item)
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card shadow-sm" style="border-radius: 10px; border: 1px solid #ddd;">
                                    <div class="card-body">
                                        <!-- Order ID -->
                                        <h5 class="card-title" style="color: #ffd480; font-size: 1.25rem;">Order ID: {{$item->id}}</h5>

                                        <!-- User Info -->
                                        <p class="card-text" style="font-size: 1rem;"><strong>User Name:</strong> {{$item->user->name}}</p>
                                        <p class="card-text" style="font-size: 1rem;"><strong>Product Name:</strong> {{$item->product->name}}</p>

                                        <!-- Order Date and Total Price -->
                                        <p class="card-text" style="font-size: 1rem;"><strong>Order Date:</strong> {{$item->OrderDate}}</p>
                                        <p class="card-text" style="font-size: 1rem;"><strong>Total Price:</strong> ${{$item->TotalPrice}}</p>

                                        <!-- Free Shipping Message -->
                                        @if($item->TotalPrice > 50)
                                            <p class="card-text" style="color: #ffd480; font-size: 1rem;"><strong>Message:</strong> Free shipping on this order!</p>
                                        @endif

                                        <!-- Created and Updated At -->
                                        <p class="card-text" style="font-size: 0.875rem; color: #777;"><small>Created At: {{$item->created_at->format('Y-m-d H:i')}}</small></p>
                                        <p class="card-text" style="font-size: 0.875rem; color: #777;"><small>Updated At: {{$item->updated_at->format('Y-m-d H:i')}}</small></p>

                                        <!-- Delivery Status -->
                                        <p class="card-text" style="font-size: 1rem; font-weight: 600;"><strong>Delivery Status:</strong> {{$item->delivery_status}}</p>

                                        <!-- Delivery Note or Feedback -->
                                        @if($item->delivery_status !== 'Delivered')
                                            <p class="card-text" style="color: #e8ce7d; font-size: 1rem;"><strong>Note:</strong> Your order will take 4 days to deliver.</p>
                                        @else
                                            <p class="card-text" style="color: #ffd480; font-size: 1rem;"><strong>Feedback:</strong> We hope you enjoyed your order! Please provide your feedback.</p>
                                        @endif

                                        <!-- Edit Button -->
                                        <div class="d-flex justify-content-between mt-3">
                                            <a href="{{ route('orders.edit', $item->id) }}" class="btn btn-sm" style=" color: black; border-radius: 5px;" title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512">
                                                    <path fill="#000000" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-96c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7-14.3 32-32 32L96 448c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 64z"/>
                                                </svg>
                                            </a>

                                            <!-- Delete Button -->
                                            <form method="POST" action="{{ route('orders.destroy',$item->id) }}" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm d-flex align-items-center" onclick="return confirm('Are you sure?')" style=" color: white; border-radius: 5px;" title="Delete">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 448 512">
                                                        <path fill="#000000" d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
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



