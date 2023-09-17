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
<form method="POST" action="/chemistryconfirm">
    @csrf 
    <h1 align="center" style="font-weight:bolder;">Chemistry Test</h1>
<div class="w3-border" style="height: 60px;">
    <br>
    <label align="center">Full Names : </label>
    <input type="text" name="fullname"><br>
</div>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (1)matter can neither be create nor destroyed is refferd to as   ________________ ? </p><br>
    A. <input type="radio" name="answer1" value="matter">matter  <br>
    B. <input type="radio" name="answer1" value="inertia"> inertia <br>
    C. <input type="radio" name="answer1" value="momentum"> momentum <br>
    D. <input type="radio" name="answer1" value="power">power <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (2) What is the chemical formula for sodium chloride ___________ ?</p><br>
    A. <input type="radio" name="answer2" value="Socl"> Socl <br>
    B. <input type="radio" name="answer2" value="Nacl"> Nacl<br>
    C. <input type="radio" name="answer2" value="Cacl2"> Cacl2 <br>
    D. <input type="radio" name="answer2" value="CaCo3"> CaCo3  <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (3) What is the formula for Tetraoxo Sulphate (VI)   ?</p><br>
    A. <input type="radio" name="answer3" value="H2So4"> H2So4<br>
    B. <input type="radio" name="answer3" value="T2So4"> T2So4 <br>
    C. <input type="radio" name="answer3" value="Na2So4">Na2So4 <br>
    D. <input type="radio" name="answer3" value="Ca2So4"> Ca2So4  <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (4) What is the formula for limestone ?</p><br>
    A. <input type="radio" name="answer4" value="CaCo3"> CaCo3 <br>
    B. <input type="radio" name="answer4" value="Hcl"> Hcl <br>
    C. <input type="radio" name="answer4" value="H2O"> H2O <br>
    D. <input type="radio" name="answer4" value="Nacl"> Nacl <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (5) Anything tha has weight and occupy space is known as __________________ ?</p><br>
    A. <input type="radio" name="answer5" value="energy"> energy <br>
    B. <input type="radio" name="answer5" value="matter"> matter <br>
    C. <input type="radio" name="answer5" value="density"> density <br>
    D. <input type="radio" name="answer5" value="force">  force <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (6) if H2So4 +  Nacl is added , what is the final result ?</p><br>
    A. <input type="radio" name="answer6" value="Na2So4+Hcl">Na2So4 + 2Hcl <br>
    B. <input type="radio" name="answer6" value="NaHSo4+cl2"> NaHSo4 + cl2 <br>
    C. <input type="radio" name="answer6" value="H2o+Na2So3">  H2o + Na2So3<br>
    D. <input type="radio" name="answer6" value="none">  none of the above <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (7) density is reffered to as mass per unit  __________   ?</p><br>
    A. <input type="radio" name="answer7" value="area"> area <br>
    B. <input type="radio" name="answer7" value="volume"> volume <br>
    C. <input type="radio" name="answer7" value="force">force <br>
    D. <input type="radio" name="answer7" value="time"> time <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (8) Chemistry is reffered to as  __________ ?</p><br>
    A. <input type="radio" name="answer8" value="social science"> social science <br>
    B. <input type="radio" name="answer8" value="natural science"> natural science <br>
    C. <input type="radio" name="answer8" value="management science"> management science <br>
    D. <input type="radio" name="answer8" value="none">none of the above <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (9) Chemistry is the study of  __________ ?</p><br>
    A. <input type="radio" name="answer9" value="chemical and its components"> chemical and its components <br>
    B. <input type="radio" name="answer9" value="nature of matter"> nature of matter <br>
    C. <input type="radio" name="answer9" value="none"> none of the above  <br>
    D. <input type="radio" name="answer9" value="all"> all of the above  <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (10) Which of the following is not used in the chemical lab  ?</p><br>
    A. <input type="radio" name="answer10" value="bursen burner">bunsen burner <br>
    B. <input type="radio" name="answer10" value="laptop"> laptop <br>
    C. <input type="radio" name="answer10" value="pipette"> pipette <br>
    D. <input type="radio" name="answer10" value="burette"> burette <br>
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
