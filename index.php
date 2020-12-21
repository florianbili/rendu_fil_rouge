<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">	
	<link rel="stylesheet" href="css/style.css" />
	<title>Sondagemax.com</title>
</head>
<body>
	<!--HEADER-->
	<header class="container">
			<img src="img/logo.png" alt="Logo sondage" /> <h1>QUIZMAX</h1>
			
			<nav>
				<a href="index.php">Home</a><!--
				--><a href="sondage.html">Nos Quiz</a><!--
				--><a href="classement.html">Classement</a>
			</nav>
	</header>
	<!--MAIN CONTENT-->
	<main class="container">
		<section>
			<article>
				<h1>LES DERNIERS QUIZZ FAIT PAR NOS UTILISATEURS !</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				<picture>
					<source srcset="./img/illu-mobile.jpg" media="(max-width: 767px)">					
					<source srcset="./img/illu-tablette.jpg" media="(max-width: 1024px)">
					<img src="./img/illu.jpg" alt="image desktop">
				</picture>
			</article>
			<article>
				<h2>Lorem ipsum dolor sit amet</h2>
				<p>Vivamus sed dui vitae mi aliquam venenatis quis quis nulla. Nulla vitae mi at massa maximus ultrices. Vestibulum nibh sem, tristique sit amet orci et, hendrerit facilisis sem. Aliquam scelerisque tortor eu sodales feugiat. Proin nisl eros, egestas ac nunc vel, condimentum sagittis ipsum. Proin et eros risus. Donec non nunc at ante viverra posuere sit amet sed eros. <a href="#">Phasellus vehicula</a>, nisi a imperdiet hendrerit, risus nibh tempus felis, eu rutrum sapien lectus nec dolor. Fusce eleifend, nunc et interdum hendrerit, enim mi rutrum massa, at iaculis elit mauris ac enim. </p>
			</article>

		</section><!--
		--><aside>
			<article>
				<h2>Connectez vous ou inscrivez vous !</h2>
               
				<div class="login-form">
					<?php    
							if(isset($_GET['login_err']))
							{
								$err = htmlspecialchars($_GET['login_err']);
			
								switch($err)
								{
									case 'password':
										?>
										<div class="alert alert-danger">
											<strong>Erreur</strong> mot de passe incorrect
											</div>
											<?php
											break;
			
									case 'email':
										?>
										<div class="alert alert-danger">
											<strong>Erreur</strong> email incorrect
											</div>
											<?php
											break;
			
									case 'already':
										?>
										<div class="alert alert-danger">
										<strong>Erreur</strong> compte non existant
										</div>
										<?php
										break;
								}
							}
					?>
			
						<form action="connexion.php" method="post">
							<h2 class="text-center">Connexion</h2>       
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Connexion</button>
							</div>   
						</form>
						<p id="inscription"><a href="inscription.php">Inscription</a></p>
					</div>
			
			</article>
			<article>
				<h2>Gagnez des points</h2>
				<p>Vivamus sed dui vitae mi aliquam venenatis quis quis nulla. Nulla vitae mi at massa maximus ultrices. Vestibulum nibh sem, tristique sit amet orci et, hendrerit facilisis sem. Aliquam scelerisque tortor eu sodales feugiat. Proin nisl eros, egestas ac nunc vel, condimentum sagittis ipsum. Proin et eros risus.</p>
			</article>
			<article>
				<h2>Créez vos propres sondages</h2>
				<p>Vivamus sed dui vitae mi aliquam venenatis quis quis nulla. Nulla vitae mi at massa maximus ultrices. Vestibulum nibh sem, tristique sit amet orci et, hendrerit facilisis sem. Aliquam scelerisque tortor eu sodales feugiat. Proin nisl eros, egestas ac nunc vel, condimentum sagittis ipsum.</p>
				
			</article>
		</aside>
	</main>
</body>
</html>
