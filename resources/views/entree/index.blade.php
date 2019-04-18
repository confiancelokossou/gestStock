@extends('back.layout')
@section('content')
    <div class="box"  id="data">
        <div class="box-header">
            <h3 class="box-title">Liste des commandes</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body" >
            <button type="button" class="btn btn-primary" title="Passer une nouvelle commande" data-toggle="modal" data-target="#modal-createCommande">
                <i class="fa fa-plus"></i>
            </button>
            <table id="tablecommande" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Description</th>
                        <th>Date de la commande</th>
                        <th>Fournisseur</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($commande as $com)
                        <tr>
                            <td>{{ $$com->id }}</td>
                            <td>{{$$com->libelle}}</td>
                            <td>{{$$com->date}}</td>
                            <td>{{$$com->fournisseur->nom}}</td>
                            <td>
                                <a href="#" class="btn btn-danger detailCommande">Détail</a>
                                <a href="#" class="btn btn-danger deleteComande" title="Supprimer cet enregistrement"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('entree.create')
    @include('entree.detail')
    @include('entree.delete')
@endsection
