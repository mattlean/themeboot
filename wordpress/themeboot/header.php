<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(''); ?></title>
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="navbar-wrapper">
		<div class="container">
			<div class="navbar navbar-inverse navbar-static-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/">Santa Cruz FGC</a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="/faq">FAQ</a></li>
							<li><a href="/schedule">Events & Schedule</a></li>
							<li><a href="/location">Location</a></li>
							<li><a href="/contact">Contact</a></li>
							<li><a href="/blog">Blog</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Rankings <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="/rankings/pm.php">Project M</a></li>
									<li><a href="#"><s>Super Smash Bros. for Wii U</s></a>
									<li><a href="/rankings/ssbm.php">Super Smash Bros. Melee</a></li>
									<li><a href="/rankings/usf4.php">Ultra Street Fighter IV</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>