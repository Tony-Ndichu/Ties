@extends('layouts.master')

@section('content')

<div class="content2">



  <div class="boxbig">
            <div class="projectimagebig">
               @if(Auth::user()->profilepic == NULL) 
    <img class="dp"  src="{{asset('images/holder.png')}}" width="100%" height="auto" />
@else
  <img class="dp" src="{{ asset('profilepics/'.Auth::user()->profilepic) }}" width="100%" height="auto"  />
  @endif

  <a href="{{ route('imagesupload') }}" ><button type="button" class="btn btn-warning btn-sm" style="width:100%;">Change photo</button></a>
            </div>


              <form method="post"  class="deets" action="{{ route ('update') }}">

              	{{csrf_field()}}
   

            	<label for="name">Name:</label>
        <input type="text" class="form-control" placeholder="{{ Auth::user()->name }}" name="name" value="{{ Auth::user()->name }}" />

            	<label for="email">Email:</label>
            	 <input type="text" class="form-control" placeholder="{{ Auth::user()->email }}" name="email" value="{{ Auth::user()->email }}" />

			<input  type="submit"   style="margin-top: 2%;" class="btn btn-primary button" value="Update"/>

		

            </form>



</div>

</div>


@endsection