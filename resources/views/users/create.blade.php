@extends('layouts.admin')


@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-10">
            <form method="POST" action="{{ route('user.store') }}" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <label class="form-label text-light">First Name</label>
                    <input name="first_name" type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label text-light">Last Name</label>
                    <input name="last_name" type="text" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label text-light">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-12">
                    <select name='role' class="form-select mt-2" aria-label="Default select example">
                        <option value='' hidden>Select Role</option>
                        @foreach ($roles as $role)
                            <option value={{ $role->name}}>{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label text-light">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label text-light">Confirm Password</label>
                    <input type="password" class="form-control">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>
@endsection
