@extends('Components.layout')
@section('content')
    <section class="intro mt-5 mb-5">
        <h1 style="color: black">User Management</h1>
        <div class="bg-image">
            <div class="mask d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <!-- Search Form -->
{{--                            <form method="GET" action="{{ route('users.index') }}" class="mb-3">--}}
{{--                                <div class="input-group">--}}
{{--                                    <input type="text" name="search" class="form-control" placeholder="Search by name"--}}
{{--                                           value="{{ request()->input('search') }}">--}}
{{--                                    <button class="btn btn-outline-secondary" type="submit"--}}
{{--                                            style="background-color:  #fdf8ee;color: black">Search--}}
{{--                                    </button>--}}
{{--                                    <a href="{{ route('users.index') }}" class="btn btn-outline-secondary"--}}
{{--                                       style="background-color:  #fdf8ee;color: black">Reset</a>--}}
{{--                                </div>--}}
{{--                            </form>--}}
                            <form method="GET" action="{{ route('users.index') }}" class="mb-3">
                                <div class="input-group">
                                    <input type="text" name="name" class="form-control" placeholder="Search by name" value="{{ request()->input('name') }}">
                                    <input type="text" name="email" class="form-control" placeholder="Search by email" value="{{ request()->input('email') }}">
                                    <button class="btn btn-outline-secondary" type="submit" style="background-color:  #fdf8ee;color: black">Search</button>
                                    <a href="{{ route('users.index') }}" class="btn btn-outline-secondary" style="background-color:  #fdf8ee;color: black">Reset</a>
                                </div>
                            </form>

                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true"
                                         style="position: relative;">
                                        <table class="table  mb-0">
                                            <thead class="text-black-50">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($users as $user)
                                                <tr>
                                                    <td>{{$user->id}}</td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td class="d-flex">
                                                        <form method="POST"
                                                              action="{{ route('users.destroy', $user->id) }}"
                                                              class="icon-button mx-2">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm d-flex align-items-center" onclick="return confirm('Are you sure?')" title="Delete">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                     height="20" class="icon" w viewBox="0 0 448 512">
                                                                    <path fill="#000000"
                                                                          d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                                                </svg>
                                                            </button>
                                                        </form>
                                                        <a href="{{ route('users.edit', $user->id) }}"
                                                           title="Edit">
                                                            <button type="submit" class="btn  btn-sm">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                     height="20" class="icon" viewBox="0 0 512 512">
                                                                    <path fill="#000000"
                                                                          d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-96c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7-14.3 32-32 32L96 448c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 64z"/>
                                                                </svg>
                                                            </button>
                                                        </a>
                                                        <a href="{{ route('users.sendMessage', $user->id) }}"
                                                           class="btn btn-secondary btn-sm d-flex align-items-center mx-2"
                                                           title="Send Message"
                                                           style="background-color:  #fdf8ee;color: black">
                                                            Send Message
                                                        </a>
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


