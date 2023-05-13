@extends('layout')

@section('content')
 <div class="site-wrap">   
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Espace d'etudiant</h2>
            
    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="/">    Accueil   </a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">connexion</span>
      </div>
    </div>
            </div>
          </div>
        </div>
      </div> 
    


    <div class="site-section">
        <div class="container">


        <section class="vh-100">
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
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Envoyer</button>
            
          </div>

        </form>
      </div>
    </div>
  </div>
  
</section>
</div>
    </div>

    @yield('content')



   @endsection