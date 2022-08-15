<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bizmap.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jun 2022 11:27:56 GMT -->

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
    <!-- < class="page-wraper"> -->
        <!-- header -->
        <?php require_once "./navbar.php";  ?>
        <!-- header END -->
        <!-- Content -->
        <div class="page-content bg-white">
            <!-- Section Banner -->
            <div class="col-lg-12 mb-4 mb-md-0"><br>
                        <div class="clearfix contact-form m-b30">
							<div class="section-head mt-5 text-black">
								<h2 class="box-title">Bienvenue, déclarez la perte de vos objets.</h2>
								<div class="dlab-separator bg-primary"></div>
								<p>Cette rubrique vous permet de poster des objets de façcon Anonyme en entrent le plus d'informations possibles sur l'objet .</p>
							</div>
							<div class="dzFormMsg"></div>
							<form method="post" class="dzForm" action="https://bizmap.dexignzone.com/xhtml/script/contact.php">
								<input type="hidden" value="Contact" name="dzToDo" >
                                <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="nom_person_p" type="text" required class="form-control" placeholder="Votre Nom">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="prenom_person_p" type="text" required class="form-control" placeholder="Votre Prenom">
                                            </div>
                                        </div>
                                    </div>         
									<div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="numero_p" type="text" required class="form-control" placeholder="votre numero">
                                            </div>
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="date_p" type="date" required class="form-control" >
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="cni" type="text"  class="form-control" placeholder="votre numero de CNI">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <select name="quartier" id="quartier" class="col-md-12">
                                                    <option value="" selected disabled default>selectionner le quartier où vous avez perdu votre objèt...</option>
                                                    <option value="q1">Quartier1</option>
                                                    <option value="q2">Quartier2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <select name="ville" id="ville" class="col-md-12">
                                                    <option value="" selected disabled default>selectionner la ville ou votre objèt a été perdu...</option>
                                                    <option value="v1">ville1</option>
                                                    <option value="v2">ville2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <select name="nom_objet" id="nom_objet" class="col-md-12">
                                                    <option value="" selected disabled default>selectionner le type d'objet...</option>
                                                    <option value="1">Document</option>
                                                    <option value="2">Trousseaux de clés</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                     
									<div class="col-md-12">
										<div class="recaptcha-bx">
											<div class="input-group">
												<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
												<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
											</div>
										</div>
									</div>
                                    <div class="col-md-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button button-lg radius-xl">POSTER MAINTENANT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="content-block">
                <!-- Featured Destinations -->
                <div class="section-full bg-white content-inner">
                    <div class="container">
                        <div class="section-head text-black text-center">

                            <h2 class="box-title">VOUS AVEZ PERDU VOS CLÉS ?</h2>
                            <div class="dlab-separator bg-primary"></div>
                            <p>
                                    Toutes les photos de clés que nous recevons sont systématiquement enregistrées dans la galerie photo. Vous pouvez également vous rendre a la page des <a href="./objets_perdus.php" style="color: #4611A7;">objèts perdus</a> pour les identifier 
                                    N’oubliez pas de faire une déclaration de perte et décrivez-y votre trousseau le plus fidèlement possible.</p>
                        </div>
                        <div class="section-head text-black text-center">

                            <h2 class="box-title">VOTRE OBJET A ÉTÉ TROUVÉ</h2>
                            <div class="dlab-separator bg-primary"></div>
                            <p>
                                    Lorsque la photo d'un objet est déposée sur notre plateforme, nous faisons notre possible pour trouver son propriétaire et prendre contact avec lui.
                                    Une recherche automatique est faite entre objets perdus et trouvés.</p>
                        </div>
                        <!-- <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="featured-bx m-b30">
                                    <div class="featured-media">
                                        <img src="images/destinations/pic2.jpg" alt="" />
                                    </div>
                                    <div class="featured-info">
                                        <ul class="featured-star">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <h5 class="title"><a href="listing-details.html">London</a></h5>
                                        <ul class="featured-category">
                                            <li><i class="fa fa-moon-o"></i> 12 Cities</li>
                                            <li><i class="fa fa-map-o"></i> 30+ Listing</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="featured-bx m-b30">
                                    <div class="featured-media">
                                        <img src="images/destinations/pic3.jpg" alt="" />
                                    </div>
                                    <div class="featured-info">
                                        <ul class="featured-star">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <h5 class="title"><a href="listing-details.html">United States</a></h5>
                                        <ul class="featured-category">
                                            <li><i class="fa fa-moon-o"></i> 12 Cities</li>
                                            <li><i class="fa fa-map-o"></i> 30+ Listing</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="featured-bx m-b30">
                                    <div class="featured-media">
                                        <img src="images/destinations/pic4.jpg" alt="" />
                                    </div>
                                    <div class="featured-info">
                                        <ul class="featured-star">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <h5 class="title"><a href="listing-details.html">Korea</a></h5>
                                        <ul class="featured-category">
                                            <li><i class="fa fa-moon-o"></i> 12 Cities</li>
                                            <li><i class="fa fa-map-o"></i> 30+ Listing</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="featured-bx m-b30">
                                    <div class="featured-media">
                                        <img src="images/destinations/pic5.jpg" alt="" />
                                    </div>
                                    <div class="featured-info">
                                        <ul class="featured-star">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <h5 class="title"><a href="listing-details.html">Japan</a></h5>
                                        <ul class="featured-category">
                                            <li><i class="fa fa-moon-o"></i> 12 Cities</li>
                                            <li><i class="fa fa-map-o"></i> 30+ Listing</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- Featured Destinations End -->
                <!-- Our Services -->
                <!-- <div class="section-full bg-gray content-inner about-us">
                    <div class="container-fluid">
                        <div class="section-head text-black text-center">
                            <h2 class="box-title">Top Trending Places</h2>
                            <div class="dlab-separator bg-primary"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                        </div>
                        <div class="most-visite owl-carousel owl-btn-center-lr owl-btn-1 primary">
                            <div class="item">
                                <div class="listing-bx featured-star-left m-b30">
                                    <div class="listing-media">
                                        <img src="images/listing/pic1.jpg" alt="">
                                        <ul class="featured-star">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="listing-info">
                                        <h3 class="title"><a href="listing-details.html">King Organic Shop</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm.</p>
                                        <ul class="place-info">
                                            <li class="place-location"><i class="fa fa-map-marker"></i>12/a, New</li>
                                            <li class="open"><i class="fa fa-check"></i>Open Now</li>
                                        </ul>
                                    </div>
                                    <ul class="wish-bx">
                                        <li><a class="like-btn" href="javascript:void(0)"><i class="fa fa-heart"></i></a></li>
                                        <li><a class="info-btn" href="javascript:void(0)"><i class="fa fa-leaf"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="listing-bx featured-star-left m-b30">
                                    <div class="listing-media">
                                        <img src="images/listing/pic2.jpg" alt="">
                                        <ul class="featured-star">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="listing-info">
                                        <h3 class="title"><a href="listing-details.html">Dorado Health Care</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm.</p>
                                        <ul class="place-info">
                                            <li class="place-location"><i class="fa fa-map-marker"></i>12/a, New</li>
                                            <li class="open"><i class="fa fa-check"></i>Open Now</li>
                                        </ul>
                                    </div>
                                    <ul class="wish-bx">
                                        <li><a class="like-btn" href="javascript:void(0)"><i class="fa fa-heart"></i></a></li>
                                        <li><a class="info-btn" href="javascript:void(0)"><i class="fa fa-leaf"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="listing-bx featured-star-left m-b30">
                                    <div class="listing-media">
                                        <img src="images/listing/pic3.jpg" alt="">
                                        <ul class="featured-star">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="listing-info">
                                        <h3 class="title"><a href="listing-details.html">Tam Farfhume Shop</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm.</p>
                                        <ul class="place-info">
                                            <li class="place-location"><i class="fa fa-map-marker"></i>12/a, New</li>
                                            <li class="open"><i class="fa fa-check"></i>Open Now</li>
                                        </ul>
                                    </div>
                                    <ul class="wish-bx">
                                        <li><a class="like-btn" href="javascript:void(0)"><i class="fa fa-heart"></i></a></li>
                                        <li><a class="info-btn" href="javascript:void(0)"><i class="fa fa-leaf"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="listing-bx featured-star-left m-b30">
                                    <div class="listing-media">
                                        <img src="images/listing/pic4.jpg" alt="">
                                        <ul class="featured-star">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="listing-info">
                                        <h3 class="title"><a href="listing-details.html">King Organic Shop</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm.</p>
                                        <ul class="place-info">
                                            <li class="place-location"><i class="fa fa-map-marker"></i>12/a, New</li>
                                            <li class="open"><i class="fa fa-check"></i>Open Now</li>
                                        </ul>
                                    </div>
                                    <ul class="wish-bx">
                                        <li><a class="like-btn" href="javascript:void(0)"><i class="fa fa-heart"></i></a></li>
                                        <li><a class="info-btn" href="javascript:void(0)"><i class="fa fa-leaf"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="listing-bx featured-star-left m-b30">
                                    <div class="listing-media">
                                        <img src="images/listing/pic5.jpg" alt="">
                                        <ul class="featured-star">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="listing-info">
                                        <h3 class="title"><a href="listing-details.html">Venzil Hingo Zoo</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm.</p>
                                        <ul class="place-info">
                                            <li class="place-location"><i class="fa fa-map-marker"></i>12/a, New</li>
                                            <li class="open"><i class="fa fa-check"></i>Open Now</li>
                                        </ul>
                                    </div>
                                    <ul class="wish-bx">
                                        <li><a class="like-btn" href="javascript:void(0)"><i class="fa fa-heart"></i></a></li>
                                        <li><a class="info-btn" href="javascript:void(0)"><i class="fa fa-leaf"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="listing-bx featured-star-left m-b30">
                                    <div class="listing-media">
                                        <img src="images/listing/pic6.jpg" alt="">
                                        <ul class="featured-star">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="listing-info">
                                        <h3 class="title"><a href="listing-details.html">KFC Pijja Shop</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm.</p>
                                        <ul class="place-info">
                                            <li class="place-location"><i class="fa fa-map-marker"></i>12/a, New</li>
                                            <li class="open"><i class="fa fa-check"></i>Open Now</li>
                                        </ul>
                                    </div>
                                    <ul class="wish-bx">
                                        <li><a class="like-btn" href="javascript:void(0)"><i class="fa fa-heart"></i></a></li>
                                        <li><a class="info-btn" href="javascript:void(0)"><i class="fa fa-leaf"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Our Services -->
                <!-- Why Choose Us -->
                <!-- <div class="section-full bg-img-fix most-visited content-inner overlay-primary-dark" style="background-image:url(images/background/bg1.jpg);">
                    <div class="container">
                        <div class="section-head text-white text-center">
                            <h2 class="box-title">How It Works?</h2>
                            <div class="dlab-separator bg-white"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="icon-bx-wraper sr-box center box1 m-b30">
                                    <div class="icon-bx-lg radius bg-white m-b20"><a href="javascript:void(0)" class="icon-cell text-primary"><i class="ti-search"></i></a> </div>
                                    <div class="icon-content">
                                        <h3 class="dlab-tilte">Choose What To Do?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="icon-bx-wraper sr-box center  m-b30">
                                    <div class="icon-bx-lg radius bg-white m-b20"><a href="javascript:void(0)" class="icon-cell text-primary"><i class="ti-gift"></i></a> </div>
                                    <div class="icon-content">
                                        <h3 class="dlab-tilte">Find What Your Want?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="icon-bx-wraper sr-box center box1 m-b30">
                                    <div class="icon-bx-lg radius bg-white m-b20"><a href="javascript:void(0)" class="icon-cell text-primary"><i class="ti-rocket"></i></a> </div>
                                    <div class="icon-content">
                                        <h3 class="dlab-tilte">Explore Amazing Places</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Why Chose Us End -->
                <!-- Our Portfolio -->
                <!-- <div class="section-full content-inner bg-gray">
                    <div class="container">
                        <div class="section-head text-center">
                            <h2 class="box-title">What Our Users Say</h2>
                            <div class="dlab-separator bg-primary"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div id="owl-demo" class="testimonial-one owl-loaded owl-theme owl-carousel owl-btn-center-lr owl-btn-3 owl-dots-primary-big">
                                        <div class="item">
                                            <div class="client-box">
                                                <div class="client-detail">
                                                    <div class="client-img">
                                                        <img src="images/testimonials/pic1.jpg" width="100" height="100" alt="">
                                                    </div>
                                                    <div class="client-info">
                                                        <h5 class="client-name">Diamond Anderson</h5>
                                                        <span>Founder, uihub inc.</span>
                                                    </div>
                                                </div>
                                                <div class="client-info-bx">
                                                    <h5>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. </h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="client-box">
                                                <div class="client-detail">
                                                    <div class="client-img">
                                                        <img src="images/testimonials/pic2.jpg" width="100" height="100" alt="">
                                                    </div>
                                                    <div class="client-info">
                                                        <h5 class="client-name">Diamond Anderson</h5>
                                                        <span>Founder, uihub inc.</span>
                                                    </div>
                                                </div>
                                                <div class="client-info-bx">
                                                    <h5>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. </h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="client-box">
                                                <div class="client-detail">
                                                    <div class="client-img">
                                                        <img src="images/testimonials/pic3.jpg" width="100" height="100" alt="">
                                                    </div>
                                                    <div class="client-info">
                                                        <h5 class="client-name">Diamond Anderson</h5>
                                                        <span>Founder, uihub inc.</span>
                                                    </div>
                                                </div>
                                                <div class="client-info-bx">
                                                    <h5>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. </h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Our Portfolio END -->
                <!-- Featured Destinations -->
                <!-- <div class="section-full bg-white content-inner">
                    <div class="container">
                        <div class="section-head text-black text-center">
                            <h2 class="box-title">From The Blog</h2>
                            <div class="dlab-separator bg-primary"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                        </div>
                        <div class="blog-carousel owl-carousel owl-none blog-shadow-out">
                            <div class="item">
                                <div class="blog-post dez-blog">
                                    <div class="dlab-post-media">
                                        <a href="blog-details.html"><img src="images/blog/grid/pic1.jpg" alt="" /></a>
                                    </div>
                                    <div class="dlab-info">
                                        <div class="category-tag">
                                            <a href="blog-details.html">Tarvel</a>
                                        </div>
                                        <div class="dlab-post-title ">
                                            <h5 class="post-title"><a href="blog-details.html">7 Moments To Remember From Directory.</a></h5>
                                        </div>
                                        <div class="dlab-post-text">
                                            <p>Achieving only 1 out of the 4 (traffic, opt-in, conversion, email) doesn’t do much help either.</p>
                                        </div>
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-author"><i class="icon-user"></i>By <a href="blog-details.html">John Doe</a> </li>
                                                <li class="post-comment"><i class="icon-speech"></i> <a href="blog-details.html">12 Comments</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog-post dez-blog">
                                    <div class="dlab-post-media">
                                        <a href="blog-details.html"><img src="images/blog/grid/pic3.jpg" alt="" /></a>
                                    </div>
                                    <div class="dlab-info">
                                        <div class="category-tag">
                                            <a href="blog-details.html">Foods</a>
                                        </div>
                                        <div class="dlab-post-title ">
                                            <h5 class="post-title"><a href="blog-details.html">Directory Will Be A Thing Of The Past.</a></h5>
                                        </div>
                                        <div class="dlab-post-text">
                                            <p>Knowing that, you’ve optimised your pages countless amount of times, written tons of eye catching.</p>
                                        </div>
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-author"><i class="icon-user"></i>By <a href="blog-details.html">Rosalina</a> </li>
                                                <li class="post-comment"><i class="icon-speech"></i> <a href="blog-details.html">08 Comments</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog-post dez-blog">
                                    <div class="dlab-post-media">
                                        <a href="blog-details.html"><img src="images/blog/grid/pic2.jpg" alt="" /></a>
                                    </div>
                                    <div class="dlab-info">
                                        <div class="category-tag">
                                            <a href="blog-details.html">Hotel</a>
                                        </div>
                                        <div class="dlab-post-title ">
                                            <h5 class="post-title"><a href="blog-details.html">Ten Things Your Competitors Know About.</a></h5>
                                        </div>
                                        <div class="dlab-post-text">
                                            <p>As desperate as you are right now, you have done everything you can on your website to say.</p>
                                        </div>
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-author"><i class="icon-user"></i>By <a href="blog-details.html">John Smith</a> </li>
                                                <li class="post-comment"><i class="icon-speech"></i> <a href="blog-details.html">03 Comments</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Featured Destinations End -->
            </div>
            <!-- Featured Destinations -->
            <!-- <div class="section-full bg-white content-inner-2">
                <div class="container-fluid">
					<div class="section-head text-black text-center">
						<h2 class="box-title">Popular Cities</h2>
						<div class="dlab-separator bg-primary"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
					</div>
                    <div class="row m-lr0 featured-style2-area">
						<div class="col-lg-4 col-md-12 p-lr0">
							<div class="row m-lr0">
								<div class="col-lg-12 col-md-4 col-sm-12 p-lr0">
									<div class="featured-bx style2">
										<div class="featured-media">
											<img src="images/featured/pic1.jpg" alt="">
											<div class="featured-type featured-top">
												TOP <br>FEATURED
                                            </div>
										</div>
										<div class="featured-content text-white">
											<h2 class="title"><a href="#">London</a></h2>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-4 col-sm-6 p-lr0">
									<div class="featured-bx style2">
										<div class="featured-media">
											<img src="images/featured/pic2.jpg" alt="">
										</div>
										<div class="featured-content text-white">
											<h2 class="title"><a href="#">United States</a></h2>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-4 col-sm-6 p-lr0">
									<div class="featured-bx style2">
										<div class="featured-media">
											<img src="images/featured/pic3.jpg" alt="">
										</div>
										<div class="featured-content text-white">
											<h2 class="title"><a href="#">Korea</a></h2>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 p-lr0">
							<div class="row m-lr0">
								<div class="col-lg-6 col-md-4 col-sm-6 p-lr0">
									<div class="featured-bx style2">
										<div class="featured-media">
											<img src="images/featured/pic4.jpg" alt="">
										</div>
										<div class="featured-content text-white">
											<h2 class="title"><a href="#">Japan</a></h2>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-4 col-sm-6 p-lr0">
									<div class="featured-bx style2">
										<div class="featured-media">
											<img src="images/featured/pic5.jpg" alt="">
										</div>
										<div class="featured-content text-white">
											<h2 class="title"><a href="#">United States</a></h2>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-4 col-sm-12 p-lr0">
									<div class="featured-bx style2">
										<div class="featured-media">
											<img src="images/featured/pic6.jpg" alt="">
											<div class="featured-type featured-trading">
												<i class="fa fa-bolt"></i>
                                            </div>
										</div>
										<div class="featured-content text-white">
											<h2 class="title"><a href="#">London</a></h2>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 p-lr0">
							<div class="row m-lr0">
								<div class="col-lg-12 col-md-4 col-sm-12 p-lr0">
									<div class="featured-bx style2">
										<div class="featured-media">
											<img src="images/featured/pic7.jpg" alt="">
										</div>
										<div class="featured-content text-white">
											<h2 class="title"><a href="#">London</a></h2>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-4 col-sm-6 p-lr0">
									<div class="featured-bx style2">
										<div class="featured-media">
											<img src="images/featured/pic8.jpg" alt="">
										</div>
										<div class="featured-content text-white">
											<h2 class="title"><a href="#">United States</a></h2>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-4 col-sm-6 p-lr0">
									<div class="featured-bx style2">
										<div class="featured-media">
											<img src="images/featured/pic9.jpg" alt="">
										</div>
										<div class="featured-content text-white">
											<h2 class="title"><a href="#">Korea</a></h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div> -->
			
			<!-- Featured Destinations End -->
			<!-- Our Services -->
			<!-- <div class="section-full bg-gray-1 content-inner about-us">
                <div class="container-fluid">
					<div class="section-head text-black text-left text-center">
						<h2 class="box-title">Best Things to Do in the City</h2>
						<div class="dlab-separator bg-primary"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
					</div>
					<div class="site-filters clearfix center m-b40 listing-filters">
						<ul class="filters" data-toggle="buttons">
							<li data-filter="" class="btn active">
								<input type="radio">
								<a href="javascript:void(0);" class="site-button-link"><span><i class=""></i>All</span></a> 
							</li>
							<li data-filter="latest-listings" class="btn">
								<input type="radio">
								<a href="javascript:void(0);" class="site-button-link"><span><i class="la la-thumb-tack"></i> Latest Listings</span></a> 
							</li>
							<li data-filter="popular-ratings" class="btn">
								<input type="radio">
								<a href="javascript:void(0);" class="site-button-link"><span><i class="la la-star-o"></i> Popular Ratings</span></a> 
							</li>
							<li data-filter="near-by-you" class="btn">
								<input type="radio">
								<a href="javascript:void(0);" class="site-button-link"><span><i class="la la-heart-o"></i> Near By You</span></a> 
							</li>
 						</ul>
					</div>
					<div class="clearfix">
						<ul id="masonry" class="dlab-gallery-listing gallery-grid-4 gallery row">
							<li class="near-by-you design card-container col-lg-3 col-md-6 col-sm-6">
								<div class="listing-bx featured-star-right m-b30 style-2">
									<div class="listing-media">
										<img src="images/listing/list2/pic1.jpg" alt="">
										<ul class="wish-bx">
											<li><a class="like-btn" href="javascript:void(0)"><i class="fa fa-heart"></i> Like</a></li>					
										</ul>
										<ul class="featured-star">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
									</div>
									<div class="listing-info">
										<h3 class="title"><a href="listing-details.html">King Organic Shop</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm.</p>
										<ul class="place-info">
											<li class="place-location"><i class="fa fa-map-marker"></i>12/a, New</li>
											<li class="open"><i class="fa fa-check"></i>Open Now</li>
										</ul>
									</div>
								</div>
							</li>
							<li class="popular-ratings photography card-container col-lg-3 col-md-6 col-sm-6">
								<div class="listing-bx featured-star-right m-b30 style-2">
									<div class="listing-media">
										<img src="images/listing/list2/pic2.jpg" alt="">
										<ul class="wish-bx">
											<li><a class="like-btn" href="javascript:void(0)"><i class="fa fa-heart"></i> Like</a></li>					
										</ul>
										<ul class="featured-star">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>	
										</ul>
									</div>
									<div class="listing-info">
										<h3 class="title"><a href="listing-details.html">Dorado Health Care</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm.</p>
										<ul class="place-info">
											<li class="place-location"><i class="fa fa-map-marker"></i>12/a, New</li>
											<li class="open"><i class="fa fa-check"></i>Open Now</li>
										</ul>
									</div>
								</div>
							</li>
							<li class="latest-listings photography card-container col-lg-3 col-md-6 col-sm-6">
								<div class="listing-bx featured-star-right m-b30 style-2">
									<div class="listing-media">
										<img src="images/listing/list2/pic3.jpg" alt="">
										<ul class="wish-bx">
											<li><a class="like-btn" href="javascript:void(0)"><i class="fa fa-heart"></i> Like</a></li>					
										</ul>
										<ul class="featured-star">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
									</div>
									<div class="listing-info">
										<h3 class="title"><a href="listing-details.html">Tam Farfhume Shop</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm.</p>
										<ul class="place-info">
											<li class="place-location"><i class="fa fa-map-marker"></i>12/a, New</li>
											<li class="open"><i class="fa fa-check"></i>Open Now</li>
										</ul>
									</div>
								</div>
							</li>
							<li class="near-by-you latest-listings card-container col-lg-3 col-md-6 col-sm-6">
								<div class="listing-bx featured-star-right m-b30 style-2">
									<div class="listing-media">
										<img src="images/listing/list2/pic4.jpg" alt="">
										<ul class="wish-bx">
											<li><a class="like-btn" href="javascript:void(0)"><i class="fa fa-heart"></i> Like</a></li>					
										</ul>
										<ul class="featured-star">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
									</div>
									<div class="listing-info">
										<h3 class="title"><a href="listing-details.html">King Organic Shop</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm.</p>
										<ul class="place-info">
											<li class="place-location"><i class="fa fa-map-marker"></i>12/a, New</li>
											<li class="open"><i class="fa fa-check"></i>Open Now</li>
										</ul>
									</div>
								</div>
							</li>
							 <li class="near-by-you popular-ratings card-container col-lg-3 col-md-6 col-sm-6">
								<div class="listing-bx featured-star-right m-b30 style-2">
									<div class="listing-media">
										<img src="images/listing/list2/pic5.jpg" alt="">
										<ul class="wish-bx">
											<li><a class="like-btn" href="javascript:void(0)"><i class="fa fa-heart"></i> Like</a></li>					
										</ul>
										<ul class="featured-star">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
									</div>
									<div class="listing-info">
										<h3 class="title"><a href="listing-details.html">Venzil Hingo Zoo</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm.</p>
										<ul class="place-info">
											<li class="place-location"><i class="fa fa-map-marker"></i>12/a, New</li>
											<li class="open"><i class="fa fa-check"></i>Open Now</li>
										</ul>
									</div>
								</div>
							</li>
							<li class="popular-ratings latest-listings photography card-container col-lg-3 col-md-6 col-sm-6">
								<div class="listing-bx featured-star-right m-b30 style-2">
									<div class="listing-media">
										<img src="images/listing/list2/pic6.jpg" alt="">
										<ul class="wish-bx">
											<li><a class="like-btn" href="javascript:void(0)"><i class="fa fa-heart"></i> Like</a></li>					
										</ul>
										<ul class="featured-star">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
									</div>
									<div class="listing-info">
										<h3 class="title"><a href="listing-details.html">KFC Pijja Shop</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm.</p>
										<ul class="place-info">
											<li class="place-location"><i class="fa fa-map-marker"></i>12/a, New</li>
											<li class="open"><i class="fa fa-check"></i>Open Now</li>
										</ul>
									</div>
								</div>
							</li>
							<li class="near-by-you popular-ratings card-container col-lg-3 col-md-6 col-sm-6">
								<div class="listing-bx featured-star-right m-b30 style-2">
									<div class="listing-media">
										<img src="images/listing/list2/pic1.jpg" alt="">
										<ul class="wish-bx">
											<li><a class="like-btn" href="javascript:void(0)"><i class="fa fa-heart"></i> Like</a></li>					
										</ul>
										<ul class="featured-star">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
									</div>
									<div class="listing-info">
										<h3 class="title"><a href="listing-details.html">Venzil Hingo Zoo</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm.</p>
										<ul class="place-info">
											<li class="place-location"><i class="fa fa-map-marker"></i>12/a, New</li>
											<li class="open"><i class="fa fa-check"></i>Open Now</li>
										</ul>
									</div>
								</div>
							</li>
							<li class="popular-ratings latest-listings photography card-container col-lg-3 col-md-6 col-sm-6">
								<div class="listing-bx featured-star-right m-b30 style-2">
									<div class="listing-media">
										<img src="images/listing/list2/pic2.jpg" alt="">
										<ul class="wish-bx">
											<li><a class="like-btn" href="javascript:void(0)"><i class="fa fa-heart"></i> Like</a></li>					
										</ul>
										<ul class="featured-star">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
									</div>
									<div class="listing-info">
										<h3 class="title"><a href="listing-details.html">KFC Pijja Shop</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm.</p>
										<ul class="place-info">
											<li class="place-location"><i class="fa fa-map-marker"></i>12/a, New</li>
											<li class="open"><i class="fa fa-check"></i>Open Now</li>
										</ul>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div> -->
			
            <!-- Our Services -->
			<!-- Why Choose Us -->
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
								<div class="icon-bx-lg radius bg-white m-b20"><a href="javascript:void(0)" class="icon-cell text-primary"><i class="ti-cloud-up" ></i></a> </div>
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
									<p>Après avoir prouvé que l'objèt en question est le votre, vous pourez  entrer en possession de votre du à travèrs le dépositaire...</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="section-full bg-img-fix bg-white content-inner">
				<div class="container">
					<div class="section-head text-center">
						<h2 class="box-title">How It Works?</h2>
						<div class="dlab-separator bg-primary"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="icon-bx-wraper center work-box style1 m-b30">
								<div class="box-count">01</div>
								<div class="icon-bx-lg radius bg-gray-1 m-b20">
									<a href="javascript:void(0)" class="icon-cell"><i class="ti-search text-primary"></i></a> 
								</div>
								<div class="icon-content">
									<h3 class="dlab-tilte">Choose What To Do?</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="icon-bx-wraper center work-box style1 m-b30">
								<div class="box-count">02</div>
								<div class="icon-bx-lg radius bg-gray-1 m-b20">
									<a href="javascript:void(0)" class="icon-cell"><i class="ti-gift text-primary"></i></a> 
								</div>
								<div class="icon-content">
									<h3 class="dlab-tilte">Find What Your Want?</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="icon-bx-wraper center work-box style1 m-b30">
								<div class="box-count">03</div>
								<div class="icon-bx-lg radius bg-gray-1 m-b20">
									<a href="javascript:void(0)" class="icon-cell"><i class="ti-rocket text-primary"></i></a> 
								</div>
								<div class="icon-content">
									<h3 class="dlab-tilte">Explore Amazing Places</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<!-- Why Chose Us End -->
			
			<!-- Online Community -->
			<!-- <div class="section-full bg-white content-inner-2 bg-img-fix overlay-black-dark owl-out" style="background-image:url(images/background/bg1.jpg); background-position: left bottom;">
                <div class="container">
					<div class="section-head text-center text-white">
						<h2 class="box-title">What Our Users Say</h2>
						<div class="dlab-separator bg-primary"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="row">
								<div id="owl-demo" class="testimonial-one owl-loaded owl-theme owl-carousel owl-btn-center-lr owl-btn-3 btn-white owl-dots-primary-big style-2">
									<div class="item">
										<div class="testimonial-2 testimonial-bg">
											<div class="testimonial-text">
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
											</div>
											<div class="testimonial-detail clearfix">
												<div class="testimonial-pic quote-left radius shadow"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
												<strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Client</span> 
											</div>
										</div>
									</div>
									<div class="item">
										<div class="testimonial-2 testimonial-bg">
											<div class="testimonial-text">
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
											</div>
											<div class="testimonial-detail clearfix">
												<div class="testimonial-pic quote-left radius shadow"><img src="images/testimonials/pic2.jpg" width="100" height="100" alt=""></div>
												<strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Client</span> 
											</div>
										</div>
									</div>
									<div class="item">
										<div class="testimonial-2 testimonial-bg">
											<div class="testimonial-text">
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
											</div>
											<div class="testimonial-detail clearfix">
												<div class="testimonial-pic quote-left radius shadow"><img src="images/testimonials/pic3.jpg" width="100" height="100" alt=""></div>
												<strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Client</span> 
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<!-- Online Community End -->
			<!-- Featured Destinations -->
            <!-- <div class="section-full bg-white content-inner owl-out">
                <div class="container">
					<div class="section-head text-black text-center">
						<h2 class="box-title">From The Blog</h2>
						<div class="dlab-separator bg-primary"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
					</div>
                    <div class="blog-carousel owl-carousel owl-btn-center-lr owl-btn-2 primary">
						<div class="item">
							<div class="blog-post style2 blog-grid">
								<div class="dlab-post-media"> 
									<a href="#"><img src="images/blog/grid/pic5.jpg" alt=""></a> 
								</div>
								<div class="dlab-info">
									<div class="dlab-post-meta">
										<ul>
											<li class="post-comment"><i class="icon-speech"></i> <a href="#">03</a> </li>
											<li class="post-date"><i class="icon-calendar"></i> <span>10  Aug 2020</span> </li>
										</ul>
									</div>
									<div class="dlab-post-title">
										<h5 class="post-title"><a href="#">7 Moments To Remember From Directory.</a></h5>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="blog-post style2 blog-grid">
								<div class="dlab-post-media"> 
									<a href="#"><img src="images/blog/grid/pic6.jpg" alt=""></a> 
								</div>
								<div class="dlab-info">
									<div class="dlab-post-meta">
										<ul>
											<li class="post-comment"><i class="icon-speech"></i> <a href="#">03</a> </li>
											<li class="post-date"><i class="icon-calendar"></i> <span>10  Aug 2020</span> </li>
										</ul>
									</div>
									<div class="dlab-post-title ">
										<h5 class="post-title"><a href="#">Directory Will Be A Thing Of The Past.</a></h5>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="blog-post style2 blog-grid">
								<div class="dlab-post-media"> 
									<a href="#"><img src="images/blog/grid/pic7.jpg" alt=""></a> 
								</div>
								<div class="dlab-info">
									<div class="dlab-post-meta">
										<ul>
											<li class="post-comment"><i class="icon-speech"></i> <a href="#">03</a> </li>
											<li class="post-date"><i class="icon-calendar"></i> <span>10  Aug 2020</span> </li>
										</ul>
									</div>
									<div class="dlab-post-title ">
										<h5 class="post-title"><a href="#">Ten Things Your Competitors Know About.</a></h5>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div> -->
			<!-- Featured Destinations End -->
        </div>
        
            <!-- Section Banner END -->
            <!-- Search Filter -->
            <div class="section-full">
                <div class="container">

                </div>
            </div>
            <!-- Search Filter END -->
           
            <!-- contact area END -->
        </div>
        <!-- Content END-->
        <!-- Footer -->
        <?php require_once "./footer.php"; ?>
        <!-- Footer END-->
        <button class="scroltop fa fa-chevron-up"></button>
        </div>
        <!-- JAVASCRIPT FILES ========================================= -->
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="js/combining.js"></script>
        <!-- CONTACT JS  -->
        <script src="js/dz.carousel.min.js"></script>
        <!-- CONTACT JS  -->
</body>

<!-- Mirrored from bizmap.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jun 2022 11:27:56 GMT -->

</html>