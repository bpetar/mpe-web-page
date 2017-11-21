
{{-- This form is used for Creating and Editing item --}}



{{--Item Title--}}
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

	<label for="name" class="col-md-4 control-label">Title</label>

	<div class="col-md-6">
	    {!! Form::text('name', null, array('class' => 'form-control', 'placeholder'=> 'Enter title here..')) !!}

	    @if ($errors->has('name'))
	        <span class="help-block">
	            <strong>{{ $errors->first('name') }}</strong>
	        </span>
	    @endif
	</div>
</div>

{{--Item Year--}}
<div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">

	<label for="year" class="col-md-4 control-label">Year</label>

	<div class="col-md-6">
		{{ Form::selectYear('year', 2000, 2100) }}
	    <!--{!! Form::text('year', null, array('class' => 'form-control', 'placeholder'=> 'Enter year here..')) !!}-->

	    @if ($errors->has('year'))
	        <span class="help-block">
	            <strong>{{ $errors->first('year') }}</strong>
	        </span>
	    @endif
	</div>
</div>

{{--Item Client--}}
<div class="form-group{{ $errors->has('client') ? ' has-error' : '' }}">

	<label for="client" class="col-md-4 control-label">Client</label>

	<div class="col-md-6">
	    {!! Form::text('client', null, array('class' => 'form-control', 'placeholder'=> 'Enter clients name here..')) !!}

	    @if ($errors->has('year'))
	        <span class="help-block">
	            <strong>{{ $errors->first('client') }}</strong>
	        </span>
	    @endif
	</div>
</div>




{{--Item Link--}}
<div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">

	<label for="link" class="col-md-4 control-label">Link</label>

	<div class="col-md-6">
	    {!! Form::text('link', null, array('class' => 'form-control', 'placeholder'=> 'Enter link to project here..')) !!}

	    @if ($errors->has('link'))
	        <span class="help-block">
	            <strong>{{ $errors->first('link') }}</strong>
	        </span>
	    @endif
	</div>
</div>

{{--Item Short Description--}}
<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">

	<label for="description" class="col-md-4 control-label">Description</label>

	<div class="col-md-6">
	    {!! Form::text('description', null, array('class' => 'form-control', 'placeholder'=> 'Enter short description here..')) !!}

	    @if ($errors->has('description'))
	        <span class="help-block">
	            <strong>{{ $errors->first('description') }}</strong>
	        </span>
	    @endif
	</div>
</div>


{{--Item Tags--}}
<div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">

	<label for="tags" class="col-md-4 control-label">Tags</label>

	<div class="col-md-6">
	    {!! Form::text('tags', null, array('class' => 'form-control', 'placeholder'=> 'Enter tags here..')) !!}

	    @if ($errors->has('tags'))
	        <span class="help-block">
	            <strong>{{ $errors->first('tags') }}</strong>
	        </span>
	    @endif
	</div>
</div>

{{--Item Image--}}
<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">

	<label for="image" class="col-md-4 control-label">Image</label>

	<div class="col-md-6">

		{{--<div style="border: solid #cccccc 1px; width: 100%; height: 200px; background:url('/@if(! empty($item)) {{$item->image}} @endif'); background-size:cover;"></div>--}}
		
	    {!! Form::file('image') !!}


	    @if ($errors->has('image'))
	        <span class="help-block">
	            <strong>{{ $errors->first('image') }}</strong>
	        </span>
	    @endif
	</div>
</div>
{{--Item Full Description--}}
<div class="form-group{{ $errors->has('fulldescription') ? ' has-error' : '' }}">

	<label for="fulldescription" class="col-md-12 ">Full Description</label>

	<div class="col-md-12">
	    {!! Form::textarea('fulldescription', null, array('class' => 'form-control', 'placeholder'=> 'Enter full description here..', 'id' => 'technig')) !!}

	    @if ($errors->has('fulldescription'))
	        <span class="help-block">
	            <strong>{{ $errors->first('fulldescription') }}</strong>
	        </span>
	    @endif
	</div>
</div>
<br>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-shield"></i> Submit
        </button>
    </div>
</div>
