@extends('Admin.layoutAdmin')
@section('etuudActive')
class="active"
@endsection
@section('layoutADMIN')

<div class="container" >
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded" >
                <div class="card-header"> <h2>Modifier un étudiant</h2></div>
         
            
            
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
             @endif
            <form method="post" action="{{url('enrgEtudiant/'.$data->id)}}">

               @csrf
             <input type="hidden" name="id" value="{{$data->id}}">
               <div class="md-3">
                <label class="form-lebel">Apogé <strong style="color:red; font-size:190%; ">*</strong> </label>
                <input type="text" class="form-control" name="apoge" placeholder="Entrer Apogée " value="{{$data->apoge}}">
                @error('apoge')
                    <div class="alert alert-danger" role="alert" >
                        {{'apoge obligatoire'}}
                    </div>
                @enderror
               </div>
               <div class="md-3">
                <label class="form-lebel">CNE<strong style="color:red; font-size:190%; ">*</strong></label>
                <input type="text" class="form-control" name="cne" placeholder="Entrer Cne " value="{{$data->cne}}">
                @error('cne')
                    <div class="alert alert-danger" role="alert" >
                        <strong>{{'CNE obligatoire'}}</strong>
                    </div>
                @enderror
               </div>
               <div class="md-3">
                <label class="form-lebel">Nom<strong style="color:red; font-size:190%; ">*</strong></label>
                <input type="text" class="form-control" name="nom" placeholder="Entrer Nom " value="{{$data->nom}}">
                @error('nom')
                    <div class="alert alert-danger" role="alert" >
                        <strong>{{'Nom obligatoire'}}</strong>
                    </div>
                @enderror
               </div>
               <div class="md-3">

                <label class="form-lebel">Date Naissance<strong style="color:red; font-size:190%; ">*</strong></label>
                <input type="date" class="form-control" name="naissance" placeholder="Entrer La date de naissance " value="{{$data->naissance}}">

                @error('naissance')
                    <div class="alert alert-danger" role="alert" >
                        <strong>{{'Date Naissance obligatoire'}}</strong>
                    </div>
                @enderror
               </div>
               <div class="md-3">
                <label class="required">E-mail<strong style="color:red; font-size:190%; ">*</strong></label>
                <input type="email" class="form-control" name="email" placeholder="Entrer l'e-mail "  value="{{$data->email}}">
                @error('email')
                    <div class="alert alert-danger" role="alert">
                        <strong>{{'E-mail obligatoire'}}</strong>
                    </div>
                @enderror
               </div>
               <div class="md-3">
                <label class="form-lebel">Mot passe<strong style="color:red; font-size:190%; ">*</strong></label>
                <input type="text" class="form-control" name="password" placeholder="Entrer le mot passe" >
                @error('password')
                    <div class="alert alert-danger" role="alert" >
                        <strong>{{'Mot passe obligatoire'}}</strong>
                    </div>
                @enderror
               </div>
                  <br/>
               <button type="submit" class="btn btn-primary">Modifier</button>
               <a href="{{url('etudiantList')}}" class="btn btn-danger">Annuler</a>
        

            </form>

        </div>
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