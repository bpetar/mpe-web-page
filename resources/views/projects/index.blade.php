
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
	
				<div class="panel-heading">All Projects</div>

				<div class="panel-body">

					<p><a href="/projects/create"> [Add New Project] </a></p>
					<br>

					@foreach ($projects as $project)

					<p>Title: <a href="/projects/{{$project->id}}">{{$project->name}}</a></p>
					<p>Description: {{$project->description}}</p>
					<p>Tags: {{$project->tags}}</p>
					<p><img src="/{{$project->image}}" width="200px" alt="ASD"></p>
						
					{{ Form::open(array('url' => URL::to('/projects/' . $project->id . '/edit'), 'method' => 'GET', 'style'=>'display:inline-block')) }}
				    <button type="submit" >Edit</button>
					{{ Form::close() }}

					{{ Form::open(array('url' => URL::to('/projects/' . $project->id), 'method' => 'DELETE', 'style'=>'display:inline-block')) }}
				    <button type="submit" >Delete</button>
					{{ Form::close() }}
					
					<br>
					<br>
					<br>

					@endforeach
				</div>

			</div>
		</div>
	</div>
</div>

@stop