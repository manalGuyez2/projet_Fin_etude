<!DOCTYPE html>
<html lang="fr">
    <head>
        <script src="js/main.js"></script>
    
    
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/jquery.fancybox.min.css">
        <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
        <script src="js/jquery-ui.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/3.6.0/jquery.min.js" ></script>
        <link rel="stylesheet" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/start/jquery-ui.css" >
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" ></script>
    
        <!-- Bootstrap -->
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- /////NProgress -->
        <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
        

    </head>
    <body>

        

        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
            <form action="" method="POST">
                @csrf
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Etes-vous sùre ?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    
                  </button>
                </div>
                <div class="modal-body">
                    <label for="myfile">Select a file:</label>
                    <input type="file" id="myfile" name="myfile">
                </div>
                <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                  <button type="submit"  class="btn btn-danger ">envoyer</button>
                </div>
            </form>
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-danger deleteEtudiantBtn " data-toggle="modal" data-target="#deleteModal">Supprimer</button>


  <script src="js/bootstrap.min.css"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>
    </body>
</html>