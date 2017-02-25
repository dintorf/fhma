<!DOCTYPE html>
<html>
	<head>
		<title>Fountain Hills Martial Arts -- Calendar</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="_/css/bootstrap.css" rel="stylesheet" media="screen">

		<link rel='stylesheet' type='text/css' href='_/components/fullcalendar-2.6.0/lib/cupertino/jquery-ui.min.css' />
		<link rel='stylesheet' type='text/css' href='_/components/fullcalendar-2.6.0/fullcalendar.min.css' />
		<link href="_/css/font-awesome.css" rel="stylesheet">
		<link href="_/css/mystyles.css" rel="stylesheet" media="screen">

	</head>

	<body id="calendarPage">
		<div class="container">
		<?php include '_/components/php/header.php'; ?>
		<?php include '_/components/php/likeboxModal.php'; ?>
			<div class="content row">
				<div class="main calContent col-lg-12 col-md-12 col-sm-12">
				<?php include '_/components/php/eventModal.php'; ?>
					<div id="calendar"></div>
				</div><!-- main -->
			</div><!-- content -->
		</div><!-- container -->
		<div class="clearfix visible-md visible-lg"></div>

		<script src="_/components/js/jquery.js"></script>

		<script type='text/javascript' src='_/components/fullcalendar-2.6.0/lib/jquery-ui.custom.min.js'></script>
		<script type='text/javascript' src='_/components/fullcalendar-2.6.0/lib/moment.min.js'></script>
		<script type='text/javascript' src='_/components/fullcalendar-2.6.0/fullcalendar.min.js'></script>
		<script type='text/javascript' src='_/components/fullcalendar-2.6.0/gcal.js'></script>
		<script type='text/javascript' src='_/js/calendarScript.js'></script>
		<script type='text/javascript'>
			$(document).ready(function() {
			    $(window).resize(function() {
			        if($(window).width() <= 768) {
			            $('#calendar').fullCalendar('changeView', 'basicDay');
			        }
			    }).resize();
			});
		</script>
		<script src="_/js/bootstrap.js"></script>
		<script src="_/js/myscript.js"></script>
	</body>
</html>