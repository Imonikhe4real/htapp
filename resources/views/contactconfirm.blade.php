<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/w3.css">
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
  @if (Route::has('login'))
  @auth
  <a href="{{ url('/home') }}" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;">Home</a>
  @else
  <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;">Login</a>
  @if (Route::has('register'))
  <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;">Register</a>
  @endif
@endauth
@endif
    <a href="/contact" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;">Contact</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
</div>
<div id="demo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium">
  <a href="{{ url('/home') }}" class="w3-bar-item w3-button" style="font-weight:bolder;">Home</a>
  <a href="{{ route('login') }}" class="w3-bar-item w3-button" style="font-weight:bolder;">Login</a>
  <a href="{{ route('register') }}" class="w3-bar-item w3-button" style="font-weight:bolder;">Register</a>
<a href="/contact" class="w3-bar-item w3-button" style="font-weight:bolder;">Contact</a>
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
<div class="w3-border-0" style="height:200px;width:100%">

</div>
<br>
<div class="w3-row">
<div class="w3-half">
  <img src="/images/imgstd.jpg"  style="width:100%;height:530px;">
</div>
<div class="w3-half">
<center>
    <div class="w3-border w3-black w3-text-white" style="width:100%;height:30px;font-weight:bolder;
                ">{{ __('Contact') }}</div>

                <div class="w3-border-0  w3-yellow w3-text-black"  style="height:500px;width:100%;">
                  <br><br><br><br>
                 <b>
                @if(\Session::has('success'))
                        <div class="alert alert-success">
                             <br>
                                <Center>{!! \Session::get('success') !!}</Center>
                             
                        </div>
                        @endif
                        </b>
                
                </div>
</center>                   
    </div>
</div>
    <br>
    <div class="w3-border-0" style="height:200px;width:100%;">

    </div>
    <div class="w3-border-0" style="height:20px;width:100%;background-color:black">

</div>
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