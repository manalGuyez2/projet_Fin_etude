@php( $etuds = \App\Models\Student::all() )  
@php( $profs = \App\Models\Prof::all() ) 
<!DOCTYPE html>
  <html lang="fr">
  
  <head>
    <title>Département d'informatique</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script  src=//code.jquery.com/jquery-3.5.1.slim.min.js integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin=anonymous></script>


    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    

    <link rel="stylesheet" href="css/styleModule.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
     <!-- Bootstrap -->
     <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- NProgress -->
     <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
     
     <!-- Custom styling plus plugins -->
     <link href="../build/css/custom.min.css" rel="stylesheet">

 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>













  
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
    @yield('script')
  
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
              <a class="small mr-3" href="tel:(+212) 5 39 99 64 32"><span class="icon-phone2 mr-2"></span>  (+212) 5 39 99 64 32</a> 
              <a href="{{ url('/contact')}}" class="small mr-3"><span class="icon-envelope-o mr-2"></span> admin@uae.ac.ma</a> 
            </div>
           
          </div>
        </div>
      </div>
      <header class="site-navbar py-2 js-sticky-header site-navbar-target header__shadow" role="banner">
  
        <div class="container ">
          <div class="d-flex align-items-center">
            <div class="site-logo" >
              <a href="{{ url('/')}}" class="d-block">
                <img src="images/logo.jpg" alt="Image" class="img-fluid">
              </a>
            </div>
            @yield('navBar')
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">

                @if (Session::has('LoginId'))
                 
                
                <li>
                  <a class="nav-link text-left text-success">Espace Etudiant</button></a>
                  
                </li>
                
                        
                <li class="has-children">
                 
                  <a style="background-image: url('ImageLocation');background-size: cover; height:40px; padding-top:8px;">
                    
                   <img src="https://ui-avatars.com/api/?name={{ urlencode(Session::get('nom'))}}&rounded=true&font-size=0.33&size=50&background=random">
                    
                  </a>
                  <ul class="dropdown">
                   
                    <li><a class="dropdown-item"><i class="fas fa-user-alt pe-2"></i>{{Session::get('nom')}}</a></li>
                   
                    <li>
                      <a class="dropdown-item" href="/changePassword"><i class="fas fa-cog pe-2"></i>
                        paramètre
                      </a>
                  </li>
                    
                    <div class="dropdown-divider"></div>
                    
                    <li ><a class="text-danger dropdown-item " href="{{ url('/logout')}}"><i class="fas fa-door-open pe-2"></i>se deconnecter</a></li>
            
                  </ul>
                     
                </li>

                <!--  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <img src="{{ asset('images/admin.png') }}" alt="Profile Icon" width="30" height="30" class="rounded-circle">
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">Name</a>
                          <a class="dropdown-item" href="#">Settings</a>
                          <a class="dropdown-item" href="#">Logout</a>
                      </div>
                  </li>-->
                @elseif (Session::has('prof'))
                  
                <li >
                  <a class="nav-link text-left text-success">Espace Enseignant</button></a>
                  
                </li>


                <li class="has-children">
                 
                  <a style="background-image: url('ImageLocation');background-size: cover; height:40px; padding-top:8px;">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(Session::get('nom'))}}&rounded=true&font-size=0.33&size=50&background=random">
                    
                    
                  </a>
                  <ul class="dropdown">

                    <li><a class="dropdown-item"><i class="fas fa-user-alt pe-2"></i>{{Session::get('nom')}}</a></li>
                    <li @yield('activePrmt')><a class="dropdown-item" href="/changePassword-prof"><i class="fas fa-cog pe-2"></i>paramètre</a></li>
                      <div class="dropdown-divider"></div>
                    <li><a class="text-danger dropdown-item" href="{{ url('/logoutProf')}}"><i class="fas fa-door-open pe-2"></i>se deconnecter</a></li>
            
                  </ul>
                     
                </li>
                
                @else
                
                <li class="has-children btn btn-primary " style=" border-radius: 10px;">
                  <a  class="nav-link text-left text-white" style="padding: 10px 20px;
                  font-size: 17px;">connexion</a>
                  <ul class="dropdown">
                    <li @yield('activeEtud')><a href="{{ route('getLogin')}} " >Espace Étudiant</a></li>
                    <li @yield('activeEnsg')><a href="{{ url('/enseignant')}}">Espace Enseignant</a></li>
                    <li @yield('activeAdmin')><a href="{{ url('/loginAdmin')}}">Espace Admin</a></li>
                    
                  </ul>
                </li>
                             
                     
                
                @endif
          

           <!-- <li class="has-children  active" >
              <a  class="nav-link text-left">Se Connecter</a>
              <ul class="dropdown">
                <li><a href="{{ route('getLogin')}} ">Espace Étudiant</a></li>
                <li><a href="{{ url('/enseignant')}}">Espace Enseignant</a></li>
        
              </ul>
            </li> -->
          </ul>
            </nav>
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


  <div id="loader" class="show fullscreen"><svg class="circular" width="50px" height="8px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#0c50ed"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#0c50ed"/></svg></div>
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


  <script src="../build/js/custom.min.js"></script>

  <script src="js/jsAdmin.js"></script>


  <script src="js/main.js"></script>
  </body>
</html>