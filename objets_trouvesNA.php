<?php require_once "./backend/controllers.php"; ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bizmap.dexignzone.com/xhtml/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jun 2022 11:28:36 GMT -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="BizMap Directory & Listings HTML templates" />
	<meta property="og:title" content="BizMap Directory & Listings HTML templates" />
	<meta property="og:description" content="BizMap Directory & Listings HTML templates" />
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
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-3.css">

	<!-- Google Font -->
	<style>
		@import url('https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|PT+Serif:400,400i,700,700i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Slab:100,300,400,700|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Rubik:300,300i,400,400i,500,500i,700,700i,900,900i');
	</style>

</head>

<body id="bg">
	<div id="loading-area"></div>
	<div class="page-wraper font-roboto">
		<!-- header -->
		<?php require_once "./navbar.php"; ?>
		<!-- header END -->
		<!-- Content -->
		<div class="page-content bg-white">
			<!-- Section Banner -->
			<div class="col-lg-12 mb-4 mb-md-0"><br>
				<div>
					<div>
						<div>
							<div class="clearfix contact-form m-b30">
								<div class="section-head mt-5 text-black">
									<h2 class="box-title">Bienvenue chèrs Utilsateurs</h2>
									<div class="dlab-separator bg-primary"></div>
									<p>Cette rubrique vous permet de poster les objets que vous avez trouver, pour completer la requette, veuillez remplir correctement les champs ci-dessous.</p>
								</div>
								<div class="dzFormMsg"></div>
								<form method="POST" class="dzForm" action="#" enctype="multipart/form-data">
									<input type="hidden" name="action" value="<?= $form_action ?>">
									<input type="hidden" name="id" value="<?= isset($obj_t_nano->id) ? $obj_t_nano->id : ''; ?>">
									<!-- <input type="hidden" value="Contact" name="dzToDo" > -->
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<input name="nom_nano" type="text" required class="form-control" placeholder="Votre Nom">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<input name="prenom_nano" type="text" class="form-control" required placeholder="Votre Prenom">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<input name="numero_nano" type="tel" required class="form-control" placeholder="Votre Contact">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<input type="text" name="ville" required class="form-control" placeholder="Ville ou vous avez trouver l'objet">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<input type="text" name="quartier" required class="form-control" placeholder="Quartier ou vous avez trouver l'objet">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<input type="text" name="nom_sur_objet" required class="form-control" placeholder="Nom inscrit sur l'objet">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<input name="date_trouv" type="date" required class="form-control" pattern="yyyy-mm-dd">
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<div class="input-group">
													<input type="file" name="file" required class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<div class="input-group">
													<select class="form-select" name="id_type_objet" id="" value="<?= isset($obj_t_nano->id_type_objet) ? $obj_t_nano->id_type_objet : ''; ?>" required>
														<option><?= isset($obj_t_nano->id_type_objet) ? $obj_t_nano->id_type_objet : 'Choose...'; ?></option>
														<?php foreach ($TypeObjects as $to) : ?>
															<option name="" value="<?= isset($to->id) ? $to->id : '' ?>"><?= $to->nom_objet ?></option>
														<?php endforeach; ?>
													</select>
												</div>
											</div>
										</div>

										<!-- <div class="col-md-12">
											<div class="recaptcha-bx">
												<div class="input-group">
													<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
													<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
												</div>
											</div>
										</div> -->
										<div class="col-md-12">
											<button type="submit" class="site-button button-lg radius-xl" id="submit-button">POSTER MAINTENANT</button>

											<!-- <button type="submit" class="site-button">Poster</button> -->
										</div>
									</div>
								</form>
							</div>
						</div>


					</div>
				</div>
			</div>
			<!-- Section Banner END -->
			<div class="content-block" id="page_content">

				<div class="section-full bg-img-fix most-visited content-inner overlay-primary-dark" style="background-image:url(images/background/bg4.jpg);">
					<div class="container">
						<div class="section-head text-white text-center">
							<h2 class="box-title">La Vision de notre plateforme</h2>
							<div class="dlab-separator bg-white"></div>
							<p>la vision de notre plateforme est essentiellement orientée sous trois axes</p>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-4">
								<div class="icon-bx-wraper sr-box center box1 m-b30">
									<div class="icon-bx-lg radius bg-white m-b20"><a href="javascript:void(0)" class="icon-cell text-primary"><i class="ti-cloud-up"></i></a> </div>
									<div class="icon-content">
										<h3 class="dlab-tilte">Repertoriez tous les objèts perdus</h3>
										<p>A travèrs notre plateforme, vous pouvez repertorier tout type d'objèts trouvés...<br><br></p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4">
								<div class="icon-bx-wraper sr-box center  m-b30">
									<div class="icon-bx-lg radius bg-white m-b20"><a href="javascript:void(0)" class="icon-cell text-primary"><i class="ti-search"></i></a> </div>
									<div class="icon-content">
										<h3 class="dlab-tilte">La recherche</h3>
										<p>vous avez la possibilité d'éffectuer une recherche concernant l'objèt que vous avez perdu <br><br></p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4">
								<div class="icon-bx-wraper sr-box center box1 m-b30">
									<div class="icon-bx-lg radius bg-white m-b20"><a href="javascript:void(0)" class="icon-cell text-primary"><i class="ti-user"></i></a> </div>
									<div class="icon-content">
										<h3 class="dlab-tilte">Recupérez vos objèts perdus</h3>
										<p>Après avoir prouvé que l'objèt en question est le votre, vous pourez entrer en possession de votre du à travèrs le dépositaire...</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

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
	<script src="js/combining.js"></script><!-- CONTACT JS  -->
	<script src="js/dz.carousel.min.js"></script><!-- CONTACT JS  -->
</body>

<!-- Mirrored from bizmap.dexignzone.com/xhtml/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jun 2022 11:28:49 GMT -->

</html>