@extends('test')
@section('exam')
<div class="cont content-3">
        
    <li>    
     <div class="partie-1">
    <!------LIST------>
    <div class="details">
    
      <div class="recentOrders">
        <h2 class="">
          <span>Liste de Examen </span>
      </h2>
              <a  class="btn btn-success" style="float:right"><i class="fa fa-plus"data-toggle="modal" data-target="#ajoutExam"></i></a>
            
           </div>
    
          </div>
       
    <br>
    
    
    
    <div class="x_content">
        <div class="row">
            <div class="col-sm-12">
              <div class="card-box table-responsive">
     
      <table id="datatable" class="table table-striped table-bordered" style="width:100%">
        <thead>
        
                  <tr>
                      <td>NOM</td>
                      <td>PDF de Examen </td>
                      <td>date</td>
                      <td></td>
    
                  </tr>
              </thead>
    
              <tbody>
                  
                      
                 
                  <tr>
                     
                      
                      <td>chapitre1</td>
                      <td>12365</td>
                      <td>02/25/2023</td>
                      
                      <td><a href="" class="btn btn-primary">Editer</a> | <button type="button" class="btn btn-danger deleteEtudiantBtn " value="" data-toggle="modal" data-target="#deleteModal">Supprimer</button>
                        {{--<a href="{{ url('deleteEtudiant/'.$stu->id)}}"  class="btn btn-danger deleteUser">Supprimer</a>--}}</td>
    
                  </tr>
                   
              
              </tbody>
              
          </table>       
   </div>

   </li>
</ul>
</div>
@endsection