<div class="modal fade" tabindex="-1" id="modal-editFournisseur" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Modification des informations du fournisseur</h4>
                </div>
                <form id="editFourform">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                    <div class="modal-body">
                        <div class="row">
                            <div class="box-body">
                                <div class="col col-sm-6">
                                    <input type="hidden" class="form-control" id="id" name="id">
                                    <div class="form-group">
                                        <label for="nom">Nom</label>
                                        <input type="text" class="form-control" id="nom" name="nom">
                                    </div>
                                    <div class="form-group">
                                        <label for="adresse">Adresse:</label>
                                        <input type="text" class="form-control" name="adresse" id="adresse">
                                    </div>
                                    <div class="form-group">
                                        <label for="ville">Ville:</label>
                                        <input type="text" class="form-control" name="ville" id="ville">
                                    </div>
                                </div>
                                <div class="col col-sm-6">
                                    @include('layouts.select')
                                    <div class="form-group">
                                        <label  for="adresseMail">Adresse Mail:</label>
                                        <input type="email" class="form-control" name="mail" id="mail">
                                    </div>
                                    <div class="form-group">
                                        <label for="telephone">Téléphone:</label>
                                        <input type="text" class="form-control" name="telephone" id="telephone">
                                    </div>
                                 </div>
                              </div>
                             </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Annuler</button>
                                    <button type="submit" class="btn btn-primary">modifier</button>
                                </div>
                     </div>
                 </form>
          </div>
     </div>
</div>




