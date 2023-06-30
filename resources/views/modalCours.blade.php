@extends('test')
@section('modalCours')
<div class="modal fade" id="ajoutcours" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
       
        @if(Session::has('success'))
              <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
               @endif
    <form action="{{url('save-cours')}}" method="POST" enctype="multipart/form-data">
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
      <label for="IdModel">ID de model</label>
      <input type="number" id="IdModel" class="form-control form-control-lg"
      placeholder="" name="IdModel" value=""/>
      @error('IdModel')
      <div class="alert alert-danger" role="alert" >
          {{'IdModel est obligatoire'}}
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
          <input type="hidden"  name="cours_delete_id" id="id">
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
  
@endsection