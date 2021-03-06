
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
                <a class="navbar-brand" href="{{ url('/') }}" style="font-family: 'Slackey', cursive; color:white; border-bottom: solid 1px white; height:51px;">
                    Mystic Peanut
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

    <div class="container" style="min-height: 700px; background:#3f9f9f; color:white; border:0px;">

        <!--<p><a href="/projects/create"> [Add New Project] </a></p>
                        <br>-->

        <div class="row projectsRow" style="color:white;">
            <div class="col-md-12" style="">
                <div class="panel panel-default" style="background:#3f9f9f;">
                    <div class="panel-body" style="text-align: center;">
                        All Projects

                        @if (auth()->check())
                        <p style="text-align: center;"><b><a href="/projects/create" style="color: white;"> Add New Project </a><b></p>
                         @endif

                    </div>
                </div>
            </div>
        </div>




        @foreach (array_chunk($projectsWithTag,3) as $project3)
        <div class="row projectsRow" style="color:white;">
            @foreach ($project3 as $project)
	        <div class="col-md-4" style="">

                <div class="panel panel-default" style="background:#3f9f9f;">
                    <div class="panel-body" style="">

                        <a style="" href="/projects/{{$project->id}}">
                            <div><img src="/{{$project->image}}" class="projectPic2 img-responsive"  alt="ASD"> </div>
                                
                            <div class="projectTitle">
                                <span style="color:white; font-size:22px;" >{{$project->name}}</span>
                            </div>
                        </a>
                        <div class="projectText">
                        <span style="color:white; width:220px;">{{$project->description}}</span>
                        </div>

                        <div class="projectText">
                        <span style="color:white; width:220px;">Tags:

                        @foreach ($project->tagsArr as $tag)

                        <a style="" href="/tags/{{$tag}}">{{$tag}}</a>
                        @endforeach
                        </span>
                        </div>
	            
                        @if (auth()->check())
						{{ Form::open(array('url' => URL::to('/projects/' . $project->id . '/edit'), 'method' => 'GET', 'style'=>'display:inline-block')) }}
					    <button type="submit" class="transparent">Edit</button>
						{{ Form::close() }}

						{{ Form::open(array('url' => URL::to('/projects/' . $project->id), 'method' => 'DELETE', 'style'=>'display:inline-block')) }}
					    <button type="submit" class="transparent">Delete</button>
						{{ Form::close() }}
                        @endif
						

						<br>
					</div>
				</div>
			</div>
            @endforeach

		</div>
        @endforeach
	</div>

</div>


@include('projects.partials.footer')

@stop