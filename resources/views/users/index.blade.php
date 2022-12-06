@extends('layouts.admin')


@section('content')
<div class="header d-flex justify-content-between mt-5 mx-3">
    <h1 class="text-light">Users</h1>
    <a class="button" href="{{route('user.create')}}">Create New User</a>
</div>
<div class="row justify-content-center">
    <div class="col-md-10">
        <table class="mt-5 table">
            <thead>
                <tr class="text-light">
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Roles</th>
                    <th scope="col">Member Since</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $users as $user)
                <tr class="text-light">
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->roles->first()->name}}</td>
                    <td>{{$user->created_at->format('d M Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection