<!DOCTYPE html>
<html>
	<head>
		<title>Fountain Hills Martial Arts -- Home of Taekwondo and Arizona PTK (Pekiti-Tirsia Kali)</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="_/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link rel='stylesheet' type='text/css' href='_/components/jquery-ui-1.10.4.custom/css/smoothness/jquery-ui-1.10.4.custom.css' />
		<link href="_/components/bwsewell-tablecloth/assets/css/tablecloth.css" rel="stylesheet">
    	<link href="_/components/bwsewell-tablecloth/assets/css/prettify.css" rel="stylesheet"> 
    	<!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet" /> -->
    	<link href="_/css/font-awesome.css" rel="stylesheet">
    	<link href="_/components/colorbox-master/example3/colorbox.css" rel="stylesheet"> 
		<link href="_/css/mystyles.css" rel="stylesheet" media="screen">
		<link rel="shortcut icon" href="images/webIcon.ico">
	</head>

	<body id="home" data-spy="scroll" data-target=".menu">
		<div id="fb-root"></div>

		<div class="container">
		<?php include '_/components/php/header.php'; ?>
		<?php include '_/components/php/top.php'; ?>
		</div><!-- top container -->
		<div class="pageContent container">
			<div class="container logoContain">
				<div class="logo"></div>
			</div>
		<?php include '_/components/php/about.php'; ?>
		<?php include '_/components/php/classes.php'; ?>
		</div><!-- content container -->
		<div class="overlay"></div>
		<!-- <div class="newBGText">
			<div class="col-lg-4 col-lg-push-4 col-md-4 col-md-push-4 col-sm-4 col-sm-push-4 col-xs-4 col-xs-push-1">
				<h2>Spirit</h2>
				<h2>Attitude</h2>
				<h2>Character</h2>
				<h2>Dignity</h2>
			</div>
			<div class="col-lg-4 col-lg-push-3 col-md-4 col-md-push-3 col-sm-4 col-sm-push-3 col-xs-4 col-xs-push-3">
				<h2>Health</h2>
				<h2>Focus</h2>
				<h2>Virtue</h2>
				<h2>Action</h2>
			</div>
		</div> -->
		<div class="newBG"></div>
		<div class="pageContent container">
		<?php include '_/components/php/instructors.php'; ?>
		<?php include '_/components/php/gallery.php'; ?>
		</div><!-- content container -->

		<div class="pageContent2 container">
		<?php include '_/components/php/contactUs.php'; ?>
		<div class="col-lg-12" align="center" style="padding-top:40px">Website Design by <a href="https://www.linkedin.com/pub/dylan-intorf/68/318/784" target="_blank">Dylan Intorf</a></div>
		</div><!-- content container -->

		<?php include '_/components/php/likeboxModal.php'; ?>

		<?php //include '_/components/php/galleryModal.php'; ?>
		<div class="clearfix visible-md visible-lg"></div>


		
		<script src="_/components/js/jquery.js"></script>
		<script src="_/js/bootstrap.min.js"></script>
		<script src="_/components/js/scrollspy.js"></script>
    	<script src="_/components/bwsewell-tablecloth/assets/js/jquery.tablecloth.js"></script>
    	<script src="_/components/colorbox-master/jquery.colorbox-min.js"></script>
		<script src="_/js/myscript.js"></script>

		<script type="text/javascript">
			$(function(){
				// to make pretty tables
			    $('table').tablecloth({
			      theme: "dark",
			      bordered: true,
			      striped: true,
			      clean: true,
			      cleanElements: "th td",
			      customClass: "my-table"
			    });

			    // add photos to MSPhotoshoot gallery
				  for(var i = 1; i < 14; i++){
				    var GSphoto = '<a class=\"MSPhoto\" href=\"/images/GrantPhotoshoot/GS_'+i+'.jpg\"><img src=\"/images/GrantPhotoshoot/GS_'+i+'.jpg\" id=\"GS_'+i+'\" class=\"img-thumbnail\" alt=\"GS photoshoot"></a>';
				    $('#MSPhotoshoot').append(GSphoto);
				  }
				  // create gallery slideshow
				  $('.MSPhoto').colorbox({rel: "MSPhoto", slideshow:true, maxWidth:"75%", maxHeight:"100%"});

				  if ($(this).width() <= 991){
				        $('#message').attr('cols','35');
				  }
				  $(window).on('resize', function(){
				      if ($(this).width() <= 991){
				        $('#message').attr('cols','35');
				      }
				      else{
				        $('#message').attr('cols','50');
				      }
				  });
			});
		</script>

	</body>
</html>