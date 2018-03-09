@extends('layouts.master')

@section('content')
<div id="spacetwo">

  <div class="questionit">Step 2 / 4</div>

 <form action="{{ route('answerthree') }}" method="post" class="vert" >

       {{ csrf_field() }}
<div class="float">

	<input type="radio" name="type" value="architect" checked class="radtwo">
    <label for="type" class="bigtwo">Architect</label>
    
</div>

<div class="float">
	    <input type="radio" name="type" value="planner" class="radtwo">
    <label for="type" class="bigtwo">Planner</label>
  </div>

<div class="float">

	    <input type="radio" name="type" value="engineer" class="radtwo">
    <label for="type" class="bigtwo" >Engineer</label>
  </div>

  <div class="float">
    <input type="radio" name="type" value="foreman" class="radtwo">

    <label for="type" class="bigtwo">Foreman</label>
  </div>

  <div class="float">

  	    <input type="radio" name="type" value="mason" class="radtwo">

    <label for="type" class="bigtwo">Mason</label>
  </div>

  <div class="float">

  	    <input type="radio" name="type" value="carpenter" class="radtwo">

    <label for="type" class="bigtwo">Carpenter</label>
  </div>

  <div class="float">

  	    <input type="radio" name="type" value="plumber" class="radtwo">

    <label for="type" class="bigtwo">Plumber</label>
  </div>
      
   <div class="float">
   	    <input type="radio" name="type" value="welder" class="radtwo">

    <label for="type" class="bigtwo">Welder</label>
   </div>

   <div class="float">
   	    <input type="radio" name="type" value="painter" class="radtwo">

    <label for="type" class="bigtwo">Painter</label>
  </div>
      
      <input  type="submit" class="btn btn-success" id="next2" value="Next"/>



  </form>

</div>

@endsection