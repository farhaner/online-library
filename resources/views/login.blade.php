@extends('BaseTemplate.main')
@section('halaman', 'Login')
@section('content')
    <form action="/library" method="post" class="form-register w-50 center border rounded px-3 py-3 mx-auto mt-5">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Login</h1>
        <div class="form-floating">
            <input type="email" class="form-control" value="{{old('email')}}" name="email" id="email" placeholder="email" required>
            <label for="email">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="password" id="password" placeholder="password" required>
            <label for="password">Password</label>
        </div>
        <div>
            <button type="submit" class="btn btn-primary mt-2">Login</button>
        </div>
    </form>   
        <p class="d-block text-center">account not ready?<a href="/register">click here to register</a></p>
@endsection