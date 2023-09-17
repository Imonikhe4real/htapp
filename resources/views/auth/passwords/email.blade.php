<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/w3.css">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>        
    </head>
    <body>
    <div class="w3-top">
  <div id="header" class="w3-border-0 w3-yellow" style="height:100px;width:auto;color:white;font-size:20px;font-weight:bolder;align-items:center;">
  <br>
  <center>Munique High School Computer Based Test App</center>
</div>
  <div class="w3-bar w3-black">
  <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;text-decoration:none;">Home</a>
  @if (Route::has('login'))
  @auth
  @else
  <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;text-decoration:none;">Login</a>
  @if (Route::has('register'))
  <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;text-decoration:none;">Register</a>
  @endif
@endauth
@endif
    <a href="/contact" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;text-decoration:none;">Contact</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
</div>
<div id="demo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium">
  <a href="{{ url('/') }}" class="w3-bar-item w3-button" style="font-weight:bolder;text-decoration:none;">Home</a>
  @if (Route::has('login'))
  @auth
  @else
  <a href="{{ route('login') }}" class="w3-bar-item w3-button" style="font-weight:bolder;text-decoration:none;">Login</a>
  @if (Route::has('register'))
  <a href="{{ route('register') }}" class="w3-bar-item w3-button" style="font-weight:bolder;text-decoration:none;">Register</a>
  @endif
@endauth
@endif
<a href="/contact" class="w3-bar-item w3-button" style="font-weight:bolder;text-decoration:none;">Contact</a>
</div>
<script>
   function myFunction() {
  var x = document.getElementById("demo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
</div>
<div class="w3-border-0" style="height:300px;width:100%">

</div>
<div class="w3-border-0 w3-yellow" style="height:300px;width:100%;">
<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="font-weight:bolder;">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="font-weight: bolder;">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="font-weight:bolder">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<br>
    <div class="w3-border-0" style="height:200px;width:100%;">

    </div>
 <div class="w3-border-0" style="height:20px;width:100%;background-color:black"></div>
<footer class="w3-border-0 w3-yellow"  style="height:400px;width:100%;">
<br><br><br><br><br><br>
     <center>
		 <b>Copyright &copy 2023 - 2025</b>
	 </center>
     <br><br><br><br><br>
	 <hr>
	 <center><b>Developed by Nafiu Sunday Imonikhe using Laravel Framework</b></center>
</footer>

    </body>
</html>






