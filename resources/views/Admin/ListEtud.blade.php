@extends('Admin.layoutAdmin')

@section('layoutADMIN')
 


<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
  <form action="{{ url('deleteEtudiant')}}" method="POST">
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
   
     
  
         <!-- <a href="#" class="btn btn-primary">View All</a>-->
         
          
        
       </div>
       @if(Session::has('success'))
<div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
@endif
      </div>
   




<div class="x_content">
    <div class="row">
        <div class="col-sm-12">
          <div class="card-box table-responsive">
           
            <div class="card shadow-lg p-3 mb-5 bg-white rounded" >
              <div class="card-header"><a style="color: rgb(17, 153, 232); font-family: 'Lucida Console', 'Courier New', monospace">{{ __("Liste d'étudiants") }}</a><a  href="{{ url('ajouterEtudiant')}}" class="btn btn-success" style="float:right"><i class="fa fa-plus"></i></a></div>
  <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
    <thead>
    
              <tr>
                  <td>Apogée</td>
                  <td>CNE</td>
                  <td>NOM</td>
                  <td>Naissance</td>
                  <td>E-mail</td>
                  
                  <td></td>

              </tr>
          </thead>

          <tbody>
              @foreach ($data as $stu)
                  
             
              <tr>
                  <td><span class="status delivered">{{$stu->apoge}}</span></td>
                  <td>{{$stu->cne}}</td>
                  <td>{{$stu->nom}}</td>
                  <td>{{$stu->naissance}}</td>
                  <td>{{$stu->email}}</td>
                  
                  
                  <td><a href="{{ url('editerEtudiant/'.$stu->id)}}" class="btn btn-warning " style=" border-radius: 10px;"> <span class="glyphicon glyphicon-edit"></span> </a>  <button href="#" class="btn btn-danger  deleteEtudiantBtn" style=" border-radius: 10px;"  value="{{ $stu->id }}" data-toggle="modal" data-target="#deleteModal"> <span class="glyphicon glyphicon-trash"></span></button>  
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