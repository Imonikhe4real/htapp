<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/css/w3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
    </head>
    <body>
    <div class="w3-top">
  <div id="header" class="w3-border-0 w3-yellow" style="height:100px;width:auto;color:white;font-size:20px;font-weight:bolder;align-items:center;">
  <br>
  <center>Munique High School Test App</center>
</div>
  <div class="w3-bar w3-black">
  <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;">Home</a>
  @if (Route::has('login'))
  @auth
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
<div class="w3-border-0 w3-light-grey" style="height:300px;width:100%;">
	<br><br><br><br>
	<div id="greetings"></div>
	<div id="greetingswrt"></div>
</div>
<div class="w3-row">

	<div class="w3-third">
		<div class="w3-border-0 " style="height:400px;">
			<br><br><br><center>
				<div id="lectures"></div>
			<img src="/images/stdlectures.jpg" alt="stdlectures" height="150" width="280">
		    </center>
		  <center>
		 <div class="w3-border" style="height:150px;width:280px;">
            <div id="lectureswriteup"></div>
		 </div>
		</center>
		</div>		
	</div>
	<div class="w3-third">
        <div class="w3-border-0" style="height:400px;">
            <br><br><br><center>
            	<div id="exam"></div>
			<img src="/images/stdexam.jpg" alt="stdexams" height="150" width="280">
		    </center>
		  <center>
		 <div class="w3-border" style="height:150px;width:280px;">
		 	<div id="examwriteup"></div>
		 </div>
		</center>			
		</div>
   </div>
	<div class="w3-third">
	  <div class="w3-border-0 " style="height:400px;">
		  <br><br><br><center>
		  	 <div id="result"></div>
			<img src="/images/stdresult.jpg" alt="stdresult" height="150" width="280">
		    </center>
		  <center>
		 <div class="w3-border" style="height:150px;width:280px;">
		 	<div id="resultwriteup"></div>
		 </div>
		</center>	
	  </div>
	</div>
</div>

<div class="w3-border-0 w3-light-grey" style="height:100px;width:100%;">
	 <br><br><br>
	<div id="introhead"></div>
</div>
<div class="w3-border-0" style="height:50px;width:100%;background-color:black;"></div>
<footer class="w3-border-0 w3-yellow" style="height:400px;width:100%;">
     <br><br><br><br><br><br>
     <center>
		 <b>Copyright &copy 2023 - 2025</b>
	 </center>
	 <br><br><br><br><br>
	 <hr>
	 <center><b>Developed by Nafiu Sunday Imonikhe using Laravel Framework</b></center>
</footer>

<script>
document.getElementById('header').innerHTML ='<center><b><br>Munique High School Computer Based Test App</b></center>';
document.getElementById('greetings').innerHTML ='<br><br><br><center><b>About Us</b></center>';
document.getElementById('greetingswrt').innerHTML = '<center>Munique High School Test App is was designed and developed for the purpose of writing test trhough the means of computer system and developed by Nafiu Sunday Imonikhe .</center>';
 document.getElementById('lectures').innerHTML = '<center><b><u>Lectures</u></b></center>';
 document.getElementById('lectureswriteup').innerHTML = '<center>Students in the classroom receiving lectures.</center>';
 document.getElementById('exam').innerHTML = '<center><b><u>Tests</u></b></center>';
 document.getElementById('examwriteup').innerHTML = '<center>Students writing Test with our CBT<br>(Computer Based Test) App in the Test hall</center>';
 document.getElementById('result').innerHTML = '<center><b><u>Results<u></u></b></center>';
 document.getElementById('resultwriteup').innerHTML = '<center>Studens checking their results after the Test  has been marked and totalled and pasted on the notice board.</center>';
 document.getElementById('introhead').innerHTML ='<center>This is our High school  Computer Based Test App .</center>';
</script>


</body>
</html>

        
        
    </body>
</html>
