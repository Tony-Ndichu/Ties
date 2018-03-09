@extends('layouts.master')

@section('content')

<div class="content">

 <div class="boxbig">
            <div class="projectimagebig">
              <img src="{{ asset('sales/'.$order->image) }}" width="100%" height="auto" />
            </div>


               <form method="post"  class="deets" action="{{ route ('ordered') }}">

              	{{csrf_field()}}
   

<label for="name">Name:</label>

<input type="hidden" name="id" value="{{ $order->id }}">
<input type="hidden" name="price" value="{{ $order->price }}">
<input type="hidden" name="description" value="{{ $order->description }}">
<input type="hidden" name="sellername" value="{{ $order->user->name }}">
<input type="hidden" name="sellerid" value="{{ $order->user->id }}">
<input type="hidden" name="image" value="{{ $order->image }}">



        <input type="text" class="form-control" placeholder="Your Name" name="name" />


<label for="contact">Contact( how can we reach you? ) :</label>
            	 <input type="text" class="form-control" placeholder="07xx-xxx-xxx or johndoe@gmail.com" name="contact" />



            	<label for="quantity">Quantity( e.g how many  pieces) :</label>
        <input type="text" class="form-control" placeholder="quantity" name="quantity" />

            	

			<input  type="submit"   style="margin-top: 2%;" class="btn btn-primary button" value="Finish"/>

		

            </form>

        </div>

@endsection