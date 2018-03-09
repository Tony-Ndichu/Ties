 @extends('layouts.master')

 @section('content')

  <div id="space">

<div class="questionit">Step 1 / 4</div>

 <form action="{{ route('answertwo') }}" method="post" class="vert" >



       {{ csrf_field() }}
<div class="float">
    
    <input type="radio" name="type" value="seller" class="rad" checked>
    <label for="type" class="big">I want to sell</label>
</div>

<div class="float">
    
    <input type="radio" name="type" value="jober" class="rad">
    <label for="type" class="big">I am looking for work</label>
  </div>

      
<input  type="submit" class="btn btn-success" id="next2" value="Next"/>



  </form>

</div>
@endsection
