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

<div class="quotebox"><p class="quote"><strong>2ND TIMOTHY 2:15</strong>     :Study to shew thyself approved unto God, a workman that needeth not to be ashamed, rightly dividing the word of truth.</p></div>


</div>




<div class="rightcolumn">
	<ul class="holdright">
		<li class="trend">Progress meeting 2018</li>
		<li class="trend">K-Ties mission and vision statements</li>
		<li class="trend">The new government laws on the building of new city buildings as per the constitution </li>
		<li class="trend">Construction safety tips that every person should be aware about</li>
		<li class="trend">The new Labour laws in the country and how they affect the future of the construction industry</li>
		<li class="trend">Health riskks faced by construction workers and how to avoid illness.</li>
		<li class="trend">K-Ties partnership with suitable brands and orgnzaizations</li>
		
	</ul>
</div>


@endsection