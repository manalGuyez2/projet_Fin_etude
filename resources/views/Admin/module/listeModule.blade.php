@php( $dataModule = \App\Models\Module::all() )
@extends('Admin.layoutAdmin')

@section('layoutADMIN')
 


<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
  <form action="{{ url('deleteModule')}}" method="POST">
      @csrf
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Etes-vous sùre ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden"  name="etudiant_delete_id" id="id">
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

<!------LIST------>
<div class="details">

  <div class="recentOrders">
   
     <h2 class="section-title-underline mb-5">
      <span>Liste d'étudiants</span>
  </h2>
      
         <!-- <a href="#" class="btn btn-primary">View All</a>-->
         
          <a href="{{ url('ajouterModule')}}" class="btn btn-success" style="float:right"><i class="fa fa-plus"></i></a>
        
       </div>
       @if(Session::has('success'))
<div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
@endif
      </div>
   
<br>

<h1>__________________________________</h1>

<div class="x_content">
    <div class="row">
        <div class="col-sm-12">
          <div class="card-box table-responsive">
 
  <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
    <thead>
    
              <tr>
                <td>id</td>
                  <td>Nom Module</td>
                  <td>Semestre</td>
                  <td>NOM Enseignant</td>
                  
                  <td></td>

              </tr>
          </thead>

          <tbody>
            @foreach ($dataModule as $ensg)
                
           
            <tr>
              <td>{{$ensg->id}}</td>
                <td>{{$ensg->name}}</td>
                <td>{{$ensg->nameSemester}}</td>
                
                <td>{{$ensg->nameProf}}</td>
               
                <td><a href="{{ url('editerModule/'.$ensg->id)}}" class="btn btn-primary">Editer</a> | <button type="button" class="btn btn-danger deleteEtudiantBtn " value="{{ $ensg->id }}" data-toggle="modal" data-target="#deleteModal">Supprimer</button>
                  {{--<a href="{{ url('deleteEtudiant/'.$stu->id)}}"  class="btn btn-danger deleteUser">Supprimer</a>--}}</td>

            </tr>
              @endforeach
        
        </tbody>
          
      </table>
      
          </div>
        </div>
    </div>
  </div>
  <script>
    $(document).ready(function (){
      $('.deleteEtudiantBtn').click(function (e){
    //  $(document).on('click','.deleteEtudiantBtn',function(e){
        e.preventDefault();
     
      

      var id = $(this).val();
      $('#id').val(id);

      $('#deleteModal').modal('show');
    });
  });
  </script>

@endsection