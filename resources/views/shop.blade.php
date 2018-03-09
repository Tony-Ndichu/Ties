@extends('layouts.masterfour')

@section('content')


<div class="content2">

	<div class="leftcolumn">
	<div class="holdleft">
<a href="{{ route('hire_equipment') }}" class="leftrows" style="background-color: #355C7D">Hire Equipment</a>
<a href="{{ route('building_materials') }}" class="leftrows" style="background-color: #6C5B7B">Building Materials</a>
<a href="{{ route('steel_bars') }}"  class="leftrows" style="background-color: #C06C84">Steel Bars
<a href="{{ route('plumbing_materials') }}"  class="leftrows" style="background-color: #F67280">Plumbing materials</a>
<a href="{{ route('electrical_materials') }}"  class="leftrows" style="background-color: #F8B195">Electrical Materials</a>
<a href="{{ route('hardware_equipment') }}"  class="leftrows" style="background-color: #A8E6CE">Hardware Equipment</a>
		
	</div>
</div>

<div class="projectshop">
	@foreach($items as $item)
	<a href="{{ route('item_view', ['id'=>$item->id]) }}" class="box">
			<div class="holder">
				<div class="projectimage">
					<img src="{{ asset('sales/'.$item->image) }}"/>
				</div>

				
				<div class="desc">{{ $item->description }}</div>

			</div>
				
</a>
	@endforeach
</div>



@endsection