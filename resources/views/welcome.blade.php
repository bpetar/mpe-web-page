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



});



</script>


<div class="divi" style="position:relative;">


    <nav class="navbar navbar-default navbar-static-top" style="background:#8CB951; color:white; border:0px;">
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
                <a class="navbar-brand" href="{{ url('/') }}" style="color:white;">
                    Mystic - Peanut
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav" style="color:white;">
                    <li style="color:white;"><a style="color:white;" href="{{ url('/projects') }}">Projects</a></li>
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
                <div style="background:url('assets/img/mystic-logo.png'); height:99px; width:295px; margin:auto;">
                </div>
                <div style="color:white; position:absolute; font-size:82px; width:100%; text-align: center;">
                    Mystic-Peanut
                </div>

                <div style="color:white; position:absolute; bottom:60px; font-size:22px; width:100%; text-align: center;">
                Web and game development
                </div>
            </div>

          <div class="item" style="height:90vh;">
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

          <div class="item" style="height:90vh;">

            <div style="height:90vh; width:100%; position: absolute; z-index: 1; top: -30px; opacity:0.3; background: url('assets/img/seo2.png'); background-size: 100%;">
            </div>

            <div style="color:white; padding-left: 20px; border-left: 1px solid white; position:absolute; font-size:18px; margin-left:20%; margin-right:30%;">
                We use latest SEO to make your website position at the top.<br><br>
                Growing visibility in organic (non-paid) search engine results SEO encompasses both the technical and creative elements required to improve rankings, drive traffic, and increase awareness in search engines.<br>
                
                <!-- All major search engines such as Google, Bing and Yahoo have primary search results, where web pages and other content such as videos or local listings are shown and ranked based on what the search engine considers most relevant to users. Payment isn’t involved. -->

            </div>

            <div style="color:white; position:absolute; bottom:60px; font-size:22px; width:100%; text-align: center;">
                Search engine optimizations of today
            </div>
          </div>


          <div class="item" style="height:90vh;">

            <div style="height:90vh; width:100%; position: absolute; z-index: 1; top: -30px; opacity:0.3; background: url('assets/img/design2.png'); background-size: 100%;">
            </div>

            <div style="color:white; padding-left: 20px; border-left: 1px solid white; position:absolute; font-size:18px; margin-left:20%; margin-right:30%;">
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
        <ol class="carousel-indicators">
          <li data-target="#mysticCarousel" data-slide-to="0" style="display:none;"></li>
          <li data-target="#mysticCarousel" data-slide-to="1"><div id="id-waypoint-1" style="background:url('assets/img/icon-1.png'); background-size:100%; left: -250px;"></li>
          <li data-target="#mysticCarousel" data-slide-to="2"><div style="background:url('assets/img/icon-2.png'); background-size:100%; left: 0px;"></li>
          <li data-target="#mysticCarousel" data-slide-to="3"><div style="background:url('assets/img/icon-3.png'); background-size:100%; left: 250px;"></li>
        </ol>


    </div>

                    
</div>









<div class="divi" style="z-index:311; background:#fff; height:110vh; color:gray;">

<br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">


                    <div id="id-popicon-laravel" class="popicon" style="background-size: 100%;"></div>

                    <div id="id-popicon-ember" class="popicon" style="background:url('/assets/img/ember.png'); background-size: 100%; left:270px; top:330px;"></div>

                    <div id="id-popicon-django" class="popicon" style="background:url('/assets/img/django.png'); background-size: 100%; left:120px; top:170px;"></div>

                    <div id="id-popicon-node" class="popicon" style="background:url('/assets/img/node.png'); background-size: 100%; left:150px; top:270px;"></div>

                    <div id="id-popicon-html5" class="popicon" style="background:url('/assets/img/HTML5.png'); background-size: 100%; left:110px; top:390px;"></div>

                    <div id="id-popicon-three" class="popicon" style="background:url('/assets/img/threejs.png'); background-size: 100%; left:160px; top:100px;"></div>

            </div>

            <div class="col-md-8" style="margin-top:90px;">
                <div style="font-size: 16px; color:#444; text-transform: uppercase; font-weight: bold;">Web content creation</div>
                <div><h1 style="color:#09c; font-weight: 300; margin-top:0px;">Website design and development</h1></div>
                <div style="font-size: 17px;"">The first step in the website creation is to identify the operating area, the website type (showcase, catalog, e-commerce), the nature of contents (text articles, photos, files) and how manage it all. It is essential to understand how often the site will be updated (for example, adding new items or products), the type of updates and if new entries will be managed by the customer itself or by our web agency.</div>
                <br>
                <p>
                <a id="id-a-contact" href="#hmm" class="btn btn-primary btn-success" style="padding-right:20px;"><span class="glyphicon glyphicon-envelope" style="padding-right:10px;"></span> Contact Us</a>
                </p>
            </div>

        </div>
    </div>
                    
</div>

<div class="divi" style="background:#8CB951; height:110vh; color:white;">
<br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div style="background:#8CB951; color:white;" class="panel-body">
                        Mystic Peanut's Third Page.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="divi" style="background:#aaa;">
<br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div id="hmm" name"hmm" style="background:#aaa; color:white;" class="panel-body">
                        Mystic Peanut's Fourth Page.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
