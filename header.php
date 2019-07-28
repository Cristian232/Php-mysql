

<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title><?php echo $pagetitle; ?></title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/reset.css" type="text/css">
		<!-- <link rel="stylesheet" href="css/style.css" type="text/css"> -->
		<link rel="stylesheet" href="css/responsive.css" type="text/css">
		<link rel="icon" href="img/favicon-ninja226x225.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

<body>	<?php include_once("analyticstracking.php") ?>
	<div id="main-container"> <!--main-container -->
		<header>
			<div class="header-image">
					<img src="./img/ninja950'250.jpg" alt="" title="" width="950" height="250" />
			</div>
			<div id="headerbar">
				<ul>
					<li id="namelogo">
							<p>
								Cristi!
							</p>
							<img>
					</li>
					<li <?php if ($section == "contact") {echo 'class="on"'; } ?>>
						<a href="contact.php" title="">
								<p>
									Contact
								</p>
						</a>
					</li>
					<li <?php if ($section == "backend") {echo 'class="on"'; } ?>>
						<a href="backend.php">
								<p>
									Backend
								</p>
						</a>
					</li>
					<li <?php if ($section == "about") {echo 'class="on"'; } ?>>
						<a href="about.php">
								<p>
									About
								</p>
						</a>
					</li>
					<li <?php if ($section == "home") {echo 'class="on"'; } ?>>
						<a href="index.php">
								<p>
									Home
								</p>
						</a>
					</li>
				</ul>
			</div>
		</header>