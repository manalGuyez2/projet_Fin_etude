@extends('layout')
@section('activePrmt')
class="active"
@endsection
@section('navBar')
<div class="mr-auto">
    <nav class="site-navigation position-relative text-right" role="navigation">
      <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
        <li class="active" >
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
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              
            
    <div class="custom-breadcrumns border-bottom">
      <div class="container">
  
        
       
  
        <h2 class="mb-0">Changer le mot de passe</h2>
      </div>
    </div>
            </div>
          </div>
        </div>
        
    </div>
    <div class="site-section">
<div class="container">
   
        <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Changer de mot de passe') }}</div>
    
                        <form action="{{ route('update-password-prof') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @elseif (session('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif
                               
                                <div class="mb-3">
                                    <label for="oldPasswordInput" class="form-label">Mot de passw actuel</label>
                                    <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                        placeholder="">
                                    @error('old_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="newPasswordInput" class="form-label">Nouveau mot de pass</label>
                                    <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                        placeholder="">
                                    @error('new_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="confirmNewPasswordInput" class="form-label">Retapez le nouveau mot de pass</label>
                                    <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                                        placeholder="">
                                </div>
    
                            </div>
    
                            <div class="card-footer">
                                <button class="btn-success text-white">Changer le mot de passe</button>
                            </div>
    
                        </form>
                    </div>
                </div>
            </div>
   
</div>
</div>
</div>
@endsection