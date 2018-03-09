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
               @if($booked->profilepic == NULL) 
    <img class="dp"  src="{{asset('images/holder.png')}}" width="100%" height="auto" />
@else
  <img class="dp" src="{{ asset('profilepics/'.$booked->profilepic) }}" width="100%" height="auto"  />
  @endif

  
            </div>


           <form method="post"  class="deets" action="{{ route ('booked') }}">

                {{csrf_field()}}
   

<label for="name">Name:</label>

<input type="hidden" name="bookedid" value="{{ $booked->id }}">
<input type="hidden" name="bookedname" value="{{ $booked->name }}">
<input type="hidden" name="bookedprof" value="{{ $booked->typetwo }}">

<input type="hidden" name="bookedimage" value="{{ $booked->image }}">



        <input type="text" class="form-control" placeholder="Your Name" name="name" />


<label for="contact">Contact( how can we reach you? ) :</label>
                 <input type="text" class="form-control" placeholder="07xx-xxx-xxx or johndoe@gmail.com" name="contact" />



                <label for="date">What date would you like to book him/her?</label>
        <input type="text" class="form-control" placeholder="Date" name="date" />

        <label for="period">How long will the job last?</label>
        <input type="text" class="form-control" placeholder="weeks/days/hours" name="period" />


        <label for="specials">Special requests:</label>
        <input type="text" class="form-control" placeholder="Special requests" name="specials" />



                

            <input  type="submit"   style="margin-top: 2%;" class="btn btn-primary button" value="Finish booking"/>

        

            </form>




</div>

</div>

@endsection