@extends('Components.layout')
@section('content')
    <section class="vh-100 mt-5 mb-5" style="background-color: #f8f9fa;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-8">
                    <h3 class="text-center mb-4" style="color:black ">Edit Category: {{ $category->name }}</h3>
                    <form action="{{ route('categories.update', $category->id) }}" method="POST" class="card shadow-sm"
                          style="border-radius: 15px;" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="card-body">
                            <div class="form-group row align-items-center py-3">
                                <label for="name" class="col-md-3 col-form-label text-md-right">Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" value="{{ $category->name }}"
                                           class="form-control form-control-lg" id="name"
                                           placeholder="Enter category name"/>
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="form-group row align-items-center py-3">
                                <label for="status" class="col-md-3 col-form-label text-md-right">Status</label>
                                <div class="col-md-9">
                                    <select name="status" id="status" class="form-control form-control-lg">
                                        <option value="">Select status</option>
                                        <option
                                            value="available" {{ old('status', $category->status) == 'available' ? 'selected' : '' }}>
                                            Available
                                        </option>
                                        <option
                                            value="unavailable" {{ old('status', $category->status) == 'unavailable' ? 'selected' : '' }}>
                                            Unavailable
                                        </option>
                                    </select>
                                    @error('status')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <button type="submit" class="btn btn-lg"
                                        style="background-color:  #ffd480;color: black">Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
