

<p style="text-align: center;"><h2 style= "text-align: center; color:#4BB543" >{{ $results->count() }} Results</h2></p>


@foreach($results as $result)



<div class="resbox">



	<a href=" {{ route('personview', ['id' => $result->id ]) }}">
	<div class="resimage" >

@if($result->profilepic == null)
		<img src="{{ URL::to('/images/holder.png') }}" width="100%" height="auto" />
@else
	<img src="{{ asset('profilepics/'.$result->profilepic) }}"  width="100%" height="auto"/>
@endif
		</div>
	</a>

<a href=" {{ route('booker', ['id' => $result->id ]) }}">
	<div class="namelabel">Name:</div>
	<div class="name">{{ $result->name}}</div>
	<div class="namelabel">Profession:</div>
	<div class="name">{{ $result->typetwo }}</div>
</a>
</div>

	



@endforeach



