@extends('BaseTemplate.main')
@section('halaman', 'Register')
@section('content')
     <form class="form-register w-50 center border rounded px-3 py-3 mx-auto mt-5"action="" method="post">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Register</h1>
        <div class="form-floating">
            <input type="text" class="form-control" value="{{old('name')}}" name="name" id="name" placeholder="Nama">
            <label for="name">Nama</label>
            {{-- @error('email')
                <div class="text-danger">
                    {{$messege}}
                </div>
            @enderror --}}
        </div>
        <div class="form-floating">
            <input type="email" class="form-control" value="{{old('email')}}" name="email" id="email" placeholder="email">
            <label for="email">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control"  name="password" id="password" placeholder="password">
            <label for="password">Password</label>
        </div>
        <div>
            <button type = "submit" class="btn btn-primary mt-2">Register</button>
        </div>
    </form>   
    <p class="d-block text-center text-decoration-none">Have an account?<a href="/login">Lets to Login</a></p>
@endsection