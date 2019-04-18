<div class="modal fade" tabindex="-1" id="modal-createCommande" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Nouveau client</h4>
                </div>
            <div class="modal-body">
            <div class="row">
                <form id="commandeForm">
                    {{ csrf_field() }}
                    <div class="col col-lg-3">
                        <div class="form-group ">
                            <label for="libelle" class="col-form-label">Description:</label>
                            <input type="text" class="form-control" id="libelle" name="libelle">
                        </div>
                        <div class="form-group ">
                            <label for="date" class="col-form-label">Date:</label>
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                        <div class="form-group ">
                            <label for="id_fournisseur" class="col-form-label">Fournisseur:</label>
                            <select class="form-control select2" style="width: 100%;" id="id_fournisseur" name="id_fournisseur" >
                                @foreach($fournisseur as $fourni)
                                    <option value="{{$fourni->id}}">{{$fourni->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-primary" id="btnEnregistrerCmd">Enregistrer</button>
                        </div>
                    </div>
                    <div class="col col-lg-6">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Produit</th>
                                    <th scope="col">Quantité</th>
                                    <th scope="col">Montant</th>
                                </tr>
                            </thead>
                            <tbody id="addLineCmder">

                            </tbody>
                        </table>
                    </div>
                </form>


                            <!--formulaire pour la commande-->
        <div class="col col col-lg-3">
                <form>
                    <div class="form-group ">
                            <label class="col-form-label">Produit:</label>
                            <select class="form-control select2" style="width: 100%;" id="iajoutlib" name="iajoutlib" >
                                @foreach($produit as $produits)
                                    <option value="{{$produits->id}}">{{$produits->libelle}}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="form-group ">
                        <label for="prix" class="col-form-label">Prix:</label>
                        <input type="number" class="form-control" id="iajoutprix" name="iajoutprix">
                    </div>
                    <div class="form-group ">
                        <label for="quantite" class="col-form-label">Quantité:</label>
                        <input type="number" class="form-control" id="iajoutqte" name="iajoutqte">
                    </div>
                    <div class="form-group modal-footer">
                            <button type="button" id="addItemCmder" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                            <button type="button"  class="btn btn-danger deltrcmder"><i class="fa fa-times fa-xs"></i></button>
                    </div>
                    </form>
                    </div>
            </div >
    </div>
        <div class="modal-footer">
        </div>
          </div>
     </div>
</div>




