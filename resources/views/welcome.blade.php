@extends('layouts.app')

@section('content')

<script>
function rotateMe()
{
    alert('asd');
}

var poppersTriggered = false;


function triggerPopper(popper)
{
    $("#"+popper).addClass("popped");
}

function triggerPoppers()
{
    var timeoutID = window.setTimeout(function() { triggerPopper("id-popicon-laravel"); }, 100);
    timeoutID = window.setTimeout(function() { triggerPopper("id-popicon-html5"); }, 200);
    timeoutID = window.setTimeout(function() { triggerPopper("id-popicon-ember"); }, 300);
    timeoutID = window.setTimeout(function() { triggerPopper("id-popicon-django"); }, 400);
    timeoutID = window.setTimeout(function() { triggerPopper("id-popicon-node"); }, 500);
    timeoutID = window.setTimeout(function() { triggerPopper("id-popicon-three"); }, 600);
}


$( document ).ready(function() {
    console.log( "ready!" );
    
     //var caruselem = document.getElementById('mysticCarousel');
    if ($(window).width() < 768) {
        $('#mysticCarousel').attr('data-ride','')
        }
       else 
    


    var waypoint = new Waypoint({
      element: document.getElementById('id-waypoint-1'),
      handler: function(direction) {
        if(!poppersTriggered)
        {
            console.log('Scrolled to waypoint!');
            triggerPoppers();
            poppersTriggered = true;
        }
      }
    });


    var $root = $('html, body');
    $('#id-a-contact').click(function() {
        $root.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 500);
        return false;
    });

    $('#id-a-contact2').click(function() {
        $root.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 500);
        return false;
    });



    $('.google-maps').click(function () {
        $('.google-maps iframe').css("pointer-events", "auto");
    });
    
});



</script>

<div class="divi" style="position:relative;">
  <nav class="navbar navbar-default navbar-static-top" style="background:#3f9f3f; color:white; border:0px;">
    <div class="container">
      <div class="navbar-header">
        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/') }}" style="font-family: 'Slackey', cursive; color:white; border-left: solid 1px white; border-right: solid 1px white; border-top: solid 1px white;">
            Mystic Peanut
        </a>
      </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav" style="color:white;">
              <li style="background:#3f9f9f; color:white;"><a style="color:white; border-bottom: solid 1px white;" href="{{ url('/projects') }}">Projects</a></li>
              <li style="background:#9f9f3f; color:white;"><a style="color:white; border-bottom: solid 1px white;" href="{{ url('/news') }}">News</a></li>
              <li style="background:#e02f55; color:white;"><a style="color:white; border-bottom: solid 1px white;" id="id-a-contact2" href="#hmm">Contact</a></li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
              <!-- Authentication Links -->
              @if (Auth::guest())
                  <!--<li><a href="{{ url('/login') }}">Login</a></li>-->
                  <!--<li><a href="{{ url('/register') }}">Register</a></li>-->
              @else
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                </ul>
              </li>
              @endif
            </ul>
          </div>
      </div>
  </nav>
    <div id="mysticCarousel" style="position:relative;" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" style="height:90vh;" role="listbox">
        <div class="item active" style="height:90vh;">
          <div style="background:url('assets/img/logomp1.png'); background-size: contain; background-repeat-x: no-repeat; background-position: center; height:30vh; margin:auto; margin-top: 3vh;">
          </div>
          <div style="font-family: 'Slackey', cursive; color:white; position:absolute; font-size:12vh; width:100%; text-align: center;">
                    Mystic Peanut
          </div>
          <div style="color:white; position:absolute; bottom:80px; font-size:22px; width:100%; text-align: center;">
                Web and game development
          </div>
        </div>
        <div class="item hidden-xs" style="height:90vh;">
          <div style="height:90vh; width:100%; position: absolute; z-index: 1; top: -30px; opacity:0.4; background: url('assets/img/code2.png'); background-size: 100%;">
          </div>
          <div style="color:white; padding-left: 20px; border-left: 1px solid white; position:absolute; font-size:18px; margin-left:20%; margin-right:30%;">
              We use all the best Frameworks that can be found today:<br><br>
              Laravel<br>
              Django<br>
              Node<br>
              Ember<br>
              Three<br>
          </div>
          <div style="color:white; position:absolute; bottom:60px; font-size:22px; width:100%; text-align: center;">
              Fullstack development of modern and customizable websites
          </div>
        </div>
        <div class="item hidden-xs" style="height:90vh;">
          <div style="height:90vh; width:100%; position: absolute; z-index: 1; top: -30px; opacity:0.3; background: url('assets/img/seo2.png'); background-size: 100%;">
          </div>
          <div class="text3">
              We use latest SEO to make your website position at the top.<br><br>
              Growing visibility in organic (non-paid) search engine results SEO encompasses both the technical and creative elements required to improve rankings, drive traffic, and increase awareness in search engines.<br>
              
              <!-- All major search engines such as Google, Bing and Yahoo have primary search results, where web pages and other content such as videos or local listings are shown and ranked based on what the search engine considers most relevant to users. Payment isn’t involved. -->
          </div>
          <div style="color:white; position:absolute; bottom:60px; font-size:22px; width:100%; text-align: center;">
              Search engine optimizations of today
          </div>
        </div>
        <div class="item hidden-xs" style="height:90vh;">
          <div style="height:90vh; width:100%; position: absolute; z-index: 1; top: -30px; opacity:0.3; background: url('assets/img/design2.png'); background-size: 100%;">
          </div>
          <div class="text3" >
              We make sure your Design catches the eye and ease the use. 
              <br><br>
              Web design encompasses many different skills and disciplines in the production and maintenance of websites. The different areas of web design include web graphic design, interface design, authoring, including standardised code and proprietary software and user experience design.
          </div>
          <div style="color:white; position:absolute; bottom:60px; font-size:22px; width:100%; text-align: center;">
              Design that scales well on all screens
          </div>
        </div>
      </div>
        <!-- Indicators -->
        <ol class="carousel-indicators hidden-xs">
          <li data-target="#mysticCarousel" data-slide-to="0" style="display:none;"></li>
          <li data-target="#mysticCarousel" data-slide-to="1"><div id="id-waypoint-1" style="background:url('assets/img/icon-1.png'); background-size:100%; left: -250px;"></li>
          <li data-target="#mysticCarousel" data-slide-to="2"><div style="background:url('assets/img/icon-2.png'); background-size:100%; left: 0px;"></li>
          <li data-target="#mysticCarousel" data-slide-to="3"><div style="background:url('assets/img/icon-3.png'); background-size:100%; left: 250px;"></li>
        </ol>
      </div>
      <div class="diamond" >
      </div>  
</div>
<div class="divi" style="position:relative; min-height:400px; z-index:311; background:#fff; color:gray;">
    <br><br>
  <div class="container">
    <div class="row">  
      <div class="col-md-4 midsize-icons hidden-xs">
          <div id="id-popicon-laravel" class="popicon" style="background-size: 100%;"></div>
          <div id="id-popicon-ember" class="popicon" style="background:no-repeat url('/assets/img/ember.png'); background-size: 100%; left:270px; top:330px;"></div>
          <div id="id-popicon-django" class="popicon" style="background:url('/assets/img/django.png'); background-size: 100%; left:120px; top:170px;"></div>
          <div id="id-popicon-node" class="popicon" style="background:url('/assets/img/node.png'); background-size: 100%; left:150px; top:270px;"></div>
          <div id="id-popicon-html5" class="popicon" style="background:url('/assets/img/HTML5.png'); z-index:222; background-size: 100%; left:110px; top:390px;"></div>
          <div id="id-popicon-three" class="popicon" style="background:no-repeat url('/assets/img/threejs.png'); background-size: 100%; left:160px; top:100px;"></div>
      </div>
      <div class="col-md-8 1 col-sm-6 1 " >
        <div style="font-size: 16px; color:#444; text-transform: uppercase; font-weight: bold;">Web content creation</div>
        <div><h1 style="color:#09c; font-weight: 300; margin-top:0px;">Website design and development</h1></div>
        <div style="font-size: 17px;"">The first step in the website creation is to identify the operating area, the website type (showcase, catalog, e-commerce), the nature of contents (text articles, photos, files) and how manage it all. It is essential to understand how often the site will be updated (for example, adding new items or products), the type of updates and if new entries will be managed by the customer itself or by our web agency.</div>
        <br>
        <p>
        <a id="id-a-contact" href="#hmm" class="btn btn-primary btn-success hidden-xs" style="padding-right:20px;"><span class="glyphicon glyphicon-envelope" style="padding-right:10px;"></span> Contact Us</a>
        </p>
      </div>
    </div>
  </div>
  <div class="diamond2" style=""></div>
</div>
<div class="divi" style="background:#3f9f9f; min-height:600px; margin-top: -10px;
height:100vh;">
    <div class="container moze">
      <div class="w3-row">
        <div class="col-md-12 welcomeProjectsTitle" style="text-align:center;">
          <h1><span style="font-family: 'Slackey', cursive; padding-right:10px;">Mystic Peanut</span> projects</h1>
          <span>check out some of the things we've been involved with</span>
        </div>
      </div>
      @foreach ($projects->chunk(3) as $project3)
        <div class="container1">
          @foreach ($project3 as $project)
            <div class="col-md-4" style="">
              <a style="color:white;" href="/projects/{{$project->id}}">
              
                <div>
                  <img src="/{{$project->image}}" class="projectPic2 img-responsive"  alt="ASD">
                </div>

                <div class="projectTitle">
                  <span style="color:white; font-size:22px;" >{{$project->name}}</span>
                </div>

              </a>

              <div class="projectText" style="text-align: center;">
                <span style="color:white;">{{$project->description}}</span>
                <br>
                <span style="color:white;"> 
                  @foreach ($project->tagsArr as $tag)
                    <a href="/tags/{{$tag}}" class="">{{$tag}}</a>
                  @endforeach
                </span>
              </div>
            </div>
            
          @endforeach
        </div>
      @endforeach
      <div class="col-md-12 " style=" text-align: center;  margin: 0 auto; font-size:18px; cursor:pointer;padding-top: 40px;"><a style="color:white;border:solid 1px white;padding:5px 5px 5px 5px;" href="{{ url('/projects') }}">Click to see all projects</a>
      </div>
    </div>
</div>
<div class="divi" style="background:#555; position:relative; height:auto;">
  <div class="google-maps hidden-xs">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4059284.8835981362!2d17.407876687435483!3d45.36749995116911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475b10613de93455%3A0xb6f7d683724fe28!2sNovi+Sad!5e0!3m2!1sen!2srs!4v1470597432165" width="1000" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  
  <br><br>
 
</div>

@include('projects.partials.footer')

@endsection
