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
               @if(Auth::user()->profilepic == NULL) 
    <img class="dp"  src="{{asset('images/holder.png')}}" width="100%" height="auto" />
@else
  <img class="dp" src="{{ asset('profilepics/'.Auth::user()->profilepic) }}" width="100%" height="auto"  />
  @endif

   <a href="{{ route('imagesupload') }}" ><button type="button" class="btn btn-warning btn-sm" style="width:100%;">Change photo</button></a>
            </div>


            <div class="deets">
            	<label class="labelled">Name:</label>
            	<div class="details">{{ Auth::user()->name }}</div>

            	<label class="labelled">Email:</label>
            	<div class="details">{{ Auth::user()->email }}</div>



            	@if (Auth::user()->typeone == 'jober')

            	<label class="labelled">Job title:</label>
            	<div class="details">{{ Auth::user()->typetwo }}</div>

@endif


<label class="labelled">County:</label>
            	<div class="details">{{ Auth::user()->county }}</div>

            	<label class="labelled">Sub-county:</label>
            	<div class="details">{{ Auth::user()->subcounty }}</div>

            	<label class="labelled">Ward</label>
            	<div class="details">{{ Auth::user()->ward }}</div>
  
         @if(Auth::user()->typeone == 'seller')
            		<a href="{{ route('salesuploader') }} "><button type="button" class="btn btn-info btn-md" style="margin-bottom: 2%;">Upload</button></a>
            	@else
            		<a href="{{ route('docuploader') }} "><button type="button" class="btn btn-info btn-md" style="margin-bottom: 2%;">Upload</button></a>
            		@endif

            		<a href="{{ route('edit') }} "><button type="button" class="btn btn-info btn-md" style="margin-bottom: 2%;">Edit account</button></a>

            		@if(Auth::user()->typeone == 'jober')
            		<a href="{{ route('works') }} "><button type="button" class="btn btn-info btn-md" style="margin-bottom: 2%;">Previous jobs</button></a>
            		@endif
            </div>



</div>

</div>

@endsection