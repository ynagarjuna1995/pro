@extends('master')

@section('title','Join our team')
@section('content')
	<div class="career-cover">
		<div id="careerscover"></div>
	
<div id="culture-container">
	<h3>Our goal is to cultivate a <b>culture</b> that helps us achieve our ambitions</h3>
<h5>Here are few things that we ....</h5>
<div id="culture">


<div id="colmn1">
<h4>Believe in autonomy not autocracy</h4>
<p>Influence should be independent of hierarchy
Position doesn’t matter every one does real work and get
thier hands dirty</p>
<h4>Transparency</h4>
<p>Power is gained by sharing knowledge not hoarding it
We share almost everything.</p>
<h4>Reasonably picky about our people</h4>
<p>With great people comes great responsibilities</p>
<h4>Continue to frequently refactored</h4>
<p>we love to Improve Internal structure without
changing the external behaviour</p>
</div>

<div id="colmn2">
	{{HTML::image('assets/careers/Eyes-and-Business-15.png','alt_eqvialent_in_html',array('id'=>'colmn2-img'))}}
</div>

<div id="colmn3">
	<h4 id="h4para">We value people with</h4><div id="para1">
<p><span id="bold">H</span>umble - Self aware and Respectable</p>
<p><span id="bold">E</span>ffective - Measurably moves needle
Immeasurably add values</p>
<p><span id="bold">A</span>daptable - Curious and constantly changing</p>
<p><span id="bold">R</span>emarkable - Smart,Creative,Resourceful</p>
<p><span id="bold">T</span>ransparent - Open and honest with others
and with themselves</p></div>
<h4>Hire to elevate.We don’t just hire to delegate</h4>
<p id="para2">We’re a team, not a family.So we want stars in every position</p>
<h4>Love to be different</h4>
<p id="para3">Remarkble outcomes rarely results from modest risks</p>
<h4>Work to solve for the customers</h4>
<p id="para4">“It’s better to obsess over our customers than
our competitors”</p>
</div>

</div>
</div>
	 <p id="join-title1">Clickntoor is an initiative to organize hastle free trips to places near you</p>

<div id="join-about-container">
<div class="join-about-box">{{HTML::image('assets/careers/Carrers_joinus_all_pics-03.png','alt_eqvialent_in_html',array('class'=>'join-about-img'))}}<span class="join-about-img-caption">People that more like friends that just collegues</span></div>
<div class="join-about-box">{{HTML::image('assets/careers/Carrers_joinus_all_pics-06.png','alt_eqvialent_in_html',array('class'=>'join-about-img'))}}<span class="join-about-img-caption">We care for clent’s, user’s and fellow tooru’s</span></div>
<div class="join-about-box">{{HTML::image('assets/careers/Carrers_joinus_all_pics-05.png','alt_eqvialent_in_html',array('class'=>'join-about-img'))}}<span class="join-about-img-caption">Discounted tours Result matter than how much vacation we take</span></div>
<div class="join-about-box">{{HTML::image('assets/careers/Carrers_joinus_all_pics-08.png','alt_eqvialent_in_html',array('class'=>'join-about-img'))}}<span class="join-about-img-caption">Clear growth path where you define where you want to get to</span></div>
<div class="join-about-box">{{HTML::image('assets/careers/Carrers_joinus_all_pics-01.png','alt_eqvialent_in_html',array('class'=>'join-about-img'))}}<span class="join-about-img-caption">Work from any place Result matter more than where we produce them</span></div>
<div class="join-about-box">{{HTML::image('assets/careers/Carrers_joinus_all_pics-04.png','alt_eqvialent_in_html',array('class'=>'join-about-img'))}}<span class="join-about-img-caption">No Hierarchy-All are equal Position doesn’t matter every does real work and get hands dirty</span></div>
<div class="join-about-box">{{HTML::image('assets/careers/Carrers_joinus_all_pics-07.png','alt_eqvialent_in_html',array('class'=>'join-about-img'))}}<span class="join-about-img-caption">Get sh*t done mantra Result matters more than hours we work</span></div>
<div class="join-about-box">{{HTML::image('assets/careers/Carrers_joinus_all_pics-02.png','alt_eqvialent_in_html',array('class'=>'join-about-img'))}}<span class="join-about-img-caption">Equity for people we want to keep for ever</span></div>
</div>
</div>


<div id="team-container">
	<h6>Our Team</h6>
	<div id="team">
		<div id="per1" class="per">{{HTML::image('assets/careers/team/','Founder-clickntoor',array('class'=>'img-circle','id'=>'per-img1'))}}<h5>Nagarjuna Yelisetty</h5><p></p></div>
		<div id="per2" class="per">{{HTML::image('assets/careers/team/face.jpg','nitin',array('class'=>'img-circle','id'=>'per-img2'))}}<h5>Nithin </h5><p></p></div>
		<div id="per3" class="per">{{HTML::image('assets/careers/team/harshith.jpg','harshith',array('class'=>'img-circle','id'=>'per-img3'))}}<h5>Harshith </h5><p></p></div>
		<div id="per4" class="per">{{HTML::image('assets/careers/team/face.jpg','sneha',array('class'=>'img-circle','id'=>'per-img4'))}}<h5>SnehaSri </h5><p></p></div>
		<div id="per5" class="per">{{HTML::image('assets/careers/team/face.jpg','tejaswi',array('class'=>'img-circle','id'=>'per-img5'))}}<h5>Tejaswi </h5><p></p></div>
		<div id="per6" class="per">{{HTML::image('assets/careers/team/face.jpg','phani',array('class'=>'img-circle','id'=>'per-img6'))}}<h5>Phani </h5><p></p></div>
		<div id="per7" class="per">{{HTML::image('assets/careers/team/jayasoo.jpg','jayasoo',array('class'=>'img-circle','id'=>'per-img7'))}}<h5>Jayasooryan K V </h5><p></p></div>
		<div id="per8" class="per">{{HTML::image('assets/careers/team/face.jpg','person',array('class'=>'img-circle','id'=>'per-img8'))}}<h5>Be a part of us !!</h5><p></p></div>
	
    </div>
</div>    




	</div>
@stop