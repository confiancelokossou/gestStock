<div class="modal fade" tabindex="-1" id="modal-editProduit" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="titre">Modification des informations du produit</h4>
                </div>
                <form id="editProduitForm">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="modal-body">
                        <div class="row">
                            <div class="box-body">
                                <div class="col col-sm-6">
                                    <input type="hidden" class="form-control" name="editId" id="editId" >
                                    <div class="form-group">
                                        <label for="libelle">Libellé</label>
                                        <input type="text" class="form-control" name="editLibelle" id="editLibelle" >
                                    </div>
                                    <div class="form-group">
                                        <label for="addPrix">Prix:</label>
                                        <input type="number" class="form-control" name="editPrix" id="editPrix">
                                    </div>
                                    <div class="form-group">
                                            <label for="addQte">Quantité disponible:</label>
                                            <input type="number" class="form-control" name="editQte" id="editQte">
                                    </div>
                                </div>
                                <div class="col col-sm-6">
                                    <div class="form-group">
                                        <label  for="addSeuilMinimal">Seuil minimal:</label>
                                        <input type="number" class="form-control" name="editStockMinimal" id="editStockMinimal" >
                                    </div>
                                    <div class="form-group">
                                        <label for="addSeuilAlerte">Seuil alerte:</label>
                                        <input type="number" class="form-control" name="editSeuilAlerte" id="editSeuilAlerte" >
                                    </div>
                                    <div class="form-group" id="selectCategorie">
                                        <label for="categorie">Catégorie:</label>
                                        <select class="form-control" id="categorie" name="categorie" >
                                            @foreach($categorie as $cat)
                                                <option value="{{$cat->id}}">{{$cat->libelle}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                 </div>
                              </div>
                            </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Annuler</button>
                                    <button type="submit" class="btn btn-primary">Modifier</button>
                                </div>
                         </div>
                    </div>
                </form>
          </div>
     </div>
    </div>




