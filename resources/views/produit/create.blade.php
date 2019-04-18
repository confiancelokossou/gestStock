<div class="modal fade" tabindex="-1" id="modal-createProduit" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="titre">Nouveau produit</h4>
            </div>
            <form id="addProduitForm">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row">
                        <div class="box-body">
                            <div class="col col-sm-6">
                                <div class="form-group">
                                    <label for="libelle">Libellé</label>
                                    <input type="text" class="form-control" name="addLibelle" >
                                </div>
                                <div class="form-group">
                                    <label for="addPrix">Prix:</label>
                                    <input type="number" class="form-control" name="addPrix">
                                </div>
                                <div class="form-group">
                                        <label for="addQte">Quantité disponible:</label>
                                        <input type="number" class="form-control" name="addQte" >
                                </div>
                                <div class="form-group">
                                    <label>Ajouter une noubelle Catégorie</label>
                                    <input type="checkbox" id="nouvelleCategorie" name="nouvelleCategorie">
                                </div>
                            </div>
                            <div class="col col-sm-6">
                                <div class="form-group">
                                    <label  for="addSeuilMinimal">Seuil minimal:</label>
                                    <input type="number" class="form-control" name="addStockMinimal"  >
                                </div>
                                <div class="form-group">
                                    <label for="addSeuilAlerte">Seuil alerte:</label>
                                    <input type="number" class="form-control" name="addSeuilAlerte" >
                                </div>
                                <div class="form-group" id="nv">
                                        <label for="nvCategorie">Nouvelle catégorie:</label>
                                        <input type="text" class="form-control" name="nvCategorie" >
                                </div>
                                <div class="form-group" id="selectCategorie">
                                    <label for="categorie">Catégorie:</label>
                                    <select class="form-control select2" style="width: 100%;" id="categorie" name="categorie" >
                                        @foreach($categorie as $cat)
                                            <option value="{{$cat->id}}">{{$cat->libelle}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-primary">Sauvegarder</button>
                        </div>
                     </div>
                </div>
            </form>
        </div>
    </div>
</div>




