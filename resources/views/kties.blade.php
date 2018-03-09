@extends('layouts.noscroll')

@section('content')


<div class="maincolumn">


	<div id="clockdiv">
  <div class="sec">
    <span class="days"></span>
    <div class="smalltext">Days</div>
  </div>
  <div class="sec">
    <span class="hours"></span>
    <div class="smalltext">Hours</div>
  </div>
  <div class="sec">
    <span class="minutes"></span>
    <div class="smalltext">Minutes</div>
  </div>
  <div class="sec">
    <span class="seconds"></span>
    <div class="smalltext">Seconds</div>
  </div>
</div>

<div class="def">
	Countdown to new event
</div>

<div id="wrap">
<div id="photos">
	<img src="{{asset('images/construction.jpg')}}" width="100%" height="auto" >
	<img src="{{asset('images/house2.jpeg')}}" width="100%" height="auto" >	
</div>
</div>


<div class="force">


<iframe width="560" height="315" src="https://www.youtube.com/embed/jMNJVbLup8g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="youtube"></iframe>

<div id="slider">
	<div class="str3 str_wrap" id="underslider">
		<img src="{{asset('images/one.jpg')}}"  width="auto" height="150" />
		<img src="{{asset('images/two.jpg')}}"  width="auto" height="150" />
		<img src="{{asset('images/three.jpg')}}"  width="auto" height="150" />
		<img src="{{asset('images/four.jpg')}}"  width="auto" height="150" />
		<img src="{{asset('images/five.jpg')}}"  width="auto" height="150" />
		<img src="{{asset('images/six.jpg')}}"  width="auto" height="150" />
		<img src="{{asset('images/seven.jpg')}}"  width="auto" height="150" />
		<img src="{{asset('images/eight.jpg')}}"  width="auto" height="150" />
		<img src="{{asset('images/nine.jpg')}}"  width="auto" height="150" />
		<img src="{{asset('images/ten.jpg')}}"  width="auto" height="150" />
	</div>
</div>


<div class="hundred">
	<div class="numbers">
		<div class="number1">
			<p class="digits">5</p>
			<div class="logo"><i class="fas fa-check-circle"></i></div>
			<p class="text">Completed projects</p>
		</div>
		<div class="number2">
			<p class="digits">500</p>
			<div class="logo"><i class="fas fa-users"></i></div>
			<p class="text">Registered members</p>
		</div>
	</div>
</div>

</div>

<div class="quotebox"><p class="quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit"</p></div>


</div>




<div class="rightcolumn">
	<ul class="holdright">
		<li class="trend">Sed ut perspiciatis un</li>
		<li class="trend">Seos qui ratione voluptatem </li>
		<li class="trend">Iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archite</li>
		<li class="trend">Ugit, sed qui</li>
		<li class="trend">Luptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tem</li>
		<li class="trend">Tem accusantium </li>
		<li class="trend">Am, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi con</li>
	</ul>
</div>


@endsection