<!doctype html>
<html lang="en">

	<head>
	<meta charset="UTF-8">
	<title>clickntoor-Students hub to plan and enjoy trips</title>
	<meta class="description"> </meta>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	{{ stylesheet_link_tag() }}
    {{ javascript_include_tag() }}
		<script>
    $(function() {
	    $("#home-cover").vegas({
             src:'aboutus.jpg'
        });
         $("home-cover").vegas('overlay', {
             src:'overlays/13.png'
       });
    });

    </script>

    <style>
    #home-cover{width: 100%;height: 640px;}
    </style>
    </head>

  <body>
	<hr id="top">

<div id="home-cover">

	<div class="col-xs-1"></div>
	<a href="#"  id="logo-anchor" ">{{HTML::image('assets/logobot.png','logo',array('id'=>'logo'))}}</a>
  <ul class="list-inline" id="nav-top">
    <li><a href="#">LOGIN</a></li>
    <li><a href="#">SIGN UP</a></li>
    <li><a href="#">JOIN OUR TEAM</a></li>
  </ul>  

<div class="col-xs-12"><h2>Discover great places to hangout with your friends around your college </h2></div>
<!--
<form class="form-inline">
       
        <a href="#"><div class="input-group">
          <input type="text" class="form-control input-lg" placeholder="Search...">
          <div class="input-group-addon">
            <span class="glyphicon glyphicon-search"></span>
          </div>
        </div></a>
       
</form>
-->
<div id="launch">We are launching on July 26</div>
</div>
	
  <div id="home-about-container">
  	<div id="home-about">
  		<div class="home-about-box" id="home-about-box1">{{HTML::image('assets/aboutus/aboutuspicsall-01.png','Follow Freinds fortrusted reviews',array('class'=>'home-about-img','id'=>'home-about-img1'))}}<span class="home-about-img-caption">Follow friends for
             trusted reviews</span></div>
        <div class="home-about-box" id="home-about-box2">{{HTML::image('assets/aboutus/aboutuspicsall-02.png','share ,comment',array('class'=>'home-about-img','id'=>'home-about-img2'))}}<span class="home-about-img-caption">See comments, Reviews
             and share your travel experiences with your friends</span></div>
        <div class="home-about-box" id="home-about-box3">{{HTML::image('assets/aboutus/aboutuspicsall-03.png','Invite your friends',array('class'=>'home-about-img','id'=>'home-about-img3'))}}<span class="home-about-img-caption">Invite your friends
             of other colleges for trips</span></div>

        <a href="#"><div id="fb-login">{{HTML::image('assets/fb.png','fb',array('id'=>'fb'))}}<span id="fb-text">LOGIN WITH FACEBOOK</span></div></a>
    </div>
  </div>
 

{{-- This is a multi-line comment in blade template 


!!!!!!!!!!!!!!!!!!Extend this page by just placing the html content with fresh starting div here and writing corresponding css in home.css 
	Image linking

	{{HTML::image('assets/folder_name/Image_name.png','alt_eqvialent_in_html',array('class_or_id'=>'id_or_class_ name'))
	background images can linked as 
	background:('image.png')             ------------->when image is situated in app/assets/images
	background:('/folder_name/image.png')------------->when image is situtated in app/assets/folder_name/image.png
	
	!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!--}}

@include('includes/navigation')
	
</body>
</html>  