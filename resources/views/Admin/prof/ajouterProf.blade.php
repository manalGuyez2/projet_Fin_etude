@extends('Admin.layoutAdmin')
@section('layoutADMIN')

<div class="container" >
    <div class="row">
        <div class="col-md-12">
            <h2>Ajouter un enseignant</h2>
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
             @endif
            <form method="POST" action="{{url('save-Prof')}}">
               @csrf
               
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
             <label class="form-lebel">E-mail</label>
             <input type="email" class="form-control" name="email" placeholder="Entrer e-mail "  value="{{old('email')}}">
             @error('email')
                 <div class="alert alert-danger" role="alert">
                     {{'E-mail est obligatoire'}}
                 </div>
             @enderror
            </div>
               <div class="md-3">
                <label class="form-lebel">Date Naissance</label>
                <input type="date" class="form-control datepicker" name="naissance" id="txtDate" placeholder="Entrer La date de naissance " value="{{old('naissance')}}">
                @error('naissance')
                    <div class="alert alert-danger" role="alert" >
                        {{'Date naissance est obligatoire'}}
                    </div>
                @enderror
            </div>
            <div class="md-3">
             <label class="form-lebel">module 1</label>
             <input type="text" class="form-control" name="module1" placeholder="Entrer module 1 "  value="{{old('module1')}}">
             @error('module1')
                 <div class="alert alert-danger" role="alert">
                     {{'module 1 est obligatoire'}}
                 </div>
             @enderror
            </div>
        
        <div class="md-3">
         <label class="form-lebel">module 2</label>
         <input type="text" class="form-control" name="module2" placeholder="Entrer module 2 "  value="{{old('module2')}}">
         @error('module2')
             <div class="alert alert-danger" role="alert">
                 {{'module 2 est obligatoire'}}
             </div>
         @enderror
        </div>
    
     <div class="md-3">
     <label class="form-lebel">module 3</label>
     <input type="text" class="form-control" name="module3" placeholder="Entrer module 3 "  value="{{old('module3')}}">
     @error('module3')
         <div class="alert alert-danger" role="alert">
             {{'module 3 est obligatoire'}}
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
            </div>
    </div>
                  <br/>
               <button type="submit" class="btn btn-primary">Ajouter</button>
               <a href="{{url('ListProf')}}" class="btn btn-danger">Annuler</a>
        

            </form>

        </div>
    </div>
</div>




@endsection