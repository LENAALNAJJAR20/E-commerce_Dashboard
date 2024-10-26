@extends('Components.layout')
@section('content')
    <section class="vh-100 mt-5 mb-5">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-8">
                    <h1  class="text-center mb-4" style="color: black">Add New Category</h1>
                    <form action="{{ route('categories.store') }}" method="POST" class="card shadow-sm"
                          style="border-radius: 15px;" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="card-body">
                            <div class="form-group row align-items-center py-3">
                                <label for="name" class="col-md-3 col-form-label text-md-right">Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control form-control-lg" id="name"
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
                                        <option value="available">Available</option>
                                        <option value="unavailable">Unavailable</option>
                                    </select>
                                    @error('status')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="text-center py-4">
                                <button type="submit" class="btn  btn-lg"
                                        style="background-color:  #ffd480;color: black">Add Category
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
