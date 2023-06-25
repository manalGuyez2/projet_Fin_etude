@php( $profs = \App\Models\Prof::all() )
@extends('Admin.layoutAdmin')
@section('layoutADMIN')

<div class="container" >
    <div class="row">
        <div class="col-md-12">
            <h2>Ajouter un Module</h2>
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
             @endif
            <form method="POST" action="{{url('save-Module')}}">
               @csrf
               <div class="md-3">
                <label class="form-lebel">Nom</label>
                <input type="text" class="form-control" name="name" placeholder="Entrer Nom du module " value="{{old('name')}}">
                @error('name')
                    <div class="alert alert-danger" role="alert" >
                        {{'Nom est obligatoire'}}
                    </div>
                @enderror
               
               </div>
             
               <div class="md-3">
               <label class="form-lebel" for="nameSemester" >choisir semestre:</label>

                <select id="semester" class="form-control" name="nameSemester" value="{{old('nameSemester')}}">
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
                 <option value="S4">S4</option>
                 <option value="S5">S5</option>
                 <option value="S6">S6</option>
                  </select>
                  @error('cne')
                    <div class="alert alert-danger" role="alert" >
                        {{'semestre est obligatoire'}}
                    </div>
                @enderror
                </div> 
                <div class="md-3">
                    <label class="form-lebel" for="nameProf" >choisir semestre:</label>
     
                     <select id="nameProf" class="form-control" name="nameProf" value="{{old('nameProf')}}">
                        @foreach ($profs as $prof)
                            
                       
                     <option value="{{$prof->nom}}">{{$prof->nom}}</option>
                     @endforeach
                       </select>
                       @error('nameProf')
                         <div class="alert alert-danger" role="alert" >
                             {{'prof est obligatoire'}}
                         </div>
                     @enderror
                     </div> 
              
               
                  <br/>
               <button type="submit" class="btn btn-primary">Ajouter</button>
               <a href="{{url('listeModule')}}" class="btn btn-danger">Annuler</a>
        

            </form>

        </div>
    </div>
</div>




@endsection