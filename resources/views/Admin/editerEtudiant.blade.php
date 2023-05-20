@extends('Admin.layoutAdmin')
@section('layoutADMIN')
<div class="container" >
    <div class="row">
        <div class="col-md-12">
            <h2>Modifier un étudiant</h2>
            
            
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
             @endif
            <form method="POST" action="{{url('enrgEtudiant/'.$data->id)}}">

               @csrf
             <input type="hidden" name="id" value="{{$data->id}}">
               <div class="md-3">
                <label class="form-lebel">Apogée</label>
                <input type="text" class="form-control" name="apoge" placeholder="Entrer Apogée " value="{{$data->apoge}}">
                @error('apoge')
                    <div class="alert alert-danger" role="alert" >
                        {{'Apogée est obligatoire'}}
                    </div>
                @enderror
               </div>
               <div class="md-3">
                <label class="form-lebel">CNE</label>
                <input type="text" class="form-control" name="cne" placeholder="Entrer Cne " value="{{$data->cne}}">
                @error('cne')
                    <div class="alert alert-danger" role="alert" >
                        {{'Cne est obligatoire'}}
                    </div>
                @enderror
               </div>
               <div class="md-3">
                <label class="form-lebel">Nom</label>
                <input type="text" class="form-control" name="nom" placeholder="Entrer Nom " value="{{$data->nom}}">
                @error('nom')
                    <div class="alert alert-danger" role="alert" >
                        {{'Nom est obligatoire'}}
                    </div>
                @enderror
               </div>
               <div class="md-3">
                <label class="form-lebel">Date Naissance</label>
                <input type="date" class="form-control" name="naissance" id="txtDate" placeholder="Entrer La date de naissance " value="{{$data->naissance}}">
                @error('naissance')
                    <div class="alert alert-danger" role="alert" >
                        {{'Date naissance est obligatoire'}}
                    </div>
                @enderror
               </div>
               <div class="md-3">
                <label class="form-lebel">E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="Entrer l'e-mail "  value="{{$data->email}}">
                @error('email')
                    <div class="alert alert-danger" role="alert">
                        {{'E-mail est obligatoire'}}
                    </div>
                @enderror
               </div>
               <div class="md-3">
                <label class="form-lebel">Mot passe</label>
                <input type="text" class="form-control" name="password" placeholder="Entrer le mot passe" value="{{$data->password}}">
                @error('password')
                    <div class="alert alert-danger" role="alert" >
                        {{'Mot passe est obligatoire'}}
                    </div>
                @enderror
               </div>
                  <br/>
               <button type="submit" class="btn btn-primary">Modifier</button>
               <a href="{{url('etudiantList')}}" class="btn btn-danger">Arrière</a>
        

            </form>

        </div>
    </div>
</div>

<script>
$(function(){
    var dtToday = new Date();

    var month = 12;
    var day = 30;
    var year = dtToday.getFullYear() - 17;
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

    var maxDate= year + '-' + month + '-' + day;

    $('#txtDate').attr('max', maxDate);
});
</script>
@endsection