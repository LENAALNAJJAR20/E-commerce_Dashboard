@extends('Components.layout')
@section('content')
    <section class="intro mt-5 mb-5">
        <h1 class="text-center mb-4" style="color:black ">Wishlist Overview</h1>
        <div class="bg-image">
            <div class="mask d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true"
                                         style="position: relative;">
                                        <table class="table mb-0">
                                            <thead class="text-white" style="background-color: #2976e3;">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">User Name</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Created At</th>
                                                <th scope="col">Updated At</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($wishlist as $item)
                                                <tr class="hover-effect">
                                                    <td>{{$item->id}}</td>
                                                    <td>{{$item->user->name}}</td>
                                                    <td>{{$item->product->name }}</td>
                                                    <td>{{$item->created_at->format('Y-m-d H:i')}}</td>
                                                    <td>{{$item->updated_at->format('Y-m-d H:i')}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



