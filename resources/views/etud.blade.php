@extends('layout')
@section('navBar')
<div class="mr-auto">
    <nav class="site-navigation position-relative text-right" role="navigation">
      <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
        <li >
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
        <li >
            <a href="{{ url('/contact')}}" class="nav-link text-left">Contacter</a>
          </li>
          <li class="has-children active" >
            <a  class="nav-link text-left">Se Connecter</a>
            <ul class="dropdown">
              <li  class="active"><a href="{{ url('/etud')}}">Espace Étudiant</a></li>
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
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
             
            
    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <h2 class="mb-0">Espace Etudiant</h2>
      </div>
    </div>
            </div>
          </div>
        </div>
      </div> 
    


    <div class="site-section" >
        <div class="container" >


        <section class="vh-100" >
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="images/student.jpg" class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="{{route('Login-etud')}}" method="post">
          @if(Session::has('success'))
          <div class="alert alert-success">{{Session::get('success')}}</div>
          @endif
          @if(Session::has('fail'))
          <div class="alert alert-danger">{{Session::get('fail')}}</div>
          @endif
           @csrf 

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">connexion</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter votre adresse e-mail.." name="email" value="{{old('email')}}"/>
            <label class="form-label" for="form3Example3">Adresse e-mail</label>
          
            <span class="text-danger">@error('email') {{"e-mail est obligatoire!!!"}} @enderror</span>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter votre mot de passe" name="password" value="{{old('password')}}" />
            <label class="form-label" for="form3Example4">Mot de passe</label>
            
            <span class="text-danger">@error('password') {{"Mot passe est obligatoire!!!"}} @enderror</span>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
           

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Suivant</button>
            
          </div>

        </form>
      </div>
    </div>
  </div>
  
</section>
</div>
    </div>

 </div>


   @endsection