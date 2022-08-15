<?php require_once './backend/controllers.php';
session_start();
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

			<div class="content-block">

				<div class="section-full bg-white content-inner">
					<div class="container">
						<div class="section-head text-black text-center">
							<h2 class="box-title">Bienvenue dans la galerie d'images</h2>
							<div class="dlab-separator bg-primary"></div>
							<p>Ces images representent la pluspart des objets trouvés dans différentes villes. Vous trouverez les informations y afférant en cliquant sur la description de l'image. </p>
						</div>
						<div class="blog-carousel owl-carousel owl-none blog-shadow-out">
							<?php foreach ($allObjects as $obj) : ?>
								<div class="item">
									<div class="blog-post dez-blog">
										<div class="dlab-post-media">
											<a href="blog-details.php"><img src="uploads/<?= $obj->photo; ?>" alt="<?= isset($obj->nom_sur_objet) ? $obj->nom_sur_objet : 'image objet' ?>" /></a>
										</div>
										<div class="dlab-info">
											<div class="category-tag">

												<span id=" <?= isset($obj->id_type_objet) ? $obj->id_type_objet : '' ?>">
													Type: <?= (getOneTypeObjet($obj->id_type_objet)) ? getOneTypeObjet($obj->id_type_objet)->nom_objet : '' ?>
												</span>

												<a href="blog-details.php">Plus d'info...</a>
											</div>
											<div class="dlab-post-title ">
												<h5 class="post-title"><a href="blog-details.php">Nom sur l'objèt: <?= isset($obj->nom_sur_objet) ? $obj->nom_sur_objet : '' ?></a></h5>
											</div>

											<div class="dlab-post-meta">
												<ul>
													<li class="post-author"><i class="icon-location-pin"></i> <a href="blog-details.php">Ville: <?= isset($obj->ville) ? $obj->ville : 'Default' ?></a> </li>
													<li class="post-comment"><i class="icon-direction"></i> <a href="blog-details.php">Quartier: <?= isset($obj->quartier) ? $obj->quartier : 'Default' ?></a> </li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach; ?>

						</div>
					</div>
				</div>
			</div>

			<!-- Featured Destinations End -->
		</div>
		<!-- contact area END -->
		<div class="section-head text-black text-center">
			<h2 class="box-title">Votre objet n'as pas été repertorié?</h2>
			<div class="dlab-separator bg-primary"></div>
			<p>Dans la mesure ou votre objet n'as pas été repertorié dans la galerie des objets, veuillez consulter la plateforme de temps a autre pour savoir si votre objèt a été posté </p>
		</div>

	</div>
	<!-- Content END-->
	<!-- Footer -->
	<?php require_once "./footer.php"; ?>
	<!-- Footer END-->
	<button class="scroltop fa fa-chevron-up"></button>
	</div>
	<!-- JAVASCRIPT FILES ========================================= -->
	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="js/combining.js"></script><!-- CONTACT JS  -->
	<script src="js/dz.carousel.min.js"></script><!-- CONTACT JS  -->
</body>

<!-- Mirrored from bizmap.dexignzone.com/xhtml/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jun 2022 11:27:25 GMT -->

</html>