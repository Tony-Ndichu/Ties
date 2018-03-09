@extends('layouts.master')

@section('content')

<div class="content2">

<div class="projects" id="top">
	@foreach($works as $work)
			<div class="worksboxes">
				<div class="projectimage">
					<img src="{{ asset('docs/'.$work->image) }}"/>
				</div>

				<div class="desclabel">Descrition:</div>
				<div class="descrip">{{ $work->description }}</div>

			</div>
				
	@endforeach
</div>

@endsection