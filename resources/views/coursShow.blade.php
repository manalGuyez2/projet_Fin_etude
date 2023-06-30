@php( $dataCours = \App\Models\Cours::all() ) 
@php( $modules = \App\Models\Module::all() ) 
@php( $dataTDs = \App\Models\Td::all() )
@php( $dataExams = \App\Models\Exam::all() )
@extends('test')
@section('coursShow')
<div class="site-section">
    <div class="container">
      <div class="row">
     
        <h4 _ngcontent-oyd-c71="" class="page__title-3">Conception Orientée Objets(UML)</h4>
        <div class="col-8">
          
        <div class="wraper ">
          
          
          <input type="radio" name="slider" checked id="home">
          <input type="radio" name="slider" id="blog">
          <input type="radio" name="slider" id="code">
          <nav>
        <label for="home" class="home"><i class="fa fa-book"></i>Cours          
         </label>
        <label for="blog" class="blog"><i class="fas fa-blog"></i>TD    
        </label>
        <label for="code" class="code"><i class="fas fa-code"></i>Examen    
        </label>
        <div class="slider"></div>
      </nav>
      <section>
<div class="cont content-1">
       <!--   <div class="title">This is a Home content</div>-->
          
             
 <div class="partie-1">
        
        
        <!------LIST------>
        <div class="details">
        
          <div class="recentOrders">
            <h2 class="">
              <span>Liste de cours</span>
          </h2>
                  <a  class="btn btn-success text-light" style="float:right"><i class="fa fa-plus"data-toggle="modal" data-target="#ajoutcours"></i></a>
                
               </div>
        
              </div>
           
        <br>
        
        
        
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
                     @endif
          <table id="datatable" class="table table-striped table-bordered" style="width:100%">
            <thead>
            
                      <tr>
                          <td>Nom</td>
                          <td>cours</td>
                          <td>date</td>
                          <td></td>
        
                      </tr>
                  </thead>
        
                  <tbody>
                    @foreach ($dataCours as $cours)
                    
                     
                      <tr>
                         
                          
                          <td>{{$cours->nomCours}}</td>
                          
                          <td><a {{$cours->courpdf}} ></a></td>
                         
                          <td>{{$cours->updated_at}}</td>
                          <td>
                            <button class="btn btn-primary">Editer</button><button type="button" class="btn btn-danger deleteCoursBtn " value="{{ $cours->id }}" data-toggle="modal" data-target="#deleteCoursModal">Supprimer</button></td>
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
</div>



<!-------------------TD------------------------->
        <div class="cont content-2">
         
                 
                       
                     <div class="partieTd-1">
                    <!------LIST------>
                    <div class="details">
                    
                      <div class="recentOrders">
                        <h2 class="">
                          <span>Liste de TD</span>
                      </h2>
                              <a  class="btn btn-success" style="float:right"><i class="fa fa-plus"data-toggle="modal" data-target="#ajoutTD"></i></a>
                            
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
                                      <td>PDF de TD</td>
                                      <td>date</td>
                                      <td></td>
                    
                                  </tr>
                              </thead>
                    
                              <tbody>
                                  
                                      
                                @foreach ($dataTDs as $td)
                    
                     
                                <tr>
                                   
                                    
                                    <td>{{$td->nomTd}}</td>
                                    <td><a href="uploads/td/{{$td->tdpdf}}" download></a></td>
                                    <td>{{$td->IdModul}}</td>
                                    
                                    
                                      <td><a href="" class="btn btn-primary">Editer</a>  <button type="button" class="btn btn-danger deleteTdBtn " value="{{ $td->id }}" data-toggle="modal" data-target="#deleteTd">Supprimer</button>
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
    </div>

    <!---------------Exam-------------------->
        <div class="cont content-3">
          
              
             <div class="partieExam-1">
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
                          
                              
                        @foreach ($dataExams as $exam)
                    
                     
                        <tr>
                           
                            
                            <td>{{$exam->nomExam}}</td>
                            <td><a href="uploads/td/{{$exam->exampdf}}" download></a></td>
                            <td>{{$exam->IdModul}}</td>
                            
                             
                              <td><a href="" class="btn btn-primary">Editer</a>  <button type="button" class="btn btn-danger deleteExamBtn" value="{{ $td->id }}" data-toggle="modal" data-target="#deleteExam">Supprimer</button>
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
        </div>    
      </section>
    </div>
    </div>
    <div class="col-4">
      <img src="images/uml1.png" class="img-fluid" alt="Sample image">
    </div>
    
      </div>
    </div>
</div>

<script>
  $(document).ready(function (){
    $('.deleteCoursBtn').click(function (e){
  //  $(document).on('click','.deleteCoursBtn',function(e){
      e.preventDefault();
   
    

    var id = $(this).val();
    $('#id').val(id);

    $('#deleteCoursModal').modal('show');
  });
});
</script>

  <!--<script>
    $(document).on('click', '.updCours' ,function (){
  
      var _this = $(this).parents('tr');
  $('#u_nom').val(_this.find('.nomCours').text());
  $('#u_file').val(_this.find('.courpdf').text());
  $('#u_idModule').val(_this.find('.IdModel').text());
     
  });
  </script>

  <script>
   
   $(document).ready(function (){
    
   $(document).on('click','.updateCoursBtn',function(e){
    
   
    

    var id = $(this).val();
    //alert(id);
    $('#updateCours').modal('show');
    
    
       $.ajax({
       type: "GET",
       url: "/editerCours/"+id,
      
       success: function (response){
               
               $('#nomCours').val(response.nomCours);
               $('#courpdf').val(response.courpdf);
               $('#IdModel').val(response.IdModel);
               $('#id').val(id);
       }
       });
  });
});

    </script>

    <script >
       
      $(document).ready(function () {
          
          $('body').on('click', '#updateCours', function () {
            var userURL = $(this).data('url');
            $.get(userURL, function (data) {
                $('#userShowModal').modal('show');
                $('#nomCours').text(data.nomCours);
                $('#courpdf').text(data.courpdf);
                $('#IdModel').text(data.IdModel);
            })
         });
          
      });
     


//------------td delete----------

  $(document).ready(function (){
    $('.deleteTdBtn').click(function (e){
  //  $(document).on('click','.deleteEtudiantBtn',function(e){
      e.preventDefault();
   
    

    var id = $(this).val();
    $('#id').val(id);

    $('#deleteTd').modal('show');
  });
});
//----------------delete exam
  $(document).ready(function (){
    $('.deleteExamBtn').click(function (e){
  //  $(document).on('click','.deleteEtudiantBtn',function(e){
      e.preventDefault();
   
    

    var id = $(this).val();
    $('#id').val(id);

    $('#deleteEXam').modal('show');
  });
});
</script>
----------------->

@endsection