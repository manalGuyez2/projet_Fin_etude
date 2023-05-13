@extends('Admin.layoutAdmin')
@section('layoutADMIN')

<div class="container" >
    <div class="row">
        <div class="col-md-12">
            <h2>Ajouter un étudiant</h2>
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
             @endif
            <form method="POST" action="{{url('save-student')}}">
               @csrf
               <div class="md-3">
                <label class="form-lebel">Apogée</label>
                <input type="text" class="form-control" name="apoge" placeholder="Entrer Apogée " value="{{old('apoge')}}">
                @error('apoge')
                    <div class="alert alert-danger" role="alert" >
                        {{'Apogée est obligatoire'}}
                    </div>
                @enderror
               
               </div>
               <div class="md-3">
                <label class="form-lebel">CNE</label>
                <input type="text" class="form-control" name="cne" placeholder="Entrer Cne " value="{{old('cne')}}">
                @error('cne')
                    <div class="alert alert-danger" role="alert" >
                        {{'Cne est obligatoire'}}
                    </div>
                @enderror
               </div>
               <div class="md-3">
                <label class="form-lebel">Nom</label>
                <input type="text" class="form-control" name="nom" placeholder="Entrer Nom " value="{{old('nom')}}">
                @error('nom')
                    <div class="alert alert-danger" role="alert" >
                        {{'Nom est obligatoire'}}
                    </div>
                @enderror
               </div>
               <div class="md-3">
                <label class="form-lebel">Date Naissance</label>
                <input type="date" class="form-control" name="naissance" placeholder="Entrer La date de naissance " value="{{old('naissance')}}">
                @error('naissance')
                    <div class="alert alert-danger" role="alert" >
                        {{'Date naissance est obligatoire'}}
                    </div>
                @enderror
               </div>
               <div class="md-3">
                <label class="form-lebel">E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="Entrer l'e-mail "  value="{{old('email')}}">
                @error('email')
                    <div class="alert alert-danger" role="alert">
                        {{'E-mail est obligatoire'}}
                    </div>
                @enderror
               </div>
               <div class="md-3">
                <label class="form-lebel">Mot passe</label>
                <input type="text" class="form-control" name="password" placeholder="Entrer le mot passe" value="{{old('password')}}">
                @error('password')
                    <div class="alert alert-danger" role="alert" >
                        {{'Mot passe est obligatoire'}}
                    </div>
                @enderror
               </div>
                  <br/>
               <button type="submit" class="btn btn-primary">Ajouter</button>
               <a href="{{url('etudiantList')}}" class="btn btn-danger">Arrière</a>
        

            </form>

        </div>
    </div>
</div>



@endsection