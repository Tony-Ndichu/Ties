@extends ('layouts.master')

@section('content')

<div class="content">


@if(session()->has('message'))
    <div class="alert alert-success" style="text-align: center">
        {{ session()->get('message') }}
    </div>
@endif


	 <div class="boxbig">
            <div class="projectimagebig">
              <img src="{{ asset('sales/'.$items->image) }}" width="100%" height="auto" />
            </div>


            <div class="deets">
            	<label class="labelled">Price</label>
            	<div class="details">{{ $items->price }}</div>

            	<label class="labelled">Description</label>
            	<div class="estimate">{{ $items->description }}</div>

            	<a href="{{ route('order', ['id'=>$items->id]) }}"><button type="button" class="btn btn-warning btn-md">Order</button></a>
            </div>
</div>

@endsection