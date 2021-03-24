@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users List</div>

                <table class="table">
                    <thead>
                      <tr>
                        {{-- <th scope="col">#</th> --}}
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if ($users->count() > 0)
                            @foreach ($users as $user)
                                <tr>
                                    {{-- <th scope="row">1</th> --}}
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td> <a class="dropdown-item" href="{{ route("user-login", ["id" => $user->id]) }}">Login</a></td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3">User Not found</td>
                            </tr>  
                        @endif
                       
                     
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
