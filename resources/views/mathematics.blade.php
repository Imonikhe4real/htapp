<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
   <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="/css/sidebar.css">
   <link rel="stylesheet" type="text/css" href="/css/w3.css">
   <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="sidenav">
   <a href="/dashboard">Dashboard</a>
   <a href="/profile">Profile</a>
   <a href="/test">Test</a>
   <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
{{ __('Logout') }}
</a>
</div>
<div class="main">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center" style="font-weight:bolder;">{{ __('Dashboard') }}</div>
                <div align="center">
                <br>
                    <b>Username:</b> {{ Auth::user()->username }}<br><br>
                    <b>Email:</b> {{ Auth::user()->email }}  
                </div> 
                <div class="card-body" align="center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
                <center>
            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf 
    </form>
        </center>
            </div>
        </div>
    </div>
</div>
<br><br>
<form method="POST" action="/mathematicsconfirm">
    @csrf 
    <h1 align="center" style="font-weight:bolder;">Mathematics Test</h1>
<div class="w3-border" style="height: 60px;">
    <br>
    <label align="center">Full Names : </label>
    <input type="text" name="fullname"><br>
</div>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (1) What is the value of z if given an equation of x(x+by), where x is 5 , b is 2 and y is 8 ?</p><br>
    A. <input type="radio" name="answer1" value="204"> 204 <br>
    B. <input type="radio" name="answer1" value="205"> 205 <br>
    C. <input type="radio" name="answer1" value="105"> 105 <br>
    D. <input type="radio" name="answer1" value="90"> 90 <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (2) what is the speed travelled with a distance of 40 metres in 5 seconds ?</p><br>
    A. <input type="radio" name="answer2" value="8metresperseconds"> 8 metres per seconds <br>
    B. <input type="radio" name="answer2" value="200metresperseconds"> 200 metres per seconds<br>
    C. <input type="radio" name="answer2" value="45metresperseconds"> 45 metres per seconds <br>
    D. <input type="radio" name="answer2" value="35metresperseconds"> 35 metres per seconds  <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (3) what is the interest of the principal amount of $5000 invested for 30 days at a rate of 2% ?</p><br>
    A. <input type="radio" name="answer3" value="$2000"> $2000 <br>
    B. <input type="radio" name="answer3" value="$1000"> $1000  <br>
    C. <input type="radio" name="answer3" value="$3000"> $3000 <br>
    D. <input type="radio" name="answer3" value="$500"> $500  <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (4) What is area of a rectangle with a length of 20cm and width of 60cm  ?</p><br>
    A. <input type="radio" name="answer4" value="3 square cm"> 3 square cm <br>
    B. <input type="radio" name="answer4" value="1200 square cm"> 1200 square cm <br>
    C. <input type="radio" name="answer4" value="0.33 square cm"> 0.33 square cm <br>
    D. <input type="radio" name="answer4" value="80 square cm"> 80 square cm <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (5) What is the perimeter of a rectangle , given a length of 50 metres and a breadth of 30 metres  ?</p><br>
    A. <input type="radio" name="answer5" value="260 square metres"> 260 square metres <br>
    B. <input type="radio" name="answer5" value="460 square metres"> 460 square metres <br>
    C. <input type="radio" name="answer5" value="560 square metres"> 560 square metres <br>
    D. <input type="radio" name="answer5" value="160 square metres"> 160 square metres <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (6) what is the value of a quadratic equation ax2 - 6a + 9 = 0 ?</p><br>
    A. <input type="radio" name="answer6" value="2"> 2 <br>
    B. <input type="radio" name="answer6" value="3"> 3 <br>
    C. <input type="radio" name="answer6" value="4"> 4 <br>
    D. <input type="radio" name="answer6" value="5"> 5 <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (7) what is the value of x if y = mx + c where y is 17, c is 1 and your gradient m is 8 ?</p><br>
    A. <input type="radio" name="answer7" value="2"> 2 <br>
    B. <input type="radio" name="answer7" value="3"> 3 <br>
    C. <input type="radio" name="answer7" value="4"> 4 <br>
    D. <input type="radio" name="answer7" value="5"> 5 <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (8) which of the following is true of a square ?</p><br>
    A. <input type="radio" name="answer8" value="2sides"> 2sides <br>
    B. <input type="radio" name="answer8" value="3sides"> 3sides <br>
    C. <input type="radio" name="answer8" value="4sides"> 4sides <br>
    D. <input type="radio" name="answer8" value="5sides"> 5sides <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (9) what is the diameter of a circle of radius 14cm?</p><br>
    A. <input type="radio" name="answer9" value="28squarecm"> 28 square cm <br>
    B. <input type="radio" name="answer9" value="7squarecm"> 7 square cm <br>
    C. <input type="radio" name="answer9" value="72squarecm"> 72 square cm <br>
    D. <input type="radio" name="answer9" value="256squarecm"> 256 square cm <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (10) what is the change of formula for e when ey + c = a  ?</p><br>
    A. <input type="radio" name="answer10" value="a-c/y">a-c/y <br>
    B. <input type="radio" name="answer10" value="a+c/y"> a+c/y <br>
    C. <input type="radio" name="answer10" value="ac/y"> ac/y <br>
    D. <input type="radio" name="answer10" value="none"> none <br>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
    <input type="submit" name="submit" value="Submit" class="btn btn-success" style="font-weight:bolder
    ;"><br>
</form>
</div>
</body>
</html>