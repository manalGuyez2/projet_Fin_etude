@extends('layout')
@section('navBar')
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
          <li class="has-children " >
            <a  class="nav-link text-left">Se Connecter</a>
            <ul class="dropdown">
              <li><a href="{{ url('/etud')}}">Espace Étudiant</a></li>
              <li><a href="{{ url('/enseignant')}}">Espace Enseignant</a></li>
      
            </ul>
          </li>
      </ul>                                                                                                                                                                                                                                                                                          </ul>
    </nav>

  </div>
@endsection

@section('content')

<div class="site-wrap">   
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <div class="custom-breadcrumns border-bottom">
                <div class="container">
                  <h2 class="mb-0">Semestre 5</h2>
                </div>
              </div>
           
            </div>
          </div>
        </div>
      </div> 
    

   {{--}} <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="{{ url('/')}}" >Acceul</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Semestre 5</span>
      </div>
    </div>--}}

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="image view view-first">
                        <figure class="course-1-item">
                        <a href="{{ url('/cours')}}"><img src="images/course_1.jpg" alt="Image" class="img-fluid"></a>
                        
                        <div class="category"><h3>Compilation </h3></div>  
                        </figure>
                        <div class="mask">
                            <p>Souad AMJAD</p>
                            
                            </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="image view view-first">
                        <figure class="course-1-item">
                                <a href="{{ url('/courEnsg')}}"><img src="images/course_2.jpeg" alt="Image" class="img-fluid"></a>
                        <div class="category"><h3>Bases De Données</h3></div>  
                        </figure>
                        <div class="mask">
                            <p>Ismail JELLOULI</p>
                            
                            </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="image view view-first">
                        <figure class="course-1-item">
                                <a href="#"><img src="images/java.png" alt="Image" class="img-fluid"></a>
                        <div class="category"><h3>Programmation Orientée Objets</h3></div>  
                        </figure>
                        <div class="mask">
                            <p>Mohamed BEN MAATI</p>
                            
                            </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="image view view-first">
                        <figure class="course-1-item">
                                <a href="#"><img src="images/recherche.png" alt="Image" class="img-fluid"></a>
                        <div class="category"><h3>Recherche Opérationnelle</h3></div>  
                        </figure>
                        <div class="mask">
                            <p>Chahhou Mohamed</p>
                            
                            </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="image view view-first">
                        <figure class="course-1-item">
                                <a href="#"><img src="images/course_5.jpeg" alt="Image" class="img-fluid"></a>
                        <div class="category"><h3>Réseaux</h3></div>  
                        </figure>
                        <div class="mask">
                            <p>Badre Eddine EL MOHAJIR</p>
                            
                            </div>
                       
                    </div>
                </div>
                

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="image view view-first" >
                        <figure class="course-1-item" >
                                <a href="#"><img src="images/uml1.png" alt="Image" class="img-fluid" ></a>
                        <div class="category"><h3>Conception Orientée Objets(UML)</h3></div>  
                        </figure>
                        <div class="mask">
                            <p>Abdelhamid EL MHOUTI</p>
                            
                            </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>

   
    </div> 
 
    

@endsection