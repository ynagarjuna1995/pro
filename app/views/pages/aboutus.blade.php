@extends('master')

@section('title','About Us')
@section('content')
	<div class="cover">
		<div id="aboutuscover"></div>
	</div>
	

<p id="title1">Clickntoor was created to make students life Easy,Fun and Enjoyable</p>

		<div id="aboutus-aboutus">
<div class="aboutus">{{HTML::image('assets/aboutus/aboutuspicsall-01.png','alt_eqvialent_in_html',array('class'=>'about-img'))}}<span class="about-img-caption">Follow friends for
trusted reviews</span></div>
<div class="aboutus" id="page1-about2">{{HTML::image('assets/aboutus/aboutuspicsall-02.png','alt_eqvialent_in_html',array('class'=>'about-img'))}}<span class="about-img-caption">See comments,Reviews
and share your travel experiences
with your friends</span></div>
<div class="aboutus">{{HTML::image('assets/aboutus/aboutuspicsall-06.png','alt_eqvialent_in_html',array('class'=>'about-img'))}}<span class="about-img-caption">Find Exiciting places
around you with a click</span></div>
<div class="aboutus">{{HTML::image('assets/aboutus/aboutuspicsall-03.png','alt_eqvialent_in_html',array('class'=>'about-img'))}}<span class="about-img-caption">Invite your friends
of other colleges for trips</span></div>
<div class="aboutus">{{HTML::image('assets/aboutus/aboutuspicsall-04.png','alt_eqvialent_in_html',array('class'=>'about-img'))}}<span class="about-img-caption">We will take care of your
travel and stay</span></div>
<div class="aboutus">{{HTML::image('assets/aboutus/aboutuspicsall-05.png','alt_eqvialent_in_html',array('class'=>'about-img'))}}<span class="about-img-caption">Use our responsive
website with ease</span></div>
</div>

<div id="page7">
	<a href="#">{{HTML::image('assets/twitter.jpg','twitter',array('id'=>'twitter'))}}</a><span id="tweet">follow us on twitter</span>
</div>	
	</div>

@stop
