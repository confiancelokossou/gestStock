@extends('back.layout')
@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Liste des produits disponibles</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <button type="button" class="btn btn-primary" title="Ajouter un nouveau produit" data-toggle="modal" data-target="#modal-createProduit">
                    <i class="fa fa-plus"></i>
            </button>
            <table id="tableProduit" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Libellé</th>
                        <th>Quantité disponible</th>
                        <th>Prix</th>
                        <th>Valeur du stock</th>
                        <th>Stock minimal</th>
                        <th>Seuil alerte</th>
                        <th>Catégorie</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($produit as $prod)
                        <tr>
                            <td>{{ $prod->id }}</td>
                            <td>{{$prod->libelle}}</td>
                            <td>{{$prod->quantiteDisp}}</td>
                            <td>{{$prod->Prix}}</td>
                            <td>{{$prod->valeurStock}}</td>
                            <td>{{$prod->stockMin}}</td>
                            <td>{{$prod->seuilAlerte}}</td>
                            <td>{{$prod->categorie->libelle}}</td>
                            <td>
                                <a href="#" class="btn btn-warning editProduit" title="Modifier cet enregistrement"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-danger deleteProduit" title="Supprimer cet enregistrement"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('produit.create')
    @include('produit.edit')
    @include('produit.delete')
@endsection
