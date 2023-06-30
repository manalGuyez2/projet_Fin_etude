<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script  src=//code.jquery.com/jquery-3.5.1.slim.min.js integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin=anonymous></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'></script>

    <title>Document</title>
</head>
<body style="background-color: black">
    


    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              
            
    <div class="custom-breadcrumns border-bottom">
      <div class="container">
  
        
       
  
        <h2 class="mb-0">Modifier Td</h2>
      </div>
    </div>
            </div>
          </div>
        </div>
        
    </div>
    <div class="site-section">
<div class="container">
    <div class="row">
        <div class="row justify-content-center">
                <div class="col-md-8">
                    @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
                    <div class="card">
                        <div class="card-header">{{ __('Modifier Cours') }}</div>
    
                        <form action="{{ url('update-td/'.$td->id) }}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="modal-body p-4 bg-light">
                              <div class="row">
                                <div class="col-lg">
                                  <label for="nomTd">Nom Td</label>
                                  <input type="text" name="nomTd" id="nomTd" value="{{$td->nomTd}}" class="form-control"  required>
                                </div>
                               
                              </div>
                              
                              
                              <div class="mt-2" id="tdpdf">
                                <label for="">fichier Td</label>
                                <input type="file" name="tdpdf" class="form-control">
                                <a href="{{ url('uploads/tds/'.$td->tdpdf) }}" ></a>
                           
                              </div>
                            </div>
                            <div class="modal-footer">
                              <a  href="{{ url('test') }}" class="btn btn-secondary" >Annuler</a>
                              <button type="submit"  class="btn btn-success">Modifier</button>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>
</body>
</html>