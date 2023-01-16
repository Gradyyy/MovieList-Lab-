@extends('layouts.master')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main class="form-signin w-100 m-auto">
        <h1 class="h3 mb-3 fw-normal">Please Login</h1>
          <form action="/signIn" method="post">
            {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
            @csrf

            <div class="form-floating">
              <input type="email" name="email" class="form-control  @error('email')is-invalid @enderror" value={{Cookie::get('mycookie')!==null ? Cookie::get('mycookie') : " "}} id="floatingInput" placeholder="name@example.com" autofocus required>
              {{-- <label for="floatingInput">Email address</label> --}}
              @error('email')
                <div class="text-danger">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="password" placeholder="Password" required>
              {{-- <label for="floatingPassword">Password</label> --}}
              @error('password')
                <div class="text-danger">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-group">
                <input type="checkbox" id="checkbox" name="checkbox" checked={{Cookie::get('mycookie')!==null}}>
                <label for="checkbox" class="text-dark">Remember me</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
          </form>
          <small>Not Registered? <a href="/register">Register now</a></small>
        </main>
</body>
</html>

@endsection
