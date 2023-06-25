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
            <a href="{{ url('/contact')}}" class="nav-link text-left">Contact</a>
          </li>
          
          

            
                     @if (Session::has('LoginId'))
                       @auth
                          <!--  @if (Route::has('LoginId'))-->

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('etud') }}">{{ __('etud') }}</a>
                                </li>
                            @endif

                            
                         @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                                    {{ Session::get('nom') }}

                                

                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/logout')}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                      
                      @endauth
                 @endif


          
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
        @if(Session::has('fail'))
          <div class="alert alert-danger">{{Session::get('fail')}}</div>
          @endif
           @csrf 
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
          <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
            <form  method="POST">
                @csrf
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel" style="color: rgb(233, 67, 61)">Vous devez d'abord connecter.....</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    
                  </button>
                </div>
                <div class="modal-body container">
                  
                  <h2>Etes-vous .. </h2>
                  <br>
                  <a href="{{  route('getLogin') }}"  style="background-color: rgb(54, 37, 239);border-radius: 10px;padding: 10px 20px;
                  font-size: 17px; color:aliceblue;"><i class="fa fa-user"> Etudiants</i></a>
                   
                    <a href="{{ url('/enseignant') }}" style="background-color: rgb(54, 37, 239);border-radius: 10px;padding: 10px 20px;
                    font-size: 17px;color:aliceblue;"><i class="fa fa-edit"> Enseignants</i></a>

                  <a href="{{  route('getLogin') }}"  style="background-color: rgb(54, 37, 239);border-radius: 10px;padding: 10px 20px;
                        font-size: 17px;color:aliceblue;"><i class="fa fa-user-secret"> Admin</i></a>

                        <br>
                        <br>
  
                </div>
                
            </form>
              </div>
            </div>
          </div>
          <div class="modal fade" id="accessModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
            <form  method="POST">
                @csrf
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel" style="color: rgb(233, 67, 61)">Message Erreur:</h5>
                  <button type="button" class="close " data-dismiss="modal"  aria-label="Close" style="color: red">
                    
                  </button>
                </div>
                <div class="modal-body container">
                  
                  <h2>Vous n'avez pas le droit d'accès à ce Module </h2>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>

                 </div>
                
            </form>
              </div>
            </div>
          </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="image view view-first">
                        <figure class="course-1-item">
                      @if (Session::has('prof'))
                          @if (Session::get('nameModule')=='CONCEPTION ORIENTEE OBJETS')
                            
                          <a href="{{ url('/coursShow')}}"><img src="images/course_1.jpg" alt="Image" class="img-fluid"></a>


                       
                    @else
                              
                          <a ><img data-toggle="modal" data-target="#accessModal" src="images/course_1.jpg" alt="Image" class="img-fluid">
                          </a>
                          @endif
                        @elseif (Session::has('LoginId'))
                            
                                  <a href="{{ url('/cours') }}"><img src="images/course_1.jpg" alt="Image" class="img-fluid"></a>
                     

                          @else 
                                      <a ><img data-toggle="modal" data-target="#deleteModal" src="images/course_1.jpg" alt="Image" class="img-fluid">
                                      </a>
                        
                           
                       
                      @endif
                        
                        
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