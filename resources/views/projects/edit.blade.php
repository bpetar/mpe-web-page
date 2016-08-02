@extends('layouts.app')


@section('content')

	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit: {{$project->title}}</div>
                <div class="panel-body">

           

	{!! Form::model($project, array('url' => URL::to('/projects/' . $project->id), 'class'=>'form-horizontal', 'method' => 'PUT', 'files' => true)) !!}

	@include('projects.partials.form')

	{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@stop