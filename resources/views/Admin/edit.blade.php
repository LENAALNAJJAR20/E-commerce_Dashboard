@extends('Components.layout')
@section('content')
    <section class="mt-5 mb-5">
        <div class="container h-auto">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">
                    <h1 class="" style="color: black">Edit Admin</h1>
                    <form action="{{ route('admin.update', $admin->id) }}" method="POST" class="card"
                          style="border-radius: 15px;">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="row align-items-center pt-4 pb-3">
                                <div class="col-md-3 ps-5">
                                    <h6 class="mb-0">Name</h6>
                                </div>
                                <div class="col-md-9 pe-5">
                                    <input type="text" name="name" class="form-control form-control-lg"
                                           value="{{ old('name', $admin->name) }}"/>
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <hr class="mx-n3">
                            <div class="row align-items-center py-3">
                                <div class="col-md-3 ps-5">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-md-9 pe-5">
                                    <input type="email" name="email" class="form-control form-control-lg"
                                           value="{{ old('email', $admin->email) }}"/>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <hr class="mx-n3">
                            <div class="row align-items-center py-3">
                                <div class="col-md-3 ps-5">
                                    <h6 class="mb-0">Password </h6>
                                </div>
                                <div class="col-md-9 pe-5">
                                    <input type="password" name="password" class="form-control form-control-lg"/>
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <hr class="mx-n3">
                            <div class="px-5 py-4">
                                <button type="submit" class="btn  btn-lg"
                                        style="background-color:  #ffd480;color: black">Update Admin
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
