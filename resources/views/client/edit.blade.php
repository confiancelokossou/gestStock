<div class="modal fade" tabindex="-1" id="modal-editClient" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Modification des informations du client </h4>
                </div>
                <form id="editClientForm">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                    <div class="modal-body">
                        <div class="row">
                            <div class="box-body">
                                <div class="col col-sm-6">
                                    <input type="hidden" class="form-control" id="idClient" name="idClient">
                                    <div class="form-group">
                                        <label for="nomClient">Nom</label>
                                        <input type="text" class="form-control" id="nomClient" name="nomClient">
                                    </div>
                                    <div class="form-group">
                                        <label for="adresseClient">Adresse:</label>
                                        <input type="text" class="form-control" name="adresseClient" id="adresseClient">
                                    </div>
                                    <div class="form-group">
                                        <label for="villeClient">Ville:</label>
                                        <input type="text" class="form-control" name="villeClient" id="villeClient">
                                    </div>
                                </div>
                                <div class="col col-sm-6">
                                    @include('layouts.select')
                                    <div class="form-group">
                                        <label  for="mailClient">Adresse Mail:</label>
                                        <input type="email" class="form-control" name="mailClient" id="mailClient">
                                    </div>
                                    <div class="form-group">
                                        <label for="telephoneClient">Téléphone:</label>
                                        <input type="text" class="form-control" name="telephoneClient" id="telephoneClient">
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




