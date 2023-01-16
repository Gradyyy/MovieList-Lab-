@extends('layouts.master')
@section('content')

      {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
      <h1 class="h3 mb-3 fw-normal">Please Register</h1>

      <form action="/register" method="post">
        @csrf
        <div class="form-floating">
          <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name') }}"/>
            @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>


        <div class="form-floating">
          <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}"/>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="floatingInput" placeholder="name@example.com" required value="{{ old('email') }}"/>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="password" placeholder="Password" required />
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-floating">
            <input type="date" name="DOB" class="form-control @error('DOB')is-invalid @enderror" id="DOB" placeholder="DOB" required value="{{ old('DOB') }}"/>
              @error('DOB')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
          </div>

        <div class="form-floating">
            <input type="text" name="phone_number" class="form-control @error('name')is-invalid @enderror" id="phone_number" placeholder="Phone Number" required value="{{ old('phone_number') }}"/>
            @error('phone_number')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>



      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
    </form>
    <small>Already registered? <a href="/signIn">Login here</a></small>
  </main>


@endsection
