
@extends('layouts.app')

@section('content')


<script>


$( document ).ready(function() {
    console.log( "ready!" );


    var $root = $('html, body');
    $('#id-a-contact').click(function() {
        $root.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 500);
        return false;
    });



});



</script>


<div class="divi" style="background:#3f9f9f; height:auto; position:relative;">





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
                <a class="navbar-brand" href="{{ url('/') }}" style="color:white; border-bottom: solid 1px white;">
                    Mystic - Peanut
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav" style="background:#3f9f3f; color:white;">
                    <li style="background:#3f9f9f; color:white;"><a style="color:white; border-left: solid 1px white; border-right: solid 1px white; border-top: solid 1px white;" href="{{ url('/projects') }}">Projects</a></li>
                    <li style="background:#9f9f3f; color:white;"><a style="color:white; border-bottom: solid 1px white;" href="{{ url('/news') }}">News</a></li>
                    <li style="background:#e02f55; color:white;"><a style="color:white; border-bottom: solid 1px white;" id="id-a-contact" href="#hmm">Contact</a></li>
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

    <div class="container" style="background:#3f9f9f; color:white; border:0px;">

        <!--<p><a href="/projects/create"> [Add New Project] </a></p>
                        <br>-->

        <div class="row projectsRow" style="color:white;">
            <div class="col-md-12" style="">
                <div class="panel panel-default" style="background:#3f9f9f;">
                    <div class="panel-body" style="">
                        <a style="color:white;" href="/projects">All Projects</a> -> {{$project->name}}
                    </div>
                </div>
            </div>
        </div>

	    <div class="row projectsRow" style="color:white;">
	        <div class="col-md-12" style="">
                <div class="panel panel-default" style="background:#3f9f9f;">
                    <div class="panel-body" style="">

						{{--<p> <a href="/projects"><-Back</a></p>--}}
                        <p> Client: {{ $project->client }} </p>
                        <p> Year: {{$project->year}} </p>
						<p>Description: {!! $project->fulldescription !!}</p>
                        <p>Link: <a href="https://{!! $project->link !!}">{!! $project->link !!}</a></p>
						<p> Tags: {{$project->tags}} </p>


						<p><img src="/{{$project->image}}" width="600px" alt="ASD"></p>

                        {{--    
						{{ Form::open(array('url' => URL::to('/projects/' . $project->id . '/edit'), 'method' => 'GET', 'style'=>'display:inline-block')) }}
					    <button type="submit" >Edit</button>
						{{ Form::close() }}

						{{ Form::open(array('url' => URL::to('/projects/' . $project->id), 'method' => 'DELETE', 'style'=>'display:inline-block')) }}
					    <button type="submit" >Delete</button>
						{{ Form::close() }}
						--}}

						<br>
					</div>
				</div>
			</div>
		</div>

        <div class="row projectsRow" style="color:white;">
            <div class="col-md-12" style="">
                <div class="panel panel-default" style="background:#3f9f9f;">
                    <div class="panel-body" style="">
                        <a style="color:white;" href="/projects">Tags:</a> {{$project->tags}}
                    </div>
                </div>
            </div>
        </div>

	</div>

</div>



<div class="divi" style="background:#555; position:relative; height:300px;">

    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <h1>About</h1>
            </div>

            <div class="col-md-4">
            </div>

            <div class="col-md-4">
                <h1>Contact</h1>
            </div>
        </div>

        <div class="row" style="margin-top:20px;">
            <div class="col-md-4" style="background:#555; color:white;">
                <div style="background:#555; color:white; margin-bottom:15px;" >
                    We are small game and web development company from Serbia, available on the market since 2007.
                </div>

                <div style="background:#555; color:white; margin-bottom:15px;" >
                    Facebook, Tweeter, Google+, Youtube, Blogger, GitHub
                </div>
                
                <div style="background:#555; color:white;" >
                    <span> Copyright © 2016 Mystic Peanut</span>
                </div>
            </div>

            <div class="col-md-4">
            </div>

            <div class="col-md-4">
                <div style="background:#555; color:white;" >
                    info@mystic-peanut.com
                </div>

                <div style="background:#555; color:white;" >
                    +381638767650
                </div>

                <div style="background:#555; color:white;" >
                    Veljka Petrovica 8
                </div>

                <div style="background:#555; color:white;" >
                    Novi Sad, Serbia
                </div>

                <div id="hmm" name"hmm" style="background:url('assets/img/mystic-logo.png'); background-size:contain; height:50px; width:145px; ; margin-top:15px;">
                </div>
            </div>

        </div>
    </div>

</div>


@stop