@extends('layouts.app')


@section('content')
	
	<p> <a href="/projects"><-Back</a></p>
	<p> Selected project: {{$project->name}} </p>
	<p> Description: {{$project->description}} </p>
	<p><img src="/{{$project->image}}" width="600px" alt="ASD"></p>
@stop