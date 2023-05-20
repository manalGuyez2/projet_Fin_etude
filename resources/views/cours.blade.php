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
<div class="site-section">
  <div class="container">
    <div class="row">
   
      <h4 _ngcontent-oyd-c71="" class="page__title-3">Conception Orientée Objets(UML)</h4>
  <div class="col-8">
    
  <div class="wraper ">
    
    
    <input type="radio" name="slider" checked id="home">
    <input type="radio" name="slider" id="blog">
    <input type="radio" name="slider" id="code">
    <nav>
      <label for="home" class="home"><i class="fa fa-book"></i>Cours</label>
      <label for="blog" class="blog"><i class="fas fa-blog"></i>TD</label>
      <label for="code" class="code"><i class="fas fa-code"></i>Examen</label>
      <div class="slider"></div>
    </nav>
    <section>
      <div class="cont content-1">
     <!--   <div class="title">This is a Home content</div>-->
        <ul id="accordion">
           <li>
              <label for="first1" >Chapitre 1<span>&#x3e;</span></label>
                 <input type="radio" name="accordion" id="first1" checked>
                
               <div class="content ">
                   <div class="partie-1">
                       <a href="Téléchargements/prof.pdf" download>Partie 1 : <span class="time"><i class="fa fa-clock"></i> 14 minute</span></a>                
                   </div>

                   <div class="partie-1">
                       <a href="Téléchargements/prof.pdf#toolbar=0">partie 2</a>
                   </div>

                   <div class="partie-1">
                         <a href="pdf_server.php?file=prof.pdf">Partie 3</a>
                   </div>
              </div>
          </li>
          <li>
              <label for="secend1">chapitre 2<span>&#x3e;</span></label>
               <input type="radio" name="accordion" id="secend1" checked>
             <div class="content">
              <div class="partie-1">
                <a href="Téléchargements/prof.pdf" download>Partie 1 : <span class="time"><i class="fa fa-clock"></i> 24/05/2022</span></a>                
            </div>
             </div>
          </li>
       </ul>
      </div>
      <div class="cont content-2">
        <ul id="accordion">
          <li>
             <label for="first2" >TD 1<span>&#x3e;</span></label>
                <input type="radio" name="accordion" id="first2" checked>
               
              <div class="content">
                  <div class="partie-1">
                      <a href="Téléchargements/prof.pdf" download>Série TD N° 1: <span class="time"><i class="fa fa-clock"></i> 14 minute</span></a>                
                  </div>

                  <div class="partie-1">
                      <a href="Téléchargements/prof.pdf#toolbar=0">Correction <span class="time"><i class="fa fa-clock"></i> 1 heurs</span></a>
                  </div>

                 
             </div>
         </li>
         <li>
             <label for="secend2">TD 2<span>&#x3e;</span></label>
              <input type="radio" name="accordion" id="secend2" checked>
            <div class="content">
             <div class="partie-1">
               <a href="Téléchargements/prof.pdf" download>Série TD N° 1:  <span class="time"><i class="fa fa-clock"></i> 24/05/2022</span></a>                
           </div>
           <div class="partie-1">
            <a href="Téléchargements/prof.pdf#toolbar=0">Correction  <span class="time"><i class="fa fa-clock"></i> 14 minute</span></a>
        </div>
            </div>
         </li>
      </ul>
     </div>
      <div class="cont content-3">
        <ul id="accordion">
          <li>
             <label for="first-3" >Controle continue 2020/2021<span>&#x3e;</span></label>
                <input type="radio" name="accordion" id="first-3" checked>
               
              <div class="content">
                  <div class="partie-1">
                      <a href="Téléchargements/prof.pdf" download>Annonce d'examen: <span class="time"><i class="fa fa-clock"></i> 14 minute</span></a>                
                  </div>

                  <div class="partie-1">
                      <a href="Téléchargements/prof.pdf#toolbar=0">Correction: <span class="time"><i class="fa fa-clock"></i> 1 heurs</span></a>
                  </div>

                 
             </div>
         </li>
         <li>
             <label for="secend-3">Controle continue 2021/2022:<span>&#x3e;</span></label>
              <input type="radio" name="accordion" id="secend-3" checked>
            <div class="content">
             <div class="partie-1">
               <a href="Téléchargements/prof.pdf" download>Annonce d'examen: <span class="time"><i class="fa fa-clock"></i> 24/05/2022</span></a>                
           </div>
           <div class="partie-1">
            <a href="Téléchargements/prof.pdf#toolbar=0">Correction:  <span class="time"><i class="fa fa-clock"></i> 14 minute</span></a>
        </div>
            </div>
         </li>
      </ul>
      </div>
      
    </section>
  </div>
  </div>
  <div class="col-4">
    <img src="images/uml1.png" class="img-fluid" alt="Sample image">
  </div>
  </div>
</div>

@endsection