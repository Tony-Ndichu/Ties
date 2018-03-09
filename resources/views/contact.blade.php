@extends('layouts.master')

@section('content')
	<div class="content">
		<div class="aboutmap">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8655983944154!2d36.691088514030874!3d-1.2521397359412765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1ed50621d76d%3A0x8c65b67edcfb9766!2sKINOO+CHIEFS+OFFICE!5e0!3m2!1sen!2ske!4v1520587797038" width="600" height="450" frameborder="0" style="border:0" allowfullscreen class="iframeleft"></iframe>
			<img src="{{ URL::to('/images/thehouse.jpg') }}"  width="50%" height="auto">

				<ul class="pointsright" >
					<p><h4 style="font-weight:bold;">CONTACT DETAILS</h4></p>
				<li>www.k-ties.org</li>
				<li>+254 726 205 388-Samuel(Director)</li>
				<li>+254 712 229 369-Lawrence</li>
				<li>+254 711 248 862-BEN </li>
				<li>P.O BOX 538-00605  UTHIRU</li>

			</ul>

		</div>
	</div

@endsection