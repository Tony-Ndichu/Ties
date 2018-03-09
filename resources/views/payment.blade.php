 @extends('layouts.master')

 @section('content')

  <div id="space">

<div class="questionit" >Step 4 / 4</div>

 <form action="{{ route('paid') }}" method="post" class="vert" >



       {{ csrf_field() }}

@if(Auth::user()->typeone == 'jober')
        <label for="mpesa" class="black">To complete your registration  as a {{ Auth::user()->typetwo }}, please transfer Ksh.200 to paybill number <strong>45372</strong> and enter the confirmation code below:</label>
    
    @else 
<label for="mpesa" class="black">To complete your registration , please transfer Ksh.300 to paybill number <strong>45372</strong> and enter the confirmation code below:</label>

@endif
        <input type="text" class="form-control" placeholder="MPESA code e.g MF089BF89G " name="mpesa"  />
    
 

<input  type="submit"   style="margin-top: 2%;" class="btn btn-primary button" value="Confirm"/>

  </form>

</div>
@endsection
