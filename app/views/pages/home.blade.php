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

    </head>

  <body>

  Write the html content here and create corresponding css files in assets
  note: use different clasees or id's in every page


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