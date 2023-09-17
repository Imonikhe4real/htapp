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
<form method="POST" action="/physicsconfirm">
    @csrf 
    <h1 align="center" style="font-weight:bolder;">Physics Test</h1>
<div class="w3-border" style="height: 60px;">
    <br>
    <label align="center">Full Names : </label>
    <input type="text" name="fullname"><br>
</div>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (1) Force per unit area is reffered to the term ________________ ? </p><br>
    A. <input type="radio" name="answer1" value="power"> power <br>
    B. <input type="radio" name="answer1" value="pressure"> pressure <br>
    C. <input type="radio" name="answer1" value="momentum"> momentum <br>
    D. <input type="radio" name="answer1" value="energy">energy <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (2) The work done per unit time taken to do the work is refferd to as ___________ ?</p><br>
    A. <input type="radio" name="answer2" value="power"> power <br>
    B. <input type="radio" name="answer2" value="force"> force<br>
    C. <input type="radio" name="answer2" value="density"> density <br>
    D. <input type="radio" name="answer2" value="friction"> friction  <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (3) What is the formula for velocity ?</p><br>
    A. <input type="radio" name="answer3" value="distance/time">  distance/time<br>
    B. <input type="radio" name="answer3" value="displacement/time"> displacement/time <br>
    C. <input type="radio" name="answer3" value="acceleration/time"> acceleration/time <br>
    D. <input type="radio" name="answer3" value="mass/time"> mass/time  <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (4) what is the unit of current ?</p><br>
    A. <input type="radio" name="answer4" value="Amperes"> Amperes <br>
    B. <input type="radio" name="answer4" value="Ohms"> Ohms <br>
    C. <input type="radio" name="answer4" value="Joules"> Joules <br>
    D. <input type="radio" name="answer4" value="Volts"> Volts <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (5) if  a force of 40 Newtons bag which drops acted upon an area of 5 metre wide, what the pressure ?</p><br>
    A. <input type="radio" name="answer5" value="8N/m"> 8 N/m <br>
    B. <input type="radio" name="answer5" value="200N/m"> 200 N/m <br>
    C. <input type="radio" name="answer5" value="35N/m"> 35 N/m <br>
    D. <input type="radio" name="answer5" value="45N/m">  45 N/m <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (6) Momentum  is denoted by formula  as ?</p><br>
    A. <input type="radio" name="answer6" value="mv"> m x v <br>
    B. <input type="radio" name="answer6" value="fv"> f x v <br>
    C. <input type="radio" name="answer6" value="pa"> p x a <br>
    D. <input type="radio" name="answer6" value="pv/t"> pv/t <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (7) Quantities that exist naturally are called __________  quantities ?</p><br>
    A. <input type="radio" name="answer7" value="derived"> derived <br>
    B. <input type="radio" name="answer7" value="fundamental"> fundamental <br>
    C. <input type="radio" name="answer7" value="dynamic">dynamic <br>
    D. <input type="radio" name="answer7" value="static"> static <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (8) Quantities gotten from the combination of two or more fundamental quantities are reffered to as __________ ?</p><br>
    A. <input type="radio" name="answer8" value="dynamic"> dynamic <br>
    B. <input type="radio" name="answer8" value="static"> static <br>
    C. <input type="radio" name="answer8" value="derived"> derived <br>
    D. <input type="radio" name="answer8" value="none">none <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (9)  The term mass per unit volume refers to __________ ?</p><br>
    A. <input type="radio" name="answer9" value="Momentum"> Momentum <br>
    B. <input type="radio" name="answer9" value="Density"> Density <br>
    C. <input type="radio" name="answer9" value="Inertia"> Inertia <br>
    D. <input type="radio" name="answer9" value="Resistance"> Resistance <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (10) which of the following  is  not a fundamental quantity  ?</p><br>
    A. <input type="radio" name="answer10" value="length">length <br>
    B. <input type="radio" name="answer10" value="time"> time <br>
    C. <input type="radio" name="answer10" value="mass"> mass <br>
    D. <input type="radio" name="answer10" value="force"> force <br>
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