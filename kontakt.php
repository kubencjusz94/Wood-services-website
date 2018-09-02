<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Drewno</title>
		<meta name="description" content="Strona usług na temat drewna!">
		<meta name="keywords" content="drewno">
		<meta name="author" content="Kuba Fabisiak">
		<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
		
		<?php include('transmitter.php'); ?>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<link rel="stylesheet" href="style.css" type="text/css" />
		<link rel="stylesheet" href="css/fontello.css" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	</head>
	<body>
		<main>
			<div class="container-fluid col-xs-12">
				<div class="row no-margin">
					<div id="leftSide" class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
						<nav role="navigation" class="navbar sticky-top navba-default">
							<div class="container-fluid d-flex justify-content-start ">
								
									<div id="button-div" >
										<button  id="menu-button" type="button" class="navbar-toggle collapsed d-block d-sm-none d-none" data-toggle="collapse" data-target="#menu-bar">
												<i class="icon-menu"></i>
										</button>
									</div>

						
									<div id="menu-bar" class="collapse dont-collapse-xs">
										<div class="dropdown-header">
											<a href="index.html"><img class="logos col-xs-6" src="img/logo.png" alt="logo"/></a>
										</div>
										<div>
											<ul class="nav navbar-">
												<div class="cont-fit-content">
													<a href="index.html">
														<li id="1" class="navList">O Firmie</li>
													</a>
													<div id="a" class="stress"></div>
												</div>
												<div class="cont-fit-content">
													<a href="uslugi.html">
														<li id="3" class="navList">Usługi</li>
													</a>
													<div id="c" class="stress"></div>
												</div>
												<div class="cont-fit-content">
													<a href="galeria.html">
														<li id="4" class="navList">Galeria</li>
													</a>
													<div id="d" class="stress"></div>
												</div>
												<div class="cont-fit-content">
													<a href="kontakt.php">
														<li id="5" class="navList">Kontakt</li>
													</a>
													<div id="e" class="stress"></div>
												</div>
											</ul>
										</div>
									</div>
							</div>
						</nav>
					</div>
					<div id="rightSide" class="col-xs-12 col-sm-8 col-md-8 col-lg-9">
						<div id="jumb-kont" class="jumbotron jumbotron-fluid jumb-img">
							<div id="jumb-cont" class="container">
								<h1 class="display-4 jumb-headers ">Kontakt</h1>
								<p class="lead jumb-text ">Jesteśmy do Twojej dyspozycji.</p>
							</div>
						</div>
						<div id="headContent">
							<article>
								<section>
									<div id="map" class="col-xs-12 col-sm-8 col-md-6 col-lg-6 fullywidth">							
									</div>
									<div id="dane-kontakt" class="col-xs-12 col-sm-4 col-md-6 col-lg-6 fullywidth no-left-margin">
										<div class="d-flex p-2 d-flex align-items-center to-margin">
											<div id="galleryHeaderR" >
												<div id="str" class="d-flex align-items-center">
													<h2 id="cconst" class="resizeXS resizeS resizeM resizeL">Kontakt</h2>
												</div>
											</div>
											<div id="galleryHeaderL" class="widthOnS">
												<div class="galleryStressConst d-flex align-items-center"></div>
												<div class="galleryStressConst "></div>
											</div>
											<div class="clear-both"></div>
										</div>
										<div id="cont-adress-list">
											<div id="first-cont-list" class="add-mgr-xs add-mgr-sm">
												<ul >
													<li class="adressList"><i class="icon-home"></i>Zieluń</li>
													<li class="adressList">ul. Piastowska 4</li>
													<li class="adressList">09-304 Lubowidz</li>
												</ul>
											</div>
											<div id="second-cont-list" class="add-mgr-xs add-mgr-sm">
												<ul class="add-padd-sm add-padd-xs">
													<li class="adressList"><i class="icon-mobile"></i> 690 508 907</li>
													<li class="adressList"><i class="icon-phone-outline"></i> 23 65 82 415</li>
													<li class="adressList"><i class="icon-mail"></i> jwm.tomasz.mazurkiewicz@gmail.com</li>
												</ul>
											</div>
										</div>
									</div>
									<div id="border-Cont">
										<div class="my-bottom-border"></div>
											<div class="my-bottom-border"></div>
									</div>
									<div class="clear-both"></div>
								</section>
								<section>
									<div class="section-header">
										<h3>Formularz kontaktowy</h3>
									</div>
									<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
										<div class="form-group">
											<label for="user-name">Imię i nazwisko (wymagane)</label>
											<input class="form-control" name="user-name" value="<?=$name?>">
											<span class="err-info"><?= $name_error ?></span>
										</div>
										<div class="form-group">
											<label for="email">Email (wymagane)</label>
											<input type="email" class="form-control" name="email" value="<?=$email?>">
											<span class="err-info"><?= $email_error ?></span>
										</div>
										<div class="form-group">
											<label for="phone-number" >Numer telefonu</label>
											<input class="form-control" name="phone-number" value="<?=$phone?>">
											<span class="err-info"><?= $phone_error ?></span>
										</div>
										<div class="form-group">
											<label for="topic" >Temat</label>
											<input class="form-control" name="topic" value="<?=$topic?>">
										</div>
										<div class="form-group">
											<label for="message">Treść wiadomości </label>
											<br/>
											<textarea name="message" rows="8" cols="80"><?=$message?></textarea>
										</div>
										<div class="contact-button-div ">
											<button type="submit"  name="submit" class="btn btn-outline-dark">Wyjślij</button>
											<div class="resp-messg"><?=$success?></div>
										</div>
									</form>
								</section>
							</article>
						</div>
						<div id="feet" class="card-footer">
							<footer>
								<div class="footerParts">
									<div class="contactIconsCont">
										<div class="contactIcons">
											<ul>
												<li class="adressList"><i class="icon-mobile"></i> 690 508 907</li>
											</ul>
										</div>
										<div class="contactIcons">
											<ul>
												<li class="adressList"><i class="icon-phone-outline"></i> 23 65 82 415</li>
											</ul>
										</div>
										<div class="contactIcons">
											<ul>
												<li class="adressList"><i class="icon-mail"></i> <span class="ourmail">jwm.tomasz.mazurkiewicz@gmail.com</span></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="footerParts">
									<div class="contactIconsCont">
										<div class="contactIcons">
											<ul >
												<li class="adressList"><i class="icon-home"></i>Zieluń</li>
												<li class="adressList">ul. Piastowska 4</li>
												<li class="adressList">09-304 Lubowidz</li>
											</ul>
										</div>
									</div>
								</div>
							</fotter>
						</div>
					</div>	
				</div>
			</div>
		</main>
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="navy.js"></script>
    <script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBENou4dJfCaIoOezKZVxojQhV65P87Z7c&callback=initMap">
	</script>
    </script>
		<script src="my-map.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>











