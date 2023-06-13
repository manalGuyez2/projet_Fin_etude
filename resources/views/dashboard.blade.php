<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <style type="text/css">
      body{
        background-color: #082f34;
      }
      .nav{
        border-color: blue !important;
      }
      .yous.active{
        border-color: blue blue rgb(255, 255, 255) !important;
        background-color: blue;
      }
      .yous{
        color: #082f34 !important;
        font-weight: 700;
      }
      .yous:hover{
        border-color: blue !important;
      }
    </style>
    <title>Département d'informatique</title>
    <meta charset="utf-8">

     
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
                    
                    <li class="has-children active">
                      <a  class="nav-link text-left">Modules</a>
                      <ul class="dropdown">
                        <li><a href="{{ url('#')}}">S1</a></li>
                        <li><a href="{{ url('#')}}">S2</a></li>
                        <li><a href="{{ url('#')}}">S3</a></li>
                        <li><a href="{{ url('#')}}">S4</a></li>
                        <li class="active"><a href="{{ url('/modules')}}" >S5</a></li>
                        <li><a href="{{ url('#')}}">S6</a></li>
                      </ul>
                    </li>
                    <!--<li>
                      <a href="{{ url('/courses')}}" class="nav-link text-left">Courses</a>
                    </li>-->
                    <li >
                        <a href="{{ url('/contact')}}" class="nav-link text-left">Contacter</a>
                      </li>
                      <li  >
                        <a href="{{ url('/logout')}}">deconnexion</a>
                        
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

    <div class="container py-5">
       <div class="row">
        <div class="col-12 py-3">
          <h1 class="text-white text-center">Filter Products with Bootstrap Tabs | Full Responsive</h1>
        </div>
         <div class="col-12 ">
             <div class="bg-white rounded p-2">
               <ul class="nav nav-tabs justify-content-center ">
                <li class="nav-item ">
                  <a class="yous active" data-bs-toggle="tab" href="#all">All Products</a>
                </li>
                <li class="nav-item">
                  <a class="yous" data-bs-toggle="tab" href="#latest">Latest</a>
                </li>
                <li class="nav-item">
                  <a class="yous" data-bs-toggle="tab" href="#week">Papular</a>
                </li>
              </ul>
           <div class="row">
             <div class="col-12">
               <div class="tab-content p-4 ">
                 <div id="all" class="tab-pane fade in active show">
                    <div class="row">
                     <div class="col-lg-3 col-md-6 col-sm-10 my-4">
                       <div class="card">
                         <img src="media/product_05.jpg" alt="">
                         <div class="card-body">
                           <h3 class="card-title">Product name</h3>
                           <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus, autem?</p>
                           <button class="btn btn-outline-success">Read More</button>
                         </div>
                       </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-10 my-4">
                       <div class="card">
                         <img src="media/product_02.jpg" alt="">
                         <div class="card-body">
                           <h3 class="card-title">Product name</h3>
                           <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus, autem?</p>
                           <button class="btn btn-outline-success">Read More</button>
                         </div>
                       </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-10 my-4">
                       <div class="card">
                         <img src="media/product_03.jpg" alt="">
                         <div class="card-body">
                           <h3 class="card-title">Product name</h3>
                           <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus, autem?</p>
                           <button class="btn btn-outline-success">Read More</button>
                         </div>
                       </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-10 my-4">
                       <div class="card">
                         <img src="media/product_04.jpg" alt="">
                         <div class="card-body">
                           <h3 class="card-title">Product name</h3>
                           <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus, autem?</p>
                           <button class="btn btn-outline-success">Read More</button>
                         </div>
                       </div>
                     </div>
                    </div>
                 </div>
                  <div id="latest" class="tab-pane fade ">
                    <div class="row">
                     <div class="col-lg-3 col-md-6 col-sm-10 my-4">
                       <div class="card">
                         <img src="media/product_05.jpg" alt="">
                         <div class="card-body">
                           <h3 class="card-title">Product name</h3>
                           <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus, autem?</p>
                           <button class="btn btn-outline-success">Read More</button>
                         </div>
                       </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-10 my-4">
                       <div class="card">
                         <img src="media/product_03.jpg" alt="">
                         <div class="card-body">
                           <h3 class="card-title">Product name</h3>
                           <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus, autem?</p>
                           <button class="btn btn-outline-success">Read More</button>
                         </div>
                       </div>
                     </div>
                    
                    </div>
                 </div>
                  <div id="week" class="tab-pane fade ">
                    <div class="row">
                     <div class="col-lg-3 col-md-6 col-sm-10 my-4">
                       <div class="card">
                         <img src="media/product_06.jpg" alt="">
                         <div class="card-body">
                           <h3 class="card-title">Product name</h3>
                           <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus, autem?</p>
                           <button class="btn btn-outline-success">Read More</button>
                         </div>
                       </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-10 my-4">
                       <div class="card">
                         <img src="media/product_02.jpg" alt="">
                         <div class="card-body">
                           <h3 class="card-title">Product name</h3>
                           <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus, autem?</p>
                           <button class="btn btn-outline-success">Read More</button>
                         </div>
                       </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-10 my-4">
                       <div class="card">
                         <img src="media/product_04.jpg" alt="">
                         <div class="card-body">
                           <h3 class="card-title">Product name</h3>
                           <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus, autem?</p>
                           <button class="btn btn-outline-success">Read More</button>
                         </div>
                       </div>
                     </div>
                     
                 </div>

               </div>
             </div>
           </div>
         </div>
             </div>
       </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>