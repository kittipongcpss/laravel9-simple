@extends('layouts.index')
@section('content')




<div class="row justify-content-center">
  <div class="col col-lg-5 col-md-8 col-sm-12">

<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="row justify-content-center pt-4">
      <img src="{{ URL::asset('assets2/images/favicon.png') }}" width="20%" height="20%">
    </div>
    
    <div class="card-body">
      <p >Username</p>

      <form action="{{ route('auth') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control @error('username') is-invalid  @enderror" name="username" value="{{ old('username') }}" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">

            </div>
          </div>
        </div>
        <p class="login-box-msg">Password</p>
        <div class="input-group mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" value="" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-8">
        <div class="form-group">
          <strong>ReCaptcha:</strong>
          <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
          
        </div>  
          </div></div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


  
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

</div>
</div>

@endsection

@section("scriptfooter")

    @if ($errors->has('username'))
    <script>
      Swal.fire(
          'แจ้งเตือน!',
          '{{ $errors->first('username') }}',
          'warning'
      )
    </script>

    @endif

    @if ($errors->has('password'))
    <script>
      Swal.fire(
          'แจ้งเตือน !',
          '{{ $errors->first('password') }}',
          'warning'
      )
    </script>

    @endif

    @if ($errors->has('g-recaptcha-response'))

    <script>
      Swal.fire(
          'แจ้งเตือน !',
          '{{ $errors->first('g-recaptcha-response') }}',
          'warning'
      )
    </script>
                
    @endif

    @if (Session::has('wronguser'))
    <script>
        Swal.fire(
            'แจ้งเตือน !',
            '{{ Session::get('wronguser') }}',
            'warning'
        )
    </script>
    @endif

@endsection