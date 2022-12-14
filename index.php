<?php
require_once './backend/controllers.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bizmap.dexignzone.com/xhtml/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jun 2022 11:27:04 GMT -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="kayip Directory & Listings HTML templates" />
	<meta property="og:title" content="kayip Directory & Listings HTML templates" />
	<meta property="og:description" content="kayip Directory & Listings HTML templates" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

	<!-- PAGE TITLE HERE -->
	<title>Kayip</title>

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/plugins.min.css">
	<link rel="stylesheet" type="text/css" href="plugins/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="plugins/line-awesome/css/line-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="plugins/flaticon/flaticon.css">
	<link rel="stylesheet" type="text/css" href="plugins/flaticon/font/flaticon.css">
	<link rel="stylesheet" type="text/css" href="plugins/themify/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="plugins/simple-icon/css/simple-line-icons.css">
	<link rel="stylesheet" type="text/css" href="css/style.min.css">
	<link rel="stylesheet" type="text/css" href="css/templete.min.css">
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">

	<!-- Google Font -->
	<style>
		@import url('https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|PT+Serif:400,400i,700,700i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Slab:100,300,400,700|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Rubik:300,300i,400,400i,500,500i,700,700i,900,900i');
	</style>

</head>

<body id="bg">
	<div id="loading-area"></div>
	<div class="page-wraper">
		<!-- header -->
		<?php require_once './navbar.php'; ?>
		<!-- header END -->
		<!-- Content -->
		<div class="page-content bg-white">
			<!-- Section Banner -->
			<div class="dlab-bnr-inr dlab-bnr-inr-md" style="background-image:url(images/main-slider/bg8.jpg); background-size: cover;">
				<div class="container">
					<div class="dlab-bnr-inr-entry align-m dlab-home">
						<div class="bnr-content">
							<h2><strong>Recherchez & retrouvez</strong> Vos objets perdus</h2>
						</div>
						<br>
						<div class="dlab-tabs search-filter">
							<!-- <ul class="nav nav-tabs">
							<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#place">
								<i class="fa fa-map-marker"></i> <span class="title-head">Place</span></a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#party">
								<i class="fa fa-music"></i> <span class="title-head">Party</span></a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#restauren">
								<i class="fa fa-glass"></i> <span class="title-head">Restauren</span></a></li>
						</ul> -->
							<div class="tab-content">
								<div id="place" class="tab-pane active">
									<form method="POST" action="./galerie.php">
										<div class="input-group">
											<div class="row col-md-9">
												<select class="form-select col-md-4" name="id_type_objet" id="" required>
													<option selected disabled><?= isset($obj_t_nano->id_type_objet) ? $obj_t_nano->id_type_objet : ''; ?>Quel type de document avez-vous perdu???</option>
													<?php foreach ($TypeObjects as $to) : ?>
														<option name="" value="<?= isset($to->id) ? $to->id : '' ?>"><?= $to->nom_objet ?></option>
													<?php endforeach; ?>
												</select>
												<select class="form-select col-md-3" name="ville" id="" required>
													<option selected disabled><?= isset($obj_t_nano->id_type_objet) ? $obj_t_nano->id_type_objet : ''; ?>Dans quelle ville avez-vous perdu???</option>
													<?php foreach (getAllObjectByTowns($allObjects) as $to) : ?>
														<option value="<?= $to ?>"><?= $to ?></option>
													<?php endforeach; ?>
												</select>
											</div>
											<div class="input-group-prepend col-md-3">
												<button type="submit" class="site-button text-uppercase" style="color: white;"><i class="fa m-r5 fa-search"></i> Rechercher</button>
											</div>
										</div>
									</form>
								</div>

							</div>
							<!-- <p class="text-center text-white m-b10 m-t30">Find awesome places, bars, restaurants & activities.</p> -->
						</div>

					</div>
				</div>
			</div>
			<!-- Section Banner END -->
			<!-- Search Filter -->
			<div class="section-full">
				<div class="container">

				</div>
			</div>
			<!-- Search Filter END -->
			<div class="content-block">
				<!-- Featured Destinations -->
				<div class="section-full bg-white content-inner">
					<div class="container">
						<div class="section-head text-black text-center">

							<h2 class="box-title">VOUS AVEZ PERDU VOS CL??S /OBJETS ?</h2>
							<div class="dlab-separator bg-primary"></div>
							<p>Toutes les photos de cl??s que nous recevons sont syst??matiquement enregistr??es dans la galerie photo des objets. Vous pouvez ??galement vous rendre a la page des <a href="./galerie.php" style="color: #4611A7;">objets perdus</a> pour les identifier.
								N???oubliez pas de faire une d??claration de perte et donnez le plus d'informations possible sur l'objet perdu.
							</p>
						</div>
						<div class="section-head text-black text-center">

							<h2 class="box-title">VOTRE OBJET A ??T?? TROUV??</h2>
							<div class="dlab-separator bg-primary"></div>
							<p>Lorsque la photo d'un objet est d??pos??e sur notre plateforme, nous faisons notre possible pour trouver son propri??taire et prendre contact avec lui.
								Une recherche automatique est faite entre objets perdus et trouv??s.</p>
						</div>
						<div class="section-head text-black text-center">
							<h1 class="box-title">VOUS AVEZ TROUV?? UN OBJET</h1>
							<div class="dlab-separator bg-primary"></div>
							<p>Vous devez vous enregistrer a travers un des deux formulaires; <a href="./objets_trouvesNA.php" style="color: blue;">cliquez ici</a>
								En laissant vos coordonn??es. Vous devennez inventeur de l???objet.</p>
						</div>
					</div>
				</div>
				<!-- Featured Destinations End -->
				<!-- Our Services -->
				<div class="section-full bg-gray content-inner about-us">
					<div class="container-fluid">
						<div class="section-head text-black text-center">
							<h2 class="box-title">VOUS VENEZ PERSONNELLEMENT R??CUP??RER VOTRE OBJET</h2>
							<div class="dlab-separator bg-primary"></div>
							<p>Munissez-vous d'une pi??ce d'identit?? <br>

								nous avons besoin d???une preuve de la propri??t?? pour :
								<br><br>
								<span class="ti-control-forward"> Documents et dipl??mes</span>
								<br>
								<span class="ti-control-forward"> Pi??ces d'identit??s</span>
							</p>
						</div>
					</div>
				</div>
				<!-- Our Services -->
				<!-- Why Choose Us -->
				<div class="section-full bg-img-fix most-visited content-inner overlay-primary-dark" style="background-image:url(images/background/bg3.jpg);">
					<div class="container">
						<div class="section-head text-white text-center">
							<h2 class="box-title">La Vision de notre plateforme</h2>
							<div class="dlab-separator bg-white"></div>
							<p>la vision de notre plateforme est essentiellement orient??e sous trois axes</p>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-4">
								<div class="icon-bx-wraper sr-box center box1 m-b30">
									<div class="icon-bx-lg radius bg-white m-b20"><a href="javascript:void(0)" class="icon-cell text-primary"><i class="ti-cloud-up"></i></a></div>
									<div class="icon-content">
										<h3 class="dlab-tilte">Repertoriez tous les obj??ts perdus</h3>
										<p>A travers notre plateforme, vous pouvez repertorier tout type d'objets trouv??s...<br><br></p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4">
								<div class="icon-bx-wraper sr-box center  m-b30">
									<div class="icon-bx-lg radius bg-white m-b20"><a href="javascript:void(0)" class="icon-cell text-primary"><i class="ti-search"></i></a> </div>
									<div class="icon-content">
										<h3 class="dlab-tilte">La recherche</h3>
										<p>vous avez la possibilit?? d'??ffectuer une recherche concernant l'obj??t que vous avez perdu <br><br></p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4">
								<div class="icon-bx-wraper sr-box center box1 m-b30">
									<div class="icon-bx-lg radius bg-white m-b20"><a href="javascript:void(0)" class="icon-cell text-primary"><i class="ti-user"></i></a> </div>
									<div class="icon-content">
										<h3 class="dlab-tilte">Recup??rez vos objets perdus</h3>
										<p>Apr??s avoir prouv?? que l'obj??t en question est le votre, vous pourez entrer en possession ?? trav??rs le d??positaire...</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Why Chose Us End -->
				<!-- Our Portfolio -->

				<!-- Our Portfolio END -->
				<!-- Featured Destinations -->

				<!-- Featured Destinations End -->
			</div>
			<!-- contact area END -->
		</div>
		<!-- Content END-->
		<!-- Footer -->
		<?php require_once "./footer.php"; ?>
		<!-- Footer END-->
		<button class="scroltop fa fa-chevron-up"></button>
	</div>
	<!-- JAVASCRIPT FILES ========================================= -->
	<script src="./js/customIndex.js" defer></script>
	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="js/combining.js"></script><!-- CONTACT JS  -->
	<script src="js/dz.carousel.min.js"></script><!-- CONTACT JS  -->
</body>

<!-- Mirrored from bizmap.dexignzone.com/xhtml/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jun 2022 11:27:25 GMT -->

</html>