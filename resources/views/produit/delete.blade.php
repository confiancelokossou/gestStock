<div class="modal modal-warning fade" id="modalDeleteProduit">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Suppression du produit</h4>
            </div>
        <form id="deleteProduitForm">
            {{ csrf_field() }}
            {{ method_field('delete')}}
            <div class="modal-body">
              <input type="hidden" class="form-control" id="deleteId" name="deleteid">
              <h4>Êtes vous sûr de vouloir supprimer cet enregistrement ?</h4>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Annuler</button>
              <button type="submit" class="btn btn-outline">Confirmer</button>
            </div>
        </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<!-- /.modal -->
