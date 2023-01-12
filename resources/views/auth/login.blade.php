@extends('layouts.app')
@section('title', 'Login')
@section('content')
<style>
.bg-gradient{
  background-image: url("/img/background.jpg");
  background-size:100% 100%;
  background-attachment:fixed;
  background-repeat: no-repeat;
}

.button123{
padding:10px 130px;
color: #CB8DDB;
font-size: 16px;
text-decoration: none;
text-transform: uppercase;
overflow:hidden;
transition: .5s;
letter-spacing:4px;
border: 1px solid #8F7CEC;
margin:auto;
border-radius:30px;
}

.button1234{
  padding:10px 130px;
color: #CB8DDB;
font-size: 15px;
text-decoration: none;
text-transform: uppercase;
overflow:hidden;
transition: .5s;
letter-spacing:4px;
border: 1px solid #8F7CEC;
margin:auto;
border-radius:30px;
}

.button123:hover{
  background: #8F7CEC;
  color:#fff;
  border-radius: 5px;
  box-shadow:0 0 5px #8F7CEC, 0 0 25px #8F7CEC, 0 0 50px #8F7CEC, 0 0 100px #8F7CEC;
}


.button1234:hover{
  background: #8F7CEC;
  color:#fff;
  border-radius: 5px;
  box-shadow:0 0 5px #8F7CEC, 0 0 25px #8F7CEC, 0 0 50px #8F7CEC, 0 0 100px #8F7CEC;
}

.submit {
  display: flex;
  flex-direction: row;
  margin-top: 20px;
}

.card-body{
  background:radial-gradient(circle at top right,#A0F1EA, #EAD6EE);
}

.col-xl-4{
  position:absolute;
  top:8%;

}

  </style>
  
  <div class="col-xl-4 col-lg-6 col-md-9">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
              </div>
              <form method="POST" action="{{ route('login') }}" class="user">
              @csrf
                <div class="form-group">
                  <input type="text" class="form-control form-control-user @error('username') is-invalid @enderror" name="username" required autocomplete="off" placeholder="Username">
                  @error('username')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required placeholder="Password">
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                  </div>
                </div>
                
                <button type="submit" class="button123">
                  {{ __('Login') }}
                </button>
              </form>
              <hr>
              <div class="text-center">
                <div class="button1234">
                <a class="small" href="{{ route('register') }}">Daftar</a>
              </div>
</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
  <script>
    $("body").addClass("bg-gradient");
  </script>
@endsection
