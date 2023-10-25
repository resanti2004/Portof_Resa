@extends('auth.layouts')

@section('content')

<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Register now</h2>
          <form action="{{ route('store') }}" method="post">
            @csrf
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="form-outline mb-4">
                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"/>
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <label class="form-label" for="name">Username</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                  <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" />
                  @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
                <label class="form-label" for="email">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                  <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password"/>
                  @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                  @endif
                  <label class="form-label" for="password">Password</label>
            </div>

            <!-- Password confirm -->
            <div class="form-outline mb-4">
                <input type="password" id="password-confirmation" class="form-control" name="password_confirmation"/>
                <label class="form-label" for="password-confirmation">Password Confirmation</label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
              <label class="form-check-label" for="form2Example33">
                Subscribe to our newsletter
              </label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4" value="Register">
                Register
            </button>

            <!-- Register buttons -->
            <div class="text-center">
              <p>or register with:</p>
              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-github"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

@endsection