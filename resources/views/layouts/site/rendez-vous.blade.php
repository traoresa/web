<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from preview.colorlib.com/theme/pretty/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Dec 2020 13:00:37 GMT -->
<head>
    <title>Pretty - le salon de saf</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend2/css/open-iconic-bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('frontend2/css/animate.css') }}">
   
     <link rel="stylesheet" href="{{ asset('frontend2/css/owl.carousel.min.css') }}">
     <link rel="stylesheet" href="{{ asset('frontend2/css/owl.theme.default.min.css') }}">

     <link rel="stylesheet" href="{{ asset('frontend2/css/magnific-popup.css') }}">
 
     <link rel="stylesheet" href="{{ asset('frontend2/css/aos.css') }}">

     <link rel="stylesheet" href="{{ asset('frontend2/css/ionicons.min.css') }}">
     <link rel="stylesheet" href="{{ asset('frontend2/css/bootstrap-datepicker.css') }}">
     <link rel="stylesheet" href="{{ asset('frontend2/css/jquery.timepicker.css') }}">

 

     <link rel="stylesheet" href="{{ asset('frontend2/css/flaticon.css') }}">

    

     <link rel="stylesheet" href="{{ asset('frontend2/css/icomoon.css') }}">
     <link rel="stylesheet" href="{{ asset('frontend2/css/style.css') }}">
    
  </head>
  <body>
    
    <div class="hero-wrap js-fullheight" style="background-image: url('frontend2/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          	<div class="icon">
          		<a href="index-2.html" class="logo">
          			<span class="flaticon-flower"></span>
          			<h1>Pretty</h1>
          		</a>
          	</div>
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">RENDEZ-VOUS</h1>
            <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Creer par <a href="#">Saf</a></p>

            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> visitez notre sallon<a href="https://virtual-360.fr/visites_virtuelles/salon-de-coiffure-l-ile-de-beaute-visit-199/">clic ici</a></p>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="/l">Pretty</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/" class="nav-link">Acceuil</a></li>
	          <li class="nav-item"><a href="/nous" class="nav-link">Nous</a></li>
	          <li class="nav-item"><a href="/service" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="/realisation" class="nav-link">Réalisations</a></li>
              <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
              <li class="nav-item"><a href="/rdv" class="nav-link">Rendez-vous</a></li>
              <li class="nav-item"><a href="/contact" class="nav-link">Contacts</a></li>
              
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
   
  

    <section class="ftco-section ftco-appointment">
        <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex align-items-center">
            <div class="col-md-2"></div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                <div class="appointment-info text-center p-5">
                    <div class="mb-4">
                        <h3 class="mb-3">Addresse</h3>
                        <p>cocody,rivera2</p>
                    </div>
                    <div class="mb-4">
                        <h3 class="mb-3">Télèphone</h3>
                        <p class="day"><strong>+225 028 411 26</strong> or <strong>+225 796 16 19</strong></p>
                    </div>
                    <div>
                        <h3 class="mb-3">heures</h3>
                        <p class="day"><strong>Lundi - samedi</strong></p>
                        <span>08:00 - 21:00</span>
                    </div>
                    <div>
                        <h3 class="mb-3">heures</h3>
                        <p class="day"><strong>Lundi - samedi</strong></p>
                        <span>09:00 - 18:00</span>
                    </div>
                    <div>
                        <h3 class="mb-3">Nous faisons Exerçons aussi a domicile </h3>
                
                    </div>
                </div>
            </div>
            <div class="col-md-6 appointment pl-md-5 ftco-animate">
                <h3 class="mb-3">Rendez-vous</h3>
                <form class="appointment-form" method="post" action="{{ route('reservation.reserve') }}">
                    @csrf
            <div class="row form-group d-flex">
                <div class="col-md-6">
                    <input type="text" class="form-control reserve-form empty iconified" name="name" id="name"
                    placeholder="  &#xf007;  Name">
                </div>
                <div class="col-md-6">
                    <input type="email" name="email" class="form-control reserve-form empty iconified" id="email"  placeholder="  &#xf1d8;  e-mail">
                </div>
            </div>
            <div class="row form-group d-flex">
                <div class="col-md-6">
                    <div class="input-wrap">
                        <div class="icon"><span class="ion-md-calendar"></span></div>
                        <input type="text" class="form-control reserve-form empty iconified" name="dateandtime" id="datetimepicker1" placeholder="&#xf017;  Time">
                    </div>
                </div>
                <div class="col-md-6">
                    <input type="tel" class="form-control reserve-form empty iconified" name="phone" id="phone"  placeholder="  &#xf095;  Phone">
                </div>
            </div>
            <div class="form-group">
                <textarea type="text" name="message" class="form-control reserve-form empty iconified" id="message" rows="3"  placeholder="  &#xf086;  We're listening"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" id="submit"class="btn btn-white btn-outline-white py-3 px-4">
                    faire une réservation
                </button>
            </div>
          </form>
            </div>    			
        </div>
    </div>
</section>


    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">NOUS</h2>
              <p>Nous sommes un sallon de coiffure professionnelle ,nous faisons des coiffure à domicile à la demande </p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(frontend2/images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(frontend2/images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Makeup</a></li>
                <li><a href="#" class="py-2 d-block">Teint</a></li>
                <li><a href="#" class="py-2 d-block">coiffure</a></li>
                
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Des questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">cocody,rivera2</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+255 02841126</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">safiatout95@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> tous droit réservées crée par saf</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="{{ asset('frontend2/js/jquery.min.js') }}"></script>
  <script src="{{ asset('frontend2/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('frontend2/js/popper.min.js') }}"></script>
 
  <script src="{{ asset('frontend2/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('frontend2/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('frontend2/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('frontend2/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('frontend2/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('frontend2/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('frontend2/js/aos.js') }}"></script>
  <script src="{{ asset('frontend2/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('frontend2/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{ asset('frontend2/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{ asset('frontend2/js/scrollax.min.js')}}"></script>
  <script src="{{ asset('frontend2/js/google-map.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
  <script src="{{ asset('frontend2/js/main.js')}}"></script>
  

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

    
  </body>

<!-- Mirrored from preview.colorlib.com/theme/pretty/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Dec 2020 13:01:01 GMT -->
</html>