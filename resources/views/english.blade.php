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
<form method="POST" action="/englishconfirm">
    @csrf 
    <h1 align="center" style="font-weight:bolder;">English Language Test</h1>
<div class="w3-border" style="height: 60px;">
    <br>
    <label align="center">Full Names : </label>
    <input type="text" name="fullname"><br>
</div>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (1) An action word is referred to the term ________________ ? </p><br>
    A. <input type="radio" name="answer1" value="adjective"> adjective <br>
    B. <input type="radio" name="answer1" value="verb"> verb <br>
    C. <input type="radio" name="answer1" value="noun"> noun <br>
    D. <input type="radio" name="answer1" value="proverb">proverb <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (2) A name of person, animal , place or thing is known as___________ ?</p><br>
    A. <input type="radio" name="answer2" value="verb"> verb <br>
    B. <input type="radio" name="answer2" value="adverb"> adverb<br>
    C. <input type="radio" name="answer2" value="noun"> noun <br>
    D. <input type="radio" name="answer2" value="preposition"> preposition  <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<p style="font-weight:bolder;">Complete the following sentence using a, an , and , or , he,she, his, her,him,The and They.</p>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (3) I _________ ade went to see mummy yesterday ?</p><br>
    A. <input type="radio" name="answer3" value="a"> a <br>
    B. <input type="radio" name="answer3" value="an"> an  <br>
    C. <input type="radio" name="answer3" value="and"> and <br>
    D. <input type="radio" name="answer3" value="or"> or  <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (4) ________ all went to play football at the pitch earlier today ?</p><br>
    A. <input type="radio" name="answer4" value="They"> They <br>
    B. <input type="radio" name="answer4" value="and"> and <br>
    C. <input type="radio" name="answer4" value="The"> The <br>
    D. <input type="radio" name="answer4" value="he"> he <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (5) Rita  love's kemi but  ______  does not love Rita that same way  ?</p><br>
    A. <input type="radio" name="answer5" value="he"> he <br>
    B. <input type="radio" name="answer5" value="They"> They <br>
    C. <input type="radio" name="answer5" value="she"> she <br>
    D. <input type="radio" name="answer5" value="her"> her <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (6) ______ doctor is someone who treats and take care of sick patients ?</p><br>
    A. <input type="radio" name="answer6" value="a"> a <br>
    B. <input type="radio" name="answer6" value="an"> an <br>
    C. <input type="radio" name="answer6" value="The"> The <br>
    D. <input type="radio" name="answer6" value="him"> him <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (7) myself and ______ went to watch the basket games  ?</p><br>
    A. <input type="radio" name="answer7" value="They"> They <br>
    B. <input type="radio" name="answer7" value="her"> her <br>
    C. <input type="radio" name="answer7" value="his"> his <br>
    D. <input type="radio" name="answer7" value="she"> she <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (8) Which of the following is not true about letter ?</p><br>
    A. <input type="radio" name="answer8" value="informal letter"> informal letter <br>
    B. <input type="radio" name="answer8" value="formal letter"> formal letter <br>
    C. <input type="radio" name="answer8" value="indention letter"> indention letter <br>
    D. <input type="radio" name="answer8" value="none">none <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<p style="font-weight:bolder;">Complete the following sentence using Where,what, whom, which , when and why.</p>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (9) ______ did the kids go to ?</p><br>
    A. <input type="radio" name="answer9" value="when"> when <br>
    B. <input type="radio" name="answer9" value="where"> where <br>
    C. <input type="radio" name="answer9" value="why"> why <br>
    D. <input type="radio" name="answer9" value="which"> which <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="w3-border" style="height: 60px;">
    <br>
    <p> (10) ________  are they crying  ?</p><br>
    A. <input type="radio" name="answer10" value="why">why <br>
    B. <input type="radio" name="answer10" value="whom"> whom <br>
    C. <input type="radio" name="answer10" value="where"> where <br>
    D. <input type="radio" name="answer10" value="what"> what <br>
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