@php( $etuds = \App\Models\Student::all() )  
@php( $etuds = \App\Models\Prof::all() ) 
@extends('layout')
@section('navBar')
<div class="mr-auto">
    <nav class="site-navigation position-relative text-right" role="navigation">
      <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
        <li  >
          <a href="{{ url('/')}}" class="nav-link text-left">Accueil</a>
        </li>
        
        <li class="has-children ">
          <a  class="nav-link text-left">Modules</a>
          <ul class="dropdown">
            <li><a href="{{ url('#')}}">S1</a></li>
            <li><a href="{{ url('#')}}">S2</a></li>
            <li><a href="{{ url('#')}}">S3</a></li>
            <li><a href="{{ url('#')}}">S4</a></li>
            <li ><a href="{{ url('/modules')}}" >S5</a></li>
            <li><a href="{{ url('#')}}">S6</a></li>
          </ul>
        </li>
        <!--<li>
          <a href="{{ url('/courses')}}" class="nav-link text-left">Courses</a>
        </li>-->
        <li  class="active">
            <a href="{{ url('/contact')}}" class="nav-link text-left">Contact</a>
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
                  <h2 class="mb-0">Contact</h2>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div> 
    

    

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="fname">Nom :</label>
                    <input type="text" id="fname" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                    <label for="lname">Prénom :</label>
                    <input type="text" id="lname" class="form-control form-control-lg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="eaddress">Adresse e-mail</label>
                    <input type="text" id="eaddress" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                    <label for="tel">Numéro Téléphone</label>
                    <input type="text" id="tel" class="form-control form-control-lg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <input type="submit" value="Envoyer Message" class="btn btn-primary btn-lg px-5">
                </div>
            </div>
        </div>
    </div>

    

      <div class="site-section">
        <div class="container">
          <div class="row mb-5 justify-content-center text-center">
            <div class="col-lg-4 mb-5">
              <h2 class="section-title-underline mb-5">
                <span>Enseignants</span>
              </h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
  
              <div class="feature-1 border person text-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                 <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
              </svg>
                
                <div class="feature-1-content">
                  <h2>Souad Amjad</h2>
                  <span class="position mb-3 d-block">Compilation</span>    
                  <p ><i class="fa fa-envelope "></i> <a class="text-info" href="mailto:amjad_souad@yahoo.fr">amjad_souad@yahoo.fr</a></p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
              <div class="feature-1 border person text-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                 <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                  </svg>
                <div class="feature-1-content">
                  <h2>El Mohajir Badr Eddine</h2>
                  <span class="position mb-3 d-block">Réseaux</span>    
                  <p ><i class="fa fa-envelope "></i> <a class="text-info" href="mailto:badreddine@elmohajir.com"> badreddine@elmohajir.com</a></p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
              <div class="feature-1 border person text-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                  </svg>
                <div class="feature-1-content">
                  <h2>Jellouli Ismail</h2>
                  <span class="position mb-3 d-block">Bases De Données</span>    
                  <p ><i class="fa fa-envelope "></i> <a class="text-info" href="mailto:ismail.jellouli@gmail.com"> ismail.jellouli@gmail.com</a></p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
  
              <div class="feature-1 border person text-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                   <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
              </svg>
                <div class="feature-1-content">
                  <h2>Chahhou Mohamed</h2>
                  <span class="position mb-3 d-block">Recherche opérationnelle</span>    
                  <p ><i class="fa fa-envelope "></i> <a class="text-info" href="mailto: mchahhou@hotmail.com"> mchahhou@hotmail.com</a></p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
              <div class="feature-1 border person text-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
             <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
           </svg>
                <div class="feature-1-content">
                  <h2>El Mhouti Abderrahim</h2>
                  <span class="position mb-3 d-block">UML</span>    
                  <p ><i class="fa fa-envelope "></i> <a class="text-info" href="mailto:abderrahim.elmhouti@gmail.com"> abderrahim.elmhouti@gmail.com</a></p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
              <div class="feature-1 border person text-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                 </svg>
                <div class="feature-1-content">
                  <h2>Ben Maati Mohamed Larbi</h2>
                  <span class="position mb-3 d-block">JAVA</span>    
                  <p ><i class="fa fa-envelope "></i> <a class="text-info" href="mailto:mbenmaati@yahoo.fr"> mbenmaati@yahoo.fr</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>   

    @endsection