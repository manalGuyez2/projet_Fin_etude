@php( $dataCours = \App\Models\Cours::all() ) 
@php( $modules = \App\Models\Module::all() ) 
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
        <h5 class="modal-title" id="exampleModalLabel">entrer un fichier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          
        </button>
      </div>
      <div class="modal-body">
        
        <label for="nomCours">nom de cours</label>
        <input type="text" id="nomCours" class="form-control form-control-lg"
        placeholder="" name="nomCours" value=""/>
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
 
           <select id="IdModel" class="form-control" value="{{old('IdModel')}}"  name="IdModel">
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
<!--------------update---------->
<div class="modal fade" id="updateCours" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
     
  <form action="{{ url('update-cours')}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <input   id="id" value="" name="id" />
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
<!------supp COURS------------->
<!-----modaldeletcours---->
<div class="modal fade" id="deleteCoursModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
  <form action="{{ url('deleteCours')}}" method="POST">
      @csrf
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Etes-vous sùre ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          
        </button>
      </div>
      <div class="modal-body">
        <input   name="cours_delete_id" id="id">
        <h2> Sélectionez "supprimer" ci-dessous si vous souhaitez supprimer ce etudiant </h2>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit"  class="btn btn-danger ">Supprimer</button>
      </div>
  </form>
    </div>
  </div>
</div>
<!---modalTD---->
<div class="modal fade" id="ajoutTD" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
     
  <form action="{{url('saveTd')}}" method="POST" enctype="multipart/form-data">
      @csrf
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">entrer un fichier TD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          
        </button>
      </div>
      <div class="modal-body">
        
        <label for="nomTd">nom de Td </label>
        <input type="text" id="nomTd" class="form-control form-control-lg"
        placeholder="" name="nomTd" value=""/>
        @error('nomTd')
        <div class="alert alert-danger" role="alert" >
            {{'nomTd est obligatoire'}}
        </div>
    @enderror
      
          <label for="tdpdf">Select a file:</label>
          <input type="file" id="tdpdf" name="tdpdf">
          @error('tdpdf')
          <div class="alert alert-danger" role="alert" >
              {{'tdpdf est obligatoire'}}
          </div>
           @enderror

   
           <label class="form-lebel" for="IdModul" >choisir module nom:</label>
 
           <select id="IdModul" class="form-control" value="{{old('IdModul')}}"  name="IdModul">
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
<!---------------TD---------------->
<div class="modal fade" id="deleteTd" tabindex="-1"  >
  <div class="modal-dialog">
    <div class="modal-content">
  <form action="{{ url('deleteTd')}}" method="POST">
      @csrf
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Etes-vous sùre ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          
        </button>
      </div>
      <div class="modal-body">
        <input   name="td_delete_id" id="id">
        <h2> Sélectionez "supprimer" ci-dessous si vous souhaitez supprimer ce enseignant </h2>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit"  class="btn btn-danger ">Supprimer</button>
      </div>
  </form>
    </div>
  </div>
</div>
<!--------------update---------->
<div class="modal fade" id="updateTD" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
     
  <form action="{{ url('update-td')}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <input   id="id" value="" name="id" />
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

<!------modalExam---->
<div class="modal fade" id="ajoutExam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
     
  <form action="{{url('saveExam')}}" method="POST" enctype="multipart/form-data">
      @csrf
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">entrer un fichier Exam</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          
        </button>
      </div>
      <div class="modal-body">
        
        <label for="nomExam">nom de Exam </label>
        <input type="text" id="nomExam" class="form-control form-control-lg"
        placeholder="" name="nomExam" value=""/>
        @error('nomExam')
        <div class="alert alert-danger" role="alert" >
            {{'nomExam est obligatoire'}}
        </div>
    @enderror
      
          <label for="exampdf">Select a file:</label>
          <input type="file" id="exampdf" name="exampdf">
          @error('exampdf')
          <div class="alert alert-danger" role="alert" >
              {{'exampdf est obligatoire'}}
          </div>
           @enderror

   
           <label class="form-lebel" for="IdModul" >choisir module nom:</label>
 
           <select id="IdModul" class="form-control" value="{{old('IdModul')}}"  name="IdModul">
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
<!---------------DELETE EXAM------------>
<div class="modal fade" id="deleteExam" tabindex="-1"  >
  <div class="modal-dialog">
    <div class="modal-content">
  <form action="{{ url('deleteExam')}}" method="POST">
      @csrf
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Etes-vous sùre ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          
        </button>
      </div>
      <div class="modal-body">
        <input name="exam_delete_id" id="id">
        <h2> Sélectionez "supprimer" ci-dessous si vous souhaitez supprimer ce enseignant </h2>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit"  class="btn btn-danger ">Supprimer</button>
      </div>
  </form>
    </div>
  </div>
</div>

@yield('coursShow')


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
  </script>
<!------------td delete------------->
<!--<script>
  $(document).ready(function (){
    $('.deleteTdBtn').click(function (e){
  //  $(document).on('click','.deleteEtudiantBtn',function(e){
      e.preventDefault();
   
    

    var id = $(this).val();
    $('#id').val(id);

    $('#deleteTd').modal('show');
  });
});
</script>
--------------

<script>
  $(document).ready(function (){
    $('.updateCoursBtn').click(function (e){
  //  $(document).on('click','.deleteEtudiantBtn',function(e){
      e.preventDefault();
   
    

    var id = $(this).val();
    $('#id').val(id);

    $('#updateCours').modal('show');

  });
});
</script>
-----update Cours-------
<script>
  $(document).on('click', '.updCours' ,function (){

    var _this = $(this).parents('tr');
$('#u_nom').val(_this.find('.nomCours').text());
$('#u_file').val(_this.find('.courpdf').text());
$('#u_idModule').val(_this.find('.IdModel').text());
   
});
</script>
<script >
       
  $(document).ready(function () {
      
      $('body').on('click', '#updateCours', function () {
        var userURL = $(this).data('url');
        $.get(userURL, function (data) {
            $('#userShowModal').modal('show');
            $('#nomCours').text(data.nomCours);
            $('#courpdf').text(data.courpdf);
            $('#IdModel').text(data.IdModel);
        })
     });
      
  });
 


//------------td delete----------

$(document).ready(function (){
$('.deleteTdBtn').click(function (e){
//  $(document).on('click','.deleteEtudiantBtn',function(e){
  e.preventDefault();



var id = $(this).val();
$('#id').val(id);

$('#deleteTd').modal('show');
});
});
//----------------delete exam
$(document).ready(function (){
$('.deleteExamBtn').click(function (e){
//  $(document).on('click','.deleteEtudiantBtn',function(e){
  e.preventDefault();



var id = $(this).val();
$('#id').val(id);

$('#deleteEXam').modal('show');
});
});
</script>-->

@endsection