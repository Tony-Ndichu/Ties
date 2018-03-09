@extends('layouts.master')

@section('content')


<div class="content2">

<div class="projects">
	@foreach($projects as $project)
	<a href="{{ route('project_view', ['id'=>$project->id]) }}" class="box">
		<div class="projectimage">
			<img src="{{ asset('images/'.$project->image) }}"/>
		</div>
</a>
	@endforeach
</div>

@auth

@if (Auth::user()->level == 2)

<div class="appear">
<a href="{{ route('uploader')}} "> <button type="button" class="btn btn-primary btn-lg">Upload</button></a>

 <button type="button" class="btn btn-primary btn-lg">Edit</button>
</div>

@endif

@endauth

</div>


@endsection