@extends('Components.layout')
@section('content')
    <section class="mt-5 mb-5">
        <div class="container h-auto">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">
                    <h1  class="text-center mb-4" style="color: black">Add New Product</h1>
                    <form action="{{ route('products.store') }}" method="POST" class="card shadow-lg"
                          style="border-radius: 15px; background-color: #ffffff;" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <label for="image" class="form-label" style="font-weight: 600;">Attach Image</label>
                                <input type="file" accept="image/*" name="image" id="image" class="form-control"/>
                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <hr>
                            <div class="mb-3">
                                <label for="name" class="form-label" style="font-weight: 600;">Product Name</label>
                                <input type="text" name="name" class="form-control"/>
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label"
                                       style="font-weight: 600;">Description</label>
                                <textarea name="description" class="form-control" rows="4"></textarea>
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label" style="font-weight: 600;">Price</label>
                                <input type="text" name="price" class="form-control"/>
                                @error('price')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="quantity" class="form-label" style="font-weight: 600;">Quantity</label>
                                <input type="text" name="quantity" class="form-control"/>
                                @error('quantity')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label" style="font-weight: 600;">Status</label>
                                <select name="status" id="status" class="form-select">
                                    <option value="">Select status</option>
                                    <option value="available">Available</option>
                                    <option value="unavailable">Unavailable</option>
                                </select>
                                @error('status')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="category_id" class="form-label" style="font-weight: 600;">Categories</label>
                                <select name="category_id" class="form-select">
                                    @foreach($categories as $category)
                                        <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn  btn-lg"
                                        style="background-color:  #ffd480;color: black">Add Product
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
