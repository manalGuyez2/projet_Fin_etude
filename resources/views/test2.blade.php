<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  


<div class="container">
  <div class="modal fade" id="ajoutcours" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
       
       
    <form action="" method="POST" enctype="multipart/form-data">
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
  
     
             <label class="form-lebel" for="IdModel" >choisir module nom:</label>
   
             <select id="IdModel" class="form-control" value="{{old('IdModel')}}"  name="IdModel">
               
                    
               
                 <option value="">hell</option>
            
          
             
               </select>
      
      
        
        </div>
        <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
          <button type="submit"  class="btn btn-danger ">envoyer</button>
        </div>
    </form>
      </div>
    </div>
  </div>
  <h2>Dynamic Tabs</h2>
  <p>To make the tabs toggleable, add the data-toggle="tab" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul>

  <div class="tab-content">
   
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <div class="details">
        
        <div class="recentOrders">
          <h2 class="">
            <span>Liste de cours</span>
        </h2>
                <a  class="btn btn-success" ><i class="fa fa-plus"data-toggle="modal" data-target="#ajoutcours"></i></a>
              
             </div>
      
            </div>    
    </div>

    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

</body>
</html>
