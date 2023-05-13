@extends('Admin.layoutAdmin')

@section('layoutADMIN')
 

<!------LIST------>
<div class="details">

  <div class="recentOrders">
   
     <h2 class="section-title-underline mb-5">
      <span>Liste d'étudiants</span>
  </h2>
      
         <!-- <a href="#" class="btn btn-primary">View All</a>-->
         
          <a href="{{ url('ajouterEtudiant')}}" class="btn btn-success" style="float:right"><i class="fa fa-plus"></i></a>
        
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
 
  <table id="datatable" class="table table-striped table-bordered" style="width:100%">
    <thead>
    
              <tr>
                  <td>Apogée</td>
                  <td>CNE</td>
                  <td>NOM</td>
                  <td>Naissance</td>
                  <td>E-mail</td>
                  <td>Mot passe </td>
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
                  <td>{{$stu->password}}</td>
                  <td><a href="{{ url('editerEtudiant/'.$stu->id)}}" class="btn btn-primary">Editer</a> | <a href="{{ url('deleteEtudiant/'.$stu->id)}}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');" class="btn btn-danger deleteUser">Supprimer</a></td>

              </tr>
                @endforeach
          
          </tbody>
          
      </table>
      
          </div>
        </div>
    </div>
  </div>


@endsection