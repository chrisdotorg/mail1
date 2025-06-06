 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="index.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<title>administation</title>
</head>
<body>
	
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="index.php" class="brand"><i class='bx bxs-smile icon'></i> Mail server adminstator</a>
		<ul class="side-menu">
			<li><a href="index.php" class="active"><i class='bx bxs-dashboard icon' ></i>Dashboard</a></li>
			<li class="divider" data-text="Server">Server</li>
			<li>
				<a href="#"><i class='bx bxs-inbox icon' ></i>Serveur<i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="#">redémarrer le Serveur</a></li>
					<li><a href="#">lancer le serveur</a></li>
					<li><a href="#">arrêter le serveur</a></li>
				</ul>
			</li>
			<li class="divider" data-text="domains & accounts">comptes et domaines</li>
			<li>
				<a href="#"><i class='bx bxs-notepad icon' ></i>system users<i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="users.php"> user accounts </a></li>
					<li><a href="addo.html">Add a domain </a></li>
					<li><a href="removeDomain.html">Remove a domain </a></li>
					<li><a href="add.html">Add an account </a></li>
					<li><a href="removeAccount.html">Remove an account </a></li>
				</ul>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

	<!-- NAVBAR -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu toggle-sidebar' ></i>
			<form action="#">
				<div class="form-group">
				</div>
			</form>
			<div id="clock">
				<script src="clock.js"></script>
			</div>
			<span class="divider"></span>
			<div class="profile">
				<img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
				<ul class="profile-link">
					<li><a href="#"><i class='bx bxs-user-circle icon' ></i> Profile</a></li>
					<li><a href="#"><i class='bx bxs-log-out-circle' ></i> Logout</a></li>
				</ul>
			</div>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
		<h1 class="title">user accounts</h1>	
			<?php 
				require("display.php");
			?>
		<h1 class="title">user domains</h1>
			<?php 
				require("domaines.php");
			?>
		</main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->
	<script src="index.js"></script>
</body>
</html>