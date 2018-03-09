@extends('layouts.master')

@section('content')

<div class="content2">

@if(session()->has('message'))
    <div class="alert alert-success" style="text-align: center">
        {{ session()->get('message') }}
    </div>
@endif

  <div class="boxbig">
            <div class="projectimagebig">
               @if($person->profilepic == NULL) 
    <img class="dp"  src="{{asset('images/holder.png')}}" width="100%" height="auto" />
@else
  <img class="dp" src="{{ asset('profilepics/'.$person->profilepic) }}" width="100%" height="auto"  />
  @endif

  
            </div>


            <div class="deets">
            	<label class="labelled">Name:</label>
            	<div class="details">{{ $person->name }}</div>

            	<label class="labelled">Email:</label>
            	<div class="details">{{ $person->email }}</div>


            	<label class="labelled">Job title:</label>
            	<div class="details">{{ $person->typetwo }}</div>




<label class="labelled">County:</label>
            	<div class="details">{{ $person->county }}</div>

            	<label class="labelled">Sub-county:</label>
            	<div class="details">{{ $person->subcounty }}</div>

            	<label class="labelled">Ward</label>
            	<div class="details">{{ $person->ward }}</div>
  
       
            		<a href="{{ route('booker', ['id' => $person->id]) }} "><button type="button" class="btn btn-info btn-md" style="margin-bottom: 2%;">Book</button></a>
            		
            </div>



</div>

</div>

@endsection