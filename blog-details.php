<?php require_once './backend/controllers.php';
$singleObj = getOneObjet($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bizmap.dexignzone.com/xhtml/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jun 2022 11:29:15 GMT -->

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
	<title>Details</title>

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
		<header class="site-header header-transparent mo-left">
			<?php require_once './navbar.php'; ?>
		</header>
		<!-- header END -->
		<!-- Content -->
		<div class="page-content bg-white">
			<!-- inner page banner -->
			<!-- inner page banner END -->
			<div class="section-full content-inner">
				<div class="container">
					<div class="row">
						<!-- Left part start -->
						<div class="col-lg-12 col-xl-12 p-b30">
							<!-- blog start -->
							<div class="blog-post blog-single">
								<div class="dlab-post-title ">
									<h2 class="post-title m-t0">
										<a href="javascript:void(0);">Informations complètes sur l'objèt</a>
									</h2>
								</div>
								<div class="dlab-post-text">
									<blockquote>
										<p>Toute donnée concernant l'objèt trouvé est repertorier tel que inscrit dans notre base de donnée, vous pouvez contacter les personnes mentionnées pour entrer en possession de vos objet précédement égarés</p>
									</blockquote>
									<div class="dlab-post-media m-b50" style="display: flex;flex-direction:row; justify-content:space-around;height:600px;width:1200px;box-shadow:0px 2px 3px 4px gray; padding-top:35px;border-radius:15px;">
										<img src="uploads/<?= $singleObj->photo; ?>" style="height: 500px; width:520px;border-radius:15px;box-shadow:0px 2px 3px 4px lightgray; ">
										<div style="padding-top:20vh;">
											<ul>
												<li>Nom du publicateur: <?= getOnePersonTnano($singleObj->id_person)->nom_nano ?></li>
												<li>Prenom du publicateur: <?= getOnePersonTnano($singleObj->id_person)->prenom_nano ?></li>
												<li>Numero du publicateur: +237<?= getOnePersonTnano($singleObj->id_person)->numero_nano ?></li>
												<li>Date a laquelle l'objèt a ete trouvé: <?= $singleObj->date_trouv; ?></li>
												<li>Nom sur l'objèt: <?= $singleObj->nom_sur_objet;  ?></li>
												<li>Quartier: <?= $singleObj->quartier; ?></li>
												<li>Ville: <?= $singleObj->ville; ?></li>
												<li>Type: <?= getOneTypeObjet($singleObj->id_type_objet)->nom_objet; ?></li>
											</ul>
										</div>


									</div>

								</div>

							</div>

							<!-- Author Profile END -->
							<!-- blog END -->
						</div>
						<!-- Left part END -->
						<!-- Side bar start -->
						<!-- Side bar END -->
					</div>
				</div>
			</div>
		</div>
		<!-- Content END-->
		<!-- Footer -->
		<footer class="site-footer">
			<?php require_once './footer.php'; ?>
		</footer>
		<!-- Footer END-->
		<button class="scroltop fa fa-chevron-up"></button>
	</div>
	<!-- JAVASCRIPT FILES ========================================= -->
	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="js/combining.js"></script><!-- CONTACT JS  -->
	<script src="js/dz.carousel.min.js"></script><!-- CONTACT JS  -->

</body>

<!-- Mirrored from bizmap.dexignzone.com/xhtml/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jun 2022 11:29:16 GMT -->

</html>