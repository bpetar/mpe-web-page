@extends('layouts.app')


@section('content')
	
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create New Project</div>
                <div class="panel-body">

              

	{!! Form::open(array('url' => URL::to('/projects'), 'method' => 'post', 'class'=>'form-horizontal', 'files' => true)) !!}

		@include('projects.partials.form')

	{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>

@stop