@extends('Admin.layoutAdmin')
@section('layoutADMIN')

<div class="container" >
    <div class="row">
        <div class="col-md-12">
            <h2>Modifier un enseignants</h2>
            
            
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
             @endif
            <form method="post" action="{{url('enrgProf/'.$dataPrf->id)}}">

               @csrf
             <input type="hidden" name="id" value="{{$dataPrf->id}}">
               
               <div class="md-3">
                <label class="form-lebel">CNE<strong style="color:red; font-size:190%; ">*</strong></label>
                <input type="text" class="form-control" name="cne" placeholder="Entrer Cne " value="{{$dataPrf->cne}}">
                @error('cne')
                    <div class="alert alert-danger" role="alert" >
                        <strong>{{'CNE obligatoire'}}</strong>
                    </div>
                @enderror
               </div>
               <div class="md-3">
                <label class="form-lebel">Nom<strong style="color:red; font-size:190%; ">*</strong></label>
                <input type="text" class="form-control" name="nom" placeholder="Entrer Nom " value="{{$dataPrf->nom}}">
                @error('nom')
                    <div class="alert alert-danger" role="alert" >
                        <strong>{{'Nom obligatoire'}}</strong>
                    </div>
                @enderror
               </div>
               <div class="md-3">
                <label class="required">E-mail<strong style="color:red; font-size:190%; ">*</strong></label>
                <input type="email" class="form-control" name="email" placeholder="Entrer l'e-mail "  value="{{$dataPrf->email}}">
                @error('email')
                    <div class="alert alert-danger" role="alert">
                        <strong>{{'E-mail obligatoire'}}</strong>
                    </div>
                @enderror
               </div>
               <div class="md-3">

                <label class="form-lebel">Date Naissance<strong style="color:red; font-size:190%; ">*</strong></label>
                <input type="date" class="form-control" name="naissance" id="txtDate" placeholder="Entrer La date de naissance " value="{{$dataPrf->naissance}}">

                @error('naissance')
                    <div class="alert alert-danger" role="alert" >
                        <strong>{{'Date Naissance obligatoire'}}</strong>
                    </div>
                @enderror
               </div>
               
               <div class="md-3">
                <label class="form-lebel">Module 1 <strong style="color:red; font-size:190%; ">*</strong> </label>
                <input type="text" class="form-control" name="module1" placeholder="Entrer Module 1 " value="{{$dataPrf->module1}}">
                @error('module1')
                    <div class="alert alert-danger" role="alert" >
                        {{'module1 obligatoire'}}
                    </div>
                @enderror
               </div>
               <div class="md-3">
                <label class="form-lebel">Module 2 <strong style="color:red; font-size:190%; ">*</strong> </label>
                <input type="text" class="form-control" name="module2" placeholder="Entrer Module 2 " value="{{$dataPrf->module2}}">
                @error('module2')
                    <div class="alert alert-danger" role="alert" >
                        {{'module2 obligatoire'}}
                    </div>
                @enderror
               </div>
               <div class="md-3">
                <label class="form-lebel">Module 3<strong style="color:red; font-size:190%; ">*</strong> </label>
                <input type="text" class="form-control" name="module3" placeholder="Entrer Module e " value="{{$dataPrf->module3}}">
                @error('module3')
                    <div class="alert alert-danger" role="alert" >
                        {{'module3 obligatoire'}}
                    </div>
                @enderror
               </div>
               <div class="md-3">
                <label class="form-lebel">Mot passe<strong style="color:red; font-size:190%; ">*</strong></label>
                <input type="text" class="form-control" name="password" placeholder="Entrer le mot passe" value="{{$dataPrf->password}}">
                @error('password')
                    <div class="alert alert-danger" role="alert" >
                        <strong>{{'Mot passe obligatoire'}}</strong>
                    </div>
                @enderror
               </div>
                  <br/>
               <button type="submit" class="btn btn-primary">Modifier</button>
               <a href="{{url('ListProf')}}" class="btn btn-danger">Annuler</a>
        

            </form>

        </div>
    </div>
</div>

<script>
$(function(){
    var dtToday = new Date();

    var month = 12;
    var day = 30;
    var year = dtToday.getFullYear() - 28;
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

    var maxDate= year + '-' + month + '-' + day;

    $('#txtDate').attr('max', maxDate);
});
</script>

@endsection