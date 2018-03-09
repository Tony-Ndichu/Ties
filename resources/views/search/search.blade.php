@extends('layouts.master')

@section('content')

<div class="searchwhole">
	<div class="pic">
	<div class="searchbox" >

  <form class="searchform">

              	{{csrf_field()}}
   
<div class="globed">
        <i class="fas fa-globe" id="lefter"></i>    	


<select class="thecounty" id="county" name="county" placeholder="Please select your county">

	<option value="" disabled selected hidden style="color:gray">Please select your county</option>
    <option value="Mombasa">Mombasa</option>
	<option value="Kwale">Kwale</option>
	<option value="Kilifi">Kilifi</option>
	<option value="Tana River">Tana River</option>
	<option value="Lamu">Lamu</option>
	<option value="Taita taveta">Taita taveta</option>
	<option value="Garissa">Garissa</option>
	<option value="Wajir">Wajir</option>
	<option value="Mandera">Mandera</option>
	<option value="Marsabit">Marsabit</option>
	<option value="Isiolo">Isiolo</option>
	<option value="Meru">Meru</option>
	<option value="Tharaka-Nithi">Tharaka-Nithi</option>
	<option value="Embu">Embu</option>
	<option value="Kitui">Kitui</option>
	<option value="Machakos">Machakos</option>
	<option value="Makueni">Makueni</option>
	<option value="Nyandarua">Nyandarua</option>
	<option value="Nyeri">Nyeri</option>
	<option value="Kirinyanga">Kirinyanga</option>
	<option value="Murang'a">Murang'a</option>
	<option value="Kiambu">Kiambu</option>
	<option value="Turkana">Turkana</option>
	<option value="West Pokot">West Pokot</option>
	<option value="Samburu">Samburu</option>
	<option value="Trans-Nzoia">Trans-Nzoia</option>
	<option value="Uasin-Gishu">Uasin-Gishu</option>
	<option value="Elgeyo Marakwet">Elgeyo Marakwet</option>
	<option value="Nandi">Nandi</option>
	<option value="Baringo">Baringo</option>
	<option value="Likipia">Likipia</option>
	<option value="Nakuru">Nakuru</option>
	<option value="Narok">Narok</option>
	<option value="Kajiado">Kajiado</option>
	<option value="Kericho">Kericho</option>
	<option value="Bomet">Bomet</option>
	<option value="Kakamega">Kakamega</option>
	<option value="Vihiga">Vihiga</option>
	<option value="Bungoma">Bungoma</option>
	<option value="Busia">Busia</option>
	<option value="Siaya">Siaya</option>
	<option value="Kisumu">Kisumu</option>
	<option value="Homabay">Homabay</option>
	<option value="Migori">Migori</option>
	<option value="Kisii">Kisii</option>
	<option value="Nyamira">Nyamira</option>
	<option value="Nairobi">Nairobi</option>
          </select>


<select class="job" id="prof" name="prof">
	<option value="" disabled selected hidden >Please select the professional you're seeking e.g. mason</option>
		<option value="architect">Architect</option>
		<option value="planner">Planner</option>
		<option value="engineer">Engineer</option>
		<option value="foreman">Foreman</option>
		<option value="mason">Mason</option>
		<option value="carpenter">Carpenter</option>
		<option value="plumber">Plumber</option>
		<option value="welder">Welder</option>
		<option value="painter">Painter</option>
</select>
			<button type="submit" class="in"><i class="fas fa-search"></i></button>


		</div>

            </form>

	</div>

</div>


<div class="centered">
<div class="ctext"><h1>Search for an expert in your location</h1></div>
<div class="cimage"><img src="{{ URL::to('/images/worker.jpg') }}" width="100%" height="auto" ></div></div>

	<div id="post-data2">


</div>



	</div>

	<script type="text/javascript">

$(".in").click(function(e){

	e.preventDefault();

	$('.centered').hide();

	  var county = $('#county').val();
	  var prof = $('#prof').val();
 



$.ajax({


type : 'get',

url :'{{URL::to('search2')}}',

data:{ 'county': county , 'prof':prof },


success:function(data){

	console.log('HURAH');

$('#post-data2').html(data);



}

});


})

</script>

<script type="text/javascript">

$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });

</script>


@endsection