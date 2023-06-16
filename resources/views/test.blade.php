<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <title>Modal Example</title>
</head>

<body>
   

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
        <form  method="POST">
            @csrf
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Etes-vous sùre ?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                
              </button>
            </div>
            <div class="modal-body">
              <input type="hidden"  name="etudiant_delete_id" id="id">
              <h2> Sélectionez "supprimer" ci-dessous si vous souhaitez supprimer ce etudiant </h2>
            </div>
            <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
              <button type="submit"  class="btn btn-danger ">Supprimer</button>
            </div>
        </form>
          </div>
        </div>
      </div>


       <button type="button" class="btn btn-danger deleteEtudiantBtn " data-toggle="modal" data-target="#deleteModal">Supprimer</button>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
