@extends ('layouts.master')

@section('content')

<div class="content">

	 <div class="boxbig">
            <div class="projectimagebig">
              <img src="{{ asset('images/'.$projects->image) }}" width="100%" height="auto" />
            </div>


            <div class="deets">
            	<label class="labelled">Details:</label>
            	<div class="details">{{ $projects->details }}</div>

            	<label class="labelled">Estimate:</label>
            	<div class="estimate">{{ $projects->estimate }}</div>

            	<label class="labelled">Location:</label>
            	<div class="location">{{ $projects->location }}</div>
            </div>
</div>

@endsection