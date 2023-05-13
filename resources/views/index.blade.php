@extends('layout')
@section('activeHomme')
class="active"
@endsection
@section('content')

   
     
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="#">Accueil</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">General</span>
      </div>
    </div>

    
    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <img src="images/FSaccueil.png" alt="Image" class="img-fluid"> 
                </div>
                <div class="col-lg-5 ml-auto align-self-center">
                    <h2 class="section-title-underline mb-5">
                        <span>Présentation</span>
                    </h2>
                    <p>Le département d'informatique est l'un des départements géré par La Faculté des Sciences de l'Université Abdelmalek Essaadi sous la direction d'un doyen, et par un chef de département, assisté par d'autres responsables chacun d'eux avec ses propres fonctions par rapport à son service.</p>
                </div>
            </div>
            <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                        <img src="images/OIP.jpeg" alt="Image" class="img-fluid"> 
                    </div>
                    <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
                        <h2 class="section-title-underline mb-5">
                            <span>Département Informatique</span>
                        </h2>
                        <p>Chef de département : Pr. AMJAD SOUAD</p>

                         <p > E-mail:<i class="fa fa-envelope "></i> <a class="text-info" href="mailto:fs.tetouan.contact@gmail.com"> s.amjad@uae.ac.ma</a></p>
                        
                    </div>
                </div>
        </div>
    </div>
       

 
    
    <div class="site-section ftco-subscribe-1" style="background-image: url('images/bg_1.jpg')">
      
    </div> 


@endsection