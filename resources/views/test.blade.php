@extends('layout')
@section('navBar')
@php( $dataCours = \App\Models\Cours::all() ) 
@php( $modules = \App\Models\Module::all() ) 
@php( $dataTDs = \App\Models\Td::all() )
@php( $dataExams = \App\Models\Exam::all() )
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
        
      </ul>                                                                                                                                                                                                                                                                                          </ul>
    </nav>

  </div>
@endsection

@section('content')




 <!-----modalcours----->
<div class="modal fade" id="ajoutcours" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
     
  <form action="{{url('savecours')}}" method="POST" enctype="multipart/form-data">
      @csrf
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un fichier de cours</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          
        </button>
      </div>
      <div class="modal-body">
        
        <label for="nomCours">Titre</label>
        <input type="text" id="nomCours" class="form-control form-control-lg"
        placeholder="" name="nomCours" value=""/>
        @error('nomCours')
        <div class="alert alert-danger" role="alert" >
            {{'nomCours est obligatoire'}}
        </div>
    @enderror
      
          <label for="courpdf">Sélectionner un fichier</label>
          <input type="file" id="courpdf" name="courpdf">
          @error('courpdf')
          <div class="alert alert-danger" role="alert" >
              {{'courpdf est obligatoire'}}
          </div>
           @enderror

   
          
    
    
      
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit"  class="btn btn-danger ">Ajouter</button>
      </div>
  </form>
    </div>
  </div>
</div>
 



<!-----modaldeletcours---->
<div class="modal fade" id="deleteCoursModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
  <form action="{{ url('deleteCours')}}" method="POST">
      @csrf
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Etes-vous sùre ?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          
        </button>
      </div>
      <div class="modal-body">
        <input  type="hidden"  name="cours_delete_id" id="id">
        <h2> Sélectionez "supprimer" ci-dessous si vous souhaitez supprimer ce Cours </h2>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <button type="submit"  class="btn btn-danger ">Supprimer</button>
      </div>
  </form>
    </div>
  </div>
</div>

<!---------update------>
<div class="modal fade" id="updateCoursModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
     
  <form action="{{ url('update-cours')}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <input   id="idupdt" value="" name="idupdt" />
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">entrer un fichier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          
        </button>
      </div>
      <div class="modal-body">
        
        <label for="nomCours">nom de cours</label>
        <input type="text" id="nomCours" class="form-control"
        name="nomCours"  required/>
        @error('nomCours')
        <div class="alert alert-danger" role="alert" >
            {{'nomCours est obligatoire'}}
        </div>
    @enderror
      
          <label for="courpdf">Select a file:</label>
          <input type="file" id="courpdf" name="courpdf">
          @error('courpdf')
          <div class="alert alert-danger" role="alert" >
              {{'courpdf est obligatoire'}}
          </div>
           @enderror

   
           <label class="form-lebel" for="IdModel" >choisir module nom:</label>
 
           <select id="IdModel" class="form-control" value=""  name="IdModel">
              @foreach ($modules as $module)
                  
             
               <option value="{{$module->id}}">{{$module->name}}</option>
          
           @endforeach
           
             </select>
    
    
      
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit"  class="btn btn-danger ">envoyer</button>
      </div>
  </form>
    </div>
  </div>
</div>
<!-----------ajouter TD--------->
<div class="modal fade" id="ajoutTD" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
     
  <form action="{{url('saveTd')}}" method="POST" enctype="multipart/form-data">
      @csrf
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un fichier TD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          
        </button>
      </div>
      <div class="modal-body">
        
        <label for="nomTd">Titre </label>
        <input type="text" id="nomTd" class="form-control form-control-lg"
        placeholder="" name="nomTd" value=""/>
        @error('nomTd')
        <div class="alert alert-danger" role="alert" >
            {{'nomTd est obligatoire'}}
        </div>
    @enderror
      
          <label for="tdpdf">Sélectionner un fichier:</label>
          <input type="file" id="tdpdf" name="tdpdf">
          @error('tdpdf')
          <div class="alert alert-danger" role="alert" >
              {{'tdpdf est obligatoire'}}
          </div>
           @enderror

   
          
    
    
      
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit"  class="btn btn-danger ">envoyer</button>
      </div>
  </form>
    </div>
  </div>
</div>
<!------delete TD------------>
<div class="modal fade" id="deleteTdModal" tabindex="-1" aria-labelledby="exampleModalLabelTd" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
  <form action="{{ url('deleteTd')}}" method="POST">
      @csrf
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelTd">Etes-vous sùre ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          
        </button>
      </div>
      <div class="modal-body">
        <input  type="hidden"  name="td_delete_id" id="idTd">
        <h2> Sélectionez "supprimer" ci-dessous si vous souhaitez supprimer ce Td </h2>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit"  class="btn btn-danger ">Supprimer</button>
      </div>
  </form>
    </div>
  </div>
</div>
    
<!-------------Ajouter Exam ----------->
<div class="modal fade" id="ajoutExam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
     
  <form action="{{url('saveExam')}}" method="POST" enctype="multipart/form-data">
      @csrf
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un fichier Exam</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          
        </button>
      </div>
      <div class="modal-body">
        
        <label for="nomExam">Titre:</label>
        <input type="text" id="nomExam" class="form-control form-control-lg"
        placeholder="" name="nomExam" value=""/>
        @error('nomExam')
        <div class="alert alert-danger" role="alert" >
            {{'nomExam est obligatoire'}}
        </div>
    @enderror
      
          <label for="exampdf">Sélectionner un fichier:</label>
          <input type="file" id="exampdf" name="exampdf">
          @error('exampdf')
          <div class="alert alert-danger" role="alert" >
              {{'exampdf est obligatoire'}}
          </div>
           @enderror

   
          
    
    
      
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit"  class="btn btn-danger ">envoyer</button>
      </div>
  </form>
    </div>
  </div>
</div>
 <!-----modaldeletExam---->
<div class="modal fade" id="deleteModalExam" tabindex="-1" aria-labelledby="exampleModalLabelExam" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
  <form action="{{ url('deleteExam')}}" method="POST">
      @csrf
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelExam">Etes-vous sùre ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          
        </button>
      </div>
      <div class="modal-body">
        <input  type="hidden" name="exam_delete_id" id="idExam">
        <h2> Sélectionez "supprimer" ci-dessous si vous souhaitez supprimer ce examen </h2>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit"  class="btn btn-danger ">Supprimer</button>
      </div>
  </form>
    </div>
  </div>
</div>     

<div class="site-section">
  <div class="container">
    <div class="row">
   
      <h4 _ngcontent-oyd-c71="" class="page__title-3">Conception Orientée Objets(UML)</h4>
      <div class="col-8">
        
      <div class="wraper ">
        
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
         @endif
        <input type="radio" name="slider" checked id="home">
        <input type="radio" name="slider" id="blog">
        <input type="radio" name="slider" id="code">
        <nav>
      <label for="home" class="home"><i class="fa fa-book"></i>Cours          
       </label>
      <label for="blog" class="blog"><i class="fas fa-blog"></i>TD    
      </label>
      <label for="code" class="code"><i class="fas fa-code"></i>Examen    
      </label>
      <div class="slider"></div>
    </nav>
    <section>
      <div class="cont content-1">
     <!--   <div class="title">This is a Home content</div>-->
        
             
            <div class="partie-1">
      
      
      <!------LIST------>
      <div class="details">
      
        <div class="recentOrders">
          <h2 >
            <span>Liste des cours</span>
        </h2>
                <a  class="btn btn-success  text-light" style="float:right"><i class="fa fa-plus"data-toggle="modal" data-target="#ajoutcours"></i></a>
              
             </div>
      
            </div>
         
      <br>
      
      
      
      <div class="x_content">
          <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
       
        <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
          <thead>
          
                    <tr>
                        <td>Titre</td>
                        <td>Fichier cours</td>
                        <td>Date</td>
                        <td></td>
      
                    </tr>
                </thead>
      
                <tbody>
                    
                  @foreach ($dataCours as  $cou)    
                   
                  <tr>
                    
                    <td>{{$cou->nomCours}}</td>
                    <td><a href="{{url('/view',$cou->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="50" fill="currentColor" class="bi bi-file-pdf-fill" viewBox="0 0 16 16">
                      <path d="M5.523 10.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.035 21.035 0 0 0 .5-1.05 11.96 11.96 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.888 3.888 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 4.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z"/>
                      <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm.165 11.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.64 11.64 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.707 19.707 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z"/>
                    </svg></a></td>
                    <td>{{$cou->updated_at}}</td>
                    <td> <a href="{{ url('edit-cours/'.$cou->id) }}"  class="btn btn-warning " style=" border-radius: 10px;"> <span class="glyphicon glyphicon-edit"></span></a> <button type="button" class="btn btn-danger deleteCoursBtn " value="{{ $cou->id }}" data-toggle="modal" data-target="#deleteCoursModal"style=" border-radius: 10px;" > <span class="glyphicon glyphicon-trash"></span></a>
                      {{--<a href="{{ url('deleteEtudiant/'.$stu->id)}}"  class="btn btn-danger deleteUser">Supprimer</a>--}}</td>
                    </td>
                </tr>
                  @endforeach
                     
                
                </tbody>
                
            </table>       
          </div>
     
            
                
              </div>
          </div>
          
              </div>
          </div>
      </div>
      
<script src='https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
<!------------------------------>
      
      <script>
      $(document).ready(function (){
        $('.deleteCoursBtn').click(function (e){
      //  $(document).on('click','.deleteCoursBtn',function(e){
          e.preventDefault();
       
        
  
        var id = $(this).val();
        $('#id').val(id);
  
        $('#deleteCoursModal').modal('show');
      });
    });


    $(document).ready(function (){
        $('.deleteTdBtn').click(function (e){
     
          e.preventDefault();
       
        
  
        var id = $(this).val();
        $('#idTd').val(id);
  
        $('#deleteTdModal').modal('show');
      });
    });

  </script>
     


      <div class="cont content-2">
       
               
              
                   <div class="partie-1">
                  <!------LIST------>
                  <div class="details">
                  
                    <div class="recentOrders">
                      <h2 class="">
                        <span>Liste des TD</span>
                    </h2>
                            <a class="btn btn-success text-light" style="float:right"><i class="fa fa-plus"data-toggle="modal" data-target="#ajoutTD"></i></a>
                          
                         </div>
                  
                        </div>
                     
                  <br>
                  
                  
                  
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                   
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                      
                                <tr>
                                    <td>Titre</td>
                                    <td>Fichier TD</td>
                                    <td>date</td>
                                    <td></td>
                  
                                </tr>
                            </thead>
                  
                            <tbody>
                                
                              @foreach ($dataTDs as $td)
                    
                     
                              <tr>
                                 
                                  
                                  <td>{{$td->nomTd}}</td>
                                  <td><a href="{{url('/viewTd',$td->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="50" fill="currentColor" class="bi bi-file-pdf-fill" viewBox="0 0 16 16">
                     
                                    <path d="M5.523 10.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.035 21.035 0 0 0 .5-1.05 11.96 11.96 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.888 3.888 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 4.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z"/>
                                    <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm.165 11.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.64 11.64 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.707 19.707 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z"/>
                                  </svg> </a></td>
                                  <td>{{$td->updated_at}}</td>
                                  
                                  
                                    <td><a  href="{{ url('edit-td/'.$td->id) }}" class="btn btn-warning " style=" border-radius: 10px;"> <span class="glyphicon glyphicon-edit"></span></a>  <button type="button" class="btn btn-danger deleteTdBtn " value="{{ $td->id }}" data-toggle="modal" data-target="#deleteTdModal" style=" border-radius: 10px;" > <span class="glyphicon glyphicon-trash"></span></button>
                                      {{--<a href="{{ url('deleteEtudiant/'.$stu->id)}}"  class="btn btn-danger deleteUser">Supprimer</a>--}}</td>
                  
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </table>       
                 </div>
          
      
      </ul>
     </div>
                      </div>
                  </div>
                   </div>
      </div>
      <div class="cont content-3">
        
          
           <div class="partie-1">
          <!------LIST------>
          <div class="details">
          
            <div class="recentOrders">
              <h2 class="">
                <span>Liste des Examen </span>
            </h2>
                    <a  class="btn btn-success text-light" style="float:right"><i class="fa fa-plus"data-toggle="modal" data-target="#ajoutExam"></i></a>
                  
                 </div>
          
                </div>
             
          <br>
          
          
          
          <div class="x_content">
              <div class="row">
                  <div class="col-sm-12">
                    <div class="card-box table-responsive">
           
            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
              <thead>
              
                        <tr>
                            <td>Titre</td>
                            <td>Fichier Examen </td>
                            <td>date</td>
                            <td></td>
          
                        </tr>
                    </thead>
          
                    <tbody>
                        
                            
                      @foreach ($dataExams as $exam)
                    
                     
                      <tr>
                         
                          
                          <td>{{$exam->nomExam}}</td>
                          <td><a href="{{url('/viewExam',$exam->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="50" fill="currentColor" class="bi bi-file-pdf-fill" viewBox="0 0 16 16">
                            <path d="M5.523 10.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.035 21.035 0 0 0 .5-1.05 11.96 11.96 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.888 3.888 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 4.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z"/>
                            <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm.165 11.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.64 11.64 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.707 19.707 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z"/>
                          </svg></a></td>
                          
                          <td>{{$exam->updated_at}}</td>
                            <td><a href="{{ url('edit-exam/'.$exam->id) }}" class="btn btn-warning " style=" border-radius: 10px;"> <span class="glyphicon glyphicon-edit"></span></a>  <button  class="btn btn-danger deleteExamBtn" value="{{ $exam->id }}" data-toggle="modal" data-target="#deleteModalExam" style=" border-radius: 10px;" > <span class="glyphicon glyphicon-trash"></span></button>
                              {{--<a href="{{ url('deleteEtudiant/'.$stu->id)}}"  class="btn btn-danger deleteUser">Supprimer</a>--}}</td>
          
                        </tr>
                         
                        @endforeach
                    
                    </tbody>
                    
                </table>       
         </div>
     
                  </div>
              </div>
          </div>
      </div>
      </div>
      <script>
      $(document).ready(function (){
        $('.deleteExamBtn').click(function (e){
     
          e.preventDefault();
       
        
  
        var idExam = $(this).val();
        $('#idExam').val(idExam);
  
        $('#deleteModalExam').modal('show');
      });
    });

  </script>
    </section>
  </div>
  </div>
  <div class="col-4">
    <img src="images/uml1.png" class="img-fluid" alt="Sample image">
  </div>
  </div>
</div>
</div>


@endsection