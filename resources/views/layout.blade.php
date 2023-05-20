<!DOCTYPE html>
  <html lang="en">
  
  <head>
    <title>Département d'informatique</title>
    <meta charset="utf-8">

     <!-- <title>Academics &mdash; Website by Colorlib</title>-->
     <!-- Bootstrap -->
     <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- NProgress -->
     <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
     
     <!-- Custom styling plus plugins -->
     <link href="../build/css/custom.min.css" rel="stylesheet">

 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
  
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">
    <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
  
    <link rel="stylesheet" href="css/style.css">
   <!-- <link rel="stylesheet" href="C:\Users\HP\Downloads\bootstrap.min.css">-->
  
  
  </head>
  
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
    <div class="site-wrap">
  
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
  
  
      <div class="py-2 bg-light ">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-9 d-none d-lg-block">
              <a href="{{ url('/contact')}}" class="small mr-3 text-"><span class="icon-question-circle-o mr-2 "></span> Vous avez des questions?</a> 
              <i class="fa fa-phone"></i> <a class="small mr-3" href="tel:(+212) 5 39 99 64 32"><span class="icon-phone2 mr-2"></span>  (+212) 5 39 99 64 32</a> 
              <a href="{{ url('/contact')}}" class="small mr-3"><span class="icon-envelope-o mr-2"></span> admin@uae.ac.ma</a> 
            </div>
           
          </div>
        </div>
      </div>
      <header class="site-navbar py-2 js-sticky-header site-navbar-target" role="banner">
  
        <div class="container">
          <div class="d-flex align-items-center">
            <div class="site-logo" >
              <a href="{{ url('/')}}" class="d-block">
                <img src="images/logo.jpg" alt="Image" class="img-fluid">
              </a>
            </div>
            <div class="mr-auto">
              <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                  <li @yield('activeHomme')>
                    <a href="{{ url('/')}}" class="nav-link text-left">Accueil</a>
                  </li>
                  
                  <li class="has-children @yield('activeCourse') ">
                    <a  class="nav-link text-left">Modules</a>
                    <ul class="dropdown">
                      <li><a href="{{ url('#')}}">S1</a></li>
                      <li><a href="{{ url('#')}}">S2</a></li>
                      <li><a href="{{ url('#')}}">S3</a></li>
                      <li><a href="{{ url('#')}}">S4</a></li>
                      <li @yield('activeCourse')><a href="{{ url('/modules')}}" >S5</a></li>
                      <li><a href="{{ url('#')}}">S6</a></li>
                    </ul>
                  </li>
                  <!--<li>
                    <a href="{{ url('/courses')}}" class="nav-link text-left">Courses</a>
                  </li>-->
                  <li @yield('activeContact')>
                      <a href="{{ url('/contact')}}" class="nav-link text-left">Contacter</a>
                    </li>
                    <li class="has-children " >
                      <a  class="nav-link text-left">Se Connecter</a>
                      <ul class="dropdown">
                        <li><a href="{{ url('/etud')}}">Espace D'étudiant</a></li>
                        <li><a href="{{ url('/enseignant')}}">Espace D'enseignant</a></li>
                
                      </ul>
                    </li>
                </ul>                                                                                                                                                                                                                                                                                          </ul>
              </nav>
  
            </div>
            <div class="ml-auto">
              <div class="social-wrap">
                <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
                <a href="#"><span class="icon-linkedin"></span></a>
  
                <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                  class="icon-menu h3"></span></a>
              </div>
            </div>
           
          </div>
        </div>
  
      </header>
    </div>

    


    @yield('content')



    <div class="footer">
    <!--  <div class="container"> -->
        <div class="row">
          
         <div class="col-lg-3"> 
            
            <p class="mb-4"><img src="images/logo.png" alt="Image" id="image1" class="rounded">
             </p>
            <p>Département D'Informatique</p>  
            
       
      <!--  </div>  -->
          </div>
       
        <div class="col-md-auto">
            <h3 class="footer-heading"><span>Conatcez-Nous</span></h3>
            <p>
              <span class="adress"><i class="fa fa-home"></i> Avenue de Sebta, Mhannech II<br />93002 - T&eacute;touan - Maroc</span>
              <i class="fa fa-phone"></i> <a class="text-light" href="tel:(+212) 5 39 99 64 32">(+212) 5 39 99 64 32</a><br />
              <i class="fa fa-fax"></i> <a class="text-light" href="tel:(+212) 5 39 99 45 00">(+212) 5 39 99 45 00</a><br />
              <i class="fa fa-envelope"></i> <a class="text-light" href="mailto:fs.tetouan.contact@gmail.com">fs.tetouan.contact@gmail.com</a>
            </p>
            <div class="col-12">
              <div class="copyright">
                <p>
                  Tous Droits R&eacute;serv&eacute;s FS Tetouan <a title="Axpil | Agence web Tanger" href="https://www.axpil.ma" class="text-light" target="_blank">Copyright  &copy; 2023</a>. Courriel: <a class="text-light" href="mailto:fs.tetouan.contact@gmail.com">fs.tetouan.contact@gmail.com</a><br />
                  Facult&eacute; des Sciences, BP. 2121 M'Hannech II , 93030 T&eacute;touan Maroc
                </p>
              </div>
            
         
             </div>
         </div>
       
       
          
           

       
      </div>
    </div>
    

  
  <!-- .site-wrap -->


  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="8px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#0c50ed"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#0c50ed"/></svg></div>
  <script src="js/bootstrap.min.css"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>
  </body>
</html>