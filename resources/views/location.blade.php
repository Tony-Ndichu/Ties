@extends('layouts.master')

@section('content')

  <div id="spacethree">

  	<div class="questionit">Step 3 / 4</div>


  <form method="post"  class="verto" action="{{ route ('located') }}">

              	{{csrf_field()}}
   

            	<label for="name">County:</label>
        <input type="text" class="form-control pushdown"  placeholder="County" name="county" />

            	<label for="email">Sub-county: </label>
            	 <input type="text" class="form-control pushdown" placeholder="Subcounty" name="subcounty" >

            	 <label for="name">Ward:</label>
        <input type="text" class="form-control pushdown" placeholder="ward" name="ward" />

			  <input  type="submit"   style="margin-top: 4%;" class="btn btn-primary button" value="Update"/>

		

            </form>

</div>

@endsection