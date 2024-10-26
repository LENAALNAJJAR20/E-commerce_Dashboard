@extends('Components.layout')
@section('content')
    <section class="intro mt-5 mb-5">
        <h1 class="text-center mb-4" style="color: black">Messages Overview</h1>
        <div class="bg-image">
            <div class="mask d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card shadow-lg">
                                <div class="card-body p-0">
                                    <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true">
                                        <table class="table  mb-0">
                                            <thead class="text-white" style="background-color: #2976e3;">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Type Message</th>
                                                <th scope="col">Message</th>
                                                <th scope="col">Created At</th>
                                                <th scope="col">Updated At</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($messages as $message)
                                                <tr>
                                                    <td>{{$message->id}}</td>
                                                    <td>{{$message->name}}</td>
                                                    <td>{{$message->type_message}}</td>
                                                    <td>{{$message->message}}</td>
                                                    <td>{{$message->created_at->format('Y-m-d H:i')}}</td>
                                                    <td>{{$message->updated_at->format('Y-m-d H:i')}}</td>
                                                    <td>
                                                        <a href="{{ route('reply', $message->id) }}"
                                                           class="btn " style="background-color:  #fdf8ee;color: black">Reply</a>
                                                    </td>
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



