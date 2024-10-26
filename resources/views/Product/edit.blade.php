@extends('Components.layout')
@section('content')
    <section class="mt-5 mb-5">
        <div class="container h-auto">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">
                    <h1 class="text-center text-black mb-4" style="font-size: 2.5rem; color: #333;">Edit Product</h1>
                    <form action="{{ route('products.update', $product->id) }}" method="POST" class="card shadow-lg"
                          style="border-radius: 15px; background-color: #ffffff;" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <label for="image" class="form-label" style="font-weight: 600;">Upload Image</label>
                                <input type="file" accept="image/*" name="image" id="image" class="form-control"/>
                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <hr>
                            <div class="mb-3">
                                <label for="name" class="form-label" style="font-weight: 600;">Product Name</label>
                                <input type="text" name="name" class="form-control"
                                       value="{{ old('name', $product->name) }}"/>
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label"
                                       style="font-weight: 600;">Description</label>
                                <textarea name="description" class="form-control"
                                          rows="4">{{ old('description', $product->description) }}</textarea>
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="category_id" class="form-label" style="font-weight: 600;">Category</label>
                                <select name="category_id" id="category_id" class="form-select">
                                    @foreach($categories as $category)
                                        <option
                                            value="{{ $category['id'] }}" {{ $product->category_id == $category['id'] ? 'selected' : '' }}>
                                            {{ $category['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label" style="font-weight: 600;">Price</label>
                                <input type="text" name="price" class="form-control"
                                       value="{{ old('price', $product->price) }}"/>
                                @error('price')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="quantity" class="form-label" style="font-weight: 600;">Quantity</label>
                                <input type="text" name="quantity" class="form-control"
                                       value="{{ old('quantity', $product->quantity) }}"/>
                                @error('quantity')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label" style="font-weight: 600;">Status</label>
                                <select name="status" id="status" class="form-select">
                                    <option value="">Select status</option>
                                    <option
                                        value="available" {{ old('status', $product->status) == 'available' ? 'selected' : '' }}>
                                        Available
                                    </option>
                                    <option
                                        value="unavailable" {{ old('status', $product->status) == 'unavailable' ? 'selected' : '' }}>
                                        Unavailable
                                    </option>
                                </select>
                                @error('status')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg"
                                        style="background-color:  #ffd480;color: black">Update
                                    Product
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection


